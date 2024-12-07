<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\Checks\Create\Request\ApplicationJson\Output;

/**
 * @property string $path
 * @property int $startLine
 * @property int $endLine
 * @property ?int $startColumn
 * @property ?int $endColumn
 * @property string $annotationLevel
 * @property string $message
 * @property ?string $title
 * @property ?string $rawDetails
 */
interface Annotations
{
}
