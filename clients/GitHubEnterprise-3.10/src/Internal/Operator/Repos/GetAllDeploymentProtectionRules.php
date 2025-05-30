<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAllDeploymentProtectionRules
{
    public const OPERATION_ID    = 'repos/get-all-deployment-protection-rules';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName\DeploymentProtectionRules $hydrator)
    {
    }

    /** @return */
    public function call(string $environmentName, string $repo, string $owner): Ok
    {
        $operation = new \ApiClients\Client\GitHubEnterprise\Internal\Operation\Repos\GetAllDeploymentProtectionRules($this->responseSchemaValidator, $this->hydrator, $environmentName, $repo, $owner);
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
