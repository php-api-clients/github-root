<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\SecurityAndAnalysis;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class SecretScanningPushProtection
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"enabled"}';
    public function __construct(public ?string $status)
    {
    }
}
