<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Enterprises\Enterprise\Settings\Billing;

use ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters;
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

class AdvancedSecurity implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters(array $payload): AdvancedSecurityActiveCommitters
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_advanced_security_committers'] ?? null;

            if ($value === null) {
                $properties['totalAdvancedSecurityCommitters'] = null;
                goto after_totalAdvancedSecurityCommitters;
            }

            $properties['totalAdvancedSecurityCommitters'] = $value;

            after_totalAdvancedSecurityCommitters:

            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $properties['totalCount'] = null;
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['maximum_advanced_security_committers'] ?? null;

            if ($value === null) {
                $properties['maximumAdvancedSecurityCommitters'] = null;
                goto after_maximumAdvancedSecurityCommitters;
            }

            $properties['maximumAdvancedSecurityCommitters'] = $value;

            after_maximumAdvancedSecurityCommitters:

            $value = $payload['purchased_advanced_security_committers'] ?? null;

            if ($value === null) {
                $properties['purchasedAdvancedSecurityCommitters'] = null;
                goto after_purchasedAdvancedSecurityCommitters;
            }

            $properties['purchasedAdvancedSecurityCommitters'] = $value;

            after_purchasedAdvancedSecurityCommitters:

            $value = $payload['repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories';
                goto after_repositories;
            }

            $properties['repositories'] = $value;

            after_repositories:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AdvancedSecurityActiveCommitters::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AdvancedSecurityActiveCommitters(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters(mixed $object): mixed
    {
        assert($object instanceof AdvancedSecurityActiveCommitters);
        $result = [];

        $totalAdvancedSecurityCommitters = $object->totalAdvancedSecurityCommitters;

        if ($totalAdvancedSecurityCommitters === null) {
            goto after_totalAdvancedSecurityCommitters;
        }

        after_totalAdvancedSecurityCommitters:        $result['total_advanced_security_committers'] = $totalAdvancedSecurityCommitters;

        $totalCount = $object->totalCount;

        if ($totalCount === null) {
            goto after_totalCount;
        }

        after_totalCount:        $result['total_count'] = $totalCount;

        $maximumAdvancedSecurityCommitters = $object->maximumAdvancedSecurityCommitters;

        if ($maximumAdvancedSecurityCommitters === null) {
            goto after_maximumAdvancedSecurityCommitters;
        }

        after_maximumAdvancedSecurityCommitters:        $result['maximum_advanced_security_committers'] = $maximumAdvancedSecurityCommitters;

        $purchasedAdvancedSecurityCommitters = $object->purchasedAdvancedSecurityCommitters;

        if ($purchasedAdvancedSecurityCommitters === null) {
            goto after_purchasedAdvancedSecurityCommitters;
        }

        after_purchasedAdvancedSecurityCommitters:        $result['purchased_advanced_security_committers'] = $purchasedAdvancedSecurityCommitters;

        $repositories = $object->repositories;
        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new SerializeArrayItems(...[]);
        }

        $repositories                                      = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

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
