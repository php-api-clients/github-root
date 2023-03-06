<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbGroupIdRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Teams($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Members($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['group_id'] ?? null;
    
                if ($value === null) {
                    $properties['group_id'] = null;
                    goto after_group_id;
                }

                $properties['group_id'] = $value;
    
                after_group_id:

                $value = $payload['group_name'] ?? null;
    
                if ($value === null) {
                    $properties['group_name'] = null;
                    goto after_group_name;
                }

                $properties['group_name'] = $value;
    
                after_group_name:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['teams'] ?? null;
    
                if ($value === null) {
                    $properties['teams'] = null;
                    goto after_teams;
                }

                static $teamsCaster1;
    
                if ($teamsCaster1 === null) {
                    $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Teams',
));
                }
    
                $value = $teamsCaster1->cast($value, $this);

                $properties['teams'] = $value;
    
                after_teams:

                $value = $payload['members'] ?? null;
    
                if ($value === null) {
                    $properties['members'] = null;
                    goto after_members;
                }

                static $membersCaster1;
    
                if ($membersCaster1 === null) {
                    $membersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Members',
));
                }
    
                $value = $membersCaster1->cast($value, $this);

                $properties['members'] = $value;
    
                after_members:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Teams(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['team_id'] ?? null;
    
                if ($value === null) {
                    $properties['team_id'] = null;
                    goto after_team_id;
                }

                $properties['team_id'] = $value;
    
                after_team_id:

                $value = $payload['team_name'] ?? null;
    
                if ($value === null) {
                    $properties['team_name'] = null;
                    goto after_team_name;
                }

                $properties['team_name'] = $value;
    
                after_team_name:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Members(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['member_id'] ?? null;
    
                if ($value === null) {
                    $properties['member_id'] = null;
                    goto after_member_id;
                }

                $properties['member_id'] = $value;
    
                after_member_id:

                $value = $payload['member_login'] ?? null;
    
                if ($value === null) {
                    $properties['member_login'] = null;
                    goto after_member_login;
                }

                $properties['member_login'] = $value;
    
                after_member_login:

                $value = $payload['member_name'] ?? null;
    
                if ($value === null) {
                    $properties['member_name'] = null;
                    goto after_member_name;
                }

                $properties['member_name'] = $value;
    
                after_member_name:

                $value = $payload['member_email'] ?? null;
    
                if ($value === null) {
                    $properties['member_email'] = null;
                    goto after_member_email;
                }

                $properties['member_email'] = $value;
    
                after_member_email:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Teams($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Members($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup);
        $result = [];
        
        $group_id = $object->group_id;

        if ($group_id === null) {
            goto after_group_id;
        }
        after_group_id:        $result['group_id'] = $group_id;

        
        $group_name = $object->group_name;

        if ($group_name === null) {
            goto after_group_name;
        }
        after_group_name:        $result['group_name'] = $group_name;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $teams = $object->teams;

        if ($teams === null) {
            goto after_teams;
        }
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Teams',
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }
        static $membersSerializer0;

        if ($membersSerializer0 === null) {
            $membersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Members',
));
        }
        
        $members = $membersSerializer0->serialize($members, $this);
        after_members:        $result['members'] = $members;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Teams(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Teams);
        $result = [];
        
        $team_id = $object->team_id;

        if ($team_id === null) {
            goto after_team_id;
        }
        after_team_id:        $result['team_id'] = $team_id;

        
        $team_name = $object->team_name;

        if ($team_name === null) {
            goto after_team_name;
        }
        after_team_name:        $result['team_name'] = $team_name;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup⚡️Members(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup\Members);
        $result = [];
        
        $member_id = $object->member_id;

        if ($member_id === null) {
            goto after_member_id;
        }
        after_member_id:        $result['member_id'] = $member_id;

        
        $member_login = $object->member_login;

        if ($member_login === null) {
            goto after_member_login;
        }
        after_member_login:        $result['member_login'] = $member_login;

        
        $member_name = $object->member_name;

        if ($member_name === null) {
            goto after_member_name;
        }
        after_member_name:        $result['member_name'] = $member_name;

        
        $member_email = $object->member_email;

        if ($member_email === null) {
            goto after_member_email;
        }
        after_member_email:        $result['member_email'] = $member_email;


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
