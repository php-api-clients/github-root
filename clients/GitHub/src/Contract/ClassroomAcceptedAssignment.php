<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property int $id
 * @property bool $submitted
 * @property bool $passing
 * @property int $commitCount
 * @property string $grade
 * @property array $students
 * @property \ApiClients\Client\GitHub\Schema\SimpleClassroomRepository $repository
 * @property \ApiClients\Client\GitHub\Schema\SimpleClassroomAssignment $assignment
 */
interface ClassroomAcceptedAssignment
{
}
