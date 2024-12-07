<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\IntegrationInstallationRequest;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Account implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'avatar_url|email|events_url|followers_url|following_url|gists_url|gravatar_id|html_url|id|login|name|node_id|organizations_url|received_events_url|repos_url|site_admin|starred_at|starred_url|subscriptions_url|type|url|user_view_type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\IntegrationInstallationRequest\Account::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'avatar_url|created_at|description|html_url|id|name|node_id|slug|updated_at|website_url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\IntegrationInstallationRequest\Account::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
