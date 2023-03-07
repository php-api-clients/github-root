<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Admin\Users\CbUsernameRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Authorizations implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\Authorization' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization($payload),
                'ApiClients\Client\GitHubAE\Schema\Authorization\App' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization⚡️App($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization(array $payload): \ApiClients\Client\GitHubAE\Schema\Authorization
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

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['scopes'] ?? null;
    
                if ($value === null) {
                    $properties['scopes'] = null;
                    goto after_scopes;
                }

                $properties['scopes'] = $value;
    
                after_scopes:

                $value = $payload['token'] ?? null;
    
                if ($value === null) {
                    $properties['token'] = null;
                    goto after_token;
                }

                $properties['token'] = $value;
    
                after_token:

                $value = $payload['token_last_eight'] ?? null;
    
                if ($value === null) {
                    $properties['token_last_eight'] = null;
                    goto after_token_last_eight;
                }

                $properties['token_last_eight'] = $value;
    
                after_token_last_eight:

                $value = $payload['hashed_token'] ?? null;
    
                if ($value === null) {
                    $properties['hashed_token'] = null;
                    goto after_hashed_token;
                }

                $properties['hashed_token'] = $value;
    
                after_hashed_token:

                $value = $payload['app'] ?? null;
    
                if ($value === null) {
                    $properties['app'] = null;
                    goto after_app;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'app';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization⚡️App($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['app'] = $value;
    
                after_app:

                $value = $payload['note'] ?? null;
    
                if ($value === null) {
                    $properties['note'] = null;
                    goto after_note;
                }

                $properties['note'] = $value;
    
                after_note:

                $value = $payload['note_url'] ?? null;
    
                if ($value === null) {
                    $properties['note_url'] = null;
                    goto after_note_url;
                }

                $properties['note_url'] = $value;
    
                after_note_url:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['fingerprint'] ?? null;
    
                if ($value === null) {
                    $properties['fingerprint'] = null;
                    goto after_fingerprint;
                }

                $properties['fingerprint'] = $value;
    
                after_fingerprint:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $properties['user'] = null;
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['installation'] ?? null;
    
                if ($value === null) {
                    $properties['installation'] = null;
                    goto after_installation;
                }

                $properties['installation'] = $value;
    
                after_installation:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $properties['expires_at'] = null;
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Authorization', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Authorization::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Authorization(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Authorization', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization⚡️App(array $payload): \ApiClients\Client\GitHubAE\Schema\Authorization\App
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['client_id'] ?? null;
    
                if ($value === null) {
                    $properties['client_id'] = null;
                    goto after_client_id;
                }

                $properties['client_id'] = $value;
    
                after_client_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Authorization\App', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Authorization\App::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Authorization\App(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Authorization\App', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\Authorization' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization($object),
                'ApiClients\Client\GitHubAE\Schema\Authorization\App' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization⚡️App($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Authorization);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $scopes = $object->scopes;

        if ($scopes === null) {
            goto after_scopes;
        }
        static $scopesSerializer0;

        if ($scopesSerializer0 === null) {
            $scopesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $scopes = $scopesSerializer0->serialize($scopes, $this);
        after_scopes:        $result['scopes'] = $scopes;

        
        $token = $object->token;

        if ($token === null) {
            goto after_token;
        }
        after_token:        $result['token'] = $token;

        
        $token_last_eight = $object->token_last_eight;

        if ($token_last_eight === null) {
            goto after_token_last_eight;
        }
        after_token_last_eight:        $result['token_last_eight'] = $token_last_eight;

        
        $hashed_token = $object->hashed_token;

        if ($hashed_token === null) {
            goto after_hashed_token;
        }
        after_hashed_token:        $result['hashed_token'] = $hashed_token;

        
        $app = $object->app;

        if ($app === null) {
            goto after_app;
        }
        $app = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization⚡️App($app);
        after_app:        $result['app'] = $app;

        
        $note = $object->note;

        if ($note === null) {
            goto after_note;
        }
        after_note:        $result['note'] = $note;

        
        $note_url = $object->note_url;

        if ($note_url === null) {
            goto after_note_url;
        }
        after_note_url:        $result['note_url'] = $note_url;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $fingerprint = $object->fingerprint;

        if ($fingerprint === null) {
            goto after_fingerprint;
        }
        after_fingerprint:        $result['fingerprint'] = $fingerprint;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        after_installation:        $result['installation'] = $installation;

        
        $expires_at = $object->expires_at;

        if ($expires_at === null) {
            goto after_expires_at;
        }
        after_expires_at:        $result['expires_at'] = $expires_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Authorization⚡️App(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Authorization\App);
        $result = [];
        
        $client_id = $object->client_id;

        if ($client_id === null) {
            goto after_client_id;
        }
        after_client_id:        $result['client_id'] = $client_id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


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
