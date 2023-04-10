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
                goto after_credentialId;
            }

            $properties['credentialId'] = $value;

            after_credentialId:

            $value = $payload['credential_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'credential_type';
                goto after_credentialType;
            }

            $properties['credentialType'] = $value;

            after_credentialType:

            $value = $payload['token_last_eight'] ?? null;

            if ($value === null) {
                $properties['tokenLastEight'] = null;
                goto after_tokenLastEight;
            }

            $properties['tokenLastEight'] = $value;

            after_tokenLastEight:

            $value = $payload['credential_authorized_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'credential_authorized_at';
                goto after_credentialAuthorizedAt;
            }

            $properties['credentialAuthorizedAt'] = $value;

            after_credentialAuthorizedAt:

            $value = $payload['scopes'] ?? null;

            if ($value === null) {
                $properties['scopes'] = null;
                goto after_scopes;
            }

            $properties['scopes'] = $value;

            after_scopes:

            $value = $payload['fingerprint'] ?? null;

            if ($value === null) {
                $properties['fingerprint'] = null;
                goto after_fingerprint;
            }

            $properties['fingerprint'] = $value;

            after_fingerprint:

            $value = $payload['credential_accessed_at'] ?? null;

            if ($value === null) {
                $properties['credentialAccessedAt'] = null;
                goto after_credentialAccessedAt;
            }

            $properties['credentialAccessedAt'] = $value;

            after_credentialAccessedAt:

            $value = $payload['authorized_credential_id'] ?? null;

            if ($value === null) {
                $properties['authorizedCredentialId'] = null;
                goto after_authorizedCredentialId;
            }

            $properties['authorizedCredentialId'] = $value;

            after_authorizedCredentialId:

            $value = $payload['authorized_credential_title'] ?? null;

            if ($value === null) {
                $properties['authorizedCredentialTitle'] = null;
                goto after_authorizedCredentialTitle;
            }

            $properties['authorizedCredentialTitle'] = $value;

            after_authorizedCredentialTitle:

            $value = $payload['authorized_credential_note'] ?? null;

            if ($value === null) {
                $properties['authorizedCredentialNote'] = null;
                goto after_authorizedCredentialNote;
            }

            $properties['authorizedCredentialNote'] = $value;

            after_authorizedCredentialNote:

            $value = $payload['authorized_credential_expires_at'] ?? null;

            if ($value === null) {
                $properties['authorizedCredentialExpiresAt'] = null;
                goto after_authorizedCredentialExpiresAt;
            }

            $properties['authorizedCredentialExpiresAt'] = $value;

            after_authorizedCredentialExpiresAt:

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
        after_login:        $result['login'] = $login;

        
        $credentialId = $object->credentialId;
        after_credentialId:        $result['credential_id'] = $credentialId;

        
        $credentialType = $object->credentialType;
        after_credentialType:        $result['credential_type'] = $credentialType;

        
        $tokenLastEight = $object->tokenLastEight;

        if ($tokenLastEight === null) {
            goto after_tokenLastEight;
        }
        after_tokenLastEight:        $result['token_last_eight'] = $tokenLastEight;

        
        $credentialAuthorizedAt = $object->credentialAuthorizedAt;
        after_credentialAuthorizedAt:        $result['credential_authorized_at'] = $credentialAuthorizedAt;

        
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

        
        $fingerprint = $object->fingerprint;

        if ($fingerprint === null) {
            goto after_fingerprint;
        }
        after_fingerprint:        $result['fingerprint'] = $fingerprint;

        
        $credentialAccessedAt = $object->credentialAccessedAt;

        if ($credentialAccessedAt === null) {
            goto after_credentialAccessedAt;
        }
        after_credentialAccessedAt:        $result['credential_accessed_at'] = $credentialAccessedAt;

        
        $authorizedCredentialId = $object->authorizedCredentialId;

        if ($authorizedCredentialId === null) {
            goto after_authorizedCredentialId;
        }
        after_authorizedCredentialId:        $result['authorized_credential_id'] = $authorizedCredentialId;

        
        $authorizedCredentialTitle = $object->authorizedCredentialTitle;

        if ($authorizedCredentialTitle === null) {
            goto after_authorizedCredentialTitle;
        }
        after_authorizedCredentialTitle:        $result['authorized_credential_title'] = $authorizedCredentialTitle;

        
        $authorizedCredentialNote = $object->authorizedCredentialNote;

        if ($authorizedCredentialNote === null) {
            goto after_authorizedCredentialNote;
        }
        after_authorizedCredentialNote:        $result['authorized_credential_note'] = $authorizedCredentialNote;

        
        $authorizedCredentialExpiresAt = $object->authorizedCredentialExpiresAt;

        if ($authorizedCredentialExpiresAt === null) {
            goto after_authorizedCredentialExpiresAt;
        }
        after_authorizedCredentialExpiresAt:        $result['authorized_credential_expires_at'] = $authorizedCredentialExpiresAt;


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
