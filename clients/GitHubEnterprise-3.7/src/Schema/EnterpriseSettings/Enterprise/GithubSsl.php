<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

final readonly class GithubSsl
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"enabled":{"type":"boolean"},"cert":{"type":["string","null"]},"key":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"cert":"generated","key":"generated"}';

    public function __construct(public bool|null $enabled, public string|null $cert, public string|null $key)
    {
    }
}
