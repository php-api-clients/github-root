<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Smtp
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
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
}';

    public function __construct(public bool|null $enabled, public string|null $address, public string|null $authentication, public string|null $port, public string|null $domain, public string|null $username, #[MapFrom('user_name')]
    public string|null $userName, #[MapFrom('enable_starttls_auto')]
    public bool|null $enableStarttlsAuto, public string|null $password, #[MapFrom('discard-to-noreply-address')]
    public bool|null $discardMinToMinNoreplyMinAddress, #[MapFrom('support_address')]
    public string|null $supportAddress, #[MapFrom('support_address_type')]
    public string|null $supportAddressType, #[MapFrom('noreply_address')]
    public string|null $noreplyAddress,)
    {
    }
}
