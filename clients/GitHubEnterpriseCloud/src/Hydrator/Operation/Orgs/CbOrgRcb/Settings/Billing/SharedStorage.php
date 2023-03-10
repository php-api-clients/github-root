<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class SharedStorage implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CombinedBillingUsage($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CombinedBillingUsage(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['days_left_in_billing_cycle'] ?? null;

            if ($value === null) {
                $missingFields[] = 'days_left_in_billing_cycle';
                goto after_days_left_in_billing_cycle;
            }

            $properties['days_left_in_billing_cycle'] = $value;

            after_days_left_in_billing_cycle:

            $value = $payload['estimated_paid_storage_for_month'] ?? null;

            if ($value === null) {
                $missingFields[] = 'estimated_paid_storage_for_month';
                goto after_estimated_paid_storage_for_month;
            }

            $properties['estimated_paid_storage_for_month'] = $value;

            after_estimated_paid_storage_for_month:

            $value = $payload['estimated_storage_for_month'] ?? null;

            if ($value === null) {
                $missingFields[] = 'estimated_storage_for_month';
                goto after_estimated_storage_for_month;
            }

            $properties['estimated_storage_for_month'] = $value;

            after_estimated_storage_for_month:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CombinedBillingUsage($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CombinedBillingUsage(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage);
        $result = [];

        $days_left_in_billing_cycle = $object->days_left_in_billing_cycle;
        after_days_left_in_billing_cycle:        $result['days_left_in_billing_cycle'] = $days_left_in_billing_cycle;

        
        $estimated_paid_storage_for_month = $object->estimated_paid_storage_for_month;
        after_estimated_paid_storage_for_month:        $result['estimated_paid_storage_for_month'] = $estimated_paid_storage_for_month;

        
        $estimated_storage_for_month = $object->estimated_storage_for_month;
        after_estimated_storage_for_month:        $result['estimated_storage_for_month'] = $estimated_storage_for_month;


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
