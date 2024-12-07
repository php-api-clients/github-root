<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class Bugs implements \EventSauce\ObjectHydrator\PropertyCaster
{
    public function cast(mixed $value, \EventSauce\ObjectHydrator\ObjectMapper $hydrator) : mixed
    {
        if (\is_array($value)) {
            $signatureChunks = \array_unique(\array_keys($value));
            \sort($signatureChunks);
            $signature = \implode('|', $signatureChunks);
            if ($signature === '') {
                try {
                    return $hydrator->hydrateObject(\ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\WebhookRegistryPackagePublished\RegistryPackage\PackageVersion\NpmMetadata\Bugs::class, $value);
                } catch (\Throwable) {
                }
            }
        }
        return $value;
    }
}
