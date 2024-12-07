<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class ProtectionRules implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'id|node_id|type|wait_timer') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment\ProtectionRules::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'id|node_id|prevent_self_review|reviewers|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment\ProtectionRules::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'id|node_id|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment\ProtectionRules::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'id|node_id|type|wait_timer') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment\ProtectionRules::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'id|node_id|prevent_self_review|reviewers|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment\ProtectionRules::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'id|node_id|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment\ProtectionRules::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
