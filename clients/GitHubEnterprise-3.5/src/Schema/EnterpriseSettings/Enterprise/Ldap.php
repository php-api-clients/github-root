<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ldap
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "host": {
            "type": [
                "string",
                "null"
            ]
        },
        "port": {
            "type": "integer"
        },
        "base": {
            "type": "array",
            "items": {}
        },
        "uid": {
            "type": [
                "string",
                "null"
            ]
        },
        "bind_dn": {
            "type": [
                "string",
                "null"
            ]
        },
        "password": {
            "type": [
                "string",
                "null"
            ]
        },
        "method": {
            "type": "string"
        },
        "search_strategy": {
            "type": "string"
        },
        "user_groups": {
            "type": "array",
            "items": {}
        },
        "admin_group": {
            "type": [
                "string",
                "null"
            ]
        },
        "virtual_attribute_enabled": {
            "type": "boolean"
        },
        "recursive_group_search": {
            "type": "boolean"
        },
        "posix_support": {
            "type": "boolean"
        },
        "user_sync_emails": {
            "type": "boolean"
        },
        "user_sync_keys": {
            "type": "boolean"
        },
        "user_sync_interval": {
            "type": "integer"
        },
        "team_sync_interval": {
            "type": "integer"
        },
        "sync_enabled": {
            "type": "boolean"
        },
        "reconciliation": {
            "type": "object",
            "properties": {
                "user": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "org": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "profile": {
            "type": "object",
            "properties": {
                "uid": {
                    "type": "string"
                },
                "name": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "mail": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "key": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "host": "generated",
    "port": 4,
    "base": [
        "generated",
        "generated"
    ],
    "uid": "generated",
    "bind_dn": "generated",
    "password": "generated",
    "method": "generated",
    "search_strategy": "generated",
    "user_groups": [
        "generated",
        "generated"
    ],
    "admin_group": "generated",
    "virtual_attribute_enabled": false,
    "recursive_group_search": false,
    "posix_support": false,
    "user_sync_emails": false,
    "user_sync_keys": false,
    "user_sync_interval": 18,
    "team_sync_interval": 18,
    "sync_enabled": false,
    "reconciliation": {
        "user": "generated",
        "org": "generated"
    },
    "profile": {
        "uid": "generated",
        "name": "generated",
        "mail": "generated",
        "key": "generated"
    }
}';

    public function __construct(public string|null $host, public int|null $port, public array|null $base, public string|null $uid, #[MapFrom('bind_dn')]
    public string|null $bindDn, public string|null $password, public string|null $method, #[MapFrom('search_strategy')]
    public string|null $searchStrategy, #[MapFrom('user_groups')]
    public array|null $userGroups, #[MapFrom('admin_group')]
    public string|null $adminGroup, #[MapFrom('virtual_attribute_enabled')]
    public bool|null $virtualAttributeEnabled, #[MapFrom('recursive_group_search')]
    public bool|null $recursiveGroupSearch, #[MapFrom('posix_support')]
    public bool|null $posixSupport, #[MapFrom('user_sync_emails')]
    public bool|null $userSyncEmails, #[MapFrom('user_sync_keys')]
    public bool|null $userSyncKeys, #[MapFrom('user_sync_interval')]
    public int|null $userSyncInterval, #[MapFrom('team_sync_interval')]
    public int|null $teamSyncInterval, #[MapFrom('sync_enabled')]
    public bool|null $syncEnabled, public Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation|null $reconciliation, public Schema\EnterpriseSettings\Enterprise\Ldap\Profile|null $profile,)
    {
    }
}
