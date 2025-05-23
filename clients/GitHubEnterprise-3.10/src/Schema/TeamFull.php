<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class TeamFull
{
    public const SCHEMA_JSON         = '{
    "title": "Full Team",
    "required": [
        "id",
        "node_id",
        "url",
        "members_url",
        "name",
        "description",
        "permission",
        "html_url",
        "repositories_url",
        "slug",
        "created_at",
        "updated_at",
        "members_count",
        "repos_count",
        "organization"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "Unique identifier of the team",
            "examples": [
                42
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDQ6VGVhbTE="
            ]
        },
        "url": {
            "type": "string",
            "description": "URL for the team",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"
            ]
        },
        "html_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
            ]
        },
        "name": {
            "type": "string",
            "description": "Name of the team",
            "examples": [
                "Developers"
            ]
        },
        "slug": {
            "type": "string",
            "examples": [
                "justice-league"
            ]
        },
        "description": {
            "type": [
                "string",
                "null"
            ],
            "examples": [
                "A great team."
            ]
        },
        "privacy": {
            "enum": [
                "closed",
                "secret"
            ],
            "type": "string",
            "description": "The level of privacy this team should have",
            "examples": [
                "closed"
            ]
        },
        "notification_setting": {
            "enum": [
                "notifications_enabled",
                "notifications_disabled"
            ],
            "type": "string",
            "description": "The notification setting the team has set",
            "examples": [
                "notifications_enabled"
            ]
        },
        "permission": {
            "type": "string",
            "description": "Permission that the team will have for its repositories",
            "examples": [
                "push"
            ]
        },
        "members_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"
            ]
        },
        "repositories_url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"
            ]
        },
        "parent": {
            "anyOf": [
                {
                    "type": "null"
                },
                {
                    "title": "Team Simple",
                    "required": [
                        "id",
                        "node_id",
                        "url",
                        "members_url",
                        "name",
                        "description",
                        "permission",
                        "html_url",
                        "repositories_url",
                        "slug"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "description": "Unique identifier of the team",
                            "examples": [
                                1
                            ]
                        },
                        "node_id": {
                            "type": "string",
                            "examples": [
                                "MDQ6VGVhbTE="
                            ]
                        },
                        "url": {
                            "type": "string",
                            "description": "URL for the team",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"
                            ]
                        },
                        "members_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"
                            ]
                        },
                        "name": {
                            "type": "string",
                            "description": "Name of the team",
                            "examples": [
                                "Justice League"
                            ]
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "Description of the team",
                            "examples": [
                                "A great team."
                            ]
                        },
                        "permission": {
                            "type": "string",
                            "description": "Permission that the team will have for its repositories",
                            "examples": [
                                "admin"
                            ]
                        },
                        "privacy": {
                            "type": "string",
                            "description": "The level of privacy this team should have",
                            "examples": [
                                "closed"
                            ]
                        },
                        "notification_setting": {
                            "type": "string",
                            "description": "The notification setting the team has set",
                            "examples": [
                                "notifications_enabled"
                            ]
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
                            ]
                        },
                        "repositories_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"
                            ]
                        },
                        "slug": {
                            "type": "string",
                            "examples": [
                                "justice-league"
                            ]
                        },
                        "ldap_dn": {
                            "type": "string",
                            "description": "Distinguished Name (DN) that team maps to within LDAP environment",
                            "examples": [
                                "uid=example,ou=users,dc=github,dc=com"
                            ]
                        }
                    },
                    "description": "Groups of organization members that gives permissions on specified repositories."
                }
            ]
        },
        "members_count": {
            "type": "integer",
            "examples": [
                3
            ]
        },
        "repos_count": {
            "type": "integer",
            "examples": [
                10
            ]
        },
        "created_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2017-07-14T16:53:42Z"
            ]
        },
        "updated_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2017-08-17T12:37:15Z"
            ]
        },
        "organization": {
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
                }
            },
            "description": "Team Organization"
        },
        "ldap_dn": {
            "type": "string",
            "description": "Distinguished Name (DN) that team maps to within LDAP environment",
            "examples": [
                "uid=example,ou=users,dc=github,dc=com"
            ]
        }
    },
    "description": "Groups of organization members that gives permissions on specified repositories."
}';
    public const SCHEMA_TITLE        = 'Full Team';
    public const SCHEMA_DESCRIPTION  = 'Groups of organization members that gives permissions on specified repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 42,
    "node_id": "MDQ6VGVhbTE=",
    "url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1",
    "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
    "name": "Developers",
    "slug": "justice-league",
    "description": "A great team.",
    "privacy": "closed",
    "notification_setting": "notifications_enabled",
    "permission": "push",
    "members_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}",
    "repositories_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos",
    "parent": {
        "id": 1,
        "node_id": "MDQ6VGVhbTE=",
        "url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1",
        "members_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}",
        "name": "Justice League",
        "description": "A great team.",
        "permission": "admin",
        "privacy": "closed",
        "notification_setting": "notifications_enabled",
        "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
        "repositories_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos",
        "slug": "justice-league",
        "ldap_dn": "uid=example,ou=users,dc=github,dc=com"
    },
    "members_count": 3,
    "repos_count": 10,
    "created_at": "2017-07-14T16:53:42Z",
    "updated_at": "2017-08-17T12:37:15Z",
    "organization": {
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
        "updated_at": "1970-01-01T00:00:00+00:00"
    },
    "ldap_dn": "uid=example,ou=users,dc=github,dc=com"
}';

    /**
     * id: Unique identifier of the team
     * url: URL for the team
     * name: Name of the team
     * privacy: The level of privacy this team should have
     * notificationSetting: The notification setting the team has set
     * permission: Permission that the team will have for its repositories
     * organization: Team Organization
     * ldapDn: Distinguished Name (DN) that team maps to within LDAP environment
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, public string $name, public string $slug, public string|null $description, public string|null $privacy, #[MapFrom('notification_setting')]
    public string|null $notificationSetting, public string $permission, #[MapFrom('members_url')]
    public string $membersUrl, #[MapFrom('repositories_url')]
    public string $repositoriesUrl, public Schema\TeamSimple|null $parent, #[MapFrom('members_count')]
    public int $membersCount, #[MapFrom('repos_count')]
    public int $reposCount, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, public Schema\TeamOrganization $organization, #[MapFrom('ldap_dn')]
    public string|null $ldapDn,)
    {
    }
}
