<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class GetLicenseSyncStatus
{
    public const SCHEMA_JSON         = '{
    "title": "License Sync Status",
    "properties": {
        "server_instances": {
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "server_id": {
                        "type": "string"
                    },
                    "hostname": {
                        "type": "string"
                    },
                    "last_sync": {
                        "type": "object",
                        "properties": {
                            "date": {
                                "type": "string"
                            },
                            "status": {
                                "type": "string"
                            },
                            "error": {
                                "type": "string"
                            }
                        }
                    }
                }
            }
        }
    },
    "description": "Information about the status of a license sync job for an enterprise."
}';
    public const SCHEMA_TITLE        = 'License Sync Status';
    public const SCHEMA_DESCRIPTION  = 'Information about the status of a license sync job for an enterprise.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "server_instances": [
        {
            "server_id": "generated",
            "hostname": "generated",
            "last_sync": {
                "date": "generated",
                "status": "generated",
                "error": "generated"
            }
        },
        {
            "server_id": "generated",
            "hostname": "generated",
            "last_sync": {
                "date": "generated",
                "status": "generated",
                "error": "generated"
            }
        }
    ]
}';

    public function __construct(#[MapFrom('server_instances')]
    public array|null $serverInstances,)
    {
    }
}
