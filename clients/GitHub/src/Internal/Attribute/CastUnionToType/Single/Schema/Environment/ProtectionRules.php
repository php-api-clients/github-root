<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Environment;

use Attribute;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertyCaster;
use Throwable;

use function array_keys;
use function array_unique;
use function implode;
use function is_array;
use function sort;

#[Attribute(Attribute::TARGET_PARAMETER)]
final class ProtectionRules implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'id|node_id|type|wait_timer') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'id|node_id|prevent_self_review|reviewers|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'id|node_id|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'id|node_id|type|wait_timer') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'id|node_id|prevent_self_review|reviewers|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'id|node_id|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
