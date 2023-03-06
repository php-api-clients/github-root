<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Enterprise\Stats;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Orgs implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_orgs'] ?? null;
    
                if ($value === null) {
                    $properties['total_orgs'] = null;
                    goto after_total_orgs;
                }

                $properties['total_orgs'] = $value;
    
                after_total_orgs:

                $value = $payload['disabled_orgs'] ?? null;
    
                if ($value === null) {
                    $properties['disabled_orgs'] = null;
                    goto after_disabled_orgs;
                }

                $properties['disabled_orgs'] = $value;
    
                after_disabled_orgs:

                $value = $payload['total_teams'] ?? null;
    
                if ($value === null) {
                    $properties['total_teams'] = null;
                    goto after_total_teams;
                }

                $properties['total_teams'] = $value;
    
                after_total_teams:

                $value = $payload['total_team_members'] ?? null;
    
                if ($value === null) {
                    $properties['total_team_members'] = null;
                    goto after_total_team_members;
                }

                $properties['total_team_members'] = $value;
    
                after_total_team_members:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview);
        $result = [];
        
        $total_orgs = $object->total_orgs;

        if ($total_orgs === null) {
            goto after_total_orgs;
        }
        after_total_orgs:        $result['total_orgs'] = $total_orgs;

        
        $disabled_orgs = $object->disabled_orgs;

        if ($disabled_orgs === null) {
            goto after_disabled_orgs;
        }
        after_disabled_orgs:        $result['disabled_orgs'] = $disabled_orgs;

        
        $total_teams = $object->total_teams;

        if ($total_teams === null) {
            goto after_total_teams;
        }
        after_total_teams:        $result['total_teams'] = $total_teams;

        
        $total_team_members = $object->total_team_members;

        if ($total_team_members === null) {
            goto after_total_team_members;
        }
        after_total_team_members:        $result['total_team_members'] = $total_team_members;


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
