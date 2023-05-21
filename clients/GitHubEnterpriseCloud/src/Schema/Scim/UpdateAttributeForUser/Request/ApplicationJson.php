<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\UpdateAttributeForUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["Operations"],"type":"object","properties":{"schemas":{"type":"array","items":{"type":"string"}},"Operations":{"minItems":1,"type":"array","items":{"required":["op"],"type":"object","properties":{"op":{"enum":["add","remove","replace"],"type":"string"},"path":{"type":"string"},"value":{"oneOf":[{"type":"object","properties":{"active":{"type":["boolean","null"]},"userName":{"type":["string","null"]},"externalId":{"type":["string","null"]},"givenName":{"type":["string","null"]},"familyName":{"type":["string","null"]}}},{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"}}}},{"type":"string"}]}}},"description":"Set of operations to be performed","examples":[{"op":"replace","value":{"active":false}}]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"schemas":["generated","generated"],"Operations":[{"op":"replace","path":"generated","value":{"0":null,"active":false}}]}';

    /**
     * operations: Set of operations to be performed
     */
    public function __construct(public ?array $schemas, #[MapFrom('Operations')] public array $operations)
    {
    }
}
