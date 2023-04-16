<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class SetSelectedOrganizationsEnabledGithubActionsEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/set-selected-organizations-enabled-github-actions-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/permissions/organizations';
    private const METHOD         = 'PUT';
    private const PATH           = '/enterprises/{enterprise}/actions/permissions/organizations';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;

    public function __construct(SchemaValidator $requestSchemaValidator, string $enterprise)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->enterprise             = $enterprise;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{enterprise}'], [$this->enterprise], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
