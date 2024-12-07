<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Contract\CodeScanning\UploadSarif\Request;

/**
 * @property string $commitSha
 * @property string $ref
 * @property string $sarif
 * @property ?string $checkoutUri
 * @property ?string $startedAt
 * @property ?string $toolName
 * @property ?bool $validate
 */
interface ApplicationJson
{
}
