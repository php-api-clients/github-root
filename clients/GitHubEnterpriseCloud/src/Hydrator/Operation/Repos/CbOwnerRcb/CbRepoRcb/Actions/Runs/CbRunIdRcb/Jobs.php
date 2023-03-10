<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Jobs implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Actions⚡️ListJobsForWorkflowRunAttempt⚡️Response⚡️Applicationjson⚡️H200($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Job' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job⚡️Steps($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Actions⚡️ListJobsForWorkflowRunAttempt⚡️Response⚡️Applicationjson⚡️H200(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200
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

            $value = $payload['jobs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'jobs';
                goto after_jobs;
            }

            static $jobsCaster1;

            if ($jobsCaster1 === null) {
                $jobsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job',
));
            }

            $value = $jobsCaster1->cast($value, $this);

            $properties['jobs'] = $value;

            after_jobs:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Job
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

            $value = $payload['run_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_id';
                goto after_run_id;
            }

            $properties['run_id'] = $value;

            after_run_id:

            $value = $payload['run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'run_url';
                goto after_run_url;
            }

            $properties['run_url'] = $value;

            after_run_url:

            $value = $payload['run_attempt'] ?? null;

            if ($value === null) {
                $properties['run_attempt'] = null;
                goto after_run_attempt;
            }

            $properties['run_attempt'] = $value;

            after_run_attempt:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['head_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'head_sha';
                goto after_head_sha;
            }

            $properties['head_sha'] = $value;

            after_head_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['html_url'] = null;
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'started_at';
                goto after_started_at;
            }

            $properties['started_at'] = $value;

            after_started_at:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completed_at'] = null;
                goto after_completed_at;
            }

            $properties['completed_at'] = $value;

            after_completed_at:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['steps'] ?? null;

            if ($value === null) {
                $properties['steps'] = null;
                goto after_steps;
            }

            static $stepsCaster1;

            if ($stepsCaster1 === null) {
                $stepsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job\\Steps',
));
            }

            $value = $stepsCaster1->cast($value, $this);

            $properties['steps'] = $value;

            after_steps:

            $value = $payload['check_run_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'check_run_url';
                goto after_check_run_url;
            }

            $properties['check_run_url'] = $value;

            after_check_run_url:

            $value = $payload['labels'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels';
                goto after_labels;
            }

            $properties['labels'] = $value;

            after_labels:

            $value = $payload['runner_id'] ?? null;

            if ($value === null) {
                $properties['runner_id'] = null;
                goto after_runner_id;
            }

            $properties['runner_id'] = $value;

            after_runner_id:

            $value = $payload['runner_name'] ?? null;

            if ($value === null) {
                $properties['runner_name'] = null;
                goto after_runner_name;
            }

            $properties['runner_name'] = $value;

            after_runner_name:

            $value = $payload['runner_group_id'] ?? null;

            if ($value === null) {
                $properties['runner_group_id'] = null;
                goto after_runner_group_id;
            }

            $properties['runner_group_id'] = $value;

            after_runner_group_id:

            $value = $payload['runner_group_name'] ?? null;

            if ($value === null) {
                $properties['runner_group_name'] = null;
                goto after_runner_group_name;
            }

            $properties['runner_group_name'] = $value;

            after_runner_group_name:

            $value = $payload['workflow_name'] ?? null;

            if ($value === null) {
                $properties['workflow_name'] = null;
                goto after_workflow_name;
            }

            $properties['workflow_name'] = $value;

            after_workflow_name:

            $value = $payload['head_branch'] ?? null;

            if ($value === null) {
                $properties['head_branch'] = null;
                goto after_head_branch;
            }

            $properties['head_branch'] = $value;

            after_head_branch:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Job', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\Job::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\Job(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Job', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job⚡️Steps(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['conclusion'] ?? null;

            if ($value === null) {
                $properties['conclusion'] = null;
                goto after_conclusion;
            }

            $properties['conclusion'] = $value;

            after_conclusion:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['number'] ?? null;

            if ($value === null) {
                $missingFields[] = 'number';
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['started_at'] ?? null;

            if ($value === null) {
                $properties['started_at'] = null;
                goto after_started_at;
            }

            $properties['started_at'] = $value;

            after_started_at:

            $value = $payload['completed_at'] ?? null;

            if ($value === null) {
                $properties['completed_at'] = null;
                goto after_completed_at;
            }

            $properties['completed_at'] = $value;

            after_completed_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Actions⚡️ListJobsForWorkflowRunAttempt⚡️Response⚡️Applicationjson⚡️H200($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Job' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job⚡️Steps($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Operation⚡️Actions⚡️ListJobsForWorkflowRunAttempt⚡️Response⚡️Applicationjson⚡️H200(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\Operation\Actions\ListJobsForWorkflowRunAttempt\Response\Applicationjson\H200);
        $result = [];

        $total_count = $object->total_count;
        after_total_count:        $result['total_count'] = $total_count;

        
        $jobs = $object->jobs;
        static $jobsSerializer0;

        if ($jobsSerializer0 === null) {
            $jobsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job',
));
        }
        
        $jobs = $jobsSerializer0->serialize($jobs, $this);
        after_jobs:        $result['jobs'] = $jobs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\Job);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $run_id = $object->run_id;
        after_run_id:        $result['run_id'] = $run_id;

        
        $run_url = $object->run_url;
        after_run_url:        $result['run_url'] = $run_url;

        
        $run_attempt = $object->run_attempt;

        if ($run_attempt === null) {
            goto after_run_attempt;
        }
        after_run_attempt:        $result['run_attempt'] = $run_attempt;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $head_sha = $object->head_sha;
        after_head_sha:        $result['head_sha'] = $head_sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $started_at = $object->started_at;
        after_started_at:        $result['started_at'] = $started_at;

        
        $completed_at = $object->completed_at;

        if ($completed_at === null) {
            goto after_completed_at;
        }
        after_completed_at:        $result['completed_at'] = $completed_at;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $steps = $object->steps;

        if ($steps === null) {
            goto after_steps;
        }
        static $stepsSerializer0;

        if ($stepsSerializer0 === null) {
            $stepsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job\\Steps',
));
        }
        
        $steps = $stepsSerializer0->serialize($steps, $this);
        after_steps:        $result['steps'] = $steps;

        
        $check_run_url = $object->check_run_url;
        after_check_run_url:        $result['check_run_url'] = $check_run_url;

        
        $labels = $object->labels;
        static $labelsSerializer0;

        if ($labelsSerializer0 === null) {
            $labelsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $labels = $labelsSerializer0->serialize($labels, $this);
        after_labels:        $result['labels'] = $labels;

        
        $runner_id = $object->runner_id;

        if ($runner_id === null) {
            goto after_runner_id;
        }
        after_runner_id:        $result['runner_id'] = $runner_id;

        
        $runner_name = $object->runner_name;

        if ($runner_name === null) {
            goto after_runner_name;
        }
        after_runner_name:        $result['runner_name'] = $runner_name;

        
        $runner_group_id = $object->runner_group_id;

        if ($runner_group_id === null) {
            goto after_runner_group_id;
        }
        after_runner_group_id:        $result['runner_group_id'] = $runner_group_id;

        
        $runner_group_name = $object->runner_group_name;

        if ($runner_group_name === null) {
            goto after_runner_group_name;
        }
        after_runner_group_name:        $result['runner_group_name'] = $runner_group_name;

        
        $workflow_name = $object->workflow_name;

        if ($workflow_name === null) {
            goto after_workflow_name;
        }
        after_workflow_name:        $result['workflow_name'] = $workflow_name;

        
        $head_branch = $object->head_branch;

        if ($head_branch === null) {
            goto after_head_branch;
        }
        after_head_branch:        $result['head_branch'] = $head_branch;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️Job⚡️Steps(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\Job\Steps);
        $result = [];

        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $conclusion = $object->conclusion;

        if ($conclusion === null) {
            goto after_conclusion;
        }
        after_conclusion:        $result['conclusion'] = $conclusion;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $number = $object->number;
        after_number:        $result['number'] = $number;

        
        $started_at = $object->started_at;

        if ($started_at === null) {
            goto after_started_at;
        }
        after_started_at:        $result['started_at'] = $started_at;

        
        $completed_at = $object->completed_at;

        if ($completed_at === null) {
            goto after_completed_at;
        }
        after_completed_at:        $result['completed_at'] = $completed_at;


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
