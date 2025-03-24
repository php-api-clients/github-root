<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PushRuleBypassRequest
{
    public const SCHEMA_JSON         = '{
    "title": "Push rule bypass request",
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The unique identifier of the bypass request."
        },
        "number": {
            "type": "integer",
            "description": "The number uniquely identifying the bypass request within its repository."
        },
        "repository": {
            "type": "object",
            "properties": {
                "id": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "The ID of the repository the bypass request is for."
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the repository the bypass request is for."
                },
                "full_name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The full name of the repository the bypass request is for."
                }
            },
            "description": "The repository the bypass request is for."
        },
        "organization": {
            "type": "object",
            "properties": {
                "id": {
                    "type": [
                        "integer",
                        "null"
                    ],
                    "description": "The ID of the organization."
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The name of the organization."
                }
            },
            "description": "The organization associated with the repository the bypass request is for."
        },
        "requester": {
            "type": "object",
            "properties": {
                "actor_id": {
                    "type": "integer",
                    "description": "The ID of the GitHub user who requested the bypass."
                },
                "actor_name": {
                    "type": "string",
                    "description": "The name of the GitHub user who requested the bypass."
                }
            },
            "description": "The user who requested the bypass."
        },
        "request_type": {
            "type": "string",
            "description": "The type of request."
        },
        "data": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "object",
                "properties": {
                    "ruleset_id": {
                        "type": "integer",
                        "description": "The ID of the ruleset for the rules that were violated."
                    },
                    "ruleset_name": {
                        "type": "string",
                        "description": "The name of the ruleset for the rules that were violated."
                    },
                    "total_violations": {
                        "type": "integer",
                        "description": "The number of rule violations generated from the push associated with this request."
                    },
                    "rule_type": {
                        "type": "string",
                        "description": "The type of rule that was violated."
                    }
                }
            },
            "description": "Data describing the push rules that are being requested to be bypassed."
        },
        "resource_identifier": {
            "type": "string",
            "description": "The unique identifier for the request type of the bypass request. For example, a commit SHA.",
            "examples": [
                "827efc6d56897b048c772eb4087f854f46256132"
            ]
        },
        "status": {
            "enum": [
                "pending",
                "denied",
                "approved",
                "cancelled",
                "completed",
                "expired",
                "deleted",
                "open"
            ],
            "type": "string",
            "description": "The status of the bypass request."
        },
        "requester_comment": {
            "type": [
                "string",
                "null"
            ],
            "description": "The comment the requester provided when creating the bypass request."
        },
        "expires_at": {
            "type": "string",
            "description": "The date and time the bypass request will expire.",
            "format": "date-time"
        },
        "created_at": {
            "type": "string",
            "description": "The date and time the bypass request was created.",
            "format": "date-time"
        },
        "responses": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "title": "Bypass response",
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "The ID of the response to the bypass request."
                    },
                    "reviewer": {
                        "type": "object",
                        "properties": {
                            "actor_id": {
                                "type": "integer",
                                "description": "The ID of the GitHub user who reviewed the bypass request."
                            },
                            "actor_name": {
                                "type": "string",
                                "description": "The name of the GitHub user who reviewed the bypass request."
                            }
                        },
                        "description": "The user who reviewed the bypass request."
                    },
                    "status": {
                        "enum": [
                            "approved",
                            "denied",
                            "dismissed"
                        ],
                        "type": "string",
                        "description": "The response status to the bypass request until dismissed."
                    },
                    "created_at": {
                        "type": "string",
                        "description": "The date and time the response to the bypass request was created.",
                        "format": "date-time"
                    }
                },
                "description": "A response made by a delegated bypasser to a bypass request."
            },
            "description": "The responses to the bypass request."
        },
        "url": {
            "type": "string",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octo-org\\/smile\\/bypass-requests\\/push-rules\\/1"
            ]
        },
        "html_url": {
            "type": "string",
            "description": "The URL to view the bypass request in a browser.",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/octo-org\\/smile\\/exemptions\\/1"
            ]
        }
    },
    "description": "A bypass request made by a user asking to be exempted from a push rule in this repository."
}';
    public const SCHEMA_TITLE        = 'Push rule bypass request';
    public const SCHEMA_DESCRIPTION  = 'A bypass request made by a user asking to be exempted from a push rule in this repository.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "number": 6,
    "repository": {
        "id": 2,
        "name": "generated",
        "full_name": "generated"
    },
    "organization": {
        "id": 2,
        "name": "generated"
    },
    "requester": {
        "actor_id": 8,
        "actor_name": "generated"
    },
    "request_type": "generated",
    "data": null,
    "resource_identifier": "827efc6d56897b048c772eb4087f854f46256132",
    "status": "open",
    "requester_comment": "generated",
    "expires_at": "1970-01-01T00:00:00+00:00",
    "created_at": "1970-01-01T00:00:00+00:00",
    "responses": null,
    "url": "https:\\/\\/api.github.com\\/repos\\/octo-org\\/smile\\/bypass-requests\\/push-rules\\/1",
    "html_url": "https:\\/\\/github.com\\/octo-org\\/smile\\/exemptions\\/1"
}';

    /**
     * id: The unique identifier of the bypass request.
     * number: The number uniquely identifying the bypass request within its repository.
     * repository: The repository the bypass request is for.
     * organization: The organization associated with the repository the bypass request is for.
     * requester: The user who requested the bypass.
     * requestType: The type of request.
     * data: Data describing the push rules that are being requested to be bypassed.
     * resourceIdentifier: The unique identifier for the request type of the bypass request. For example, a commit SHA.
     * status: The status of the bypass request.
     * requesterComment: The comment the requester provided when creating the bypass request.
     * expiresAt: The date and time the bypass request will expire.
     * createdAt: The date and time the bypass request was created.
     * responses: The responses to the bypass request.
     * htmlUrl: The URL to view the bypass request in a browser.
     */
    public function __construct(public int|null $id, public int|null $number, public Schema\PushRuleBypassRequest\Repository|null $repository, public Schema\PushRuleBypassRequest\Organization|null $organization, public Schema\PushRuleBypassRequest\Requester|null $requester, #[MapFrom('request_type')]
    public string|null $requestType, public array|null $data, #[MapFrom('resource_identifier')]
    public string|null $resourceIdentifier, public string|null $status, #[MapFrom('requester_comment')]
    public string|null $requesterComment, #[MapFrom('expires_at')]
    public string|null $expiresAt, #[MapFrom('created_at')]
    public string|null $createdAt, public array|null $responses, public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl,)
    {
    }
}
