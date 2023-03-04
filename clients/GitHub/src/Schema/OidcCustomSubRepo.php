<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class OidcCustomSubRepo
{
    public const SCHEMA_JSON = '{"title":"Actions OIDC subject customization for a repository","required":["use_default"],"type":"object","properties":{"use_default":{"type":"boolean","description":"Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored."},"include_claim_keys":{"type":"array","items":{"type":"string"},"description":"Array of unique strings. Each claim key can only contain alphanumeric characters and underscores."}},"description":"Actions OIDC subject customization for a repository"}';
    public const SCHEMA_TITLE = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_EXAMPLE_DATA = '{"use_default":false,"include_claim_keys":[null]}';
    /**
     * Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored.
     */
    public ?bool $use_default;
    /**
     * Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     * @var array<string>
     */
    public array $include_claim_keys;
    public function __construct(bool $use_default, array $include_claim_keys)
    {
        $this->use_default = $use_default;
        $this->include_claim_keys = $include_claim_keys;
    }
}
