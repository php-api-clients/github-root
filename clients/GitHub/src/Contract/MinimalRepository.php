<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property string $fullName
 * @property \ApiClients\Client\GitHub\Schema\SimpleUser $owner
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
 * @property ?string $gitUrl
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
 * @property ?string $sshUrl
 * @property string $stargazersUrl
 * @property string $statusesUrl
 * @property string $subscribersUrl
 * @property string $subscriptionUrl
 * @property string $tagsUrl
 * @property string $teamsUrl
 * @property string $treesUrl
 * @property ?string $cloneUrl
 * @property ?string $mirrorUrl
 * @property string $hooksUrl
 * @property ?string $svnUrl
 * @property ?string $homepage
 * @property ?string $language
 * @property ?int $forksCount
 * @property ?int $stargazersCount
 * @property ?int $watchersCount
 * @property ?int $size
 * @property ?string $defaultBranch
 * @property ?int $openIssuesCount
 * @property ?bool $isTemplate
 * @property ?array $topics
 * @property ?bool $hasIssues
 * @property ?bool $hasProjects
 * @property ?bool $hasWiki
 * @property ?bool $hasPages
 * @property ?bool $hasDownloads
 * @property ?bool $hasDiscussions
 * @property ?bool $archived
 * @property ?bool $disabled
 * @property ?string $visibility
 * @property ?string $pushedAt
 * @property ?string $createdAt
 * @property ?string $updatedAt
 * @property ?\ApiClients\Client\GitHub\Schema\MinimalRepository\Permissions $permissions
 * @property ?string $roleName
 * @property ?string $tempCloneToken
 * @property ?bool $deleteBranchOnMerge
 * @property ?int $subscribersCount
 * @property ?int $networkCount
 * @property ?\ApiClients\Client\GitHub\Schema\CodeOfConduct $codeOfConduct
 * @property ?\ApiClients\Client\GitHub\Schema\MinimalRepository\License $license
 * @property ?int $forks
 * @property ?int $openIssues
 * @property ?int $watchers
 * @property ?bool $allowForking
 * @property ?bool $webCommitSignoffRequired
 * @property ?\ApiClients\Client\GitHub\Schema\SecurityAndAnalysis $securityAndAnalysis
 */
interface MinimalRepository
{
}
