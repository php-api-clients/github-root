<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Orgs\CbOrgRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CredentialAuthorizations implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CredentialAuthorization($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CredentialAuthorization(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'login';
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['credential_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'credential_id';
                    goto after_credential_id;
                }

                $properties['credential_id'] = $value;
    
                after_credential_id:

                $value = $payload['credential_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'credential_type';
                    goto after_credential_type;
                }

                $properties['credential_type'] = $value;
    
                after_credential_type:

                $value = $payload['token_last_eight'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'token_last_eight';
                    goto after_token_last_eight;
                }

                $properties['token_last_eight'] = $value;
    
                after_token_last_eight:

                $value = $payload['credential_authorized_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'credential_authorized_at';
                    goto after_credential_authorized_at;
                }

                $properties['credential_authorized_at'] = $value;
    
                after_credential_authorized_at:

                $value = $payload['scopes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'scopes';
                    goto after_scopes;
                }

                $properties['scopes'] = $value;
    
                after_scopes:

                $value = $payload['fingerprint'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fingerprint';
                    goto after_fingerprint;
                }

                $properties['fingerprint'] = $value;
    
                after_fingerprint:

                $value = $payload['credential_accessed_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'credential_accessed_at';
                    goto after_credential_accessed_at;
                }

                $properties['credential_accessed_at'] = $value;
    
                after_credential_accessed_at:

                $value = $payload['authorized_credential_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'authorized_credential_id';
                    goto after_authorized_credential_id;
                }

                $properties['authorized_credential_id'] = $value;
    
                after_authorized_credential_id:

                $value = $payload['authorized_credential_title'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'authorized_credential_title';
                    goto after_authorized_credential_title;
                }

                $properties['authorized_credential_title'] = $value;
    
                after_authorized_credential_title:

                $value = $payload['authorized_credential_note'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'authorized_credential_note';
                    goto after_authorized_credential_note;
                }

                $properties['authorized_credential_note'] = $value;
    
                after_authorized_credential_note:

                $value = $payload['authorized_credential_expires_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'authorized_credential_expires_at';
                    goto after_authorized_credential_expires_at;
                }

                $properties['authorized_credential_expires_at'] = $value;
    
                after_authorized_credential_expires_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CredentialAuthorization($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️CredentialAuthorization(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\CredentialAuthorization);
        $result = [];
        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $credential_id = $object->credential_id;

        if ($credential_id === null) {
            goto after_credential_id;
        }
        after_credential_id:        $result['credential_id'] = $credential_id;

        
        $credential_type = $object->credential_type;

        if ($credential_type === null) {
            goto after_credential_type;
        }
        after_credential_type:        $result['credential_type'] = $credential_type;

        
        $token_last_eight = $object->token_last_eight;
        after_token_last_eight:        $result['token_last_eight'] = $token_last_eight;

        
        $credential_authorized_at = $object->credential_authorized_at;

        if ($credential_authorized_at === null) {
            goto after_credential_authorized_at;
        }
        after_credential_authorized_at:        $result['credential_authorized_at'] = $credential_authorized_at;

        
        $scopes = $object->scopes;
        static $scopesSerializer0;

        if ($scopesSerializer0 === null) {
            $scopesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $scopes = $scopesSerializer0->serialize($scopes, $this);
        after_scopes:        $result['scopes'] = $scopes;

        
        $fingerprint = $object->fingerprint;
        after_fingerprint:        $result['fingerprint'] = $fingerprint;

        
        $credential_accessed_at = $object->credential_accessed_at;

        if ($credential_accessed_at === null) {
            goto after_credential_accessed_at;
        }
        after_credential_accessed_at:        $result['credential_accessed_at'] = $credential_accessed_at;

        
        $authorized_credential_id = $object->authorized_credential_id;

        if ($authorized_credential_id === null) {
            goto after_authorized_credential_id;
        }
        after_authorized_credential_id:        $result['authorized_credential_id'] = $authorized_credential_id;

        
        $authorized_credential_title = $object->authorized_credential_title;

        if ($authorized_credential_title === null) {
            goto after_authorized_credential_title;
        }
        after_authorized_credential_title:        $result['authorized_credential_title'] = $authorized_credential_title;

        
        $authorized_credential_note = $object->authorized_credential_note;

        if ($authorized_credential_note === null) {
            goto after_authorized_credential_note;
        }
        after_authorized_credential_note:        $result['authorized_credential_note'] = $authorized_credential_note;

        
        $authorized_credential_expires_at = $object->authorized_credential_expires_at;

        if ($authorized_credential_expires_at === null) {
            goto after_authorized_credential_expires_at;
        }
        after_authorized_credential_expires_at:        $result['authorized_credential_expires_at'] = $authorized_credential_expires_at;


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
