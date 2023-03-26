<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\Schema;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final readonly class OidcCustomSubRepo
{
    public const SCHEMA_JSON = '{"title":"Actions OIDC subject customization for a repository","required":["use_default"],"type":"object","properties":{"use_default":{"type":"boolean","description":"Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored."},"include_claim_keys":{"type":"array","items":{"type":"string"},"description":"Array of unique strings. Each claim key can only contain alphanumeric characters and underscores. This property will only appear in the response body if it was already set using the organization-level endpoint, \\"Set the customization template for an OIDC subject claim for an organization\\"."}},"description":"Actions OIDC subject customization for a repository"}';
    public const SCHEMA_TITLE = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_DESCRIPTION = 'Actions OIDC subject customization for a repository';
    public const SCHEMA_EXAMPLE_DATA = '{"use_default":false,"include_claim_keys":["generated_include_claim_keys_null"]}';
    /**
     * useDefault: Whether to use the default template or not. If `true`, the `include_claim_keys` field is ignored.
     * includeClaimKeys: Array of unique strings. Each claim key can only contain alphanumeric characters and underscores. This property will only appear in the response body if it was already set using the organization-level endpoint, "Set the customization template for an OIDC subject claim for an organization".
     * @param ?array<string> $includeClaimKeys
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('use_default')] public bool $useDefault, #[\EventSauce\ObjectHydrator\MapFrom('include_claim_keys')] public ?array $includeClaimKeys)
    {
    }
}
