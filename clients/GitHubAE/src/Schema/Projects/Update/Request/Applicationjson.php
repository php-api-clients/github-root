<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Projects\Update\Request;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]},"state":{"type":"string","description":"State of the project; either \'open\' or \'closed\'","examples":["open"]},"organization_permission":{"enum":["read","write","admin","none"],"type":"string","description":"The baseline permission that all organization members have on this project"},"private":{"type":"boolean","description":"Whether or not this project can be seen by everyone."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Week One Sprint","body":"This project represents the sprint of the first week in January","state":"open","organization_permission":"generated_organization_permission","private":false}';
    /**
     * Name of the project
     */
    public ?string $name;
    /**
     * Body of the project
     */
    public ?string $body;
    /**
     * State of the project; either 'open' or 'closed'
     */
    public ?string $state;
    /**
     * The baseline permission that all organization members have on this project
     */
    public ?string $organization_permission;
    /**
     * Whether or not this project can be seen by everyone.
     */
    public ?bool $private;
    public function __construct(string $name, string $body, string $state, string $organization_permission, bool $private)
    {
        $this->name = $name;
        $this->body = $body;
        $this->state = $state;
        $this->organization_permission = $organization_permission;
        $this->private = $private;
    }
}
