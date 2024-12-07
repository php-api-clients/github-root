<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Deleted implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRepositoryRulesetEdited\Changes\Rules\Deleted::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
