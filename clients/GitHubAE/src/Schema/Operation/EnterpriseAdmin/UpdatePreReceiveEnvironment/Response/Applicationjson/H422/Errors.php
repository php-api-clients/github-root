<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment\Response\Applicationjson\H422;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Errors
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"resource":{"type":"string"},"code":{"type":"string"},"message":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"resource":"generated_resource_null","code":"generated_code_null","message":"generated_message_null"}';
    public function __construct(public ?string $resource, public ?string $code, public ?string $message)
    {
    }
}
