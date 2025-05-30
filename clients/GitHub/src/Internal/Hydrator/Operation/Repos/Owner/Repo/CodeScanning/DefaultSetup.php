<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Repos\Owner\Repo\CodeScanning;

use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable;
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

class DefaultSetup implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetup($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($payload),
                'ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetupUpdateResponse($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetup(array $payload): CodeScanningDefaultSetup
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['languages'] ?? null;

            if ($value === null) {
                $properties['languages'] = null;
                goto after_languages;
            }

            $properties['languages'] = $value;

            after_languages:

            $value = $payload['runner_type'] ?? null;

            if ($value === null) {
                $properties['runnerType'] = null;
                goto after_runnerType;
            }

            $properties['runnerType'] = $value;

            after_runnerType:

            $value = $payload['runner_label'] ?? null;

            if ($value === null) {
                $properties['runnerLabel'] = null;
                goto after_runnerLabel;
            }

            $properties['runnerLabel'] = $value;

            after_runnerLabel:

            $value = $payload['query_suite'] ?? null;

            if ($value === null) {
                $properties['querySuite'] = null;
                goto after_querySuite;
            }

            $properties['querySuite'] = $value;

            after_querySuite:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['schedule'] ?? null;

            if ($value === null) {
                $properties['schedule'] = null;
                goto after_schedule;
            }

            $properties['schedule'] = $value;

            after_schedule:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningDefaultSetup::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningDefaultSetup(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
        $missingFields = [];
        try {
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(array $payload): ServiceUnavailable
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ServiceUnavailable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ServiceUnavailable(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetupUpdateResponse(array $payload): CodeScanningDefaultSetupUpdateResponse
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

            $value = $payload['run_url'] ?? null;

            if ($value === null) {
                $properties['runUrl'] = null;
                goto after_runUrl;
            }

            $properties['runUrl'] = $value;

            after_runUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CodeScanningDefaultSetupUpdateResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CodeScanningDefaultSetupUpdateResponse(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetup($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\Operations\SecretScanning\ListAlertsForEnterprise\Response\ApplicationJson\ServiceUnavailable' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable($object),
                'ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetupUpdateResponse($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetup(mixed $object): mixed
    {
        assert($object instanceof CodeScanningDefaultSetup);
        $result = [];

        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }

        after_state:        $result['state'] = $state;

        $languages = $object->languages;

        if ($languages === null) {
            goto after_languages;
        }

        static $languagesSerializer0;

        if ($languagesSerializer0 === null) {
            $languagesSerializer0 = new SerializeArrayItems(...[]);
        }

        $languages                                   = $languagesSerializer0->serialize($languages, $this);
        after_languages:        $result['languages'] = $languages;

        $runnerType = $object->runnerType;

        if ($runnerType === null) {
            goto after_runnerType;
        }

        after_runnerType:        $result['runner_type'] = $runnerType;

        $runnerLabel = $object->runnerLabel;

        if ($runnerLabel === null) {
            goto after_runnerLabel;
        }

        after_runnerLabel:        $result['runner_label'] = $runnerLabel;

        $querySuite = $object->querySuite;

        if ($querySuite === null) {
            goto after_querySuite;
        }

        after_querySuite:        $result['query_suite'] = $querySuite;

        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }

        after_updatedAt:        $result['updated_at'] = $updatedAt;

        $schedule = $object->schedule;

        if ($schedule === null) {
            goto after_schedule;
        }

        after_schedule:        $result['schedule'] = $schedule;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

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

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️ApplicationJson⚡️ServiceUnavailable(mixed $object): mixed
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

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CodeScanningDefaultSetupUpdateResponse(mixed $object): mixed
    {
        assert($object instanceof CodeScanningDefaultSetupUpdateResponse);
        $result = [];

        $runId = $object->runId;

        if ($runId === null) {
            goto after_runId;
        }

        after_runId:        $result['run_id'] = $runId;

        $runUrl = $object->runUrl;

        if ($runUrl === null) {
            goto after_runUrl;
        }

        after_runUrl:        $result['run_url'] = $runUrl;

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
