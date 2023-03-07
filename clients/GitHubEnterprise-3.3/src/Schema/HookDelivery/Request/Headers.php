<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\HookDelivery\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Headers
{
    public const SCHEMA_JSON = '{"type":["object","null"],"description":"The request headers sent with the webhook delivery.","additionalProperties":true}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The request headers sent with the webhook delivery.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
