<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Whether the repository is initialized with a minimal README.","default":false},"gitignore_template":{"type":"string","description":"The desired language or platform to apply to the .gitignore.","examples":["Haskell"]},"license_template":{"type":"string","description":"The license keyword of the open source license for this repository.","examples":["mit"]},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Team Environment","description":"generated_description_null","homepage":"generated_homepage_null","private":false,"has_issues":true,"has_projects":true,"has_wiki":true,"team_id":13,"auto_init":false,"gitignore_template":"Haskell","license_template":"mit","allow_squash_merge":true,"allow_merge_commit":true,"allow_rebase_merge":true,"delete_branch_on_merge":false,"has_downloads":true,"is_template":true}';
    /**
     * name: The name of the repository.
     * description: A short description of the repository.
     * homepage: A URL with more information about the repository.
     * private: Whether the repository is private.
     * hasIssues: Whether issues are enabled.
     * hasProjects: Whether projects are enabled.
     * hasWiki: Whether the wiki is enabled.
     * teamId: The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     * autoInit: Whether the repository is initialized with a minimal README.
     * gitignoreTemplate: The desired language or platform to apply to the .gitignore.
     * licenseTemplate: The license keyword of the open source license for this repository.
     * allowSquashMerge: Whether to allow squash merges for pull requests.
     * allowMergeCommit: Whether to allow merge commits for pull requests.
     * allowRebaseMerge: Whether to allow rebase merges for pull requests.
     * deleteBranchOnMerge: Whether to delete head branches when pull requests are merged
     * hasDownloads: Whether downloads are enabled.
     * isTemplate: Whether this repository acts as a template that can be used to generate new repositories.
     */
    public function __construct(public string $name, public ?string $description, public ?string $homepage, public ?bool $private, #[\EventSauce\ObjectHydrator\MapFrom('has_issues')] public ?bool $hasIssues, #[\EventSauce\ObjectHydrator\MapFrom('has_projects')] public ?bool $hasProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_wiki')] public ?bool $hasWiki, #[\EventSauce\ObjectHydrator\MapFrom('team_id')] public ?int $teamId, #[\EventSauce\ObjectHydrator\MapFrom('auto_init')] public ?bool $autoInit, #[\EventSauce\ObjectHydrator\MapFrom('gitignore_template')] public ?string $gitignoreTemplate, #[\EventSauce\ObjectHydrator\MapFrom('license_template')] public ?string $licenseTemplate, #[\EventSauce\ObjectHydrator\MapFrom('allow_squash_merge')] public ?bool $allowSquashMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_merge_commit')] public ?bool $allowMergeCommit, #[\EventSauce\ObjectHydrator\MapFrom('allow_rebase_merge')] public ?bool $allowRebaseMerge, #[\EventSauce\ObjectHydrator\MapFrom('delete_branch_on_merge')] public ?bool $deleteBranchOnMerge, #[\EventSauce\ObjectHydrator\MapFrom('has_downloads')] public ?bool $hasDownloads, #[\EventSauce\ObjectHydrator\MapFrom('is_template')] public ?bool $isTemplate)
    {
    }
}
