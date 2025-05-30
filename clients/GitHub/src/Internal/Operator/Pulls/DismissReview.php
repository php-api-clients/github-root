<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Pulls;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class DismissReview
{
    public const OPERATION_ID    = 'pulls/dismiss-review';
    public const OPERATION_MATCH = 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Dismissals $hydrator)
    {
    }

    /** @return */
    public function call(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Pulls\DismissReview($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pullNumber, $reviewId);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestReview {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
