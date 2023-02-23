<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Projects\MoveColumn\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["position"],"type":"object","properties":{"position":{"pattern":"^(?:first|last|after:\\\\d+)$","type":"string","description":"The position of the column in a project. Can be one of: `first`, `last`, or `after:<column_id>` to place after the specified column.","examples":["last"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"position":"last"}';
    /**
     * The position of the column in a project. Can be one of: `first`, `last`, or `after:<column_id>` to place after the specified column.
     */
    public ?string $position;
    public function __construct(string $position)
    {
        $this->position = $position;
    }
}
