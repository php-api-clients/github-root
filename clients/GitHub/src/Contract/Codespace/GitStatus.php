<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Codespace;

/**
 * @property ?int $ahead
 * @property ?int $behind
 * @property ?bool $hasUnpushedChanges
 * @property ?bool $hasUncommittedChanges
 * @property ?string $ref
 */
interface GitStatus
{
}
