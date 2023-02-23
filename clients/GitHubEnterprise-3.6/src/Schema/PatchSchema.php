<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PatchSchema
{
    public const SCHEMA_JSON = '{"required":["Operations","schemas"],"type":"object","properties":{"Operations":{"type":"array","items":{"required":["op"],"type":"object","properties":{"op":{"enum":["add","replace","remove"],"type":"string"},"path":{"type":"string"},"value":{"type":"string","description":"Corresponding \'value\' of that field specified by \'path\'"}}},"description":"patch operations list"},"schemas":{"type":"array","items":{"enum":["urn:ietf:params:scim:api:messages:2.0:PatchOp"],"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"Operations":[null],"schemas":[null]}';
    /**
     * patch operations list
     * @var array<Schema\PatchSchema\Operations>
     */
    public ?array $Operations;
    /**
     * @var array<string>
     */
    public ?array $schemas;
    public function __construct(array $Operations, array $schemas)
    {
        $this->Operations = $Operations;
        $this->schemas = $schemas;
    }
}
