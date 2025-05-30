<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookStatus;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Commit
{
    public const SCHEMA_JSON         = '{
    "required": [
        "sha",
        "node_id",
        "commit",
        "url",
        "html_url",
        "comments_url",
        "author",
        "committer",
        "parents"
    ],
    "type": "object",
    "properties": {
        "author": {
            "title": "User",
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                },
                "deleted": {
                    "type": "boolean"
                },
                "email": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "followers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "following_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gists_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "login": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string",
                    "format": "uri"
                },
                "received_events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "repos_url": {
                    "type": "string",
                    "format": "uri"
                },
                "site_admin": {
                    "type": "boolean"
                },
                "starred_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "subscriptions_url": {
                    "type": "string",
                    "format": "uri"
                },
                "type": {
                    "enum": [
                        "Bot",
                        "User",
                        "Organization"
                    ],
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "comments_url": {
            "type": "string",
            "format": "uri"
        },
        "commit": {
            "required": [
                "author",
                "committer",
                "message",
                "tree",
                "url",
                "comment_count",
                "verification"
            ],
            "type": "object",
            "properties": {
                "author": {
                    "allOf": [
                        {
                            "title": "Committer",
                            "required": [
                                "email",
                                "name"
                            ],
                            "type": "object",
                            "properties": {
                                "date": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "email"
                                },
                                "name": {
                                    "type": "string",
                                    "description": "The git author\'s name."
                                },
                                "username": {
                                    "type": "string"
                                }
                            },
                            "description": "Metaproperties for Git author\\/committer information."
                        },
                        {
                            "required": [
                                "date"
                            ],
                            "type": "object",
                            "properties": {
                                "date": {
                                    "type": "string"
                                },
                                "email": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                }
                            }
                        }
                    ]
                },
                "comment_count": {
                    "type": "integer"
                },
                "committer": {
                    "allOf": [
                        {
                            "title": "Committer",
                            "required": [
                                "email",
                                "name"
                            ],
                            "type": "object",
                            "properties": {
                                "date": {
                                    "type": "string",
                                    "format": "date-time"
                                },
                                "email": {
                                    "type": [
                                        "string",
                                        "null"
                                    ],
                                    "format": "email"
                                },
                                "name": {
                                    "type": "string",
                                    "description": "The git author\'s name."
                                },
                                "username": {
                                    "type": "string"
                                }
                            },
                            "description": "Metaproperties for Git author\\/committer information."
                        },
                        {
                            "required": [
                                "date"
                            ],
                            "type": "object",
                            "properties": {
                                "date": {
                                    "type": "string"
                                },
                                "email": {
                                    "type": "string"
                                },
                                "name": {
                                    "type": "string"
                                }
                            }
                        }
                    ]
                },
                "message": {
                    "type": "string"
                },
                "tree": {
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
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "verification": {
                    "required": [
                        "verified",
                        "reason",
                        "signature",
                        "payload",
                        "verified_at"
                    ],
                    "type": "object",
                    "properties": {
                        "payload": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "reason": {
                            "enum": [
                                "expired_key",
                                "not_signing_key",
                                "gpgverify_error",
                                "gpgverify_unavailable",
                                "unsigned",
                                "unknown_signature_type",
                                "no_user",
                                "unverified_email",
                                "bad_email",
                                "unknown_key",
                                "malformed_signature",
                                "invalid",
                                "valid",
                                "bad_cert",
                                "ocsp_pending"
                            ],
                            "type": "string"
                        },
                        "signature": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "verified": {
                            "type": "boolean"
                        },
                        "verified_at": {
                            "type": [
                                "string",
                                "null"
                            ]
                        }
                    }
                }
            }
        },
        "committer": {
            "title": "User",
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                },
                "deleted": {
                    "type": "boolean"
                },
                "email": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "followers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "following_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gists_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "login": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string",
                    "format": "uri"
                },
                "received_events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "repos_url": {
                    "type": "string",
                    "format": "uri"
                },
                "site_admin": {
                    "type": "boolean"
                },
                "starred_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "subscriptions_url": {
                    "type": "string",
                    "format": "uri"
                },
                "type": {
                    "enum": [
                        "Bot",
                        "User",
                        "Organization"
                    ],
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "node_id": {
            "type": "string"
        },
        "parents": {
            "type": "array",
            "items": {
                "required": [
                    "sha",
                    "url",
                    "html_url"
                ],
                "type": "object",
                "properties": {
                    "html_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "sha": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    }
                }
            }
        },
        "sha": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "author": {
        "avatar_url": "https:\\/\\/example.com\\/",
        "deleted": false,
        "email": "generated",
        "events_url": "generated",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "login": "generated",
        "name": "generated",
        "node_id": "generated",
        "organizations_url": "https:\\/\\/example.com\\/",
        "received_events_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "type": "Organization",
        "url": "https:\\/\\/example.com\\/"
    },
    "comments_url": "https:\\/\\/example.com\\/",
    "commit": {
        "author": {
            "date": "1970-01-01T00:00:00+00:00",
            "email": "hi@example.com",
            "name": "generated",
            "username": "generated"
        },
        "comment_count": 13,
        "committer": {
            "date": "1970-01-01T00:00:00+00:00",
            "email": "hi@example.com",
            "name": "generated",
            "username": "generated"
        },
        "message": "generated",
        "tree": {
            "sha": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "url": "https:\\/\\/example.com\\/",
        "verification": {
            "payload": "generated",
            "reason": "ocsp_pending",
            "signature": "generated",
            "verified": false,
            "verified_at": "generated"
        }
    },
    "committer": {
        "avatar_url": "https:\\/\\/example.com\\/",
        "deleted": false,
        "email": "generated",
        "events_url": "generated",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "login": "generated",
        "name": "generated",
        "node_id": "generated",
        "organizations_url": "https:\\/\\/example.com\\/",
        "received_events_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "type": "Organization",
        "url": "https:\\/\\/example.com\\/"
    },
    "html_url": "https:\\/\\/example.com\\/",
    "node_id": "generated",
    "parents": [
        {
            "html_url": "https:\\/\\/example.com\\/",
            "sha": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "html_url": "https:\\/\\/example.com\\/",
            "sha": "generated",
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "sha": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public Schema\WebhookStatus\Commit\Author|null $author, #[MapFrom('comments_url')]
    public string $commentsUrl, public Schema\WebhookStatus\Commit\Commit $commit, public Schema\WebhookStatus\Commit\Committer|null $committer, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('node_id')]
    public string $nodeId, public array $parents, public string $sha, public string $url,)
    {
    }
}
