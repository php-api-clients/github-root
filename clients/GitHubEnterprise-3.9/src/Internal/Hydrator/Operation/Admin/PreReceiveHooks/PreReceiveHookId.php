<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Admin\PreReceiveHooks;

use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment\Download;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\ScriptRepository;
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

class PreReceiveHookId implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\ScriptRepository' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️ScriptRepository($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment\Download' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment⚡️Download($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment\Download' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironment⚡️Download($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook(array $payload): PreReceiveHook
    {
        $properties    = [];
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

            $value = $payload['enforcement'] ?? null;

            if ($value === null) {
                $properties['enforcement'] = null;
                goto after_enforcement;
            }

            $properties['enforcement'] = $value;

            after_enforcement:

            $value = $payload['script'] ?? null;

            if ($value === null) {
                $properties['script'] = null;
                goto after_script;
            }

            $properties['script'] = $value;

            after_script:

            $value = $payload['script_repository'] ?? null;

            if ($value === null) {
                $properties['scriptRepository'] = null;
                goto after_scriptRepository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'scriptRepository';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️ScriptRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['scriptRepository'] = $value;

            after_scriptRepository:

            $value = $payload['environment'] ?? null;

            if ($value === null) {
                $properties['environment'] = null;
                goto after_environment;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'environment';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['environment'] = $value;

            after_environment:

            $value = $payload['allow_downstream_configuration'] ?? null;

            if ($value === null) {
                $properties['allowDownstreamConfiguration'] = null;
                goto after_allowDownstreamConfiguration;
            }

            $properties['allowDownstreamConfiguration'] = $value;

            after_allowDownstreamConfiguration:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(PreReceiveHook::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new PreReceiveHook(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️ScriptRepository(array $payload): ScriptRepository
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $properties['id'] = null;
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $properties['fullName'] = null;
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\ScriptRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(ScriptRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new ScriptRepository(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\ScriptRepository', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment(array $payload): Environment
    {
        $properties    = [];
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
                $properties['imageUrl'] = null;
                goto after_imageUrl;
            }

            $properties['imageUrl'] = $value;

            after_imageUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['default_environment'] ?? null;

            if ($value === null) {
                $properties['defaultEnvironment'] = null;
                goto after_defaultEnvironment;
            }

            $properties['defaultEnvironment'] = $value;

            after_defaultEnvironment:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['hooks_count'] ?? null;

            if ($value === null) {
                $properties['hooksCount'] = null;
                goto after_hooksCount;
            }

            $properties['hooksCount'] = $value;

            after_hooksCount:

            $value = $payload['download'] ?? null;

            if ($value === null) {
                $properties['download'] = null;
                goto after_download;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'download';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironment⚡️Download($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['download'] = $value;

            after_download:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Environment::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Environment(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment⚡️Download(array $payload): Download
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment\Download', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Download::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Download(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment\Download', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironment⚡️Download(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment\Download
    {
        $properties    = [];
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment\Download', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment\Download::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment\Download(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment\Download', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook($object),
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\ScriptRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️ScriptRepository($object),
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment($object),
                'ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook\Environment\Download' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment⚡️Download($object),
                default => throw new LogicException('No serialization defined for $className'),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook(mixed $object): mixed
    {
        assert($object instanceof PreReceiveHook);
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

        $enforcement = $object->enforcement;

        if ($enforcement === null) {
            goto after_enforcement;
        }

        after_enforcement:        $result['enforcement'] = $enforcement;

        $script = $object->script;

        if ($script === null) {
            goto after_script;
        }

        after_script:        $result['script'] = $script;

        $scriptRepository = $object->scriptRepository;

        if ($scriptRepository === null) {
            goto after_scriptRepository;
        }

        $scriptRepository                                           = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️ScriptRepository($scriptRepository);
        after_scriptRepository:        $result['script_repository'] = $scriptRepository;

        $environment = $object->environment;

        if ($environment === null) {
            goto after_environment;
        }

        $environment                                     = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment($environment);
        after_environment:        $result['environment'] = $environment;

        $allowDownstreamConfiguration = $object->allowDownstreamConfiguration;

        if ($allowDownstreamConfiguration === null) {
            goto after_allowDownstreamConfiguration;
        }

        after_allowDownstreamConfiguration:        $result['allow_downstream_configuration'] = $allowDownstreamConfiguration;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️ScriptRepository(mixed $object): mixed
    {
        assert($object instanceof ScriptRepository);
        $result = [];

        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }

        after_id:        $result['id'] = $id;

        $fullName = $object->fullName;

        if ($fullName === null) {
            goto after_fullName;
        }

        after_fullName:        $result['full_name'] = $fullName;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment(mixed $object): mixed
    {
        assert($object instanceof Environment);
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

        $imageUrl = $object->imageUrl;

        if ($imageUrl === null) {
            goto after_imageUrl;
        }

        after_imageUrl:        $result['image_url'] = $imageUrl;

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }

        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        $defaultEnvironment = $object->defaultEnvironment;

        if ($defaultEnvironment === null) {
            goto after_defaultEnvironment;
        }

        after_defaultEnvironment:        $result['default_environment'] = $defaultEnvironment;

        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }

        after_createdAt:        $result['created_at'] = $createdAt;

        $hooksCount = $object->hooksCount;

        if ($hooksCount === null) {
            goto after_hooksCount;
        }

        after_hooksCount:        $result['hooks_count'] = $hooksCount;

        $download = $object->download;

        if ($download === null) {
            goto after_download;
        }

        $download                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveEnvironment⚡️Download($download);
        after_download:        $result['download'] = $download;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️PreReceiveHook⚡️Environment⚡️Download(mixed $object): mixed
    {
        assert($object instanceof Download);
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
