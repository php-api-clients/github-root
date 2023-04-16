<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

final readonly class Cas
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"url":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"generated_url_null"}';

    public function __construct(public ?string $url)
    {
    }
}
