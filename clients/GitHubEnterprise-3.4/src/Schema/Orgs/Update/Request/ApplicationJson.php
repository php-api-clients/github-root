<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Orgs\Update\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "billing_email": {
            "type": "string",
            "description": "Billing email address. This address is not publicized."
        },
        "company": {
            "type": "string",
            "description": "The company name."
        },
        "email": {
            "type": "string",
            "description": "The publicly visible email address."
        },
        "twitter_username": {
            "type": "string",
            "description": "The Twitter username of the company."
        },
        "location": {
            "type": "string",
            "description": "The location."
        },
        "name": {
            "type": "string",
            "description": "The shorthand name of the company."
        },
        "description": {
            "type": "string",
            "description": "The description of the company."
        },
        "has_organization_projects": {
            "type": "boolean",
            "description": "Whether an organization can use organization projects."
        },
        "has_repository_projects": {
            "type": "boolean",
            "description": "Whether repositories that belong to the organization can use repository projects."
        },
        "default_repository_permission": {
            "enum": [
                "read",
                "write",
                "admin",
                "none"
            ],
            "type": "string",
            "description": "Default permission level members have for organization repositories.",
            "default": "read"
        },
        "members_can_create_repositories": {
            "type": "boolean",
            "description": "Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.",
            "default": true
        },
        "members_can_create_internal_repositories": {
            "type": "boolean",
            "description": "Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.4\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."
        },
        "members_can_create_private_repositories": {
            "type": "boolean",
            "description": "Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.4\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."
        },
        "members_can_create_public_repositories": {
            "type": "boolean",
            "description": "Whether organization members can create public repositories, which are visible to anyone. For more information, see \\"[Restricting repository creation in your organization](https:\\/\\/docs.github.com\\/enterprise-server@3.4\\/github\\/setting-up-and-managing-organizations-and-teams\\/restricting-repository-creation-in-your-organization)\\" in the GitHub Help documentation."
        },
        "members_allowed_repository_creation_type": {
            "enum": [
                "all",
                "private",
                "none"
            ],
            "type": "string",
            "description": "Specifies which types of repositories non-admin organization members can create. \\n**Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details."
        },
        "members_can_create_pages": {
            "type": "boolean",
            "description": "Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.",
            "default": true
        },
        "members_can_fork_private_repositories": {
            "type": "boolean",
            "description": "Whether organization members can fork private organization repositories.",
            "default": false
        },
        "blog": {
            "type": "string",
            "examples": [
                "\\"http:\\/\\/github.blog\\""
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "billing_email": "generated",
    "company": "generated",
    "email": "generated",
    "twitter_username": "generated",
    "location": "generated",
    "name": "generated",
    "description": "generated",
    "has_organization_projects": false,
    "has_repository_projects": false,
    "default_repository_permission": "read",
    "members_can_create_repositories": false,
    "members_can_create_internal_repositories": false,
    "members_can_create_private_repositories": false,
    "members_can_create_public_repositories": false,
    "members_allowed_repository_creation_type": "none",
    "members_can_create_pages": false,
    "members_can_fork_private_repositories": false,
    "blog": "\\"http:\\/\\/github.blog\\""
}';

    /**
     * billingEmail: Billing email address. This address is not publicized.
     * company: The company name.
     * email: The publicly visible email address.
     * twitterUsername: The Twitter username of the company.
     * location: The location.
     * name: The shorthand name of the company.
     * description: The description of the company.
     * hasOrganizationProjects: Whether an organization can use organization projects.
     * hasRepositoryProjects: Whether repositories that belong to the organization can use repository projects.
     * defaultRepositoryPermission: Default permission level members have for organization repositories.
     * membersCanCreateRepositories: Whether of non-admin organization members can create repositories. **Note:** A parameter can override this parameter. See `members_allowed_repository_creation_type` in this table for details.
     * membersCanCreateInternalRepositories: Whether organization members can create internal repositories, which are visible to all enterprise members. You can only allow members to create internal repositories if your organization is associated with an enterprise account using GitHub Enterprise Cloud or GitHub Enterprise Server 2.20+. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/enterprise-server@3.4/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     * membersCanCreatePrivateRepositories: Whether organization members can create private repositories, which are visible to organization members with permission. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/enterprise-server@3.4/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     * membersCanCreatePublicRepositories: Whether organization members can create public repositories, which are visible to anyone. For more information, see "[Restricting repository creation in your organization](https://docs.github.com/enterprise-server@3.4/github/setting-up-and-managing-organizations-and-teams/restricting-repository-creation-in-your-organization)" in the GitHub Help documentation.
     * membersAllowedRepositoryCreationType: Specifies which types of repositories non-admin organization members can create.
     * *Note:** This parameter is deprecated and will be removed in the future. Its return value ignores internal repositories. Using this parameter overrides values set in `members_can_create_repositories`. See the parameter deprecation notice in the operation description for details.
     * membersCanCreatePages: Whether organization members can create GitHub Pages sites. Existing published sites will not be impacted.
     * membersCanForkPrivateRepositories: Whether organization members can fork private organization repositories.
     */
    public function __construct(#[MapFrom('billing_email')]
    public string|null $billingEmail, public string|null $company, public string|null $email, #[MapFrom('twitter_username')]
    public string|null $twitterUsername, public string|null $location, public string|null $name, public string|null $description, #[MapFrom('has_organization_projects')]
    public bool|null $hasOrganizationProjects, #[MapFrom('has_repository_projects')]
    public bool|null $hasRepositoryProjects, #[MapFrom('default_repository_permission')]
    public string|null $defaultRepositoryPermission, #[MapFrom('members_can_create_repositories')]
    public bool|null $membersCanCreateRepositories, #[MapFrom('members_can_create_internal_repositories')]
    public bool|null $membersCanCreateInternalRepositories, #[MapFrom('members_can_create_private_repositories')]
    public bool|null $membersCanCreatePrivateRepositories, #[MapFrom('members_can_create_public_repositories')]
    public bool|null $membersCanCreatePublicRepositories, #[MapFrom('members_allowed_repository_creation_type')]
    public string|null $membersAllowedRepositoryCreationType, #[MapFrom('members_can_create_pages')]
    public bool|null $membersCanCreatePages, #[MapFrom('members_can_fork_private_repositories')]
    public bool|null $membersCanForkPrivateRepositories, public string|null $blog,)
    {
    }
}
