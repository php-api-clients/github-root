<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Contract\ValidationError;

/**
 * @property ?string $resource
 * @property ?string $field
 * @property ?string $message
 * @property string $code
 * @property ?int $index
 * @property null|string|int|array $value
 */
interface Errors
{
}
