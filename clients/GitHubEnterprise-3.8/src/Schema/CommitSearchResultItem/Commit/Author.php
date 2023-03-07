<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\CommitSearchResultItem\Commit;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
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
