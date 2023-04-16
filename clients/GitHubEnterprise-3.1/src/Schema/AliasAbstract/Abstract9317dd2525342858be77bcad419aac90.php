<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

abstract readonly class Abstract9317dd2525342858be77bcad419aac90
{
    public const SCHEMA_JSON         = '{"oneOf":[{"required":["teams"],"type":"object","properties":{"teams":{"type":"array","items":{"type":"string"},"description":"teams parameter"}},"example":{"teams":["my-team"]}},{"type":"array","items":{"type":"string"},"description":"teams parameter"}]}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
