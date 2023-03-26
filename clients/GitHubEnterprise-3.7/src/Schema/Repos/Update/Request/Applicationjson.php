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
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the repository."},"description":{"type":"string","description":"A short description of the repository."},"homepage":{"type":"string","description":"A URL with more information about the repository."},"private":{"type":"boolean","description":"Either `true` to make the repository private or `false` to make it public. Default: `false`.  \\n**Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/enterprise-server@3.7\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.","default":false},"visibility":{"enum":["public","private","internal"],"type":"string","description":"The visibility of the repository."},"has_issues":{"type":"boolean","description":"Either `true` to enable issues for this repository or `false` to disable them.","default":true},"has_projects":{"type":"boolean","description":"Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.","default":true},"has_wiki":{"type":"boolean","description":"Either `true` to enable the wiki for this repository or `false` to disable it.","default":true},"is_template":{"type":"boolean","description":"Either `true` to make this repo available as a template repository or `false` to prevent it.","default":false},"default_branch":{"type":"string","description":"Updates the default branch for this repository."},"allow_squash_merge":{"type":"boolean","description":"Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.","default":true},"allow_merge_commit":{"type":"boolean","description":"Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.","default":true},"allow_rebase_merge":{"type":"boolean","description":"Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.","default":true},"delete_branch_on_merge":{"type":"boolean","description":"Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.","default":false},"allow_update_branch":{"type":"boolean","description":"Either `true` to always allow a pull request head branch that is behind its base branch to be updated even if it is not required to be up to date before merging, or false otherwise.","default":false},"use_squash_pr_title_as_default":{"type":"boolean","description":"Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.","default":false,"deprecated":true},"squash_merge_commit_title":{"enum":["PR_TITLE","COMMIT_OR_PR_TITLE"],"type":"string","description":"The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."},"squash_merge_commit_message":{"enum":["PR_BODY","COMMIT_MESSAGES","BLANK"],"type":"string","description":"The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."},"merge_commit_title":{"enum":["PR_TITLE","MERGE_MESSAGE"],"type":"string","description":"The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."},"merge_commit_message":{"enum":["PR_BODY","PR_TITLE","BLANK"],"type":"string","description":"The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."},"archived":{"type":"boolean","description":"Whether to archive this repository. **Note**: You cannot unarchive repositories through the API.","default":false},"allow_forking":{"type":"boolean","description":"Either `true` to allow private forks, or `false` to prevent private forks.","default":false},"web_commit_signoff_required":{"type":"boolean","description":"Either `true` to require contributors to sign off on web-based commits, or `false` to not require contributors to sign off on web-based commits.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","description":"generated_description_null","homepage":"generated_homepage_null","private":false,"visibility":"public","has_issues":false,"has_projects":false,"has_wiki":false,"is_template":false,"default_branch":"generated_default_branch_null","allow_squash_merge":false,"allow_merge_commit":false,"allow_rebase_merge":false,"delete_branch_on_merge":false,"allow_update_branch":false,"use_squash_pr_title_as_default":false,"squash_merge_commit_title":"PR_TITLE","squash_merge_commit_message":"PR_BODY","merge_commit_title":"PR_TITLE","merge_commit_message":"PR_BODY","archived":false,"allow_forking":false,"web_commit_signoff_required":false}';
    /**
    * name: The name of the repository.
    * description: A short description of the repository.
    * homepage: A URL with more information about the repository.
    * private: Either `true` to make the repository private or `false` to make it public. Default: `false`.  
    **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/enterprise-server@3.7/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
    * visibility: The visibility of the repository.
    * hasIssues: Either `true` to enable issues for this repository or `false` to disable them.
    * hasProjects: Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
    * hasWiki: Either `true` to enable the wiki for this repository or `false` to disable it.
    * isTemplate: Either `true` to make this repo available as a template repository or `false` to prevent it.
    * defaultBranch: Updates the default branch for this repository.
    * allowSquashMerge: Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
    * allowMergeCommit: Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
    * allowRebaseMerge: Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
    * deleteBranchOnMerge: Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
    * allowUpdateBranch: Either `true` to always allow a pull request head branch that is behind its base branch to be updated even if it is not required to be up to date before merging, or false otherwise.
    * useSquashPrTitleAsDefault: Either `true` to allow squash-merge commits to use pull request title, or `false` to use commit message. **This property has been deprecated. Please use `squash_merge_commit_title` instead.
    * squashMergeCommitTitle: The default value for a squash merge commit title:
    
    - `PR_TITLE` - default to the pull request's title.
    - `COMMIT_OR_PR_TITLE` - default to the commit's title (if only one commit) or the pull request's title (when more than one commit).
    * squashMergeCommitMessage: The default value for a squash merge commit message:
    
    - `PR_BODY` - default to the pull request's body.
    - `COMMIT_MESSAGES` - default to the branch's commit messages.
    - `BLANK` - default to a blank commit message.
    * mergeCommitTitle: The default value for a merge commit title.
    
    - `PR_TITLE` - default to the pull request's title.
    - `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name).
    * mergeCommitMessage: The default value for a merge commit message.
    
    - `PR_TITLE` - default to the pull request's title.
    - `PR_BODY` - default to the pull request's body.
    - `BLANK` - default to a blank commit message.
    * archived: Whether to archive this repository. **Note**: You cannot unarchive repositories through the API.
    * allowForking: Either `true` to allow private forks, or `false` to prevent private forks.
    * webCommitSignoffRequired: Either `true` to require contributors to sign off on web-based commits, or `false` to not require contributors to sign off on web-based commits.
    */
    public function __construct(public ?string $name, public ?string $description, public ?string $homepage, public ?bool $private, public ?string $visibility, #[\EventSauce\ObjectHydrator\MapFrom('has_issues')] public ?bool $hasIssues, #[\EventSauce\ObjectHydrator\MapFrom('has_projects')] public ?bool $hasProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_wiki')] public ?bool $hasWiki, #[\EventSauce\ObjectHydrator\MapFrom('is_template')] public ?bool $isTemplate, #[\EventSauce\ObjectHydrator\MapFrom('default_branch')] public ?string $defaultBranch, #[\EventSauce\ObjectHydrator\MapFrom('allow_squash_merge')] public ?bool $allowSquashMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_merge_commit')] public ?bool $allowMergeCommit, #[\EventSauce\ObjectHydrator\MapFrom('allow_rebase_merge')] public ?bool $allowRebaseMerge, #[\EventSauce\ObjectHydrator\MapFrom('delete_branch_on_merge')] public ?bool $deleteBranchOnMerge, #[\EventSauce\ObjectHydrator\MapFrom('allow_update_branch')] public ?bool $allowUpdateBranch, #[\EventSauce\ObjectHydrator\MapFrom('use_squash_pr_title_as_default')] public ?bool $useSquashPrTitleAsDefault, #[\EventSauce\ObjectHydrator\MapFrom('squash_merge_commit_title')] public ?string $squashMergeCommitTitle, #[\EventSauce\ObjectHydrator\MapFrom('squash_merge_commit_message')] public ?string $squashMergeCommitMessage, #[\EventSauce\ObjectHydrator\MapFrom('merge_commit_title')] public ?string $mergeCommitTitle, #[\EventSauce\ObjectHydrator\MapFrom('merge_commit_message')] public ?string $mergeCommitMessage, public ?bool $archived, #[\EventSauce\ObjectHydrator\MapFrom('allow_forking')] public ?bool $allowForking, #[\EventSauce\ObjectHydrator\MapFrom('web_commit_signoff_required')] public ?bool $webCommitSignoffRequired)
    {
    }
}
