<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Actions;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class CreateSelfHostedRunnerGroupForOrg
{
    public const OPERATION_ID    = 'actions/create-self-hosted-runner-group-for-org';
    public const OPERATION_MATCH = 'POST /orgs/{org}/actions/runner-groups';
    private const METHOD         = 'POST';
    private const PATH           = '/orgs/{org}/actions/runner-groups';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Orgs\Org\Actions\RunnerGroups $hydrator)
    {
    }

    /**
     * @return PromiseInterface<RunnerGroupsOrg>
     **/
    public function call(string $org, array $params): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Actions\CreateSelfHostedRunnerGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
        $request   = $operation->createRequest($params);

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): RunnerGroupsOrg {
            return $operation->createResponse($response);
        });
    }
}
