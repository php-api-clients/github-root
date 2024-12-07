<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Repos\CreateOrgRuleset\Request\ApplicationJson;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Conditions implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === 'ref_name|repository_name') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Repos\CreateOrgRuleset\Request\ApplicationJson\Conditions::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'ref_name|repository_id') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Repos\CreateOrgRuleset\Request\ApplicationJson\Conditions::class, $value);
                } catch (\Throwable) {
                }
            }
            if ($signature === 'ref_name|repository_property') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Repos\CreateOrgRuleset\Request\ApplicationJson\Conditions::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
