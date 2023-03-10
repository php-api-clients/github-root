<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class PatchSchema
{
    public const SCHEMA_JSON = '{"required":["Operations","schemas"],"type":"object","properties":{"Operations":{"type":"array","items":{"required":["op"],"type":"object","properties":{"op":{"enum":["add","replace","remove"],"type":"string"},"path":{"type":"string"},"value":{"type":"string","description":"Corresponding \'value\' of that field specified by \'path\'"}}},"description":"patch operations list"},"schemas":{"type":"array","items":{"enum":["urn:ietf:params:scim:api:messages:2.0:PatchOp"],"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"Operations":[{"op":"generated_op","path":"generated_path","value":"generated_value"}],"schemas":["generated_schemas"]}';
    /**
     * Operations: patch operations list
     * @param array<\ApiClients\Client\GitHubEnterprise\Schema\PatchSchema\Operations> $Operations
     * @param array<string> $schemas
     */
    public function __construct(#[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\PatchSchema\Operations::class)] public array $Operations, public array $schemas)
    {
    }
}
