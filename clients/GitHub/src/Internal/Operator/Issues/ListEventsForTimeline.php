<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operator\Issues;

use ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\Issues\IssueNumber\Timeline;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;
use Rx\Observable;

use function React\Async\await;
use function WyriHaximus\React\awaitObservable;

final readonly class ListEventsForTimeline
{
    public const OPERATION_ID    = 'issues/list-events-for-timeline';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/issues/{issue_number}/timeline';

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $responseSchemaValidator, private Timeline $hydrator)
    {
    }

    /** @return Observable<LabeledIssueEvent|UnlabeledIssueEvent|MilestonedIssueEvent|DemilestonedIssueEvent|RenamedIssueEvent|ReviewRequestedIssueEvent|ReviewRequestRemovedIssueEvent|ReviewDismissedIssueEvent|LockedIssueEvent|AddedToProjectIssueEvent|MovedColumnInProjectIssueEvent|RemovedFromProjectIssueEvent|ConvertedNoteToIssueIssueEvent|TimelineCommentEvent|TimelineCrossReferencedEvent|TimelineCommittedEvent|TimelineReviewedEvent|TimelineLineCommentedEvent|TimelineCommitCommentedEvent|TimelineAssignedIssueEvent|TimelineUnassignedIssueEvent|StateChangeIssueEvent> */
    public function call(string $owner, string $repo, int $issueNumber, int $perPage = 30, int $page = 1): iterable
    {
        $operation = new \ApiClients\Client\GitHub\Internal\Operation\Issues\ListEventsForTimeline($this->responseSchemaValidator, $this->hydrator, $owner, $repo, $issueNumber, $perPage, $page);
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
