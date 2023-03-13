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
                $properties['total_advanced_security_committers'] = null;
                goto after_total_advanced_security_committers;
            }

            $properties['total_advanced_security_committers'] = $value;

            after_total_advanced_security_committers:

            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $properties['total_count'] = null;
                goto after_total_count;
            }

            $properties['total_count'] = $value;

            after_total_count:

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
                goto after_advanced_security_committers;
            }

            $properties['advanced_security_committers'] = $value;

            after_advanced_security_committers:

            $value = $payload['advanced_security_committers_breakdown'] ?? null;

            if ($value === null) {
                $missingFields[] = 'advanced_security_committers_breakdown';
                goto after_advanced_security_committers_breakdown;
            }

            static $advanced_security_committers_breakdownCaster1;

            if ($advanced_security_committers_breakdownCaster1 === null) {
                $advanced_security_committers_breakdownCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersUser',
));
            }

            $value = $advanced_security_committers_breakdownCaster1->cast($value, $this);

            $properties['advanced_security_committers_breakdown'] = $value;

            after_advanced_security_committers_breakdown:

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
                goto after_user_login;
            }

            $properties['user_login'] = $value;

            after_user_login:

            $value = $payload['last_pushed_date'] ?? null;

            if ($value === null) {
                $missingFields[] = 'last_pushed_date';
                goto after_last_pushed_date;
            }

            $properties['last_pushed_date'] = $value;

            after_last_pushed_date:

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

        $total_advanced_security_committers = $object->total_advanced_security_committers;

        if ($total_advanced_security_committers === null) {
            goto after_total_advanced_security_committers;
        }
        after_total_advanced_security_committers:        $result['total_advanced_security_committers'] = $total_advanced_security_committers;

        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
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

        
        $advanced_security_committers = $object->advanced_security_committers;
        after_advanced_security_committers:        $result['advanced_security_committers'] = $advanced_security_committers;

        
        $advanced_security_committers_breakdown = $object->advanced_security_committers_breakdown;
        static $advanced_security_committers_breakdownSerializer0;

        if ($advanced_security_committers_breakdownSerializer0 === null) {
            $advanced_security_committers_breakdownSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersUser',
));
        }
        
        $advanced_security_committers_breakdown = $advanced_security_committers_breakdownSerializer0->serialize($advanced_security_committers_breakdown, $this);
        after_advanced_security_committers_breakdown:        $result['advanced_security_committers_breakdown'] = $advanced_security_committers_breakdown;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AdvancedSecurityActiveCommittersUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommittersUser);
        $result = [];

        $user_login = $object->user_login;
        after_user_login:        $result['user_login'] = $user_login;

        
        $last_pushed_date = $object->last_pushed_date;
        after_last_pushed_date:        $result['last_pushed_date'] = $last_pushed_date;


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
