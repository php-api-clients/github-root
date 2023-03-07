<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\CommitSearchResultItem\Commit;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"required":["name","email","date"],"type":"object","properties":{"name":{"type":"string"},"email":{"type":"string"},"date":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","email":"generated_email","date":"generated_date"}';
    public function __construct(public ?string $name, public ?string $email, public ?string $date)
    {
    }
}
