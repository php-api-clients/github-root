<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions;

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
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsEnterprise($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_count';
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['runner_groups'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runner_groups';
                goto after_runnerGroups;
            }

            static $runnerGroupsCaster1;

            if ($runnerGroupsCaster1 === null) {
                $runnerGroupsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise',
));
            }

            $value = $runnerGroupsCaster1->cast($value, $this);

            $properties['runnerGroups'] = $value;

            after_runnerGroups:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsEnterprise(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise
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

            $value = $payload['selected_organizations_url'] ?? null;

            if ($value === null) {
                $properties['selectedOrganizationsUrl'] = null;
                goto after_selectedOrganizationsUrl;
            }

            $properties['selectedOrganizationsUrl'] = $value;

            after_selectedOrganizationsUrl:

            $value = $payload['runners_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'runners_url';
                goto after_runnersUrl;
            }

            $properties['runnersUrl'] = $value;

            after_runnersUrl:

            $value = $payload['allows_public_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'allows_public_repositories';
                goto after_allowsPublicRepositories;
            }

            $properties['allowsPublicRepositories'] = $value;

            after_allowsPublicRepositories:

            $value = $payload['workflow_restrictions_read_only'] ?? null;

            if ($value === null) {
                $properties['workflowRestrictionsReadOnly'] = null;
                goto after_workflowRestrictionsReadOnly;
            }

            $properties['workflowRestrictionsReadOnly'] = $value;

            after_workflowRestrictionsReadOnly:

            $value = $payload['restricted_to_workflows'] ?? null;

            if ($value === null) {
                $properties['restrictedToWorkflows'] = null;
                goto after_restrictedToWorkflows;
            }

            $properties['restrictedToWorkflows'] = $value;

            after_restrictedToWorkflows:

            $value = $payload['selected_workflows'] ?? null;

            if ($value === null) {
                $properties['selectedWorkflows'] = null;
                goto after_selectedWorkflows;
            }

            $properties['selectedWorkflows'] = $value;

            after_selectedWorkflows:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsEnterprise($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️ListSelfHostedRunnerGroupsForEnterprise⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\Applicationjson\H200);
        $result = [];

        $totalCount = $object->totalCount;
        after_totalCount:        $result['total_count'] = $totalCount;

        
        $runnerGroups = $object->runnerGroups;
        static $runnerGroupsSerializer0;

        if ($runnerGroupsSerializer0 === null) {
            $runnerGroupsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise',
));
        }
        
        $runnerGroups = $runnerGroupsSerializer0->serialize($runnerGroups, $this);
        after_runnerGroups:        $result['runner_groups'] = $runnerGroups;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️RunnerGroupsEnterprise(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $visibility = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        
        $default = $object->default;
        after_default:        $result['default'] = $default;

        
        $selectedOrganizationsUrl = $object->selectedOrganizationsUrl;

        if ($selectedOrganizationsUrl === null) {
            goto after_selectedOrganizationsUrl;
        }
        after_selectedOrganizationsUrl:        $result['selected_organizations_url'] = $selectedOrganizationsUrl;

        
        $runnersUrl = $object->runnersUrl;
        after_runnersUrl:        $result['runners_url'] = $runnersUrl;

        
        $allowsPublicRepositories = $object->allowsPublicRepositories;
        after_allowsPublicRepositories:        $result['allows_public_repositories'] = $allowsPublicRepositories;

        
        $workflowRestrictionsReadOnly = $object->workflowRestrictionsReadOnly;

        if ($workflowRestrictionsReadOnly === null) {
            goto after_workflowRestrictionsReadOnly;
        }
        after_workflowRestrictionsReadOnly:        $result['workflow_restrictions_read_only'] = $workflowRestrictionsReadOnly;

        
        $restrictedToWorkflows = $object->restrictedToWorkflows;

        if ($restrictedToWorkflows === null) {
            goto after_restrictedToWorkflows;
        }
        after_restrictedToWorkflows:        $result['restricted_to_workflows'] = $restrictedToWorkflows;

        
        $selectedWorkflows = $object->selectedWorkflows;

        if ($selectedWorkflows === null) {
            goto after_selectedWorkflows;
        }
        static $selectedWorkflowsSerializer0;

        if ($selectedWorkflowsSerializer0 === null) {
            $selectedWorkflowsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $selectedWorkflows = $selectedWorkflowsSerializer0->serialize($selectedWorkflows, $this);
        after_selectedWorkflows:        $result['selected_workflows'] = $selectedWorkflows;


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
