<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class BranchRestrictionPolicy
{
    public const SCHEMA_JSON         = '{
    "title": "Branch Restriction Policy",
    "required": [
        "url",
        "users_url",
        "teams_url",
        "apps_url",
        "users",
        "teams",
        "apps"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri"
        },
        "users_url": {
            "type": "string",
            "format": "uri"
        },
        "teams_url": {
            "type": "string",
            "format": "uri"
        },
        "apps_url": {
            "type": "string",
            "format": "uri"
        },
        "users": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "login": {
                        "type": "string"
                    },
                    "id": {
                        "type": "integer"
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "avatar_url": {
                        "type": "string"
                    },
                    "gravatar_id": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    },
                    "html_url": {
                        "type": "string"
                    },
                    "followers_url": {
                        "type": "string"
                    },
                    "following_url": {
                        "type": "string"
                    },
                    "gists_url": {
                        "type": "string"
                    },
                    "starred_url": {
                        "type": "string"
                    },
                    "subscriptions_url": {
                        "type": "string"
                    },
                    "organizations_url": {
                        "type": "string"
                    },
                    "repos_url": {
                        "type": "string"
                    },
                    "events_url": {
                        "type": "string"
                    },
                    "received_events_url": {
                        "type": "string"
                    },
                    "type": {
                        "type": "string"
                    },
                    "site_admin": {
                        "type": "boolean"
                    }
                }
            }
        },
        "teams": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer"
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string"
                    },
                    "html_url": {
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
                    "members_url": {
                        "type": "string"
                    },
                    "repositories_url": {
                        "type": "string"
                    },
                    "parent": {
                        "type": [
                            "string",
                            "null"
                        ]
                    }
                }
            }
        },
        "apps": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer"
                    },
                    "slug": {
                        "type": "string"
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "owner": {
                        "type": "object",
                        "properties": {
                            "login": {
                                "type": "string"
                            },
                            "id": {
                                "type": "integer"
                            },
                            "node_id": {
                                "type": "string"
                            },
                            "url": {
                                "type": "string"
                            },
                            "repos_url": {
                                "type": "string"
                            },
                            "events_url": {
                                "type": "string"
                            },
                            "hooks_url": {
                                "type": "string"
                            },
                            "issues_url": {
                                "type": "string"
                            },
                            "members_url": {
                                "type": "string"
                            },
                            "public_members_url": {
                                "type": "string"
                            },
                            "avatar_url": {
                                "type": "string"
                            },
                            "description": {
                                "type": "string"
                            },
                            "gravatar_id": {
                                "type": "string",
                                "examples": [
                                    "\\"\\""
                                ]
                            },
                            "html_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""
                                ]
                            },
                            "followers_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""
                                ]
                            },
                            "following_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""
                                ]
                            },
                            "gists_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""
                                ]
                            },
                            "starred_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""
                                ]
                            },
                            "subscriptions_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""
                                ]
                            },
                            "organizations_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""
                                ]
                            },
                            "received_events_url": {
                                "type": "string",
                                "examples": [
                                    "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""
                                ]
                            },
                            "type": {
                                "type": "string",
                                "examples": [
                                    "\\"Organization\\""
                                ]
                            },
                            "site_admin": {
                                "type": "boolean",
                                "examples": [
                                    false
                                ]
                            }
                        }
                    },
                    "name": {
                        "type": "string"
                    },
                    "description": {
                        "type": "string"
                    },
                    "external_url": {
                        "type": "string"
                    },
                    "html_url": {
                        "type": "string"
                    },
                    "created_at": {
                        "type": "string"
                    },
                    "updated_at": {
                        "type": "string"
                    },
                    "permissions": {
                        "type": "object",
                        "properties": {
                            "metadata": {
                                "type": "string"
                            },
                            "contents": {
                                "type": "string"
                            },
                            "issues": {
                                "type": "string"
                            },
                            "single_file": {
                                "type": "string"
                            }
                        }
                    },
                    "events": {
                        "type": "array",
                        "items": {
                            "type": "string"
                        }
                    }
                }
            }
        }
    },
    "description": "Branch Restriction Policy"
}';
    public const SCHEMA_TITLE        = 'Branch Restriction Policy';
    public const SCHEMA_DESCRIPTION  = 'Branch Restriction Policy';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "users_url": "https:\\/\\/example.com\\/",
    "teams_url": "https:\\/\\/example.com\\/",
    "apps_url": "https:\\/\\/example.com\\/",
    "users": [
        {
            "login": "generated",
            "id": 2,
            "node_id": "generated",
            "avatar_url": "generated",
            "gravatar_id": "generated",
            "url": "generated",
            "html_url": "generated",
            "followers_url": "generated",
            "following_url": "generated",
            "gists_url": "generated",
            "starred_url": "generated",
            "subscriptions_url": "generated",
            "organizations_url": "generated",
            "repos_url": "generated",
            "events_url": "generated",
            "received_events_url": "generated",
            "type": "generated",
            "site_admin": false
        },
        {
            "login": "generated",
            "id": 2,
            "node_id": "generated",
            "avatar_url": "generated",
            "gravatar_id": "generated",
            "url": "generated",
            "html_url": "generated",
            "followers_url": "generated",
            "following_url": "generated",
            "gists_url": "generated",
            "starred_url": "generated",
            "subscriptions_url": "generated",
            "organizations_url": "generated",
            "repos_url": "generated",
            "events_url": "generated",
            "received_events_url": "generated",
            "type": "generated",
            "site_admin": false
        }
    ],
    "teams": [
        {
            "id": 2,
            "node_id": "generated",
            "url": "generated",
            "html_url": "generated",
            "name": "generated",
            "slug": "generated",
            "description": "generated",
            "privacy": "generated",
            "notification_setting": "generated",
            "permission": "generated",
            "members_url": "generated",
            "repositories_url": "generated",
            "parent": "generated"
        },
        {
            "id": 2,
            "node_id": "generated",
            "url": "generated",
            "html_url": "generated",
            "name": "generated",
            "slug": "generated",
            "description": "generated",
            "privacy": "generated",
            "notification_setting": "generated",
            "permission": "generated",
            "members_url": "generated",
            "repositories_url": "generated",
            "parent": "generated"
        }
    ],
    "apps": [
        {
            "id": 2,
            "slug": "generated",
            "node_id": "generated",
            "owner": {
                "login": "generated",
                "id": 2,
                "node_id": "generated",
                "url": "generated",
                "repos_url": "generated",
                "events_url": "generated",
                "hooks_url": "generated",
                "issues_url": "generated",
                "members_url": "generated",
                "public_members_url": "generated",
                "avatar_url": "generated",
                "description": "generated",
                "gravatar_id": "\\"\\"",
                "html_url": "\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\"",
                "followers_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\"",
                "following_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\"",
                "gists_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\"",
                "starred_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\"",
                "subscriptions_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\"",
                "organizations_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\"",
                "received_events_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\"",
                "type": "\\"Organization\\"",
                "site_admin": false
            },
            "name": "generated",
            "description": "generated",
            "external_url": "generated",
            "html_url": "generated",
            "created_at": "generated",
            "updated_at": "generated",
            "permissions": {
                "metadata": "generated",
                "contents": "generated",
                "issues": "generated",
                "single_file": "generated"
            },
            "events": [
                "generated",
                "generated"
            ]
        },
        {
            "id": 2,
            "slug": "generated",
            "node_id": "generated",
            "owner": {
                "login": "generated",
                "id": 2,
                "node_id": "generated",
                "url": "generated",
                "repos_url": "generated",
                "events_url": "generated",
                "hooks_url": "generated",
                "issues_url": "generated",
                "members_url": "generated",
                "public_members_url": "generated",
                "avatar_url": "generated",
                "description": "generated",
                "gravatar_id": "\\"\\"",
                "html_url": "\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\"",
                "followers_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\"",
                "following_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\"",
                "gists_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\"",
                "starred_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\"",
                "subscriptions_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\"",
                "organizations_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\"",
                "received_events_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\"",
                "type": "\\"Organization\\"",
                "site_admin": false
            },
            "name": "generated",
            "description": "generated",
            "external_url": "generated",
            "html_url": "generated",
            "created_at": "generated",
            "updated_at": "generated",
            "permissions": {
                "metadata": "generated",
                "contents": "generated",
                "issues": "generated",
                "single_file": "generated"
            },
            "events": [
                "generated",
                "generated"
            ]
        }
    ]
}';

    public function __construct(public string $url, #[MapFrom('users_url')]
    public string $usersUrl, #[MapFrom('teams_url')]
    public string $teamsUrl, #[MapFrom('apps_url')]
    public string $appsUrl, public array $users, public array $teams, public array $apps,)
    {
    }
}
