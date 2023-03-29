<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\Projects\CreateCard\Response\Applicationjson\H503;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Errors
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"code":"generated_code_null","message":"generated_message_null"}';
    public function __construct(public ?string $code, public ?string $message)
    {
    }
}
