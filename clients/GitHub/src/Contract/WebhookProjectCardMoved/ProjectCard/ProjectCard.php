<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\WebhookProjectCardMoved\ProjectCard;

use ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved\ProjectCard\Creator;

/**
 * @property ?int $afterId
 * @property bool $archived
 * @property int $columnId
 * @property string $columnUrl
 * @property ?string $contentUrl
 * @property string $createdAt
 * @property ?Creator $creator
 * @property int $id
 * @property string $nodeId
 * @property ?string $note
 * @property string $projectUrl
 * @property string $updatedAt
 * @property string $url
 */
interface ProjectCard
{
}
