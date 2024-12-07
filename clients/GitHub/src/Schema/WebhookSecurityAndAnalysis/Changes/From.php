<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAndAnalysis\Changes;

use ApiClients\Client\GitHub\Schema\SecurityAndAnalysis;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class From implements \ApiClients\Client\GitHub\Contract\WebhookSecurityAndAnalysis\Changes\From
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
                "dependabot_security_updates": {
                    "type": "object",
                    "properties": {
                        "status": {
                            "enum": [
                                "enabled",
                                "disabled"
                            ],
                            "type": "string",
                            "description": "The enablement status of Dependabot security updates for the repository."
                        }
                    },
                    "description": "Enable or disable Dependabot security updates for the repository."
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
                },
                "secret_scanning_non_provider_patterns": {
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
                "secret_scanning_ai_detection": {
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
            "status": "enabled"
        },
        "dependabot_security_updates": {
            "status": "enabled"
        },
        "secret_scanning": {
            "status": "enabled"
        },
        "secret_scanning_push_protection": {
            "status": "enabled"
        },
        "secret_scanning_non_provider_patterns": {
            "status": "enabled"
        },
        "secret_scanning_ai_detection": {
            "status": "enabled"
        }
    }
}';

    public function __construct(#[MapFrom('security_and_analysis')]
    public SecurityAndAnalysis|null $securityAndAnalysis,)
    {
    }
}
