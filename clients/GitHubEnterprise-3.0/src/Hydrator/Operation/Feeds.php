<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Feeds implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\Feed' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Feed\Links' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed⚡️Links($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\LinkWithType' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Feed
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['timeline_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timeline_url';
                goto after_timeline_url;
            }

            $properties['timeline_url'] = $value;

            after_timeline_url:

            $value = $payload['user_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user_url';
                goto after_user_url;
            }

            $properties['user_url'] = $value;

            after_user_url:

            $value = $payload['current_user_public_url'] ?? null;

            if ($value === null) {
                $properties['current_user_public_url'] = null;
                goto after_current_user_public_url;
            }

            $properties['current_user_public_url'] = $value;

            after_current_user_public_url:

            $value = $payload['current_user_url'] ?? null;

            if ($value === null) {
                $properties['current_user_url'] = null;
                goto after_current_user_url;
            }

            $properties['current_user_url'] = $value;

            after_current_user_url:

            $value = $payload['current_user_actor_url'] ?? null;

            if ($value === null) {
                $properties['current_user_actor_url'] = null;
                goto after_current_user_actor_url;
            }

            $properties['current_user_actor_url'] = $value;

            after_current_user_actor_url:

            $value = $payload['current_user_organization_url'] ?? null;

            if ($value === null) {
                $properties['current_user_organization_url'] = null;
                goto after_current_user_organization_url;
            }

            $properties['current_user_organization_url'] = $value;

            after_current_user_organization_url:

            $value = $payload['current_user_organization_urls'] ?? null;

            if ($value === null) {
                $properties['current_user_organization_urls'] = null;
                goto after_current_user_organization_urls;
            }

            $properties['current_user_organization_urls'] = $value;

            after_current_user_organization_urls:

            $value = $payload['_links'] ?? null;

            if ($value === null) {
                $missingFields[] = '_links';
                goto after__links;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = '_links';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed⚡️Links($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['_links'] = $value;

            after__links:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Feed', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Feed::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Feed(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Feed', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed⚡️Links(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Feed\Links
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['timeline'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timeline';
                goto after_timeline;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'timeline';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['timeline'] = $value;

            after_timeline:

            $value = $payload['user'] ?? null;

            if ($value === null) {
                $missingFields[] = 'user';
                goto after_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['user'] = $value;

            after_user:

            $value = $payload['security_advisories'] ?? null;

            if ($value === null) {
                $properties['security_advisories'] = null;
                goto after_security_advisories;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'security_advisories';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['security_advisories'] = $value;

            after_security_advisories:

            $value = $payload['current_user'] ?? null;

            if ($value === null) {
                $properties['current_user'] = null;
                goto after_current_user;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'current_user';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['current_user'] = $value;

            after_current_user:

            $value = $payload['current_user_public'] ?? null;

            if ($value === null) {
                $properties['current_user_public'] = null;
                goto after_current_user_public;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'current_user_public';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['current_user_public'] = $value;

            after_current_user_public:

            $value = $payload['current_user_actor'] ?? null;

            if ($value === null) {
                $properties['current_user_actor'] = null;
                goto after_current_user_actor;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'current_user_actor';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['current_user_actor'] = $value;

            after_current_user_actor:

            $value = $payload['current_user_organization'] ?? null;

            if ($value === null) {
                $properties['current_user_organization'] = null;
                goto after_current_user_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'current_user_organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['current_user_organization'] = $value;

            after_current_user_organization:

            $value = $payload['current_user_organizations'] ?? null;

            if ($value === null) {
                $properties['current_user_organizations'] = null;
                goto after_current_user_organizations;
            }

            static $current_user_organizationsCaster1;

            if ($current_user_organizationsCaster1 === null) {
                $current_user_organizationsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType',
));
            }

            $value = $current_user_organizationsCaster1->cast($value, $this);

            $properties['current_user_organizations'] = $value;

            after_current_user_organizations:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Feed\Links', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Feed\Links::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\Feed\Links(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Feed\Links', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\LinkWithType
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['href'] ?? null;

            if ($value === null) {
                $missingFields[] = 'href';
                goto after_href;
            }

            $properties['href'] = $value;

            after_href:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\LinkWithType', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\LinkWithType::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\LinkWithType(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\LinkWithType', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\Feed' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed($object),
            'ApiClients\Client\GitHubEnterprise\Schema\Feed\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed⚡️Links($object),
            'ApiClients\Client\GitHubEnterprise\Schema\LinkWithType' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Feed);
        $result = [];

        $timeline_url = $object->timeline_url;
        after_timeline_url:        $result['timeline_url'] = $timeline_url;

        
        $user_url = $object->user_url;
        after_user_url:        $result['user_url'] = $user_url;

        
        $current_user_public_url = $object->current_user_public_url;

        if ($current_user_public_url === null) {
            goto after_current_user_public_url;
        }
        after_current_user_public_url:        $result['current_user_public_url'] = $current_user_public_url;

        
        $current_user_url = $object->current_user_url;

        if ($current_user_url === null) {
            goto after_current_user_url;
        }
        after_current_user_url:        $result['current_user_url'] = $current_user_url;

        
        $current_user_actor_url = $object->current_user_actor_url;

        if ($current_user_actor_url === null) {
            goto after_current_user_actor_url;
        }
        after_current_user_actor_url:        $result['current_user_actor_url'] = $current_user_actor_url;

        
        $current_user_organization_url = $object->current_user_organization_url;

        if ($current_user_organization_url === null) {
            goto after_current_user_organization_url;
        }
        after_current_user_organization_url:        $result['current_user_organization_url'] = $current_user_organization_url;

        
        $current_user_organization_urls = $object->current_user_organization_urls;

        if ($current_user_organization_urls === null) {
            goto after_current_user_organization_urls;
        }
        static $current_user_organization_urlsSerializer0;

        if ($current_user_organization_urlsSerializer0 === null) {
            $current_user_organization_urlsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $current_user_organization_urls = $current_user_organization_urlsSerializer0->serialize($current_user_organization_urls, $this);
        after_current_user_organization_urls:        $result['current_user_organization_urls'] = $current_user_organization_urls;

        
        $_links = $object->_links;
        $_links = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed⚡️Links($_links);
        after__links:        $result['_links'] = $_links;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Feed⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Feed\Links);
        $result = [];

        $timeline = $object->timeline;
        $timeline = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($timeline);
        after_timeline:        $result['timeline'] = $timeline;

        
        $user = $object->user;
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($user);
        after_user:        $result['user'] = $user;

        
        $security_advisories = $object->security_advisories;

        if ($security_advisories === null) {
            goto after_security_advisories;
        }
        $security_advisories = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($security_advisories);
        after_security_advisories:        $result['security_advisories'] = $security_advisories;

        
        $current_user = $object->current_user;

        if ($current_user === null) {
            goto after_current_user;
        }
        $current_user = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($current_user);
        after_current_user:        $result['current_user'] = $current_user;

        
        $current_user_public = $object->current_user_public;

        if ($current_user_public === null) {
            goto after_current_user_public;
        }
        $current_user_public = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($current_user_public);
        after_current_user_public:        $result['current_user_public'] = $current_user_public;

        
        $current_user_actor = $object->current_user_actor;

        if ($current_user_actor === null) {
            goto after_current_user_actor;
        }
        $current_user_actor = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($current_user_actor);
        after_current_user_actor:        $result['current_user_actor'] = $current_user_actor;

        
        $current_user_organization = $object->current_user_organization;

        if ($current_user_organization === null) {
            goto after_current_user_organization;
        }
        $current_user_organization = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType($current_user_organization);
        after_current_user_organization:        $result['current_user_organization'] = $current_user_organization;

        
        $current_user_organizations = $object->current_user_organizations;

        if ($current_user_organizations === null) {
            goto after_current_user_organizations;
        }
        static $current_user_organizationsSerializer0;

        if ($current_user_organizationsSerializer0 === null) {
            $current_user_organizationsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType',
));
        }
        
        $current_user_organizations = $current_user_organizationsSerializer0->serialize($current_user_organizations, $this);
        after_current_user_organizations:        $result['current_user_organizations'] = $current_user_organizations;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️LinkWithType(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\LinkWithType);
        $result = [];

        $href = $object->href;
        after_href:        $result['href'] = $href;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;


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
