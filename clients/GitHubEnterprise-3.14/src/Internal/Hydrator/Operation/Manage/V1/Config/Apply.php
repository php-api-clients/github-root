<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Manage\V1\Config;

use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson\Ok;
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

class Apply implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson\Ok' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️GetManageConfigApplyStatus⚡️Response⚡️ApplicationJson⚡️Ok($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️PostManageRunConfigApply⚡️Response⚡️ApplicationJson⚡️Ok($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️GetManageConfigApplyStatus⚡️Response⚡️ApplicationJson⚡️Ok(array $payload): Ok
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['running'] ?? null;

            if ($value === null) {
                $properties['running'] = null;
                goto after_running;
            }

            $properties['running'] = $value;

            after_running:

            $value = $payload['successful'] ?? null;

            if ($value === null) {
                $properties['successful'] = null;
                goto after_successful;
            }

            $properties['successful'] = $value;

            after_successful:

            $value = $payload['nodes'] ?? null;

            if ($value === null) {
                $properties['nodes'] = null;
                goto after_nodes;
            }

            $properties['nodes'] = $value;

            after_nodes:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Ok::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Ok(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️PostManageRunConfigApply⚡️Response⚡️ApplicationJson⚡️Ok(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['run_id'] ?? null;

            if ($value === null) {
                $properties['runId'] = null;
                goto after_runId;
            }

            $properties['runId'] = $value;

            after_runId:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\GetManageConfigApplyStatus\Response\ApplicationJson\Ok' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️GetManageConfigApplyStatus⚡️Response⚡️ApplicationJson⚡️Ok($object),
                'ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️PostManageRunConfigApply⚡️Response⚡️ApplicationJson⚡️Ok($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️GetManageConfigApplyStatus⚡️Response⚡️ApplicationJson⚡️Ok(mixed $object): mixed
    {
        assert($object instanceof Ok);
        $result = [];

        $running = $object->running;

        if ($running === null) {
            goto after_running;
        }

        after_running:        $result['running'] = $running;

        $successful = $object->successful;

        if ($successful === null) {
            goto after_successful;
        }

        after_successful:        $result['successful'] = $successful;

        $nodes = $object->nodes;

        if ($nodes === null) {
            goto after_nodes;
        }

        static $nodesSerializer0;

        if ($nodesSerializer0 === null) {
            $nodesSerializer0 = new SerializeArrayItems(...[]);
        }

        $nodes                               = $nodesSerializer0->serialize($nodes, $this);
        after_nodes:        $result['nodes'] = $nodes;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️PostManageRunConfigApply⚡️Response⚡️ApplicationJson⚡️Ok(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\PostManageRunConfigApply\Response\ApplicationJson\Ok);
        $result = [];

        $runId = $object->runId;

        if ($runId === null) {
            goto after_runId;
        }

        after_runId:        $result['run_id'] = $runId;

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
