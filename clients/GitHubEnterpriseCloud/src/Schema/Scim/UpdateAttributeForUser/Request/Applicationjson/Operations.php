<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Scim\UpdateAttributeForUser\Request\Applicationjson;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Operations
{
    public const SCHEMA_JSON = '{"required":["op"],"type":"object","properties":{"op":{"enum":["add","remove","replace"],"type":"string"},"path":{"type":"string"},"value":{"oneOf":[{"type":"object","properties":{"active":{"type":["boolean","null"]},"userName":{"type":["string","null"]},"externalId":{"type":["string","null"]},"givenName":{"type":["string","null"]},"familyName":{"type":["string","null"]}}},{"type":"array","items":{"type":"object","properties":{"value":{"type":"string"},"primary":{"type":"boolean"}}}},{"type":"string"}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"op":"generated_op","path":"generated_path","value":"generated_value"}';
    public ?string $op;
    public string $path;
    public mixed $value;
    public function __construct(string $op, string $path, mixed $value)
    {
        $this->op = $op;
        $this->path = $path;
        $this->value = $value;
    }
}
