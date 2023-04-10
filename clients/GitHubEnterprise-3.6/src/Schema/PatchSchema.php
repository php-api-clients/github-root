<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class PatchSchema
{
    public const SCHEMA_JSON = '{"required":["Operations","schemas"],"type":"object","properties":{"Operations":{"type":"array","items":{"required":["op"],"type":"object","properties":{"op":{"enum":["add","replace","remove"],"type":"string"},"path":{"type":"string"},"value":{"type":"string","description":"Corresponding \'value\' of that field specified by \'path\'"}}},"description":"patch operations list"},"schemas":{"type":"array","items":{"enum":["urn:ietf:params:scim:api:messages:2.0:PatchOp"],"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"Operations":[{"op":"add","path":"generated_path_null","value":"generated_value_null"}],"schemas":["generated_schemas_null"]}';
    /**
     * operations: patch operations list
     * @param array<\ApiClients\Client\Github\Schema\PatchSchema\Operations> $operations
     * @param array<string> $schemas
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('Operations')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\PatchSchema\Operations::class)] public array $operations, public array $schemas)
    {
    }
}
