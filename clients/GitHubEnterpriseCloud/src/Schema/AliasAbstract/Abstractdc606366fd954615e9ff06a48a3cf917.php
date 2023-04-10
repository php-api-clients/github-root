<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstractdc606366fd954615e9ff06a48a3cf917
{
    public const SCHEMA_JSON = '{"required":["givenName","familyName"],"type":"object","properties":{"givenName":{"type":"string"},"familyName":{"type":"string"},"formatted":{"type":"string"}},"example":{"givenName":"Jane","familyName":"User"}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"givenName":"Jane","familyName":"User","formatted":"generated_formatted_null"}';
    public function __construct(public string $givenName, public string $familyName, public ?string $formatted)
    {
    }
}
