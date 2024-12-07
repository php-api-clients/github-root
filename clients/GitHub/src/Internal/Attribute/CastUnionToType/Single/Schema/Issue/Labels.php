<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Issue;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Labels implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'color|default|description|id|name|node_id|url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Issue\Labels::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'color|default|description|id|name|node_id|url') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Issue\Labels::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
