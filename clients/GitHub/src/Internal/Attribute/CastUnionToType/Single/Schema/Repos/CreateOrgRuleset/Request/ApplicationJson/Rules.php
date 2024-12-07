<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Attribute\CastUnionToType\Single\Schema\Repos\CreateOrgRuleset\Request\ApplicationJson;

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
final class Rules implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }

            if ($signature === 'parameters|type') {
                try {
                    return $hydrator->hydrateObject(self::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
