<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookPullRequestReviewEdited;

use ApiClients\Client\GitHubEnterpriseCloud\Schema;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "body": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the body if the action was `edited`."
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "body": {
        "from": "generated"
    }
}';

    public function __construct(public Schema\WebhookPullRequestReviewEdited\Changes\Body|null $body)
    {
    }
}
