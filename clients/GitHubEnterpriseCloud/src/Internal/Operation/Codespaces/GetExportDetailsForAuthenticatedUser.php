<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Codespaces;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetExportDetailsForAuthenticatedUser
{
    public const OPERATION_ID    = 'codespaces/get-export-details-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/codespaces/{codespace_name}/exports/{export_id}';
    /**The name of the codespace. **/
    private string $codespaceName;
    /**The ID of the export operation, or `latest`. Currently only `latest` is currently supported. **/
    private string $exportId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\User\Codespaces\CodespaceName\Exports\ExportId $hydrator, string $codespaceName, string $exportId)
    {
        $this->codespaceName = $codespaceName;
        $this->exportId      = $exportId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{codespace_name}', '{export_id}'], [$this->codespaceName, $this->exportId], '/user/codespaces/{codespace_name}/exports/{export_id}'));
    }

    public function createResponse(ResponseInterface $response): Schema\CodespaceExportDetails
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\CodespaceExportDetails::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\CodespaceExportDetails::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
