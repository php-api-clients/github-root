<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Repos\Owner\Repo\Commits\Ref;

use ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json;
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

class CheckRuns implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Checks⚡️ListForRef⚡️Response⚡️ApplicationJson⚡️Ok⚡️Application⚡️Json($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Checks⚡️ListForRef⚡️Response⚡️ApplicationJson⚡️Ok⚡️Application⚡️Json(array $payload): Json
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['check_runs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_runs';
                goto after_checkRuns;
            }

            $properties['checkRuns'] = $value;

            after_checkRuns:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Json::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Json(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Checks⚡️ListForRef⚡️Response⚡️ApplicationJson⚡️Ok⚡️Application⚡️Json($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Checks⚡️ListForRef⚡️Response⚡️ApplicationJson⚡️Ok⚡️Application⚡️Json(mixed $object): mixed
    {
        assert($object instanceof Json);
        $result = [];

        $totalCount                                     = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        $checkRuns = $object->checkRuns;
        static $checkRunsSerializer0;

        if ($checkRunsSerializer0 === null) {
            $checkRunsSerializer0 = new SerializeArrayItems(...[]);
        }

        $checkRuns                                    = $checkRunsSerializer0->serialize($checkRuns, $this);
        after_checkRuns:        $result['check_runs'] = $checkRuns;

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
