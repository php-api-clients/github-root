<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy;
use ApiClients\Client\GitHub\Schema\Discussion\Category;
use ApiClients\Client\GitHub\Schema\Discussion\Reactions;
use ApiClients\Client\GitHub\Schema\Discussion\User;

/**
 * @property ?string $activeLockReason
 * @property ?string $answerChosenAt
 * @property ?AnswerChosenBy $answerChosenBy
 * @property ?string $answerHtmlUrl
 * @property string $authorAssociation
 * @property string $body
 * @property Category $category
 * @property int $comments
 * @property string $createdAt
 * @property string $htmlUrl
 * @property int $id
 * @property bool $locked
 * @property string $nodeId
 * @property int $number
 * @property ?Reactions $reactions
 * @property string $repositoryUrl
 * @property string $state
 * @property ?string $stateReason
 * @property ?string $timelineUrl
 * @property string $title
 * @property string $updatedAt
 * @property ?User $user
 * @property ?array $labels
 */
interface Discussion
{
}
