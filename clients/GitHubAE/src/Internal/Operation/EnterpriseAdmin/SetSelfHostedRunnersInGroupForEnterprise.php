<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Operation\EnterpriseAdmin;

use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function json_encode;
use function str_replace;

final class SetSelfHostedRunnersInGroupForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/set-self-hosted-runners-in-group-for-enterprise';
    public const OPERATION_MATCH = 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners';
    /**The slug version of the enterprise name. You can also substitute this value with the enterprise id. **/
    private string $enterprise;
    /**Unique identifier of the self-hosted runner group. **/
    private int $runnerGroupId;

    public function __construct(private readonly SchemaValidator $requestSchemaValidator, string $enterprise, int $runnerGroupId)
    {
        $this->enterprise    = $enterprise;
        $this->runnerGroupId = $runnerGroupId;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request('PUT', str_replace(['{enterprise}', '{runner_group_id}'], [$this->enterprise, $this->runnerGroupId], '/enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners'), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): WithoutBody
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return new WithoutBody(204, []);
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
