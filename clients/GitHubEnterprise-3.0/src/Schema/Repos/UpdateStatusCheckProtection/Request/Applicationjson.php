<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\UpdateStatusCheckProtection\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"strict":{"type":"boolean","description":"Require branches to be up to date before merging."},"contexts":{"type":"array","items":{"type":"string"},"description":"The list of status checks to require in order to merge into this branch","deprecated":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"strict":false,"contexts":[null]}';
    /**
     * Require branches to be up to date before merging.
     */
    public ?bool $strict;
    /**
     * The list of status checks to require in order to merge into this branch
     * @var array<string>
     */
    public ?array $contexts;
    public function __construct(bool $strict, array $contexts)
    {
        $this->strict = $strict;
        $this->contexts = $contexts;
    }
}
