<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\LicenseSimple;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks\CustomProperties;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks\Permissions;
use ApiClients\Client\GitHub\Schema\RepositoryWebhooks\TemplateRepository;
use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property string $fullName
 * @property ?LicenseSimple $license
 * @property ?SimpleUser $organization
 * @property int $forks
 * @property ?Permissions $permissions
 * @property SimpleUser $owner
 * @property bool $private
 * @property string $htmlUrl
 * @property ?string $description
 * @property bool $fork
 * @property string $url
 * @property string $archiveUrl
 * @property string $assigneesUrl
 * @property string $blobsUrl
 * @property string $branchesUrl
 * @property string $collaboratorsUrl
 * @property string $commentsUrl
 * @property string $commitsUrl
 * @property string $compareUrl
 * @property string $contentsUrl
 * @property string $contributorsUrl
 * @property string $deploymentsUrl
 * @property string $downloadsUrl
 * @property string $eventsUrl
 * @property string $forksUrl
 * @property string $gitCommitsUrl
 * @property string $gitRefsUrl
 * @property string $gitTagsUrl
 * @property string $gitUrl
 * @property string $issueCommentUrl
 * @property string $issueEventsUrl
 * @property string $issuesUrl
 * @property string $keysUrl
 * @property string $labelsUrl
 * @property string $languagesUrl
 * @property string $mergesUrl
 * @property string $milestonesUrl
 * @property string $notificationsUrl
 * @property string $pullsUrl
 * @property string $releasesUrl
 * @property string $sshUrl
 * @property string $stargazersUrl
 * @property string $statusesUrl
 * @property string $subscribersUrl
 * @property string $subscriptionUrl
 * @property string $tagsUrl
 * @property string $teamsUrl
 * @property string $treesUrl
 * @property string $cloneUrl
 * @property ?string $mirrorUrl
 * @property string $hooksUrl
 * @property string $svnUrl
 * @property ?string $homepage
 * @property ?string $language
 * @property int $forksCount
 * @property int $stargazersCount
 * @property int $watchersCount
 * @property int $size
 * @property string $defaultBranch
 * @property int $openIssuesCount
 * @property ?bool $isTemplate
 * @property ?array $topics
 * @property ?CustomProperties $customProperties
 * @property bool $hasIssues
 * @property bool $hasProjects
 * @property bool $hasWiki
 * @property bool $hasPages
 * @property bool $hasDownloads
 * @property ?bool $hasDiscussions
 * @property bool $archived
 * @property bool $disabled
 * @property ?string $visibility
 * @property ?string $pushedAt
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?bool $allowRebaseMerge
 * @property ?TemplateRepository $templateRepository
 * @property ?string $tempCloneToken
 * @property ?bool $allowSquashMerge
 * @property ?bool $allowAutoMerge
 * @property ?bool $deleteBranchOnMerge
 * @property ?bool $allowUpdateBranch
 * @property ?bool $useSquashPrTitleAsDefault
 * @property ?string $squashMergeCommitTitle
 * @property ?string $squashMergeCommitMessage
 * @property ?string $mergeCommitTitle
 * @property ?string $mergeCommitMessage
 * @property ?bool $allowMergeCommit
 * @property ?bool $allowForking
 * @property ?bool $webCommitSignoffRequired
 * @property ?int $subscribersCount
 * @property ?int $networkCount
 * @property int $openIssues
 * @property int $watchers
 * @property ?string $masterBranch
 * @property ?string $starredAt
 * @property ?bool $anonymousAccessEnabled
 */
interface RepositoryWebhooks
{
}
