<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Downloads implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironmentDownloadStatus($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422⚡️Errors($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironmentDownloadStatus(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus
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
                $properties['downloadedAt'] = null;
                goto after_downloadedAt;
            }

            $properties['downloadedAt'] = $value;

            after_downloadedAt:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422⚡️Errors(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422⚡️Errors(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironmentDownloadStatus($object),
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422($object),
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422⚡️Errors($object),
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422($object),
            'ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironmentDownloadStatus(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus);
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

        
        $downloadedAt = $object->downloadedAt;

        if ($downloadedAt === null) {
            goto after_downloadedAt;
        }
        after_downloadedAt:        $result['downloaded_at'] = $downloadedAt;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422);
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownload⚡️Response⚡️Applicationjson⚡️H422⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload\Response\Applicationjson\H422\Errors);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422);
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
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operation⚡️EnterpriseAdmin⚡️StartPreReceiveEnvironmentDownloadStreaming⚡️Response⚡️Applicationjson⚡️H422⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadStreaming\Response\Applicationjson\H422\Errors);
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
