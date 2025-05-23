<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Operator\Reactions;

use ApiClients\Client\GitHubEnterpriseCloud\Internal;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Reaction;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class CreateForTeamDiscussionCommentLegacy
{
    public const OPERATION_ID    = 'reactions/create-for-team-discussion-comment-legacy';
    public const OPERATION_MATCH = 'POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrator\Operation\Teams\TeamId\Discussions\DiscussionNumber\Comments\CommentNumber\Reactions $hydrator)
    {
    }

    /** @return */
    public function call(int $teamId, int $discussionNumber, int $commentNumber, array $params): Reaction
    {
        $operation = new \ApiClients\Client\GitHubEnterpriseCloud\Internal\Operation\Reactions\CreateForTeamDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $teamId, $discussionNumber, $commentNumber);
        $request   = $operation->createRequest($params);
        $result    = await($this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(static function (ResponseInterface $response) use ($operation): Reaction {
            return $operation->createResponse($response);
        }));
        if ($result instanceof Observable) {
            $result = awaitObservable($result);
        }

        return $result;
    }
}
