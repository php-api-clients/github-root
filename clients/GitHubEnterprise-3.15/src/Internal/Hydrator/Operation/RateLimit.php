<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation;

use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview;
use ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview\Resources;
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

class RateLimit implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview\Resources' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview⚡️Resources($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\RateLimit' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview(array $payload): RateLimitOverview
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['resources'] ?? null;

            if ($value === null) {
                $missingFields[] = 'resources';
                goto after_resources;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'resources';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview⚡️Resources($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['resources'] = $value;

            after_resources:

            $value = $payload['rate'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rate';
                goto after_rate;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rate';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rate'] = $value;

            after_rate:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(RateLimitOverview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new RateLimitOverview(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview⚡️Resources(array $payload): Resources
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['core'] ?? null;

            if ($value === null) {
                $missingFields[] = 'core';
                goto after_core;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'core';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['core'] = $value;

            after_core:

            $value = $payload['graphql'] ?? null;

            if ($value === null) {
                $properties['graphql'] = null;
                goto after_graphql;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'graphql';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['graphql'] = $value;

            after_graphql:

            $value = $payload['search'] ?? null;

            if ($value === null) {
                $missingFields[] = 'search';
                goto after_search;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'search';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['search'] = $value;

            after_search:

            $value = $payload['code_search'] ?? null;

            if ($value === null) {
                $properties['codeSearch'] = null;
                goto after_codeSearch;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'codeSearch';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['codeSearch'] = $value;

            after_codeSearch:

            $value = $payload['source_import'] ?? null;

            if ($value === null) {
                $properties['sourceImport'] = null;
                goto after_sourceImport;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sourceImport';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sourceImport'] = $value;

            after_sourceImport:

            $value = $payload['integration_manifest'] ?? null;

            if ($value === null) {
                $properties['integrationManifest'] = null;
                goto after_integrationManifest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'integrationManifest';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['integrationManifest'] = $value;

            after_integrationManifest:

            $value = $payload['code_scanning_upload'] ?? null;

            if ($value === null) {
                $properties['codeScanningUpload'] = null;
                goto after_codeScanningUpload;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'codeScanningUpload';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['codeScanningUpload'] = $value;

            after_codeScanningUpload:

            $value = $payload['actions_runner_registration'] ?? null;

            if ($value === null) {
                $properties['actionsRunnerRegistration'] = null;
                goto after_actionsRunnerRegistration;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'actionsRunnerRegistration';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['actionsRunnerRegistration'] = $value;

            after_actionsRunnerRegistration:

            $value = $payload['scim'] ?? null;

            if ($value === null) {
                $properties['scim'] = null;
                goto after_scim;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'scim';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['scim'] = $value;

            after_scim:

            $value = $payload['code_scanning_autofix'] ?? null;

            if ($value === null) {
                $properties['codeScanningAutofix'] = null;
                goto after_codeScanningAutofix;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'codeScanningAutofix';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['codeScanningAutofix'] = $value;

            after_codeScanningAutofix:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview\Resources', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Resources::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Resources(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview\Resources', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\RateLimit
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['limit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'limit';
                goto after_limit;
            }

            $properties['limit'] = $value;

            after_limit:

            $value = $payload['remaining'] ?? null;

            if ($value === null) {
                $missingFields[] = 'remaining';
                goto after_remaining;
            }

            $properties['remaining'] = $value;

            after_remaining:

            $value = $payload['reset'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reset';
                goto after_reset;
            }

            $properties['reset'] = $value;

            after_reset:

            $value = $payload['used'] ?? null;

            if ($value === null) {
                $missingFields[] = 'used';
                goto after_used;
            }

            $properties['used'] = $value;

            after_used:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RateLimit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\RateLimit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\RateLimit(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RateLimit', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError(array $payload): BasicError
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview\Resources' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview⚡️Resources($object),
                'ApiClients\Client\GitHubEnterprise\Schema\RateLimit' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($object),
                'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview(mixed $object): mixed
    {
        assert($object instanceof RateLimitOverview);
        $result = [];

        $resources                                   = $object->resources;
        $resources                                   = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview⚡️Resources($resources);
        after_resources:        $result['resources'] = $resources;

        $rate                              = $object->rate;
        $rate                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($rate);
        after_rate:        $result['rate'] = $rate;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimitOverview⚡️Resources(mixed $object): mixed
    {
        assert($object instanceof Resources);
        $result = [];

        $core                              = $object->core;
        $core                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($core);
        after_core:        $result['core'] = $core;

        $graphql = $object->graphql;

        if ($graphql === null) {
            goto after_graphql;
        }

        $graphql                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($graphql);
        after_graphql:        $result['graphql'] = $graphql;

        $search                                = $object->search;
        $search                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($search);
        after_search:        $result['search'] = $search;

        $codeSearch = $object->codeSearch;

        if ($codeSearch === null) {
            goto after_codeSearch;
        }

        $codeSearch                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($codeSearch);
        after_codeSearch:        $result['code_search'] = $codeSearch;

        $sourceImport = $object->sourceImport;

        if ($sourceImport === null) {
            goto after_sourceImport;
        }

        $sourceImport                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($sourceImport);
        after_sourceImport:        $result['source_import'] = $sourceImport;

        $integrationManifest = $object->integrationManifest;

        if ($integrationManifest === null) {
            goto after_integrationManifest;
        }

        $integrationManifest                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($integrationManifest);
        after_integrationManifest:        $result['integration_manifest'] = $integrationManifest;

        $codeScanningUpload = $object->codeScanningUpload;

        if ($codeScanningUpload === null) {
            goto after_codeScanningUpload;
        }

        $codeScanningUpload                                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($codeScanningUpload);
        after_codeScanningUpload:        $result['code_scanning_upload'] = $codeScanningUpload;

        $actionsRunnerRegistration = $object->actionsRunnerRegistration;

        if ($actionsRunnerRegistration === null) {
            goto after_actionsRunnerRegistration;
        }

        $actionsRunnerRegistration                                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($actionsRunnerRegistration);
        after_actionsRunnerRegistration:        $result['actions_runner_registration'] = $actionsRunnerRegistration;

        $scim = $object->scim;

        if ($scim === null) {
            goto after_scim;
        }

        $scim                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($scim);
        after_scim:        $result['scim'] = $scim;

        $codeScanningAutofix = $object->codeScanningAutofix;

        if ($codeScanningAutofix === null) {
            goto after_codeScanningAutofix;
        }

        $codeScanningAutofix                                               = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit($codeScanningAutofix);
        after_codeScanningAutofix:        $result['code_scanning_autofix'] = $codeScanningAutofix;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RateLimit(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\RateLimit);
        $result = [];

        $limit                               = $object->limit;
        after_limit:        $result['limit'] = $limit;

        $remaining                                   = $object->remaining;
        after_remaining:        $result['remaining'] = $remaining;

        $reset                               = $object->reset;
        after_reset:        $result['reset'] = $reset;

        $used                              = $object->used;
        after_used:        $result['used'] = $used;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError(mixed $object): mixed
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
