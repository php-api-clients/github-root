<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Actions;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId;
use ApiClients\Client\GitHub\Schema\Actions\UpdateSelfHostedRunnerGroupForOrg\Request\ApplicationJson;
use ApiClients\Client\GitHub\Schema\RunnerGroupsOrg;
use cebe\openapi\Reader;
use cebe\openapi\spec\Schema;
use League\OpenAPIValidation\Schema\SchemaValidator;
use League\Uri\UriTemplate;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use React\Http\Message\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function json_encode;

final class UpdateSelfHostedRunnerGroupForOrg
{
    public const OPERATION_ID    = 'actions/update-self-hosted-runner-group-for-org';
    public const OPERATION_MATCH = 'PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Unique identifier of the self-hosted runner group. **/
    private int $runnerGroupId;

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private RunnerGroupId $hydrator, string $org, int $runnerGroupId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->org                     = $org;
        $this->runnerGroupId           = $runnerGroupId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(ApplicationJson::SCHEMA_JSON, Schema::class));

        return new Request('PATCH', (string) (new UriTemplate('/orgs/{org}/actions/runner-groups/{runner_group_id}'))->expand(['org' => $this->org, 'runner_group_id' => $this->runnerGroupId]), ['Content-Type' => 'application/json'], json_encode($data));
    }

    public function createResponse(ResponseInterface $response): RunnerGroupsOrg
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(RunnerGroupsOrg::SCHEMA_JSON, Schema::class));

                        return $this->hydrator->hydrateObject(RunnerGroupsOrg::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
