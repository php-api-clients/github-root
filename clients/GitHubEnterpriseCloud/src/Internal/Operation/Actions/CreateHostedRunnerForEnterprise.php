<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Actions;

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
use function json_encode;
use function str_replace;

final class CreateHostedRunnerForEnterprise
{
    public const OPERATION_ID    = 'actions/create-hosted-runner-for-enterprise';
    public const OPERATION_MATCH = 'POST /enterprises/{enterprise}/actions/hosted-runners';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Enterprises\Enterprise\Actions\HostedRunners $hydrator, string $enterprise)
    {
        $this->enterprise = $enterprise;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\CreateHostedRunnerForEnterprise\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('POST', str_replace(['{enterprise}'], [$this->enterprise], '/enterprises/{enterprise}/actions/hosted-runners'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): Schema\ActionsHostedRunner
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
                    case 201:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ActionsHostedRunner::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\ActionsHostedRunner::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
