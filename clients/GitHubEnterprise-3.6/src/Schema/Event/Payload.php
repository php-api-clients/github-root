<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\Event;

use ApiClients\Client\GitHubEnterprise\Schema;

final readonly class Payload
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "action": {
            "type": "string"
        },
        "issue": {
            "title": "Issue",
            "required": [
                "assignee",
                "closed_at",
                "comments",
                "comments_url",
                "events_url",
                "html_url",
                "id",
                "node_id",
                "labels",
                "labels_url",
                "milestone",
                "number",
                "repository_url",
                "state",
                "locked",
                "title",
                "url",
                "user",
                "author_association",
                "created_at",
                "updated_at"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "format": "int64"
                },
                "node_id": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "description": "URL for the issue",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repositories\\/42\\/issues\\/1"
                    ]
                },
                "repository_url": {
                    "type": "string",
                    "format": "uri"
                },
                "labels_url": {
                    "type": "string"
                },
                "comments_url": {
                    "type": "string",
                    "format": "uri"
                },
                "events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "number": {
                    "type": "integer",
                    "description": "Number uniquely identifying the issue within its repository",
                    "examples": [
                        42
                    ]
                },
                "state": {
                    "type": "string",
                    "description": "State of the issue; either \'open\' or \'closed\'",
                    "examples": [
                        "open"
                    ]
                },
                "state_reason": {
                    "enum": [
                        "completed",
                        "reopened",
                        "not_planned",
                        null
                    ],
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The reason for the current state",
                    "examples": [
                        "not_planned"
                    ]
                },
                "title": {
                    "type": "string",
                    "description": "Title of the issue",
                    "examples": [
                        "Widget creation fails in Safari on OS X 10.8"
                    ]
                },
                "body": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "Contents of the issue",
                    "examples": [
                        "It looks like the new widget form is broken on Safari. When I try and create the widget, Safari crashes. This is reproducible on 10.8, but not 10.9. Maybe a browser bug?"
                    ]
                },
                "user": {
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
                        }
                    ]
                },
                "labels": {
                    "type": "array",
                    "items": {
                        "oneOf": [
                            {
                                "type": "string"
                            },
                            {
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer",
                                        "format": "int64"
                                    },
                                    "node_id": {
                                        "type": "string"
                                    },
                                    "url": {
                                        "type": "string",
                                        "format": "uri"
                                    },
                                    "name": {
                                        "type": "string"
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "color": {
                                        "type": [
                                            "string",
                                            "null"
                                        ]
                                    },
                                    "default": {
                                        "type": "boolean"
                                    }
                                }
                            }
                        ]
                    },
                    "description": "Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository",
                    "examples": [
                        "bug",
                        "registration"
                    ]
                },
                "assignee": {
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
                        }
                    ]
                },
                "assignees": {
                    "type": [
                        "array",
                        "null"
                    ],
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
                        "description": "A GitHub user."
                    }
                },
                "milestone": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
                        {
                            "title": "Milestone",
                            "required": [
                                "closed_issues",
                                "creator",
                                "description",
                                "due_on",
                                "closed_at",
                                "id",
                                "node_id",
                                "labels_url",
                                "html_url",
                                "number",
                                "open_issues",
                                "state",
                                "title",
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
                                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1"
                                    ]
                                },
                                "html_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/github.com\\/octocat\\/Hello-World\\/milestones\\/v1.0"
                                    ]
                                },
                                "labels_url": {
                                    "type": "string",
                                    "format": "uri",
                                    "examples": [
                                        "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1\\/labels"
                                    ]
                                },
                                "id": {
                                    "type": "integer",
                                    "examples": [
                                        1002604
                                    ]
                                },
                                "node_id": {
                                    "type": "string",
                                    "examples": [
                                        "MDk6TWlsZXN0b25lMTAwMjYwNA=="
                                    ]
                                },
                                "number": {
                                    "type": "integer",
                                    "description": "The number of the milestone.",
                                    "examples": [
                                        42
                                    ]
                                },
                                "state": {
                                    "enum": [
                                        "open",
                                        "closed"
                                    ],
                                    "type": "string",
                                    "description": "The state of the milestone.",
                                    "default": "open",
                                    "examples": [
                                        "open"
                                    ]
                                },
                                "title": {
                                    "type": "string",
                                    "description": "The title of the milestone.",
                                    "examples": [
                                        "v1.0"
                                    ]
                                },
                                "description": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "examples": [
                                        "Tracking milestone for version 1.0"
                                    ]
                                },
                                "creator": {
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
                                        }
                                    ]
                                },
                                "open_issues": {
                                    "type": "integer",
                                    "examples": [
                                        4
                                    ]
                                },
                                "closed_issues": {
                                    "type": "integer",
                                    "examples": [
                                        8
                                    ]
                                },
                                "created_at": {
                                    "type": "string",
                                    "format": "date-time",
                                    "examples": [
                                        "2011-04-10T20:09:31Z"
                                    ]
                                },
                                "updated_at": {
                                    "type": "string",
                                    "format": "date-time",
                                    "examples": [
                                        "2014-03-03T18:58:10Z"
                                    ]
                                },
                                "closed_at": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time",
                                    "examples": [
                                        "2013-02-12T13:22:01Z"
                                    ]
                                },
                                "due_on": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "date-time",
                                    "examples": [
                                        "2012-10-09T23:39:01Z"
                                    ]
                                }
                            },
                            "description": "A collection of related issues and pull requests."
                        }
                    ]
                },
                "locked": {
                    "type": "boolean"
                },
                "active_lock_reason": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "comments": {
                    "type": "integer"
                },
                "pull_request": {
                    "required": [
                        "diff_url",
                        "html_url",
                        "patch_url",
                        "url"
                    ],
                    "type": "object",
                    "properties": {
                        "merged_at": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "date-time"
                        },
                        "diff_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "html_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "patch_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        },
                        "url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri"
                        }
                    }
                },
                "closed_at": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "format": "date-time"
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "draft": {
                    "type": "boolean"
                },
                "closed_by": {
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
                        }
                    ]
                },
                "body_html": {
                    "type": "string"
                },
                "body_text": {
                    "type": "string"
                },
                "timeline_url": {
                    "type": "string",
                    "format": "uri"
                },
                "repository": {
                    "title": "Repository",
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
                        "url",
                        "clone_url",
                        "default_branch",
                        "forks",
                        "forks_count",
                        "git_url",
                        "has_downloads",
                        "has_issues",
                        "has_projects",
                        "has_wiki",
                        "has_pages",
                        "homepage",
                        "language",
                        "archived",
                        "disabled",
                        "mirror_url",
                        "open_issues",
                        "open_issues_count",
                        "license",
                        "pushed_at",
                        "size",
                        "ssh_url",
                        "stargazers_count",
                        "svn_url",
                        "watchers",
                        "watchers_count",
                        "created_at",
                        "updated_at"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "description": "Unique identifier of the repository",
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
                            "description": "The name of the repository.",
                            "examples": [
                                "Team Environment"
                            ]
                        },
                        "full_name": {
                            "type": "string",
                            "examples": [
                                "octocat\\/Hello-World"
                            ]
                        },
                        "license": {
                            "anyOf": [
                                {
                                    "type": "null"
                                },
                                {
                                    "title": "License Simple",
                                    "required": [
                                        "key",
                                        "name",
                                        "url",
                                        "spdx_id",
                                        "node_id"
                                    ],
                                    "type": "object",
                                    "properties": {
                                        "key": {
                                            "type": "string",
                                            "examples": [
                                                "mit"
                                            ]
                                        },
                                        "name": {
                                            "type": "string",
                                            "examples": [
                                                "MIT License"
                                            ]
                                        },
                                        "url": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "format": "uri",
                                            "examples": [
                                                "https:\\/\\/api.github.com\\/licenses\\/mit"
                                            ]
                                        },
                                        "spdx_id": {
                                            "type": [
                                                "string",
                                                "null"
                                            ],
                                            "examples": [
                                                "MIT"
                                            ]
                                        },
                                        "node_id": {
                                            "type": "string",
                                            "examples": [
                                                "MDc6TGljZW5zZW1pdA=="
                                            ]
                                        },
                                        "html_url": {
                                            "type": "string",
                                            "format": "uri"
                                        }
                                    },
                                    "description": "License Simple"
                                }
                            ]
                        },
                        "organization": {
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
                                }
                            ]
                        },
                        "forks": {
                            "type": "integer"
                        },
                        "permissions": {
                            "required": [
                                "admin",
                                "pull",
                                "push"
                            ],
                            "type": "object",
                            "properties": {
                                "admin": {
                                    "type": "boolean"
                                },
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
                                }
                            }
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
                        "private": {
                            "type": "boolean",
                            "description": "Whether the repository is private or public.",
                            "default": false
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
                            "type": "string",
                            "examples": [
                                "git:github.com\\/octocat\\/Hello-World.git"
                            ]
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
                            "type": "string",
                            "examples": [
                                "git@github.com:octocat\\/Hello-World.git"
                            ]
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
                            "type": "string",
                            "examples": [
                                "https:\\/\\/github.com\\/octocat\\/Hello-World.git"
                            ]
                        },
                        "mirror_url": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri",
                            "examples": [
                                "git:git.example.com\\/octocat\\/Hello-World"
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
                            "type": "string",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/svn.github.com\\/octocat\\/Hello-World"
                            ]
                        },
                        "homepage": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com"
                            ]
                        },
                        "language": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "forks_count": {
                            "type": "integer",
                            "examples": [
                                9
                            ]
                        },
                        "stargazers_count": {
                            "type": "integer",
                            "examples": [
                                80
                            ]
                        },
                        "watchers_count": {
                            "type": "integer",
                            "examples": [
                                80
                            ]
                        },
                        "size": {
                            "type": "integer",
                            "description": "The size of the repository. Size is calculated hourly. When a repository is initially created, the size is 0.",
                            "examples": [
                                108
                            ]
                        },
                        "default_branch": {
                            "type": "string",
                            "description": "The default branch of the repository.",
                            "examples": [
                                "master"
                            ]
                        },
                        "open_issues_count": {
                            "type": "integer",
                            "examples": [
                                0
                            ]
                        },
                        "is_template": {
                            "type": "boolean",
                            "description": "Whether this repository acts as a template that can be used to generate new repositories.",
                            "default": false,
                            "examples": [
                                true
                            ]
                        },
                        "topics": {
                            "type": "array",
                            "items": {
                                "type": "string"
                            }
                        },
                        "has_issues": {
                            "type": "boolean",
                            "description": "Whether issues are enabled.",
                            "default": true,
                            "examples": [
                                true
                            ]
                        },
                        "has_projects": {
                            "type": "boolean",
                            "description": "Whether projects are enabled.",
                            "default": true,
                            "examples": [
                                true
                            ]
                        },
                        "has_wiki": {
                            "type": "boolean",
                            "description": "Whether the wiki is enabled.",
                            "default": true,
                            "examples": [
                                true
                            ]
                        },
                        "has_pages": {
                            "type": "boolean"
                        },
                        "has_downloads": {
                            "type": "boolean",
                            "description": "Whether downloads are enabled.",
                            "default": true,
                            "deprecated": true,
                            "examples": [
                                true
                            ]
                        },
                        "archived": {
                            "type": "boolean",
                            "description": "Whether the repository is archived.",
                            "default": false
                        },
                        "disabled": {
                            "type": "boolean",
                            "description": "Returns whether or not this repository disabled."
                        },
                        "visibility": {
                            "type": "string",
                            "description": "The repository visibility: public, private, or internal.",
                            "default": "public"
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
                        "allow_rebase_merge": {
                            "type": "boolean",
                            "description": "Whether to allow rebase merges for pull requests.",
                            "default": true,
                            "examples": [
                                true
                            ]
                        },
                        "template_repository": {
                            "type": [
                                "object",
                                "null"
                            ],
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
                                "full_name": {
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
                                },
                                "private": {
                                    "type": "boolean"
                                },
                                "html_url": {
                                    "type": "string"
                                },
                                "description": {
                                    "type": "string"
                                },
                                "fork": {
                                    "type": "boolean"
                                },
                                "url": {
                                    "type": "string"
                                },
                                "archive_url": {
                                    "type": "string"
                                },
                                "assignees_url": {
                                    "type": "string"
                                },
                                "blobs_url": {
                                    "type": "string"
                                },
                                "branches_url": {
                                    "type": "string"
                                },
                                "collaborators_url": {
                                    "type": "string"
                                },
                                "comments_url": {
                                    "type": "string"
                                },
                                "commits_url": {
                                    "type": "string"
                                },
                                "compare_url": {
                                    "type": "string"
                                },
                                "contents_url": {
                                    "type": "string"
                                },
                                "contributors_url": {
                                    "type": "string"
                                },
                                "deployments_url": {
                                    "type": "string"
                                },
                                "downloads_url": {
                                    "type": "string"
                                },
                                "events_url": {
                                    "type": "string"
                                },
                                "forks_url": {
                                    "type": "string"
                                },
                                "git_commits_url": {
                                    "type": "string"
                                },
                                "git_refs_url": {
                                    "type": "string"
                                },
                                "git_tags_url": {
                                    "type": "string"
                                },
                                "git_url": {
                                    "type": "string"
                                },
                                "issue_comment_url": {
                                    "type": "string"
                                },
                                "issue_events_url": {
                                    "type": "string"
                                },
                                "issues_url": {
                                    "type": "string"
                                },
                                "keys_url": {
                                    "type": "string"
                                },
                                "labels_url": {
                                    "type": "string"
                                },
                                "languages_url": {
                                    "type": "string"
                                },
                                "merges_url": {
                                    "type": "string"
                                },
                                "milestones_url": {
                                    "type": "string"
                                },
                                "notifications_url": {
                                    "type": "string"
                                },
                                "pulls_url": {
                                    "type": "string"
                                },
                                "releases_url": {
                                    "type": "string"
                                },
                                "ssh_url": {
                                    "type": "string"
                                },
                                "stargazers_url": {
                                    "type": "string"
                                },
                                "statuses_url": {
                                    "type": "string"
                                },
                                "subscribers_url": {
                                    "type": "string"
                                },
                                "subscription_url": {
                                    "type": "string"
                                },
                                "tags_url": {
                                    "type": "string"
                                },
                                "teams_url": {
                                    "type": "string"
                                },
                                "trees_url": {
                                    "type": "string"
                                },
                                "clone_url": {
                                    "type": "string"
                                },
                                "mirror_url": {
                                    "type": "string"
                                },
                                "hooks_url": {
                                    "type": "string"
                                },
                                "svn_url": {
                                    "type": "string"
                                },
                                "homepage": {
                                    "type": "string"
                                },
                                "language": {
                                    "type": "string"
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
                                    "type": "integer"
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
                                "allow_rebase_merge": {
                                    "type": "boolean"
                                },
                                "temp_clone_token": {
                                    "type": "string"
                                },
                                "allow_squash_merge": {
                                    "type": "boolean"
                                },
                                "allow_auto_merge": {
                                    "type": "boolean"
                                },
                                "delete_branch_on_merge": {
                                    "type": "boolean"
                                },
                                "allow_update_branch": {
                                    "type": "boolean"
                                },
                                "use_squash_pr_title_as_default": {
                                    "type": "boolean"
                                },
                                "squash_merge_commit_title": {
                                    "enum": [
                                        "PR_TITLE",
                                        "COMMIT_OR_PR_TITLE"
                                    ],
                                    "type": "string",
                                    "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                                },
                                "squash_merge_commit_message": {
                                    "enum": [
                                        "PR_BODY",
                                        "COMMIT_MESSAGES",
                                        "BLANK"
                                    ],
                                    "type": "string",
                                    "description": "The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."
                                },
                                "merge_commit_title": {
                                    "enum": [
                                        "PR_TITLE",
                                        "MERGE_MESSAGE"
                                    ],
                                    "type": "string",
                                    "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                                },
                                "merge_commit_message": {
                                    "enum": [
                                        "PR_BODY",
                                        "PR_TITLE",
                                        "BLANK"
                                    ],
                                    "type": "string",
                                    "description": "The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."
                                },
                                "allow_merge_commit": {
                                    "type": "boolean"
                                },
                                "subscribers_count": {
                                    "type": "integer"
                                },
                                "network_count": {
                                    "type": "integer"
                                }
                            }
                        },
                        "temp_clone_token": {
                            "type": "string"
                        },
                        "allow_squash_merge": {
                            "type": "boolean",
                            "description": "Whether to allow squash merges for pull requests.",
                            "default": true,
                            "examples": [
                                true
                            ]
                        },
                        "allow_auto_merge": {
                            "type": "boolean",
                            "description": "Whether to allow Auto-merge to be used on pull requests.",
                            "default": false,
                            "examples": [
                                false
                            ]
                        },
                        "delete_branch_on_merge": {
                            "type": "boolean",
                            "description": "Whether to delete head branches when pull requests are merged",
                            "default": false,
                            "examples": [
                                false
                            ]
                        },
                        "allow_update_branch": {
                            "type": "boolean",
                            "description": "Whether or not a pull request head branch that is behind its base branch can always be updated even if it is not required to be up to date before merging.",
                            "default": false,
                            "examples": [
                                false
                            ]
                        },
                        "use_squash_pr_title_as_default": {
                            "type": "boolean",
                            "description": "Whether a squash merge commit can use the pull request title as default. **This property has been deprecated. Please use `squash_merge_commit_title` instead.",
                            "default": false,
                            "deprecated": true
                        },
                        "squash_merge_commit_title": {
                            "enum": [
                                "PR_TITLE",
                                "COMMIT_OR_PR_TITLE"
                            ],
                            "type": "string",
                            "description": "The default value for a squash merge commit title:\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `COMMIT_OR_PR_TITLE` - default to the commit\'s title (if only one commit) or the pull request\'s title (when more than one commit)."
                        },
                        "squash_merge_commit_message": {
                            "enum": [
                                "PR_BODY",
                                "COMMIT_MESSAGES",
                                "BLANK"
                            ],
                            "type": "string",
                            "description": "The default value for a squash merge commit message:\\n\\n- `PR_BODY` - default to the pull request\'s body.\\n- `COMMIT_MESSAGES` - default to the branch\'s commit messages.\\n- `BLANK` - default to a blank commit message."
                        },
                        "merge_commit_title": {
                            "enum": [
                                "PR_TITLE",
                                "MERGE_MESSAGE"
                            ],
                            "type": "string",
                            "description": "The default value for a merge commit title.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `MERGE_MESSAGE` - default to the classic title for a merge message (e.g., Merge pull request #123 from branch-name)."
                        },
                        "merge_commit_message": {
                            "enum": [
                                "PR_BODY",
                                "PR_TITLE",
                                "BLANK"
                            ],
                            "type": "string",
                            "description": "The default value for a merge commit message.\\n\\n- `PR_TITLE` - default to the pull request\'s title.\\n- `PR_BODY` - default to the pull request\'s body.\\n- `BLANK` - default to a blank commit message."
                        },
                        "allow_merge_commit": {
                            "type": "boolean",
                            "description": "Whether to allow merge commits for pull requests.",
                            "default": true,
                            "examples": [
                                true
                            ]
                        },
                        "allow_forking": {
                            "type": "boolean",
                            "description": "Whether to allow forking this repo"
                        },
                        "web_commit_signoff_required": {
                            "type": "boolean",
                            "description": "Whether to require contributors to sign off on web-based commits",
                            "default": false
                        },
                        "subscribers_count": {
                            "type": "integer"
                        },
                        "network_count": {
                            "type": "integer"
                        },
                        "open_issues": {
                            "type": "integer"
                        },
                        "watchers": {
                            "type": "integer"
                        },
                        "master_branch": {
                            "type": "string"
                        },
                        "starred_at": {
                            "type": "string",
                            "examples": [
                                "\\"2020-07-09T00:17:42Z\\""
                            ]
                        },
                        "anonymous_access_enabled": {
                            "type": "boolean",
                            "description": "Whether anonymous git access is enabled for this repository"
                        }
                    },
                    "description": "A repository on GitHub."
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
                            "type": "object",
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
                                "client_id": {
                                    "type": "string",
                                    "examples": [
                                        "\\"Iv1.25b5d1e65ffc4022\\""
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
                "author_association": {
                    "title": "author_association",
                    "enum": [
                        "COLLABORATOR",
                        "CONTRIBUTOR",
                        "FIRST_TIMER",
                        "FIRST_TIME_CONTRIBUTOR",
                        "MANNEQUIN",
                        "MEMBER",
                        "NONE",
                        "OWNER"
                    ],
                    "type": "string",
                    "description": "How the author is associated with the repository.",
                    "examples": [
                        "OWNER"
                    ]
                },
                "reactions": {
                    "title": "Reaction Rollup",
                    "required": [
                        "url",
                        "total_count",
                        "+1",
                        "-1",
                        "laugh",
                        "confused",
                        "heart",
                        "hooray",
                        "eyes",
                        "rocket"
                    ],
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "total_count": {
                            "type": "integer"
                        },
                        "+1": {
                            "type": "integer"
                        },
                        "-1": {
                            "type": "integer"
                        },
                        "laugh": {
                            "type": "integer"
                        },
                        "confused": {
                            "type": "integer"
                        },
                        "heart": {
                            "type": "integer"
                        },
                        "hooray": {
                            "type": "integer"
                        },
                        "eyes": {
                            "type": "integer"
                        },
                        "rocket": {
                            "type": "integer"
                        }
                    }
                }
            },
            "description": "Issues are a great way to keep track of tasks, enhancements, and bugs for your projects."
        },
        "comment": {
            "title": "Issue Comment",
            "required": [
                "id",
                "node_id",
                "html_url",
                "issue_url",
                "author_association",
                "user",
                "url",
                "created_at",
                "updated_at"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer",
                    "description": "Unique identifier of the issue comment",
                    "format": "int64",
                    "examples": [
                        42
                    ]
                },
                "node_id": {
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "description": "URL for the issue comment",
                    "format": "uri",
                    "examples": [
                        "https:\\/\\/api.github.com\\/repositories\\/42\\/issues\\/comments\\/1"
                    ]
                },
                "body": {
                    "type": "string",
                    "description": "Contents of the issue comment",
                    "examples": [
                        "What version of Safari were you using when you observed this bug?"
                    ]
                },
                "body_text": {
                    "type": "string"
                },
                "body_html": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "user": {
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
                        }
                    ]
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2011-04-14T16:00:49Z"
                    ]
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time",
                    "examples": [
                        "2011-04-14T16:00:49Z"
                    ]
                },
                "issue_url": {
                    "type": "string",
                    "format": "uri"
                },
                "author_association": {
                    "title": "author_association",
                    "enum": [
                        "COLLABORATOR",
                        "CONTRIBUTOR",
                        "FIRST_TIMER",
                        "FIRST_TIME_CONTRIBUTOR",
                        "MANNEQUIN",
                        "MEMBER",
                        "NONE",
                        "OWNER"
                    ],
                    "type": "string",
                    "description": "How the author is associated with the repository.",
                    "examples": [
                        "OWNER"
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
                            "type": "object",
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
                                "client_id": {
                                    "type": "string",
                                    "examples": [
                                        "\\"Iv1.25b5d1e65ffc4022\\""
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
                "reactions": {
                    "title": "Reaction Rollup",
                    "required": [
                        "url",
                        "total_count",
                        "+1",
                        "-1",
                        "laugh",
                        "confused",
                        "heart",
                        "hooray",
                        "eyes",
                        "rocket"
                    ],
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "total_count": {
                            "type": "integer"
                        },
                        "+1": {
                            "type": "integer"
                        },
                        "-1": {
                            "type": "integer"
                        },
                        "laugh": {
                            "type": "integer"
                        },
                        "confused": {
                            "type": "integer"
                        },
                        "heart": {
                            "type": "integer"
                        },
                        "hooray": {
                            "type": "integer"
                        },
                        "eyes": {
                            "type": "integer"
                        },
                        "rocket": {
                            "type": "integer"
                        }
                    }
                }
            },
            "description": "Comments provide a way for people to collaborate on an issue."
        },
        "pages": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "page_name": {
                        "type": "string"
                    },
                    "title": {
                        "type": "string"
                    },
                    "summary": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "action": {
                        "type": "string"
                    },
                    "sha": {
                        "type": "string"
                    },
                    "html_url": {
                        "type": "string"
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "action": "generated",
    "issue": {
        "id": 2,
        "node_id": "generated",
        "url": "https:\\/\\/api.github.com\\/repositories\\/42\\/issues\\/1",
        "repository_url": "https:\\/\\/example.com\\/",
        "labels_url": "generated",
        "comments_url": "https:\\/\\/example.com\\/",
        "events_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "number": 42,
        "state": "open",
        "state_reason": "not_planned",
        "title": "Widget creation fails in Safari on OS X 10.8",
        "body": "It looks like the new widget form is broken on Safari. When I try and create the widget, Safari crashes. This is reproducible on 10.8, but not 10.9. Maybe a browser bug?",
        "user": {
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
        "labels": [
            "registration",
            "registration"
        ],
        "assignee": {
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
        "assignees": null,
        "milestone": {
            "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1",
            "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World\\/milestones\\/v1.0",
            "labels_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones\\/1\\/labels",
            "id": 1002604,
            "node_id": "MDk6TWlsZXN0b25lMTAwMjYwNA==",
            "number": 42,
            "state": "open",
            "title": "v1.0",
            "description": "Tracking milestone for version 1.0",
            "creator": {
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
            "open_issues": 4,
            "closed_issues": 8,
            "created_at": "2011-04-10T20:09:31Z",
            "updated_at": "2014-03-03T18:58:10Z",
            "closed_at": "2013-02-12T13:22:01Z",
            "due_on": "2012-10-09T23:39:01Z"
        },
        "locked": false,
        "active_lock_reason": "generated",
        "comments": 8,
        "pull_request": {
            "merged_at": "1970-01-01T00:00:00+00:00",
            "diff_url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/",
            "patch_url": "https:\\/\\/example.com\\/",
            "url": "https:\\/\\/example.com\\/"
        },
        "closed_at": "1970-01-01T00:00:00+00:00",
        "created_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "draft": false,
        "closed_by": {
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
        "body_html": "generated",
        "body_text": "generated",
        "timeline_url": "https:\\/\\/example.com\\/",
        "repository": {
            "id": 42,
            "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
            "name": "Team Environment",
            "full_name": "octocat\\/Hello-World",
            "license": {
                "key": "mit",
                "name": "MIT License",
                "url": "https:\\/\\/api.github.com\\/licenses\\/mit",
                "spdx_id": "MIT",
                "node_id": "MDc6TGljZW5zZW1pdA==",
                "html_url": "https:\\/\\/example.com\\/"
            },
            "organization": {
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
            "forks": 5,
            "permissions": {
                "admin": false,
                "pull": false,
                "triage": false,
                "push": false,
                "maintain": false
            },
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
                "starred_at": "\\"2020-07-09T00:17:55Z\\""
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
            "git_url": "git:github.com\\/octocat\\/Hello-World.git",
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
            "ssh_url": "git@github.com:octocat\\/Hello-World.git",
            "stargazers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
            "statuses_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
            "subscribers_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
            "subscription_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
            "tags_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
            "teams_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
            "trees_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
            "clone_url": "https:\\/\\/github.com\\/octocat\\/Hello-World.git",
            "mirror_url": "git:git.example.com\\/octocat\\/Hello-World",
            "hooks_url": "http:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks",
            "svn_url": "https:\\/\\/svn.github.com\\/octocat\\/Hello-World",
            "homepage": "https:\\/\\/github.com",
            "language": "generated",
            "forks_count": 9,
            "stargazers_count": 80,
            "watchers_count": 80,
            "size": 108,
            "default_branch": "master",
            "open_issues_count": 0,
            "is_template": true,
            "topics": [
                "generated",
                "generated"
            ],
            "has_issues": true,
            "has_projects": true,
            "has_wiki": true,
            "has_pages": false,
            "has_downloads": true,
            "archived": false,
            "disabled": false,
            "visibility": "generated",
            "pushed_at": "2011-01-26T19:06:43Z",
            "created_at": "2011-01-26T19:01:12Z",
            "updated_at": "2011-01-26T19:14:43Z",
            "allow_rebase_merge": true,
            "template_repository": {
                "id": 2,
                "node_id": "generated",
                "name": "generated",
                "full_name": "generated",
                "owner": {
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
                "private": false,
                "html_url": "generated",
                "description": "generated",
                "fork": false,
                "url": "generated",
                "archive_url": "generated",
                "assignees_url": "generated",
                "blobs_url": "generated",
                "branches_url": "generated",
                "collaborators_url": "generated",
                "comments_url": "generated",
                "commits_url": "generated",
                "compare_url": "generated",
                "contents_url": "generated",
                "contributors_url": "generated",
                "deployments_url": "generated",
                "downloads_url": "generated",
                "events_url": "generated",
                "forks_url": "generated",
                "git_commits_url": "generated",
                "git_refs_url": "generated",
                "git_tags_url": "generated",
                "git_url": "generated",
                "issue_comment_url": "generated",
                "issue_events_url": "generated",
                "issues_url": "generated",
                "keys_url": "generated",
                "labels_url": "generated",
                "languages_url": "generated",
                "merges_url": "generated",
                "milestones_url": "generated",
                "notifications_url": "generated",
                "pulls_url": "generated",
                "releases_url": "generated",
                "ssh_url": "generated",
                "stargazers_url": "generated",
                "statuses_url": "generated",
                "subscribers_url": "generated",
                "subscription_url": "generated",
                "tags_url": "generated",
                "teams_url": "generated",
                "trees_url": "generated",
                "clone_url": "generated",
                "mirror_url": "generated",
                "hooks_url": "generated",
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
                "archived": false,
                "disabled": false,
                "visibility": "generated",
                "pushed_at": "generated",
                "created_at": "generated",
                "updated_at": "generated",
                "permissions": {
                    "admin": false,
                    "maintain": false,
                    "push": false,
                    "triage": false,
                    "pull": false
                },
                "allow_rebase_merge": false,
                "temp_clone_token": "generated",
                "allow_squash_merge": false,
                "allow_auto_merge": false,
                "delete_branch_on_merge": false,
                "allow_update_branch": false,
                "use_squash_pr_title_as_default": false,
                "squash_merge_commit_title": "PR_TITLE",
                "squash_merge_commit_message": "PR_BODY",
                "merge_commit_title": "MERGE_MESSAGE",
                "merge_commit_message": "BLANK",
                "allow_merge_commit": false,
                "subscribers_count": 17,
                "network_count": 13
            },
            "temp_clone_token": "generated",
            "allow_squash_merge": true,
            "allow_auto_merge": false,
            "delete_branch_on_merge": false,
            "allow_update_branch": false,
            "use_squash_pr_title_as_default": false,
            "squash_merge_commit_title": "PR_TITLE",
            "squash_merge_commit_message": "PR_BODY",
            "merge_commit_title": "MERGE_MESSAGE",
            "merge_commit_message": "BLANK",
            "allow_merge_commit": true,
            "allow_forking": false,
            "web_commit_signoff_required": false,
            "subscribers_count": 17,
            "network_count": 13,
            "open_issues": 11,
            "watchers": 8,
            "master_branch": "generated",
            "starred_at": "\\"2020-07-09T00:17:42Z\\"",
            "anonymous_access_enabled": false
        },
        "performed_via_github_app": {
            "id": 37,
            "slug": "probot-owners",
            "node_id": "MDExOkludGVncmF0aW9uMQ==",
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
                "starred_at": "\\"2020-07-09T00:17:55Z\\""
            },
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
            "client_id": "\\"Iv1.25b5d1e65ffc4022\\"",
            "client_secret": "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\"",
            "webhook_secret": "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\"",
            "pem": "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
        },
        "author_association": "OWNER",
        "reactions": {
            "url": "https:\\/\\/example.com\\/",
            "total_count": 11,
            "+1": 11,
            "-1": 10,
            "laugh": 5,
            "confused": 8,
            "heart": 5,
            "hooray": 6,
            "eyes": 4,
            "rocket": 6
        }
    },
    "comment": {
        "id": 42,
        "node_id": "generated",
        "url": "https:\\/\\/api.github.com\\/repositories\\/42\\/issues\\/comments\\/1",
        "body": "What version of Safari were you using when you observed this bug?",
        "body_text": "generated",
        "body_html": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "user": {
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
        "created_at": "2011-04-14T16:00:49Z",
        "updated_at": "2011-04-14T16:00:49Z",
        "issue_url": "https:\\/\\/example.com\\/",
        "author_association": "OWNER",
        "performed_via_github_app": {
            "id": 37,
            "slug": "probot-owners",
            "node_id": "MDExOkludGVncmF0aW9uMQ==",
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
                "starred_at": "\\"2020-07-09T00:17:55Z\\""
            },
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
            "client_id": "\\"Iv1.25b5d1e65ffc4022\\"",
            "client_secret": "\\"1d4b2097ac622ba702d19de498f005747a8b21d3\\"",
            "webhook_secret": "\\"6fba8f2fc8a7e8f2cca5577eddd82ca7586b3b6b\\"",
            "pem": "\\"-----BEGIN RSA PRIVATE KEY-----\\\\nMIIEogIBAAKCAQEArYxrNYD\\/iT5CZVpRJu4rBKmmze3PVmT\\/gCo2ATUvDvZTPTey\\\\nxcGJ3vvrJXazKk06pN05TN29o98jrYz4cengG3YGsXPNEpKsIrEl8NhbnxapEnM9\\\\nJCMRe0P5JcPsfZlX6hmiT7136GRWiGOUba2X9+HKh8QJVLG5rM007TBER9\\/z9mWm\\\\nrJuNh+m5l320oBQY\\/Qq3A7wzdEfZw8qm\\/mIN0FCeoXH1L6B8xXWaAYBwhTEh6SSn\\\\nZHlO1Xu1JWDmAvBCi0RO5aRSKM8q9QEkvvHP4yweAtK3N8+aAbZ7ovaDhyGz8r6r\\\\nzhU1b8Uo0Z2ysf503WqzQgIajr7Fry7\\/kUwpgQIDAQABAoIBADwJp80Ko1xHPZDy\\\\nfcCKBDfIuPvkmSW6KumbsLMaQv1aGdHDwwTGv3t0ixSay8CGlxMRtRDyZPib6SvQ\\\\n6OH\\/lpfpbMdW2ErkksgtoIKBVrDilfrcAvrNZu7NxRNbhCSvN8q0s4ICecjbbVQh\\\\nnueSdlA6vGXbW58BHMq68uRbHkP+k+mM9U0mDJ1HMch67wlg5GbayVRt63H7R2+r\\\\nVxcna7B80J\\/lCEjIYZznawgiTvp3MSanTglqAYi+m1EcSsP14bJIB9vgaxS79kTu\\\\noiSo93leJbBvuGo8QEiUqTwMw4tDksmkLsoqNKQ1q9P7LZ9DGcujtPy4EZsamSJT\\\\ny8OJt0ECgYEA2lxOxJsQk2kI325JgKFjo92mQeUObIvPfSNWUIZQDTjniOI6Gv63\\\\nGLWVFrZcvQBWjMEQraJA9xjPbblV8PtfO87MiJGLWCHFxmPz2dzoedN+2Coxom8m\\\\nV95CLz8QUShuao6u\\/RYcvUaZEoYs5bHcTmy5sBK80JyEmafJPtCQVxMCgYEAy3ar\\\\nZr3yv4xRPEPMat4rseswmuMooSaK3SKub19WFI5IAtB\\/e7qR1Rj9JhOGcZz+OQrl\\\\nT78O2OFYlgOIkJPvRMrPpK5V9lslc7tz1FSh3BZMRGq5jSyD7ETSOQ0c8T2O\\/s7v\\\\nbeEPbVbDe4mwvM24XByH0GnWveVxaDl51ABD65sCgYB3ZAspUkOA5egVCh8kNpnd\\\\nSd6SnuQBE3ySRlT2WEnCwP9Ph6oPgn+oAfiPX4xbRqkL8q\\/k0BdHQ4h+zNwhk7+h\\\\nWtPYRAP1Xxnc\\/F+jGjb+DVaIaKGU18MWPg7f+FI6nampl3Q0KvfxwX0GdNhtio8T\\\\nTj1E+SnFwh56SRQuxSh2gwKBgHKjlIO5NtNSflsUYFM+hyQiPiqnHzddfhSG+\\/3o\\\\nm5nNaSmczJesUYreH5San7\\/YEy2UxAugvP7aSY2MxB+iGsiJ9WD2kZzTUlDZJ7RV\\\\nUzWsoqBR+eZfVJ2FUWWvy8TpSG6trh4dFxImNtKejCR1TREpSiTV3Zb1dmahK9GV\\\\nrK9NAoGAbBxRLoC01xfxCTgt5BDiBcFVh4fp5yYKwavJPLzHSpuDOrrI9jDn1oKN\\\\nonq5sDU1i391zfQvdrbX4Ova48BN+B7p63FocP\\/MK5tyyBoT8zQEk2+vWDOw7H\\/Z\\\\nu5dTCPxTIsoIwUw1I+7yIxqJzLPFgR2gVBwY1ra\\/8iAqCj+zeBw=\\\\n-----END RSA PRIVATE KEY-----\\\\n\\""
        },
        "reactions": {
            "url": "https:\\/\\/example.com\\/",
            "total_count": 11,
            "+1": 11,
            "-1": 10,
            "laugh": 5,
            "confused": 8,
            "heart": 5,
            "hooray": 6,
            "eyes": 4,
            "rocket": 6
        }
    },
    "pages": [
        {
            "page_name": "generated",
            "title": "generated",
            "summary": "generated",
            "action": "generated",
            "sha": "generated",
            "html_url": "generated"
        },
        {
            "page_name": "generated",
            "title": "generated",
            "summary": "generated",
            "action": "generated",
            "sha": "generated",
            "html_url": "generated"
        }
    ]
}';

    /**
     * issue: Issues are a great way to keep track of tasks, enhancements, and bugs for your projects.
     * comment: Comments provide a way for people to collaborate on an issue.
     */
    public function __construct(public string|null $action, public Schema\Issue|null $issue, public Schema\IssueComment|null $comment, public array|null $pages)
    {
    }
}
