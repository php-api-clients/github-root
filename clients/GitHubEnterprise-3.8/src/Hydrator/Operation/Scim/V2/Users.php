<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Scim\V2;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Users implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\UserResponse' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserEmailsResponse($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\UserRole' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserRole($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList
    {
        $properties = []; 
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

            static $resourcesCaster1;

            if ($resourcesCaster1 === null) {
                $resourcesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserResponse',
));
            }

            $value = $resourcesCaster1->cast($value, $this);

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\UserResponse
    {
        $properties = []; 
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($value);
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

            static $emailsCaster1;

            if ($emailsCaster1 === null) {
                $emailsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserEmailsResponse',
));
            }

            $value = $emailsCaster1->cast($value, $this);

            $properties['emails'] = $value;

            after_emails:

            $value = $payload['roles'] ?? null;

            if ($value === null) {
                $properties['roles'] = null;
                goto after_roles;
            }

            static $rolesCaster1;

            if ($rolesCaster1 === null) {
                $rolesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserRole',
));
            }

            $value = $rolesCaster1->cast($value, $this);

            $properties['roles'] = $value;

            after_roles:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\UserResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\UserResponse(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserResponse', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserEmailsResponse(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['value'] ?? null;

            if ($value === null) {
                $missingFields[] = 'value';
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['primary'] ?? null;

            if ($value === null) {
                $properties['primary'] = null;
                goto after_primary;
            }

            $properties['primary'] = $value;

            after_primary:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserRole(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\UserRole
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['display'] ?? null;

            if ($value === null) {
                $properties['display'] = null;
                goto after_display;
            }

            $properties['display'] = $value;

            after_display:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $missingFields[] = 'value';
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

            $value = $payload['primary'] ?? null;

            if ($value === null) {
                $properties['primary'] = null;
                goto after_primary;
            }

            $properties['primary'] = $value;

            after_primary:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserRole', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\UserRole::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\UserRole(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\UserRole', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ScimError
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ScimError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\ScimError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimError', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList($object),
            'ApiClients\Client\GitHubEnterprise\Schema\UserResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse($object),
            'ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($object),
            'ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserEmailsResponse($object),
            'ApiClients\Client\GitHubEnterprise\Schema\UserRole' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserRole($object),
            'ApiClients\Client\GitHubEnterprise\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseUserList(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList);
        $result = [];

        $schemas = $object->schemas;
        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $schemas = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        
        $totalResults = $object->totalResults;
        after_totalResults:        $result['total_results'] = $totalResults;

        
        $resources = $object->resources;
        static $resourcesSerializer0;

        if ($resourcesSerializer0 === null) {
            $resourcesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserResponse',
));
        }
        
        $resources = $resourcesSerializer0->serialize($resources, $this);
        after_resources:        $result['Resources'] = $resources;

        
        $startIndex = $object->startIndex;
        after_startIndex:        $result['start_index'] = $startIndex;

        
        $itemsPerPage = $object->itemsPerPage;
        after_itemsPerPage:        $result['items_per_page'] = $itemsPerPage;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserResponse(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\UserResponse);
        $result = [];

        $schemas = $object->schemas;
        static $schemasSerializer0;

        if ($schemasSerializer0 === null) {
            $schemasSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $schemas = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;

        
        $externalId = $object->externalId;

        if ($externalId === null) {
            goto after_externalId;
        }
        after_externalId:        $result['external_id'] = $externalId;

        
        $active = $object->active;
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
        $name = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse($name);
        after_name:        $result['name'] = $name;

        
        $displayName = $object->displayName;

        if ($displayName === null) {
            goto after_displayName;
        }
        after_displayName:        $result['display_name'] = $displayName;

        
        $emails = $object->emails;
        static $emailsSerializer0;

        if ($emailsSerializer0 === null) {
            $emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserEmailsResponse',
));
        }
        
        $emails = $emailsSerializer0->serialize($emails, $this);
        after_emails:        $result['emails'] = $emails;

        
        $roles = $object->roles;

        if ($roles === null) {
            goto after_roles;
        }
        static $rolesSerializer0;

        if ($rolesSerializer0 === null) {
            $rolesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserRole',
));
        }
        
        $roles = $rolesSerializer0->serialize($roles, $this);
        after_roles:        $result['roles'] = $roles;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserNameResponse(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\UserNameResponse);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserEmailsResponse(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\UserEmailsResponse);
        $result = [];

        $value = $object->value;
        after_value:        $result['value'] = $value;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $primary = $object->primary;

        if ($primary === null) {
            goto after_primary;
        }
        after_primary:        $result['primary'] = $primary;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️UserRole(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\UserRole);
        $result = [];

        $display = $object->display;

        if ($display === null) {
            goto after_display;
        }
        after_display:        $result['display'] = $display;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $value = $object->value;
        after_value:        $result['value'] = $value;

        
        $primary = $object->primary;

        if ($primary === null) {
            goto after_primary;
        }
        after_primary:        $result['primary'] = $primary;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ScimError);
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
            $schemasSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $schemas = $schemasSerializer0->serialize($schemas, $this);
        after_schemas:        $result['schemas'] = $schemas;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
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
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
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
