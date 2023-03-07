<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\Update\Request;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the repository."},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Either `true` to make the repository private or `false` to make it public. Default: `false`.  \\n**Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.","default":false},"visibility":{"enum":["public","private","internal"],"type":"string","description":"Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`.\\""},"has_issues":{"type":"boolean","description":"Either `true` to enable issues for this repository or `false` to disable them.","default":true},"has_projects":{"type":"boolean","description":"Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.","default":true},"has_wiki":{"type":"boolean","description":"Either `true` to enable the wiki for this repository or `false` to disable it.","default":true},"is_template":{"type":"boolean","description":"Either `true` to make this repo available as a template repository or `false` to prevent it.","default":false},"default_branch":{"type":"string","description":"Updates the default branch for this repository."},"allow_squash_merge":{"type":"boolean","description":"Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.","default":true},"allow_merge_commit":{"type":"boolean","description":"Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.","default":true},"delete_branch_on_merge":{"type":"boolean","description":"Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.","default":false},"archived":{"type":"boolean","description":"`true` to archive this repository. **Note**: You cannot unarchive repositories through the API.","default":false},"allow_forking":{"type":"boolean","description":"Either `true` to allow private forks, or `false` to prevent private forks.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","description":"generated_description","homepage":"generated_homepage","private":false,"visibility":"generated_visibility","has_issues":false,"has_projects":false,"has_wiki":false,"is_template":false,"default_branch":"generated_default_branch","allow_squash_merge":false,"allow_merge_commit":false,"allow_rebase_merge":false,"delete_branch_on_merge":false,"archived":false,"allow_forking":false}';
    /**
    * name: The name of the repository.
    * description: A short description of the repository.
    * homepage: A URL with more information about the repository.
    * private: Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
    * visibility: Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`."
    * has_issues: Either `true` to enable issues for this repository or `false` to disable them.
    * has_projects: Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
    * has_wiki: Either `true` to enable the wiki for this repository or `false` to disable it.
    * is_template: Either `true` to make this repo available as a template repository or `false` to prevent it.
    * default_branch: Updates the default branch for this repository.
    * allow_squash_merge: Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
    * allow_merge_commit: Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
    * allow_rebase_merge: Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
    * delete_branch_on_merge: Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
    * archived: `true` to archive this repository. **Note**: You cannot unarchive repositories through the API.
    * allow_forking: Either `true` to allow private forks, or `false` to prevent private forks.
    */
    public function __construct(public ?string $name, public ?string $description, public ?string $homepage, public ?bool $private, public ?string $visibility, public ?bool $has_issues, public ?bool $has_projects, public ?bool $has_wiki, public ?bool $is_template, public ?string $default_branch, public ?bool $allow_squash_merge, public ?bool $allow_merge_commit, public ?bool $allow_rebase_merge, public ?bool $delete_branch_on_merge, public ?bool $archived, public ?bool $allow_forking)
    {
    }
}
