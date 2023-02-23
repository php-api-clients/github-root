<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Meta
{
    public const SCHEMA_JSON = '{"required":["resourceType"],"type":"object","properties":{"resourceType":{"enum":["User","Group"],"type":"string","description":"A type of a resource","examples":["User"]},"created":{"type":"string","description":"A date and time when the user was created.","examples":["2022-03-27T19:59:26.000Z"]},"lastModified":{"type":"string","description":"A data and time when the user was last modified.","examples":["2022-03-27T19:59:26.000Z"]},"location":{"type":"string","description":"A URL location of an object"}},"description":"The metadata associated with the creation\\/updates to the user."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The metadata associated with the creation/updates to the user.';
    public const SCHEMA_EXAMPLE_DATA = '{"resourceType":"User","created":"2022-03-27T19:59:26.000Z","lastModified":"2022-03-27T19:59:26.000Z","location":"generated_location"}';
    /**
     * A type of a resource
     */
    public ?string $resourceType;
    /**
     * A date and time when the user was created.
     */
    public string $created;
    /**
     * A data and time when the user was last modified.
     */
    public string $lastModified;
    /**
     * A URL location of an object
     */
    public string $location;
    public function __construct(string $resourceType, string $created, string $lastModified, string $location)
    {
        $this->resourceType = $resourceType;
        $this->created = $created;
        $this->lastModified = $lastModified;
        $this->location = $location;
    }
}
