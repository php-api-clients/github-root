<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Scim\V2\Enterprises\Enterprise;

use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList;
use ApiClients\Client\GitHubEnterprise\Schema\ScimError;
use ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
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
            'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\UserResponse' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList(array $payload): ScimEnterpriseUserList
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScimEnterpriseUserList::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScimEnterpriseUserList(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList', $exception, stack: $this->hydrationStack);
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

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse(array $payload): UserResponse
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

            $value = $payload['active'] ?? null;

            if ($value === null) {
                $missingFields[] = 'active';
                goto after_active;
            }

            $properties['active'] = $value;

            after_active:

            $value = $payload['user_name'] ?? null;

            if ($value === null) {
                $properties['userName'] = null;
                goto after_userName;
            }

            $properties['userName'] = $value;

            after_userName:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'name';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['display_name'] ?? null;

            if ($value === null) {
                $properties['displayName'] = null;
                goto after_displayName;
            }

            $properties['displayName'] = $value;

            after_displayName:

            $value = $payload['emails'] ?? null;

            if ($value === null) {
                $missingFields[] = 'emails';
                goto after_emails;
            }

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['roles'] ?? null;

            if ($value === null) {
                $properties['roles'] = null;
                goto after_roles;
            }

            $properties['roles'] = $value;

            after_roles:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(UserResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new UserResponse(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserResponse', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse(array $payload): UserNameResponse
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['formatted'] ?? null;

            if ($value === null) {
                $properties['formatted'] = null;
                goto after_formatted;
            }

            $properties['formatted'] = $value;

            after_formatted:

            $value = $payload['family_name'] ?? null;

            if ($value === null) {
                $properties['familyName'] = null;
                goto after_familyName;
            }

            $properties['familyName'] = $value;

            after_familyName:

            $value = $payload['given_name'] ?? null;

            if ($value === null) {
                $properties['givenName'] = null;
                goto after_givenName;
            }

            $properties['givenName'] = $value;

            after_givenName:

            $value = $payload['middle_name'] ?? null;

            if ($value === null) {
                $properties['middleName'] = null;
                goto after_middleName;
            }

            $properties['middleName'] = $value;

            after_middleName:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(UserNameResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new UserNameResponse(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList($object),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError($object),
                'ApiClients\Client\GitHubEnterprise\Schema\UserResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse($object),
                'ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList(mixed $object): mixed
    {
        assert($object instanceof ScimEnterpriseUserList);
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse(mixed $object): mixed
    {
        assert($object instanceof UserResponse);
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

        $active                                = $object->active;
        after_active:        $result['active'] = $active;

        $userName = $object->userName;

        if ($userName === null) {
            goto after_userName;
        }

        after_userName:        $result['user_name'] = $userName;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        $name                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($name);
        after_name:        $result['name'] = $name;

        $displayName = $object->displayName;

        if ($displayName === null) {
            goto after_displayName;
        }

        after_displayName:        $result['display_name'] = $displayName;

        $emails = $object->emails;
        static $emailsSerializer0;

        if ($emailsSerializer0 === null) {
            $emailsSerializer0 = new SerializeArrayItems(...[]);
        }

        $emails                                = $emailsSerializer0->serialize($emails, $this);
        after_emails:        $result['emails'] = $emails;

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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse(mixed $object): mixed
    {
        assert($object instanceof UserNameResponse);
        $result = [];

        $formatted = $object->formatted;

        if ($formatted === null) {
            goto after_formatted;
        }

        after_formatted:        $result['formatted'] = $formatted;

        $familyName = $object->familyName;

        if ($familyName === null) {
            goto after_familyName;
        }

        after_familyName:        $result['family_name'] = $familyName;

        $givenName = $object->givenName;

        if ($givenName === null) {
            goto after_givenName;
        }

        after_givenName:        $result['given_name'] = $givenName;

        $middleName = $object->middleName;

        if ($middleName === null) {
            goto after_middleName;
        }

        after_middleName:        $result['middle_name'] = $middleName;

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
