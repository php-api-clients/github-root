<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property bool $publicRepo
 * @property string $title
 * @property string $type
 * @property string $inviteLink
 * @property bool $invitationsEnabled
 * @property string $slug
 * @property bool $studentsAreRepoAdmins
 * @property bool $feedbackPullRequestsEnabled
 * @property ?int $maxTeams
 * @property ?int $maxMembers
 * @property string $editor
 * @property int $accepted
 * @property int $submitted
 * @property int $passing
 * @property string $language
 * @property ?string $deadline
 * @property \ApiClients\Client\GitHub\Schema\SimpleClassroom $classroom
 */
interface SimpleClassroomAssignment
{
}
