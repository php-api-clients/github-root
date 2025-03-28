<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Repos\Owner\Repo\Environments\EnvironmentName;

use ApiClients\Client\GitHubEnterprise\Schema\CustomDeploymentRuleApp;
use ApiClients\Client\GitHubEnterprise\Schema\DeploymentProtectionRule;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok;
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

class DeploymentProtectionRules implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Repos⚡️GetAllDeploymentProtectionRules⚡️Response⚡️ApplicationJson⚡️Ok($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\DeploymentProtectionRule' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DeploymentProtectionRule($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\CustomDeploymentRuleApp' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CustomDeploymentRuleApp($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Repos⚡️GetAllDeploymentProtectionRules⚡️Response⚡️ApplicationJson⚡️Ok(array $payload): Ok
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_count'] ?? null;

            if ($value === null) {
                $properties['totalCount'] = null;
                goto after_totalCount;
            }

            $properties['totalCount'] = $value;

            after_totalCount:

            $value = $payload['custom_deployment_protection_rules'] ?? null;

            if ($value === null) {
                $properties['customDeploymentProtectionRules'] = null;
                goto after_customDeploymentProtectionRules;
            }

            $properties['customDeploymentProtectionRules'] = $value;

            after_customDeploymentProtectionRules:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Ok::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Ok(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DeploymentProtectionRule(array $payload): DeploymentProtectionRule
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'enabled';
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['app'] ?? null;

            if ($value === null) {
                $missingFields[] = 'app';
                goto after_app;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'app';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CustomDeploymentRuleApp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['app'] = $value;

            after_app:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DeploymentProtectionRule', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(DeploymentProtectionRule::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new DeploymentProtectionRule(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\DeploymentProtectionRule', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CustomDeploymentRuleApp(array $payload): CustomDeploymentRuleApp
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['integration_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'integration_url';
                goto after_integrationUrl;
            }

            $properties['integrationUrl'] = $value;

            after_integrationUrl:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\CustomDeploymentRuleApp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(CustomDeploymentRuleApp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new CustomDeploymentRuleApp(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\CustomDeploymentRuleApp', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Repos⚡️GetAllDeploymentProtectionRules⚡️Response⚡️ApplicationJson⚡️Ok($object),
                'ApiClients\Client\GitHubEnterprise\Schema\DeploymentProtectionRule' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DeploymentProtectionRule($object),
                'ApiClients\Client\GitHubEnterprise\Schema\CustomDeploymentRuleApp' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CustomDeploymentRuleApp($object),
                default => throw new LogicException("No serialization defined for $className"),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Operations⚡️Repos⚡️GetAllDeploymentProtectionRules⚡️Response⚡️ApplicationJson⚡️Ok(mixed $object): mixed
    {
        assert($object instanceof Ok);
        $result = [];

        $totalCount = $object->totalCount;

        if ($totalCount === null) {
            goto after_totalCount;
        }

        after_totalCount:        $result['total_count'] = $totalCount;

        $customDeploymentProtectionRules = $object->customDeploymentProtectionRules;

        if ($customDeploymentProtectionRules === null) {
            goto after_customDeploymentProtectionRules;
        }

        static $customDeploymentProtectionRulesSerializer0;

        if ($customDeploymentProtectionRulesSerializer0 === null) {
            $customDeploymentProtectionRulesSerializer0 = new SerializeArrayItems(...[]);
        }

        $customDeploymentProtectionRules                                                            = $customDeploymentProtectionRulesSerializer0->serialize($customDeploymentProtectionRules, $this);
        after_customDeploymentProtectionRules:        $result['custom_deployment_protection_rules'] = $customDeploymentProtectionRules;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️DeploymentProtectionRule(mixed $object): mixed
    {
        assert($object instanceof DeploymentProtectionRule);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        $enabled                                 = $object->enabled;
        after_enabled:        $result['enabled'] = $enabled;

        $app                             = $object->app;
        $app                             = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CustomDeploymentRuleApp($app);
        after_app:        $result['app'] = $app;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️CustomDeploymentRuleApp(mixed $object): mixed
    {
        assert($object instanceof CustomDeploymentRuleApp);
        $result = [];

        $id                            = $object->id;
        after_id:        $result['id'] = $id;

        $slug                              = $object->slug;
        after_slug:        $result['slug'] = $slug;

        $integrationUrl                                         = $object->integrationUrl;
        after_integrationUrl:        $result['integration_url'] = $integrationUrl;

        $nodeId                                 = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

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
