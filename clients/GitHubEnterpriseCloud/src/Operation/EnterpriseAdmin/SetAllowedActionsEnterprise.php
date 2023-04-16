<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class SetAllowedActionsEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/set-allowed-actions-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/permissions/selected-actions';
    private const METHOD         = 'PUT';
    private const PATH           = '/enterprises/{enterprise}/actions/permissions/selected-actions';
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
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\SelectedActions::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{enterprise}'], [$this->enterprise], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
