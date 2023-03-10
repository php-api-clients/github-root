<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\Migrations\StartForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterpriseCloud\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["repositories"],"type":"object","properties":{"lock_repositories":{"type":"boolean","description":"Lock the repositories being migrated at the start of the migration","readOnly":false,"examples":[true]},"exclude_metadata":{"type":"boolean","description":"Indicates whether metadata should be excluded and only git source should be included for the migration.","readOnly":false,"examples":[true]},"exclude_git_data":{"type":"boolean","description":"Indicates whether the repository git data should be excluded from the migration.","readOnly":false,"examples":[true]},"exclude_attachments":{"type":"boolean","description":"Do not include attachments in the migration","readOnly":false,"examples":[true]},"exclude_releases":{"type":"boolean","description":"Do not include releases in the migration","readOnly":false,"examples":[true]},"exclude_owner_projects":{"type":"boolean","description":"Indicates whether projects owned by the organization or users should be excluded.","readOnly":false,"examples":[true]},"org_metadata_only":{"type":"boolean","description":"Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).","default":false,"examples":[true]},"exclude":{"type":"array","items":{"enum":["repositories"],"type":"string","description":"Allowed values that can be passed to the exclude param.","examples":["repositories"]},"description":"Exclude attributes from the API response to improve performance","readOnly":false,"examples":["repositories"]},"repositories":{"type":"array","items":{"type":"string","description":"Repository path, owner and name","examples":["acme\\/widgets"]}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"lock_repositories":true,"exclude_metadata":true,"exclude_git_data":true,"exclude_attachments":true,"exclude_releases":true,"exclude_owner_projects":true,"org_metadata_only":true,"exclude":["repositories"],"repositories":["generated_repositories"]}';
    /**
     * lock_repositories: Lock the repositories being migrated at the start of the migration
     * exclude_metadata: Indicates whether metadata should be excluded and only git source should be included for the migration.
     * exclude_git_data: Indicates whether the repository git data should be excluded from the migration.
     * exclude_attachments: Do not include attachments in the migration
     * exclude_releases: Do not include releases in the migration
     * exclude_owner_projects: Indicates whether projects owned by the organization or users should be excluded.
     * org_metadata_only: Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     * exclude: Exclude attributes from the API response to improve performance
     * @param ?array<string> $exclude
     * @param array<string> $repositories
     */
    public function __construct(public ?bool $lock_repositories, public ?bool $exclude_metadata, public ?bool $exclude_git_data, public ?bool $exclude_attachments, public ?bool $exclude_releases, public ?bool $exclude_owner_projects, public ?bool $org_metadata_only, public ?array $exclude, public array $repositories)
    {
    }
}
