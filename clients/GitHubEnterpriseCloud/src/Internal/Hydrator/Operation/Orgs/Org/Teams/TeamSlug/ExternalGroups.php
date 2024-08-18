<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Orgs\Org\Teams\TeamSlug;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function assert;
use function count;
use function is_a;

class ExternalGroups implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroups($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroups(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['groups'] ?? null;

            if ($value === null) {
                $properties['groups'] = null;
                goto after_groups;
            }

            $properties['groups'] = $value;

            after_groups:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup(array $payload): ExternalGroup
    {
        $properties    = [];
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

            $properties['teams'] = $value;

            after_teams:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members';
                goto after_members;
            }

            $properties['members'] = $value;

            after_members:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ExternalGroup::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ExternalGroup(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroups($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroups(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups);
        $result = [];

        $groups = $object->groups;

        if ($groups === null) {
            goto after_groups;
        }

        static $groupsSerializer0;

        if ($groupsSerializer0 === null) {
            $groupsSerializer0 = new SerializeArrayItems(...[]);
        }

        $groups                                = $groupsSerializer0->serialize($groups, $this);
        after_groups:        $result['groups'] = $groups;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ExternalGroup(mixed $object): mixed
    {
        assert($object instanceof ExternalGroup);
        $result = [];

        $groupId                                  = $object->groupId;
        after_groupId:        $result['group_id'] = $groupId;

        $groupName                                    = $object->groupName;
        after_groupName:        $result['group_name'] = $groupName;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $teams = $object->teams;
        static $teamsSerializer0;

        if ($teamsSerializer0 === null) {
            $teamsSerializer0 = new SerializeArrayItems(...[]);
        }

        $teams                               = $teamsSerializer0->serialize($teams, $this);
        after_teams:        $result['teams'] = $teams;

        $members = $object->members;
        static $membersSerializer0;

        if ($membersSerializer0 === null) {
            $membersSerializer0 = new SerializeArrayItems(...[]);
        }

        $members                                 = $membersSerializer0->serialize($members, $this);
        after_members:        $result['members'] = $members;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
