<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Orgs\UpdateMembershipForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["active"],"type":"string","description":"The state that the membership should be in. Only `\\"active\\"` will be accepted."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"active"}';
    /**
     * state: The state that the membership should be in. Only `"active"` will be accepted.
     */
    public function __construct(public string $state)
    {
    }
}
