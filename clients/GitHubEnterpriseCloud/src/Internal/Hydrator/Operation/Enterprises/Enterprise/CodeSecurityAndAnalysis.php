<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Hydrator\Operation\Enterprises\Enterprise;

use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings;
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

use function assert;
use function count;
use function is_a;

class CodeSecurityAndAnalysis implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings(array $payload): EnterpriseSecurityAnalysisSettings
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['advanced_security_enabled_for_new_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'advanced_security_enabled_for_new_repositories';
                goto after_advancedSecurityEnabledForNewRepositories;
            }

            $properties['advancedSecurityEnabledForNewRepositories'] = $value;

            after_advancedSecurityEnabledForNewRepositories:

            $value = $payload['advanced_security_enabled_for_new_user_namespace_repositories'] ?? null;

            if ($value === null) {
                $properties['advancedSecurityEnabledForNewUserNamespaceRepositories'] = null;
                goto after_advancedSecurityEnabledForNewUserNamespaceRepositories;
            }

            $properties['advancedSecurityEnabledForNewUserNamespaceRepositories'] = $value;

            after_advancedSecurityEnabledForNewUserNamespaceRepositories:

            $value = $payload['dependabot_alerts_enabled_for_new_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'dependabot_alerts_enabled_for_new_repositories';
                goto after_dependabotAlertsEnabledForNewRepositories;
            }

            $properties['dependabotAlertsEnabledForNewRepositories'] = $value;

            after_dependabotAlertsEnabledForNewRepositories:

            $value = $payload['secret_scanning_enabled_for_new_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'secret_scanning_enabled_for_new_repositories';
                goto after_secretScanningEnabledForNewRepositories;
            }

            $properties['secretScanningEnabledForNewRepositories'] = $value;

            after_secretScanningEnabledForNewRepositories:

            $value = $payload['secret_scanning_push_protection_enabled_for_new_repositories'] ?? null;

            if ($value === null) {
                $missingFields[] = 'secret_scanning_push_protection_enabled_for_new_repositories';
                goto after_secretScanningPushProtectionEnabledForNewRepositories;
            }

            $properties['secretScanningPushProtectionEnabledForNewRepositories'] = $value;

            after_secretScanningPushProtectionEnabledForNewRepositories:

            $value = $payload['secret_scanning_push_protection_custom_link'] ?? null;

            if ($value === null) {
                $properties['secretScanningPushProtectionCustomLink'] = null;
                goto after_secretScanningPushProtectionCustomLink;
            }

            $properties['secretScanningPushProtectionCustomLink'] = $value;

            after_secretScanningPushProtectionCustomLink:

            $value = $payload['secret_scanning_non_provider_patterns_enabled_for_new_repositories'] ?? null;

            if ($value === null) {
                $properties['secretScanningNonProviderPatternsEnabledForNewRepositories'] = null;
                goto after_secretScanningNonProviderPatternsEnabledForNewRepositories;
            }

            $properties['secretScanningNonProviderPatternsEnabledForNewRepositories'] = $value;

            after_secretScanningNonProviderPatternsEnabledForNewRepositories:

            $value = $payload['secret_scanning_validity_checks_enabled'] ?? null;

            if ($value === null) {
                $properties['secretScanningValidityChecksEnabled'] = null;
                goto after_secretScanningValidityChecksEnabled;
            }

            $properties['secretScanningValidityChecksEnabled'] = $value;

            after_secretScanningValidityChecksEnabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(EnterpriseSecurityAnalysisSettings::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new EnterpriseSecurityAnalysisSettings(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(array $payload): BasicError
    {
        $properties    = [];
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
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new BasicError(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️EnterpriseSecurityAnalysisSettings(mixed $object): mixed
    {
        assert($object instanceof EnterpriseSecurityAnalysisSettings);
        $result = [];

        $advancedSecurityEnabledForNewRepositories                                                                        = $object->advancedSecurityEnabledForNewRepositories;
        after_advancedSecurityEnabledForNewRepositories:        $result['advanced_security_enabled_for_new_repositories'] = $advancedSecurityEnabledForNewRepositories;

        $advancedSecurityEnabledForNewUserNamespaceRepositories = $object->advancedSecurityEnabledForNewUserNamespaceRepositories;

        if ($advancedSecurityEnabledForNewUserNamespaceRepositories === null) {
            goto after_advancedSecurityEnabledForNewUserNamespaceRepositories;
        }

        after_advancedSecurityEnabledForNewUserNamespaceRepositories:        $result['advanced_security_enabled_for_new_user_namespace_repositories'] = $advancedSecurityEnabledForNewUserNamespaceRepositories;

        $dependabotAlertsEnabledForNewRepositories                                                                        = $object->dependabotAlertsEnabledForNewRepositories;
        after_dependabotAlertsEnabledForNewRepositories:        $result['dependabot_alerts_enabled_for_new_repositories'] = $dependabotAlertsEnabledForNewRepositories;

        $secretScanningEnabledForNewRepositories                                                                      = $object->secretScanningEnabledForNewRepositories;
        after_secretScanningEnabledForNewRepositories:        $result['secret_scanning_enabled_for_new_repositories'] = $secretScanningEnabledForNewRepositories;

        $secretScanningPushProtectionEnabledForNewRepositories                                                                                      = $object->secretScanningPushProtectionEnabledForNewRepositories;
        after_secretScanningPushProtectionEnabledForNewRepositories:        $result['secret_scanning_push_protection_enabled_for_new_repositories'] = $secretScanningPushProtectionEnabledForNewRepositories;

        $secretScanningPushProtectionCustomLink = $object->secretScanningPushProtectionCustomLink;

        if ($secretScanningPushProtectionCustomLink === null) {
            goto after_secretScanningPushProtectionCustomLink;
        }

        after_secretScanningPushProtectionCustomLink:        $result['secret_scanning_push_protection_custom_link'] = $secretScanningPushProtectionCustomLink;

        $secretScanningNonProviderPatternsEnabledForNewRepositories = $object->secretScanningNonProviderPatternsEnabledForNewRepositories;

        if ($secretScanningNonProviderPatternsEnabledForNewRepositories === null) {
            goto after_secretScanningNonProviderPatternsEnabledForNewRepositories;
        }

        after_secretScanningNonProviderPatternsEnabledForNewRepositories:        $result['secret_scanning_non_provider_patterns_enabled_for_new_repositories'] = $secretScanningNonProviderPatternsEnabledForNewRepositories;

        $secretScanningValidityChecksEnabled = $object->secretScanningValidityChecksEnabled;

        if ($secretScanningValidityChecksEnabled === null) {
            goto after_secretScanningValidityChecksEnabled;
        }

        after_secretScanningValidityChecksEnabled:        $result['secret_scanning_validity_checks_enabled'] = $secretScanningValidityChecksEnabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        assert($object instanceof BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }

        after_message:        $result['message'] = $message;

        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }

        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

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
