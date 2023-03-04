<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Projects\CreateForAuthenticatedUser\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Week One Sprint","body":"This project represents the sprint of the first week in January"}';
    /**
     * Name of the project
     */
    public ?string $name;
    /**
     * Body of the project
     */
    public ?string $body;
    public function __construct(string $name, string $body)
    {
        $this->name = $name;
        $this->body = $body;
    }
}
