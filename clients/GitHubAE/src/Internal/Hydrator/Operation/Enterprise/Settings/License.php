<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Hydrator\Operation\Enterprise\Settings;

use ApiClients\Client\GitHubAE\Schema\LicenseInfo;
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

class License implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\LicenseInfo' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️LicenseInfo($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️LicenseInfo(array $payload): LicenseInfo
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['seats'] ?? null;

            if ($value === null) {
                $properties['seats'] = null;
                goto after_seats;
            }

            $properties['seats'] = $value;

            after_seats:

            $value = $payload['seats_used'] ?? null;

            if ($value === null) {
                $properties['seatsUsed'] = null;
                goto after_seatsUsed;
            }

            $properties['seatsUsed'] = $value;

            after_seatsUsed:

            $value = $payload['seats_available'] ?? null;

            if ($value === null) {
                $properties['seatsAvailable'] = null;
                goto after_seatsAvailable;
            }

            $properties['seatsAvailable'] = $value;

            after_seatsAvailable:

            $value = $payload['kind'] ?? null;

            if ($value === null) {
                $properties['kind'] = null;
                goto after_kind;
            }

            $properties['kind'] = $value;

            after_kind:

            $value = $payload['days_until_expiration'] ?? null;

            if ($value === null) {
                $properties['daysUntilExpiration'] = null;
                goto after_daysUntilExpiration;
            }

            $properties['daysUntilExpiration'] = $value;

            after_daysUntilExpiration:

            $value = $payload['expire_at'] ?? null;

            if ($value === null) {
                $properties['expireAt'] = null;
                goto after_expireAt;
            }

            $properties['expireAt'] = $value;

            after_expireAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\LicenseInfo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(LicenseInfo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new LicenseInfo(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\LicenseInfo', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\LicenseInfo' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️LicenseInfo($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️LicenseInfo(mixed $object): mixed
    {
        assert($object instanceof LicenseInfo);
        $result = [];

        $seats = $object->seats;

        if ($seats === null) {
            goto after_seats;
        }

        after_seats:        $result['seats'] = $seats;

        $seatsUsed = $object->seatsUsed;

        if ($seatsUsed === null) {
            goto after_seatsUsed;
        }

        after_seatsUsed:        $result['seats_used'] = $seatsUsed;

        $seatsAvailable = $object->seatsAvailable;

        if ($seatsAvailable === null) {
            goto after_seatsAvailable;
        }

        after_seatsAvailable:        $result['seats_available'] = $seatsAvailable;

        $kind = $object->kind;

        if ($kind === null) {
            goto after_kind;
        }

        after_kind:        $result['kind'] = $kind;

        $daysUntilExpiration = $object->daysUntilExpiration;

        if ($daysUntilExpiration === null) {
            goto after_daysUntilExpiration;
        }

        after_daysUntilExpiration:        $result['days_until_expiration'] = $daysUntilExpiration;

        $expireAt = $object->expireAt;

        if ($expireAt === null) {
            goto after_expireAt;
        }

        after_expireAt:        $result['expire_at'] = $expireAt;

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
