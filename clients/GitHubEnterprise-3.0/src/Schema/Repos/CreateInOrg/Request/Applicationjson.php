<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateInOrg\Request;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["name"],"type":"object","properties":{"name":{"type":"string","description":"The name of the repository."},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Whether the repository is private.","default":false},"visibility":{"enum":["public","private","internal"],"type":"string","description":"Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. Note: For GitHub Enterprise Server and GitHub AE, this endpoint will only list repositories available to all users on the enterprise. For more information, see \\"[Creating an internal repository](https:\\/\\/docs.github.com\\/en\\/github\\/creating-cloning-and-archiving-repositories\\/about-repository-visibility#about-internal-repositories)\\" in the GitHub Help documentation.  \\nThe `visibility` parameter overrides the `private` parameter when you use both parameters with the `nebula-preview` preview header."},"has_issues":{"type":"boolean","description":"Either `true` to enable issues for this repository or `false` to disable them.","default":true},"has_projects":{"type":"boolean","description":"Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.","default":true},"has_wiki":{"type":"boolean","description":"Either `true` to enable the wiki for this repository or `false` to disable it.","default":true},"is_template":{"type":"boolean","description":"Either `true` to make this repo available as a template repository or `false` to prevent it.","default":false},"team_id":{"type":"integer","description":"The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."},"auto_init":{"type":"boolean","description":"Pass `true` to create an initial commit with empty README.","default":false},"gitignore_template":{"type":"string","description":"Desired language or platform [.gitignore template](https:\\/\\/github.com\\/github\\/gitignore) to apply. Use the name of the template without the extension. For example, \\"Haskell\\"."},"license_template":{"type":"string","description":"Choose an [open source license template](https:\\/\\/choosealicense.com\\/) that best suits your needs, and then use the [license keyword](https:\\/\\/docs.github.com\\/articles\\/licensing-a-repository\\/#searching-github-by-license-type) as the `license_template` string. For example, \\"mit\\" or \\"mpl-2.0\\"."},"allow_squash_merge":{"type":"boolean","description":"Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.","default":true},"allow_merge_commit":{"type":"boolean","description":"Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.","default":true},"delete_branch_on_merge":{"type":"boolean","description":"Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","description":"generated_description","homepage":"generated_homepage","private":false,"visibility":"generated_visibility","has_issues":false,"has_projects":false,"has_wiki":false,"is_template":false,"team_id":13,"auto_init":false,"gitignore_template":"generated_gitignore_template","license_template":"generated_license_template","allow_squash_merge":false,"allow_merge_commit":false,"allow_rebase_merge":false,"delete_branch_on_merge":false}';
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
    * Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`. Note: For GitHub Enterprise Server and GitHub AE, this endpoint will only list repositories available to all users on the enterprise. For more information, see "[Creating an internal repository](https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/about-repository-visibility#about-internal-repositories)" in the GitHub Help documentation.  
    The `visibility` parameter overrides the `private` parameter when you use both parameters with the `nebula-preview` preview header.
    */
    public string $visibility;
    /**
     * Either `true` to enable issues for this repository or `false` to disable them.
     */
    public bool $has_issues;
    /**
     * Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     */
    public bool $has_projects;
    /**
     * Either `true` to enable the wiki for this repository or `false` to disable it.
     */
    public bool $has_wiki;
    /**
     * Either `true` to make this repo available as a template repository or `false` to prevent it.
     */
    public bool $is_template;
    /**
     * The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization.
     */
    public int $team_id;
    /**
     * Pass `true` to create an initial commit with empty README.
     */
    public bool $auto_init;
    /**
     * Desired language or platform [.gitignore template](https://github.com/github/gitignore) to apply. Use the name of the template without the extension. For example, "Haskell".
     */
    public string $gitignore_template;
    /**
     * Choose an [open source license template](https://choosealicense.com/) that best suits your needs, and then use the [license keyword](https://docs.github.com/articles/licensing-a-repository/#searching-github-by-license-type) as the `license_template` string. For example, "mit" or "mpl-2.0".
     */
    public string $license_template;
    /**
     * Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     */
    public bool $allow_squash_merge;
    /**
     * Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     */
    public bool $allow_merge_commit;
    /**
     * Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     */
    public bool $allow_rebase_merge;
    /**
     * Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     */
    public bool $delete_branch_on_merge;
    public function __construct(string $name, string $description, string $homepage, bool $private, string $visibility, bool $has_issues, bool $has_projects, bool $has_wiki, bool $is_template, int $team_id, bool $auto_init, string $gitignore_template, string $license_template, bool $allow_squash_merge, bool $allow_merge_commit, bool $allow_rebase_merge, bool $delete_branch_on_merge)
    {
        $this->name = $name;
        $this->description = $description;
        $this->homepage = $homepage;
        $this->private = $private;
        $this->visibility = $visibility;
        $this->has_issues = $has_issues;
        $this->has_projects = $has_projects;
        $this->has_wiki = $has_wiki;
        $this->is_template = $is_template;
        $this->team_id = $team_id;
        $this->auto_init = $auto_init;
        $this->gitignore_template = $gitignore_template;
        $this->license_template = $license_template;
        $this->allow_squash_merge = $allow_squash_merge;
        $this->allow_merge_commit = $allow_merge_commit;
        $this->allow_rebase_merge = $allow_rebase_merge;
        $this->delete_branch_on_merge = $delete_branch_on_merge;
    }
}
