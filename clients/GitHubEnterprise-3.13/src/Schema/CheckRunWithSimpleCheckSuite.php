<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CheckRunWithSimpleCheckSuite
{
    public const SCHEMA_JSON         = '{
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
        "check_suite": {
            "type": "object",
            "properties": {
                "after": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "d6fde92930d4715a2b49857d24b940956b26d2d3"
                    ]
                },
                "app": {
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
                },
                "before": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "146e867f55c26428e5f9fade55a9bbf5e95a7912"
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
                        "stale",
                        "startup_failure",
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
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "head_branch": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "examples": [
                        "master"
                    ]
                },
                "head_sha": {
                    "type": "string",
                    "description": "The SHA of the head commit that is being checked.",
                    "examples": [
                        "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"
                    ]
                },
                "id": {
                    "type": "integer",
                    "examples": [
                        5
                    ]
                },
                "node_id": {
                    "type": "string",
                    "examples": [
                        "MDEwOkNoZWNrU3VpdGU1"
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
                    }
                },
                "repository": {
                    "title": "Minimal Repository",
                    "required": [
                        "archive_url",
                        "assignees_url",
                        "blobs_url",
                        "branches_url",
                        "collaborators_url",
                        "comments_url",
                        "commits_url",
                        "compare_url",
                        "contents_url",
                        "contributors_url",
                        "deployments_url",
                        "description",
                        "downloads_url",
                        "events_url",
                        "fork",
                        "forks_url",
                        "full_name",
                        "git_commits_url",
                        "git_refs_url",
                        "git_tags_url",
                        "hooks_url",
                        "html_url",
                        "id",
                        "node_id",
                        "issue_comment_url",
                        "issue_events_url",
                        "issues_url",
                        "keys_url",
                        "labels_url",
                        "languages_url",
                        "merges_url",
                        "milestones_url",
                        "name",
                        "notifications_url",
                        "owner",
                        "private",
                        "pulls_url",
                        "releases_url",
                        "stargazers_url",
                        "statuses_url",
                        "subscribers_url",
                        "subscription_url",
                        "tags_url",
                        "teams_url",
                        "trees_url",
                        "url"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "format": "int64",
                            "examples": [
                                1296269
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
                            "examples": [
                                "Hello-World"
                            ]
                        },
                        "full_name": {
                            "type": "string",
                            "examples": [
                                "octocat\\/Hello-World"
                            ]
                        },
                        "owner": {
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
                        "private": {
                            "type": "boolean"
                        },
                        "html_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/octocat\\/Hello-World"
                            ]
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "examples": [
                                "This your first repo!"
                            ]
                        },
                        "fork": {
                            "type": "boolean"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"
                            ]
                        },
                        "archive_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"
                            ]
                        },
                        "assignees_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"
                            ]
                        },
                        "blobs_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"
                            ]
                        },
                        "branches_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"
                            ]
                        },
                        "collaborators_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"
                            ]
                        },
                        "comments_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"
                            ]
                        },
                        "commits_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"
                            ]
                        },
                        "compare_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"
                            ]
                        },
                        "contents_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"
                            ]
                        },
                        "contributors_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"
                            ]
                        },
                        "deployments_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"
                            ]
                        },
                        "downloads_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"
                            ]
                        },
                        "events_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"
                            ]
                        },
                        "forks_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"
                            ]
                        },
                        "git_commits_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"
                            ]
                        },
                        "git_refs_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"
                            ]
                        },
                        "git_tags_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"
                            ]
                        },
                        "git_url": {
                            "type": "string"
                        },
                        "issue_comment_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"
                            ]
                        },
                        "issue_events_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"
                            ]
                        },
                        "issues_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"
                            ]
                        },
                        "keys_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"
                            ]
                        },
                        "labels_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"
                            ]
                        },
                        "languages_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"
                            ]
                        },
                        "merges_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"
                            ]
                        },
                        "milestones_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"
                            ]
                        },
                        "notifications_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"
                            ]
                        },
                        "pulls_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"
                            ]
                        },
                        "releases_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"
                            ]
                        },
                        "ssh_url": {
                            "type": "string"
                        },
                        "stargazers_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"
                            ]
                        },
                        "statuses_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"
                            ]
                        },
                        "subscribers_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"
                            ]
                        },
                        "subscription_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"
                            ]
                        },
                        "tags_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"
                            ]
                        },
                        "teams_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"
                            ]
                        },
                        "trees_url": {
                            "type": "string",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"
                            ]
                        },
                        "clone_url": {
                            "type": "string"
                        },
                        "mirror_url": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "hooks_url": {
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
                            ]
                        },
                        "svn_url": {
                            "type": "string"
                        },
                        "homepage": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "language": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "forks_count": {
                            "type": "integer"
                        },
                        "stargazers_count": {
                            "type": "integer"
                        },
                        "watchers_count": {
                            "type": "integer"
                        },
                        "size": {
                            "type": "integer",
                            "description": "The size of the repository, in kilobytes. Size is calculated hourly. When a repository is initially created, the size is 0."
                        },
                        "default_branch": {
                            "type": "string"
                        },
                        "open_issues_count": {
                            "type": "integer"
                        },
                        "is_template": {
                            "type": "boolean"
                        },
                        "topics": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            }
                        },
                        "has_issues": {
                            "type": "boolean"
                        },
                        "has_projects": {
                            "type": "boolean"
                        },
                        "has_wiki": {
                            "type": "boolean"
                        },
                        "has_pages": {
                            "type": "boolean"
                        },
                        "has_downloads": {
                            "type": "boolean"
                        },
                        "has_discussions": {
                            "type": "boolean"
                        },
                        "archived": {
                            "type": "boolean"
                        },
                        "disabled": {
                            "type": "boolean"
                        },
                        "visibility": {
                            "type": "string"
                        },
                        "pushed_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time",
                            "examples": [
                                "2011-01-26T19:06:43Z"
                            ]
                        },
                        "created_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time",
                            "examples": [
                                "2011-01-26T19:01:12Z"
                            ]
                        },
                        "updated_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time",
                            "examples": [
                                "2011-01-26T19:14:43Z"
                            ]
                        },
                        "permissions": {
                            "type": "object",
                            "properties": {
                                "admin": {
                                    "type": "boolean"
                                },
                                "maintain": {
                                    "type": "boolean"
                                },
                                "push": {
                                    "type": "boolean"
                                },
                                "triage": {
                                    "type": "boolean"
                                },
                                "pull": {
                                    "type": "boolean"
                                }
                            }
                        },
                        "role_name": {
                            "type": "string",
                            "examples": [
                                "admin"
                            ]
                        },
                        "temp_clone_token": {
                            "type": "string"
                        },
                        "delete_branch_on_merge": {
                            "type": "boolean"
                        },
                        "subscribers_count": {
                            "type": "integer"
                        },
                        "network_count": {
                            "type": "integer"
                        },
                        "code_of_conduct": {
                            "title": "Code Of Conduct",
                            "required": [
                                "url",
                                "html_url",
                                "key",
                                "name"
                            ],
                            "type": "object",
                            "properties": {
                                "key": {
                                    "type": "string",
                                    "examples": [
                                        "contributor_covenant"
                                    ]
                                },
                                "name": {
                                    "type": "string",
                                    "examples": [
                                        "Contributor Covenant"
                                    ]
                                },
                                "url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant"
                                    ]
                                },
                                "body": {
                                    "type": "string",
                                    "examples": [
                                        "# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant](http:\\/\\/contributor-covenant.org), version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4](http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/).\\n"
                                    ]
                                },
                                "html_url": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "uri"
                                }
                            },
                            "description": "Code Of Conduct"
                        },
                        "license": {
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "key": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                },
                                "spdx_id": {
                                    "type": "string"
                                },
                                "url": {
                                    "type": "string"
                                },
                                "node_id": {
                                    "type": "string"
                                }
                            }
                        },
                        "forks": {
                            "type": "integer",
                            "examples": [
                                0
                            ]
                        },
                        "open_issues": {
                            "type": "integer",
                            "examples": [
                                0
                            ]
                        },
                        "watchers": {
                            "type": "integer",
                            "examples": [
                                0
                            ]
                        },
                        "allow_forking": {
                            "type": "boolean"
                        },
                        "web_commit_signoff_required": {
                            "type": "boolean",
                            "examples": [
                                false
                            ]
                        },
                        "security_and_analysis": {
                            "type": [
                                "object",
                                "null"
                            ],
                            "properties": {
                                "advanced_security": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string"
                                        }
                                    }
                                },
                                "dependabot_security_updates": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string",
                                            "description": "The enablement status of Dependabot security updates for the repository."
                                        }
                                    },
                                    "description": "Enable or disable Dependabot security updates for the repository."
                                },
                                "secret_scanning": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string"
                                        }
                                    }
                                },
                                "secret_scanning_push_protection": {
                                    "type": "object",
                                    "properties": {
                                        "status": {
                                            "enum": [
                                                "enabled",
                                                "disabled"
                                            ],
                                            "type": "string"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "description": "Minimal Repository"
                },
                "status": {
                    "enum": [
                        "queued",
                        "in_progress",
                        "completed",
                        "pending",
                        "waiting"
                    ],
                    "type": "string",
                    "examples": [
                        "completed"
                    ]
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "url": {
                    "type": "string",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-suites\\/5"
                    ]
                }
            },
            "description": "A suite of checks performed on the code of a given code change"
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
        "conclusion": {
            "enum": [
                "waiting",
                "pending",
                "startup_failure",
                "stale",
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
        },
        "details_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/example.com"
            ]
        },
        "external_id": {
            "type": "string",
            "examples": [
                "42"
            ]
        },
        "head_sha": {
            "type": "string",
            "description": "The SHA of the commit that is being checked.",
            "examples": [
                "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"
            ]
        },
        "html_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4"
            ]
        },
        "id": {
            "type": "integer",
            "description": "The id of the check.",
            "examples": [
                21
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the check.",
            "examples": [
                "test-coverage"
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDg6Q2hlY2tSdW40"
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
                "annotations_count": {
                    "type": "integer"
                },
                "annotations_url": {
                    "type": "string",
                    "format": "uri"
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
                "title": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
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
            }
        },
        "started_at": {
            "type": "string",
            "format": "date-time",
            "examples": [
                "2018-05-04T01:14:52Z"
            ]
        },
        "status": {
            "enum": [
                "queued",
                "in_progress",
                "completed",
                "pending"
            ],
            "type": "string",
            "description": "The phase of the lifecycle that the check is currently in.",
            "examples": [
                "queued"
            ]
        },
        "url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"
            ]
        }
    },
    "description": "A check performed on the code of a given code change"
}';
    public const SCHEMA_TITLE        = 'CheckRun';
    public const SCHEMA_DESCRIPTION  = 'A check performed on the code of a given code change';
    public const SCHEMA_EXAMPLE_DATA = '{
    "app": {
        "id": 37,
        "slug": "probot-owners",
        "node_id": "MDExOkludGVncmF0aW9uMQ==",
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
    "check_suite": {
        "after": "d6fde92930d4715a2b49857d24b940956b26d2d3",
        "app": {
            "id": 37,
            "slug": "probot-owners",
            "node_id": "MDExOkludGVncmF0aW9uMQ==",
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
        "before": "146e867f55c26428e5f9fade55a9bbf5e95a7912",
        "conclusion": "neutral",
        "created_at": "1970-01-01T00:00:00+00:00",
        "head_branch": "master",
        "head_sha": "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d",
        "id": 5,
        "node_id": "MDEwOkNoZWNrU3VpdGU1",
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
        "repository": {
            "id": 1296269,
            "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
            "name": "Hello-World",
            "full_name": "octocat\\/Hello-World",
            "owner": {
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
            "private": false,
            "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World",
            "description": "This your first repo!",
            "fork": false,
            "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World",
            "archive_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}",
            "assignees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}",
            "blobs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}",
            "branches_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}",
            "collaborators_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}",
            "comments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}",
            "commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}",
            "compare_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}",
            "contents_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}",
            "contributors_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors",
            "deployments_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments",
            "downloads_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads",
            "events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events",
            "forks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks",
            "git_commits_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}",
            "git_refs_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}",
            "git_tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}",
            "git_url": "generated",
            "issue_comment_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}",
            "issue_events_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}",
            "issues_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}",
            "keys_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}",
            "labels_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}",
            "languages_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages",
            "merges_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges",
            "milestones_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}",
            "notifications_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}",
            "pulls_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}",
            "releases_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}",
            "ssh_url": "generated",
            "stargazers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
            "statuses_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
            "subscribers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
            "subscription_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
            "tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
            "teams_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
            "trees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
            "clone_url": "generated",
            "mirror_url": "generated",
            "hooks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks",
            "svn_url": "generated",
            "homepage": "generated",
            "language": "generated",
            "forks_count": 11,
            "stargazers_count": 16,
            "watchers_count": 14,
            "size": 4,
            "default_branch": "generated",
            "open_issues_count": 17,
            "is_template": false,
            "topics": [
                "generated",
                "generated"
            ],
            "has_issues": false,
            "has_projects": false,
            "has_wiki": false,
            "has_pages": false,
            "has_downloads": false,
            "has_discussions": false,
            "archived": false,
            "disabled": false,
            "visibility": "generated",
            "pushed_at": "2011-01-26T19:06:43Z",
            "created_at": "2011-01-26T19:01:12Z",
            "updated_at": "2011-01-26T19:14:43Z",
            "permissions": {
                "admin": false,
                "maintain": false,
                "push": false,
                "triage": false,
                "pull": false
            },
            "role_name": "admin",
            "temp_clone_token": "generated",
            "delete_branch_on_merge": false,
            "subscribers_count": 17,
            "network_count": 13,
            "code_of_conduct": {
                "key": "contributor_covenant",
                "name": "Contributor Covenant",
                "url": "https:\\/\\/api.github.com\\/codes_of_conduct\\/contributor_covenant",
                "body": "# Contributor Covenant Code of Conduct\\n\\n## Our Pledge\\n\\nIn the interest of fostering an open and welcoming environment, we as contributors and maintainers pledge to making participation in our project and our community a harassment-free experience for everyone, regardless of age, body size, disability, ethnicity, gender identity and expression, level of experience, nationality, personal appearance, race, religion, or sexual identity and orientation.\\n\\n## Our Standards\\n\\nExamples of behavior that contributes to creating a positive environment include:\\n\\n* Using welcoming and inclusive language\\n* Being respectful of differing viewpoints and experiences\\n* Gracefully accepting constructive criticism\\n* Focusing on what is best for the community\\n* Showing empathy towards other community members\\n\\nExamples of unacceptable behavior by participants include:\\n\\n* The use of sexualized language or imagery and unwelcome sexual attention or advances\\n* Trolling, insulting\\/derogatory comments, and personal or political attacks\\n* Public or private harassment\\n* Publishing others\' private information, such as a physical or electronic address, without explicit permission\\n* Other conduct which could reasonably be considered inappropriate in a professional setting\\n\\n## Our Responsibilities\\n\\nProject maintainers are responsible for clarifying the standards of acceptable behavior and are expected to take appropriate and fair corrective action in response\\n                  to any instances of unacceptable behavior.\\n\\nProject maintainers have the right and responsibility to remove, edit, or reject comments, commits, code, wiki edits, issues, and other contributions that are not aligned to this Code of Conduct, or to ban temporarily or permanently any contributor for other behaviors that they deem inappropriate, threatening, offensive, or harmful.\\n\\n## Scope\\n\\nThis Code of Conduct applies both within project spaces and in public spaces when an individual is representing the project or its community. Examples of representing a project or community include using an official project e-mail address,\\n                  posting via an official social media account, or acting as an appointed representative at an online or offline event. Representation of a project may be further defined and clarified by project maintainers.\\n\\n## Enforcement\\n\\nInstances of abusive, harassing, or otherwise unacceptable behavior may be reported by contacting the project team at [EMAIL]. The project team will review and investigate all complaints, and will respond in a way that it deems appropriate to the circumstances. The project team is obligated to maintain confidentiality with regard to the reporter of an incident. Further details of specific enforcement policies may be posted separately.\\n\\nProject maintainers who do not follow or enforce the Code of Conduct in good faith may face temporary or permanent repercussions as determined by other members of the project\'s leadership.\\n\\n## Attribution\\n\\nThis Code of Conduct is adapted from the [Contributor Covenant](http:\\/\\/contributor-covenant.org), version 1.4, available at [http:\\/\\/contributor-covenant.org\\/version\\/1\\/4](http:\\/\\/contributor-covenant.org\\/version\\/1\\/4\\/).\\n",
                "html_url": "https:\\/\\/example.com\\/"
            },
            "license": {
                "key": "generated",
                "name": "generated",
                "spdx_id": "generated",
                "url": "generated",
                "node_id": "generated"
            },
            "forks": 0,
            "open_issues": 0,
            "watchers": 0,
            "allow_forking": false,
            "web_commit_signoff_required": false,
            "security_and_analysis": {
                "advanced_security": {
                    "status": "disabled"
                },
                "dependabot_security_updates": {
                    "status": "disabled"
                },
                "secret_scanning": {
                    "status": "disabled"
                },
                "secret_scanning_push_protection": {
                    "status": "disabled"
                }
            }
        },
        "status": "completed",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-suites\\/5"
    },
    "completed_at": "2018-05-04T01:14:52Z",
    "conclusion": "neutral",
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
    },
    "details_url": "https:\\/\\/example.com",
    "external_id": "42",
    "head_sha": "009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d",
    "html_url": "https:\\/\\/github.com\\/github\\/hello-world\\/runs\\/4",
    "id": 21,
    "name": "test-coverage",
    "node_id": "MDg6Q2hlY2tSdW40",
    "output": {
        "annotations_count": 17,
        "annotations_url": "https:\\/\\/example.com\\/",
        "summary": "generated",
        "text": "generated",
        "title": "generated"
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
    "started_at": "2018-05-04T01:14:52Z",
    "status": "queued",
    "url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/check-runs\\/4"
}';

    /**
     * checkSuite: A suite of checks performed on the code of a given code change
     * deployment: A deployment created as the result of an Actions check run from a workflow that references an environment
     * headSha: The SHA of the commit that is being checked.
     * id: The id of the check.
     * name: The name of the check.
     * status: The phase of the lifecycle that the check is currently in.
     */
    public function __construct(public Schema\Integration|null $app, #[MapFrom('check_suite')]
    public Schema\SimpleCheckSuite $checkSuite, #[MapFrom('completed_at')]
    public string|null $completedAt, public string|null $conclusion, public Schema\DeploymentSimple|null $deployment, #[MapFrom('details_url')]
    public string $detailsUrl, #[MapFrom('external_id')]
    public string $externalId, #[MapFrom('head_sha')]
    public string $headSha, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, public string $name, #[MapFrom('node_id')]
    public string $nodeId, public Schema\CheckRunWithSimpleCheckSuite\Output $output, #[MapFrom('pull_requests')]
    public array $pullRequests, #[MapFrom('started_at')]
    public string $startedAt, public string $status, public string $url,)
    {
    }
}
