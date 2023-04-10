<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Mapping
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"},"tileserver":{"type":["string","null"]},"basemap":{"type":"string"},"token":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"enabled":false,"tileserver":"generated_tileserver_null","basemap":"generated_basemap_null","token":"generated_token_null"}';
    public function __construct(public ?bool $enabled, public ?string $tileserver, public ?string $basemap, public ?string $token)
    {
    }
}
