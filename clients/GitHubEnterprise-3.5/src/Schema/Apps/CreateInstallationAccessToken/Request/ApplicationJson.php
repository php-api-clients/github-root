<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Apps\CreateInstallationAccessToken\Request;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "repositories": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "rails"
                ]
            },
            "description": "List of repository names that the token should have access to"
        },
        "repository_ids": {
            "type": "array",
            "items": {
                "type": "integer"
            },
            "description": "List of repository IDs that the token should have access to",
            "examples": [
                1
            ]
        },
        "permissions": {
            "title": "App Permissions",
            "type": "object",
            "properties": {
                "actions": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."
                },
                "administration": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."
                },
                "checks": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for checks on code."
                },
                "contents": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."
                },
                "deployments": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for deployments and deployment statuses."
                },
                "environments": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for managing repository environments."
                },
                "issues": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."
                },
                "metadata": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."
                },
                "packages": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for packages published to GitHub Packages."
                },
                "pages": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."
                },
                "pull_requests": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."
                },
                "repository_hooks": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the post-receive hooks for a repository."
                },
                "repository_projects": {
                    "enum": [
                        "read",
                        "write",
                        "admin"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage repository projects, columns, and cards."
                },
                "secret_scanning_alerts": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage secret scanning alerts."
                },
                "secrets": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage repository secrets."
                },
                "security_events": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage security events like code scanning alerts."
                },
                "single_file": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage just a single file."
                },
                "statuses": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for commit statuses."
                },
                "vulnerability_alerts": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage Dependabot alerts."
                },
                "workflows": {
                    "enum": [
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to update GitHub Actions workflow files."
                },
                "members": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for organization teams and members."
                },
                "organization_administration": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage access to an organization."
                },
                "organization_hooks": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage the post-receive hooks for an organization."
                },
                "organization_personal_access_tokens": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for viewing and managing fine-grained personal access token requests to an organization."
                },
                "organization_personal_access_token_requests": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for viewing and managing fine-grained personal access tokens that have been approved by an organization."
                },
                "organization_plan": {
                    "enum": [
                        "read"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for viewing an organization\'s plan."
                },
                "organization_projects": {
                    "enum": [
                        "read",
                        "write",
                        "admin"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage organization projects and projects beta (where available)."
                },
                "organization_packages": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token for organization packages published to GitHub Packages."
                },
                "organization_secrets": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage organization secrets."
                },
                "organization_self_hosted_runners": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."
                },
                "organization_user_blocking": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to view and manage users blocked by the organization."
                },
                "team_discussions": {
                    "enum": [
                        "read",
                        "write"
                    ],
                    "type": "string",
                    "description": "The level of permission to grant the access token to manage team discussions and related comments."
                }
            },
            "description": "The permissions granted to the user access token.",
            "example": {
                "contents": "read",
                "issues": "read",
                "deployments": "write",
                "single_file": "read"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repositories": [
        "generated",
        "generated"
    ],
    "repository_ids": [
        1,
        1
    ],
    "permissions": {
        "actions": "read",
        "administration": "write",
        "checks": "write",
        "contents": "read",
        "deployments": "write",
        "environments": "write",
        "issues": "read",
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
        "organization_personal_access_tokens": "read",
        "organization_personal_access_token_requests": "read",
        "organization_plan": "read",
        "organization_projects": "read",
        "organization_packages": "read",
        "organization_secrets": "write",
        "organization_self_hosted_runners": "write",
        "organization_user_blocking": "write",
        "team_discussions": "write"
    }
}';

    /**
     * repositories: List of repository names that the token should have access to
     * repositoryIds: List of repository IDs that the token should have access to
     * permissions: The permissions granted to the user access token.
     */
    public function __construct(public array|null $repositories, #[MapFrom('repository_ids')]
    public array|null $repositoryIds, public Schema\AppPermissions|null $permissions,)
    {
    }
}
