<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Pulls;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\PullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class DeletePendingReview
{
    public const OPERATION_ID    = 'pulls/delete-pending-review';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PullRequestReview>
     **/
    public function call(string $owner, string $repo, int $pullNumber, int $reviewId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Pulls\DeletePendingReview($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $pullNumber, $reviewId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestReview {
            return $operation->createResponse($response);
        });
    }
}
