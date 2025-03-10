<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Repos\Owner\Repo\DependencyGraph;

use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom;
use ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo;
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

class Sbom implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom(array $payload): DependencyGraphSpdxSbom
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['sbom'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sbom';
                goto after_sbom;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sbom';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sbom'] = $value;

            after_sbom:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(DependencyGraphSpdxSbom::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new DependencyGraphSpdxSbom(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['SPDXID'] ?? null;

            if ($value === null) {
                $missingFields[] = 'SPDXID';
                goto after_spdxid;
            }

            $properties['spdxid'] = $value;

            after_spdxid:

            $value = $payload['spdx_version'] ?? null;

            if ($value === null) {
                $missingFields[] = 'spdx_version';
                goto after_spdxVersion;
            }

            $properties['spdxVersion'] = $value;

            after_spdxVersion:

            $value = $payload['comment'] ?? null;

            if ($value === null) {
                $properties['comment'] = null;
                goto after_comment;
            }

            $properties['comment'] = $value;

            after_comment:

            $value = $payload['creation_info'] ?? null;

            if ($value === null) {
                $missingFields[] = 'creation_info';
                goto after_creationInfo;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'creationInfo';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['creationInfo'] = $value;

            after_creationInfo:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['data_license'] ?? null;

            if ($value === null) {
                $missingFields[] = 'data_license';
                goto after_dataLicense;
            }

            $properties['dataLicense'] = $value;

            after_dataLicense:

            $value = $payload['document_namespace'] ?? null;

            if ($value === null) {
                $missingFields[] = 'document_namespace';
                goto after_documentNamespace;
            }

            $properties['documentNamespace'] = $value;

            after_documentNamespace:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'packages';
                goto after_packages;
            }

            $properties['packages'] = $value;

            after_packages:

            $value = $payload['relationships'] ?? null;

            if ($value === null) {
                $properties['relationships'] = null;
                goto after_relationships;
            }

            $properties['relationships'] = $value;

            after_relationships:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo(array $payload): CreationInfo
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['created'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created';
                goto after_created;
            }

            $properties['created'] = $value;

            after_created:

            $value = $payload['creators'] ?? null;

            if ($value === null) {
                $missingFields[] = 'creators';
                goto after_creators;
            }

            $properties['creators'] = $value;

            after_creators:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CreationInfo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CreationInfo(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom($object),
                'ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($object),
                'ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom(mixed $object): mixed
    {
        assert($object instanceof DependencyGraphSpdxSbom);
        $result = [];

        $sbom                              = $object->sbom;
        $sbom                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($sbom);
        after_sbom:        $result['sbom'] = $sbom;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom(mixed $object): mixed
    {
        assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom\Sbom);
        $result = [];

        $spdxid                                = $object->spdxid;
        after_spdxid:        $result['SPDXID'] = $spdxid;

        $spdxVersion                                      = $object->spdxVersion;
        after_spdxVersion:        $result['spdx_version'] = $spdxVersion;

        $comment = $object->comment;

        if ($comment === null) {
            goto after_comment;
        }

        after_comment:        $result['comment'] = $comment;

        $creationInfo                                       = $object->creationInfo;
        $creationInfo                                       = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($creationInfo);
        after_creationInfo:        $result['creation_info'] = $creationInfo;

        $name                              = $object->name;
        after_name:        $result['name'] = $name;

        $dataLicense                                      = $object->dataLicense;
        after_dataLicense:        $result['data_license'] = $dataLicense;

        $documentNamespace                                            = $object->documentNamespace;
        after_documentNamespace:        $result['document_namespace'] = $documentNamespace;

        $packages = $object->packages;
        static $packagesSerializer0;

        if ($packagesSerializer0 === null) {
            $packagesSerializer0 = new SerializeArrayItems(...[]);
        }

        $packages                                  = $packagesSerializer0->serialize($packages, $this);
        after_packages:        $result['packages'] = $packages;

        $relationships = $object->relationships;

        if ($relationships === null) {
            goto after_relationships;
        }

        static $relationshipsSerializer0;

        if ($relationshipsSerializer0 === null) {
            $relationshipsSerializer0 = new SerializeArrayItems(...[]);
        }

        $relationships                                       = $relationshipsSerializer0->serialize($relationships, $this);
        after_relationships:        $result['relationships'] = $relationships;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo(mixed $object): mixed
    {
        assert($object instanceof CreationInfo);
        $result = [];

        $created                                 = $object->created;
        after_created:        $result['created'] = $created;

        $creators = $object->creators;
        static $creatorsSerializer0;

        if ($creatorsSerializer0 === null) {
            $creatorsSerializer0 = new SerializeArrayItems(...[]);
        }

        $creators                                  = $creatorsSerializer0->serialize($creators, $this);
        after_creators:        $result['creators'] = $creators;

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
