<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TEB301A03\T504AADCF\T2FEB0C19;

use ApiClients\Client\GitHub\Contract\OidcCustomSubRepo;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TF58BE94A implements OidcCustomSubRepo
{
    public const SCHEMA_JSON         = '{
    "title": "Actions OIDC subject customization for a repository",
    "required": [
        "use_default"
    ],
    "type": "object",
    "properties": {
        "use_default": {
            "type": "boolean",
            "description": "Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored."
        },
        "include_claim_keys": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "Array of unique strings. Each claim key can only contain alphanumeric characters and underscores."
        }
    },
    "description": "Actions OIDC subject customization for a repository"
}';
    public const SCHEMA_TITLE        = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_DESCRIPTION  = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_EXAMPLE_DATA = '{
    "use_default": false,
    "include_claim_keys": [
        "generated",
        "generated"
    ]
}';

    /**
     * useDefault: Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored.
     * includeClaimKeys: Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     */
    public function __construct(#[MapFrom('use_default')]
    public bool $useDefault, #[MapFrom('include_claim_keys')]
    public array|null $includeClaimKeys,)
    {
    }
}
