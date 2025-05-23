<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProtectedBranch
{
    public const SCHEMA_JSON         = '{
    "title": "Protected Branch",
    "required": [
        "url"
    ],
    "type": "object",
    "properties": {
        "url": {
            "type": "string",
            "format": "uri"
        },
        "required_status_checks": {
            "title": "Status Check Policy",
            "required": [
                "url",
                "contexts_url",
                "strict",
                "contexts",
                "checks"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks"
                    ]
                },
                "strict": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                },
                "contexts": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "examples": [
                        "continuous-integration\\/travis-ci"
                    ]
                },
                "checks": {
                    "type": "array",
                    "items": {
                        "required": [
                            "context",
                            "app_id"
                        ],
                        "type": "object",
                        "properties": {
                            "context": {
                                "type": "string",
                                "examples": [
                                    "continuous-integration\\/travis-ci"
                                ]
                            },
                            "app_id": {
                                "type": [
                                    "integer",
                                    "null"
                                ]
                            }
                        }
                    }
                },
                "contexts_url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"
                    ]
                }
            },
            "description": "Status Check Policy"
        },
        "required_pull_request_reviews": {
            "required": [
                "url"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "dismiss_stale_reviews": {
                    "type": "boolean"
                },
                "require_code_owner_reviews": {
                    "type": "boolean"
                },
                "required_approving_review_count": {
                    "type": "integer"
                },
                "require_last_push_approval": {
                    "type": "boolean",
                    "description": "Whether the most recent push must be approved by someone other than the person who pushed it.",
                    "default": false
                },
                "dismissal_restrictions": {
                    "required": [
                        "url",
                        "users_url",
                        "teams_url",
                        "users",
                        "teams"
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
                        "users": {
                            "type": "array",
                            "items": {
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
                                        "format": "int64",
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
                                    },
                                    "user_view_type": {
                                        "type": "string",
                                        "examples": [
                                            "public"
                                        ]
                                    }
                                },
                                "description": "A GitHub user."
                            }
                        },
                        "teams": {
                            "type": "array",
                            "items": {
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
                        },
                        "apps": {
                            "type": "array",
                            "items": {
                                "title": "GitHub app",
                                "required": [
                                    "id",
                                    "node_id",
                                    "owner",
                                    "name",
                                    "description",
                                    "external_url",
                                    "html_url",
                                    "created_at",
                                    "updated_at",
                                    "permissions",
                                    "events"
                                ],
                                "type": [
                                    "object",
                                    "null"
                                ],
                                "properties": {
                                    "id": {
                                        "type": "integer",
                                        "description": "Unique identifier of the GitHub app",
                                        "examples": [
                                            37
                                        ]
                                    },
                                    "slug": {
                                        "type": "string",
                                        "description": "The slug name of the GitHub app",
                                        "examples": [
                                            "probot-owners"
                                        ]
                                    },
                                    "node_id": {
                                        "type": "string",
                                        "examples": [
                                            "MDExOkludGVncmF0aW9uMQ=="
                                        ]
                                    },
                                    "client_id": {
                                        "type": "string",
                                        "examples": [
                                            "\\"Iv1.25b5d1e65ffc4022\\""
                                        ]
                                    },
                                    "owner": {
                                        "oneOf": [
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
                                                        "format": "int64",
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
                                                    },
                                                    "user_view_type": {
                                                        "type": "string",
                                                        "examples": [
                                                            "public"
                                                        ]
                                                    }
                                                },
                                                "description": "A GitHub user."
                                            },
                                            {
                                                "title": "Enterprise",
                                                "required": [
                                                    "id",
                                                    "node_id",
                                                    "name",
                                                    "slug",
                                                    "html_url",
                                                    "created_at",
                                                    "updated_at",
                                                    "avatar_url"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "description": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "description": "A short description of the enterprise."
                                                    },
                                                    "html_url": {
                                                        "type": "string",
                                                        "format": "uri",
                                                        "examples": [
                                                            "https:\\/\\/github.com\\/enterprises\\/octo-business"
                                                        ]
                                                    },
                                                    "website_url": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "description": "The enterprise\'s website URL.",
                                                        "format": "uri"
                                                    },
                                                    "id": {
                                                        "type": "integer",
                                                        "description": "Unique identifier of the enterprise",
                                                        "examples": [
                                                            42
                                                        ]
                                                    },
                                                    "node_id": {
                                                        "type": "string",
                                                        "examples": [
                                                            "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                                                        ]
                                                    },
                                                    "name": {
                                                        "type": "string",
                                                        "description": "The name of the enterprise.",
                                                        "examples": [
                                                            "Octo Business"
                                                        ]
                                                    },
                                                    "slug": {
                                                        "type": "string",
                                                        "description": "The slug url identifier for the enterprise.",
                                                        "examples": [
                                                            "octo-business"
                                                        ]
                                                    },
                                                    "created_at": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "format": "date-time",
                                                        "examples": [
                                                            "2019-01-26T19:01:12Z"
                                                        ]
                                                    },
                                                    "updated_at": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "format": "date-time",
                                                        "examples": [
                                                            "2019-01-26T19:14:43Z"
                                                        ]
                                                    },
                                                    "avatar_url": {
                                                        "type": "string",
                                                        "format": "uri"
                                                    }
                                                },
                                                "description": "An enterprise on GitHub."
                                            }
                                        ]
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the GitHub app",
                                        "examples": [
                                            "Probot Owners"
                                        ]
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "examples": [
                                            "The description of the app."
                                        ]
                                    },
                                    "external_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/example.com"
                                        ]
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/github.com\\/apps\\/super-ci"
                                        ]
                                    },
                                    "created_at": {
                                        "type": "string",
                                        "format": "date-time",
                                        "examples": [
                                            "2017-07-08T16:18:44-04:00"
                                        ]
                                    },
                                    "updated_at": {
                                        "type": "string",
                                        "format": "date-time",
                                        "examples": [
                                            "2017-07-08T16:18:44-04:00"
                                        ]
                                    },
                                    "permissions": {
                                        "type": "object",
                                        "properties": {
                                            "issues": {
                                                "type": "string"
                                            },
                                            "checks": {
                                                "type": "string"
                                            },
                                            "metadata": {
                                                "type": "string"
                                            },
                                            "contents": {
                                                "type": "string"
                                            },
                                            "deployments": {
                                                "type": "string"
                                            }
                                        },
                                        "description": "The set of permissions for the GitHub app",
                                        "example": {
                                            "issues": "read",
                                            "deployments": "write"
                                        },
                                        "additionalProperties": {
                                            "type": "string"
                                        }
                                    },
                                    "events": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "The list of events for the GitHub app",
                                        "examples": [
                                            "label",
                                            "deployment"
                                        ]
                                    },
                                    "installations_count": {
                                        "type": "integer",
                                        "description": "The number of installations associated with the GitHub app",
                                        "examples": [
                                            5
                                        ]
                                    },
                                    "client_secret": {
                                        "type": "string",
                                        "examples": [
                                            "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\""
                                        ]
                                    },
                                    "webhook_secret": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "examples": [
                                            "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\""
                                        ]
                                    },
                                    "pem": {
                                        "type": "string",
                                        "examples": [
                                            "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
                                        ]
                                    }
                                },
                                "description": "GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."
                            }
                        }
                    }
                },
                "bypass_pull_request_allowances": {
                    "required": [
                        "users",
                        "teams"
                    ],
                    "type": "object",
                    "properties": {
                        "users": {
                            "type": "array",
                            "items": {
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
                                        "format": "int64",
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
                                    },
                                    "user_view_type": {
                                        "type": "string",
                                        "examples": [
                                            "public"
                                        ]
                                    }
                                },
                                "description": "A GitHub user."
                            }
                        },
                        "teams": {
                            "type": "array",
                            "items": {
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
                        },
                        "apps": {
                            "type": "array",
                            "items": {
                                "title": "GitHub app",
                                "required": [
                                    "id",
                                    "node_id",
                                    "owner",
                                    "name",
                                    "description",
                                    "external_url",
                                    "html_url",
                                    "created_at",
                                    "updated_at",
                                    "permissions",
                                    "events"
                                ],
                                "type": [
                                    "object",
                                    "null"
                                ],
                                "properties": {
                                    "id": {
                                        "type": "integer",
                                        "description": "Unique identifier of the GitHub app",
                                        "examples": [
                                            37
                                        ]
                                    },
                                    "slug": {
                                        "type": "string",
                                        "description": "The slug name of the GitHub app",
                                        "examples": [
                                            "probot-owners"
                                        ]
                                    },
                                    "node_id": {
                                        "type": "string",
                                        "examples": [
                                            "MDExOkludGVncmF0aW9uMQ=="
                                        ]
                                    },
                                    "client_id": {
                                        "type": "string",
                                        "examples": [
                                            "\\"Iv1.25b5d1e65ffc4022\\""
                                        ]
                                    },
                                    "owner": {
                                        "oneOf": [
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
                                                        "format": "int64",
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
                                                    },
                                                    "user_view_type": {
                                                        "type": "string",
                                                        "examples": [
                                                            "public"
                                                        ]
                                                    }
                                                },
                                                "description": "A GitHub user."
                                            },
                                            {
                                                "title": "Enterprise",
                                                "required": [
                                                    "id",
                                                    "node_id",
                                                    "name",
                                                    "slug",
                                                    "html_url",
                                                    "created_at",
                                                    "updated_at",
                                                    "avatar_url"
                                                ],
                                                "type": "object",
                                                "properties": {
                                                    "description": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "description": "A short description of the enterprise."
                                                    },
                                                    "html_url": {
                                                        "type": "string",
                                                        "format": "uri",
                                                        "examples": [
                                                            "https:\\/\\/github.com\\/enterprises\\/octo-business"
                                                        ]
                                                    },
                                                    "website_url": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "description": "The enterprise\'s website URL.",
                                                        "format": "uri"
                                                    },
                                                    "id": {
                                                        "type": "integer",
                                                        "description": "Unique identifier of the enterprise",
                                                        "examples": [
                                                            42
                                                        ]
                                                    },
                                                    "node_id": {
                                                        "type": "string",
                                                        "examples": [
                                                            "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                                                        ]
                                                    },
                                                    "name": {
                                                        "type": "string",
                                                        "description": "The name of the enterprise.",
                                                        "examples": [
                                                            "Octo Business"
                                                        ]
                                                    },
                                                    "slug": {
                                                        "type": "string",
                                                        "description": "The slug url identifier for the enterprise.",
                                                        "examples": [
                                                            "octo-business"
                                                        ]
                                                    },
                                                    "created_at": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "format": "date-time",
                                                        "examples": [
                                                            "2019-01-26T19:01:12Z"
                                                        ]
                                                    },
                                                    "updated_at": {
                                                        "type": [
                                                            "string",
                                                            "null"
                                                        ],
                                                        "format": "date-time",
                                                        "examples": [
                                                            "2019-01-26T19:14:43Z"
                                                        ]
                                                    },
                                                    "avatar_url": {
                                                        "type": "string",
                                                        "format": "uri"
                                                    }
                                                },
                                                "description": "An enterprise on GitHub."
                                            }
                                        ]
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "The name of the GitHub app",
                                        "examples": [
                                            "Probot Owners"
                                        ]
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "examples": [
                                            "The description of the app."
                                        ]
                                    },
                                    "external_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/example.com"
                                        ]
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/github.com\\/apps\\/super-ci"
                                        ]
                                    },
                                    "created_at": {
                                        "type": "string",
                                        "format": "date-time",
                                        "examples": [
                                            "2017-07-08T16:18:44-04:00"
                                        ]
                                    },
                                    "updated_at": {
                                        "type": "string",
                                        "format": "date-time",
                                        "examples": [
                                            "2017-07-08T16:18:44-04:00"
                                        ]
                                    },
                                    "permissions": {
                                        "type": "object",
                                        "properties": {
                                            "issues": {
                                                "type": "string"
                                            },
                                            "checks": {
                                                "type": "string"
                                            },
                                            "metadata": {
                                                "type": "string"
                                            },
                                            "contents": {
                                                "type": "string"
                                            },
                                            "deployments": {
                                                "type": "string"
                                            }
                                        },
                                        "description": "The set of permissions for the GitHub app",
                                        "example": {
                                            "issues": "read",
                                            "deployments": "write"
                                        },
                                        "additionalProperties": {
                                            "type": "string"
                                        }
                                    },
                                    "events": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "The list of events for the GitHub app",
                                        "examples": [
                                            "label",
                                            "deployment"
                                        ]
                                    },
                                    "installations_count": {
                                        "type": "integer",
                                        "description": "The number of installations associated with the GitHub app",
                                        "examples": [
                                            5
                                        ]
                                    },
                                    "client_secret": {
                                        "type": "string",
                                        "examples": [
                                            "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\""
                                        ]
                                    },
                                    "webhook_secret": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "examples": [
                                            "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\""
                                        ]
                                    },
                                    "pem": {
                                        "type": "string",
                                        "examples": [
                                            "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
                                        ]
                                    }
                                },
                                "description": "GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."
                            }
                        }
                    }
                }
            }
        },
        "required_signatures": {
            "required": [
                "url",
                "enabled"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures"
                    ]
                },
                "enabled": {
                    "type": "boolean",
                    "examples": [
                        true
                    ]
                }
            }
        },
        "enforce_admins": {
            "required": [
                "url",
                "enabled"
            ],
            "type": "object",
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "enabled": {
                    "type": "boolean"
                }
            },
            "additionalProperties": false
        },
        "required_linear_history": {
            "required": [
                "enabled"
            ],
            "type": "object",
            "properties": {
                "enabled": {
                    "type": "boolean"
                }
            },
            "additionalProperties": false
        },
        "allow_force_pushes": {
            "required": [
                "enabled"
            ],
            "type": "object",
            "properties": {
                "enabled": {
                    "type": "boolean"
                }
            },
            "additionalProperties": false
        },
        "allow_deletions": {
            "required": [
                "enabled"
            ],
            "type": "object",
            "properties": {
                "enabled": {
                    "type": "boolean"
                }
            },
            "additionalProperties": false
        },
        "restrictions": {
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
                                "type": "integer",
                                "format": "int64"
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
                            },
                            "user_view_type": {
                                "type": "string"
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
                                    },
                                    "user_view_type": {
                                        "type": "string",
                                        "examples": [
                                            "public"
                                        ]
                                    }
                                }
                            },
                            "name": {
                                "type": "string"
                            },
                            "client_id": {
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
        },
        "required_conversation_resolution": {
            "type": "object",
            "properties": {
                "enabled": {
                    "type": "boolean"
                }
            },
            "additionalProperties": false
        },
        "block_creations": {
            "required": [
                "enabled"
            ],
            "type": "object",
            "properties": {
                "enabled": {
                    "type": "boolean"
                }
            },
            "additionalProperties": false
        },
        "lock_branch": {
            "type": "object",
            "properties": {
                "enabled": {
                    "type": "boolean",
                    "default": false
                }
            },
            "description": "Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.",
            "additionalProperties": false
        },
        "allow_fork_syncing": {
            "type": "object",
            "properties": {
                "enabled": {
                    "type": "boolean",
                    "default": false
                }
            },
            "description": "Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.",
            "additionalProperties": false
        }
    },
    "description": "Branch protections protect branches"
}';
    public const SCHEMA_TITLE        = 'Protected Branch';
    public const SCHEMA_DESCRIPTION  = 'Branch protections protect branches';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "https:\\/\\/example.com\\/",
    "required_status_checks": {
        "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks",
        "strict": true,
        "contexts": [
            "continuous-integration\\/travis-ci",
            "continuous-integration\\/travis-ci"
        ],
        "checks": [
            {
                "context": "continuous-integration\\/travis-ci",
                "app_id": 6
            },
            {
                "context": "continuous-integration\\/travis-ci",
                "app_id": 6
            }
        ],
        "contexts_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_status_checks\\/contexts"
    },
    "required_pull_request_reviews": {
        "url": "https:\\/\\/example.com\\/",
        "dismiss_stale_reviews": false,
        "require_code_owner_reviews": false,
        "required_approving_review_count": 31,
        "require_last_push_approval": false,
        "dismissal_restrictions": {
            "url": "https:\\/\\/example.com\\/",
            "users_url": "https:\\/\\/example.com\\/",
            "teams_url": "https:\\/\\/example.com\\/",
            "users": [
                {
                    "name": "generated",
                    "email": "generated",
                    "login": "octocat",
                    "id": 1,
                    "node_id": "MDQ6VXNlcjE=",
                    "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                    "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                    "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                    "html_url": "https:\\/\\/github.com\\/octocat",
                    "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                    "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                    "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                    "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                    "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                    "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                    "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                    "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                    "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                    "type": "User",
                    "site_admin": false,
                    "starred_at": "\\"2020-07-09T00:17:55Z\\"",
                    "user_view_type": "public"
                },
                {
                    "name": "generated",
                    "email": "generated",
                    "login": "octocat",
                    "id": 1,
                    "node_id": "MDQ6VXNlcjE=",
                    "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                    "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                    "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                    "html_url": "https:\\/\\/github.com\\/octocat",
                    "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                    "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                    "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                    "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                    "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                    "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                    "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                    "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                    "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                    "type": "User",
                    "site_admin": false,
                    "starred_at": "\\"2020-07-09T00:17:55Z\\"",
                    "user_view_type": "public"
                }
            ],
            "teams": [
                {
                    "id": 2,
                    "node_id": "generated",
                    "name": "generated",
                    "slug": "generated",
                    "description": "generated",
                    "privacy": "generated",
                    "notification_setting": "generated",
                    "permission": "generated",
                    "permissions": {
                        "pull": false,
                        "triage": false,
                        "push": false,
                        "maintain": false,
                        "admin": false
                    },
                    "url": "https:\\/\\/example.com\\/",
                    "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
                    "members_url": "generated",
                    "repositories_url": "https:\\/\\/example.com\\/",
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
                    }
                },
                {
                    "id": 2,
                    "node_id": "generated",
                    "name": "generated",
                    "slug": "generated",
                    "description": "generated",
                    "privacy": "generated",
                    "notification_setting": "generated",
                    "permission": "generated",
                    "permissions": {
                        "pull": false,
                        "triage": false,
                        "push": false,
                        "maintain": false,
                        "admin": false
                    },
                    "url": "https:\\/\\/example.com\\/",
                    "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
                    "members_url": "generated",
                    "repositories_url": "https:\\/\\/example.com\\/",
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
                    }
                }
            ],
            "apps": [
                {
                    "id": 37,
                    "slug": "probot-owners",
                    "node_id": "MDExOkludGVncmF0aW9uMQ==",
                    "client_id": "\\"Iv1.25b5d1e65ffc4022\\"",
                    "owner": null,
                    "name": "Probot Owners",
                    "description": "The description of the app.",
                    "external_url": "https:\\/\\/example.com",
                    "html_url": "https:\\/\\/github.com\\/apps\\/super-ci",
                    "created_at": "2017-07-08T16:18:44-04:00",
                    "updated_at": "2017-07-08T16:18:44-04:00",
                    "permissions": {
                        "issues": "read",
                        "checks": "generated",
                        "metadata": "generated",
                        "contents": "generated",
                        "deployments": "write"
                    },
                    "events": [
                        "deployment",
                        "deployment"
                    ],
                    "installations_count": 5,
                    "client_secret": "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\"",
                    "webhook_secret": "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\"",
                    "pem": "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
                },
                {
                    "id": 37,
                    "slug": "probot-owners",
                    "node_id": "MDExOkludGVncmF0aW9uMQ==",
                    "client_id": "\\"Iv1.25b5d1e65ffc4022\\"",
                    "owner": null,
                    "name": "Probot Owners",
                    "description": "The description of the app.",
                    "external_url": "https:\\/\\/example.com",
                    "html_url": "https:\\/\\/github.com\\/apps\\/super-ci",
                    "created_at": "2017-07-08T16:18:44-04:00",
                    "updated_at": "2017-07-08T16:18:44-04:00",
                    "permissions": {
                        "issues": "read",
                        "checks": "generated",
                        "metadata": "generated",
                        "contents": "generated",
                        "deployments": "write"
                    },
                    "events": [
                        "deployment",
                        "deployment"
                    ],
                    "installations_count": 5,
                    "client_secret": "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\"",
                    "webhook_secret": "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\"",
                    "pem": "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
                }
            ]
        },
        "bypass_pull_request_allowances": {
            "users": [
                {
                    "name": "generated",
                    "email": "generated",
                    "login": "octocat",
                    "id": 1,
                    "node_id": "MDQ6VXNlcjE=",
                    "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                    "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                    "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                    "html_url": "https:\\/\\/github.com\\/octocat",
                    "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                    "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                    "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                    "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                    "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                    "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                    "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                    "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                    "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                    "type": "User",
                    "site_admin": false,
                    "starred_at": "\\"2020-07-09T00:17:55Z\\"",
                    "user_view_type": "public"
                },
                {
                    "name": "generated",
                    "email": "generated",
                    "login": "octocat",
                    "id": 1,
                    "node_id": "MDQ6VXNlcjE=",
                    "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
                    "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
                    "url": "https:\\/\\/api.github.com\\/users\\/octocat",
                    "html_url": "https:\\/\\/github.com\\/octocat",
                    "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
                    "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
                    "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
                    "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
                    "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
                    "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
                    "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
                    "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
                    "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
                    "type": "User",
                    "site_admin": false,
                    "starred_at": "\\"2020-07-09T00:17:55Z\\"",
                    "user_view_type": "public"
                }
            ],
            "teams": [
                {
                    "id": 2,
                    "node_id": "generated",
                    "name": "generated",
                    "slug": "generated",
                    "description": "generated",
                    "privacy": "generated",
                    "notification_setting": "generated",
                    "permission": "generated",
                    "permissions": {
                        "pull": false,
                        "triage": false,
                        "push": false,
                        "maintain": false,
                        "admin": false
                    },
                    "url": "https:\\/\\/example.com\\/",
                    "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
                    "members_url": "generated",
                    "repositories_url": "https:\\/\\/example.com\\/",
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
                    }
                },
                {
                    "id": 2,
                    "node_id": "generated",
                    "name": "generated",
                    "slug": "generated",
                    "description": "generated",
                    "privacy": "generated",
                    "notification_setting": "generated",
                    "permission": "generated",
                    "permissions": {
                        "pull": false,
                        "triage": false,
                        "push": false,
                        "maintain": false,
                        "admin": false
                    },
                    "url": "https:\\/\\/example.com\\/",
                    "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
                    "members_url": "generated",
                    "repositories_url": "https:\\/\\/example.com\\/",
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
                    }
                }
            ],
            "apps": [
                {
                    "id": 37,
                    "slug": "probot-owners",
                    "node_id": "MDExOkludGVncmF0aW9uMQ==",
                    "client_id": "\\"Iv1.25b5d1e65ffc4022\\"",
                    "owner": null,
                    "name": "Probot Owners",
                    "description": "The description of the app.",
                    "external_url": "https:\\/\\/example.com",
                    "html_url": "https:\\/\\/github.com\\/apps\\/super-ci",
                    "created_at": "2017-07-08T16:18:44-04:00",
                    "updated_at": "2017-07-08T16:18:44-04:00",
                    "permissions": {
                        "issues": "read",
                        "checks": "generated",
                        "metadata": "generated",
                        "contents": "generated",
                        "deployments": "write"
                    },
                    "events": [
                        "deployment",
                        "deployment"
                    ],
                    "installations_count": 5,
                    "client_secret": "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\"",
                    "webhook_secret": "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\"",
                    "pem": "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
                },
                {
                    "id": 37,
                    "slug": "probot-owners",
                    "node_id": "MDExOkludGVncmF0aW9uMQ==",
                    "client_id": "\\"Iv1.25b5d1e65ffc4022\\"",
                    "owner": null,
                    "name": "Probot Owners",
                    "description": "The description of the app.",
                    "external_url": "https:\\/\\/example.com",
                    "html_url": "https:\\/\\/github.com\\/apps\\/super-ci",
                    "created_at": "2017-07-08T16:18:44-04:00",
                    "updated_at": "2017-07-08T16:18:44-04:00",
                    "permissions": {
                        "issues": "read",
                        "checks": "generated",
                        "metadata": "generated",
                        "contents": "generated",
                        "deployments": "write"
                    },
                    "events": [
                        "deployment",
                        "deployment"
                    ],
                    "installations_count": 5,
                    "client_secret": "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\"",
                    "webhook_secret": "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\"",
                    "pem": "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
                }
            ]
        }
    },
    "required_signatures": {
        "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures",
        "enabled": true
    },
    "enforce_admins": {
        "url": "https:\\/\\/example.com\\/",
        "enabled": false
    },
    "required_linear_history": {
        "enabled": false
    },
    "allow_force_pushes": {
        "enabled": false
    },
    "allow_deletions": {
        "enabled": false
    },
    "restrictions": {
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
                "site_admin": false,
                "user_view_type": "generated"
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
                "site_admin": false,
                "user_view_type": "generated"
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
                    "site_admin": false,
                    "user_view_type": "public"
                },
                "name": "generated",
                "client_id": "generated",
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
                    "site_admin": false,
                    "user_view_type": "public"
                },
                "name": "generated",
                "client_id": "generated",
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
    },
    "required_conversation_resolution": {
        "enabled": false
    },
    "block_creations": {
        "enabled": false
    },
    "lock_branch": {
        "enabled": false
    },
    "allow_fork_syncing": {
        "enabled": false
    }
}';

    /**
     * requiredStatusChecks: Status Check Policy
     * restrictions: Branch Restriction Policy
     * lockBranch: Whether to set the branch as read-only. If this is true, users will not be able to push to the branch.
     * allowForkSyncing: Whether users can pull changes from upstream when the branch is locked. Set to `true` to allow fork syncing. Set to `false` to prevent fork syncing.
     */
    public function __construct(public string $url, #[MapFrom('required_status_checks')]
    public Schema\StatusCheckPolicy|null $requiredStatusChecks, #[MapFrom('required_pull_request_reviews')]
    public Schema\ProtectedBranch\RequiredPullRequestReviews|null $requiredPullRequestReviews, #[MapFrom('required_signatures')]
    public Schema\ProtectedBranch\RequiredSignatures|null $requiredSignatures, #[MapFrom('enforce_admins')]
    public Schema\ProtectedBranch\EnforceAdmins|null $enforceAdmins, #[MapFrom('required_linear_history')]
    public Schema\ProtectedBranch\RequiredLinearHistory|null $requiredLinearHistory, #[MapFrom('allow_force_pushes')]
    public Schema\ProtectedBranch\AllowForcePushes|null $allowForcePushes, #[MapFrom('allow_deletions')]
    public Schema\ProtectedBranch\AllowDeletions|null $allowDeletions, public Schema\BranchRestrictionPolicy|null $restrictions, #[MapFrom('required_conversation_resolution')]
    public Schema\ProtectedBranch\RequiredConversationResolution|null $requiredConversationResolution, #[MapFrom('block_creations')]
    public Schema\ProtectedBranch\BlockCreations|null $blockCreations, #[MapFrom('lock_branch')]
    public Schema\ProtectedBranch\LockBranch|null $lockBranch, #[MapFrom('allow_fork_syncing')]
    public Schema\ProtectedBranch\AllowForkSyncing|null $allowForkSyncing,)
    {
    }
}
