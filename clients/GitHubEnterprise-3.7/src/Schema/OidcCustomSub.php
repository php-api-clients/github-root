<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class OidcCustomSub
{
    public const SCHEMA_JSON = '{"title":"Actions OIDC Subject customization","required":["include_claim_keys"],"type":"object","properties":{"include_claim_keys":{"type":"array","items":{"type":"string"},"description":"Array of unique strings. Each claim key can only contain alphanumeric characters and underscores."}},"description":"Actions OIDC Subject customization"}';
    public const SCHEMA_TITLE = 'Actions OIDC Subject customization';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC Subject customization';
    public const SCHEMA_EXAMPLE_DATA = '{"include_claim_keys":["generated_include_claim_keys"]}';
    /**
     * include_claim_keys: Array of unique strings. Each claim key can only contain alphanumeric characters and underscores.
     * @param array<string> $include_claim_keys
     */
    public function __construct(public array $include_claim_keys)
    {
    }
}
