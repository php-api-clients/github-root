<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operation\Actions;

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
use function str_replace;

final class GetSelfHostedRunnerGroupForOrg
{
    public const OPERATION_ID    = 'actions/get-self-hosted-runner-group-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/actions/runner-groups/{runner_group_id}';
    /**Unique identifier of the self-hosted runner group. **/
    private int $runnerGroupId;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId $hydrator, private string $org, int $runnerGroupId)
    {
        $this->runnerGroupId = $runnerGroupId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{runner_group_id}'], [$this->org, $this->runnerGroupId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\RunnerGroupsOrg
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\RunnerGroupsOrg::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\RunnerGroupsOrg::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
