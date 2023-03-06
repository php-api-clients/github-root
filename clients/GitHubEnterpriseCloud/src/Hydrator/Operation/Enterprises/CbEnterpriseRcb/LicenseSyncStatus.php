<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Enterprises\CbEnterpriseRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class LicenseSyncStatus implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances⚡️LastSync($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['server_instances'] ?? null;
    
                if ($value === null) {
                    $properties['server_instances'] = null;
                    goto after_server_instances;
                }

                static $server_instancesCaster1;
    
                if ($server_instancesCaster1 === null) {
                    $server_instancesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus\\ServerInstances',
));
                }
    
                $value = $server_instancesCaster1->cast($value, $this);

                $properties['server_instances'] = $value;
    
                after_server_instances:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['server_id'] ?? null;
    
                if ($value === null) {
                    $properties['server_id'] = null;
                    goto after_server_id;
                }

                $properties['server_id'] = $value;
    
                after_server_id:

                $value = $payload['hostname'] ?? null;
    
                if ($value === null) {
                    $properties['hostname'] = null;
                    goto after_hostname;
                }

                $properties['hostname'] = $value;
    
                after_hostname:

                $value = $payload['last_sync'] ?? null;
    
                if ($value === null) {
                    $properties['last_sync'] = null;
                    goto after_last_sync;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'last_sync';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances⚡️LastSync($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['last_sync'] = $value;
    
                after_last_sync:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances⚡️LastSync(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['date'] ?? null;
    
                if ($value === null) {
                    $properties['date'] = null;
                    goto after_date;
                }

                $properties['date'] = $value;
    
                after_date:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

                $value = $payload['error'] ?? null;
    
                if ($value === null) {
                    $properties['error'] = null;
                    goto after_error;
                }

                $properties['error'] = $value;
    
                after_error:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances⚡️LastSync($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus);
        $result = [];
        
        $server_instances = $object->server_instances;

        if ($server_instances === null) {
            goto after_server_instances;
        }
        static $server_instancesSerializer0;

        if ($server_instancesSerializer0 === null) {
            $server_instancesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus\\ServerInstances',
));
        }
        
        $server_instances = $server_instancesSerializer0->serialize($server_instances, $this);
        after_server_instances:        $result['server_instances'] = $server_instances;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances);
        $result = [];
        
        $server_id = $object->server_id;

        if ($server_id === null) {
            goto after_server_id;
        }
        after_server_id:        $result['server_id'] = $server_id;

        
        $hostname = $object->hostname;

        if ($hostname === null) {
            goto after_hostname;
        }
        after_hostname:        $result['hostname'] = $hostname;

        
        $last_sync = $object->last_sync;

        if ($last_sync === null) {
            goto after_last_sync;
        }
        $last_sync = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances⚡️LastSync($last_sync);
        after_last_sync:        $result['last_sync'] = $last_sync;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetLicenseSyncStatus⚡️ServerInstances⚡️LastSync(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetLicenseSyncStatus\ServerInstances\LastSync);
        $result = [];
        
        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }
        after_date:        $result['date'] = $date;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $error = $object->error;

        if ($error === null) {
            goto after_error;
        }
        after_error:        $result['error'] = $error;


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
