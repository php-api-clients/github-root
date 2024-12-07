<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\LicenseSimple;
use ApiClients\Client\GitHub\Schema\RepoSearchResultItem\Permissions;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property string $fullName
 * @property ?SimpleUser $owner
 * @property bool $private
 * @property string $htmlUrl
 * @property ?string $description
 * @property bool $fork
 * @property string $url
 * @property string $createdAt
 * @property string $updatedAt
 * @property string $pushedAt
 * @property ?string $homepage
 * @property int $size
 * @property int $stargazersCount
 * @property int $watchersCount
 * @property ?string $language
 * @property int $forksCount
 * @property int $openIssuesCount
 * @property ?string $masterBranch
 * @property string $defaultBranch
 * @property int|float $score
 * @property string $forksUrl
 * @property string $keysUrl
 * @property string $collaboratorsUrl
 * @property string $teamsUrl
 * @property string $hooksUrl
 * @property string $issueEventsUrl
 * @property string $eventsUrl
 * @property string $assigneesUrl
 * @property string $branchesUrl
 * @property string $tagsUrl
 * @property string $blobsUrl
 * @property string $gitTagsUrl
 * @property string $gitRefsUrl
 * @property string $treesUrl
 * @property string $statusesUrl
 * @property string $languagesUrl
 * @property string $stargazersUrl
 * @property string $contributorsUrl
 * @property string $subscribersUrl
 * @property string $subscriptionUrl
 * @property string $commitsUrl
 * @property string $gitCommitsUrl
 * @property string $commentsUrl
 * @property string $issueCommentUrl
 * @property string $contentsUrl
 * @property string $compareUrl
 * @property string $mergesUrl
 * @property string $archiveUrl
 * @property string $downloadsUrl
 * @property string $issuesUrl
 * @property string $pullsUrl
 * @property string $milestonesUrl
 * @property string $notificationsUrl
 * @property string $labelsUrl
 * @property string $releasesUrl
 * @property string $deploymentsUrl
 * @property string $gitUrl
 * @property string $sshUrl
 * @property string $cloneUrl
 * @property string $svnUrl
 * @property int $forks
 * @property int $openIssues
 * @property int $watchers
 * @property ?array $topics
 * @property ?string $mirrorUrl
 * @property bool $hasIssues
 * @property bool $hasProjects
 * @property bool $hasPages
 * @property bool $hasWiki
 * @property bool $hasDownloads
 * @property ?bool $hasDiscussions
 * @property bool $archived
 * @property bool $disabled
 * @property ?string $visibility
 * @property ?LicenseSimple $license
 * @property ?Permissions $permissions
 * @property ?array $textMatches
 * @property ?string $tempCloneToken
 * @property ?bool $allowMergeCommit
 * @property ?bool $allowSquashMerge
 * @property ?bool $allowRebaseMerge
 * @property ?bool $allowAutoMerge
 * @property ?bool $deleteBranchOnMerge
 * @property ?bool $allowForking
 * @property ?bool $isTemplate
 * @property ?bool $webCommitSignoffRequired
 */
interface RepoSearchResultItem
{
}
