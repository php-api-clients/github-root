<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class AppPermissions implements \ApiClients\Client\GitHub\Contract\AppPermissions
{
    const SCHEMA_JSON = '{
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
        "codespaces": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to create, edit, delete, and list Codespaces."
        },
        "contents": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."
        },
        "dependabot_secrets": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The leve of permission to grant the access token to manage Dependabot secrets."
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
        "repository_custom_properties": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and edit custom properties for a repository, when allowed by the property."
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
        "organization_custom_roles": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for custom repository roles management."
        },
        "organization_custom_org_roles": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for custom organization roles management."
        },
        "organization_custom_properties": {
            "enum": [
                "read",
                "write",
                "admin"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for custom property management."
        },
        "organization_copilot_seat_management": {
            "enum": [
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token for managing access to GitHub Copilot for members of an organization with a Copilot Business subscription. This property is in public preview and is subject to change."
        },
        "organization_announcement_banners": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and manage announcement banners for an organization."
        },
        "organization_events": {
            "enum": [
                "read"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view events triggered by an activity in an organization."
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
            "description": "The level of permission to grant the access token to manage organization projects and projects public preview (where available)."
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
        },
        "email_addresses": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage the email addresses belonging to a user."
        },
        "followers": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage the followers belonging to a user."
        },
        "git_ssh_keys": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage git SSH keys."
        },
        "gpg_keys": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and manage GPG keys belonging to a user."
        },
        "interaction_limits": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to view and manage interaction limits on a repository."
        },
        "profile": {
            "enum": [
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to manage the profile settings belonging to a user."
        },
        "starring": {
            "enum": [
                "read",
                "write"
            ],
            "type": "string",
            "description": "The level of permission to grant the access token to list and manage repositories a user is starring."
        }
    },
    "description": "The permissions granted to the user access token.",
    "example": {
        "contents": "read",
        "issues": "read",
        "deployments": "write",
        "single_file": "read"
    }
}';
    public const SCHEMA_TITLE = 'App Permissions';
    public const SCHEMA_DESCRIPTION = 'The permissions granted to the user access token.';
    const SCHEMA_EXAMPLE_DATA = '{
    "actions": "read",
    "administration": "read",
    "checks": "read",
    "codespaces": "read",
    "contents": "read",
    "dependabot_secrets": "read",
    "deployments": "read",
    "environments": "read",
    "issues": "read",
    "metadata": "read",
    "packages": "read",
    "pages": "read",
    "pull_requests": "read",
    "repository_custom_properties": "read",
    "repository_hooks": "read",
    "repository_projects": "read",
    "secret_scanning_alerts": "read",
    "secrets": "read",
    "security_events": "read",
    "single_file": "read",
    "statuses": "read",
    "vulnerability_alerts": "read",
    "workflows": "write",
    "members": "read",
    "organization_administration": "read",
    "organization_custom_roles": "read",
    "organization_custom_org_roles": "read",
    "organization_custom_properties": "read",
    "organization_copilot_seat_management": "write",
    "organization_announcement_banners": "read",
    "organization_events": "read",
    "organization_hooks": "read",
    "organization_personal_access_tokens": "read",
    "organization_personal_access_token_requests": "read",
    "organization_plan": "read",
    "organization_projects": "read",
    "organization_packages": "read",
    "organization_secrets": "read",
    "organization_self_hosted_runners": "read",
    "organization_user_blocking": "read",
    "team_discussions": "read",
    "email_addresses": "read",
    "followers": "read",
    "git_ssh_keys": "read",
    "gpg_keys": "read",
    "interaction_limits": "read",
    "profile": "write",
    "starring": "read"
}';
    /**
     * actions: The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts.
     * administration: The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation.
     * checks: The level of permission to grant the access token for checks on code.
     * codespaces: The level of permission to grant the access token to create, edit, delete, and list Codespaces.
     * contents: The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges.
     * dependabotSecrets: The leve of permission to grant the access token to manage Dependabot secrets.
     * deployments: The level of permission to grant the access token for deployments and deployment statuses.
     * environments: The level of permission to grant the access token for managing repository environments.
     * issues: The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones.
     * metadata: The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata.
     * packages: The level of permission to grant the access token for packages published to GitHub Packages.
     * pages: The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds.
     * pullRequests: The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges.
     * repositoryCustomProperties: The level of permission to grant the access token to view and edit custom properties for a repository, when allowed by the property.
     * repositoryHooks: The level of permission to grant the access token to manage the post-receive hooks for a repository.
     * repositoryProjects: The level of permission to grant the access token to manage repository projects, columns, and cards.
     * secretScanningAlerts: The level of permission to grant the access token to view and manage secret scanning alerts.
     * secrets: The level of permission to grant the access token to manage repository secrets.
     * securityEvents: The level of permission to grant the access token to view and manage security events like code scanning alerts.
     * singleFile: The level of permission to grant the access token to manage just a single file.
     * statuses: The level of permission to grant the access token for commit statuses.
     * vulnerabilityAlerts: The level of permission to grant the access token to manage Dependabot alerts.
     * workflows: The level of permission to grant the access token to update GitHub Actions workflow files.
     * members: The level of permission to grant the access token for organization teams and members.
     * organizationAdministration: The level of permission to grant the access token to manage access to an organization.
     * organizationCustomRoles: The level of permission to grant the access token for custom repository roles management.
     * organizationCustomOrgRoles: The level of permission to grant the access token for custom organization roles management.
     * organizationCustomProperties: The level of permission to grant the access token for custom property management.
     * organizationCopilotSeatManagement: The level of permission to grant the access token for managing access to GitHub Copilot for members of an organization with a Copilot Business subscription. This property is in public preview and is subject to change.
     * organizationAnnouncementBanners: The level of permission to grant the access token to view and manage announcement banners for an organization.
     * organizationEvents: The level of permission to grant the access token to view events triggered by an activity in an organization.
     * organizationHooks: The level of permission to grant the access token to manage the post-receive hooks for an organization.
     * organizationPersonalAccessTokens: The level of permission to grant the access token for viewing and managing fine-grained personal access token requests to an organization.
     * organizationPersonalAccessTokenRequests: The level of permission to grant the access token for viewing and managing fine-grained personal access tokens that have been approved by an organization.
     * organizationPlan: The level of permission to grant the access token for viewing an organization's plan.
     * organizationProjects: The level of permission to grant the access token to manage organization projects and projects public preview (where available).
     * organizationPackages: The level of permission to grant the access token for organization packages published to GitHub Packages.
     * organizationSecrets: The level of permission to grant the access token to manage organization secrets.
     * organizationSelfHostedRunners: The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization.
     * organizationUserBlocking: The level of permission to grant the access token to view and manage users blocked by the organization.
     * teamDiscussions: The level of permission to grant the access token to manage team discussions and related comments.
     * emailAddresses: The level of permission to grant the access token to manage the email addresses belonging to a user.
     * followers: The level of permission to grant the access token to manage the followers belonging to a user.
     * gitSshKeys: The level of permission to grant the access token to manage git SSH keys.
     * gpgKeys: The level of permission to grant the access token to view and manage GPG keys belonging to a user.
     * interactionLimits: The level of permission to grant the access token to view and manage interaction limits on a repository.
     * profile: The level of permission to grant the access token to manage the profile settings belonging to a user.
     * starring: The level of permission to grant the access token to list and manage repositories a user is starring.
     */
    public function __construct(public ?string $actions, public ?string $administration, public ?string $checks, public ?string $codespaces, public ?string $contents, #[\EventSauce\ObjectHydrator\MapFrom('dependabot_secrets')] public ?string $dependabotSecrets, public ?string $deployments, public ?string $environments, public ?string $issues, public ?string $metadata, public ?string $packages, public ?string $pages, #[\EventSauce\ObjectHydrator\MapFrom('pull_requests')] public ?string $pullRequests, #[\EventSauce\ObjectHydrator\MapFrom('repository_custom_properties')] public ?string $repositoryCustomProperties, #[\EventSauce\ObjectHydrator\MapFrom('repository_hooks')] public ?string $repositoryHooks, #[\EventSauce\ObjectHydrator\MapFrom('repository_projects')] public ?string $repositoryProjects, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_alerts')] public ?string $secretScanningAlerts, public ?string $secrets, #[\EventSauce\ObjectHydrator\MapFrom('security_events')] public ?string $securityEvents, #[\EventSauce\ObjectHydrator\MapFrom('single_file')] public ?string $singleFile, public ?string $statuses, #[\EventSauce\ObjectHydrator\MapFrom('vulnerability_alerts')] public ?string $vulnerabilityAlerts, public ?string $workflows, public ?string $members, #[\EventSauce\ObjectHydrator\MapFrom('organization_administration')] public ?string $organizationAdministration, #[\EventSauce\ObjectHydrator\MapFrom('organization_custom_roles')] public ?string $organizationCustomRoles, #[\EventSauce\ObjectHydrator\MapFrom('organization_custom_org_roles')] public ?string $organizationCustomOrgRoles, #[\EventSauce\ObjectHydrator\MapFrom('organization_custom_properties')] public ?string $organizationCustomProperties, #[\EventSauce\ObjectHydrator\MapFrom('organization_copilot_seat_management')] public ?string $organizationCopilotSeatManagement, #[\EventSauce\ObjectHydrator\MapFrom('organization_announcement_banners')] public ?string $organizationAnnouncementBanners, #[\EventSauce\ObjectHydrator\MapFrom('organization_events')] public ?string $organizationEvents, #[\EventSauce\ObjectHydrator\MapFrom('organization_hooks')] public ?string $organizationHooks, #[\EventSauce\ObjectHydrator\MapFrom('organization_personal_access_tokens')] public ?string $organizationPersonalAccessTokens, #[\EventSauce\ObjectHydrator\MapFrom('organization_personal_access_token_requests')] public ?string $organizationPersonalAccessTokenRequests, #[\EventSauce\ObjectHydrator\MapFrom('organization_plan')] public ?string $organizationPlan, #[\EventSauce\ObjectHydrator\MapFrom('organization_projects')] public ?string $organizationProjects, #[\EventSauce\ObjectHydrator\MapFrom('organization_packages')] public ?string $organizationPackages, #[\EventSauce\ObjectHydrator\MapFrom('organization_secrets')] public ?string $organizationSecrets, #[\EventSauce\ObjectHydrator\MapFrom('organization_self_hosted_runners')] public ?string $organizationSelfHostedRunners, #[\EventSauce\ObjectHydrator\MapFrom('organization_user_blocking')] public ?string $organizationUserBlocking, #[\EventSauce\ObjectHydrator\MapFrom('team_discussions')] public ?string $teamDiscussions, #[\EventSauce\ObjectHydrator\MapFrom('email_addresses')] public ?string $emailAddresses, public ?string $followers, #[\EventSauce\ObjectHydrator\MapFrom('git_ssh_keys')] public ?string $gitSshKeys, #[\EventSauce\ObjectHydrator\MapFrom('gpg_keys')] public ?string $gpgKeys, #[\EventSauce\ObjectHydrator\MapFrom('interaction_limits')] public ?string $interactionLimits, public ?string $profile, public ?string $starring)
    {
    }
}
