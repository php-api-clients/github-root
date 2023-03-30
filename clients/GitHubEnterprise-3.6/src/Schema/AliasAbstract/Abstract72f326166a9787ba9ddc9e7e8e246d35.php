<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
abstract readonly class Abstract72f326166a9787ba9ddc9e7e8e246d35
{
    public const SCHEMA_JSON = '{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"url":"generated_url_null","name":"generated_name_null"}';
    public function __construct(public int $id, public string $url, public string $name)
    {
    }
}
