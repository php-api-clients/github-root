<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesGetMaintenance;

final readonly class ConnectionServices
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","number":6}';

    public function __construct(public string|null $name, public int|null $number)
    {
    }
}
