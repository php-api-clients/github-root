<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Codespaces;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListSelectedReposForOrgSecret
{
    public const OPERATION_ID    = 'codespaces/list-selected-repos-for-org-secret';
    public const OPERATION_MATCH = 'GET /orgs/{org}/codespaces/secrets/{secret_name}/repositories';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Orgs\Org\Codespaces\Secrets\SecretName\Repositories $hydrator)
    {
    }

    /** @return */
    public function call(string $org, string $secretName, int $page = 1, int $perPage = 30): Json
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Codespaces\ListSelectedReposForOrgSecret($this->responseSchemaValidator, $this->hydrator, $org, $secretName, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Json {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
