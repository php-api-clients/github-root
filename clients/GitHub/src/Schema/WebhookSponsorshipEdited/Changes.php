<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookSponsorshipEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookSponsorshipEdited\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "privacy_level": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The `edited` event types include the details about the change when someone edits a sponsorship to change the privacy."
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "privacy_level": {
        "from": "generated"
    }
}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('privacy_level')] public ?\ApiClients\Client\GitHub\Schema\WebhookSponsorshipEdited\Changes\PrivacyLevel $privacyLevel)
    {
    }
}
