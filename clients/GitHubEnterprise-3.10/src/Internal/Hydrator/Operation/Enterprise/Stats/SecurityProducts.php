<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Enterprise\Stats;

use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview;
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

class SecurityProducts implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSecurityProductsOverview($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSecurityProductsOverview(array $payload): EnterpriseSecurityProductsOverview
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['total_repos'] ?? null;

            if ($value === null) {
                $properties['totalRepos'] = null;
                goto after_totalRepos;
            }

            $properties['totalRepos'] = $value;

            after_totalRepos:

            $value = $payload['nonarchived_repos'] ?? null;

            if ($value === null) {
                $properties['nonarchivedRepos'] = null;
                goto after_nonarchivedRepos;
            }

            $properties['nonarchivedRepos'] = $value;

            after_nonarchivedRepos:

            $value = $payload['secret_scanning_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['secretScanningEnabledRepos'] = null;
                goto after_secretScanningEnabledRepos;
            }

            $properties['secretScanningEnabledRepos'] = $value;

            after_secretScanningEnabledRepos:

            $value = $payload['secret_scanning_push_protection_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['secretScanningPushProtectionEnabledRepos'] = null;
                goto after_secretScanningPushProtectionEnabledRepos;
            }

            $properties['secretScanningPushProtectionEnabledRepos'] = $value;

            after_secretScanningPushProtectionEnabledRepos:

            $value = $payload['code_scanning_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['codeScanningEnabledRepos'] = null;
                goto after_codeScanningEnabledRepos;
            }

            $properties['codeScanningEnabledRepos'] = $value;

            after_codeScanningEnabledRepos:

            $value = $payload['code_scanning_pr_reviews_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['codeScanningPrReviewsEnabledRepos'] = null;
                goto after_codeScanningPrReviewsEnabledRepos;
            }

            $properties['codeScanningPrReviewsEnabledRepos'] = $value;

            after_codeScanningPrReviewsEnabledRepos:

            $value = $payload['code_scanning_default_setup_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['codeScanningDefaultSetupEnabledRepos'] = null;
                goto after_codeScanningDefaultSetupEnabledRepos;
            }

            $properties['codeScanningDefaultSetupEnabledRepos'] = $value;

            after_codeScanningDefaultSetupEnabledRepos:

            $value = $payload['code_scanning_default_setup_eligible_repos'] ?? null;

            if ($value === null) {
                $properties['codeScanningDefaultSetupEligibleRepos'] = null;
                goto after_codeScanningDefaultSetupEligibleRepos;
            }

            $properties['codeScanningDefaultSetupEligibleRepos'] = $value;

            after_codeScanningDefaultSetupEligibleRepos:

            $value = $payload['dependabot_alerts_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['dependabotAlertsEnabledRepos'] = null;
                goto after_dependabotAlertsEnabledRepos;
            }

            $properties['dependabotAlertsEnabledRepos'] = $value;

            after_dependabotAlertsEnabledRepos:

            $value = $payload['dependabot_security_updates_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['dependabotSecurityUpdatesEnabledRepos'] = null;
                goto after_dependabotSecurityUpdatesEnabledRepos;
            }

            $properties['dependabotSecurityUpdatesEnabledRepos'] = $value;

            after_dependabotSecurityUpdatesEnabledRepos:

            $value = $payload['dependabot_version_updates_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['dependabotVersionUpdatesEnabledRepos'] = null;
                goto after_dependabotVersionUpdatesEnabledRepos;
            }

            $properties['dependabotVersionUpdatesEnabledRepos'] = $value;

            after_dependabotVersionUpdatesEnabledRepos:

            $value = $payload['advanced_security_enabled_repos'] ?? null;

            if ($value === null) {
                $properties['advancedSecurityEnabledRepos'] = null;
                goto after_advancedSecurityEnabledRepos;
            }

            $properties['advancedSecurityEnabledRepos'] = $value;

            after_advancedSecurityEnabledRepos:

            $value = $payload['active_committers'] ?? null;

            if ($value === null) {
                $properties['activeCommitters'] = null;
                goto after_activeCommitters;
            }

            $properties['activeCommitters'] = $value;

            after_activeCommitters:

            $value = $payload['purchased_committers'] ?? null;

            if ($value === null) {
                $properties['purchasedCommitters'] = null;
                goto after_purchasedCommitters;
            }

            $properties['purchasedCommitters'] = $value;

            after_purchasedCommitters:

            $value = $payload['maximum_committers'] ?? null;

            if ($value === null) {
                $properties['maximumCommitters'] = null;
                goto after_maximumCommitters;
            }

            $properties['maximumCommitters'] = $value;

            after_maximumCommitters:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(EnterpriseSecurityProductsOverview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new EnterpriseSecurityProductsOverview(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSecurityProductsOverview($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSecurityProductsOverview(mixed $object): mixed
    {
        assert($object instanceof EnterpriseSecurityProductsOverview);
        $result = [];

        $totalRepos = $object->totalRepos;

        if ($totalRepos === null) {
            goto after_totalRepos;
        }

        after_totalRepos:        $result['total_repos'] = $totalRepos;

        $nonarchivedRepos = $object->nonarchivedRepos;

        if ($nonarchivedRepos === null) {
            goto after_nonarchivedRepos;
        }

        after_nonarchivedRepos:        $result['nonarchived_repos'] = $nonarchivedRepos;

        $secretScanningEnabledRepos = $object->secretScanningEnabledRepos;

        if ($secretScanningEnabledRepos === null) {
            goto after_secretScanningEnabledRepos;
        }

        after_secretScanningEnabledRepos:        $result['secret_scanning_enabled_repos'] = $secretScanningEnabledRepos;

        $secretScanningPushProtectionEnabledRepos = $object->secretScanningPushProtectionEnabledRepos;

        if ($secretScanningPushProtectionEnabledRepos === null) {
            goto after_secretScanningPushProtectionEnabledRepos;
        }

        after_secretScanningPushProtectionEnabledRepos:        $result['secret_scanning_push_protection_enabled_repos'] = $secretScanningPushProtectionEnabledRepos;

        $codeScanningEnabledRepos = $object->codeScanningEnabledRepos;

        if ($codeScanningEnabledRepos === null) {
            goto after_codeScanningEnabledRepos;
        }

        after_codeScanningEnabledRepos:        $result['code_scanning_enabled_repos'] = $codeScanningEnabledRepos;

        $codeScanningPrReviewsEnabledRepos = $object->codeScanningPrReviewsEnabledRepos;

        if ($codeScanningPrReviewsEnabledRepos === null) {
            goto after_codeScanningPrReviewsEnabledRepos;
        }

        after_codeScanningPrReviewsEnabledRepos:        $result['code_scanning_pr_reviews_enabled_repos'] = $codeScanningPrReviewsEnabledRepos;

        $codeScanningDefaultSetupEnabledRepos = $object->codeScanningDefaultSetupEnabledRepos;

        if ($codeScanningDefaultSetupEnabledRepos === null) {
            goto after_codeScanningDefaultSetupEnabledRepos;
        }

        after_codeScanningDefaultSetupEnabledRepos:        $result['code_scanning_default_setup_enabled_repos'] = $codeScanningDefaultSetupEnabledRepos;

        $codeScanningDefaultSetupEligibleRepos = $object->codeScanningDefaultSetupEligibleRepos;

        if ($codeScanningDefaultSetupEligibleRepos === null) {
            goto after_codeScanningDefaultSetupEligibleRepos;
        }

        after_codeScanningDefaultSetupEligibleRepos:        $result['code_scanning_default_setup_eligible_repos'] = $codeScanningDefaultSetupEligibleRepos;

        $dependabotAlertsEnabledRepos = $object->dependabotAlertsEnabledRepos;

        if ($dependabotAlertsEnabledRepos === null) {
            goto after_dependabotAlertsEnabledRepos;
        }

        after_dependabotAlertsEnabledRepos:        $result['dependabot_alerts_enabled_repos'] = $dependabotAlertsEnabledRepos;

        $dependabotSecurityUpdatesEnabledRepos = $object->dependabotSecurityUpdatesEnabledRepos;

        if ($dependabotSecurityUpdatesEnabledRepos === null) {
            goto after_dependabotSecurityUpdatesEnabledRepos;
        }

        after_dependabotSecurityUpdatesEnabledRepos:        $result['dependabot_security_updates_enabled_repos'] = $dependabotSecurityUpdatesEnabledRepos;

        $dependabotVersionUpdatesEnabledRepos = $object->dependabotVersionUpdatesEnabledRepos;

        if ($dependabotVersionUpdatesEnabledRepos === null) {
            goto after_dependabotVersionUpdatesEnabledRepos;
        }

        after_dependabotVersionUpdatesEnabledRepos:        $result['dependabot_version_updates_enabled_repos'] = $dependabotVersionUpdatesEnabledRepos;

        $advancedSecurityEnabledRepos = $object->advancedSecurityEnabledRepos;

        if ($advancedSecurityEnabledRepos === null) {
            goto after_advancedSecurityEnabledRepos;
        }

        after_advancedSecurityEnabledRepos:        $result['advanced_security_enabled_repos'] = $advancedSecurityEnabledRepos;

        $activeCommitters = $object->activeCommitters;

        if ($activeCommitters === null) {
            goto after_activeCommitters;
        }

        after_activeCommitters:        $result['active_committers'] = $activeCommitters;

        $purchasedCommitters = $object->purchasedCommitters;

        if ($purchasedCommitters === null) {
            goto after_purchasedCommitters;
        }

        after_purchasedCommitters:        $result['purchased_committers'] = $purchasedCommitters;

        $maximumCommitters = $object->maximumCommitters;

        if ($maximumCommitters === null) {
            goto after_maximumCommitters;
        }

        after_maximumCommitters:        $result['maximum_committers'] = $maximumCommitters;

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
