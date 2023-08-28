<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Scim\V2\Organizations\Org;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList;
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

class Users implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList(array $payload): ScimUserList
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

            $value = $payload['items_per_page'] ?? null;

            if ($value === null) {
                $missingFields[] = 'items_per_page';
                goto after_itemsPerPage;
            }

            $properties['itemsPerPage'] = $value;

            after_itemsPerPage:

            $value = $payload['start_index'] ?? null;

            if ($value === null) {
                $missingFields[] = 'start_index';
                goto after_startIndex;
            }

            $properties['startIndex'] = $value;

            after_startIndex:

            $value = $payload['Resources'] ?? null;

            if ($value === null) {
                $missingFields[] = 'Resources';
                goto after_resources;
            }

            $properties['resources'] = $value;

            after_resources:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimUserList::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimUserList(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError(array $payload): ScimError
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser(array $payload): ScimUser
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

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['external_id'] ?? null;

            if ($value === null) {
                $properties['externalId'] = null;
                goto after_externalId;
            }

            $properties['externalId'] = $value;

            after_externalId:

            $value = $payload['user_name'] ?? null;

            if ($value === null) {
                $properties['userName'] = null;
                goto after_userName;
            }

            $properties['userName'] = $value;

            after_userName:

            $value = $payload['display_name'] ?? null;

            if ($value === null) {
                $properties['displayName'] = null;
                goto after_displayName;
            }

            $properties['displayName'] = $value;

            after_displayName:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'name';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $missingFields[] = 'emails';
                goto after_emails;
            }

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['active'] ?? null;

            if ($value === null) {
                $missingFields[] = 'active';
                goto after_active;
            }

            $properties['active'] = $value;

            after_active:

            $value = $payload['meta'] ?? null;

            if ($value === null) {
                $missingFields[] = 'meta';
                goto after_meta;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'meta';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['meta'] = $value;

            after_meta:

            $value = $payload['organization_id'] ?? null;

            if ($value === null) {
                $properties['organizationId'] = null;
                goto after_organizationId;
            }

            $properties['organizationId'] = $value;

            after_organizationId:

            $value = $payload['operations'] ?? null;

            if ($value === null) {
                $properties['operations'] = null;
                goto after_operations;
            }

            $properties['operations'] = $value;

            after_operations:

            $value = $payload['groups'] ?? null;

            if ($value === null) {
                $properties['groups'] = null;
                goto after_groups;
            }

            $properties['groups'] = $value;

            after_groups:

            $value = $payload['roles'] ?? null;

            if ($value === null) {
                $properties['roles'] = null;
                goto after_roles;
            }

            $properties['roles'] = $value;

            after_roles:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimUser(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name(array $payload): Name
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['given_name'] ?? null;

            if ($value === null) {
                $properties['givenName'] = null;
                goto after_givenName;
            }

            $properties['givenName'] = $value;

            after_givenName:

            $value = $payload['family_name'] ?? null;

            if ($value === null) {
                $properties['familyName'] = null;
                goto after_familyName;
            }

            $properties['familyName'] = $value;

            after_familyName:

            $value = $payload['formatted'] ?? null;

            if ($value === null) {
                $properties['formatted'] = null;
                goto after_formatted;
            }

            $properties['formatted'] = $value;

            after_formatted:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Name::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Name(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta(array $payload): Meta
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['resource_type'] ?? null;

            if ($value === null) {
                $properties['resourceType'] = null;
                goto after_resourceType;
            }

            $properties['resourceType'] = $value;

            after_resourceType:

            $value = $payload['created'] ?? null;

            if ($value === null) {
                $properties['created'] = null;
                goto after_created;
            }

            $properties['created'] = $value;

            after_created:

            $value = $payload['last_modified'] ?? null;

            if ($value === null) {
                $properties['lastModified'] = null;
                goto after_lastModified;
            }

            $properties['lastModified'] = $value;

            after_lastModified:

            $value = $payload['location'] ?? null;

            if ($value === null) {
                $properties['location'] = null;
                goto after_location;
            }

            $properties['location'] = $value;

            after_location:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Meta::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Meta(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList(mixed $object): mixed
    {
        assert($object instanceof ScimUserList);
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

        $itemsPerPage                                        = $object->itemsPerPage;
        after_itemsPerPage:        $result['items_per_page'] = $itemsPerPage;

        $startIndex                                     = $object->startIndex;
        after_startIndex:        $result['start_index'] = $startIndex;

        $resources = $object->resources;
        static $resourcesSerializer0;

        if ($resourcesSerializer0 === null) {
            $resourcesSerializer0 = new SerializeArrayItems(...[]);
        }

        $resources                                   = $resourcesSerializer0->serialize($resources, $this);
        after_resources:        $result['Resources'] = $resources;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError(mixed $object): mixed
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser(mixed $object): mixed
    {
        assert($object instanceof ScimUser);
        $result = [];

        $schemas = $object->schemas;
        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new SerializeArrayItems(...[]);
        }

        $schemas                                 = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $externalId = $object->externalId;

        if ($externalId === null) {
            goto after_externalId;
        }

        after_externalId:        $result['external_id'] = $externalId;

        $userName = $object->userName;

        if ($userName === null) {
            goto after_userName;
        }

        after_userName:        $result['user_name'] = $userName;

        $displayName = $object->displayName;

        if ($displayName === null) {
            goto after_displayName;
        }

        after_displayName:        $result['display_name'] = $displayName;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        $name                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($name);
        after_name:        $result['name'] = $name;

        $emails = $object->emails;
        static $emailsSerializer0;

        if ($emailsSerializer0 === null) {
            $emailsSerializer0 = new SerializeArrayItems(...[]);
        }

        $emails                                = $emailsSerializer0->serialize($emails, $this);
        after_emails:        $result['emails'] = $emails;

        $active                                = $object->active;
        after_active:        $result['active'] = $active;

        $meta                              = $object->meta;
        $meta                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($meta);
        after_meta:        $result['meta'] = $meta;

        $organizationId = $object->organizationId;

        if ($organizationId === null) {
            goto after_organizationId;
        }

        after_organizationId:        $result['organization_id'] = $organizationId;

        $operations = $object->operations;

        if ($operations === null) {
            goto after_operations;
        }

        static $operationsSerializer0;

        if ($operationsSerializer0 === null) {
            $operationsSerializer0 = new SerializeArrayItems(...[]);
        }

        $operations                                    = $operationsSerializer0->serialize($operations, $this);
        after_operations:        $result['operations'] = $operations;

        $groups = $object->groups;

        if ($groups === null) {
            goto after_groups;
        }

        static $groupsSerializer0;

        if ($groupsSerializer0 === null) {
            $groupsSerializer0 = new SerializeArrayItems(...[]);
        }

        $groups                                = $groupsSerializer0->serialize($groups, $this);
        after_groups:        $result['groups'] = $groups;

        $roles = $object->roles;

        if ($roles === null) {
            goto after_roles;
        }

        static $rolesSerializer0;

        if ($rolesSerializer0 === null) {
            $rolesSerializer0 = new SerializeArrayItems(...[]);
        }

        $roles                               = $rolesSerializer0->serialize($roles, $this);
        after_roles:        $result['roles'] = $roles;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name(mixed $object): mixed
    {
        assert($object instanceof Name);
        $result = [];

        $givenName = $object->givenName;

        if ($givenName === null) {
            goto after_givenName;
        }

        after_givenName:        $result['given_name'] = $givenName;

        $familyName = $object->familyName;

        if ($familyName === null) {
            goto after_familyName;
        }

        after_familyName:        $result['family_name'] = $familyName;

        $formatted = $object->formatted;

        if ($formatted === null) {
            goto after_formatted;
        }

        after_formatted:        $result['formatted'] = $formatted;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta(mixed $object): mixed
    {
        assert($object instanceof Meta);
        $result = [];

        $resourceType = $object->resourceType;

        if ($resourceType === null) {
            goto after_resourceType;
        }

        after_resourceType:        $result['resource_type'] = $resourceType;

        $created = $object->created;

        if ($created === null) {
            goto after_created;
        }

        after_created:        $result['created'] = $created;

        $lastModified = $object->lastModified;

        if ($lastModified === null) {
            goto after_lastModified;
        }

        after_lastModified:        $result['last_modified'] = $lastModified;

        $location = $object->location;

        if ($location === null) {
            goto after_location;
        }

        after_location:        $result['location'] = $location;

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
