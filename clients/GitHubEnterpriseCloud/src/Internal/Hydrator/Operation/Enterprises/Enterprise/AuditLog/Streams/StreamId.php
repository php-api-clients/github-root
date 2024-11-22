<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Enterprises\Enterprise\AuditLog\Streams;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAuditLogStreamConfig;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity;
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

class StreamId implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAuditLogStreamConfig' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetAuditLogStreamConfig($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️UpdateAuditLogStream⚡️Response⚡️ApplicationJson⚡️UnprocessableEntity($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetAuditLogStreamConfig(array $payload): GetAuditLogStreamConfig
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['stream_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stream_type';
                goto after_streamType;
            }

            $properties['streamType'] = $value;

            after_streamType:

            $value = $payload['stream_details'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stream_details';
                goto after_streamDetails;
            }

            $properties['streamDetails'] = $value;

            after_streamDetails:

            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['paused_at'] ?? null;

            if ($value === null) {
                $properties['pausedAt'] = null;
                goto after_pausedAt;
            }

            $properties['pausedAt'] = $value;

            after_pausedAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAuditLogStreamConfig', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GetAuditLogStreamConfig::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GetAuditLogStreamConfig(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAuditLogStreamConfig', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️UpdateAuditLogStream⚡️Response⚡️ApplicationJson⚡️UnprocessableEntity(array $payload): UnprocessableEntity
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            $properties['errors'] = $value;

            after_errors:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(UnprocessableEntity::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new UnprocessableEntity(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAuditLogStreamConfig' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetAuditLogStreamConfig($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\UpdateAuditLogStream\Response\ApplicationJson\UnprocessableEntity' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️UpdateAuditLogStream⚡️Response⚡️ApplicationJson⚡️UnprocessableEntity($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetAuditLogStreamConfig(mixed $object): mixed
    {
        assert($object instanceof GetAuditLogStreamConfig);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $streamType                                     = $object->streamType;
        after_streamType:        $result['stream_type'] = $streamType;

        $streamDetails                                        = $object->streamDetails;
        after_streamDetails:        $result['stream_details'] = $streamDetails;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        $createdAt                                    = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        $updatedAt                                    = $object->updatedAt;
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $pausedAt = $object->pausedAt;

        if ($pausedAt === null) {
            goto after_pausedAt;
        }

        after_pausedAt:        $result['paused_at'] = $pausedAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️EnterpriseAdmin⚡️UpdateAuditLogStream⚡️Response⚡️ApplicationJson⚡️UnprocessableEntity(mixed $object): mixed
    {
        assert($object instanceof UnprocessableEntity);
        $result = [];

        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }

        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $errors                                = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;

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
