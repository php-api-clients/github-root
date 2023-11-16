<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class PreReceiveHook
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string"
        },
        "enforcement": {
            "type": "string"
        },
        "script": {
            "type": "string"
        },
        "script_repository": {
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer"
                },
                "full_name": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                }
            }
        },
        "environment": {
            "type": "object",
            "properties": {
                "id": {
                    "type": "integer"
                },
                "name": {
                    "type": "string"
                },
                "image_url": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string"
                },
                "default_environment": {
                    "type": "boolean"
                },
                "created_at": {
                    "type": "string"
                },
                "hooks_count": {
                    "type": "integer"
                },
                "download": {
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": "string"
                        },
                        "state": {
                            "type": "string"
                        },
                        "downloaded_at": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "message": {
                            "type": [
                                "string",
                                "null"
                            ]
                        }
                    }
                }
            }
        },
        "allow_downstream_configuration": {
            "type": "boolean"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "name": "generated",
    "enforcement": "generated",
    "script": "generated",
    "script_repository": {
        "id": 2,
        "full_name": "generated",
        "url": "generated",
        "html_url": "generated"
    },
    "environment": {
        "id": 2,
        "name": "generated",
        "image_url": "generated",
        "url": "generated",
        "html_url": "generated",
        "default_environment": false,
        "created_at": "generated",
        "hooks_count": 11,
        "download": {
            "url": "generated",
            "state": "generated",
            "downloaded_at": "generated",
            "message": "generated"
        }
    },
    "allow_downstream_configuration": false
}';

    public function __construct(public int|null $id, public string|null $name, public string|null $enforcement, public string|null $script, #[MapFrom('script_repository')]
    public Schema\PreReceiveHook\ScriptRepository|null $scriptRepository, public Schema\PreReceiveHook\Environment|null $environment, #[MapFrom('allow_downstream_configuration')]
    public bool|null $allowDownstreamConfiguration,)
    {
    }
}
