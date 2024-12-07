<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved;

use ApiClients\Client\GitHub\Schema\WebhookProjectCardMoved\ProjectCard\Creator;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProjectCard implements \ApiClients\Client\GitHub\Contract\WebhookProjectCardMoved\ProjectCard\ProjectCard, \ApiClients\Client\GitHub\Contract\WebhookProjectCardMoved\ProjectCard
{
    public const SCHEMA_JSON         = '{
    "allOf": [
        {
            "title": "Project Card",
            "required": [
                "url",
                "project_url",
                "column_url",
                "column_id",
                "id",
                "node_id",
                "note",
                "archived",
                "creator",
                "created_at",
                "updated_at"
            ],
            "type": "object",
            "properties": {
                "after_id": {
                    "type": [
                        "integer",
                        "null"
                    ]
                },
                "archived": {
                    "type": "boolean",
                    "description": "Whether or not the card is archived"
                },
                "column_id": {
                    "type": "integer"
                },
                "column_url": {
                    "type": "string",
                    "format": "uri"
                },
                "content_url": {
                    "type": "string",
                    "format": "uri"
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "creator": {
                    "title": "User",
                    "required": [
                        "login",
                        "id"
                    ],
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
                                "Organization",
                                "Mannequin"
                            ],
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        },
                        "user_view_type": {
                            "type": "string"
                        }
                    }
                },
                "id": {
                    "type": "integer",
                    "description": "The project card\'s ID"
                },
                "node_id": {
                    "type": "string"
                },
                "note": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "project_url": {
                    "type": "string",
                    "format": "uri"
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        {
            "required": [
                "after_id"
            ],
            "type": "object",
            "properties": {
                "after_id": {
                    "type": [
                        "number",
                        "null"
                    ]
                },
                "archived": {
                    "type": "boolean"
                },
                "column_id": {
                    "type": "integer"
                },
                "column_url": {
                    "type": "string"
                },
                "created_at": {
                    "type": "string"
                },
                "creator": {
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "avatar_url": {
                            "type": "string"
                        },
                        "events_url": {
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
                        "gravatar_id": {
                            "type": "string"
                        },
                        "html_url": {
                            "type": "string"
                        },
                        "id": {
                            "type": "integer"
                        },
                        "login": {
                            "type": "string"
                        },
                        "node_id": {
                            "type": "string"
                        },
                        "organizations_url": {
                            "type": "string"
                        },
                        "received_events_url": {
                            "type": "string"
                        },
                        "repos_url": {
                            "type": "string"
                        },
                        "site_admin": {
                            "type": "boolean"
                        },
                        "starred_url": {
                            "type": "string"
                        },
                        "subscriptions_url": {
                            "type": "string"
                        },
                        "type": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string"
                        }
                    }
                },
                "id": {
                    "type": "integer"
                },
                "node_id": {
                    "type": "string"
                },
                "note": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "project_url": {
                    "type": "string"
                },
                "updated_at": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                }
            }
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "after_id": 8,
    "archived": false,
    "column_id": 9,
    "column_url": "generated",
    "content_url": "https:\\/\\/example.com\\/",
    "created_at": "generated",
    "creator": {
        "avatar_url": "generated",
        "events_url": "generated",
        "followers_url": "generated",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "generated",
        "id": 2,
        "login": "generated",
        "node_id": "generated",
        "organizations_url": "generated",
        "received_events_url": "generated",
        "repos_url": "generated",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "generated",
        "type": "generated",
        "url": "generated"
    },
    "id": 2,
    "node_id": "generated",
    "note": "generated",
    "project_url": "generated",
    "updated_at": "generated",
    "url": "generated"
}';

    public function __construct(#[MapFrom('after_id')]
    public int|float|null $afterId, public bool|null $archived, #[MapFrom('column_id')]
    public int|null $columnId, #[MapFrom('column_url')]
    public string|null $columnUrl, #[MapFrom('content_url')]
    public string|null $contentUrl, #[MapFrom('created_at')]
    public string|null $createdAt, public Creator|null $creator, public int|null $id, #[MapFrom('node_id')]
    public string|null $nodeId, public string|null $note, #[MapFrom('project_url')]
    public string|null $projectUrl, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string|null $url,)
    {
    }
}
