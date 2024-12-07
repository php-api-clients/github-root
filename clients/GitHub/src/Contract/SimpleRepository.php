<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleUser;

/**
 * @property int $id
 * @property string $nodeId
 * @property string $name
 * @property string $fullName
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
 * @property string $stargazersUrl
 * @property string $statusesUrl
 * @property string $subscribersUrl
 * @property string $subscriptionUrl
 * @property string $tagsUrl
 * @property string $teamsUrl
 * @property string $treesUrl
 * @property string $hooksUrl
 */
interface SimpleRepository
{
}
