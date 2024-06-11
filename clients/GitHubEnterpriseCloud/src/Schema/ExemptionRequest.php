<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Attribute\CastUnionToType\Schema\ExemptionRequest\ExemptionRequestData;
use ApiClients\Client\GitHubEnterpriseCloud\Internal\Attribute\CastUnionToType\Schema\ExemptionRequest\Metadata;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ExemptionRequest
{
    public const SCHEMA_JSON         = '{
    "title": "Exemption Request",
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The ID of the exemption request."
        },
        "number": {
            "type": "integer",
            "description": "The number uniquely identifying the exemption request within it\'s repository."
        },
        "repository_id": {
            "type": "integer",
            "description": "The ID of the repository the exemption request is for."
        },
        "requester_id": {
            "type": "integer",
            "description": "The ID of the user who requested the exemption."
        },
        "requester_login": {
            "type": "string",
            "description": "The login of the user who requested the exemption."
        },
        "request_type": {
            "enum": [
                "push_ruleset_bypass",
                "secret_scanning"
            ],
            "type": "string",
            "description": "The type of request."
        },
        "exemption_request_data": {
            "oneOf": [
                {
                    "title": "Push ruleset bypass exemption request data",
                    "type": "object",
                    "properties": {
                        "type": {
                            "enum": [
                                "push_ruleset_bypass"
                            ],
                            "type": "string",
                            "description": "The type of request"
                        },
                        "data": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "ruleset_id": {
                                        "type": "integer",
                                        "description": "The ID of the ruleset for the rules that were violated"
                                    },
                                    "ruleset_name": {
                                        "type": "string",
                                        "description": "The name of the ruleset for the rules that were violated"
                                    },
                                    "total_violations": {
                                        "type": "integer",
                                        "description": "The number of violations"
                                    },
                                    "rule_type": {
                                        "type": "string",
                                        "description": "The type of rule that was violated"
                                    }
                                }
                            },
                            "description": "The data pertaining to the push rules that are being requested to be bypassed."
                        }
                    },
                    "description": "Push rules that are being requested to be bypassed."
                },
                {
                    "title": "Secret scanning push protection exemption request data",
                    "type": "object",
                    "properties": {
                        "type": {
                            "enum": [
                                "secret_scanning"
                            ],
                            "type": "string",
                            "description": "The type of request"
                        },
                        "data": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "secret_type": {
                                        "type": "string",
                                        "description": "The type of secret that was detected"
                                    },
                                    "commits": {
                                        "type": "array",
                                        "items": {
                                            "type": "string"
                                        },
                                        "description": "The commits that introduced the secret"
                                    }
                                }
                            },
                            "description": "The data pertaining to the secret scanning push protections that are being requested to be bypassed."
                        }
                    },
                    "description": "Secret scanning push protections that are being requested to be bypassed."
                }
            ]
        },
        "resource_identifier": {
            "type": "string",
            "description": "The unique identifier for the request type of the exemption request. For example, a commit SHA.",
            "examples": [
                "827efc6d56897b048c772eb4087f854f46256132"
            ]
        },
        "status": {
            "enum": [
                "pending",
                "rejected",
                "cancelled",
                "completed"
            ],
            "type": "string",
            "description": "The status of the exemption request."
        },
        "requester_comment": {
            "type": [
                "string",
                "null"
            ],
            "description": "The comment the requester provided when creating the exemption request."
        },
        "metadata": {
            "type": [
                "object",
                "null"
            ],
            "oneOf": [
                {
                    "title": "Secret Scanning Push Protection Exemption Request Metadata",
                    "type": "object",
                    "properties": {
                        "label": {
                            "type": "string",
                            "description": "The label for the secret type"
                        },
                        "reason": {
                            "enum": [
                                "fixed_later",
                                "false_positive",
                                "tests"
                            ],
                            "type": "string",
                            "description": "The reason for the exemption request"
                        }
                    },
                    "description": "Metadata for a secret scanning push protection exemption request."
                }
            ],
            "description": "Metadata about the exemption request."
        },
        "expires_at": {
            "type": "string",
            "description": "The date and time the exemption request will expire.",
            "format": "date-time"
        },
        "created_at": {
            "type": "string",
            "description": "The date and time the exemption request was created.",
            "format": "date-time"
        },
        "responses": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "title": "Exemption response",
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer",
                        "description": "The ID of the exemption response."
                    },
                    "reviewer_id": {
                        "type": "integer",
                        "description": "The ID of the user who reviewed the exemption request."
                    },
                    "reviewer_login": {
                        "type": "string",
                        "description": "The login of the user who reviewed the exemption request."
                    },
                    "status": {
                        "enum": [
                            "approved",
                            "rejected",
                            "dismissed"
                        ],
                        "type": "string",
                        "description": "The status of the exemption response."
                    },
                    "created_at": {
                        "type": "string",
                        "description": "The date and time the exemption request was created.",
                        "format": "date-time"
                    }
                },
                "description": "A response to an exemption request by a delegated bypasser."
            },
            "description": "The responses to the exemption request."
        },
        "html_url": {
            "type": "string",
            "description": "The URL to view the exemption request in a browser.",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/monalisa\\/smile\\/exemptions\\/1"
            ]
        }
    },
    "description": "A request from a user to be exempted from a set of rules."
}';
    public const SCHEMA_TITLE        = 'Exemption Request';
    public const SCHEMA_DESCRIPTION  = 'A request from a user to be exempted from a set of rules.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "number": 6,
    "repository_id": 13,
    "requester_id": 12,
    "requester_login": "generated",
    "request_type": "secret_scanning",
    "exemption_request_data": null,
    "resource_identifier": "827efc6d56897b048c772eb4087f854f46256132",
    "status": "completed",
    "requester_comment": "generated",
    "metadata": null,
    "expires_at": "1970-01-01T00:00:00+00:00",
    "created_at": "1970-01-01T00:00:00+00:00",
    "responses": null,
    "html_url": "https:\\/\\/github.com\\/monalisa\\/smile\\/exemptions\\/1"
}';

    /**
     * id: The ID of the exemption request.
     * number: The number uniquely identifying the exemption request within it's repository.
     * repositoryId: The ID of the repository the exemption request is for.
     * requesterId: The ID of the user who requested the exemption.
     * requesterLogin: The login of the user who requested the exemption.
     * requestType: The type of request.
     * resourceIdentifier: The unique identifier for the request type of the exemption request. For example, a commit SHA.
     * status: The status of the exemption request.
     * requesterComment: The comment the requester provided when creating the exemption request.
     * metadata: Metadata about the exemption request.
     * expiresAt: The date and time the exemption request will expire.
     * createdAt: The date and time the exemption request was created.
     * responses: The responses to the exemption request.
     * htmlUrl: The URL to view the exemption request in a browser.
     */
    public function __construct(public int|null $id, public int|null $number, #[MapFrom('repository_id')]
    public int|null $repositoryId, #[MapFrom('requester_id')]
    public int|null $requesterId, #[MapFrom('requester_login')]
    public string|null $requesterLogin, #[MapFrom('request_type')]
    public string|null $requestType, #[MapFrom('exemption_request_data')]
    #[ExemptionRequestData]
    public Schema\ExemptionRequestPushRulesetBypass|Schema\ExemptionRequestSecretScanning|null $exemptionRequestData, #[MapFrom('resource_identifier')]
    public string|null $resourceIdentifier, public string|null $status, #[MapFrom('requester_comment')]
    public string|null $requesterComment, #[Metadata]
    public Schema\ExemptionRequestSecretScanningMetadata|null $metadata, #[MapFrom('expires_at')]
    public string|null $expiresAt, #[MapFrom('created_at')]
    public string|null $createdAt, public array|null $responses, #[MapFrom('html_url')]
    public string|null $htmlUrl,)
    {
    }
}
