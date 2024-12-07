<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleClassroomAssignment;
use ApiClients\Client\GitHub\Schema\SimpleClassroomRepository;

/**
 * @property int $id
 * @property bool $submitted
 * @property bool $passing
 * @property int $commitCount
 * @property string $grade
 * @property array $students
 * @property SimpleClassroomRepository $repository
 * @property SimpleClassroomAssignment $assignment
 */
interface ClassroomAcceptedAssignment
{
}
