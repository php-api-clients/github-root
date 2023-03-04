<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Operation\Projects\MoveCard\Response\Applicationjson\H403;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Errors
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"resource":{"type":"string"},"field":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code","message":"generated_message","resource":"generated_resource","field":"generated_field"}';
    public ?string $code;
    public ?string $message;
    public ?string $resource;
    public ?string $field;
    public function __construct(string $code, string $message, string $resource, string $field)
    {
        $this->code = $code;
        $this->message = $message;
        $this->resource = $resource;
        $this->field = $field;
    }
}
