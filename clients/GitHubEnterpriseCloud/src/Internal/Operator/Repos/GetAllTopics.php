<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Repos;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Topic;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class GetAllTopics
{
    public const OPERATION_ID    = 'repos/get-all-topics';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/topics';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Topics $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $page = 1, int $perPage = 30): Topic
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Repos\GetAllTopics($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $page, $perPage);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Topic {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
