<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $name
 * @property ?string $displayName
 * @property ?string $shortDescription
 * @property ?string $description
 * @property ?string $createdBy
 * @property ?string $released
 * @property string $createdAt
 * @property string $updatedAt
 * @property bool $featured
 * @property bool $curated
 * @property int|float $score
 * @property ?int $repositoryCount
 * @property ?string $logoUrl
 * @property ?array $textMatches
 * @property ?array $related
 * @property ?array $aliases
 */
interface TopicSearchResultItem
{
}
