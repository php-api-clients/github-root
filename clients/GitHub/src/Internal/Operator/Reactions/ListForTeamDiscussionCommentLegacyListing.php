<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Reactions;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListForTeamDiscussionCommentLegacyListing
{
    public const OPERATION_ID    = 'reactions/list-for-team-discussion-comment-legacy';
    public const OPERATION_MATCH = 'LIST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions $hydrator)
    {
    }

    /** @return Observable<Schema\Reaction> */
    public function call(int $teamId, int $discussionNumber, int $commentNumber, string $content, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Reactions\ListForTeamDiscussionCommentLegacyListing($this->responseSchemaValidator, $this->hydrator, $teamId, $discussionNumber, $commentNumber, $content, $perPage, $page);
        $request   = $operation->createRequest();
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Observable {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
