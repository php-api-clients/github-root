<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $name
 * @property string $path
 * @property string $sha
 * @property string $url
 * @property string $gitUrl
 * @property string $htmlUrl
 * @property \ApiClients\Client\GitHub\Schema\MinimalRepository $repository
 * @property int|float $score
 * @property ?int $fileSize
 * @property ?string $language
 * @property ?string $lastModifiedAt
 * @property ?array $lineNumbers
 * @property ?array $textMatches
 */
interface CodeSearchResultItem
{
}
