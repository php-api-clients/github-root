<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class AdvancedSecurity implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersRepository($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersUser($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_advanced_security_committers'] ?? null;

            if ($value === null) {
                $properties['totalAdvancedSecurityCommitters'] = null;
                goto after_totalAdvancedSecurityCommitters;
            }

            $properties['totalAdvancedSecurityCommitters'] = $value;

            after_totalAdvancedSecurityCommitters:

            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $properties['totalCount'] = null;
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories';
                goto after_repositories;
            }

            static $repositoriesCaster1;

            if ($repositoriesCaster1 === null) {
                $repositoriesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersRepository',
));
            }

            $value = $repositoriesCaster1->cast($value, $this);

            $properties['repositories'] = $value;

            after_repositories:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersRepository(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['advanced_security_committers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'advanced_security_committers';
                goto after_advancedSecurityCommitters;
            }

            $properties['advancedSecurityCommitters'] = $value;

            after_advancedSecurityCommitters:

            $value = $payload['advanced_security_committers_breakdown'] ?? null;

            if ($value === null) {
                $missingFields[] = 'advanced_security_committers_breakdown';
                goto after_advancedSecurityCommittersBreakdown;
            }

            static $advancedSecurityCommittersBreakdownCaster1;

            if ($advancedSecurityCommittersBreakdownCaster1 === null) {
                $advancedSecurityCommittersBreakdownCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersUser',
));
            }

            $value = $advancedSecurityCommittersBreakdownCaster1->cast($value, $this);

            $properties['advancedSecurityCommittersBreakdown'] = $value;

            after_advancedSecurityCommittersBreakdown:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersUser(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['user_login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user_login';
                goto after_userLogin;
            }

            $properties['userLogin'] = $value;

            after_userLogin:

            $value = $payload['last_pushed_date'] ?? null;

            if ($value === null) {
                $missingFields[] = 'last_pushed_date';
                goto after_lastPushedDate;
            }

            $properties['lastPushedDate'] = $value;

            after_lastPushedDate:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\BasicError
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters($object),
            'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersRepository($object),
            'ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersUser($object),
            'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommitters(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters);
        $result = [];

        $totalAdvancedSecurityCommitters = $object->totalAdvancedSecurityCommitters;

        if ($totalAdvancedSecurityCommitters === null) {
            goto after_totalAdvancedSecurityCommitters;
        }
        after_totalAdvancedSecurityCommitters:        $result['total_advanced_security_committers'] = $totalAdvancedSecurityCommitters;

        
        $totalCount = $object->totalCount;

        if ($totalCount === null) {
            goto after_totalCount;
        }
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $repositories = $object->repositories;
        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersRepository',
));
        }
        
        $repositories = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersRepository);
        $result = [];

        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $advancedSecurityCommitters = $object->advancedSecurityCommitters;
        after_advancedSecurityCommitters:        $result['advanced_security_committers'] = $advancedSecurityCommitters;

        
        $advancedSecurityCommittersBreakdown = $object->advancedSecurityCommittersBreakdown;
        static $advancedSecurityCommittersBreakdownSerializer0;

        if ($advancedSecurityCommittersBreakdownSerializer0 === null) {
            $advancedSecurityCommittersBreakdownSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersUser',
));
        }
        
        $advancedSecurityCommittersBreakdown = $advancedSecurityCommittersBreakdownSerializer0->serialize($advancedSecurityCommittersBreakdown, $this);
        after_advancedSecurityCommittersBreakdown:        $result['advanced_security_committers_breakdown'] = $advancedSecurityCommittersBreakdown;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser);
        $result = [];

        $userLogin = $object->userLogin;
        after_userLogin:        $result['user_login'] = $userLogin;

        
        $lastPushedDate = $object->lastPushedDate;
        after_lastPushedDate:        $result['last_pushed_date'] = $lastPushedDate;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\BasicError);
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
