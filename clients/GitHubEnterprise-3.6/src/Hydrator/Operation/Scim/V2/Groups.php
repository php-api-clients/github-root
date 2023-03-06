<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Scim\V2;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Groups implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources⚡️Members($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Meta' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Meta($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['schemas'] ?? null;
    
                if ($value === null) {
                    $properties['schemas'] = null;
                    goto after_schemas;
                }

                $properties['schemas'] = $value;
    
                after_schemas:

                $value = $payload['total_results'] ?? null;
    
                if ($value === null) {
                    $properties['totalResults'] = null;
                    goto after_totalResults;
                }

                $properties['totalResults'] = $value;
    
                after_totalResults:

                $value = $payload['resources'] ?? null;
    
                if ($value === null) {
                    $properties['Resources'] = null;
                    goto after_Resources;
                }

                static $ResourcesCaster1;
    
                if ($ResourcesCaster1 === null) {
                    $ResourcesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupList\\Resources',
));
                }
    
                $value = $ResourcesCaster1->cast($value, $this);

                $properties['Resources'] = $value;
    
                after_Resources:

                $value = $payload['start_index'] ?? null;
    
                if ($value === null) {
                    $properties['startIndex'] = null;
                    goto after_startIndex;
                }

                $properties['startIndex'] = $value;
    
                after_startIndex:

                $value = $payload['items_per_page'] ?? null;
    
                if ($value === null) {
                    $properties['itemsPerPage'] = null;
                    goto after_itemsPerPage;
                }

                $properties['itemsPerPage'] = $value;
    
                after_itemsPerPage:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['members'] ?? null;
    
                if ($value === null) {
                    $properties['members'] = null;
                    goto after_members;
                }

                static $membersCaster1;
    
                if ($membersCaster1 === null) {
                    $membersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupList\\Resources\\Members',
));
                }
    
                $value = $membersCaster1->cast($value, $this);

                $properties['members'] = $value;
    
                after_members:

                $value = $payload['meta'] ?? null;
    
                if ($value === null) {
                    $properties['meta'] = null;
                    goto after_meta;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'meta';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Meta($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['meta'] = $value;
    
                after_meta:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources⚡️Members(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['value'] ?? null;
    
                if ($value === null) {
                    $properties['value'] = null;
                    goto after_value;
                }

                $properties['value'] = $value;
    
                after_value:

                $value = $payload['ref'] ?? null;
    
                if ($value === null) {
                    $properties['ref'] = null;
                    goto after_ref;
                }

                $properties['ref'] = $value;
    
                after_ref:

                $value = $payload['display'] ?? null;
    
                if ($value === null) {
                    $properties['display'] = null;
                    goto after_display;
                }

                $properties['display'] = $value;
    
                after_display:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Meta(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Meta
        {
            $properties = []; 
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Meta', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Meta::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\Meta(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Meta', $exception, stack: $this->hydrationStack);
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
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

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
                'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList($object),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources($object),
                'ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources⚡️Members($object),
                'ApiClients\Client\GitHubEnterprise\Schema\Meta' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Meta($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList);
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

        
        $totalResults = $object->totalResults;

        if ($totalResults === null) {
            goto after_totalResults;
        }
        after_totalResults:        $result['total_results'] = $totalResults;

        
        $Resources = $object->Resources;

        if ($Resources === null) {
            goto after_Resources;
        }
        static $ResourcesSerializer0;

        if ($ResourcesSerializer0 === null) {
            $ResourcesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupList\\Resources',
));
        }
        
        $Resources = $ResourcesSerializer0->serialize($Resources, $this);
        after_Resources:        $result['resources'] = $Resources;

        
        $startIndex = $object->startIndex;

        if ($startIndex === null) {
            goto after_startIndex;
        }
        after_startIndex:        $result['start_index'] = $startIndex;

        
        $itemsPerPage = $object->itemsPerPage;

        if ($itemsPerPage === null) {
            goto after_itemsPerPage;
        }
        after_itemsPerPage:        $result['items_per_page'] = $itemsPerPage;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $members = $object->members;

        if ($members === null) {
            goto after_members;
        }
        static $membersSerializer0;

        if ($membersSerializer0 === null) {
            $membersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupList\\Resources\\Members',
));
        }
        
        $members = $membersSerializer0->serialize($members, $this);
        after_members:        $result['members'] = $members;

        
        $meta = $object->meta;

        if ($meta === null) {
            goto after_meta;
        }
        $meta = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Meta($meta);
        after_meta:        $result['meta'] = $meta;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScimEnterpriseGroupList⚡️Resources⚡️Members(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList\Resources\Members);
        $result = [];
        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;

        
        $ref = $object->ref;

        if ($ref === null) {
            goto after_ref;
        }
        after_ref:        $result['ref'] = $ref;

        
        $display = $object->display;

        if ($display === null) {
            goto after_display;
        }
        after_display:        $result['display'] = $display;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Meta(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Meta);
        $result = [];
        
        $resourceType = $object->resourceType;

        if ($resourceType === null) {
            goto after_resourceType;
        }
        after_resourceType:        $result['resource_type'] = $resourceType;

        
        $created = $object->created;
        after_created:        $result['created'] = $created;

        
        $lastModified = $object->lastModified;
        after_lastModified:        $result['last_modified'] = $lastModified;

        
        $location = $object->location;
        after_location:        $result['location'] = $location;


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
