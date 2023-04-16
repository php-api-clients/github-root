<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

final readonly class Avatar
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"enabled":{"type":"boolean"},"uri":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"uri":"generated_uri_null"}';

    public function __construct(public ?bool $enabled, public ?string $uri)
    {
    }
}
