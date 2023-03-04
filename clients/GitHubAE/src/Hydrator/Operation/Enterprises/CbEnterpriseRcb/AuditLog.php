<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Enterprises\CbEnterpriseRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class AuditLog implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\AuditLogEvent' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent($payload),
                'ApiClients\Client\GitHubAE\Schema\AuditLogEvent\ActorLocation' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️ActorLocation($payload),
                'ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Data' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️Data($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent(array $payload): \ApiClients\Client\GitHubAE\Schema\AuditLogEvent
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['__a_t_timestamp'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '__a_t_timestamp';
                    goto after__AT_timestamp;
                }

                $properties['_AT_timestamp'] = $value;
    
                after__AT_timestamp:

                $value = $payload['action'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'action';
                    goto after_action;
                }

                $properties['action'] = $value;
    
                after_action:

                $value = $payload['active'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'active';
                    goto after_active;
                }

                $properties['active'] = $value;
    
                after_active:

                $value = $payload['active_was'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'active_was';
                    goto after_active_was;
                }

                $properties['active_was'] = $value;
    
                after_active_was:

                $value = $payload['actor'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'actor';
                    goto after_actor;
                }

                $properties['actor'] = $value;
    
                after_actor:

                $value = $payload['actor_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'actor_id';
                    goto after_actor_id;
                }

                $properties['actor_id'] = $value;
    
                after_actor_id:

                $value = $payload['actor_location'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'actor_location';
                    goto after_actor_location;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'actor_location';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️ActorLocation($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['actor_location'] = $value;
    
                after_actor_location:

                $value = $payload['data'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'data';
                    goto after_data;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'data';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️Data($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['data'] = $value;
    
                after_data:

                $value = $payload['org_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'org_id';
                    goto after_org_id;
                }

                $properties['org_id'] = $value;
    
                after_org_id:

                $value = $payload['user_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_id';
                    goto after_user_id;
                }

                $properties['user_id'] = $value;
    
                after_user_id:

                $value = $payload['business_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'business_id';
                    goto after_business_id;
                }

                $properties['business_id'] = $value;
    
                after_business_id:

                $value = $payload['blocked_user'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'blocked_user';
                    goto after_blocked_user;
                }

                $properties['blocked_user'] = $value;
    
                after_blocked_user:

                $value = $payload['business'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'business';
                    goto after_business;
                }

                $properties['business'] = $value;
    
                after_business:

                $value = $payload['config'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'config';
                    goto after_config;
                }

                $properties['config'] = $value;
    
                after_config:

                $value = $payload['config_was'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'config_was';
                    goto after_config_was;
                }

                $properties['config_was'] = $value;
    
                after_config_was:

                $value = $payload['content_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'content_type';
                    goto after_content_type;
                }

                $properties['content_type'] = $value;
    
                after_content_type:

                $value = $payload['operation_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'operation_type';
                    goto after_operation_type;
                }

                $properties['operation_type'] = $value;
    
                after_operation_type:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['deploy_key_fingerprint'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deploy_key_fingerprint';
                    goto after_deploy_key_fingerprint;
                }

                $properties['deploy_key_fingerprint'] = $value;
    
                after_deploy_key_fingerprint:

                $value = $payload['_document_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = '_document_id';
                    goto after__document_id;
                }

                $properties['_document_id'] = $value;
    
                after__document_id:

                $value = $payload['emoji'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'emoji';
                    goto after_emoji;
                }

                $properties['emoji'] = $value;
    
                after_emoji:

                $value = $payload['events'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events';
                    goto after_events;
                }

                $properties['events'] = $value;
    
                after_events:

                $value = $payload['events_were'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events_were';
                    goto after_events_were;
                }

                $properties['events_were'] = $value;
    
                after_events_were:

                $value = $payload['explanation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'explanation';
                    goto after_explanation;
                }

                $properties['explanation'] = $value;
    
                after_explanation:

                $value = $payload['fingerprint'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fingerprint';
                    goto after_fingerprint;
                }

                $properties['fingerprint'] = $value;
    
                after_fingerprint:

                $value = $payload['hook_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'hook_id';
                    goto after_hook_id;
                }

                $properties['hook_id'] = $value;
    
                after_hook_id:

                $value = $payload['limited_availability'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'limited_availability';
                    goto after_limited_availability;
                }

                $properties['limited_availability'] = $value;
    
                after_limited_availability:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['old_user'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'old_user';
                    goto after_old_user;
                }

                $properties['old_user'] = $value;
    
                after_old_user:

                $value = $payload['openssh_public_key'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'openssh_public_key';
                    goto after_openssh_public_key;
                }

                $properties['openssh_public_key'] = $value;
    
                after_openssh_public_key:

                $value = $payload['org'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'org';
                    goto after_org;
                }

                $properties['org'] = $value;
    
                after_org:

                $value = $payload['previous_visibility'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'previous_visibility';
                    goto after_previous_visibility;
                }

                $properties['previous_visibility'] = $value;
    
                after_previous_visibility:

                $value = $payload['read_only'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'read_only';
                    goto after_read_only;
                }

                $properties['read_only'] = $value;
    
                after_read_only:

                $value = $payload['repo'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repo';
                    goto after_repo;
                }

                $properties['repo'] = $value;
    
                after_repo:

                $value = $payload['repository'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository';
                    goto after_repository;
                }

                $properties['repository'] = $value;
    
                after_repository:

                $value = $payload['repository_public'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_public';
                    goto after_repository_public;
                }

                $properties['repository_public'] = $value;
    
                after_repository_public:

                $value = $payload['target_login'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'target_login';
                    goto after_target_login;
                }

                $properties['target_login'] = $value;
    
                after_target_login:

                $value = $payload['team'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'team';
                    goto after_team;
                }

                $properties['team'] = $value;
    
                after_team:

                $value = $payload['transport_protocol'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'transport_protocol';
                    goto after_transport_protocol;
                }

                $properties['transport_protocol'] = $value;
    
                after_transport_protocol:

                $value = $payload['transport_protocol_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'transport_protocol_name';
                    goto after_transport_protocol_name;
                }

                $properties['transport_protocol_name'] = $value;
    
                after_transport_protocol_name:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user';
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['visibility'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'visibility';
                    goto after_visibility;
                }

                $properties['visibility'] = $value;
    
                after_visibility:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\AuditLogEvent', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\AuditLogEvent::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\AuditLogEvent(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\AuditLogEvent', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️ActorLocation(array $payload): \ApiClients\Client\GitHubAE\Schema\AuditLogEvent\ActorLocation
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['country_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'country_name';
                    goto after_country_name;
                }

                $properties['country_name'] = $value;
    
                after_country_name:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\AuditLogEvent\ActorLocation', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\AuditLogEvent\ActorLocation::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\AuditLogEvent\ActorLocation(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\AuditLogEvent\ActorLocation', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️Data(array $payload): \ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Data
        {
            $properties = []; 
            $missingFields = [];
            try {
                
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Data', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Data::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Data(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\AuditLogEvent\Data', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\AuditLogEvent' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\AuditLogEvent);
        $result = [];
        
        $_AT_timestamp = $object->_AT_timestamp;

        if ($_AT_timestamp === null) {
            goto after__AT_timestamp;
        }
        after__AT_timestamp:        $result['__a_t_timestamp'] = $_AT_timestamp;

        
        $action = $object->action;

        if ($action === null) {
            goto after_action;
        }
        after_action:        $result['action'] = $action;

        
        $active = $object->active;

        if ($active === null) {
            goto after_active;
        }
        after_active:        $result['active'] = $active;

        
        $active_was = $object->active_was;

        if ($active_was === null) {
            goto after_active_was;
        }
        after_active_was:        $result['active_was'] = $active_was;

        
        $actor = $object->actor;

        if ($actor === null) {
            goto after_actor;
        }
        after_actor:        $result['actor'] = $actor;

        
        $actor_id = $object->actor_id;

        if ($actor_id === null) {
            goto after_actor_id;
        }
        after_actor_id:        $result['actor_id'] = $actor_id;

        
        $actor_location = $object->actor_location;

        if ($actor_location === null) {
            goto after_actor_location;
        }
        $actor_location = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️ActorLocation($actor_location);
        after_actor_location:        $result['actor_location'] = $actor_location;

        
        $data = $object->data;

        if ($data === null) {
            goto after_data;
        }
        $data = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️AuditLogEvent⚡️Data($data);
        after_data:        $result['data'] = $data;

        
        $org_id = $object->org_id;

        if ($org_id === null) {
            goto after_org_id;
        }
        after_org_id:        $result['org_id'] = $org_id;

        
        $user_id = $object->user_id;

        if ($user_id === null) {
            goto after_user_id;
        }
        after_user_id:        $result['user_id'] = $user_id;

        
        $business_id = $object->business_id;

        if ($business_id === null) {
            goto after_business_id;
        }
        after_business_id:        $result['business_id'] = $business_id;

        
        $blocked_user = $object->blocked_user;

        if ($blocked_user === null) {
            goto after_blocked_user;
        }
        after_blocked_user:        $result['blocked_user'] = $blocked_user;

        
        $business = $object->business;

        if ($business === null) {
            goto after_business;
        }
        after_business:        $result['business'] = $business;

        
        $config = $object->config;

        if ($config === null) {
            goto after_config;
        }
        static $configSerializer0;

        if ($configSerializer0 === null) {
            $configSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $config = $configSerializer0->serialize($config, $this);
        after_config:        $result['config'] = $config;

        
        $config_was = $object->config_was;

        if ($config_was === null) {
            goto after_config_was;
        }
        static $config_wasSerializer0;

        if ($config_wasSerializer0 === null) {
            $config_wasSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $config_was = $config_wasSerializer0->serialize($config_was, $this);
        after_config_was:        $result['config_was'] = $config_was;

        
        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        after_content_type:        $result['content_type'] = $content_type;

        
        $operation_type = $object->operation_type;

        if ($operation_type === null) {
            goto after_operation_type;
        }
        after_operation_type:        $result['operation_type'] = $operation_type;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $deploy_key_fingerprint = $object->deploy_key_fingerprint;

        if ($deploy_key_fingerprint === null) {
            goto after_deploy_key_fingerprint;
        }
        after_deploy_key_fingerprint:        $result['deploy_key_fingerprint'] = $deploy_key_fingerprint;

        
        $_document_id = $object->_document_id;

        if ($_document_id === null) {
            goto after__document_id;
        }
        after__document_id:        $result['_document_id'] = $_document_id;

        
        $emoji = $object->emoji;

        if ($emoji === null) {
            goto after_emoji;
        }
        after_emoji:        $result['emoji'] = $emoji;

        
        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $events_were = $object->events_were;

        if ($events_were === null) {
            goto after_events_were;
        }
        static $events_wereSerializer0;

        if ($events_wereSerializer0 === null) {
            $events_wereSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events_were = $events_wereSerializer0->serialize($events_were, $this);
        after_events_were:        $result['events_were'] = $events_were;

        
        $explanation = $object->explanation;

        if ($explanation === null) {
            goto after_explanation;
        }
        after_explanation:        $result['explanation'] = $explanation;

        
        $fingerprint = $object->fingerprint;

        if ($fingerprint === null) {
            goto after_fingerprint;
        }
        after_fingerprint:        $result['fingerprint'] = $fingerprint;

        
        $hook_id = $object->hook_id;

        if ($hook_id === null) {
            goto after_hook_id;
        }
        after_hook_id:        $result['hook_id'] = $hook_id;

        
        $limited_availability = $object->limited_availability;

        if ($limited_availability === null) {
            goto after_limited_availability;
        }
        after_limited_availability:        $result['limited_availability'] = $limited_availability;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $old_user = $object->old_user;

        if ($old_user === null) {
            goto after_old_user;
        }
        after_old_user:        $result['old_user'] = $old_user;

        
        $openssh_public_key = $object->openssh_public_key;

        if ($openssh_public_key === null) {
            goto after_openssh_public_key;
        }
        after_openssh_public_key:        $result['openssh_public_key'] = $openssh_public_key;

        
        $org = $object->org;

        if ($org === null) {
            goto after_org;
        }
        after_org:        $result['org'] = $org;

        
        $previous_visibility = $object->previous_visibility;

        if ($previous_visibility === null) {
            goto after_previous_visibility;
        }
        after_previous_visibility:        $result['previous_visibility'] = $previous_visibility;

        
        $read_only = $object->read_only;

        if ($read_only === null) {
            goto after_read_only;
        }
        after_read_only:        $result['read_only'] = $read_only;

        
        $repo = $object->repo;

        if ($repo === null) {
            goto after_repo;
        }
        after_repo:        $result['repo'] = $repo;

        
        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }
        after_repository:        $result['repository'] = $repository;

        
        $repository_public = $object->repository_public;

        if ($repository_public === null) {
            goto after_repository_public;
        }
        after_repository_public:        $result['repository_public'] = $repository_public;

        
        $target_login = $object->target_login;

        if ($target_login === null) {
            goto after_target_login;
        }
        after_target_login:        $result['target_login'] = $target_login;

        
        $team = $object->team;

        if ($team === null) {
            goto after_team;
        }
        after_team:        $result['team'] = $team;

        
        $transport_protocol = $object->transport_protocol;

        if ($transport_protocol === null) {
            goto after_transport_protocol;
        }
        after_transport_protocol:        $result['transport_protocol'] = $transport_protocol;

        
        $transport_protocol_name = $object->transport_protocol_name;

        if ($transport_protocol_name === null) {
            goto after_transport_protocol_name;
        }
        after_transport_protocol_name:        $result['transport_protocol_name'] = $transport_protocol_name;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }
        after_visibility:        $result['visibility'] = $visibility;


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
