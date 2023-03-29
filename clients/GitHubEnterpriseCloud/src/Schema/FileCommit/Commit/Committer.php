<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\FileCommit\Commit;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Committer
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date_null","name":"generated_name_null","email":"generated_email_null"}';
    public function __construct(public ?string $date, public ?string $name, public ?string $email)
    {
    }
}
