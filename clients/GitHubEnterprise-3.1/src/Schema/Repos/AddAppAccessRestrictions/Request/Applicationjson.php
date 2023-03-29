<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\AddAppAccessRestrictions\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"oneOf":[{"required":["apps"],"type":"object","properties":{"apps":{"type":"array","items":{"type":"string"},"description":"apps parameter"}},"example":{"apps":["my-app"]}},{"type":"array","items":{"type":"string"}}]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
