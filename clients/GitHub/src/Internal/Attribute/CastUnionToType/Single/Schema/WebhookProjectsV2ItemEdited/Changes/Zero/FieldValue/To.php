<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookProjectsV2ItemEdited\Changes\Zero\FieldValue;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class To implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'color|description|id|name') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookProjectsV2ItemEdited\Changes\Zero\FieldValue\To::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'duration|id|start_date|title') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookProjectsV2ItemEdited\Changes\Zero\FieldValue\To::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
