<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Scim\V2\Enterprises\Enterprise;

use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList;
use ApiClients\Client\GitHubEnterprise\Schema\ScimError;
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

class Groups implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GroupResponse' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GroupResponse($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList(array $payload): ScimEnterpriseGroupList
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $missingFields[] = 'schemas';
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:

            $value = $payload['total_results'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_results';
                goto after_totalResults;
            }

            $properties['totalResults'] = $value;

            after_totalResults:

            $value = $payload['Resources'] ?? null;

            if ($value === null) {
                $missingFields[] = 'Resources';
                goto after_resources;
            }

            $properties['resources'] = $value;

            after_resources:

            $value = $payload['start_index'] ?? null;

            if ($value === null) {
                $missingFields[] = 'start_index';
                goto after_startIndex;
            }

            $properties['startIndex'] = $value;

            after_startIndex:

            $value = $payload['items_per_page'] ?? null;

            if ($value === null) {
                $missingFields[] = 'items_per_page';
                goto after_itemsPerPage;
            }

            $properties['itemsPerPage'] = $value;

            after_itemsPerPage:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimEnterpriseGroupList::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimEnterpriseGroupList(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError(array $payload): ScimError
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

            $value = $payload['detail'] ?? null;

            if ($value === null) {
                $properties['detail'] = null;
                goto after_detail;
            }

            $properties['detail'] = $value;

            after_detail:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['scim_type'] ?? null;

            if ($value === null) {
                $properties['scimType'] = null;
                goto after_scimType;
            }

            $properties['scimType'] = $value;

            after_scimType:

            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $properties['schemas'] = null;
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GroupResponse(array $payload): GroupResponse
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['schemas'] ?? null;

            if ($value === null) {
                $missingFields[] = 'schemas';
                goto after_schemas;
            }

            $properties['schemas'] = $value;

            after_schemas:

            $value = $payload['external_id'] ?? null;

            if ($value === null) {
                $properties['externalId'] = null;
                goto after_externalId;
            }

            $properties['externalId'] = $value;

            after_externalId:

            $value = $payload['display_name'] ?? null;

            if ($value === null) {
                $properties['displayName'] = null;
                goto after_displayName;
            }

            $properties['displayName'] = $value;

            after_displayName:

            $value = $payload['members'] ?? null;

            if ($value === null) {
                $properties['members'] = null;
                goto after_members;
            }

            $properties['members'] = $value;

            after_members:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GroupResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GroupResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GroupResponse(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GroupResponse', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList($object),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GroupResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GroupResponse($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList(mixed $object): mixed
    {
        assert($object instanceof ScimEnterpriseGroupList);
        $result = [];

        $schemas = $object->schemas;
        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new SerializeArrayItems(...[]);
        }

        $schemas                                 = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        $totalResults                                       = $object->totalResults;
        after_totalResults:        $result['total_results'] = $totalResults;

        $resources = $object->resources;
        static $resourcesSerializer0;

        if ($resourcesSerializer0 === null) {
            $resourcesSerializer0 = new SerializeArrayItems(...[]);
        }

        $resources                                   = $resourcesSerializer0->serialize($resources, $this);
        after_resources:        $result['Resources'] = $resources;

        $startIndex                                     = $object->startIndex;
        after_startIndex:        $result['start_index'] = $startIndex;

        $itemsPerPage                                        = $object->itemsPerPage;
        after_itemsPerPage:        $result['items_per_page'] = $itemsPerPage;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        assert($object instanceof ScimError);
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

        $detail = $object->detail;

        if ($detail === null) {
            goto after_detail;
        }

        after_detail:        $result['detail'] = $detail;

        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }

        after_status:        $result['status'] = $status;

        $scimType = $object->scimType;

        if ($scimType === null) {
            goto after_scimType;
        }

        after_scimType:        $result['scim_type'] = $scimType;

        $schemas = $object->schemas;

        if ($schemas === null) {
            goto after_schemas;
        }

        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new SerializeArrayItems(...[]);
        }

        $schemas                                 = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GroupResponse(mixed $object): mixed
    {
        assert($object instanceof GroupResponse);
        $result = [];

        $schemas = $object->schemas;
        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new SerializeArrayItems(...[]);
        }

        $schemas                                 = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        $externalId = $object->externalId;

        if ($externalId === null) {
            goto after_externalId;
        }

        after_externalId:        $result['external_id'] = $externalId;

        $displayName = $object->displayName;

        if ($displayName === null) {
            goto after_displayName;
        }

        after_displayName:        $result['display_name'] = $displayName;

        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }

        static $membersSerializer0;

        if ($membersSerializer0 === null) {
            $membersSerializer0 = new SerializeArrayItems(...[]);
        }

        $members                                 = $membersSerializer0->serialize($members, $this);
        after_members:        $result['members'] = $members;

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
