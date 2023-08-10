<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesSetMaintenanceResponse
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"hostname":{"type":"string","format":"hostname"},"uuid":{"type":"string","format":"uuid"},"message":{"type":"string"},"error":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"hostname":"generated","uuid":"4ccda740-74c3-4cfa-8571-ebf83c8f300a","message":"generated","error":"generated"}';

    public function __construct(public string|null $hostname, public string|null $uuid, public string|null $message, public string|null $error)
    {
    }
}
