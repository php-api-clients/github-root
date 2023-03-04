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
                    $missingFields[] = 'seats_used';
                    goto after_seats_used;
                }

                $properties['seats_used'] = $value;
    
                after_seats_used:

                $value = $payload['seats_available'] ?? null;
    
                if ($value === null) {
                    $properties['seats_available'] = null;
                    goto after_seats_available;
                }

                $properties['seats_available'] = $value;
    
                after_seats_available:

                $value = $payload['kind'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'kind';
                    goto after_kind;
                }

                $properties['kind'] = $value;
    
                after_kind:

                $value = $payload['days_until_expiration'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'days_until_expiration';
                    goto after_days_until_expiration;
                }

                $properties['days_until_expiration'] = $value;
    
                after_days_until_expiration:

                $value = $payload['expire_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'expire_at';
                    goto after_expire_at;
                }

                $properties['expire_at'] = $value;
    
                after_expire_at:

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
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

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

        
        $seats_used = $object->seats_used;

        if ($seats_used === null) {
            goto after_seats_used;
        }
        after_seats_used:        $result['seats_used'] = $seats_used;

        
        $seats_available = $object->seats_available;

        if ($seats_available === null) {
            goto after_seats_available;
        }
        after_seats_available:        $result['seats_available'] = $seats_available;

        
        $kind = $object->kind;

        if ($kind === null) {
            goto after_kind;
        }
        after_kind:        $result['kind'] = $kind;

        
        $days_until_expiration = $object->days_until_expiration;

        if ($days_until_expiration === null) {
            goto after_days_until_expiration;
        }
        after_days_until_expiration:        $result['days_until_expiration'] = $days_until_expiration;

        
        $expire_at = $object->expire_at;

        if ($expire_at === null) {
            goto after_expire_at;
        }
        after_expire_at:        $result['expire_at'] = $expire_at;


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
