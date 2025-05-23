<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Environment
{
    public const SCHEMA_JSON         = '{
    "title": "Environment",
    "required": [
        "id",
        "node_id",
        "name",
        "url",
        "html_url",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The id of the environment.",
            "examples": [
                56780428
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDExOkVudmlyb25tZW50NTY3ODA0Mjg="
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the environment.",
            "examples": [
                "staging"
            ]
        },
        "url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"
            ]
        },
        "html_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"
            ]
        },
        "created_at": {
            "type": "string",
            "description": "The time that the environment was created, in ISO 8601 format.",
            "format": "date-time",
            "examples": [
                "2020-11-23T22:00:40Z"
            ]
        },
        "updated_at": {
            "type": "string",
            "description": "The time that the environment was last updated, in ISO 8601 format.",
            "format": "date-time",
            "examples": [
                "2020-11-23T22:00:40Z"
            ]
        },
        "protection_rules": {
            "type": "array",
            "items": {
                "anyOf": [
                    {
                        "required": [
                            "id",
                            "node_id",
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer",
                                "examples": [
                                    3515
                                ]
                            },
                            "node_id": {
                                "type": "string",
                                "examples": [
                                    "MDQ6R2F0ZTM1MTU="
                                ]
                            },
                            "type": {
                                "type": "string",
                                "examples": [
                                    "wait_timer"
                                ]
                            },
                            "wait_timer": {
                                "type": "integer",
                                "description": "The amount of time to delay a job after the job is initially triggered. The time (in minutes) must be an integer between 0 and 43,200 (30 days).",
                                "examples": [
                                    30
                                ]
                            }
                        }
                    },
                    {
                        "required": [
                            "id",
                            "node_id",
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer",
                                "examples": [
                                    3755
                                ]
                            },
                            "node_id": {
                                "type": "string",
                                "examples": [
                                    "MDQ6R2F0ZTM3NTU="
                                ]
                            },
                            "type": {
                                "type": "string",
                                "examples": [
                                    "required_reviewers"
                                ]
                            },
                            "reviewers": {
                                "type": "array",
                                "items": {
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
                                },
                                "description": "The people or teams that may approve jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed."
                            }
                        }
                    },
                    {
                        "required": [
                            "id",
                            "node_id",
                            "type"
                        ],
                        "type": "object",
                        "properties": {
                            "id": {
                                "type": "integer",
                                "examples": [
                                    3515
                                ]
                            },
                            "node_id": {
                                "type": "string",
                                "examples": [
                                    "MDQ6R2F0ZTM1MTU="
                                ]
                            },
                            "type": {
                                "type": "string",
                                "examples": [
                                    "branch_policy"
                                ]
                            }
                        }
                    }
                ]
            },
            "description": "Built-in deployment protection rules for the environment."
        },
        "deployment_branch_policy": {
            "required": [
                "protected_branches",
                "custom_branch_policies"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "protected_branches": {
                    "type": "boolean",
                    "description": "Whether only branches with branch protection rules can deploy to this environment. If `protected_branches` is `true`, `custom_branch_policies` must be `false`; if `protected_branches` is `false`, `custom_branch_policies` must be `true`."
                },
                "custom_branch_policies": {
                    "type": "boolean",
                    "description": "Whether only branches that match the specified name patterns can deploy to this environment.  If `custom_branch_policies` is `true`, `protected_branches` must be `false`; if `custom_branch_policies` is `false`, `protected_branches` must be `true`."
                }
            },
            "description": "The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`."
        }
    },
    "description": "Details of a deployment environment"
}';
    public const SCHEMA_TITLE        = 'Environment';
    public const SCHEMA_DESCRIPTION  = 'Details of a deployment environment';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 56780428,
    "node_id": "MDExOkVudmlyb25tZW50NTY3ODA0Mjg=",
    "name": "staging",
    "url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging",
    "html_url": "https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging",
    "created_at": "2020-11-23T22:00:40Z",
    "updated_at": "2020-11-23T22:00:40Z",
    "protection_rules": [
        null,
        null
    ],
    "deployment_branch_policy": {
        "protected_branches": false,
        "custom_branch_policies": false
    }
}';

    /**
     * id: The id of the environment.
     * name: The name of the environment.
     * createdAt: The time that the environment was created, in ISO 8601 format.
     * updatedAt: The time that the environment was last updated, in ISO 8601 format.
     * protectionRules: Built-in deployment protection rules for the environment.
     * deploymentBranchPolicy: The type of deployment branch policy for this environment. To allow all branches to deploy, set to `null`.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId, public string $name, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('protection_rules')]
    public array|null $protectionRules, #[MapFrom('deployment_branch_policy')]
    public Schema\DeploymentBranchPolicySettings|null $deploymentBranchPolicy,)
    {
    }
}
