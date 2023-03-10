<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Import;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class ProjectChoices
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"vcs":{"type":"string"},"tfvc_project":{"type":"string"},"human_name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vcs":"generated_vcs","tfvc_project":"generated_tfvc_project","human_name":"generated_human_name"}';
    public function __construct(public ?string $vcs, public ?string $tfvc_project, public ?string $human_name)
    {
    }
}
