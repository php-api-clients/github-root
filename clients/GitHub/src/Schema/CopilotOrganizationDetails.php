<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class CopilotOrganizationDetails
{
    public const SCHEMA_JSON         = '{
    "title": "Copilot Organization Details",
    "required": [
        "seat_breakdown",
        "public_code_suggestions",
        "seat_management_setting"
    ],
    "type": "object",
    "properties": {
        "seat_breakdown": {
            "title": "Copilot Seat Breakdown",
            "type": "object",
            "properties": {
                "total": {
                    "type": "integer",
                    "description": "The total number of seats being billed for the organization as of the current billing cycle."
                },
                "added_this_cycle": {
                    "type": "integer",
                    "description": "Seats added during the current billing cycle."
                },
                "pending_cancellation": {
                    "type": "integer",
                    "description": "The number of seats that are pending cancellation at the end of the current billing cycle."
                },
                "pending_invitation": {
                    "type": "integer",
                    "description": "The number of users who have been invited to receive a Copilot seat through this organization."
                },
                "active_this_cycle": {
                    "type": "integer",
                    "description": "The number of seats that have used Copilot during the current billing cycle."
                },
                "inactive_this_cycle": {
                    "type": "integer",
                    "description": "The number of seats that have not used Copilot during the current billing cycle."
                }
            },
            "description": "The breakdown of Copilot Business seats for the organization."
        },
        "public_code_suggestions": {
            "enum": [
                "allow",
                "block",
                "unconfigured"
            ],
            "type": "string",
            "description": "The organization policy for allowing or blocking suggestions matching public code (duplication detection filter)."
        },
        "ide_chat": {
            "enum": [
                "enabled",
                "disabled",
                "unconfigured"
            ],
            "type": "string",
            "description": "The organization policy for allowing or disallowing Copilot Chat in the IDE."
        },
        "platform_chat": {
            "enum": [
                "enabled",
                "disabled",
                "unconfigured"
            ],
            "type": "string",
            "description": "The organization policy for allowing or disallowing Copilot features on GitHub.com."
        },
        "cli": {
            "enum": [
                "enabled",
                "disabled",
                "unconfigured"
            ],
            "type": "string",
            "description": "The organization policy for allowing or disallowing Copilot in the CLI."
        },
        "seat_management_setting": {
            "enum": [
                "assign_all",
                "assign_selected",
                "disabled",
                "unconfigured"
            ],
            "type": "string",
            "description": "The mode of assigning new seats."
        },
        "plan_type": {
            "enum": [
                "business",
                "enterprise"
            ],
            "type": "string",
            "description": "The Copilot plan of the organization, or the parent enterprise, when applicable."
        }
    },
    "description": "Information about the seat breakdown and policies set for an organization with a Copilot Business or Copilot Enterprise subscription.",
    "additionalProperties": true
}';
    public const SCHEMA_TITLE        = 'Copilot Organization Details';
    public const SCHEMA_DESCRIPTION  = 'Information about the seat breakdown and policies set for an organization with a Copilot Business or Copilot Enterprise subscription.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "seat_breakdown": {
        "total": 5,
        "added_this_cycle": 16,
        "pending_cancellation": 20,
        "pending_invitation": 18,
        "active_this_cycle": 17,
        "inactive_this_cycle": 19
    },
    "public_code_suggestions": "allow",
    "ide_chat": "unconfigured",
    "platform_chat": "enabled",
    "cli": "enabled",
    "seat_management_setting": "assign_all",
    "plan_type": "business"
}';

    /**
     * seatBreakdown: The breakdown of Copilot Business seats for the organization.
     * publicCodeSuggestions: The organization policy for allowing or blocking suggestions matching public code (duplication detection filter).
     * ideChat: The organization policy for allowing or disallowing Copilot Chat in the IDE.
     * platformChat: The organization policy for allowing or disallowing Copilot features on GitHub.com.
     * cli: The organization policy for allowing or disallowing Copilot in the CLI.
     * seatManagementSetting: The mode of assigning new seats.
     * planType: The Copilot plan of the organization, or the parent enterprise, when applicable.
     */
    public function __construct(#[MapFrom('seat_breakdown')]
    public Schema\CopilotOrganizationSeatBreakdown $seatBreakdown, #[MapFrom('public_code_suggestions')]
    public string $publicCodeSuggestions, #[MapFrom('ide_chat')]
    public string|null $ideChat, #[MapFrom('platform_chat')]
    public string|null $platformChat, public string|null $cli, #[MapFrom('seat_management_setting')]
    public string $seatManagementSetting, #[MapFrom('plan_type')]
    public string|null $planType,)
    {
    }
}
