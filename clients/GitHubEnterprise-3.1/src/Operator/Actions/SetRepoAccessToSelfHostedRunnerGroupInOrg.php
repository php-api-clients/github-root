<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operator\Actions;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class SetRepoAccessToSelfHostedRunnerGroupInOrg
{
    public const OPERATION_ID    = 'actions/set-repo-access-to-self-hosted-runner-group-in-org';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/actions/runner-groups/{runner_group_id}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator)
    {
    }

    /** @return array{code: int} */
    public function call(string $org, int $runnerGroupId, array $params): array
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg($this->requestSchemaValidator, $org, $runnerGroupId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
