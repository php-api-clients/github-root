<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract;

/**
 * @property string $path
 * @property int $startLine
 * @property int $endLine
 * @property ?int $startColumn
 * @property ?int $endColumn
 * @property ?string $annotationLevel
 * @property ?string $title
 * @property ?string $message
 * @property ?string $rawDetails
 * @property string $blobHref
 */
interface CheckAnnotation
{
}
