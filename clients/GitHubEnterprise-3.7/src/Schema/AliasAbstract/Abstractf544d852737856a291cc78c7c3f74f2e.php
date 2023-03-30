<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
abstract readonly class Abstractf544d852737856a291cc78c7c3f74f2e
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null"}';
    public function __construct(public ?string $from)
    {
    }
}
