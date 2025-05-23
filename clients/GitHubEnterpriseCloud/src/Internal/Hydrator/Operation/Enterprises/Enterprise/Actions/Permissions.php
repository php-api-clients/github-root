<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Enterprises\Enterprise\Actions;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions;
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

class Permissions implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ActionsEnterprisePermissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ActionsEnterprisePermissions(array $payload): ActionsEnterprisePermissions
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled_organizations'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled_organizations';
                goto after_enabledOrganizations;
            }

            $properties['enabledOrganizations'] = $value;

            after_enabledOrganizations:

            $value = $payload['selected_organizations_url'] ?? null;

            if ($value === null) {
                $properties['selectedOrganizationsUrl'] = null;
                goto after_selectedOrganizationsUrl;
            }

            $properties['selectedOrganizationsUrl'] = $value;

            after_selectedOrganizationsUrl:

            $value = $payload['allowed_actions'] ?? null;

            if ($value === null) {
                $properties['allowedActions'] = null;
                goto after_allowedActions;
            }

            $properties['allowedActions'] = $value;

            after_allowedActions:

            $value = $payload['selected_actions_url'] ?? null;

            if ($value === null) {
                $properties['selectedActionsUrl'] = null;
                goto after_selectedActionsUrl;
            }

            $properties['selectedActionsUrl'] = $value;

            after_selectedActionsUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsEnterprisePermissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsEnterprisePermissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ActionsEnterprisePermissions($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ActionsEnterprisePermissions(mixed $object): mixed
    {
        assert($object instanceof ActionsEnterprisePermissions);
        $result = [];

        $enabledOrganizations                                               = $object->enabledOrganizations;
        after_enabledOrganizations:        $result['enabled_organizations'] = $enabledOrganizations;

        $selectedOrganizationsUrl = $object->selectedOrganizationsUrl;

        if ($selectedOrganizationsUrl === null) {
            goto after_selectedOrganizationsUrl;
        }

        after_selectedOrganizationsUrl:        $result['selected_organizations_url'] = $selectedOrganizationsUrl;

        $allowedActions = $object->allowedActions;

        if ($allowedActions === null) {
            goto after_allowedActions;
        }

        after_allowedActions:        $result['allowed_actions'] = $allowedActions;

        $selectedActionsUrl = $object->selectedActionsUrl;

        if ($selectedActionsUrl === null) {
            goto after_selectedActionsUrl;
        }

        after_selectedActionsUrl:        $result['selected_actions_url'] = $selectedActionsUrl;

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
