<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

abstract readonly class Abstractda64e2c4ce7d17a902567c224954928c
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"status":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"generated_status_null"}';

    public function __construct(public ?string $status)
    {
    }
}
