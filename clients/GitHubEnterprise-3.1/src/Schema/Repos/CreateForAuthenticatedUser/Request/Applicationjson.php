<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateForAuthenticatedUser\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository.","examples":["Team Environment"]},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"has_issues":{"type":"boolean","description":"Whether issues are enabled.","default":true,"examples":[true]},"has_projects":{"type":"boolean","description":"Whether projects are enabled.","default":true,"examples":[true]},"has_wiki":{"type":"boolean","description":"Whether the wiki is enabled.","default":true,"examples":[true]},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Whether the repository is initialized with a minimal README.","default":false},"gitignore_template":{"type":"string","description":"The desired language or platform to apply to the .gitignore.","examples":["Haskell"]},"license_template":{"type":"string","description":"The license keyword of the open source license for this repository.","examples":["mit"]},"allow_squash_merge":{"type":"boolean","description":"Whether to allow squash merges for pull requests.","default":true,"examples":[true]},"allow_merge_commit":{"type":"boolean","description":"Whether to allow merge commits for pull requests.","default":true,"examples":[true]},"allow_rebase_merge":{"type":"boolean","description":"Whether to allow rebase merges for pull requests.","default":true,"examples":[true]},"delete_branch_on_merge":{"type":"boolean","description":"Whether to delete head branches when pull requests are merged","default":false,"examples":[false]},"has_downloads":{"type":"boolean","description":"Whether downloads are enabled.","default":true,"examples":[true]},"is_template":{"type":"boolean","description":"Whether this repository acts as a template that can be used to generate new repositories.","default":false,"examples":[true]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Team Environment","description":"generated_description","homepage":"generated_homepage","private":false,"has_issues":true,"has_projects":true,"has_wiki":true,"team_id":13,"auto_init":false,"gitignore_template":"Haskell","license_template":"mit","allow_squash_merge":true,"allow_merge_commit":true,"allow_rebase_merge":true,"delete_branch_on_merge":false,"has_downloads":true,"is_template":true}';
    /**
     * The name of the repository.
     */
    public ?string $name;
    /**
     * A short description of the repository.
     */
    public string $description;
    /**
     * A URL with more information about the repository.
     */
    public string $homepage;
    /**
     * Whether the repository is private.
     */
    public bool $private;
    /**
     * Whether issues are enabled.
     */
    public bool $has_issues;
    /**
     * Whether projects are enabled.
     */
    public bool $has_projects;
    /**
     * Whether the wiki is enabled.
     */
    public bool $has_wiki;
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    public int $team_id;
    /**
     * Whether the repository is initialized with a minimal README.
     */
    public bool $auto_init;
    /**
     * The desired language or platform to apply to the .gitignore.
     */
    public string $gitignore_template;
    /**
     * The license keyword of the open source license for this repository.
     */
    public string $license_template;
    /**
     * Whether to allow squash merges for pull requests.
     */
    public bool $allow_squash_merge;
    /**
     * Whether to allow merge commits for pull requests.
     */
    public bool $allow_merge_commit;
    /**
     * Whether to allow rebase merges for pull requests.
     */
    public bool $allow_rebase_merge;
    /**
     * Whether to delete head branches when pull requests are merged
     */
    public bool $delete_branch_on_merge;
    /**
     * Whether downloads are enabled.
     */
    public bool $has_downloads;
    /**
     * Whether this repository acts as a template that can be used to generate new repositories.
     */
    public bool $is_template;
    public function __construct(string $name, string $description, string $homepage, bool $private, bool $has_issues, bool $has_projects, bool $has_wiki, int $team_id, bool $auto_init, string $gitignore_template, string $license_template, bool $allow_squash_merge, bool $allow_merge_commit, bool $allow_rebase_merge, bool $delete_branch_on_merge, bool $has_downloads, bool $is_template)
    {
        $this->name = $name;
        $this->description = $description;
        $this->homepage = $homepage;
        $this->private = $private;
        $this->has_issues = $has_issues;
        $this->has_projects = $has_projects;
        $this->has_wiki = $has_wiki;
        $this->team_id = $team_id;
        $this->auto_init = $auto_init;
        $this->gitignore_template = $gitignore_template;
        $this->license_template = $license_template;
        $this->allow_squash_merge = $allow_squash_merge;
        $this->allow_merge_commit = $allow_merge_commit;
        $this->allow_rebase_merge = $allow_rebase_merge;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
        $this->has_downloads = $has_downloads;
        $this->is_template = $is_template;
    }
}
