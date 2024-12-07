<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookProjectsV2ItemEdited;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Changes implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'field_value') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookProjectsV2ItemEdited\Changes::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'body') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookProjectsV2ItemEdited\Changes::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
