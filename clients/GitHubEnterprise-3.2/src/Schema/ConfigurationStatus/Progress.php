<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus;

final readonly class Progress
{
    public const SCHEMA_JSON         = '{"required":["status","key"],"type":"object","properties":{"status":{"type":"string"},"key":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status_null","key":"generated_key_null"}';

    public function __construct(public string $status, public string $key)
    {
    }
}
