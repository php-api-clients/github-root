<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Progress
{
    public const SCHEMA_JSON = '{"required":["status","key"],"type":"object","properties":{"status":{"type":"string"},"key":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status","key":"generated_key"}';
    public ?string $status;
    public ?string $key;
    public function __construct(string $status, string $key)
    {
        $this->status = $status;
        $this->key = $key;
    }
}
