<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\AliasAbstract\Tiet67EF09F8\Tiet8959F0C4\Tiet45DBD47E;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet2C497E99
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "check_runs"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "check_runs": {
            "type": "array",
            "items": {
                "title": "CheckRun",
                "required": [
                    "id",
                    "node_id",
                    "head_sha",
                    "name",
                    "url",
                    "html_url",
                    "details_url",
                    "status",
                    "conclusion",
                    "started_at",
                    "completed_at",
                    "external_id",
                    "check_suite",
                    "output",
                    "app",
                    "pull_requests"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "The id of the check.",
                        "format": "int64",
                        "examples": [
                            21
                        ]
                    },
                    "head_sha": {
                        "type": "string",
                        "description": "The SHA of the commit that is being checked.",
                        "examples": [
                            "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"
                        ]
                    },
                    "node_id": {
                        "type": "string",
                        "examples": [
                            "MDg6Q2hlY2tSdW40"
                        ]
                    },
                    "external_id": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "examples": [
                            "42"
                        ]
                    },
                    "url": {
                        "type": "string",
                        "examples": [
                            "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"
                        ]
                    },
                    "html_url": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "examples": [
                            "https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"
                        ]
                    },
                    "details_url": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "examples": [
                            "https:\\/\\/example.com"
                        ]
                    },
                    "status": {
                        "enum": [
                            "queued",
                            "in_progress",
                            "completed",
                            "waiting",
                            "requested",
                            "pending"
                        ],
                        "type": "string",
                        "description": "The phase of the lifecycle that the check is currently in. Statuses of waiting, requested, and pending are reserved for GitHub Actions check runs.",
                        "examples": [
                            "queued"
                        ]
                    },
                    "conclusion": {
                        "enum": [
                            "success",
                            "failure",
                            "neutral",
                            "cancelled",
                            "skipped",
                            "timed_out",
                            "action_required",
                            null
                        ],
                        "type": [
                            "string",
                            "null"
                        ],
                        "examples": [
                            "neutral"
                        ]
                    },
                    "started_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "examples": [
                            "2018-05-04T01:14:52Z"
                        ]
                    },
                    "completed_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time",
                        "examples": [
                            "2018-05-04T01:14:52Z"
                        ]
                    },
                    "output": {
                        "required": [
                            "title",
                            "summary",
                            "text",
                            "annotations_count",
                            "annotations_url"
                        ],
                        "type": "object",
                        "properties": {
                            "title": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "summary": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "text": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "annotations_count": {
                                "type": "integer"
                            },
                            "annotations_url": {
                                "type": "string",
                                "format": "uri"
                            }
                        }
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the check.",
                        "examples": [
                            "test-coverage"
                        ]
                    },
                    "check_suite": {
                        "required": [
                            "id"
                        ],
                        "type": [
                            "object",
                            "null"
                        ],
                        "properties": {
                            "id": {
                                "type": "integer"
                            }
                        }
                    },
                    "app": {
                        "anyOf": [
                            {
                                "type": "null"
                            },
                            {
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
                        ]
                    },
                    "pull_requests": {
                        "type": "array",
                        "items": {
                            "title": "Pull Request Minimal",
                            "required": [
                                "id",
                                "number",
                                "url",
                                "head",
                                "base"
                            ],
                            "type": "object",
                            "properties": {
                                "id": {
                                    "type": "integer",
                                    "format": "int64"
                                },
                                "number": {
                                    "type": "integer"
                                },
                                "url": {
                                    "type": "string"
                                },
                                "head": {
                                    "required": [
                                        "ref",
                                        "sha",
                                        "repo"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "ref": {
                                            "type": "string"
                                        },
                                        "sha": {
                                            "type": "string"
                                        },
                                        "repo": {
                                            "required": [
                                                "id",
                                                "url",
                                                "name"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "id": {
                                                    "type": "integer",
                                                    "format": "int64"
                                                },
                                                "url": {
                                                    "type": "string"
                                                },
                                                "name": {
                                                    "type": "string"
                                                }
                                            }
                                        }
                                    }
                                },
                                "base": {
                                    "required": [
                                        "ref",
                                        "sha",
                                        "repo"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "ref": {
                                            "type": "string"
                                        },
                                        "sha": {
                                            "type": "string"
                                        },
                                        "repo": {
                                            "required": [
                                                "id",
                                                "url",
                                                "name"
                                            ],
                                            "type": "object",
                                            "properties": {
                                                "id": {
                                                    "type": "integer",
                                                    "format": "int64"
                                                },
                                                "url": {
                                                    "type": "string"
                                                },
                                                "name": {
                                                    "type": "string"
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        "description": "Pull requests that are open with a `head_sha` or `head_branch` that matches the check. The returned pull requests do not necessarily indicate pull requests that triggered the check."
                    },
                    "deployment": {
                        "title": "Deployment",
                        "required": [
                            "id",
                            "node_id",
                            "task",
                            "environment",
                            "description",
                            "statuses_url",
                            "repository_url",
                            "url",
                            "created_at",
                            "updated_at"
                        ],
                        "type": "object",
                        "properties": {
                            "url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/deployments\\/1"
                                ]
                            },
                            "id": {
                                "type": "integer",
                                "description": "Unique identifier of the deployment",
                                "examples": [
                                    42
                                ]
                            },
                            "node_id": {
                                "type": "string",
                                "examples": [
                                    "MDEwOkRlcGxveW1lbnQx"
                                ]
                            },
                            "task": {
                                "type": "string",
                                "description": "Parameter to specify a task to execute",
                                "examples": [
                                    "deploy"
                                ]
                            },
                            "original_environment": {
                                "type": "string",
                                "examples": [
                                    "staging"
                                ]
                            },
                            "environment": {
                                "type": "string",
                                "description": "Name for the target deployment environment.",
                                "examples": [
                                    "production"
                                ]
                            },
                            "description": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "examples": [
                                    "Deploy request from hubot"
                                ]
                            },
                            "created_at": {
                                "type": "string",
                                "format": "date-time",
                                "examples": [
                                    "2012-07-20T01:19:13Z"
                                ]
                            },
                            "updated_at": {
                                "type": "string",
                                "format": "date-time",
                                "examples": [
                                    "2012-07-20T01:19:13Z"
                                ]
                            },
                            "statuses_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/deployments\\/1\\/statuses"
                                ]
                            },
                            "repository_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/repos\\/octocat\\/example"
                                ]
                            },
                            "transient_environment": {
                                "type": "boolean",
                                "description": "Specifies if the given environment is will no longer exist at some point in the future. Default: false.",
                                "examples": [
                                    true
                                ]
                            },
                            "production_environment": {
                                "type": "boolean",
                                "description": "Specifies if the given environment is one that end-users directly interact with. Default: false.",
                                "examples": [
                                    true
                                ]
                            },
                            "performed_via_github_app": {
                                "anyOf": [
                                    {
                                        "type": "null"
                                    },
                                    {
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
                                ]
                            }
                        },
                        "description": "A deployment created as the result of an Actions check run from a workflow that references an environment"
                    }
                },
                "description": "A check performed on the code of a given code change"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "check_runs": [
        {
            "id": 21,
            "head_sha": "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d",
            "node_id": "MDg6Q2hlY2tSdW40",
            "external_id": "42",
            "url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4",
            "html_url": "https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4",
            "details_url": "https:\\/\\/example.com",
            "status": "queued",
            "conclusion": "neutral",
            "started_at": "2018-05-04T01:14:52Z",
            "completed_at": "2018-05-04T01:14:52Z",
            "output": {
                "title": "generated",
                "summary": "generated",
                "text": "generated",
                "annotations_count": 17,
                "annotations_url": "https:\\/\\/example.com\\/"
            },
            "name": "test-coverage",
            "check_suite": {
                "id": 2
            },
            "app": {
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
            "pull_requests": [
                {
                    "id": 2,
                    "number": 6,
                    "url": "generated",
                    "head": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    },
                    "base": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    }
                },
                {
                    "id": 2,
                    "number": 6,
                    "url": "generated",
                    "head": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    },
                    "base": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    }
                }
            ],
            "deployment": {
                "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/deployments\\/1",
                "id": 42,
                "node_id": "MDEwOkRlcGxveW1lbnQx",
                "task": "deploy",
                "original_environment": "staging",
                "environment": "production",
                "description": "Deploy request from hubot",
                "created_at": "2012-07-20T01:19:13Z",
                "updated_at": "2012-07-20T01:19:13Z",
                "statuses_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/deployments\\/1\\/statuses",
                "repository_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/example",
                "transient_environment": true,
                "production_environment": true,
                "performed_via_github_app": {
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
            }
        },
        {
            "id": 21,
            "head_sha": "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d",
            "node_id": "MDg6Q2hlY2tSdW40",
            "external_id": "42",
            "url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4",
            "html_url": "https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4",
            "details_url": "https:\\/\\/example.com",
            "status": "queued",
            "conclusion": "neutral",
            "started_at": "2018-05-04T01:14:52Z",
            "completed_at": "2018-05-04T01:14:52Z",
            "output": {
                "title": "generated",
                "summary": "generated",
                "text": "generated",
                "annotations_count": 17,
                "annotations_url": "https:\\/\\/example.com\\/"
            },
            "name": "test-coverage",
            "check_suite": {
                "id": 2
            },
            "app": {
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
            "pull_requests": [
                {
                    "id": 2,
                    "number": 6,
                    "url": "generated",
                    "head": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    },
                    "base": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    }
                },
                {
                    "id": 2,
                    "number": 6,
                    "url": "generated",
                    "head": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    },
                    "base": {
                        "ref": "generated",
                        "sha": "generated",
                        "repo": {
                            "id": 2,
                            "url": "generated",
                            "name": "generated"
                        }
                    }
                }
            ],
            "deployment": {
                "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/deployments\\/1",
                "id": 42,
                "node_id": "MDEwOkRlcGxveW1lbnQx",
                "task": "deploy",
                "original_environment": "staging",
                "environment": "production",
                "description": "Deploy request from hubot",
                "created_at": "2012-07-20T01:19:13Z",
                "updated_at": "2012-07-20T01:19:13Z",
                "statuses_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/example\\/deployments\\/1\\/statuses",
                "repository_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/example",
                "transient_environment": true,
                "production_environment": true,
                "performed_via_github_app": {
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
            }
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, #[MapFrom('check_runs')]
    public array $checkRuns,)
    {
    }
}
