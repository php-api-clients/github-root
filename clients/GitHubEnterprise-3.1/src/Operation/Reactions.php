<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Operation;

use ApiClients\Client\GitHubEnterprise\Internal;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Reaction;

final class Reactions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionCommentInOrg()->call($org, $teamSlug, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionCommentInOrgListing(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionCommentInOrgListing()->call($org, $teamSlug, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForTeamDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForTeamDiscussionCommentInOrg()->call($org, $teamSlug, $discussionNumber, $commentNumber, $params);
    }

    /** @return array{code:int} */
    public function deleteForTeamDiscussionComment(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, int $reactionId): array
    {
        return $this->operators->reactions👷DeleteForTeamDiscussionComment()->call($org, $teamSlug, $discussionNumber, $commentNumber, $reactionId);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionInOrg()->call($org, $teamSlug, $discussionNumber, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionInOrgListing(string $org, string $teamSlug, int $discussionNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionInOrgListing()->call($org, $teamSlug, $discussionNumber, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForTeamDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForTeamDiscussionInOrg()->call($org, $teamSlug, $discussionNumber, $params);
    }

    /** @return array{code:int} */
    public function deleteForTeamDiscussion(string $org, string $teamSlug, int $discussionNumber, int $reactionId): array
    {
        return $this->operators->reactions👷DeleteForTeamDiscussion()->call($org, $teamSlug, $discussionNumber, $reactionId);
    }

    /** @return array{code:int} */
    public function deleteLegacy(int $reactionId): array
    {
        return $this->operators->reactions👷DeleteLegacy()->call($reactionId);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForCommitComment(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForCommitComment()->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForCommitCommentListing(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForCommitCommentListing()->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForCommitComment(string $owner, string $repo, int $commentId, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForCommitComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return array{code:int} */
    public function deleteForCommitComment(string $owner, string $repo, int $commentId, int $reactionId): array
    {
        return $this->operators->reactions👷DeleteForCommitComment()->call($owner, $repo, $commentId, $reactionId);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForIssueComment(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForIssueComment()->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForIssueCommentListing(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForIssueCommentListing()->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForIssueComment(string $owner, string $repo, int $commentId, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForIssueComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return array{code:int} */
    public function deleteForIssueComment(string $owner, string $repo, int $commentId, int $reactionId): array
    {
        return $this->operators->reactions👷DeleteForIssueComment()->call($owner, $repo, $commentId, $reactionId);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForIssue(string $owner, string $repo, int $issueNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForIssue()->call($owner, $repo, $issueNumber, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForIssueListing(string $owner, string $repo, int $issueNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForIssueListing()->call($owner, $repo, $issueNumber, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForIssue(string $owner, string $repo, int $issueNumber, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForIssue()->call($owner, $repo, $issueNumber, $params);
    }

    /** @return array{code:int} */
    public function deleteForIssue(string $owner, string $repo, int $issueNumber, int $reactionId): array
    {
        return $this->operators->reactions👷DeleteForIssue()->call($owner, $repo, $issueNumber, $reactionId);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForPullRequestReviewComment(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForPullRequestReviewComment()->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForPullRequestReviewCommentListing(string $owner, string $repo, int $commentId, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForPullRequestReviewCommentListing()->call($owner, $repo, $commentId, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForPullRequestReviewComment(string $owner, string $repo, int $commentId, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForPullRequestReviewComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return array{code:int} */
    public function deleteForPullRequestComment(string $owner, string $repo, int $commentId, int $reactionId): array
    {
        return $this->operators->reactions👷DeleteForPullRequestComment()->call($owner, $repo, $commentId, $reactionId);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionCommentLegacy()->call($teamId, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionCommentLegacyListing(int $teamId, int $discussionNumber, int $commentNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionCommentLegacyListing()->call($teamId, $discussionNumber, $commentNumber, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForTeamDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForTeamDiscussionCommentLegacy()->call($teamId, $discussionNumber, $commentNumber, $params);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionLegacy(int $teamId, int $discussionNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionLegacy()->call($teamId, $discussionNumber, $content, $perPage, $page);
    }

    /** @return iterable<Schema\Reaction> */
    public function listForTeamDiscussionLegacyListing(int $teamId, int $discussionNumber, string $content, int $perPage, int $page): iterable
    {
        return $this->operators->reactions👷ListForTeamDiscussionLegacyListing()->call($teamId, $discussionNumber, $content, $perPage, $page);
    }

    /** @return Schema\Reaction */
    public function createForTeamDiscussionLegacy(int $teamId, int $discussionNumber, array $params): Reaction|array
    {
        return $this->operators->reactions👷CreateForTeamDiscussionLegacy()->call($teamId, $discussionNumber, $params);
    }
}
