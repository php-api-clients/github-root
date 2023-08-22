<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Operator\Reactions;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForIssueComment
{
    public const OPERATION_ID    = 'reactions/list-for-issue-comment';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/issues/comments/{comment_id}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Hydrator\Operation\Repos\Owner\Repo\Issues\Comments\CommentId\Reactions $hydrator)
    {
    }

    /** @return Observable<Schema\Reaction> */
    public function call(string $owner, string $repo, int $commentId, string $content, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Operation\Reactions\ListForIssueComment($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $commentId, $content, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable|array {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
