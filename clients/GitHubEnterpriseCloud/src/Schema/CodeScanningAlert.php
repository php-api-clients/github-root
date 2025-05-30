<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAlert
{
    public const SCHEMA_JSON         = '{
    "required": [
        "number",
        "created_at",
        "url",
        "html_url",
        "instances_url",
        "state",
        "dismissed_by",
        "dismissed_at",
        "dismissed_reason",
        "rule",
        "tool",
        "most_recent_instance"
    ],
    "type": "object",
    "properties": {
        "number": {
            "type": "integer",
            "description": "The security alert number.",
            "readOnly": true
        },
        "created_at": {
            "type": "string",
            "description": "The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "updated_at": {
            "type": "string",
            "description": "The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "url": {
            "type": "string",
            "description": "The REST API URL of the alert resource.",
            "format": "uri",
            "readOnly": true
        },
        "html_url": {
            "type": "string",
            "description": "The GitHub URL of the alert resource.",
            "format": "uri",
            "readOnly": true
        },
        "instances_url": {
            "type": "string",
            "description": "The REST API URL for fetching the list of instances for an alert.",
            "format": "uri",
            "readOnly": true
        },
        "state": {
            "enum": [
                "open",
                "dismissed",
                "fixed",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "State of a code scanning alert."
        },
        "fixed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "dismissed_by": {
            "anyOf": [
                {
                    "type": "null"
                },
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
                }
            ]
        },
        "dismissed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "dismissed_reason": {
            "enum": [
                "false positive",
                "won\'t fix",
                "used in tests",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "**Required when the state is dismissed.** The reason for dismissing or closing the alert."
        },
        "dismissed_comment": {
            "maxLength": 280,
            "type": [
                "string",
                "null"
            ],
            "description": "The dismissal comment associated with the dismissal of the alert."
        },
        "rule": {
            "type": "object",
            "properties": {
                "id": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "A unique identifier for the rule used to detect the alert."
                },
                "name": {
                    "type": "string",
                    "description": "The name of the rule used to detect the alert."
                },
                "severity": {
                    "enum": [
                        "none",
                        "note",
                        "warning",
                        "error",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The severity of the alert."
                },
                "security_severity_level": {
                    "enum": [
                        "low",
                        "medium",
                        "high",
                        "critical",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The security severity of the alert."
                },
                "description": {
                    "type": "string",
                    "description": "A short description of the rule used to detect the alert."
                },
                "full_description": {
                    "type": "string",
                    "description": "A description of the rule used to detect the alert."
                },
                "tags": {
                    "type": [
                        "array",
                        "null"
                    ],
                    "items": {
                        "type": "string"
                    },
                    "description": "A set of tags applicable for the rule."
                },
                "help": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "Detailed documentation for the rule as GitHub Flavored Markdown."
                },
                "help_uri": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "A link to the documentation for the rule used to detect the alert."
                }
            }
        },
        "tool": {
            "type": "object",
            "properties": {
                "name": {
                    "type": "string",
                    "description": "The name of the tool used to generate the code scanning analysis."
                },
                "version": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The version of the tool used to generate the code scanning analysis."
                },
                "guid": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The GUID of the tool used to generate the code scanning analysis, if provided in the uploaded SARIF data."
                }
            }
        },
        "most_recent_instance": {
            "type": "object",
            "properties": {
                "ref": {
                    "type": "string",
                    "description": "The Git reference, formatted as `refs\\/pull\\/<number>\\/merge`, `refs\\/pull\\/<number>\\/head`,\\n`refs\\/heads\\/<branch name>` or simply `<branch name>`."
                },
                "analysis_key": {
                    "type": "string",
                    "description": "Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name."
                },
                "environment": {
                    "type": "string",
                    "description": "Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed."
                },
                "category": {
                    "type": "string",
                    "description": "Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."
                },
                "state": {
                    "enum": [
                        "open",
                        "dismissed",
                        "fixed",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "State of a code scanning alert."
                },
                "commit_sha": {
                    "type": "string"
                },
                "message": {
                    "type": "object",
                    "properties": {
                        "text": {
                            "type": "string"
                        }
                    }
                },
                "location": {
                    "type": "object",
                    "properties": {
                        "path": {
                            "type": "string"
                        },
                        "start_line": {
                            "type": "integer"
                        },
                        "end_line": {
                            "type": "integer"
                        },
                        "start_column": {
                            "type": "integer"
                        },
                        "end_column": {
                            "type": "integer"
                        }
                    },
                    "description": "Describe a region within a file for the alert."
                },
                "html_url": {
                    "type": "string"
                },
                "classifications": {
                    "type": "array",
                    "items": {
                        "enum": [
                            "source",
                            "generated",
                            "test",
                            "library",
                            null
                        ],
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "A classification of the file. For example to identify it as generated."
                    },
                    "description": "Classifications that have been applied to the file that triggered the alert.\\nFor example identifying it as documentation, or a generated file."
                }
            }
        },
        "dismissal_approved_by": {
            "anyOf": [
                {
                    "type": "null"
                },
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
                }
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "number": 6,
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "instances_url": "https:\\/\\/example.com\\/",
    "state": "open",
    "fixed_at": "1970-01-01T00:00:00+00:00",
    "dismissed_by": {
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
    "dismissed_at": "1970-01-01T00:00:00+00:00",
    "dismissed_reason": "used in tests",
    "dismissed_comment": "generated",
    "rule": {
        "id": "generated",
        "name": "generated",
        "severity": "error",
        "security_severity_level": "low",
        "description": "generated",
        "full_description": "generated",
        "tags": null,
        "help": "generated",
        "help_uri": "generated"
    },
    "tool": {
        "name": "generated",
        "version": "generated",
        "guid": "generated"
    },
    "most_recent_instance": {
        "ref": "generated",
        "analysis_key": "generated",
        "environment": "generated",
        "category": "generated",
        "state": "open",
        "commit_sha": "generated",
        "message": {
            "text": "generated"
        },
        "location": {
            "path": "generated",
            "start_line": 10,
            "end_line": 8,
            "start_column": 12,
            "end_column": 10
        },
        "html_url": "generated",
        "classifications": [
            "generated",
            "generated"
        ]
    },
    "dismissal_approved_by": {
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
}';

    /**
     * number: The security alert number.
     * createdAt: The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * updatedAt: The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * url: The REST API URL of the alert resource.
     * htmlUrl: The GitHub URL of the alert resource.
     * instancesUrl: The REST API URL for fetching the list of instances for an alert.
     * state: State of a code scanning alert.
     * fixedAt: The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedAt: The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * dismissedReason: **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     * dismissedComment: The dismissal comment associated with the dismissal of the alert.
     */
    public function __construct(public int $number, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('instances_url')]
    public string $instancesUrl, public string|null $state, #[MapFrom('fixed_at')]
    public string|null $fixedAt, #[MapFrom('dismissed_by')]
    public Schema\SimpleUser|null $dismissedBy, #[MapFrom('dismissed_at')]
    public string|null $dismissedAt, #[MapFrom('dismissed_reason')]
    public string|null $dismissedReason, #[MapFrom('dismissed_comment')]
    public string|null $dismissedComment, public Schema\CodeScanningAlertRule $rule, public Schema\CodeScanningAnalysisTool $tool, #[MapFrom('most_recent_instance')]
    public Schema\CodeScanningAlertInstance $mostRecentInstance, #[MapFrom('dismissal_approved_by')]
    public Schema\SimpleUser|null $dismissalApprovedBy,)
    {
    }
}
