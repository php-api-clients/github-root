<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\SecretScanning;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;
use function str_replace;

final class PatchSecurityAnalysisSettingsForEnterprise
{
    public const OPERATION_ID    = 'secret-scanning/patch-security-analysis-settings-for-enterprise';
    public const OPERATION_MATCH = 'PATCH /enterprises/{enterprise}/code_security_and_analysis';
    private const METHOD         = 'PATCH';
    private const PATH           = '/enterprises/{enterprise}/code_security_and_analysis';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\CodeSecurityAndAnalysis $hydrator, string $enterprise)
    {
        $this->enterprise = $enterprise;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\SecretScanning\PatchSecurityAnalysisSettingsForEnterprise\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{enterprise}'], [$this->enterprise], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Resource not found
                     **/
                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        switch ($code) {
            /**
             * Action started
             **/
            case 204:
                return ['code' => 204];
            /**
             * The action could not be taken due to an in progress enablement, or a policy is preventing enablement
             **/

            case 422:
                return ['code' => 422];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
