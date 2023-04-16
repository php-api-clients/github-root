<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operation\Actions;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function json_encode;
use function str_replace;

final class SetSelfHostedRunnersInGroupForOrg
{
    public const OPERATION_ID    = 'actions/set-self-hosted-runners-in-group-for-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/runner-groups/{runner_group_id}/runners';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**Unique identifier of the self-hosted runner group.**/
    private int $runnerGroupId;

    public function __construct(SchemaValidator $requestSchemaValidator, string $org, int $runnerGroupId)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->org                    = $org;
        $this->runnerGroupId          = $runnerGroupId;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Actions\SetSelfHostedRunnersInGroupForOrg\Request\Applicationjson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{org}', '{runner_group_id}'], [$this->org, $this->runnerGroupId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
