<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;

final readonly class Groups
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"value":{"type":"string"},"display":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated_value_null","display":"generated_display_null"}';

    public function __construct(public ?string $value, public ?string $display)
    {
    }
}
