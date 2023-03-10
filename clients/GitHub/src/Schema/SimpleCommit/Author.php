<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\SimpleCommit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","email":"generated_email"}';
    public function __construct(public string $name, public string $email)
    {
    }
}
