<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Codespaces;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;

final class GetExportDetailsForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-export-details-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/{codespace_name}/exports/{export_id}';
    /**The name of the codespace. **/
    private string $codespaceName;
    /**The ID of the export operation, or `latest`. Currently only `latest` is currently supported. **/
    private string $exportId;

    public function __construct(private SchemaValidator $responseSchemaValidator, private ExportId $hydrator, string $codespaceName, string $exportId)
    {
        $this->codespaceName           = $codespaceName;
        $this->exportId                = $exportId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', (string) (new UriTemplate('/user/codespaces/{codespace_name}/exports/{export_id}'))->expand(['codespace_name' => $this->codespaceName, 'export_id' => $this->exportId]));
    }

    public function createResponse(ResponseInterface $response): CodespaceExportDetails
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(CodespaceExportDetails::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(CodespaceExportDetails::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(BasicError::SCHEMA_JSON, Schema::class));

                        throw new \ApiClients\Client\GitHub\Error\BasicError(404, $this->hydrator->hydrateObject(BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
