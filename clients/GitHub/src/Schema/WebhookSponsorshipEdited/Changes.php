<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookSponsorshipEdited;

use ApiClients\Client\GitHub\Schema\WebhookSponsorshipEdited\Changes\PrivacyLevel;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookSponsorshipEdited\Changes
{
    public const SCHEMA_JSON         = '{
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
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "privacy_level": {
        "from": "generated"
    }
}';

    public function __construct(#[MapFrom('privacy_level')]
    public PrivacyLevel|null $privacyLevel,)
    {
    }
}
