<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

final readonly class GhesLicenseInfo
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "advancedSecurityEnabled": {
            "type": "boolean",
            "description": "Whether the GitHub Advanced Security feature is enabled."
        },
        "advancedSecuritySeats": {
            "type": "integer",
            "description": "If the GitHub Advanced Security feature is enabled, the seat count."
        },
        "clusterSupport": {
            "type": "boolean",
            "description": "Whether the cluster support feature is enabled."
        },
        "company": {
            "type": "string",
            "description": "The company under which the license is issued."
        },
        "croquetSupport": {
            "type": "boolean",
            "description": "Whether the Github Connect feature is enabled."
        },
        "customTerms": {
            "type": "boolean",
            "description": "Whether this license is issued under custom terms."
        },
        "evaluation": {
            "type": "boolean",
            "description": "Wheter this license is issued as an evaluation license."
        },
        "expireAt": {
            "type": "string",
            "description": "The expiration date of the license.",
            "format": "date-time",
            "examples": [
                "2025-01-02T07:59:59Z"
            ]
        },
        "insightsEnabled": {
            "type": "boolean",
            "description": "Whether the insights feature is enabled."
        },
        "insightsExpireAt": {
            "type": "string",
            "description": "If the insights feature is enabled, the expiration date.",
            "format": "date-time",
            "examples": [
                "2025-01-02T07:59:59Z"
            ]
        },
        "learningLabEvaluationExpires": {
            "type": "string",
            "description": "If the learning lab feature is enabled, the expiration date.",
            "format": "date-time",
            "examples": [
                "2025-01-02T07:59:59Z"
            ]
        },
        "learningLabSeats": {
            "type": "integer",
            "description": "If the learning lab feature is enabled, the seat count."
        },
        "perpetual": {
            "type": "boolean",
            "description": "Whether the perpetual feature is enabled."
        },
        "referenceNumber": {
            "type": "string",
            "description": "The unique reference number of the license."
        },
        "seats": {
            "type": "integer",
            "description": "If the license is issued with limited seating, the seat count."
        },
        "sshAllowed": {
            "type": "boolean",
            "description": "Whether the SSH feature is enabled."
        },
        "supportKey": {
            "type": "string",
            "description": "The support key of the license."
        },
        "unlimitedSeating": {
            "type": "boolean",
            "description": "Whether the license is issued with unlimited seat count."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "advancedSecurityEnabled": false,
    "advancedSecuritySeats": 21,
    "clusterSupport": false,
    "company": "generated",
    "croquetSupport": false,
    "customTerms": false,
    "evaluation": false,
    "expireAt": "2025-01-02T07:59:59Z",
    "insightsEnabled": false,
    "insightsExpireAt": "2025-01-02T07:59:59Z",
    "learningLabEvaluationExpires": "2025-01-02T07:59:59Z",
    "learningLabSeats": 16,
    "perpetual": false,
    "referenceNumber": "generated",
    "seats": 5,
    "sshAllowed": false,
    "supportKey": "generated",
    "unlimitedSeating": false
}';

    /**
     * advancedSecurityEnabled: Whether the GitHub Advanced Security feature is enabled.
     * advancedSecuritySeats: If the GitHub Advanced Security feature is enabled, the seat count.
     * clusterSupport: Whether the cluster support feature is enabled.
     * company: The company under which the license is issued.
     * croquetSupport: Whether the Github Connect feature is enabled.
     * customTerms: Whether this license is issued under custom terms.
     * evaluation: Wheter this license is issued as an evaluation license.
     * expireAt: The expiration date of the license.
     * insightsEnabled: Whether the insights feature is enabled.
     * insightsExpireAt: If the insights feature is enabled, the expiration date.
     * learningLabEvaluationExpires: If the learning lab feature is enabled, the expiration date.
     * learningLabSeats: If the learning lab feature is enabled, the seat count.
     * perpetual: Whether the perpetual feature is enabled.
     * referenceNumber: The unique reference number of the license.
     * seats: If the license is issued with limited seating, the seat count.
     * sshAllowed: Whether the SSH feature is enabled.
     * supportKey: The support key of the license.
     * unlimitedSeating: Whether the license is issued with unlimited seat count.
     */
    public function __construct(public bool|null $advancedSecurityEnabled, public int|null $advancedSecuritySeats, public bool|null $clusterSupport, public string|null $company, public bool|null $croquetSupport, public bool|null $customTerms, public bool|null $evaluation, public string|null $expireAt, public bool|null $insightsEnabled, public string|null $insightsExpireAt, public string|null $learningLabEvaluationExpires, public int|null $learningLabSeats, public bool|null $perpetual, public string|null $referenceNumber, public int|null $seats, public bool|null $sshAllowed, public string|null $supportKey, public bool|null $unlimitedSeating)
    {
    }
}
