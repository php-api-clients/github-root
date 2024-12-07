<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Commit;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Author implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'avatar_url|email|events_url|followers_url|following_url|gists_url|gravatar_id|html_url|id|login|name|node_id|organizations_url|received_events_url|repos_url|site_admin|starred_at|starred_url|subscriptions_url|type|url|user_view_type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Commit\Author::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === '') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Commit\Author::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
