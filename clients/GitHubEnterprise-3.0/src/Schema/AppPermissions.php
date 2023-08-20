<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class AppPermissions
{
    public const SCHEMA_JSON         = '{
    "title": "App Permissions",
    "type": "object",
    "properties": {
        "actions": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts. Can be one of: `read` or `write`."
        },
        "administration": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation. Can be one of: `read` or `write`."
        },
        "checks": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for checks on code. Can be one of: `read` or `write`."
        },
        "contents": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges. Can be one of: `read` or `write`."
        },
        "deployments": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for deployments and deployment statuses. Can be one of: `read` or `write`."
        },
        "environments": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for managing repository environments. Can be one of: `read` or `write`."
        },
        "issues": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones. Can be one of: `read` or `write`."
        },
        "metadata": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata. Can be one of: `read` or `write`."
        },
        "packages": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for packages published to GitHub Packages. Can be one of: `read` or `write`."
        },
        "pages": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds. Can be one of: `read` or `write`."
        },
        "pull_requests": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges. Can be one of: `read` or `write`."
        },
        "repository_hooks": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage the post-receive hooks for a repository. Can be one of: `read` or `write`."
        },
        "repository_projects": {
            "enum": [
                "read",
                "write",
                "admin"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage repository projects, columns, and cards. Can be one of: `read`, `write`, or `admin`."
        },
        "secret_scanning_alerts": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and manage secret scanning alerts. Can be one of: `read` or `write`."
        },
        "secrets": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage repository secrets. Can be one of: `read` or `write`."
        },
        "security_events": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and manage security events like code scanning alerts. Can be one of: `read` or `write`."
        },
        "single_file": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage just a single file. Can be one of: `read` or `write`."
        },
        "statuses": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for commit statuses. Can be one of: `read` or `write`."
        },
        "vulnerability_alerts": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage Dependabot alerts. Can be one of: `read` or `write`."
        },
        "workflows": {
            "enum": [
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to update GitHub Actions workflow files. Can be one of: `write`."
        },
        "members": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for organization teams and members. Can be one of: `read` or `write`."
        },
        "organization_administration": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage access to an organization. Can be one of: `read` or `write`."
        },
        "organization_hooks": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage the post-receive hooks for an organization. Can be one of: `read` or `write`."
        },
        "organization_plan": {
            "enum": [
                "read"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for viewing an organization\'s plan. Can be one of: `read`."
        },
        "organization_projects": {
            "enum": [
                "read",
                "write",
                "admin"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage organization projects and projects beta (where available). Can be one of: `read`, `write`, or `admin`."
        },
        "organization_packages": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for organization packages published to GitHub Packages. Can be one of: `read` or `write`."
        },
        "organization_secrets": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage organization secrets. Can be one of: `read` or `write`."
        },
        "organization_self_hosted_runners": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization. Can be one of: `read` or `write`."
        },
        "organization_user_blocking": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and manage users blocked by the organization. Can be one of: `read` or `write`."
        },
        "team_discussions": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage team discussions and related comments. Can be one of: `read` or `write`."
        },
        "content_references": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for notification of content references and creation content attachments. Can be one of: `read` or `write`."
        }
    },
    "description": "The permissions granted to the user-to-server access token.",
    "example": {
        "contents": "read",
        "issues": "read",
        "deployments": "write",
        "single_file": "read"
    }
}';
    public const SCHEMA_TITLE        = 'App Permissions';
    public const SCHEMA_DESCRIPTION  = 'The permissions granted to the user-to-server access token.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "actions": "read",
    "administration": "write",
    "checks": "write",
    "contents": "write",
    "deployments": "read",
    "environments": "write",
    "issues": "write",
    "metadata": "write",
    "packages": "write",
    "pages": "read",
    "pull_requests": "read",
    "repository_hooks": "write",
    "repository_projects": "read",
    "secret_scanning_alerts": "write",
    "secrets": "read",
    "security_events": "read",
    "single_file": "read",
    "statuses": "write",
    "vulnerability_alerts": "write",
    "workflows": "write",
    "members": "read",
    "organization_administration": "read",
    "organization_hooks": "write",
    "organization_plan": "read",
    "organization_projects": "read",
    "organization_packages": "read",
    "organization_secrets": "write",
    "organization_self_hosted_runners": "write",
    "organization_user_blocking": "write",
    "team_discussions": "write",
    "content_references": "write"
}';

    /**
     * actions: The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts. Can be one of: `read` or `write`.
     * administration: The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation. Can be one of: `read` or `write`.
     * checks: The level of permission to grant the access token for checks on code. Can be one of: `read` or `write`.
     * contents: The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges. Can be one of: `read` or `write`.
     * deployments: The level of permission to grant the access token for deployments and deployment statuses. Can be one of: `read` or `write`.
     * environments: The level of permission to grant the access token for managing repository environments. Can be one of: `read` or `write`.
     * issues: The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones. Can be one of: `read` or `write`.
     * metadata: The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata. Can be one of: `read` or `write`.
     * packages: The level of permission to grant the access token for packages published to GitHub Packages. Can be one of: `read` or `write`.
     * pages: The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds. Can be one of: `read` or `write`.
     * pullRequests: The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges. Can be one of: `read` or `write`.
     * repositoryHooks: The level of permission to grant the access token to manage the post-receive hooks for a repository. Can be one of: `read` or `write`.
     * repositoryProjects: The level of permission to grant the access token to manage repository projects, columns, and cards. Can be one of: `read`, `write`, or `admin`.
     * secretScanningAlerts: The level of permission to grant the access token to view and manage secret scanning alerts. Can be one of: `read` or `write`.
     * secrets: The level of permission to grant the access token to manage repository secrets. Can be one of: `read` or `write`.
     * securityEvents: The level of permission to grant the access token to view and manage security events like code scanning alerts. Can be one of: `read` or `write`.
     * singleFile: The level of permission to grant the access token to manage just a single file. Can be one of: `read` or `write`.
     * statuses: The level of permission to grant the access token for commit statuses. Can be one of: `read` or `write`.
     * vulnerabilityAlerts: The level of permission to grant the access token to manage Dependabot alerts. Can be one of: `read` or `write`.
     * workflows: The level of permission to grant the access token to update GitHub Actions workflow files. Can be one of: `write`.
     * members: The level of permission to grant the access token for organization teams and members. Can be one of: `read` or `write`.
     * organizationAdministration: The level of permission to grant the access token to manage access to an organization. Can be one of: `read` or `write`.
     * organizationHooks: The level of permission to grant the access token to manage the post-receive hooks for an organization. Can be one of: `read` or `write`.
     * organizationPlan: The level of permission to grant the access token for viewing an organization's plan. Can be one of: `read`.
     * organizationProjects: The level of permission to grant the access token to manage organization projects and projects beta (where available). Can be one of: `read`, `write`, or `admin`.
     * organizationPackages: The level of permission to grant the access token for organization packages published to GitHub Packages. Can be one of: `read` or `write`.
     * organizationSecrets: The level of permission to grant the access token to manage organization secrets. Can be one of: `read` or `write`.
     * organizationSelfHostedRunners: The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization. Can be one of: `read` or `write`.
     * organizationUserBlocking: The level of permission to grant the access token to view and manage users blocked by the organization. Can be one of: `read` or `write`.
     * teamDiscussions: The level of permission to grant the access token to manage team discussions and related comments. Can be one of: `read` or `write`.
     * contentReferences: The level of permission to grant the access token for notification of content references and creation content attachments. Can be one of: `read` or `write`.
     */
    public function __construct(public string|null $actions, public string|null $administration, public string|null $checks, public string|null $contents, public string|null $deployments, public string|null $environments, public string|null $issues, public string|null $metadata, public string|null $packages, public string|null $pages, #[MapFrom('pull_requests')]
    public string|null $pullRequests, #[MapFrom('repository_hooks')]
    public string|null $repositoryHooks, #[MapFrom('repository_projects')]
    public string|null $repositoryProjects, #[MapFrom('secret_scanning_alerts')]
    public string|null $secretScanningAlerts, public string|null $secrets, #[MapFrom('security_events')]
    public string|null $securityEvents, #[MapFrom('single_file')]
    public string|null $singleFile, public string|null $statuses, #[MapFrom('vulnerability_alerts')]
    public string|null $vulnerabilityAlerts, public string|null $workflows, public string|null $members, #[MapFrom('organization_administration')]
    public string|null $organizationAdministration, #[MapFrom('organization_hooks')]
    public string|null $organizationHooks, #[MapFrom('organization_plan')]
    public string|null $organizationPlan, #[MapFrom('organization_projects')]
    public string|null $organizationProjects, #[MapFrom('organization_packages')]
    public string|null $organizationPackages, #[MapFrom('organization_secrets')]
    public string|null $organizationSecrets, #[MapFrom('organization_self_hosted_runners')]
    public string|null $organizationSelfHostedRunners, #[MapFrom('organization_user_blocking')]
    public string|null $organizationUserBlocking, #[MapFrom('team_discussions')]
    public string|null $teamDiscussions, #[MapFrom('content_references')]
    public string|null $contentReferences,)
    {
    }
}
