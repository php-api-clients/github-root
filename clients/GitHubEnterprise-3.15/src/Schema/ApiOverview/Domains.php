<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\ApiOverview;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Domains
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "website": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "codespaces": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "copilot": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "packages": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "actions": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "example.com"
                ]
            }
        },
        "actions_inbound": {
            "type": "object",
            "properties": {
                "full_domains": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                },
                "wildcard_domains": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                }
            }
        },
        "artifact_attestations": {
            "type": "object",
            "properties": {
                "trust_domain": {
                    "type": "string",
                    "examples": [
                        "example"
                    ]
                },
                "services": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "example.com"
                        ]
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "website": [
        "generated",
        "generated"
    ],
    "codespaces": [
        "generated",
        "generated"
    ],
    "copilot": [
        "generated",
        "generated"
    ],
    "packages": [
        "generated",
        "generated"
    ],
    "actions": [
        "generated",
        "generated"
    ],
    "actions_inbound": {
        "full_domains": [
            "generated",
            "generated"
        ],
        "wildcard_domains": [
            "generated",
            "generated"
        ]
    },
    "artifact_attestations": {
        "trust_domain": "example",
        "services": [
            "generated",
            "generated"
        ]
    }
}';

    public function __construct(public array|null $website, public array|null $codespaces, public array|null $copilot, public array|null $packages, public array|null $actions, #[MapFrom('actions_inbound')]
    public Schema\ApiOverview\Domains\ActionsInbound|null $actionsInbound, #[MapFrom('artifact_attestations')]
    public Schema\ApiOverview\Domains\ArtifactAttestations|null $artifactAttestations,)
    {
    }
}
