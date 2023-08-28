<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Enterprises\Enterprise\Actions\Cache;

use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise;
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

class UsagePolicy implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ActionsCacheUsagePolicyEnterprise($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ActionsCacheUsagePolicyEnterprise(array $payload): ActionsCacheUsagePolicyEnterprise
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['repo_cache_size_limit_in_gb'] ?? null;

            if ($value === null) {
                $properties['repoCacheSizeLimitInGb'] = null;
                goto after_repoCacheSizeLimitInGb;
            }

            $properties['repoCacheSizeLimitInGb'] = $value;

            after_repoCacheSizeLimitInGb:

            $value = $payload['max_repo_cache_size_limit_in_gb'] ?? null;

            if ($value === null) {
                $properties['maxRepoCacheSizeLimitInGb'] = null;
                goto after_maxRepoCacheSizeLimitInGb;
            }

            $properties['maxRepoCacheSizeLimitInGb'] = $value;

            after_maxRepoCacheSizeLimitInGb:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ActionsCacheUsagePolicyEnterprise::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ActionsCacheUsagePolicyEnterprise(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ActionsCacheUsagePolicyEnterprise($object),
                default => throw new LogicException('No serialization defined for $className'),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ActionsCacheUsagePolicyEnterprise(mixed $object): mixed
    {
        assert($object instanceof ActionsCacheUsagePolicyEnterprise);
        $result = [];

        $repoCacheSizeLimitInGb = $object->repoCacheSizeLimitInGb;

        if ($repoCacheSizeLimitInGb === null) {
            goto after_repoCacheSizeLimitInGb;
        }

        after_repoCacheSizeLimitInGb:        $result['repo_cache_size_limit_in_gb'] = $repoCacheSizeLimitInGb;

        $maxRepoCacheSizeLimitInGb = $object->maxRepoCacheSizeLimitInGb;

        if ($maxRepoCacheSizeLimitInGb === null) {
            goto after_maxRepoCacheSizeLimitInGb;
        }

        after_maxRepoCacheSizeLimitInGb:        $result['max_repo_cache_size_limit_in_gb'] = $maxRepoCacheSizeLimitInGb;

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
