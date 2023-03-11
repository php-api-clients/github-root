<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Orgs\CbOrgRcb\Actions;

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
            'ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsOrg($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_count'] ?? null;
    
                if ($value === null) {
                    $properties['total_count'] = null;
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['runner_groups'] ?? null;
    
                if ($value === null) {
                    $properties['runner_groups'] = null;
                    goto after_runner_groups;
                }

                static $runner_groupsCaster1;
    
                if ($runner_groupsCaster1 === null) {
                    $runner_groupsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsOrg',
));
                }
    
                $value = $runner_groupsCaster1->cast($value, $this);

                $properties['runner_groups'] = $value;
    
                after_runner_groups:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsOrg(array $payload): \ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['visibility'] ?? null;
    
                if ($value === null) {
                    $properties['visibility'] = null;
                    goto after_visibility;
                }

                $properties['visibility'] = $value;
    
                after_visibility:

                $value = $payload['default'] ?? null;
    
                if ($value === null) {
                    $properties['default'] = null;
                    goto after_default;
                }

                $properties['default'] = $value;
    
                after_default:

                $value = $payload['selected_repositories_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'selected_repositories_url';
                    goto after_selected_repositories_url;
                }

                $properties['selected_repositories_url'] = $value;
    
                after_selected_repositories_url:

                $value = $payload['runners_url'] ?? null;
    
                if ($value === null) {
                    $properties['runners_url'] = null;
                    goto after_runners_url;
                }

                $properties['runners_url'] = $value;
    
                after_runners_url:

                $value = $payload['inherited'] ?? null;
    
                if ($value === null) {
                    $properties['inherited'] = null;
                    goto after_inherited;
                }

                $properties['inherited'] = $value;
    
                after_inherited:

                $value = $payload['inherited_allows_public_repositories'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'inherited_allows_public_repositories';
                    goto after_inherited_allows_public_repositories;
                }

                $properties['inherited_allows_public_repositories'] = $value;
    
                after_inherited_allows_public_repositories:

                $value = $payload['allows_public_repositories'] ?? null;
    
                if ($value === null) {
                    $properties['allows_public_repositories'] = null;
                    goto after_allows_public_repositories;
                }

                $properties['allows_public_repositories'] = $value;
    
                after_allows_public_repositories:

                $value = $payload['workflow_restrictions_read_only'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'workflow_restrictions_read_only';
                    goto after_workflow_restrictions_read_only;
                }

                $properties['workflow_restrictions_read_only'] = $value;
    
                after_workflow_restrictions_read_only:

                $value = $payload['restricted_to_workflows'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'restricted_to_workflows';
                    goto after_restricted_to_workflows;
                }

                $properties['restricted_to_workflows'] = $value;
    
                after_restricted_to_workflows:

                $value = $payload['selected_workflows'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'selected_workflows';
                    goto after_selected_workflows;
                }

                $properties['selected_workflows'] = $value;
    
                after_selected_workflows:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200($object),
                'ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsOrg($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️Actions⚡️ListSelfHostedRunnerGroupsForOrg⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\Actions\ListSelfHostedRunnerGroupsForOrg\Response\Applicationjson\H200);
        $result = [];
        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $runner_groups = $object->runner_groups;

        if ($runner_groups === null) {
            goto after_runner_groups;
        }
        static $runner_groupsSerializer0;

        if ($runner_groupsSerializer0 === null) {
            $runner_groupsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsOrg',
));
        }
        
        $runner_groups = $runner_groupsSerializer0->serialize($runner_groups, $this);
        after_runner_groups:        $result['runner_groups'] = $runner_groups;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️RunnerGroupsOrg(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $visibility = $object->visibility;

        if ($visibility === null) {
            goto after_visibility;
        }
        after_visibility:        $result['visibility'] = $visibility;

        
        $default = $object->default;

        if ($default === null) {
            goto after_default;
        }
        after_default:        $result['default'] = $default;

        
        $selected_repositories_url = $object->selected_repositories_url;
        after_selected_repositories_url:        $result['selected_repositories_url'] = $selected_repositories_url;

        
        $runners_url = $object->runners_url;

        if ($runners_url === null) {
            goto after_runners_url;
        }
        after_runners_url:        $result['runners_url'] = $runners_url;

        
        $inherited = $object->inherited;

        if ($inherited === null) {
            goto after_inherited;
        }
        after_inherited:        $result['inherited'] = $inherited;

        
        $inherited_allows_public_repositories = $object->inherited_allows_public_repositories;
        after_inherited_allows_public_repositories:        $result['inherited_allows_public_repositories'] = $inherited_allows_public_repositories;

        
        $allows_public_repositories = $object->allows_public_repositories;

        if ($allows_public_repositories === null) {
            goto after_allows_public_repositories;
        }
        after_allows_public_repositories:        $result['allows_public_repositories'] = $allows_public_repositories;

        
        $workflow_restrictions_read_only = $object->workflow_restrictions_read_only;
        after_workflow_restrictions_read_only:        $result['workflow_restrictions_read_only'] = $workflow_restrictions_read_only;

        
        $restricted_to_workflows = $object->restricted_to_workflows;
        after_restricted_to_workflows:        $result['restricted_to_workflows'] = $restricted_to_workflows;

        
        $selected_workflows = $object->selected_workflows;
        static $selected_workflowsSerializer0;

        if ($selected_workflowsSerializer0 === null) {
            $selected_workflowsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $selected_workflows = $selected_workflowsSerializer0->serialize($selected_workflows, $this);
        after_selected_workflows:        $result['selected_workflows'] = $selected_workflows;


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
