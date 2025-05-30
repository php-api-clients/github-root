<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\AliasAbstract\Tiet4464FF28\Tiet6C0A72F8\Tiet0B27A7A8;

use ApiClients\Client\GitHubEnterprise\Internal\Attribute\CastUnionToType\Schema\PendingDeployment\Reviewers\Reviewer;
use ApiClients\Client\GitHubEnterprise\Schema;

abstract readonly class Tiet10B71D36
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "User",
                "Team"
            ],
            "type": "string",
            "description": "The type of reviewer.",
            "examples": [
                "User"
            ]
        },
        "reviewer": {
            "anyOf": [
                {
                    "title": "Simple User",
                    "required": [
                        "avatar_url",
                        "events_url",
                        "followers_url",
                        "following_url",
                        "gists_url",
                        "gravatar_id",
                        "html_url",
                        "id",
                        "node_id",
                        "login",
                        "organizations_url",
                        "received_events_url",
                        "repos_url",
                        "site_admin",
                        "starred_url",
                        "subscriptions_url",
                        "type",
                        "url"
                    ],
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "email": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "login": {
                            "type": "string",
                            "examples": [
                                "octocat"
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
                                "MDQ6VXNlcjE="
                            ]
                        },
                        "avatar_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                            ]
                        },
                        "gravatar_id": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "examples": [
                                "41d064eb2195891e12d0413f63227ea7"
                            ]
                        },
                        "url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat"
                            ]
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/octocat"
                            ]
                        },
                        "followers_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/followers"
                            ]
                        },
                        "following_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"
                            ]
                        },
                        "gists_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"
                            ]
                        },
                        "starred_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"
                            ]
                        },
                        "subscriptions_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"
                            ]
                        },
                        "organizations_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"
                            ]
                        },
                        "repos_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                            ]
                        },
                        "events_url": {
                            "type": "string",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"
                            ]
                        },
                        "received_events_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"
                            ]
                        },
                        "type": {
                            "type": "string",
                            "examples": [
                                "User"
                            ]
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_at": {
                            "type": "string",
                            "examples": [
                                "\\"2020-07-09T00:17:55Z\\""
                            ]
                        }
                    },
                    "description": "A GitHub user."
                },
                {
                    "title": "Team",
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
                        "parent"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        },
                        "slug": {
                            "type": "string"
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "privacy": {
                            "type": "string"
                        },
                        "notification_setting": {
                            "type": "string"
                        },
                        "permission": {
                            "type": "string"
                        },
                        "permissions": {
                            "required": [
                                "pull",
                                "triage",
                                "push",
                                "maintain",
                                "admin"
                            ],
                            "type": "object",
                            "properties": {
                                "pull": {
                                    "type": "boolean"
                                },
                                "triage": {
                                    "type": "boolean"
                                },
                                "push": {
                                    "type": "boolean"
                                },
                                "maintain": {
                                    "type": "boolean"
                                },
                                "admin": {
                                    "type": "boolean"
                                }
                            }
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
                            ]
                        },
                        "members_url": {
                            "type": "string"
                        },
                        "repositories_url": {
                            "type": "string",
                            "format": "uri"
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
                        }
                    },
                    "description": "Groups of organization members that gives permissions on specified repositories."
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "User",
    "reviewer": null
}';

    /**
     * type: The type of reviewer.
     */
    public function __construct(public string|null $type, #[Reviewer]
    public Schema\SimpleUser|Schema\Team|null $reviewer,)
    {
    }
}
