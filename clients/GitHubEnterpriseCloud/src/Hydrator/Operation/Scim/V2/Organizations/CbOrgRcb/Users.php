<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb;

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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Emails($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Operations($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Groups($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Roles($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList
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

                $value = $payload['items_per_page'] ?? null;
    
                if ($value === null) {
                    $properties['itemsPerPage'] = null;
                    goto after_itemsPerPage;
                }

                $properties['itemsPerPage'] = $value;
    
                after_itemsPerPage:

                $value = $payload['start_index'] ?? null;
    
                if ($value === null) {
                    $properties['startIndex'] = null;
                    goto after_startIndex;
                }

                $properties['startIndex'] = $value;
    
                after_startIndex:

                $value = $payload['resources'] ?? null;
    
                if ($value === null) {
                    $properties['Resources'] = null;
                    goto after_Resources;
                }

                static $ResourcesCaster1;
    
                if ($ResourcesCaster1 === null) {
                    $ResourcesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser',
));
                }
    
                $value = $ResourcesCaster1->cast($value, $this);

                $properties['Resources'] = $value;
    
                after_Resources:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser
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

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
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
                    $properties['emails'] = null;
                    goto after_emails;
                }

                static $emailsCaster1;
    
                if ($emailsCaster1 === null) {
                    $emailsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Emails',
));
                }
    
                $value = $emailsCaster1->cast($value, $this);

                $properties['emails'] = $value;
    
                after_emails:

                $value = $payload['active'] ?? null;
    
                if ($value === null) {
                    $properties['active'] = null;
                    goto after_active;
                }

                $properties['active'] = $value;
    
                after_active:

                $value = $payload['meta'] ?? null;
    
                if ($value === null) {
                    $properties['meta'] = null;
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

                static $operationsCaster1;
    
                if ($operationsCaster1 === null) {
                    $operationsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Operations',
));
                }
    
                $value = $operationsCaster1->cast($value, $this);

                $properties['operations'] = $value;
    
                after_operations:

                $value = $payload['groups'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'groups';
                    goto after_groups;
                }

                static $groupsCaster1;
    
                if ($groupsCaster1 === null) {
                    $groupsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Groups',
));
                }
    
                $value = $groupsCaster1->cast($value, $this);

                $properties['groups'] = $value;
    
                after_groups:

                $value = $payload['roles'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'roles';
                    goto after_roles;
                }

                static $rolesCaster1;
    
                if ($rolesCaster1 === null) {
                    $rolesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Roles',
));
                }
    
                $value = $rolesCaster1->cast($value, $this);

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

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name
        {
            $properties = []; 
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

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Emails(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails
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

                $value = $payload['primary'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'primary';
                    goto after_primary;
                }

                $properties['primary'] = $value;
    
                after_primary:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta
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

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Operations(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['op'] ?? null;
    
                if ($value === null) {
                    $properties['op'] = null;
                    goto after_op;
                }

                $properties['op'] = $value;
    
                after_op:

                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'path';
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['value'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'value';
                    goto after_value;
                }

                $properties['value'] = $value;
    
                after_value:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Groups(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups
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

                $value = $payload['display'] ?? null;
    
                if ($value === null) {
                    $properties['display'] = null;
                    goto after_display;
                }

                $properties['display'] = $value;
    
                after_display:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Roles(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles
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

                $value = $payload['primary'] ?? null;
    
                if ($value === null) {
                    $properties['primary'] = null;
                    goto after_primary;
                }

                $properties['primary'] = $value;
    
                after_primary:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['display'] ?? null;
    
                if ($value === null) {
                    $properties['display'] = null;
                    goto after_display;
                }

                $properties['display'] = $value;
    
                after_display:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Emails($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Operations($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Groups($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Roles($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUserList(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList);
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

        
        $itemsPerPage = $object->itemsPerPage;

        if ($itemsPerPage === null) {
            goto after_itemsPerPage;
        }
        after_itemsPerPage:        $result['items_per_page'] = $itemsPerPage;

        
        $startIndex = $object->startIndex;

        if ($startIndex === null) {
            goto after_startIndex;
        }
        after_startIndex:        $result['start_index'] = $startIndex;

        
        $Resources = $object->Resources;

        if ($Resources === null) {
            goto after_Resources;
        }
        static $ResourcesSerializer0;

        if ($ResourcesSerializer0 === null) {
            $ResourcesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser',
));
        }
        
        $Resources = $ResourcesSerializer0->serialize($Resources, $this);
        after_Resources:        $result['resources'] = $Resources;


        return $result;
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
            $emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Emails',
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
            $operationsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Operations',
));
        }
        
        $operations = $operationsSerializer0->serialize($operations, $this);
        after_operations:        $result['operations'] = $operations;

        
        $groups = $object->groups;
        static $groupsSerializer0;

        if ($groupsSerializer0 === null) {
            $groupsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Groups',
));
        }
        
        $groups = $groupsSerializer0->serialize($groups, $this);
        after_groups:        $result['groups'] = $groups;

        
        $roles = $object->roles;
        static $rolesSerializer0;

        if ($rolesSerializer0 === null) {
            $rolesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Roles',
));
        }
        
        $roles = $rolesSerializer0->serialize($roles, $this);
        after_roles:        $result['roles'] = $roles;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Name(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Name);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Emails(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Emails);
        $result = [];
        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;

        
        $primary = $object->primary;
        after_primary:        $result['primary'] = $primary;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Meta(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Meta);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Operations(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Operations);
        $result = [];
        
        $op = $object->op;

        if ($op === null) {
            goto after_op;
        }
        after_op:        $result['op'] = $op;

        
        $path = $object->path;
        after_path:        $result['path'] = $path;

        
        $value = $object->value;
        after_value:        $result['value'] = $value;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Groups(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Groups);
        $result = [];
        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;

        
        $display = $object->display;

        if ($display === null) {
            goto after_display;
        }
        after_display:        $result['display'] = $display;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ScimUser⚡️Roles(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser\Roles);
        $result = [];
        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;

        
        $primary = $object->primary;

        if ($primary === null) {
            goto after_primary;
        }
        after_primary:        $result['primary'] = $primary;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $display = $object->display;

        if ($display === null) {
            goto after_display;
        }
        after_display:        $result['display'] = $display;


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
