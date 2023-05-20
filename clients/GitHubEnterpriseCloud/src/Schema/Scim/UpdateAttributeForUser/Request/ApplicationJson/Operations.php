<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\UpdateAttributeForUser\Request\ApplicationJson;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class Operations
{
    public const SCHEMA_JSON         = '{"required":["op"],"type":"object","properties":{"op":{"enum":["add","remove","replace"],"type":"string"},"path":{"type":"string"},"value":{"oneOf":[{"type":"object","properties":{"active":{"type":["boolean","null"]},"userName":{"type":["string","null"]},"externalId":{"type":["string","null"]},"givenName":{"type":["string","null"]},"familyName":{"type":["string","null"]}}},{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"}}}},{"type":"string"}]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"op":"replace","path":"generated","value":null}';

    public function __construct(public string $op, public ?string $path, public null|Schema\Scim\UpdateAttributeForUser\Request\ApplicationJson\Operations\Value\Zero|array|string $value)
    {
    }
}
