<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class RepositoryFineGrainedPermission
{
    public const SCHEMA_JSON = '{"title":"Repository Fine-Grained Permission","required":["name","description"],"type":"object","properties":{"name":{"type":"string"},"description":{"type":"string"}},"description":"A fine-grained permission that protects repository resources."}';
    public const SCHEMA_TITLE = 'Repository Fine-Grained Permission';
    public const SCHEMA_DESCRIPTION = 'A fine-grained permission that protects repository resources.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","description":"generated_description_null"}';
    public function __construct(public string $name, public string $description)
    {
    }
}
