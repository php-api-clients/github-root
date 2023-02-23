<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Projects\UpdateColumn\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project column","examples":["Remaining tasks"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Remaining tasks"}';
    /**
     * Name of the project column
     */
    public ?string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
