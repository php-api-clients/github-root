<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Internal\Attribute\CastUnionToType\Schema\ExemptionRequest\ExemptionRequestData;
use ApiClients\Client\GitHubEnterprise\Internal\Attribute\CastUnionToType\Schema\ExemptionRequest\Metadata;
use ApiClients\Client\GitHubEnterprise\Schema;
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
            "type": [
                "integer",
                "null"
            ],
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
                "secret_scanning",
                "secret_scanning_closure",
                "code_scanning_alert_dismissal"
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
                                    "locations": {
                                        "type": "array",
                                        "items": {
                                            "type": "object",
                                            "properties": {
                                                "commit": {
                                                    "type": "string",
                                                    "description": "The commit SHA where the secret was detected"
                                                },
                                                "branch": {
                                                    "type": "string",
                                                    "description": "The branch where the secret was detected"
                                                },
                                                "path": {
                                                    "type": "string",
                                                    "description": "The path of the file where the secret was detected"
                                                }
                                            }
                                        },
                                        "description": "The location data of the secret that was detected"
                                    }
                                }
                            },
                            "description": "The data pertaining to the secret scanning push protections that are being requested to be bypassed."
                        }
                    },
                    "description": "Secret scanning push protections that are being requested to be bypassed."
                },
                {
                    "title": "Secret scanning alert dismissal request data",
                    "type": "object",
                    "properties": {
                        "type": {
                            "enum": [
                                "secret_scanning_closure"
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
                                    "alert_number": {
                                        "type": "string",
                                        "description": "The number of the alert that was detected"
                                    }
                                }
                            },
                            "description": "The data related to the secret scanning alerts that have dismissal requests."
                        }
                    },
                    "description": "Secret scanning alerts that have dismissal requests."
                },
                {
                    "title": "Code scanning alert dismissal request data",
                    "type": "object",
                    "properties": {
                        "type": {
                            "enum": [
                                "code_scanning_alert_dismissal"
                            ],
                            "type": "string",
                            "description": "The type of request"
                        },
                        "data": {
                            "type": "array",
                            "items": {
                                "type": "object",
                                "properties": {
                                    "alert_number": {
                                        "type": "string",
                                        "description": "The number of the alert to be dismissed"
                                    }
                                }
                            },
                            "description": "The data related to the code scanning alerts that have dismissal requests."
                        }
                    },
                    "description": "Code scanning alerts that have dismissal requests."
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
            "anyOf": [
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
                },
                {
                    "title": "Secret scanning alert dismissal request metadata",
                    "type": "object",
                    "properties": {
                        "alert_title": {
                            "type": "string",
                            "description": "The title of the secret alert"
                        },
                        "reason": {
                            "enum": [
                                "fixed_later",
                                "false_positive",
                                "tests",
                                "revoked"
                            ],
                            "type": "string",
                            "description": "The reason for the dismissal request"
                        }
                    },
                    "description": "Metadata for a secret scanning alert dismissal request."
                },
                {
                    "title": "Code scanning alert dismissal request metadata",
                    "type": "object",
                    "properties": {
                        "alert_title": {
                            "type": "string",
                            "description": "The title of the code scanning alert"
                        },
                        "reason": {
                            "enum": [
                                "false positive",
                                "won\'t fix",
                                "used in tests"
                            ],
                            "type": "string",
                            "description": "The reason for the dismissal request"
                        }
                    },
                    "description": "Metadata for a code scanning alert dismissal request."
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
                    "reviewer_comment": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The comment the reviewer provided when responding to the exemption request."
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
    "request_type": "code_scanning_alert_dismissal",
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
    public Schema\ExemptionRequestPushRulesetBypass|Schema\ExemptionRequestSecretScanning|Schema\DismissalRequestSecretScanning|Schema\DismissalRequestCodeScanning|null $exemptionRequestData, #[MapFrom('resource_identifier')]
    public string|null $resourceIdentifier, public string|null $status, #[MapFrom('requester_comment')]
    public string|null $requesterComment, #[Metadata]
    public Schema\ExemptionRequestSecretScanningMetadata|Schema\DismissalRequestSecretScanningMetadata|Schema\DismissalRequestCodeScanningMetadata|null $metadata, #[MapFrom('expires_at')]
    public string|null $expiresAt, #[MapFrom('created_at')]
    public string|null $createdAt, public array|null $responses, #[MapFrom('html_url')]
    public string|null $htmlUrl,)
    {
    }
}
