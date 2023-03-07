<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Projects\AddCollaborator\Request;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"permission":{"enum":["read","write","admin"],"type":"string","description":"The permission to grant the collaborator.","default":"write","examples":["write"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"permission":"write"}';
    /**
     * permission: The permission to grant the collaborator.
     */
    public function __construct(public ?string $permission)
    {
    }
}
