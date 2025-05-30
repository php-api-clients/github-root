<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Hydrator\Operation\Orgs\Org\Actions\Runners;

use ApiClients\Client\GitHub\Schema\AuthenticationToken;
use ApiClients\Client\GitHub\Schema\AuthenticationToken\Permissions;
use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime;
use EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;
use LogicException;
use Throwable;

use function array_pop;
use function assert;
use function count;
use function is_a;
use function is_array;

class RegistrationToken implements ObjectMapper
{
    private array $hydrationStack = [];

    public function __construct()
    {
    }

    /**
     * @param class-string<T> $className
     *
     * @return T
     *
     * @template T of object
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match ($className) {
            'ApiClients\Client\GitHub\Schema\AuthenticationToken' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken($payload),
                'ApiClients\Client\GitHub\Schema\AuthenticationToken\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken⚡️Permissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken(array $payload): AuthenticationToken
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['token'] ?? null;

            if ($value === null) {
                $missingFields[] = 'token';
                goto after_token;
            }

            $properties['token'] = $value;

            after_token:

            $value = $payload['expires_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'expires_at';
                goto after_expiresAt;
            }

            $properties['expiresAt'] = $value;

            after_expiresAt:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['repositories'] ?? null;

            if ($value === null) {
                $properties['repositories'] = null;
                goto after_repositories;
            }

            $properties['repositories'] = $value;

            after_repositories:

            $value = $payload['single_file'] ?? null;

            if ($value === null) {
                $properties['singleFile'] = null;
                goto after_singleFile;
            }

            $properties['singleFile'] = $value;

            after_singleFile:

            $value = $payload['repository_selection'] ?? null;

            if ($value === null) {
                $properties['repositorySelection'] = null;
                goto after_repositorySelection;
            }

            $properties['repositorySelection'] = $value;

            after_repositorySelection:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AuthenticationToken', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(AuthenticationToken::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new AuthenticationToken(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AuthenticationToken', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken⚡️Permissions(array $payload): Permissions
    {
        $properties    = [];
        $missingFields = [];
        try {
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AuthenticationToken\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Permissions(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\AuthenticationToken\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new LogicException('No type mapped for object of class: ' . $object::class);
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }

    /**
     * @param T               $object
     * @param class-string<T> $className
     *
     * @template T
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match ($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\AuthenticationToken' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken($object),
                default => throw new LogicException("No serialization defined for $className"),
            };
        } catch (Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }

    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeArrayItems(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeUuidToString(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;

        if ($serializer === null) {
            $serializer = new SerializeDateTime(...[]);
        }

        return $serializer->serialize($value, $this);
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken(mixed $object): mixed
    {
        assert($object instanceof AuthenticationToken);
        $result = [];

        $token                               = $object->token;
        after_token:        $result['token'] = $token;

        $expiresAt                                    = $object->expiresAt;
        after_expiresAt:        $result['expires_at'] = $expiresAt;

        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }

        $permissions                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️AuthenticationToken⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        $repositories = $object->repositories;

        if ($repositories === null) {
            goto after_repositories;
        }

        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new SerializeArrayItems(...[]);
        }

        $repositories                                      = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

        $singleFile = $object->singleFile;

        if ($singleFile === null) {
            goto after_singleFile;
        }

        after_singleFile:        $result['single_file'] = $singleFile;

        $repositorySelection = $object->repositorySelection;

        if ($repositorySelection === null) {
            goto after_repositorySelection;
        }

        after_repositorySelection:        $result['repository_selection'] = $repositorySelection;

        return $result;
    }

    /**
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     *
     * @template T
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
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     *
     * @template T
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
