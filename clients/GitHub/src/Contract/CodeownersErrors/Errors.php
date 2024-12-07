<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CodeownersErrors;

/**
 * @property int $line
 * @property int $column
 * @property ?string $source
 * @property string $kind
 * @property ?string $suggestion
 * @property string $message
 * @property string $path
 */
interface Errors
{
}
