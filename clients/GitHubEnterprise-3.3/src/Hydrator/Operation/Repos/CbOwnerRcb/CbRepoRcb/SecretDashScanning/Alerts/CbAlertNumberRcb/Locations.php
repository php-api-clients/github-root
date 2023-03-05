<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Locations implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocation($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Activity⚡️ListPublicEvents⚡️Response⚡️Applicationjson⚡️H503($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocationCommit' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocationCommit($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocation(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['details'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'details';
                    goto after_details;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'details';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocationCommit($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['details'] = $value;
    
                after_details:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️Activity⚡️ListPublicEvents⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\Activity\ListPublicEvents\Response\Applicationjson\H503
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['code'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'code';
                    goto after_code;
                }

                $properties['code'] = $value;
    
                after_code:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'documentation_url';
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

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocationCommit(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocationCommit
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'path';
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['start_line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'start_line';
                    goto after_start_line;
                }

                $properties['start_line'] = $value;
    
                after_start_line:

                $value = $payload['end_line'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'end_line';
                    goto after_end_line;
                }

                $properties['end_line'] = $value;
    
                after_end_line:

                $value = $payload['start_column'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'start_column';
                    goto after_start_column;
                }

                $properties['start_column'] = $value;
    
                after_start_column:

                $value = $payload['end_column'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'end_column';
                    goto after_end_column;
                }

                $properties['end_column'] = $value;
    
                after_end_column:

                $value = $payload['blob_sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'blob_sha';
                    goto after_blob_sha;
                }

                $properties['blob_sha'] = $value;
    
                after_blob_sha:

                $value = $payload['blob_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'blob_url';
                    goto after_blob_url;
                }

                $properties['blob_url'] = $value;
    
                after_blob_url:

                $value = $payload['commit_sha'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commit_sha';
                    goto after_commit_sha;
                }

                $properties['commit_sha'] = $value;
    
                after_commit_sha:

                $value = $payload['commit_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commit_url';
                    goto after_commit_url;
                }

                $properties['commit_url'] = $value;
    
                after_commit_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocationCommit', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocationCommit::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocationCommit(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocationCommit', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocation($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\SecretScanningLocation);
        $result = [];
        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $details = $object->details;

        if ($details === null) {
            goto after_details;
        }
        $details = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SecretScanningLocationCommit($details);
        after_details:        $result['details'] = $details;


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
