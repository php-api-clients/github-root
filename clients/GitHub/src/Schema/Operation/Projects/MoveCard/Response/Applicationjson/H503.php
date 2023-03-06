<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Operation\Projects\MoveCard\Response\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class H503
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"documentation_url":{"type":"string"},"errors":{"type":"array","items":{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code","message":"generated_message","documentation_url":"generated_documentation_url","errors":[{"code":"generated_code","message":"generated_message"}]}';
    public ?string $code;
    public ?string $message;
    public ?string $documentation_url;
    /**
     * @var array<Schema\Operation\Projects\MoveCard\Response\Applicationjson\H503\Errors>
     */
    public ?array $errors;
    public function __construct(string $code, string $message, string $documentation_url, array $errors)
    {
        $this->code = $code;
        $this->message = $message;
        $this->documentation_url = $documentation_url;
        $this->errors = $errors;
    }
}
