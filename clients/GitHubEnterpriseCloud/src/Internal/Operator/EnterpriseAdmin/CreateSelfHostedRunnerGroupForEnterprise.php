<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\EnterpriseAdmin;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateSelfHostedRunnerGroupForEnterprise
{
    public const OPERATION_ID    = 'enterprise-admin/create-self-hosted-runner-group-for-enterprise';
    public const OPERATION_MATCH = 'POST /enterprises/{enterprise}/actions/runner-groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Enterprises\Enterprise\Actions\RunnerGroups $hydrator)
    {
    }

    /** @return */
    public function call(string $enterprise, array $params): RunnerGroupsEnterprise
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $enterprise);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsEnterprise {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
