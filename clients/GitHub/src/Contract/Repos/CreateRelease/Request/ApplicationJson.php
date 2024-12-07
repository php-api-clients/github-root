<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Repos\CreateRelease\Request;

/**
 * @property string $tagName
 * @property ?string $targetCommitish
 * @property ?string $name
 * @property ?string $body
 * @property ?bool $draft
 * @property ?bool $prerelease
 * @property ?string $discussionCategoryName
 * @property ?bool $generateReleaseNotes
 * @property ?string $makeLatest
 */
interface ApplicationJson
{
}
