<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Enterprises\CbEnterpriseRcb;

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
            'ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent⚡️ActorLocation($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['_AT_timestamp'] ?? null;

            if ($value === null) {
                $properties['atTimestamp'] = null;
                goto after_atTimestamp;
            }

            $properties['atTimestamp'] = $value;

            after_atTimestamp:

            $value = $payload['action'] ?? null;

            if ($value === null) {
                $properties['action'] = null;
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['active'] ?? null;

            if ($value === null) {
                $properties['active'] = null;
                goto after_active;
            }

            $properties['active'] = $value;

            after_active:

            $value = $payload['active_was'] ?? null;

            if ($value === null) {
                $properties['activeWas'] = null;
                goto after_activeWas;
            }

            $properties['activeWas'] = $value;

            after_activeWas:

            $value = $payload['actor'] ?? null;

            if ($value === null) {
                $properties['actor'] = null;
                goto after_actor;
            }

            $properties['actor'] = $value;

            after_actor:

            $value = $payload['actor_id'] ?? null;

            if ($value === null) {
                $properties['actorId'] = null;
                goto after_actorId;
            }

            $properties['actorId'] = $value;

            after_actorId:

            $value = $payload['actor_location'] ?? null;

            if ($value === null) {
                $properties['actorLocation'] = null;
                goto after_actorLocation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'actorLocation';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent⚡️ActorLocation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['actorLocation'] = $value;

            after_actorLocation:

            $value = $payload['data'] ?? null;

            if ($value === null) {
                $properties['data'] = null;
                goto after_data;
            }

            $properties['data'] = $value;

            after_data:

            $value = $payload['org_id'] ?? null;

            if ($value === null) {
                $properties['orgId'] = null;
                goto after_orgId;
            }

            $properties['orgId'] = $value;

            after_orgId:

            $value = $payload['user_id'] ?? null;

            if ($value === null) {
                $properties['userId'] = null;
                goto after_userId;
            }

            $properties['userId'] = $value;

            after_userId:

            $value = $payload['business_id'] ?? null;

            if ($value === null) {
                $properties['businessId'] = null;
                goto after_businessId;
            }

            $properties['businessId'] = $value;

            after_businessId:

            $value = $payload['blocked_user'] ?? null;

            if ($value === null) {
                $properties['blockedUser'] = null;
                goto after_blockedUser;
            }

            $properties['blockedUser'] = $value;

            after_blockedUser:

            $value = $payload['business'] ?? null;

            if ($value === null) {
                $properties['business'] = null;
                goto after_business;
            }

            $properties['business'] = $value;

            after_business:

            $value = $payload['config'] ?? null;

            if ($value === null) {
                $properties['config'] = null;
                goto after_config;
            }

            $properties['config'] = $value;

            after_config:

            $value = $payload['config_was'] ?? null;

            if ($value === null) {
                $properties['configWas'] = null;
                goto after_configWas;
            }

            $properties['configWas'] = $value;

            after_configWas:

            $value = $payload['content_type'] ?? null;

            if ($value === null) {
                $properties['contentType'] = null;
                goto after_contentType;
            }

            $properties['contentType'] = $value;

            after_contentType:

            $value = $payload['operation_type'] ?? null;

            if ($value === null) {
                $properties['operationType'] = null;
                goto after_operationType;
            }

            $properties['operationType'] = $value;

            after_operationType:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['deploy_key_fingerprint'] ?? null;

            if ($value === null) {
                $properties['deployKeyFingerprint'] = null;
                goto after_deployKeyFingerprint;
            }

            $properties['deployKeyFingerprint'] = $value;

            after_deployKeyFingerprint:

            $value = $payload['_document_id'] ?? null;

            if ($value === null) {
                $properties['documentId'] = null;
                goto after_documentId;
            }

            $properties['documentId'] = $value;

            after_documentId:

            $value = $payload['emoji'] ?? null;

            if ($value === null) {
                $properties['emoji'] = null;
                goto after_emoji;
            }

            $properties['emoji'] = $value;

            after_emoji:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $properties['events'] = null;
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['events_were'] ?? null;

            if ($value === null) {
                $properties['eventsWere'] = null;
                goto after_eventsWere;
            }

            $properties['eventsWere'] = $value;

            after_eventsWere:

            $value = $payload['explanation'] ?? null;

            if ($value === null) {
                $properties['explanation'] = null;
                goto after_explanation;
            }

            $properties['explanation'] = $value;

            after_explanation:

            $value = $payload['fingerprint'] ?? null;

            if ($value === null) {
                $properties['fingerprint'] = null;
                goto after_fingerprint;
            }

            $properties['fingerprint'] = $value;

            after_fingerprint:

            $value = $payload['hook_id'] ?? null;

            if ($value === null) {
                $properties['hookId'] = null;
                goto after_hookId;
            }

            $properties['hookId'] = $value;

            after_hookId:

            $value = $payload['limited_availability'] ?? null;

            if ($value === null) {
                $properties['limitedAvailability'] = null;
                goto after_limitedAvailability;
            }

            $properties['limitedAvailability'] = $value;

            after_limitedAvailability:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['old_user'] ?? null;

            if ($value === null) {
                $properties['oldUser'] = null;
                goto after_oldUser;
            }

            $properties['oldUser'] = $value;

            after_oldUser:

            $value = $payload['openssh_public_key'] ?? null;

            if ($value === null) {
                $properties['opensshPublicKey'] = null;
                goto after_opensshPublicKey;
            }

            $properties['opensshPublicKey'] = $value;

            after_opensshPublicKey:

            $value = $payload['org'] ?? null;

            if ($value === null) {
                $properties['org'] = null;
                goto after_org;
            }

            $properties['org'] = $value;

            after_org:

            $value = $payload['previous_visibility'] ?? null;

            if ($value === null) {
                $properties['previousVisibility'] = null;
                goto after_previousVisibility;
            }

            $properties['previousVisibility'] = $value;

            after_previousVisibility:

            $value = $payload['read_only'] ?? null;

            if ($value === null) {
                $properties['readOnly'] = null;
                goto after_readOnly;
            }

            $properties['readOnly'] = $value;

            after_readOnly:

            $value = $payload['repo'] ?? null;

            if ($value === null) {
                $properties['repo'] = null;
                goto after_repo;
            }

            $properties['repo'] = $value;

            after_repo:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['repository_public'] ?? null;

            if ($value === null) {
                $properties['repositoryPublic'] = null;
                goto after_repositoryPublic;
            }

            $properties['repositoryPublic'] = $value;

            after_repositoryPublic:

            $value = $payload['target_login'] ?? null;

            if ($value === null) {
                $properties['targetLogin'] = null;
                goto after_targetLogin;
            }

            $properties['targetLogin'] = $value;

            after_targetLogin:

            $value = $payload['team'] ?? null;

            if ($value === null) {
                $properties['team'] = null;
                goto after_team;
            }

            $properties['team'] = $value;

            after_team:

            $value = $payload['transport_protocol'] ?? null;

            if ($value === null) {
                $properties['transportProtocol'] = null;
                goto after_transportProtocol;
            }

            $properties['transportProtocol'] = $value;

            after_transportProtocol:

            $value = $payload['transport_protocol_name'] ?? null;

            if ($value === null) {
                $properties['transportProtocolName'] = null;
                goto after_transportProtocolName;
            }

            $properties['transportProtocolName'] = $value;

            after_transportProtocolName:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            $properties['user'] = $value;

            after_user:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $properties['visibility'] = null;
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent⚡️ActorLocation(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['country_name'] ?? null;

            if ($value === null) {
                $properties['countryName'] = null;
                goto after_countryName;
            }

            $properties['countryName'] = $value;

            after_countryName:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent($object),
            'ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent⚡️ActorLocation($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent);
        $result = [];

        $atTimestamp = $object->atTimestamp;

        if ($atTimestamp === null) {
            goto after_atTimestamp;
        }
        after_atTimestamp:        $result['_AT_timestamp'] = $atTimestamp;

        
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

        
        $activeWas = $object->activeWas;

        if ($activeWas === null) {
            goto after_activeWas;
        }
        after_activeWas:        $result['active_was'] = $activeWas;

        
        $actor = $object->actor;

        if ($actor === null) {
            goto after_actor;
        }
        after_actor:        $result['actor'] = $actor;

        
        $actorId = $object->actorId;

        if ($actorId === null) {
            goto after_actorId;
        }
        after_actorId:        $result['actor_id'] = $actorId;

        
        $actorLocation = $object->actorLocation;

        if ($actorLocation === null) {
            goto after_actorLocation;
        }
        $actorLocation = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent⚡️ActorLocation($actorLocation);
        after_actorLocation:        $result['actor_location'] = $actorLocation;

        
        $data = $object->data;

        if ($data === null) {
            goto after_data;
        }
        after_data:        $result['data'] = $data;

        
        $orgId = $object->orgId;

        if ($orgId === null) {
            goto after_orgId;
        }
        after_orgId:        $result['org_id'] = $orgId;

        
        $userId = $object->userId;

        if ($userId === null) {
            goto after_userId;
        }
        after_userId:        $result['user_id'] = $userId;

        
        $businessId = $object->businessId;

        if ($businessId === null) {
            goto after_businessId;
        }
        after_businessId:        $result['business_id'] = $businessId;

        
        $blockedUser = $object->blockedUser;

        if ($blockedUser === null) {
            goto after_blockedUser;
        }
        after_blockedUser:        $result['blocked_user'] = $blockedUser;

        
        $business = $object->business;

        if ($business === null) {
            goto after_business;
        }
        after_business:        $result['business'] = $business;

        
        $config = $object->config;

        if ($config === null) {
            goto after_config;
        }
        after_config:        $result['config'] = $config;

        
        $configWas = $object->configWas;

        if ($configWas === null) {
            goto after_configWas;
        }
        after_configWas:        $result['config_was'] = $configWas;

        
        $contentType = $object->contentType;

        if ($contentType === null) {
            goto after_contentType;
        }
        after_contentType:        $result['content_type'] = $contentType;

        
        $operationType = $object->operationType;

        if ($operationType === null) {
            goto after_operationType;
        }
        after_operationType:        $result['operation_type'] = $operationType;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $deployKeyFingerprint = $object->deployKeyFingerprint;

        if ($deployKeyFingerprint === null) {
            goto after_deployKeyFingerprint;
        }
        after_deployKeyFingerprint:        $result['deploy_key_fingerprint'] = $deployKeyFingerprint;

        
        $documentId = $object->documentId;

        if ($documentId === null) {
            goto after_documentId;
        }
        after_documentId:        $result['_document_id'] = $documentId;

        
        $emoji = $object->emoji;

        if ($emoji === null) {
            goto after_emoji;
        }
        after_emoji:        $result['emoji'] = $emoji;

        
        $events = $object->events;

        if ($events === null) {
            goto after_events;
        }
        after_events:        $result['events'] = $events;

        
        $eventsWere = $object->eventsWere;

        if ($eventsWere === null) {
            goto after_eventsWere;
        }
        after_eventsWere:        $result['events_were'] = $eventsWere;

        
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

        
        $hookId = $object->hookId;

        if ($hookId === null) {
            goto after_hookId;
        }
        after_hookId:        $result['hook_id'] = $hookId;

        
        $limitedAvailability = $object->limitedAvailability;

        if ($limitedAvailability === null) {
            goto after_limitedAvailability;
        }
        after_limitedAvailability:        $result['limited_availability'] = $limitedAvailability;

        
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

        
        $oldUser = $object->oldUser;

        if ($oldUser === null) {
            goto after_oldUser;
        }
        after_oldUser:        $result['old_user'] = $oldUser;

        
        $opensshPublicKey = $object->opensshPublicKey;

        if ($opensshPublicKey === null) {
            goto after_opensshPublicKey;
        }
        after_opensshPublicKey:        $result['openssh_public_key'] = $opensshPublicKey;

        
        $org = $object->org;

        if ($org === null) {
            goto after_org;
        }
        after_org:        $result['org'] = $org;

        
        $previousVisibility = $object->previousVisibility;

        if ($previousVisibility === null) {
            goto after_previousVisibility;
        }
        after_previousVisibility:        $result['previous_visibility'] = $previousVisibility;

        
        $readOnly = $object->readOnly;

        if ($readOnly === null) {
            goto after_readOnly;
        }
        after_readOnly:        $result['read_only'] = $readOnly;

        
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

        
        $repositoryPublic = $object->repositoryPublic;

        if ($repositoryPublic === null) {
            goto after_repositoryPublic;
        }
        after_repositoryPublic:        $result['repository_public'] = $repositoryPublic;

        
        $targetLogin = $object->targetLogin;

        if ($targetLogin === null) {
            goto after_targetLogin;
        }
        after_targetLogin:        $result['target_login'] = $targetLogin;

        
        $team = $object->team;

        if ($team === null) {
            goto after_team;
        }
        after_team:        $result['team'] = $team;

        
        $transportProtocol = $object->transportProtocol;

        if ($transportProtocol === null) {
            goto after_transportProtocol;
        }
        after_transportProtocol:        $result['transport_protocol'] = $transportProtocol;

        
        $transportProtocolName = $object->transportProtocolName;

        if ($transportProtocolName === null) {
            goto after_transportProtocolName;
        }
        after_transportProtocolName:        $result['transport_protocol_name'] = $transportProtocolName;

        
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AuditLogEvent⚡️ActorLocation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\AuditLogEvent\ActorLocation);
        $result = [];

        $countryName = $object->countryName;

        if ($countryName === null) {
            goto after_countryName;
        }
        after_countryName:        $result['country_name'] = $countryName;


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
