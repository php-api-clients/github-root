<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookPullRequestReviewEdited\PullRequest\Head;

use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited\PullRequest\Head\Repo\License;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited\PullRequest\Head\Repo\Owner;
use ApiClients\Client\GitHub\Schema\WebhookPullRequestReviewEdited\PullRequest\Head\Repo\Permissions;

/**
 * @property ?bool $allowAutoMerge
 * @property ?bool $allowForking
 * @property ?bool $allowMergeCommit
 * @property ?bool $allowRebaseMerge
 * @property ?bool $allowSquashMerge
 * @property ?bool $allowUpdateBranch
 * @property string $archiveUrl
 * @property bool $archived
 * @property string $assigneesUrl
 * @property string $blobsUrl
 * @property string $branchesUrl
 * @property string $cloneUrl
 * @property string $collaboratorsUrl
 * @property string $commentsUrl
 * @property string $commitsUrl
 * @property string $compareUrl
 * @property string $contentsUrl
 * @property string $contributorsUrl
 * @property int|string $createdAt
 * @property string $defaultBranch
 * @property ?bool $deleteBranchOnMerge
 * @property string $deploymentsUrl
 * @property ?string $description
 * @property ?bool $disabled
 * @property string $downloadsUrl
 * @property string $eventsUrl
 * @property bool $fork
 * @property int $forks
 * @property int $forksCount
 * @property string $forksUrl
 * @property string $fullName
 * @property string $gitCommitsUrl
 * @property string $gitRefsUrl
 * @property string $gitTagsUrl
 * @property string $gitUrl
 * @property bool $hasDownloads
 * @property bool $hasIssues
 * @property bool $hasPages
 * @property bool $hasProjects
 * @property bool $hasWiki
 * @property ?string $homepage
 * @property string $hooksUrl
 * @property string $htmlUrl
 * @property int $id
 * @property ?bool $isTemplate
 * @property string $issueCommentUrl
 * @property string $issueEventsUrl
 * @property string $issuesUrl
 * @property string $keysUrl
 * @property string $labelsUrl
 * @property ?string $language
 * @property string $languagesUrl
 * @property ?License $license
 * @property ?string $masterBranch
 * @property string $mergesUrl
 * @property string $milestonesUrl
 * @property ?string $mirrorUrl
 * @property string $name
 * @property string $nodeId
 * @property string $notificationsUrl
 * @property int $openIssues
 * @property int $openIssuesCount
 * @property ?string $organization
 * @property ?Owner $owner
 * @property ?Permissions $permissions
 * @property bool $private
 * @property ?bool $public
 * @property string $pullsUrl
 * @property int|string $pushedAt
 * @property string $releasesUrl
 * @property ?string $roleName
 * @property int $size
 * @property string $sshUrl
 * @property ?int $stargazers
 * @property int $stargazersCount
 * @property string $stargazersUrl
 * @property string $statusesUrl
 * @property string $subscribersUrl
 * @property string $subscriptionUrl
 * @property string $svnUrl
 * @property string $tagsUrl
 * @property string $teamsUrl
 * @property array $topics
 * @property string $treesUrl
 * @property string $updatedAt
 * @property string $url
 * @property string $visibility
 * @property int $watchers
 * @property int $watchersCount
 */
interface Repo
{
}
