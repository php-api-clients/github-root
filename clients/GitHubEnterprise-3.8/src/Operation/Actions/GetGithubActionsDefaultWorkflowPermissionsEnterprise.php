<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\Actions;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class GetGithubActionsDefaultWorkflowPermissionsEnterprise
{
    public const OPERATION_ID    = 'actions/get-github-actions-default-workflow-permissions-enterprise';
    public const OPERATION_MATCH = 'GET /enterprises/{enterprise}/actions/permissions/workflow';
    private const METHOD         = 'GET';
    private const PATH           = '/enterprises/{enterprise}/actions/permissions/workflow';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Workflow $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Workflow $hydrator, string $enterprise)
    {
        $this->enterprise              = $enterprise;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{enterprise}'], [$this->enterprise], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\ActionsGetDefaultWorkflowPermissions
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Success response
                    **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\ActionsGetDefaultWorkflowPermissions::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\ActionsGetDefaultWorkflowPermissions::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
