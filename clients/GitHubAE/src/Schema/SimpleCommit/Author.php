<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\SimpleCommit;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","email":"generated_email"}';
    public function __construct(public ?string $name, public ?string $email)
    {
    }
}
