<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Enterprises\CbEnterpriseRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CodeSecurityAndAnalysis implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['advanced_security_enabled_for_new_repositories'] ?? null;
    
                if ($value === null) {
                    $properties['advanced_security_enabled_for_new_repositories'] = null;
                    goto after_advanced_security_enabled_for_new_repositories;
                }

                $properties['advanced_security_enabled_for_new_repositories'] = $value;
    
                after_advanced_security_enabled_for_new_repositories:

                $value = $payload['dependabot_alerts_enabled_for_new_repositories'] ?? null;
    
                if ($value === null) {
                    $properties['dependabot_alerts_enabled_for_new_repositories'] = null;
                    goto after_dependabot_alerts_enabled_for_new_repositories;
                }

                $properties['dependabot_alerts_enabled_for_new_repositories'] = $value;
    
                after_dependabot_alerts_enabled_for_new_repositories:

                $value = $payload['secret_scanning_enabled_for_new_repositories'] ?? null;
    
                if ($value === null) {
                    $properties['secret_scanning_enabled_for_new_repositories'] = null;
                    goto after_secret_scanning_enabled_for_new_repositories;
                }

                $properties['secret_scanning_enabled_for_new_repositories'] = $value;
    
                after_secret_scanning_enabled_for_new_repositories:

                $value = $payload['secret_scanning_push_protection_enabled_for_new_repositories'] ?? null;
    
                if ($value === null) {
                    $properties['secret_scanning_push_protection_enabled_for_new_repositories'] = null;
                    goto after_secret_scanning_push_protection_enabled_for_new_repositories;
                }

                $properties['secret_scanning_push_protection_enabled_for_new_repositories'] = $value;
    
                after_secret_scanning_push_protection_enabled_for_new_repositories:

                $value = $payload['secret_scanning_push_protection_custom_link'] ?? null;
    
                if ($value === null) {
                    $properties['secret_scanning_push_protection_custom_link'] = null;
                    goto after_secret_scanning_push_protection_custom_link;
                }

                $properties['secret_scanning_push_protection_custom_link'] = $value;
    
                after_secret_scanning_push_protection_custom_link:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings);
        $result = [];
        
        $advanced_security_enabled_for_new_repositories = $object->advanced_security_enabled_for_new_repositories;

        if ($advanced_security_enabled_for_new_repositories === null) {
            goto after_advanced_security_enabled_for_new_repositories;
        }
        after_advanced_security_enabled_for_new_repositories:        $result['advanced_security_enabled_for_new_repositories'] = $advanced_security_enabled_for_new_repositories;

        
        $dependabot_alerts_enabled_for_new_repositories = $object->dependabot_alerts_enabled_for_new_repositories;

        if ($dependabot_alerts_enabled_for_new_repositories === null) {
            goto after_dependabot_alerts_enabled_for_new_repositories;
        }
        after_dependabot_alerts_enabled_for_new_repositories:        $result['dependabot_alerts_enabled_for_new_repositories'] = $dependabot_alerts_enabled_for_new_repositories;

        
        $secret_scanning_enabled_for_new_repositories = $object->secret_scanning_enabled_for_new_repositories;

        if ($secret_scanning_enabled_for_new_repositories === null) {
            goto after_secret_scanning_enabled_for_new_repositories;
        }
        after_secret_scanning_enabled_for_new_repositories:        $result['secret_scanning_enabled_for_new_repositories'] = $secret_scanning_enabled_for_new_repositories;

        
        $secret_scanning_push_protection_enabled_for_new_repositories = $object->secret_scanning_push_protection_enabled_for_new_repositories;

        if ($secret_scanning_push_protection_enabled_for_new_repositories === null) {
            goto after_secret_scanning_push_protection_enabled_for_new_repositories;
        }
        after_secret_scanning_push_protection_enabled_for_new_repositories:        $result['secret_scanning_push_protection_enabled_for_new_repositories'] = $secret_scanning_push_protection_enabled_for_new_repositories;

        
        $secret_scanning_push_protection_custom_link = $object->secret_scanning_push_protection_custom_link;

        if ($secret_scanning_push_protection_custom_link === null) {
            goto after_secret_scanning_push_protection_custom_link;
        }
        after_secret_scanning_push_protection_custom_link:        $result['secret_scanning_push_protection_custom_link'] = $secret_scanning_push_protection_custom_link;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError);
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
