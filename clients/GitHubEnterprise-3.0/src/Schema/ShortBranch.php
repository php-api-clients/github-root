<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ShortBranch
{
    public const SCHEMA_JSON         = '{
    "title": "Short Branch",
    "required": [
        "name",
        "commit",
        "protected"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "commit": {
            "required": [
                "sha",
                "url"
            ],
            "type": "object",
            "properties": {
                "sha": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "protected": {
            "type": "boolean"
        },
        "protection": {
            "title": "Branch Protection",
            "type": "object",
            "properties": {
                "url": {
                    "type": "string"
                },
                "enabled": {
                    "type": "boolean"
                },
                "required_status_checks": {
                    "title": "Protected Branch Required Status Check",
                    "required": [
                        "contexts"
                    ],
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string"
                        },
                        "enforcement_level": {
                            "type": "string"
                        },
                        "contexts": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            }
                        },
                        "contexts_url": {
                            "type": "string"
                        },
                        "strict": {
                            "type": "boolean"
                        }
                    },
                    "description": "Protected Branch Required Status Check"
                },
                "enforce_admins": {
                    "title": "Protected Branch Admin Enforced",
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
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/enforce_admins"
                            ]
                        },
                        "enabled": {
                            "type": "boolean",
                            "examples": [
                                true
                            ]
                        }
                    },
                    "description": "Protected Branch Admin Enforced"
                },
                "required_pull_request_reviews": {
                    "title": "Protected Branch Pull Request Review",
                    "required": [
                        "dismiss_stale_reviews",
                        "require_code_owner_reviews"
                    ],
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/dismissal_restrictions"
                            ]
                        },
                        "dismissal_restrictions": {
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
                                        "description": "Simple User"
                                    },
                                    "description": "The list of users with review dismissal access."
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
                                    },
                                    "description": "The list of teams with review dismissal access."
                                },
                                "url": {
                                    "type": "string",
                                    "examples": [
                                        "\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\""
                                    ]
                                },
                                "users_url": {
                                    "type": "string",
                                    "examples": [
                                        "\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\/users\\""
                                    ]
                                },
                                "teams_url": {
                                    "type": "string",
                                    "examples": [
                                        "\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\/teams\\""
                                    ]
                                }
                            }
                        },
                        "dismiss_stale_reviews": {
                            "type": "boolean",
                            "examples": [
                                true
                            ]
                        },
                        "require_code_owner_reviews": {
                            "type": "boolean",
                            "examples": [
                                true
                            ]
                        },
                        "required_approving_review_count": {
                            "maximum": 6,
                            "minimum": 1,
                            "type": "integer",
                            "examples": [
                                2
                            ]
                        }
                    },
                    "description": "Protected Branch Pull Request Review"
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
                },
                "required_linear_history": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        }
                    }
                },
                "allow_force_pushes": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        }
                    }
                },
                "allow_deletions": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        }
                    }
                },
                "required_conversation_resolution": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        }
                    }
                },
                "name": {
                    "type": "string",
                    "examples": [
                        "\\"branch\\/with\\/protection\\""
                    ]
                },
                "protection_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/repos\\/owner-79e94e2d36b3fd06a32bb213\\/AAA_Public_Repo\\/branches\\/branch\\/with\\/protection\\/protection\\""
                    ]
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
                }
            },
            "description": "Branch Protection"
        },
        "protection_url": {
            "type": "string",
            "format": "uri"
        }
    },
    "description": "Short Branch"
}';
    public const SCHEMA_TITLE        = 'Short Branch';
    public const SCHEMA_DESCRIPTION  = 'Short Branch';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "commit": {
        "sha": "generated",
        "url": "https:\\/\\/example.com\\/"
    },
    "protected": false,
    "protection": {
        "url": "generated",
        "enabled": false,
        "required_status_checks": {
            "url": "generated",
            "enforcement_level": "generated",
            "contexts": [
                "generated",
                "generated"
            ],
            "contexts_url": "generated",
            "strict": false
        },
        "enforce_admins": {
            "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/enforce_admins",
            "enabled": true
        },
        "required_pull_request_reviews": {
            "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/dismissal_restrictions",
            "dismissal_restrictions": {
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
                        "starred_at": "\\"2020-07-09T00:17:55Z\\""
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
                        "starred_at": "\\"2020-07-09T00:17:55Z\\""
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
                            "html_url": "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core",
                            "repositories_url": "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos",
                            "slug": "justice-league",
                            "ldap_dn": "uid=example,ou=users,dc=github,dc=com"
                        }
                    }
                ],
                "url": "\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\"",
                "users_url": "\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\/users\\"",
                "teams_url": "\\"https:\\/\\/api.github.com\\/repos\\/the-org\\/an-org-repo\\/branches\\/master\\/protection\\/dismissal_restrictions\\/teams\\""
            },
            "dismiss_stale_reviews": true,
            "require_code_owner_reviews": true,
            "required_approving_review_count": 2
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
        "required_conversation_resolution": {
            "enabled": false
        },
        "name": "\\"branch\\/with\\/protection\\"",
        "protection_url": "\\"https:\\/\\/api.github.com\\/repos\\/owner-79e94e2d36b3fd06a32bb213\\/AAA_Public_Repo\\/branches\\/branch\\/with\\/protection\\/protection\\"",
        "required_signatures": {
            "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/required_signatures",
            "enabled": true
        }
    },
    "protection_url": "https:\\/\\/example.com\\/"
}';

    /**
     * protection: Branch Protection
     */
    public function __construct(public string $name, public Schema\ShortBranch\Commit $commit, public bool $protected, public Schema\BranchProtection|null $protection, #[MapFrom('protection_url')]
    public string|null $protectionUrl,)
    {
    }
}
