<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\ValidationError;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Errors
{
    public const SCHEMA_JSON = '{"required":["code"],"type":"object","properties":{"resource":{"type":"string"},"field":{"type":"string"},"message":{"type":"string"},"code":{"type":"string"},"index":{"type":"integer"},"value":{"oneOf":[{"type":["string","null"]},{"type":["integer","null"]},{"type":["array","null"],"items":{"type":"string"}}]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"resource":"generated_resource","field":"generated_field","message":"generated_message","code":"generated_code","index":13,"value":"generated_value"}';
    public string $resource;
    public string $field;
    public string $message;
    public ?string $code;
    public int $index;
    public ?array $value;
    public function __construct(string $resource, string $field, string $message, string $code, int $index, array $value)
    {
        $this->resource = $resource;
        $this->field = $field;
        $this->message = $message;
        $this->code = $code;
        $this->index = $index;
        $this->value = $value;
    }
}
