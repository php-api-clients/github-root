<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Hydrator\Operation\Repos\Owner\Repo\Actions\Runs\RunId;

use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable;
use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Macos;
use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Ubuntu;
use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Windows;
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

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class Timing implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage($payload),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable($payload),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Ubuntu' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($payload),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Macos' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($payload),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Windows' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage(array $payload): WorkflowRunUsage
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['billable'] ?? null;

            if ($value === null) {
                $missingFields[] = 'billable';
                goto after_billable;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'billable';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['billable'] = $value;

            after_billable:

            $value = $payload['run_duration_ms'] ?? null;

            if ($value === null) {
                $properties['runDurationMs'] = null;
                goto after_runDurationMs;
            }

            $properties['runDurationMs'] = $value;

            after_runDurationMs:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(WorkflowRunUsage::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new WorkflowRunUsage(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable(array $payload): Billable
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['UBUNTU'] ?? null;

            if ($value === null) {
                $properties['ubuntu'] = null;
                goto after_ubuntu;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'ubuntu';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['ubuntu'] = $value;

            after_ubuntu:

            $value = $payload['MACOS'] ?? null;

            if ($value === null) {
                $properties['macos'] = null;
                goto after_macos;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'macos';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['macos'] = $value;

            after_macos:

            $value = $payload['WINDOWS'] ?? null;

            if ($value === null) {
                $properties['windows'] = null;
                goto after_windows;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'windows';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['windows'] = $value;

            after_windows:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Billable::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Billable(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu(array $payload): Ubuntu
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_ms';
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            $properties['jobs'] = $value;

            after_jobs:

            $value = $payload['job_runs'] ?? null;

            if ($value === null) {
                $properties['jobRuns'] = null;
                goto after_jobRuns;
            }

            $properties['jobRuns'] = $value;

            after_jobRuns:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Ubuntu::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Ubuntu(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Ubuntu', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos(array $payload): Macos
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_ms';
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            $properties['jobs'] = $value;

            after_jobs:

            $value = $payload['job_runs'] ?? null;

            if ($value === null) {
                $properties['jobRuns'] = null;
                goto after_jobRuns;
            }

            $properties['jobRuns'] = $value;

            after_jobRuns:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Macos', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Macos::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Macos(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Macos', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows(array $payload): Windows
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_ms'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_ms';
                goto after_totalMs;
            }

            $properties['totalMs'] = $value;

            after_totalMs:

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            $properties['jobs'] = $value;

            after_jobs:

            $value = $payload['job_runs'] ?? null;

            if ($value === null) {
                $properties['jobRuns'] = null;
                goto after_jobRuns;
            }

            $properties['jobRuns'] = $value;

            after_jobRuns:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Windows', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Windows::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Windows(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Windows', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage($object),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable($object),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Ubuntu' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($object),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Macos' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($object),
                'ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage\Billable\Windows' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage(mixed $object): mixed
    {
        assert($object instanceof WorkflowRunUsage);
        $result = [];

        $billable                                  = $object->billable;
        $billable                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable($billable);
        after_billable:        $result['billable'] = $billable;

        $runDurationMs = $object->runDurationMs;

        if ($runDurationMs === null) {
            goto after_runDurationMs;
        }

        after_runDurationMs:        $result['run_duration_ms'] = $runDurationMs;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable(mixed $object): mixed
    {
        assert($object instanceof Billable);
        $result = [];

        $ubuntu = $object->ubuntu;

        if ($ubuntu === null) {
            goto after_ubuntu;
        }

        $ubuntu                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu($ubuntu);
        after_ubuntu:        $result['UBUNTU'] = $ubuntu;

        $macos = $object->macos;

        if ($macos === null) {
            goto after_macos;
        }

        $macos                               = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos($macos);
        after_macos:        $result['MACOS'] = $macos;

        $windows = $object->windows;

        if ($windows === null) {
            goto after_windows;
        }

        $windows                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows($windows);
        after_windows:        $result['WINDOWS'] = $windows;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Ubuntu(mixed $object): mixed
    {
        assert($object instanceof Ubuntu);
        $result = [];

        $totalMs                                  = $object->totalMs;
        after_totalMs:        $result['total_ms'] = $totalMs;

        $jobs                              = $object->jobs;
        after_jobs:        $result['jobs'] = $jobs;

        $jobRuns = $object->jobRuns;

        if ($jobRuns === null) {
            goto after_jobRuns;
        }

        static $jobRunsSerializer0;

        if ($jobRunsSerializer0 === null) {
            $jobRunsSerializer0 = new SerializeArrayItems(...[]);
        }

        $jobRuns                                  = $jobRunsSerializer0->serialize($jobRuns, $this);
        after_jobRuns:        $result['job_runs'] = $jobRuns;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Macos(mixed $object): mixed
    {
        assert($object instanceof Macos);
        $result = [];

        $totalMs                                  = $object->totalMs;
        after_totalMs:        $result['total_ms'] = $totalMs;

        $jobs                              = $object->jobs;
        after_jobs:        $result['jobs'] = $jobs;

        $jobRuns = $object->jobRuns;

        if ($jobRuns === null) {
            goto after_jobRuns;
        }

        static $jobRunsSerializer0;

        if ($jobRunsSerializer0 === null) {
            $jobRunsSerializer0 = new SerializeArrayItems(...[]);
        }

        $jobRuns                                  = $jobRunsSerializer0->serialize($jobRuns, $this);
        after_jobRuns:        $result['job_runs'] = $jobRuns;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️WorkflowRunUsage⚡️Billable⚡️Windows(mixed $object): mixed
    {
        assert($object instanceof Windows);
        $result = [];

        $totalMs                                  = $object->totalMs;
        after_totalMs:        $result['total_ms'] = $totalMs;

        $jobs                              = $object->jobs;
        after_jobs:        $result['jobs'] = $jobs;

        $jobRuns = $object->jobRuns;

        if ($jobRuns === null) {
            goto after_jobRuns;
        }

        static $jobRunsSerializer0;

        if ($jobRunsSerializer0 === null) {
            $jobRunsSerializer0 = new SerializeArrayItems(...[]);
        }

        $jobRuns                                  = $jobRunsSerializer0->serialize($jobRuns, $this);
        after_jobRuns:        $result['job_runs'] = $jobRuns;

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
