<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Enterprise\Stats;

use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview;
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

class Repos implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview(array $payload): EnterpriseRepositoryOverview
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_repos';
                goto after_totalRepos;
            }

            $properties['totalRepos'] = $value;

            after_totalRepos:

            $value = $payload['root_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'root_repos';
                goto after_rootRepos;
            }

            $properties['rootRepos'] = $value;

            after_rootRepos:

            $value = $payload['fork_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork_repos';
                goto after_forkRepos;
            }

            $properties['forkRepos'] = $value;

            after_forkRepos:

            $value = $payload['org_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'org_repos';
                goto after_orgRepos;
            }

            $properties['orgRepos'] = $value;

            after_orgRepos:

            $value = $payload['total_pushes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_pushes';
                goto after_totalPushes;
            }

            $properties['totalPushes'] = $value;

            after_totalPushes:

            $value = $payload['total_wikis'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_wikis';
                goto after_totalWikis;
            }

            $properties['totalWikis'] = $value;

            after_totalWikis:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(EnterpriseRepositoryOverview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new EnterpriseRepositoryOverview(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview(mixed $object): mixed
    {
        assert($object instanceof EnterpriseRepositoryOverview);
        $result = [];

        $totalRepos                                     = $object->totalRepos;
        after_totalRepos:        $result['total_repos'] = $totalRepos;

        $rootRepos                                    = $object->rootRepos;
        after_rootRepos:        $result['root_repos'] = $rootRepos;

        $forkRepos                                    = $object->forkRepos;
        after_forkRepos:        $result['fork_repos'] = $forkRepos;

        $orgRepos                                   = $object->orgRepos;
        after_orgRepos:        $result['org_repos'] = $orgRepos;

        $totalPushes                                      = $object->totalPushes;
        after_totalPushes:        $result['total_pushes'] = $totalPushes;

        $totalWikis                                     = $object->totalWikis;
        after_totalWikis:        $result['total_wikis'] = $totalWikis;

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
