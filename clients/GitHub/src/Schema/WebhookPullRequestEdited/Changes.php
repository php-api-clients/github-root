<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited;

final readonly class Changes implements \ApiClients\Client\GitHub\Contract\WebhookPullRequestEdited\Changes
{
    const SCHEMA_JSON = '{
    "type": "object",
    "properties": {
        "base": {
            "required": [
                "ref",
                "sha"
            ],
            "type": "object",
            "properties": {
                "ref": {
                    "required": [
                        "from"
                    ],
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                },
                "sha": {
                    "required": [
                        "from"
                    ],
                    "type": "object",
                    "properties": {
                        "from": {
                            "type": "string"
                        }
                    }
                }
            }
        },
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
        },
        "title": {
            "required": [
                "from"
            ],
            "type": "object",
            "properties": {
                "from": {
                    "type": "string",
                    "description": "The previous version of the title if the action was `edited`."
                }
            }
        }
    },
    "description": "The changes to the comment if the action was `edited`."
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment if the action was `edited`.';
    const SCHEMA_EXAMPLE_DATA = '{
    "base": {
        "ref": {
            "from": "generated"
        },
        "sha": {
            "from": "generated"
        }
    },
    "body": {
        "from": "generated"
    },
    "title": {
        "from": "generated"
    }
}';
    public function __construct(public ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Base $base, public ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Body $body, public ?\ApiClients\Client\GitHub\Schema\WebhookPullRequestEdited\Changes\Title $title)
    {
    }
}
