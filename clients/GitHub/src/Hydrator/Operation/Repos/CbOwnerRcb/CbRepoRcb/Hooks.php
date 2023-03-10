<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Hooks implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Hook' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook($payload),
                'ApiClients\Client\GitHub\Schema\Hook\Config' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook⚡️Config($payload),
                'ApiClients\Client\GitHub\Schema\HookResponse' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookResponse($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook(array $payload): \ApiClients\Client\GitHub\Schema\Hook
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['active'] ?? null;

            if ($value === null) {
                $missingFields[] = 'active';
                goto after_active;
            }

            $properties['active'] = $value;

            after_active:

            $value = $payload['events'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events';
                goto after_events;
            }

            $properties['events'] = $value;

            after_events:

            $value = $payload['config'] ?? null;

            if ($value === null) {
                $missingFields[] = 'config';
                goto after_config;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'config';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook⚡️Config($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['config'] = $value;

            after_config:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['test_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'test_url';
                goto after_test_url;
            }

            $properties['test_url'] = $value;

            after_test_url:

            $value = $payload['ping_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ping_url';
                goto after_ping_url;
            }

            $properties['ping_url'] = $value;

            after_ping_url:

            $value = $payload['deliveries_url'] ?? null;

            if ($value === null) {
                $properties['deliveries_url'] = null;
                goto after_deliveries_url;
            }

            $properties['deliveries_url'] = $value;

            after_deliveries_url:

            $value = $payload['last_response'] ?? null;

            if ($value === null) {
                $missingFields[] = 'last_response';
                goto after_last_response;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'last_response';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookResponse($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['last_response'] = $value;

            after_last_response:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Hook', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Hook::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Hook(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Hook', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook⚡️Config(array $payload): \ApiClients\Client\GitHub\Schema\Hook\Config
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['password'] ?? null;

            if ($value === null) {
                $properties['password'] = null;
                goto after_password;
            }

            $properties['password'] = $value;

            after_password:

            $value = $payload['room'] ?? null;

            if ($value === null) {
                $properties['room'] = null;
                goto after_room;
            }

            $properties['room'] = $value;

            after_room:

            $value = $payload['subdomain'] ?? null;

            if ($value === null) {
                $properties['subdomain'] = null;
                goto after_subdomain;
            }

            $properties['subdomain'] = $value;

            after_subdomain:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['insecure_ssl'] ?? null;

            if ($value === null) {
                $properties['insecure_ssl'] = null;
                goto after_insecure_ssl;
            }

            $properties['insecure_ssl'] = $value;

            after_insecure_ssl:

            $value = $payload['content_type'] ?? null;

            if ($value === null) {
                $properties['content_type'] = null;
                goto after_content_type;
            }

            $properties['content_type'] = $value;

            after_content_type:

            $value = $payload['digest'] ?? null;

            if ($value === null) {
                $properties['digest'] = null;
                goto after_digest;
            }

            $properties['digest'] = $value;

            after_digest:

            $value = $payload['secret'] ?? null;

            if ($value === null) {
                $properties['secret'] = null;
                goto after_secret;
            }

            $properties['secret'] = $value;

            after_secret:

            $value = $payload['token'] ?? null;

            if ($value === null) {
                $properties['token'] = null;
                goto after_token;
            }

            $properties['token'] = $value;

            after_token:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Hook\Config', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Hook\Config::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Hook\Config(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Hook\Config', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookResponse(array $payload): \ApiClients\Client\GitHub\Schema\HookResponse
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookResponse', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\HookResponse::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\HookResponse(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\HookResponse', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
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

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resource'] ?? null;

            if ($value === null) {
                $properties['resource'] = null;
                goto after_resource;
            }

            $properties['resource'] = $value;

            after_resource:

            $value = $payload['field'] ?? null;

            if ($value === null) {
                $properties['field'] = null;
                goto after_field;
            }

            $properties['field'] = $value;

            after_field:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code';
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['index'] ?? null;

            if ($value === null) {
                $properties['index'] = null;
                goto after_index;
            }

            $properties['index'] = $value;

            after_index:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $properties['value'] = null;
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\Hook' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook($object),
            'ApiClients\Client\GitHub\Schema\Hook\Config' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook⚡️Config($object),
            'ApiClients\Client\GitHub\Schema\HookResponse' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookResponse($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Hook);
        $result = [];

        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $active = $object->active;
        after_active:        $result['active'] = $active;

        
        $events = $object->events;
        static $eventsSerializer0;

        if ($eventsSerializer0 === null) {
            $eventsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $events = $eventsSerializer0->serialize($events, $this);
        after_events:        $result['events'] = $events;

        
        $config = $object->config;
        $config = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook⚡️Config($config);
        after_config:        $result['config'] = $config;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $test_url = $object->test_url;
        after_test_url:        $result['test_url'] = $test_url;

        
        $ping_url = $object->ping_url;
        after_ping_url:        $result['ping_url'] = $ping_url;

        
        $deliveries_url = $object->deliveries_url;

        if ($deliveries_url === null) {
            goto after_deliveries_url;
        }
        after_deliveries_url:        $result['deliveries_url'] = $deliveries_url;

        
        $last_response = $object->last_response;
        $last_response = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookResponse($last_response);
        after_last_response:        $result['last_response'] = $last_response;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Hook⚡️Config(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Hook\Config);
        $result = [];

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $password = $object->password;

        if ($password === null) {
            goto after_password;
        }
        after_password:        $result['password'] = $password;

        
        $room = $object->room;

        if ($room === null) {
            goto after_room;
        }
        after_room:        $result['room'] = $room;

        
        $subdomain = $object->subdomain;

        if ($subdomain === null) {
            goto after_subdomain;
        }
        after_subdomain:        $result['subdomain'] = $subdomain;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $insecure_ssl = $object->insecure_ssl;

        if ($insecure_ssl === null) {
            goto after_insecure_ssl;
        }
        after_insecure_ssl:        $result['insecure_ssl'] = $insecure_ssl;

        
        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        after_content_type:        $result['content_type'] = $content_type;

        
        $digest = $object->digest;

        if ($digest === null) {
            goto after_digest;
        }
        after_digest:        $result['digest'] = $digest;

        
        $secret = $object->secret;

        if ($secret === null) {
            goto after_secret;
        }
        after_secret:        $result['secret'] = $secret;

        
        $token = $object->token;

        if ($token === null) {
            goto after_token;
        }
        after_token:        $result['token'] = $token;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️HookResponse(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\HookResponse);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError\Errors);
        $result = [];

        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;

        if ($field === null) {
            goto after_field;
        }
        after_field:        $result['field'] = $field;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $code = $object->code;
        after_code:        $result['code'] = $code;

        
        $index = $object->index;

        if ($index === null) {
            goto after_index;
        }
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


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
