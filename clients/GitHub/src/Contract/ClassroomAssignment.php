<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\Classroom;
use ApiClients\Client\GitHub\Schema\SimpleClassroomRepository;

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
 * @property SimpleClassroomRepository $starterCodeRepository
 * @property Classroom $classroom
 */
interface ClassroomAssignment
{
}
