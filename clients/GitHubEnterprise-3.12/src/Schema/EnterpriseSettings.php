<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class EnterpriseSettings
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "enterprise": {
            "type": "object",
            "properties": {
                "private_mode": {
                    "type": "boolean"
                },
                "public_pages": {
                    "type": "boolean"
                },
                "subdomain_isolation": {
                    "type": "boolean"
                },
                "signup_enabled": {
                    "type": "boolean"
                },
                "github_hostname": {
                    "type": "string"
                },
                "identicons_host": {
                    "type": "string"
                },
                "http_proxy": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "auth_mode": {
                    "type": "string"
                },
                "expire_sessions": {
                    "type": "boolean"
                },
                "admin_password": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "configuration_id": {
                    "type": "integer"
                },
                "configuration_run_count": {
                    "type": "integer"
                },
                "avatar": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        },
                        "uri": {
                            "type": "string"
                        }
                    }
                },
                "customer": {
                    "type": "object",
                    "properties": {
                        "name": {
                            "type": "string"
                        },
                        "email": {
                            "type": "string"
                        },
                        "uuid": {
                            "type": "string"
                        },
                        "secret_key_data": {
                            "type": "string"
                        },
                        "public_key_data": {
                            "type": "string"
                        }
                    }
                },
                "license": {
                    "type": "object",
                    "properties": {
                        "seats": {
                            "type": "integer"
                        },
                        "evaluation": {
                            "type": "boolean"
                        },
                        "perpetual": {
                            "type": "boolean"
                        },
                        "unlimited_seating": {
                            "type": "boolean"
                        },
                        "support_key": {
                            "type": "string"
                        },
                        "ssh_allowed": {
                            "type": "boolean"
                        },
                        "cluster_support": {
                            "type": "boolean"
                        },
                        "expire_at": {
                            "type": "string"
                        }
                    }
                },
                "github_ssl": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        },
                        "cert": {
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
                },
                "ldap": {
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
                },
                "cas": {
                    "type": "object",
                    "properties": {
                        "url": {
                            "type": [
                                "string",
                                "null"
                            ]
                        }
                    }
                },
                "saml": {
                    "type": "object",
                    "properties": {
                        "sso_url": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "certificate": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "certificate_path": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "issuer": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "idp_initiated_sso": {
                            "type": "boolean"
                        },
                        "disable_admin_demote": {
                            "type": "boolean"
                        }
                    }
                },
                "github_oauth": {
                    "type": "object",
                    "properties": {
                        "client_id": {
                            "type": "string"
                        },
                        "client_secret": {
                            "type": "string"
                        },
                        "organization_name": {
                            "type": "string"
                        },
                        "organization_team": {
                            "type": "string"
                        }
                    }
                },
                "smtp": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        },
                        "address": {
                            "type": "string"
                        },
                        "authentication": {
                            "type": "string"
                        },
                        "port": {
                            "type": "string"
                        },
                        "domain": {
                            "type": "string"
                        },
                        "username": {
                            "type": "string"
                        },
                        "user_name": {
                            "type": "string"
                        },
                        "enable_starttls_auto": {
                            "type": "boolean"
                        },
                        "password": {
                            "type": "string"
                        },
                        "discard-to-noreply-address": {
                            "type": "boolean"
                        },
                        "support_address": {
                            "type": "string"
                        },
                        "support_address_type": {
                            "type": "string"
                        },
                        "noreply_address": {
                            "type": "string"
                        }
                    }
                },
                "ntp": {
                    "type": "object",
                    "properties": {
                        "primary_server": {
                            "type": "string"
                        },
                        "secondary_server": {
                            "type": "string"
                        }
                    }
                },
                "timezone": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "snmp": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        },
                        "community": {
                            "type": "string"
                        }
                    }
                },
                "syslog": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        },
                        "server": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "protocol_name": {
                            "type": "string"
                        }
                    }
                },
                "assets": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "pages": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        }
                    }
                },
                "collectd": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        },
                        "server": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "port": {
                            "type": "integer"
                        },
                        "encryption": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "username": {
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
                        }
                    }
                },
                "mapping": {
                    "type": "object",
                    "properties": {
                        "enabled": {
                            "type": "boolean"
                        },
                        "tileserver": {
                            "type": [
                                "string",
                                "null"
                            ]
                        },
                        "basemap": {
                            "type": "string"
                        },
                        "token": {
                            "type": [
                                "string",
                                "null"
                            ]
                        }
                    }
                },
                "load_balancer": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "run_list": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enterprise": {
        "private_mode": false,
        "public_pages": false,
        "subdomain_isolation": false,
        "signup_enabled": false,
        "github_hostname": "generated",
        "identicons_host": "generated",
        "http_proxy": "generated",
        "auth_mode": "generated",
        "expire_sessions": false,
        "admin_password": "generated",
        "configuration_id": 16,
        "configuration_run_count": 23,
        "avatar": {
            "enabled": false,
            "uri": "generated"
        },
        "customer": {
            "name": "generated",
            "email": "generated",
            "uuid": "generated",
            "secret_key_data": "generated",
            "public_key_data": "generated"
        },
        "license": {
            "seats": 5,
            "evaluation": false,
            "perpetual": false,
            "unlimited_seating": false,
            "support_key": "generated",
            "ssh_allowed": false,
            "cluster_support": false,
            "expire_at": "generated"
        },
        "github_ssl": {
            "enabled": false,
            "cert": "generated",
            "key": "generated"
        },
        "ldap": {
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
        },
        "cas": {
            "url": "generated"
        },
        "saml": {
            "sso_url": "generated",
            "certificate": "generated",
            "certificate_path": "generated",
            "issuer": "generated",
            "idp_initiated_sso": false,
            "disable_admin_demote": false
        },
        "github_oauth": {
            "client_id": "generated",
            "client_secret": "generated",
            "organization_name": "generated",
            "organization_team": "generated"
        },
        "smtp": {
            "enabled": false,
            "address": "generated",
            "authentication": "generated",
            "port": "generated",
            "domain": "generated",
            "username": "generated",
            "user_name": "generated",
            "enable_starttls_auto": false,
            "password": "generated",
            "discard-to-noreply-address": false,
            "support_address": "generated",
            "support_address_type": "generated",
            "noreply_address": "generated"
        },
        "ntp": {
            "primary_server": "generated",
            "secondary_server": "generated"
        },
        "timezone": "generated",
        "snmp": {
            "enabled": false,
            "community": "generated"
        },
        "syslog": {
            "enabled": false,
            "server": "generated",
            "protocol_name": "generated"
        },
        "assets": "generated",
        "pages": {
            "enabled": false
        },
        "collectd": {
            "enabled": false,
            "server": "generated",
            "port": 4,
            "encryption": "generated",
            "username": "generated",
            "password": "generated"
        },
        "mapping": {
            "enabled": false,
            "tileserver": "generated",
            "basemap": "generated",
            "token": "generated"
        },
        "load_balancer": "generated"
    },
    "run_list": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public Schema\EnterpriseSettings\Enterprise|null $enterprise, #[MapFrom('run_list')]
    public array|null $runList,)
    {
    }
}
