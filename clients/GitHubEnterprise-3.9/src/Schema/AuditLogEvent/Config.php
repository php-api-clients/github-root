<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent;

final readonly class Config
{
    public const SCHEMA_JSON         = '{"type":"object"}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
