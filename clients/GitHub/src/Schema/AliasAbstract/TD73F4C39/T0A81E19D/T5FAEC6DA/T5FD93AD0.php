<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TD73F4C39\T0A81E19D\T5FAEC6DA;

abstract readonly class T5FD93AD0 implements \ApiClients\Client\GitHub\Contract\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests
{
    const SCHEMA_JSON = '{
    "required": [
        "url",
        "id",
        "number",
        "head",
        "base"
    ],
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "base": {
            "required": [
                "ref",
                "sha",
                "repo"
            ],
            "type": "object",
            "properties": {
                "ref": {
                    "type": "string"
                },
                "repo": {
                    "title": "Repo Ref",
                    "required": [
                        "id",
                        "url",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer"
                        },
                        "name": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "sha": {
                    "type": "string"
                }
            }
        },
        "head": {
            "required": [
                "ref",
                "sha",
                "repo"
            ],
            "type": "object",
            "properties": {
                "ref": {
                    "type": "string"
                },
                "repo": {
                    "title": "Repo Ref",
                    "required": [
                        "id",
                        "url",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer"
                        },
                        "name": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "sha": {
                    "type": "string"
                }
            }
        },
        "id": {
            "type": "number"
        },
        "number": {
            "type": "number"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    const SCHEMA_EXAMPLE_DATA = '{
    "base": {
        "ref": "generated",
        "repo": {
            "id": 2,
            "name": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "sha": "generated"
    },
    "head": {
        "ref": "generated",
        "repo": {
            "id": 2,
            "name": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "sha": "generated"
    },
    "id": 2,
    "number": 6,
    "url": "https:\\/\\/example.com\\/"
}';
    public function __construct(public \ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Base $base, public \ApiClients\Client\GitHub\Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Head $head, public int|float $id, public int|float $number, public string $url)
    {
    }
}
