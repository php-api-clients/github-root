<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

use ApiClients\Client\GitHub\Schema\HookDelivery\Request;
use ApiClients\Client\GitHub\Schema\HookDelivery\Response;

/**
 * @property int $id
 * @property string $guid
 * @property string $deliveredAt
 * @property bool $redelivery
 * @property int|float $duration
 * @property string $status
 * @property int $statusCode
 * @property string $event
 * @property ?string $action
 * @property ?int $installationId
 * @property ?int $repositoryId
 * @property ?string $throttledAt
 * @property ?string $url
 * @property Request $request
 * @property Response $response
 */
interface HookDelivery
{
}
