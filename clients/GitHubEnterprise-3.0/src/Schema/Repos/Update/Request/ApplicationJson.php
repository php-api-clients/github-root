<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\Update\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the repository."
        },
        "description": {
            "type": "string",
            "description": "A short description of the repository."
        },
        "homepage": {
            "type": "string",
            "description": "A URL with more information about the repository."
        },
        "private": {
            "type": "boolean",
            "description": "Either `true` to make the repository private or `false` to make it public. Default: `false`.  \\n**Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https:\\/\\/docs.github.com\\/articles\\/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.",
            "default": false
        },
        "visibility": {
            "enum": [
                "public",
                "private",
                "internal"
            ],
            "type": "string",
            "description": "Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`.\\""
        },
        "has_issues": {
            "type": "boolean",
            "description": "Either `true` to enable issues for this repository or `false` to disable them.",
            "default": true
        },
        "has_projects": {
            "type": "boolean",
            "description": "Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you\'re creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.",
            "default": true
        },
        "has_wiki": {
            "type": "boolean",
            "description": "Either `true` to enable the wiki for this repository or `false` to disable it.",
            "default": true
        },
        "is_template": {
            "type": "boolean",
            "description": "Either `true` to make this repo available as a template repository or `false` to prevent it.",
            "default": false
        },
        "default_branch": {
            "type": "string",
            "description": "Updates the default branch for this repository."
        },
        "allow_squash_merge": {
            "type": "boolean",
            "description": "Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.",
            "default": true
        },
        "allow_merge_commit": {
            "type": "boolean",
            "description": "Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.",
            "default": true
        },
        "allow_rebase_merge": {
            "type": "boolean",
            "description": "Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.",
            "default": true
        },
        "delete_branch_on_merge": {
            "type": "boolean",
            "description": "Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.",
            "default": false
        },
        "archived": {
            "type": "boolean",
            "description": "`true` to archive this repository. **Note**: You cannot unarchive repositories through the API.",
            "default": false
        },
        "allow_forking": {
            "type": "boolean",
            "description": "Either `true` to allow private forks, or `false` to prevent private forks.",
            "default": false
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "description": "generated",
    "homepage": "generated",
    "private": false,
    "visibility": "internal",
    "has_issues": false,
    "has_projects": false,
    "has_wiki": false,
    "is_template": false,
    "default_branch": "generated",
    "allow_squash_merge": false,
    "allow_merge_commit": false,
    "allow_rebase_merge": false,
    "delete_branch_on_merge": false,
    "archived": false,
    "allow_forking": false
}';

    /**
     * name: The name of the repository.
     * description: A short description of the repository.
     * homepage: A URL with more information about the repository.
     * private: Either `true` to make the repository private or `false` to make it public. Default: `false`.
     * *Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private. **Note**: You will get a `422` error if the organization restricts [changing repository visibility](https://docs.github.com/articles/repository-permission-levels-for-an-organization#changing-the-visibility-of-repositories) to organization owners and a non-owner tries to change the value of private.
     * visibility: Can be `public` or `private`. If your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+, `visibility` can also be `internal`."
     * hasIssues: Either `true` to enable issues for this repository or `false` to disable them.
     * hasProjects: Either `true` to enable projects for this repository or `false` to disable them. **Note:** If you're creating a repository in an organization that has disabled repository projects, the default is `false`, and if you pass `true`, the API returns an error.
     * hasWiki: Either `true` to enable the wiki for this repository or `false` to disable it.
     * isTemplate: Either `true` to make this repo available as a template repository or `false` to prevent it.
     * defaultBranch: Updates the default branch for this repository.
     * allowSquashMerge: Either `true` to allow squash-merging pull requests, or `false` to prevent squash-merging.
     * allowMergeCommit: Either `true` to allow merging pull requests with a merge commit, or `false` to prevent merging pull requests with merge commits.
     * allowRebaseMerge: Either `true` to allow rebase-merging pull requests, or `false` to prevent rebase-merging.
     * deleteBranchOnMerge: Either `true` to allow automatically deleting head branches when pull requests are merged, or `false` to prevent automatic deletion.
     * archived: `true` to archive this repository. **Note**: You cannot unarchive repositories through the API.
     * allowForking: Either `true` to allow private forks, or `false` to prevent private forks.
     */
    public function __construct(public string|null $name, public string|null $description, public string|null $homepage, public bool|null $private, public string|null $visibility, #[MapFrom('has_issues')]
    public bool|null $hasIssues, #[MapFrom('has_projects')]
    public bool|null $hasProjects, #[MapFrom('has_wiki')]
    public bool|null $hasWiki, #[MapFrom('is_template')]
    public bool|null $isTemplate, #[MapFrom('default_branch')]
    public string|null $defaultBranch, #[MapFrom('allow_squash_merge')]
    public bool|null $allowSquashMerge, #[MapFrom('allow_merge_commit')]
    public bool|null $allowMergeCommit, #[MapFrom('allow_rebase_merge')]
    public bool|null $allowRebaseMerge, #[MapFrom('delete_branch_on_merge')]
    public bool|null $deleteBranchOnMerge, public bool|null $archived, #[MapFrom('allow_forking')]
    public bool|null $allowForking,)
    {
    }
}
