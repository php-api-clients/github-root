<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterprise\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class SetSelfHostedRunnersInGroupForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/set-self-hosted-runners-in-group-for-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners';
    private const METHOD         = 'PUT';
    private const PATH           = '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id.**/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;

    public function __construct(SchemaValidator $requestSchemaValidator, string $enterprise, int $runnerGroupId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->enterprise             = $enterprise;
        $this->runnerGroupId          = $runnerGroupId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{enterprise}', '{runner_group_id}'], [$this->enterprise, $this->runnerGroupId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
