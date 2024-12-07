<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

final readonly class OrganizationFull implements \ApiClients\Client\GitHub\Contract\OrganizationFull
{
    const SCHEMA_JSON = '{
    "title": "Organization Full",
    "required": [
        "login",
        "url",
        "id",
        "node_id",
        "repos_url",
        "events_url",
        "hooks_url",
        "issues_url",
        "members_url",
        "public_members_url",
        "avatar_url",
        "description",
        "html_url",
        "has_organization_projects",
        "has_repository_projects",
        "public_repos",
        "public_gists",
        "followers",
        "following",
        "type",
        "created_at",
        "updated_at",
        "archived_at"
    ],
    "type": "object",
    "properties": {
        "login": {
            "type": "string",
            "examples": [
                "github"
            ]
        },
        "id": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDEyOk9yZ2FuaXphdGlvbjE="
            ]
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github"
            ]
        },
        "repos_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/repos"
            ]
        },
        "events_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/events"
            ]
        },
        "hooks_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"
            ]
        },
        "issues_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/issues"
            ]
        },
        "members_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"
            ]
        },
        "public_members_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"
            ]
        },
        "avatar_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "A great organization"
            ]
        },
        "name": {
            "type": "string",
            "examples": [
                "github"
            ]
        },
        "company": {
            "type": "string",
            "examples": [
                "GitHub"
            ]
        },
        "blog": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/blog"
            ]
        },
        "location": {
            "type": "string",
            "examples": [
                "San Francisco"
            ]
        },
        "email": {
            "type": "string",
            "format": "email",
            "examples": [
                "octocat@github.com"
            ]
        },
        "twitter_username": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "github"
            ]
        },
        "is_verified": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "has_organization_projects": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "has_repository_projects": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "public_repos": {
            "type": "integer",
            "examples": [
                2
            ]
        },
        "public_gists": {
            "type": "integer",
            "examples": [
                1
            ]
        },
        "followers": {
            "type": "integer",
            "examples": [
                20
            ]
        },
        "following": {
            "type": "integer",
            "examples": [
                0
            ]
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/octocat"
            ]
        },
        "type": {
            "type": "string",
            "examples": [
                "Organization"
            ]
        },
        "total_private_repos": {
            "type": "integer",
            "examples": [
                100
            ]
        },
        "owned_private_repos": {
            "type": "integer",
            "examples": [
                100
            ]
        },
        "private_gists": {
            "type": [
                "integer",
                "null"
            ],
            "examples": [
                81
            ]
        },
        "disk_usage": {
            "type": [
                "integer",
                "null"
            ],
            "examples": [
                10000
            ]
        },
        "collaborators": {
            "type": [
                "integer",
                "null"
            ],
            "description": "The number of collaborators on private repositories.\\n\\nThis field may be null if the number of private repositories is over 50,000.",
            "examples": [
                8
            ]
        },
        "billing_email": {
            "type": [
                "string",
                "null"
            ],
            "format": "email",
            "examples": [
                "org@example.com"
            ]
        },
        "plan": {
            "required": [
                "name",
                "space",
                "private_repos"
            ],
            "type": "object",
            "properties": {
                "name": {
                    "type": "string"
                },
                "space": {
                    "type": "integer"
                },
                "private_repos": {
                    "type": "integer"
                },
                "filled_seats": {
                    "type": "integer"
                },
                "seats": {
                    "type": "integer"
                }
            }
        },
        "default_repository_permission": {
            "type": [
                "string",
                "null"
            ]
        },
        "members_can_create_repositories": {
            "type": [
                "boolean",
                "null"
            ],
            "examples": [
                true
            ]
        },
        "two_factor_requirement_enabled": {
            "type": [
                "boolean",
                "null"
            ],
            "examples": [
                true
            ]
        },
        "members_allowed_repository_creation_type": {
            "type": "string",
            "examples": [
                "all"
            ]
        },
        "members_can_create_public_repositories": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "members_can_create_private_repositories": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "members_can_create_internal_repositories": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "members_can_create_pages": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "members_can_create_public_pages": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "members_can_create_private_pages": {
            "type": "boolean",
            "examples": [
                true
            ]
        },
        "members_can_fork_private_repositories": {
            "type": [
                "boolean",
                "null"
            ],
            "examples": [
                false
            ]
        },
        "web_commit_signoff_required": {
            "type": "boolean",
            "examples": [
                false
            ]
        },
        "advanced_security_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether GitHub Advanced Security is enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.",
            "deprecated": true,
            "examples": [
                false
            ]
        },
        "dependabot_alerts_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.",
            "deprecated": true,
            "examples": [
                false
            ]
        },
        "dependabot_security_updates_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether Dependabot security updates are automatically enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.",
            "deprecated": true,
            "examples": [
                false
            ]
        },
        "dependency_graph_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether dependency graph is automatically enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.",
            "deprecated": true,
            "examples": [
                false
            ]
        },
        "secret_scanning_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether secret scanning is automatically enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.",
            "deprecated": true,
            "examples": [
                false
            ]
        },
        "secret_scanning_push_protection_enabled_for_new_repositories": {
            "type": "boolean",
            "description": "**Endpoint closing down notice.** Please use [code security configurations](https:\\/\\/docs.github.com\\/rest\\/code-security\\/configurations) instead.\\n\\nWhether secret scanning push protection is automatically enabled for new repositories and repositories transferred to this organization.\\n\\nThis field is only visible to organization owners or members of a team with the security manager role.",
            "deprecated": true,
            "examples": [
                false
            ]
        },
        "secret_scanning_push_protection_custom_link_enabled": {
            "type": "boolean",
            "description": "Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.",
            "examples": [
                false
            ]
        },
        "secret_scanning_push_protection_custom_link": {
            "type": [
                "string",
                "null"
            ],
            "description": "An optional URL string to display to contributors who are blocked from pushing a secret.",
            "examples": [
                "https:\\/\\/github.com\\/test-org\\/test-repo\\/blob\\/main\\/README.md"
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2008-01-14T04:33:35Z"
            ]
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        },
        "archived_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "deploy_keys_enabled_for_repositories": {
            "type": "boolean",
            "description": "Controls whether or not deploy keys may be added and used for repositories in the organization.",
            "examples": [
                false
            ]
        }
    },
    "description": "Organization Full"
}';
    public const SCHEMA_TITLE = 'Organization Full';
    public const SCHEMA_DESCRIPTION = 'Organization Full';
    const SCHEMA_EXAMPLE_DATA = '{
    "login": "generated",
    "id": 2,
    "node_id": "generated",
    "url": "https:\\/\\/example.com\\/",
    "repos_url": "https:\\/\\/example.com\\/",
    "events_url": "https:\\/\\/example.com\\/",
    "hooks_url": "generated",
    "issues_url": "generated",
    "members_url": "generated",
    "public_members_url": "generated",
    "avatar_url": "generated",
    "description": "generated",
    "name": "generated",
    "company": "generated",
    "blog": "https:\\/\\/example.com\\/",
    "location": "generated",
    "email": "hi@example.com",
    "twitter_username": "generated",
    "is_verified": false,
    "has_organization_projects": false,
    "has_repository_projects": false,
    "public_repos": 12,
    "public_gists": 12,
    "followers": 9,
    "following": 9,
    "html_url": "https:\\/\\/example.com\\/",
    "type": "generated",
    "total_private_repos": 19,
    "owned_private_repos": 19,
    "private_gists": 13,
    "disk_usage": 10,
    "collaborators": 13,
    "billing_email": "hi@example.com",
    "plan": {
        "name": "generated",
        "space": 5,
        "private_repos": 13,
        "filled_seats": 12,
        "seats": 5
    },
    "default_repository_permission": "generated",
    "members_can_create_repositories": false,
    "two_factor_requirement_enabled": false,
    "members_allowed_repository_creation_type": "generated",
    "members_can_create_public_repositories": false,
    "members_can_create_private_repositories": false,
    "members_can_create_internal_repositories": false,
    "members_can_create_pages": false,
    "members_can_create_public_pages": false,
    "members_can_create_private_pages": false,
    "members_can_fork_private_repositories": false,
    "web_commit_signoff_required": false,
    "advanced_security_enabled_for_new_repositories": false,
    "dependabot_alerts_enabled_for_new_repositories": false,
    "dependabot_security_updates_enabled_for_new_repositories": false,
    "dependency_graph_enabled_for_new_repositories": false,
    "secret_scanning_enabled_for_new_repositories": false,
    "secret_scanning_push_protection_enabled_for_new_repositories": false,
    "secret_scanning_push_protection_custom_link_enabled": false,
    "secret_scanning_push_protection_custom_link": "generated",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "archived_at": "1970-01-01T00:00:00+00:00",
    "deploy_keys_enabled_for_repositories": false
}';
    /**
    * collaborators: The number of collaborators on private repositories.
    
    This field may be null if the number of private repositories is over 50,000.
    * advancedSecurityEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.
    
    Whether GitHub Advanced Security is enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    * dependabotAlertsEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.
    
    Whether Dependabot alerts are automatically enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    * dependabotSecurityUpdatesEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.
    
    Whether Dependabot security updates are automatically enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    * dependencyGraphEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.
    
    Whether dependency graph is automatically enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    * secretScanningEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.
    
    Whether secret scanning is automatically enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    * secretScanningPushProtectionEnabledForNewRepositories: **Endpoint closing down notice.** Please use [code security configurations](https://docs.github.com/rest/code-security/configurations) instead.
    
    Whether secret scanning push protection is automatically enabled for new repositories and repositories transferred to this organization.
    
    This field is only visible to organization owners or members of a team with the security manager role.
    * secretScanningPushProtectionCustomLinkEnabled: Whether a custom link is shown to contributors who are blocked from pushing a secret by push protection.
    * secretScanningPushProtectionCustomLink: An optional URL string to display to contributors who are blocked from pushing a secret.
    * deployKeysEnabledForRepositories: Controls whether or not deploy keys may be added and used for repositories in the organization.
    */
    public function __construct(public string $login, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('repos_url')] public string $reposUrl, #[\EventSauce\ObjectHydrator\MapFrom('events_url')] public string $eventsUrl, #[\EventSauce\ObjectHydrator\MapFrom('hooks_url')] public string $hooksUrl, #[\EventSauce\ObjectHydrator\MapFrom('issues_url')] public string $issuesUrl, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public string $membersUrl, #[\EventSauce\ObjectHydrator\MapFrom('public_members_url')] public string $publicMembersUrl, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public string $avatarUrl, public ?string $description, public ?string $name, public ?string $company, public ?string $blog, public ?string $location, public ?string $email, #[\EventSauce\ObjectHydrator\MapFrom('twitter_username')] public ?string $twitterUsername, #[\EventSauce\ObjectHydrator\MapFrom('is_verified')] public ?bool $isVerified, #[\EventSauce\ObjectHydrator\MapFrom('has_organization_projects')] public bool $hasOrganizationProjects, #[\EventSauce\ObjectHydrator\MapFrom('has_repository_projects')] public bool $hasRepositoryProjects, #[\EventSauce\ObjectHydrator\MapFrom('public_repos')] public int $publicRepos, #[\EventSauce\ObjectHydrator\MapFrom('public_gists')] public int $publicGists, public int $followers, public int $following, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public string $type, #[\EventSauce\ObjectHydrator\MapFrom('total_private_repos')] public ?int $totalPrivateRepos, #[\EventSauce\ObjectHydrator\MapFrom('owned_private_repos')] public ?int $ownedPrivateRepos, #[\EventSauce\ObjectHydrator\MapFrom('private_gists')] public ?int $privateGists, #[\EventSauce\ObjectHydrator\MapFrom('disk_usage')] public ?int $diskUsage, public ?int $collaborators, #[\EventSauce\ObjectHydrator\MapFrom('billing_email')] public ?string $billingEmail, public ?\ApiClients\Client\GitHub\Schema\OrganizationFull\Plan $plan, #[\EventSauce\ObjectHydrator\MapFrom('default_repository_permission')] public ?string $defaultRepositoryPermission, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_repositories')] public ?bool $membersCanCreateRepositories, #[\EventSauce\ObjectHydrator\MapFrom('two_factor_requirement_enabled')] public ?bool $twoFactorRequirementEnabled, #[\EventSauce\ObjectHydrator\MapFrom('members_allowed_repository_creation_type')] public ?string $membersAllowedRepositoryCreationType, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_public_repositories')] public ?bool $membersCanCreatePublicRepositories, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_private_repositories')] public ?bool $membersCanCreatePrivateRepositories, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_internal_repositories')] public ?bool $membersCanCreateInternalRepositories, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_pages')] public ?bool $membersCanCreatePages, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_public_pages')] public ?bool $membersCanCreatePublicPages, #[\EventSauce\ObjectHydrator\MapFrom('members_can_create_private_pages')] public ?bool $membersCanCreatePrivatePages, #[\EventSauce\ObjectHydrator\MapFrom('members_can_fork_private_repositories')] public ?bool $membersCanForkPrivateRepositories, #[\EventSauce\ObjectHydrator\MapFrom('web_commit_signoff_required')] public ?bool $webCommitSignoffRequired, #[\EventSauce\ObjectHydrator\MapFrom('advanced_security_enabled_for_new_repositories')] public ?bool $advancedSecurityEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('dependabot_alerts_enabled_for_new_repositories')] public ?bool $dependabotAlertsEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('dependabot_security_updates_enabled_for_new_repositories')] public ?bool $dependabotSecurityUpdatesEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('dependency_graph_enabled_for_new_repositories')] public ?bool $dependencyGraphEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_enabled_for_new_repositories')] public ?bool $secretScanningEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_push_protection_enabled_for_new_repositories')] public ?bool $secretScanningPushProtectionEnabledForNewRepositories, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_push_protection_custom_link_enabled')] public ?bool $secretScanningPushProtectionCustomLinkEnabled, #[\EventSauce\ObjectHydrator\MapFrom('secret_scanning_push_protection_custom_link')] public ?string $secretScanningPushProtectionCustomLink, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('archived_at')] public ?string $archivedAt, #[\EventSauce\ObjectHydrator\MapFrom('deploy_keys_enabled_for_repositories')] public ?bool $deployKeysEnabledForRepositories)
    {
    }
}
