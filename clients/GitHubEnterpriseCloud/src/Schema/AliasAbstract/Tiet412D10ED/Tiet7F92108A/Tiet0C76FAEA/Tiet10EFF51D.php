<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet412D10ED\Tiet7F92108A\Tiet0C76FAEA;

abstract readonly class Tiet10EFF51D
{
    public const SCHEMA_JSON         = '{"required":["value"],"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"},"type":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"value":"generated","primary":false,"type":"generated"}';

    public function __construct(public string $value, public bool|null $primary, public string|null $type)
    {
    }
}
