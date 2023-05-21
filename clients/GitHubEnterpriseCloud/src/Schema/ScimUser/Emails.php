<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;

final readonly class Emails
{
    public const SCHEMA_JSON         = '{"required":["value"],"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated","primary":false,"type":"generated"}';

    public function __construct(public string $value, public ?bool $primary, public ?string $type)
    {
    }
}
