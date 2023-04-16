<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

abstract readonly class Abstractb7bec6efa013c5b6ed3712d49f9f26d7
{
    public const SCHEMA_JSON         = '{"oneOf":[{"required":["contexts"],"type":"object","properties":{"contexts":{"type":"array","items":{"type":"string"},"description":"contexts parameter"}},"example":{"contexts":["contexts"]}},{"type":"array","items":{"type":"string"},"description":"contexts parameter"}]}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
