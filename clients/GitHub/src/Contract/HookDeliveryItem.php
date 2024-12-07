<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

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
 */
interface HookDeliveryItem
{
}
