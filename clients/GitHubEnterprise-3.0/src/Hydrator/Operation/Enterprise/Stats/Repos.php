<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Enterprise\Stats;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Repos implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_repos'] ?? null;
    
                if ($value === null) {
                    $properties['total_repos'] = null;
                    goto after_total_repos;
                }

                $properties['total_repos'] = $value;
    
                after_total_repos:

                $value = $payload['root_repos'] ?? null;
    
                if ($value === null) {
                    $properties['root_repos'] = null;
                    goto after_root_repos;
                }

                $properties['root_repos'] = $value;
    
                after_root_repos:

                $value = $payload['fork_repos'] ?? null;
    
                if ($value === null) {
                    $properties['fork_repos'] = null;
                    goto after_fork_repos;
                }

                $properties['fork_repos'] = $value;
    
                after_fork_repos:

                $value = $payload['org_repos'] ?? null;
    
                if ($value === null) {
                    $properties['org_repos'] = null;
                    goto after_org_repos;
                }

                $properties['org_repos'] = $value;
    
                after_org_repos:

                $value = $payload['total_pushes'] ?? null;
    
                if ($value === null) {
                    $properties['total_pushes'] = null;
                    goto after_total_pushes;
                }

                $properties['total_pushes'] = $value;
    
                after_total_pushes:

                $value = $payload['total_wikis'] ?? null;
    
                if ($value === null) {
                    $properties['total_wikis'] = null;
                    goto after_total_wikis;
                }

                $properties['total_wikis'] = $value;
    
                after_total_wikis:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview);
        $result = [];
        
        $total_repos = $object->total_repos;

        if ($total_repos === null) {
            goto after_total_repos;
        }
        after_total_repos:        $result['total_repos'] = $total_repos;

        
        $root_repos = $object->root_repos;

        if ($root_repos === null) {
            goto after_root_repos;
        }
        after_root_repos:        $result['root_repos'] = $root_repos;

        
        $fork_repos = $object->fork_repos;

        if ($fork_repos === null) {
            goto after_fork_repos;
        }
        after_fork_repos:        $result['fork_repos'] = $fork_repos;

        
        $org_repos = $object->org_repos;

        if ($org_repos === null) {
            goto after_org_repos;
        }
        after_org_repos:        $result['org_repos'] = $org_repos;

        
        $total_pushes = $object->total_pushes;

        if ($total_pushes === null) {
            goto after_total_pushes;
        }
        after_total_pushes:        $result['total_pushes'] = $total_pushes;

        
        $total_wikis = $object->total_wikis;

        if ($total_wikis === null) {
            goto after_total_wikis;
        }
        after_total_wikis:        $result['total_wikis'] = $total_wikis;


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
