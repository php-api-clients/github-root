<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookProjectCardMoved;

use ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved\ProjectCard\Creator;

/**
 * @property int|float|null $afterId
 * @property ?bool $archived
 * @property ?int $columnId
 * @property ?string $columnUrl
 * @property ?string $createdAt
 * @property ?Creator $creator
 * @property ?int $id
 * @property ?string $nodeId
 * @property ?string $note
 * @property ?string $projectUrl
 * @property ?string $updatedAt
 * @property ?string $url
 */
interface ProjectCard
{
}
