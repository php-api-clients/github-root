<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\DeleteFile\Request\Applicationjson;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the author."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'object containing information about the author.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","email":"generated_email"}';
    /**
     * name: The name of the author (or committer) of the commit
     * email: The email of the author (or committer) of the commit
     */
    public function __construct(public ?string $name, public ?string $email)
    {
    }
}
