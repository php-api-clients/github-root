<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\WebhookSecurityAndAnalysis\Changes;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class From
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
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
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "security_and_analysis": {
        "advanced_security": {
            "status": "disabled"
        },
        "secret_scanning": {
            "status": "disabled"
        },
        "secret_scanning_push_protection": {
            "status": "disabled"
        }
    }
}';

    public function __construct(#[MapFrom('security_and_analysis')]
    public Schema\SecurityAndAnalysis|null $securityAndAnalysis,)
    {
    }
}
