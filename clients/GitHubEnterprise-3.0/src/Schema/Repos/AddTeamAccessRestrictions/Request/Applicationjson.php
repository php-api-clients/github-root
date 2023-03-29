<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\AddTeamAccessRestrictions\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["teams"],"type":"object","properties":{"teams":{"type":"array","items":{"type":"string"},"description":"teams parameter"}},"example":{"teams":["my-team"]}},{"type":"array","items":{"type":"string"},"description":"teams parameter"}]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
