<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Pulls;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\PullRequestSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class RemoveRequestedReviewers
{
    public const OPERATION_ID    = 'pulls/remove-requested-reviewers';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $pullNumber, array $params): PullRequestSimple
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Pulls\RemoveRequestedReviewers($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pullNumber);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestSimple {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
