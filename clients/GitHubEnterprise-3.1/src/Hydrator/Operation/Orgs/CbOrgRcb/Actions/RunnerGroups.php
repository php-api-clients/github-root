<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Orgs\CbOrgRcb\Actions;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class RunnerGroups implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsOrg($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_total_count;
            }

            $properties['total_count'] = $value;

            after_total_count:

            $value = $payload['runner_groups'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runner_groups';
                goto after_runner_groups;
            }

            static $runner_groupsCaster1;

            if ($runner_groupsCaster1 === null) {
                $runner_groupsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg',
));
            }

            $value = $runner_groupsCaster1->cast($value, $this);

            $properties['runner_groups'] = $value;

            after_runner_groups:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsOrg(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg
    {
        $properties = []; 
        $missingFields = [];
        try {
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

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $missingFields[] = 'visibility';
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['default'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default';
                goto after_default;
            }

            $properties['default'] = $value;

            after_default:

            $value = $payload['selected_repositories_url'] ?? null;

            if ($value === null) {
                $properties['selected_repositories_url'] = null;
                goto after_selected_repositories_url;
            }

            $properties['selected_repositories_url'] = $value;

            after_selected_repositories_url:

            $value = $payload['runners_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runners_url';
                goto after_runners_url;
            }

            $properties['runners_url'] = $value;

            after_runners_url:

            $value = $payload['inherited'] ?? null;

            if ($value === null) {
                $missingFields[] = 'inherited';
                goto after_inherited;
            }

            $properties['inherited'] = $value;

            after_inherited:

            $value = $payload['inherited_allows_public_repositories'] ?? null;

            if ($value === null) {
                $properties['inherited_allows_public_repositories'] = null;
                goto after_inherited_allows_public_repositories;
            }

            $properties['inherited_allows_public_repositories'] = $value;

            after_inherited_allows_public_repositories:

            $value = $payload['allows_public_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'allows_public_repositories';
                goto after_allows_public_repositories;
            }

            $properties['allows_public_repositories'] = $value;

            after_allows_public_repositories:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsOrg($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200);
        $result = [];

        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $runner_groups = $object->runner_groups;
        static $runner_groupsSerializer0;

        if ($runner_groupsSerializer0 === null) {
            $runner_groupsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg',
));
        }
        
        $runner_groups = $runner_groupsSerializer0->serialize($runner_groups, $this);
        after_runner_groups:        $result['runner_groups'] = $runner_groups;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsOrg(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $visibility = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        
        $default = $object->default;
        after_default:        $result['default'] = $default;

        
        $selected_repositories_url = $object->selected_repositories_url;

        if ($selected_repositories_url === null) {
            goto after_selected_repositories_url;
        }
        after_selected_repositories_url:        $result['selected_repositories_url'] = $selected_repositories_url;

        
        $runners_url = $object->runners_url;
        after_runners_url:        $result['runners_url'] = $runners_url;

        
        $inherited = $object->inherited;
        after_inherited:        $result['inherited'] = $inherited;

        
        $inherited_allows_public_repositories = $object->inherited_allows_public_repositories;

        if ($inherited_allows_public_repositories === null) {
            goto after_inherited_allows_public_repositories;
        }
        after_inherited_allows_public_repositories:        $result['inherited_allows_public_repositories'] = $inherited_allows_public_repositories;

        
        $allows_public_repositories = $object->allows_public_repositories;
        after_allows_public_repositories:        $result['allows_public_repositories'] = $allows_public_repositories;


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
