<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\Schema\FileCommit\Commit;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date","name":"generated_name","email":"generated_email"}';
    public ?string $date;
    public ?string $name;
    public ?string $email;
    public function __construct(string $date, string $name, string $email)
    {
        $this->date = $date;
        $this->name = $name;
        $this->email = $email;
    }
}
