<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;

final readonly class Roles
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"},"display":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated","primary":false,"type":"generated","display":"generated"}';

    public function __construct(public string|null $value, public bool|null $primary, public string|null $type, public string|null $display)
    {
    }
}
