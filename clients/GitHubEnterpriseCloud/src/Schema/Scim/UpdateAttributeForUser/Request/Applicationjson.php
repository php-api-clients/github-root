<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\UpdateAttributeForUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["Operations"],"type":"object","properties":{"schemas":{"type":"array","items":{"type":"string"}},"Operations":{"minItems":1,"type":"array","items":{"required":["op"],"type":"object","properties":{"op":{"enum":["add","remove","replace"],"type":"string"},"path":{"type":"string"},"value":{"oneOf":[{"type":"object","properties":{"active":{"type":["boolean","null"]},"userName":{"type":["string","null"]},"externalId":{"type":["string","null"]},"givenName":{"type":["string","null"]},"familyName":{"type":["string","null"]}}},{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"}}}},{"type":"string"}]}}},"description":"Set of operations to be performed","examples":[{"op":"replace","value":{"active":false}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"schemas":["generated_schemas_null"],"Operations":[{"op":"replace","path":"generated_path_null","value":{"active":false,"userName":"generated_userName_null","externalId":"generated_externalId_null","givenName":"generated_givenName_null","familyName":"generated_familyName_null"}}]}';
    /**
     * @param ?array<string> $schemas
     * operations: Set of operations to be performed
     * @param array<\ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\UpdateAttributeForUser\Request\Applicationjson\Operations> $operations
     */
    public function __construct(public ?array $schemas, #[\EventSauce\ObjectHydrator\MapFrom('Operations')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\Scim\UpdateAttributeForUser\Request\Applicationjson\Operations::class)] public array $operations)
    {
    }
}
