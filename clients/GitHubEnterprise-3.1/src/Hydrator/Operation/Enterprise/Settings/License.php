<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Enterprise\Settings;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class License implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LicenseInfo($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LicenseInfo(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['seats'] ?? null;

            if ($value === null) {
                $properties['seats'] = null;
                goto after_seats;
            }

            $properties['seats'] = $value;

            after_seats:

            $value = $payload['seats_used'] ?? null;

            if ($value === null) {
                $properties['seatsUsed'] = null;
                goto after_seatsUsed;
            }

            $properties['seatsUsed'] = $value;

            after_seatsUsed:

            $value = $payload['seats_available'] ?? null;

            if ($value === null) {
                $properties['seatsAvailable'] = null;
                goto after_seatsAvailable;
            }

            $properties['seatsAvailable'] = $value;

            after_seatsAvailable:

            $value = $payload['kind'] ?? null;

            if ($value === null) {
                $properties['kind'] = null;
                goto after_kind;
            }

            $properties['kind'] = $value;

            after_kind:

            $value = $payload['days_until_expiration'] ?? null;

            if ($value === null) {
                $properties['daysUntilExpiration'] = null;
                goto after_daysUntilExpiration;
            }

            $properties['daysUntilExpiration'] = $value;

            after_daysUntilExpiration:

            $value = $payload['expire_at'] ?? null;

            if ($value === null) {
                $properties['expireAt'] = null;
                goto after_expireAt;
            }

            $properties['expireAt'] = $value;

            after_expireAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LicenseInfo($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LicenseInfo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo);
        $result = [];

        $seats = $object->seats;

        if ($seats === null) {
            goto after_seats;
        }
        after_seats:        $result['seats'] = $seats;

        
        $seatsUsed = $object->seatsUsed;

        if ($seatsUsed === null) {
            goto after_seatsUsed;
        }
        after_seatsUsed:        $result['seats_used'] = $seatsUsed;

        
        $seatsAvailable = $object->seatsAvailable;

        if ($seatsAvailable === null) {
            goto after_seatsAvailable;
        }
        after_seatsAvailable:        $result['seats_available'] = $seatsAvailable;

        
        $kind = $object->kind;

        if ($kind === null) {
            goto after_kind;
        }
        after_kind:        $result['kind'] = $kind;

        
        $daysUntilExpiration = $object->daysUntilExpiration;

        if ($daysUntilExpiration === null) {
            goto after_daysUntilExpiration;
        }
        after_daysUntilExpiration:        $result['days_until_expiration'] = $daysUntilExpiration;

        
        $expireAt = $object->expireAt;

        if ($expireAt === null) {
            goto after_expireAt;
        }
        after_expireAt:        $result['expire_at'] = $expireAt;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
