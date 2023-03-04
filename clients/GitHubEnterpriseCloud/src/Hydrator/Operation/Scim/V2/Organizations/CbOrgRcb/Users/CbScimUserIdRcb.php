<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb\Users;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbScimUserIdRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser
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

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['external_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'external_id';
                    goto after_externalId;
                }

                $properties['externalId'] = $value;
    
                after_externalId:

                $value = $payload['user_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_name';
                    goto after_userName;
                }

                $properties['userName'] = $value;
    
                after_userName:

                $value = $payload['display_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'display_name';
                    goto after_displayName;
                }

                $properties['displayName'] = $value;
    
                after_displayName:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'name';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['meta'] = $value;
    
                after_meta:

                $value = $payload['organization_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_id';
                    goto after_organization_id;
                }

                $properties['organization_id'] = $value;
    
                after_organization_id:

                $value = $payload['operations'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'operations';
                    goto after_operations;
                }

                $properties['operations'] = $value;
    
                after_operations:

                $value = $payload['groups'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'groups';
                    goto after_groups;
                }

                $properties['groups'] = $value;
    
                after_groups:

                $value = $payload['roles'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'roles';
                    goto after_roles;
                }

                $properties['roles'] = $value;
    
                after_roles:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['detail'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'detail';
                    goto after_detail;
                }

                $properties['detail'] = $value;
    
                after_detail:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

                $value = $payload['scim_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'scim_type';
                    goto after_scimType;
                }

                $properties['scimType'] = $value;
    
                after_scimType:

                $value = $payload['schemas'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'schemas';
                    goto after_schemas;
                }

                $properties['schemas'] = $value;
    
                after_schemas:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['given_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'given_name';
                    goto after_givenName;
                }

                $properties['givenName'] = $value;
    
                after_givenName:

                $value = $payload['family_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'family_name';
                    goto after_familyName;
                }

                $properties['familyName'] = $value;
    
                after_familyName:

                $value = $payload['formatted'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'formatted';
                    goto after_formatted;
                }

                $properties['formatted'] = $value;
    
                after_formatted:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['resource_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'resource_type';
                    goto after_resourceType;
                }

                $properties['resourceType'] = $value;
    
                after_resourceType:

                $value = $payload['created'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created';
                    goto after_created;
                }

                $properties['created'] = $value;
    
                after_created:

                $value = $payload['last_modified'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'last_modified';
                    goto after_lastModified;
                }

                $properties['lastModified'] = $value;
    
                after_lastModified:

                $value = $payload['location'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'location';
                    goto after_location;
                }

                $properties['location'] = $value;
    
                after_location:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser);
        $result = [];
        
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

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
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
        $name = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($name);
        after_name:        $result['name'] = $name;

        
        $emails = $object->emails;

        if ($emails === null) {
            goto after_emails;
        }
        static $emailsSerializer0;

        if ($emailsSerializer0 === null) {
            $emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $emails = $emailsSerializer0->serialize($emails, $this);
        after_emails:        $result['emails'] = $emails;

        
        $active = $object->active;

        if ($active === null) {
            goto after_active;
        }
        after_active:        $result['active'] = $active;

        
        $meta = $object->meta;

        if ($meta === null) {
            goto after_meta;
        }
        $meta = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($meta);
        after_meta:        $result['meta'] = $meta;

        
        $organization_id = $object->organization_id;
        after_organization_id:        $result['organization_id'] = $organization_id;

        
        $operations = $object->operations;
        static $operationsSerializer0;

        if ($operationsSerializer0 === null) {
            $operationsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $operations = $operationsSerializer0->serialize($operations, $this);
        after_operations:        $result['operations'] = $operations;

        
        $groups = $object->groups;
        static $groupsSerializer0;

        if ($groupsSerializer0 === null) {
            $groupsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $groups = $groupsSerializer0->serialize($groups, $this);
        after_groups:        $result['groups'] = $groups;

        
        $roles = $object->roles;
        static $rolesSerializer0;

        if ($rolesSerializer0 === null) {
            $rolesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $roles = $rolesSerializer0->serialize($roles, $this);
        after_roles:        $result['roles'] = $roles;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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
