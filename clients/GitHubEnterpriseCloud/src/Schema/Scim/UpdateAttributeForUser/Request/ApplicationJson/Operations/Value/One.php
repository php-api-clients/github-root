<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\UpdateAttributeForUser\Request\ApplicationJson\Operations\Value;

final readonly class One
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated","primary":false}';

    public function __construct(public string|null $value, public bool|null $primary)
    {
    }
}
