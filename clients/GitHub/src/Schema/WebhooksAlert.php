<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhooksAlert
{
    public const SCHEMA_JSON         = '{
    "title": "Repository Vulnerability Alert Alert",
    "required": [
        "affected_package_name",
        "affected_range",
        "created_at",
        "external_identifier",
        "external_reference",
        "ghsa_id",
        "id",
        "node_id",
        "number",
        "severity",
        "state"
    ],
    "type": "object",
    "properties": {
        "affected_package_name": {
            "type": "string"
        },
        "affected_range": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "dismiss_reason": {
            "type": "string"
        },
        "dismissed_at": {
            "type": "string"
        },
        "dismisser": {
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
        "external_identifier": {
            "type": "string"
        },
        "external_reference": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "fix_reason": {
            "type": "string"
        },
        "fixed_at": {
            "type": "string",
            "format": "date-time"
        },
        "fixed_in": {
            "type": "string"
        },
        "ghsa_id": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "node_id": {
            "type": "string"
        },
        "number": {
            "type": "integer"
        },
        "severity": {
            "type": "string"
        },
        "state": {
            "enum": [
                "open"
            ],
            "type": "string"
        }
    },
    "description": "The security alert of the vulnerable dependency."
}';
    public const SCHEMA_TITLE        = 'Repository Vulnerability Alert Alert';
    public const SCHEMA_DESCRIPTION  = 'The security alert of the vulnerable dependency.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "affected_package_name": "generated",
    "affected_range": "generated",
    "created_at": "generated",
    "dismiss_reason": "generated",
    "dismissed_at": "generated",
    "dismisser": {
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
    "external_identifier": "generated",
    "external_reference": "https:\\/\\/example.com\\/",
    "fix_reason": "generated",
    "fixed_at": "1970-01-01T00:00:00+00:00",
    "fixed_in": "generated",
    "ghsa_id": "generated",
    "id": 2,
    "node_id": "generated",
    "number": 6,
    "severity": "generated",
    "state": "open"
}';

    public function __construct(#[MapFrom('affected_package_name')]
    public string $affectedPackageName, #[MapFrom('affected_range')]
    public string $affectedRange, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('dismiss_reason')]
    public string|null $dismissReason, #[MapFrom('dismissed_at')]
    public string|null $dismissedAt, public Schema\WebhooksAlert\Dismisser|null $dismisser, #[MapFrom('external_identifier')]
    public string $externalIdentifier, #[MapFrom('external_reference')]
    public string|null $externalReference, #[MapFrom('fix_reason')]
    public string|null $fixReason, #[MapFrom('fixed_at')]
    public string|null $fixedAt, #[MapFrom('fixed_in')]
    public string|null $fixedIn, #[MapFrom('ghsa_id')]
    public string $ghsaId, public int $id, #[MapFrom('node_id')]
    public string $nodeId, public int $number, public string $severity, public string $state,)
    {
    }
}
