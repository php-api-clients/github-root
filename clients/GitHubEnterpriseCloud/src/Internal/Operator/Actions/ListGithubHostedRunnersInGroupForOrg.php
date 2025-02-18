<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Actions;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListGithubHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListGithubHostedRunnersInGroupForOrg
{
    public const OPERATION_ID    = 'actions/list-github-hosted-runners-in-group-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}/hosted-runners';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Actions\RunnerGroups\RunnerGroupId\HostedRunners $hydrator)
    {
    }

    /** @return */
    public function call(string $org, int $runnerGroupId, int $perPage = 30, int $page = 1): Ok
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Actions\ListGithubHostedRunnersInGroupForOrg($this->responseSchemaValidator, $this->hydrator, $org, $runnerGroupId, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Ok {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
