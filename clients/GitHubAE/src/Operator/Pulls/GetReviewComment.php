<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Operator\Pulls;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use React\Promise\PromiseInterface;

final readonly class GetReviewComment
{
    public const OPERATION_ID    = 'pulls/get-review-comment';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/comments/{comment_id}';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId $hydrator)
    {
    }

    /**
     * @return PromiseInterface<PullRequestReviewComment>
     **/
    public function call(string $owner, string $repo, int $commentId): PromiseInterface
    {
        $operation = new \ApiClients\Client\GitHubAE\Operation\Pulls\GetReviewComment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId);
        $request   = $operation->createRequest();

        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): PullRequestReviewComment {
            return $operation->createResponse($response);
        });
    }
}
