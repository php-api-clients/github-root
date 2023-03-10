<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Projects\Update\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"Name of the project","examples":["Week One Sprint"]},"body":{"type":["string","null"],"description":"Body of the project","examples":["This project represents the sprint of the first week in January"]},"state":{"type":"string","description":"State of the project; either \'open\' or \'closed\'","examples":["open"]},"organization_permission":{"enum":["read","write","admin","none"],"type":"string","description":"The baseline permission that all organization members have on this project"},"private":{"type":"boolean","description":"Whether or not this project can be seen by everyone."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Week One Sprint","body":"This project represents the sprint of the first week in January","state":"open","organization_permission":"generated_organization_permission","private":false}';
    /**
     * name: Name of the project
     * body: Body of the project
     * state: State of the project; either 'open' or 'closed'
     * organization_permission: The baseline permission that all organization members have on this project
     * private: Whether or not this project can be seen by everyone.
     */
    public function __construct(public ?string $name, public ?string $body, public ?string $state, public ?string $organization_permission, public ?bool $private)
    {
    }
}
