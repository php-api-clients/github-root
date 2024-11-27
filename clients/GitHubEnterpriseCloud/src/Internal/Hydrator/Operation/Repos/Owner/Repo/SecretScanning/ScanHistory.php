<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Repos\Owner\Repo\SecretScanning;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningScanHistory;
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

class ScanHistory implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningScanHistory' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SecretScanningScanHistory($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(array $payload): ServiceUnavailable
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ServiceUnavailable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ServiceUnavailable(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SecretScanningScanHistory(array $payload): SecretScanningScanHistory
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['incremental_scans'] ?? null;

            if ($value === null) {
                $properties['incrementalScans'] = null;
                goto after_incrementalScans;
            }

            $properties['incrementalScans'] = $value;

            after_incrementalScans:

            $value = $payload['pattern_update_scans'] ?? null;

            if ($value === null) {
                $properties['patternUpdateScans'] = null;
                goto after_patternUpdateScans;
            }

            $properties['patternUpdateScans'] = $value;

            after_patternUpdateScans:

            $value = $payload['backfill_scans'] ?? null;

            if ($value === null) {
                $properties['backfillScans'] = null;
                goto after_backfillScans;
            }

            $properties['backfillScans'] = $value;

            after_backfillScans:

            $value = $payload['custom_pattern_backfill_scans'] ?? null;

            if ($value === null) {
                $properties['customPatternBackfillScans'] = null;
                goto after_customPatternBackfillScans;
            }

            $properties['customPatternBackfillScans'] = $value;

            after_customPatternBackfillScans:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningScanHistory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(SecretScanningScanHistory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new SecretScanningScanHistory(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningScanHistory', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningScanHistory' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SecretScanningScanHistory($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operations⚡️CodeScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(mixed $object): mixed
    {
        assert($object instanceof ServiceUnavailable);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }

        after_code:        $result['code'] = $code;

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️SecretScanningScanHistory(mixed $object): mixed
    {
        assert($object instanceof SecretScanningScanHistory);
        $result = [];

        $incrementalScans = $object->incrementalScans;

        if ($incrementalScans === null) {
            goto after_incrementalScans;
        }

        static $incrementalScansSerializer0;

        if ($incrementalScansSerializer0 === null) {
            $incrementalScansSerializer0 = new SerializeArrayItems(...[]);
        }

        $incrementalScans                                           = $incrementalScansSerializer0->serialize($incrementalScans, $this);
        after_incrementalScans:        $result['incremental_scans'] = $incrementalScans;

        $patternUpdateScans = $object->patternUpdateScans;

        if ($patternUpdateScans === null) {
            goto after_patternUpdateScans;
        }

        static $patternUpdateScansSerializer0;

        if ($patternUpdateScansSerializer0 === null) {
            $patternUpdateScansSerializer0 = new SerializeArrayItems(...[]);
        }

        $patternUpdateScans                                              = $patternUpdateScansSerializer0->serialize($patternUpdateScans, $this);
        after_patternUpdateScans:        $result['pattern_update_scans'] = $patternUpdateScans;

        $backfillScans = $object->backfillScans;

        if ($backfillScans === null) {
            goto after_backfillScans;
        }

        static $backfillScansSerializer0;

        if ($backfillScansSerializer0 === null) {
            $backfillScansSerializer0 = new SerializeArrayItems(...[]);
        }

        $backfillScans                                        = $backfillScansSerializer0->serialize($backfillScans, $this);
        after_backfillScans:        $result['backfill_scans'] = $backfillScans;

        $customPatternBackfillScans = $object->customPatternBackfillScans;

        if ($customPatternBackfillScans === null) {
            goto after_customPatternBackfillScans;
        }

        static $customPatternBackfillScansSerializer0;

        if ($customPatternBackfillScansSerializer0 === null) {
            $customPatternBackfillScansSerializer0 = new SerializeArrayItems(...[]);
        }

        $customPatternBackfillScans                                                       = $customPatternBackfillScansSerializer0->serialize($customPatternBackfillScans, $this);
        after_customPatternBackfillScans:        $result['custom_pattern_backfill_scans'] = $customPatternBackfillScans;

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
