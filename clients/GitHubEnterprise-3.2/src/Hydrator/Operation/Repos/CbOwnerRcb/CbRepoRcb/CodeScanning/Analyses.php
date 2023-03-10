<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Analyses implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysis($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysisTool($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Activity⚡️ListPublicEvents⚡️Response⚡️Applicationjson⚡️H503($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysis(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['commit_sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit_sha';
                goto after_commit_sha;
            }

            $properties['commit_sha'] = $value;

            after_commit_sha:

            $value = $payload['analysis_key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'analysis_key';
                goto after_analysis_key;
            }

            $properties['analysis_key'] = $value;

            after_analysis_key:

            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $missingFields[] = 'environment';
                goto after_environment;
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['category'] ?? null;

            if ($value === null) {
                $properties['category'] = null;
                goto after_category;
            }

            $properties['category'] = $value;

            after_category:

            $value = $payload['error'] ?? null;

            if ($value === null) {
                $missingFields[] = 'error';
                goto after_error;
            }

            $properties['error'] = $value;

            after_error:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['results_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'results_count';
                goto after_results_count;
            }

            $properties['results_count'] = $value;

            after_results_count:

            $value = $payload['rules_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'rules_count';
                goto after_rules_count;
            }

            $properties['rules_count'] = $value;

            after_rules_count:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['sarif_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sarif_id';
                goto after_sarif_id;
            }

            $properties['sarif_id'] = $value;

            after_sarif_id:

            $value = $payload['tool'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tool';
                goto after_tool;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tool';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysisTool($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tool'] = $value;

            after_tool:

            $value = $payload['deletable'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deletable';
                goto after_deletable;
            }

            $properties['deletable'] = $value;

            after_deletable:

            $value = $payload['warning'] ?? null;

            if ($value === null) {
                $missingFields[] = 'warning';
                goto after_warning;
            }

            $properties['warning'] = $value;

            after_warning:

            $value = $payload['tool_name'] ?? null;

            if ($value === null) {
                $properties['tool_name'] = null;
                goto after_tool_name;
            }

            $properties['tool_name'] = $value;

            after_tool_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysisTool(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['version'] ?? null;

            if ($value === null) {
                $properties['version'] = null;
                goto after_version;
            }

            $properties['version'] = $value;

            after_version:

            $value = $payload['guid'] ?? null;

            if ($value === null) {
                $properties['guid'] = null;
                goto after_guid;
            }

            $properties['guid'] = $value;

            after_guid:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool', $exception, stack: $this->hydrationStack);
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

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Activity⚡️ListPublicEvents⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysis($object),
            'ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysisTool($object),
            'ApiClients\Client\GitHubEnterprise\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Activity⚡️ListPublicEvents⚡️Response⚡️Applicationjson⚡️H503($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysis(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis);
        $result = [];

        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $commit_sha = $object->commit_sha;
        after_commit_sha:        $result['commit_sha'] = $commit_sha;

        
        $analysis_key = $object->analysis_key;
        after_analysis_key:        $result['analysis_key'] = $analysis_key;

        
        $environment = $object->environment;
        after_environment:        $result['environment'] = $environment;

        
        $category = $object->category;

        if ($category === null) {
            goto after_category;
        }
        after_category:        $result['category'] = $category;

        
        $error = $object->error;
        after_error:        $result['error'] = $error;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $results_count = $object->results_count;
        after_results_count:        $result['results_count'] = $results_count;

        
        $rules_count = $object->rules_count;
        after_rules_count:        $result['rules_count'] = $rules_count;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $sarif_id = $object->sarif_id;
        after_sarif_id:        $result['sarif_id'] = $sarif_id;

        
        $tool = $object->tool;
        $tool = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysisTool($tool);
        after_tool:        $result['tool'] = $tool;

        
        $deletable = $object->deletable;
        after_deletable:        $result['deletable'] = $deletable;

        
        $warning = $object->warning;
        after_warning:        $result['warning'] = $warning;

        
        $tool_name = $object->tool_name;

        if ($tool_name === null) {
            goto after_tool_name;
        }
        after_tool_name:        $result['tool_name'] = $tool_name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CodeScanningAnalysisTool(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisTool);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $version = $object->version;

        if ($version === null) {
            goto after_version;
        }
        after_version:        $result['version'] = $version;

        
        $guid = $object->guid;

        if ($guid === null) {
            goto after_guid;
        }
        after_guid:        $result['guid'] = $guid;


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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Activity⚡️ListPublicEvents⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
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
