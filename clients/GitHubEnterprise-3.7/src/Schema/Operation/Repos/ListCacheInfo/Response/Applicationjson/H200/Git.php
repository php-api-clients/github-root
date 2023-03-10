<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\Repos\ListCacheInfo\Response\Applicationjson\H200;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Git
{
    public const SCHEMA_JSON = '{"required":["sync_status","last_sync"],"type":"object","properties":{"sync_status":{"enum":["offline","inactive","in_sync","not_in_sync"],"type":"string"},"last_sync":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sync_status":"generated_sync_status","last_sync":"generated_last_sync"}';
    public function __construct(public string $sync_status, public string $last_sync)
    {
    }
}
