<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Admin\PreDashReceiveDashEnvironments;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbPreReceiveEnvironmentIdRcb implements ObjectMapper
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
            'ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment($payload),
                'ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment⚡️Download($payload),
                'ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422($payload),
                'ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment(array $payload): \ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment
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

                $value = $payload['image_url'] ?? null;
    
                if ($value === null) {
                    $properties['image_url'] = null;
                    goto after_image_url;
                }

                $properties['image_url'] = $value;
    
                after_image_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
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

                $value = $payload['default_environment'] ?? null;
    
                if ($value === null) {
                    $properties['default_environment'] = null;
                    goto after_default_environment;
                }

                $properties['default_environment'] = $value;
    
                after_default_environment:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['hooks_count'] ?? null;
    
                if ($value === null) {
                    $properties['hooks_count'] = null;
                    goto after_hooks_count;
                }

                $properties['hooks_count'] = $value;
    
                after_hooks_count:

                $value = $payload['download'] ?? null;
    
                if ($value === null) {
                    $properties['download'] = null;
                    goto after_download;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'download';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment⚡️Download($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['download'] = $value;
    
                after_download:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment⚡️Download(array $payload): \ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['downloaded_at'] ?? null;
    
                if ($value === null) {
                    $properties['downloaded_at'] = null;
                    goto after_downloaded_at;
                }

                $properties['downloaded_at'] = $value;
    
                after_downloaded_at:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422
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

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $properties['errors'] = null;
                    goto after_errors;
                }

                static $errorsCaster1;
    
                if ($errorsCaster1 === null) {
                    $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors',
));
                }
    
                $value = $errorsCaster1->cast($value, $this);

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422⚡️Errors(array $payload): \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['resource'] ?? null;
    
                if ($value === null) {
                    $properties['resource'] = null;
                    goto after_resource;
                }

                $properties['resource'] = $value;
    
                after_resource:

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

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment($object),
                'ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment⚡️Download($object),
                'ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422($object),
                'ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422⚡️Errors($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment);
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

        
        $image_url = $object->image_url;

        if ($image_url === null) {
            goto after_image_url;
        }
        after_image_url:        $result['image_url'] = $image_url;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $default_environment = $object->default_environment;

        if ($default_environment === null) {
            goto after_default_environment;
        }
        after_default_environment:        $result['default_environment'] = $default_environment;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $hooks_count = $object->hooks_count;

        if ($hooks_count === null) {
            goto after_hooks_count;
        }
        after_hooks_count:        $result['hooks_count'] = $hooks_count;

        
        $download = $object->download;

        if ($download === null) {
            goto after_download;
        }
        $download = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment⚡️Download($download);
        after_download:        $result['download'] = $download;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️PreReceiveEnvironment⚡️Download(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment\Download);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $downloaded_at = $object->downloaded_at;

        if ($downloaded_at === null) {
            goto after_downloaded_at;
        }
        after_downloaded_at:        $result['downloaded_at'] = $downloaded_at;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️DeletePreReceiveEnvironment⚡️Response⚡️Applicationjson⚡️H422⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment\Response\Applicationjson\H422\Errors);
        $result = [];
        
        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
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
