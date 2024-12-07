<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\SimpleClassroomOrganization;

/**
 * @property int $id
 * @property string $name
 * @property bool $archived
 * @property SimpleClassroomOrganization $organization
 * @property string $url
 */
interface Classroom
{
}
