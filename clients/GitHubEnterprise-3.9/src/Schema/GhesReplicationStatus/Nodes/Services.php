<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesReplicationStatus\Nodes;

final readonly class Services
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"status":{"enum":["UNKNOWN","OK","WARNING","CRITICAL"],"type":"string"},"name":{"type":"string"},"details":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"CRITICAL","name":"generated","details":"generated"}';

    public function __construct(public string|null $status, public string|null $name, public string|null $details)
    {
    }
}
