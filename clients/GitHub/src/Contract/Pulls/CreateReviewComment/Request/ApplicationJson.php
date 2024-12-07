<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Pulls\CreateReviewComment\Request;

/**
 * @property string $body
 * @property string $commitId
 * @property string $path
 * @property ?int $position
 * @property ?string $side
 * @property ?int $line
 * @property ?int $startLine
 * @property ?string $startSide
 * @property ?int $inReplyTo
 * @property ?string $subjectType
 */
interface ApplicationJson
{
}
