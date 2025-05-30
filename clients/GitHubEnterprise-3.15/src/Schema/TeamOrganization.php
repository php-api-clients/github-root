<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class TeamOrganization
{
    public const SCHEMA_JSON         = '{
    "title": "Team Organization",
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
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2008-01-14T04:33:35Z"
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
        }
    },
    "description": "Team Organization"
}';
    public const SCHEMA_TITLE        = 'Team Organization';
    public const SCHEMA_DESCRIPTION  = 'Team Organization';
    public const SCHEMA_EXAMPLE_DATA = '{
    "login": "github",
    "id": 1,
    "node_id": "MDEyOk9yZ2FuaXphdGlvbjE=",
    "url": "https:\\/\\/api.github.com\\/orgs\\/github",
    "repos_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/repos",
    "events_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/events",
    "hooks_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/hooks",
    "issues_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/issues",
    "members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}",
    "public_members_url": "https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}",
    "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
    "description": "A great organization",
    "name": "github",
    "company": "GitHub",
    "blog": "https:\\/\\/github.com\\/blog",
    "location": "San Francisco",
    "email": "octocat@github.com",
    "twitter_username": "github",
    "is_verified": true,
    "has_organization_projects": true,
    "has_repository_projects": true,
    "public_repos": 2,
    "public_gists": 1,
    "followers": 20,
    "following": 0,
    "html_url": "https:\\/\\/github.com\\/octocat",
    "created_at": "2008-01-14T04:33:35Z",
    "type": "Organization",
    "total_private_repos": 100,
    "owned_private_repos": 100,
    "private_gists": 81,
    "disk_usage": 10000,
    "collaborators": 8,
    "billing_email": "org@example.com",
    "plan": {
        "name": "generated",
        "space": 5,
        "private_repos": 13,
        "filled_seats": 12,
        "seats": 5
    },
    "default_repository_permission": "generated",
    "members_can_create_repositories": true,
    "two_factor_requirement_enabled": true,
    "members_allowed_repository_creation_type": "all",
    "members_can_create_public_repositories": true,
    "members_can_create_private_repositories": true,
    "members_can_create_internal_repositories": true,
    "members_can_create_pages": true,
    "members_can_create_public_pages": true,
    "members_can_create_private_pages": true,
    "members_can_fork_private_repositories": false,
    "web_commit_signoff_required": false,
    "updated_at": "1970-01-01T00:00:00+00:00",
    "archived_at": "1970-01-01T00:00:00+00:00"
}';

    public function __construct(public string $login, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $url, #[MapFrom('repos_url')]
    public string $reposUrl, #[MapFrom('events_url')]
    public string $eventsUrl, #[MapFrom('hooks_url')]
    public string $hooksUrl, #[MapFrom('issues_url')]
    public string $issuesUrl, #[MapFrom('members_url')]
    public string $membersUrl, #[MapFrom('public_members_url')]
    public string $publicMembersUrl, #[MapFrom('avatar_url')]
    public string $avatarUrl, public string|null $description, public string|null $name, public string|null $company, public string|null $blog, public string|null $location, public string|null $email, #[MapFrom('twitter_username')]
    public string|null $twitterUsername, #[MapFrom('is_verified')]
    public bool|null $isVerified, #[MapFrom('has_organization_projects')]
    public bool $hasOrganizationProjects, #[MapFrom('has_repository_projects')]
    public bool $hasRepositoryProjects, #[MapFrom('public_repos')]
    public int $publicRepos, #[MapFrom('public_gists')]
    public int $publicGists, public int $followers, public int $following, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('created_at')]
    public string $createdAt, public string $type, #[MapFrom('total_private_repos')]
    public int|null $totalPrivateRepos, #[MapFrom('owned_private_repos')]
    public int|null $ownedPrivateRepos, #[MapFrom('private_gists')]
    public int|null $privateGists, #[MapFrom('disk_usage')]
    public int|null $diskUsage, public int|null $collaborators, #[MapFrom('billing_email')]
    public string|null $billingEmail, public Schema\TeamOrganization\Plan|null $plan, #[MapFrom('default_repository_permission')]
    public string|null $defaultRepositoryPermission, #[MapFrom('members_can_create_repositories')]
    public bool|null $membersCanCreateRepositories, #[MapFrom('two_factor_requirement_enabled')]
    public bool|null $twoFactorRequirementEnabled, #[MapFrom('members_allowed_repository_creation_type')]
    public string|null $membersAllowedRepositoryCreationType, #[MapFrom('members_can_create_public_repositories')]
    public bool|null $membersCanCreatePublicRepositories, #[MapFrom('members_can_create_private_repositories')]
    public bool|null $membersCanCreatePrivateRepositories, #[MapFrom('members_can_create_internal_repositories')]
    public bool|null $membersCanCreateInternalRepositories, #[MapFrom('members_can_create_pages')]
    public bool|null $membersCanCreatePages, #[MapFrom('members_can_create_public_pages')]
    public bool|null $membersCanCreatePublicPages, #[MapFrom('members_can_create_private_pages')]
    public bool|null $membersCanCreatePrivatePages, #[MapFrom('members_can_fork_private_repositories')]
    public bool|null $membersCanForkPrivateRepositories, #[MapFrom('web_commit_signoff_required')]
    public bool|null $webCommitSignoffRequired, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('archived_at')]
    public string|null $archivedAt,)
    {
    }
}
