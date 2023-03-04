<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\PatchSchema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Operations
{
    public const SCHEMA_JSON = '{"required":["op"],"type":"object","properties":{"op":{"enum":["add","replace","remove"],"type":"string"},"path":{"type":"string"},"value":{"type":"string","description":"Corresponding \'value\' of that field specified by \'path\'"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"op":"generated_op","path":"generated_path","value":"generated_value"}';
    public ?string $op;
    public string $path;
    /**
     * Corresponding 'value' of that field specified by 'path'
     */
    public string $value;
    public function __construct(string $op, string $path, string $value)
    {
        $this->op = $op;
        $this->path = $path;
        $this->value = $value;
    }
}
