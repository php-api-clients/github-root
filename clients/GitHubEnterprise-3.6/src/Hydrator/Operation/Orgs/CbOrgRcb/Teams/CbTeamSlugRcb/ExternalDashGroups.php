<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class ExternalDashGroups implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups⚡️Groups($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Teams($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Members($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['groups'] ?? null;

            if ($value === null) {
                $properties['groups'] = null;
                goto after_groups;
            }

            static $groupsCaster1;

            if ($groupsCaster1 === null) {
                $groupsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroups\\Groups',
));
            }

            $value = $groupsCaster1->cast($value, $this);

            $properties['groups'] = $value;

            after_groups:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups⚡️Groups(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['group_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'group_id';
                goto after_groupId;
            }

            $properties['groupId'] = $value;

            after_groupId:

            $value = $payload['group_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'group_name';
                goto after_groupName;
            }

            $properties['groupName'] = $value;

            after_groupName:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['group_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'group_id';
                goto after_groupId;
            }

            $properties['groupId'] = $value;

            after_groupId:

            $value = $payload['group_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'group_name';
                goto after_groupName;
            }

            $properties['groupName'] = $value;

            after_groupName:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['teams'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams';
                goto after_teams;
            }

            static $teamsCaster1;

            if ($teamsCaster1 === null) {
                $teamsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Teams',
));
            }

            $value = $teamsCaster1->cast($value, $this);

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members';
                goto after_members;
            }

            static $membersCaster1;

            if ($membersCaster1 === null) {
                $membersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Members',
));
            }

            $value = $membersCaster1->cast($value, $this);

            $properties['members'] = $value;

            after_members:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Teams(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['team_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'team_id';
                goto after_teamId;
            }

            $properties['teamId'] = $value;

            after_teamId:

            $value = $payload['team_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'team_name';
                goto after_teamName;
            }

            $properties['teamName'] = $value;

            after_teamName:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Members(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['member_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'member_id';
                goto after_memberId;
            }

            $properties['memberId'] = $value;

            after_memberId:

            $value = $payload['member_login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'member_login';
                goto after_memberLogin;
            }

            $properties['memberLogin'] = $value;

            after_memberLogin:

            $value = $payload['member_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'member_name';
                goto after_memberName;
            }

            $properties['memberName'] = $value;

            after_memberName:

            $value = $payload['member_email'] ?? null;

            if ($value === null) {
                $missingFields[] = 'member_email';
                goto after_memberEmail;
            }

            $properties['memberEmail'] = $value;

            after_memberEmail:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups($object),
            'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups⚡️Groups($object),
            'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup($object),
            'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Teams($object),
            'ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Members($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups);
        $result = [];

        $groups = $object->groups;

        if ($groups === null) {
            goto after_groups;
        }
        static $groupsSerializer0;

        if ($groupsSerializer0 === null) {
            $groupsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroups\\Groups',
));
        }
        
        $groups = $groupsSerializer0->serialize($groups, $this);
        after_groups:        $result['groups'] = $groups;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroups⚡️Groups(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups\Groups);
        $result = [];

        $groupId = $object->groupId;
        after_groupId:        $result['group_id'] = $groupId;

        
        $groupName = $object->groupName;
        after_groupName:        $result['group_name'] = $groupName;

        
        $updatedAt = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup);
        $result = [];

        $groupId = $object->groupId;
        after_groupId:        $result['group_id'] = $groupId;

        
        $groupName = $object->groupName;
        after_groupName:        $result['group_name'] = $groupName;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Teams',
));
        }
        
        $teams = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        
        $members = $object->members;
        static $membersSerializer0;

        if ($membersSerializer0 === null) {
            $membersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Members',
));
        }
        
        $members = $membersSerializer0->serialize($members, $this);
        after_members:        $result['members'] = $members;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Teams(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Teams);
        $result = [];

        $teamId = $object->teamId;
        after_teamId:        $result['team_id'] = $teamId;

        
        $teamName = $object->teamName;
        after_teamName:        $result['team_name'] = $teamName;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ExternalGroup⚡️Members(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup\Members);
        $result = [];

        $memberId = $object->memberId;
        after_memberId:        $result['member_id'] = $memberId;

        
        $memberLogin = $object->memberLogin;
        after_memberLogin:        $result['member_login'] = $memberLogin;

        
        $memberName = $object->memberName;
        after_memberName:        $result['member_name'] = $memberName;

        
        $memberEmail = $object->memberEmail;
        after_memberEmail:        $result['member_email'] = $memberEmail;


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
