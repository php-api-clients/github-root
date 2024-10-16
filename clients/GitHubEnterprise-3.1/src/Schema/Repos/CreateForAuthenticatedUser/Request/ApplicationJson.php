<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Repos\CreateForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the repository.",
            "examples": [
                "Team Environment"
            ]
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
            "description": "Whether the repository is private.",
            "default": false
        },
        "has_issues": {
            "type": "boolean",
            "description": "Whether issues are enabled.",
            "default": true,
            "examples": [
                true
            ]
        },
        "has_projects": {
            "type": "boolean",
            "description": "Whether projects are enabled.",
            "default": true,
            "examples": [
                true
            ]
        },
        "has_wiki": {
            "type": "boolean",
            "description": "Whether the wiki is enabled.",
            "default": true,
            "examples": [
                true
            ]
        },
        "team_id": {
            "type": "integer",
            "description": "The id of the team that will be granted access to this repository. This is only valid when creating a repository in an organization."
        },
        "auto_init": {
            "type": "boolean",
            "description": "Whether the repository is initialized with a minimal README.",
            "default": false
        },
        "gitignore_template": {
            "type": "string",
            "description": "The desired language or platform to apply to the .gitignore.",
            "examples": [
                "Haskell"
            ]
        },
        "license_template": {
            "type": "string",
            "description": "The license keyword of the open source license for this repository.",
            "examples": [
                "mit"
            ]
        },
        "allow_squash_merge": {
            "type": "boolean",
            "description": "Whether to allow squash merges for pull requests.",
            "default": true,
            "examples": [
                true
            ]
        },
        "allow_merge_commit": {
            "type": "boolean",
            "description": "Whether to allow merge commits for pull requests.",
            "default": true,
            "examples": [
                true
            ]
        },
        "allow_rebase_merge": {
            "type": "boolean",
            "description": "Whether to allow rebase merges for pull requests.",
            "default": true,
            "examples": [
                true
            ]
        },
        "delete_branch_on_merge": {
            "type": "boolean",
            "description": "Whether to delete head branches when pull requests are merged",
            "default": false,
            "examples": [
                false
            ]
        },
        "has_downloads": {
            "type": "boolean",
            "description": "Whether downloads are enabled.",
            "default": true,
            "examples": [
                true
            ]
        },
        "is_template": {
            "type": "boolean",
            "description": "Whether this repository acts as a template that can be used to generate new repositories.",
            "default": false,
            "examples": [
                true
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "Team Environment",
    "description": "generated",
    "homepage": "generated",
    "private": false,
    "has_issues": true,
    "has_projects": true,
    "has_wiki": true,
    "team_id": 7,
    "auto_init": false,
    "gitignore_template": "Haskell",
    "license_template": "mit",
    "allow_squash_merge": true,
    "allow_merge_commit": true,
    "allow_rebase_merge": true,
    "delete_branch_on_merge": false,
    "has_downloads": true,
    "is_template": true
}';

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
    public function __construct(public string $name, public string|null $description, public string|null $homepage, public bool|null $private, #[MapFrom('has_issues')]
    public bool|null $hasIssues, #[MapFrom('has_projects')]
    public bool|null $hasProjects, #[MapFrom('has_wiki')]
    public bool|null $hasWiki, #[MapFrom('team_id')]
    public int|null $teamId, #[MapFrom('auto_init')]
    public bool|null $autoInit, #[MapFrom('gitignore_template')]
    public string|null $gitignoreTemplate, #[MapFrom('license_template')]
    public string|null $licenseTemplate, #[MapFrom('allow_squash_merge')]
    public bool|null $allowSquashMerge, #[MapFrom('allow_merge_commit')]
    public bool|null $allowMergeCommit, #[MapFrom('allow_rebase_merge')]
    public bool|null $allowRebaseMerge, #[MapFrom('delete_branch_on_merge')]
    public bool|null $deleteBranchOnMerge, #[MapFrom('has_downloads')]
    public bool|null $hasDownloads, #[MapFrom('is_template')]
    public bool|null $isTemplate,)
    {
    }
}
