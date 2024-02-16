<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Manage\V1\Config;

use ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseInfo;
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

class License implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseInfo' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesLicenseInfo($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesLicenseInfo(array $payload): GhesLicenseInfo
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['advanced_security_enabled'] ?? null;

            if ($value === null) {
                $properties['advancedSecurityEnabled'] = null;
                goto after_advancedSecurityEnabled;
            }

            $properties['advancedSecurityEnabled'] = $value;

            after_advancedSecurityEnabled:

            $value = $payload['advanced_security_seats'] ?? null;

            if ($value === null) {
                $properties['advancedSecuritySeats'] = null;
                goto after_advancedSecuritySeats;
            }

            $properties['advancedSecuritySeats'] = $value;

            after_advancedSecuritySeats:

            $value = $payload['cluster_support'] ?? null;

            if ($value === null) {
                $properties['clusterSupport'] = null;
                goto after_clusterSupport;
            }

            $properties['clusterSupport'] = $value;

            after_clusterSupport:

            $value = $payload['company'] ?? null;

            if ($value === null) {
                $properties['company'] = null;
                goto after_company;
            }

            $properties['company'] = $value;

            after_company:

            $value = $payload['croquet_support'] ?? null;

            if ($value === null) {
                $properties['croquetSupport'] = null;
                goto after_croquetSupport;
            }

            $properties['croquetSupport'] = $value;

            after_croquetSupport:

            $value = $payload['custom_terms'] ?? null;

            if ($value === null) {
                $properties['customTerms'] = null;
                goto after_customTerms;
            }

            $properties['customTerms'] = $value;

            after_customTerms:

            $value = $payload['evaluation'] ?? null;

            if ($value === null) {
                $properties['evaluation'] = null;
                goto after_evaluation;
            }

            $properties['evaluation'] = $value;

            after_evaluation:

            $value = $payload['expire_at'] ?? null;

            if ($value === null) {
                $properties['expireAt'] = null;
                goto after_expireAt;
            }

            $properties['expireAt'] = $value;

            after_expireAt:

            $value = $payload['insights_enabled'] ?? null;

            if ($value === null) {
                $properties['insightsEnabled'] = null;
                goto after_insightsEnabled;
            }

            $properties['insightsEnabled'] = $value;

            after_insightsEnabled:

            $value = $payload['insights_expire_at'] ?? null;

            if ($value === null) {
                $properties['insightsExpireAt'] = null;
                goto after_insightsExpireAt;
            }

            $properties['insightsExpireAt'] = $value;

            after_insightsExpireAt:

            $value = $payload['learning_lab_evaluation_expires'] ?? null;

            if ($value === null) {
                $properties['learningLabEvaluationExpires'] = null;
                goto after_learningLabEvaluationExpires;
            }

            $properties['learningLabEvaluationExpires'] = $value;

            after_learningLabEvaluationExpires:

            $value = $payload['learning_lab_seats'] ?? null;

            if ($value === null) {
                $properties['learningLabSeats'] = null;
                goto after_learningLabSeats;
            }

            $properties['learningLabSeats'] = $value;

            after_learningLabSeats:

            $value = $payload['perpetual'] ?? null;

            if ($value === null) {
                $properties['perpetual'] = null;
                goto after_perpetual;
            }

            $properties['perpetual'] = $value;

            after_perpetual:

            $value = $payload['reference_number'] ?? null;

            if ($value === null) {
                $properties['referenceNumber'] = null;
                goto after_referenceNumber;
            }

            $properties['referenceNumber'] = $value;

            after_referenceNumber:

            $value = $payload['seats'] ?? null;

            if ($value === null) {
                $properties['seats'] = null;
                goto after_seats;
            }

            $properties['seats'] = $value;

            after_seats:

            $value = $payload['ssh_allowed'] ?? null;

            if ($value === null) {
                $properties['sshAllowed'] = null;
                goto after_sshAllowed;
            }

            $properties['sshAllowed'] = $value;

            after_sshAllowed:

            $value = $payload['support_key'] ?? null;

            if ($value === null) {
                $properties['supportKey'] = null;
                goto after_supportKey;
            }

            $properties['supportKey'] = $value;

            after_supportKey:

            $value = $payload['unlimited_seating'] ?? null;

            if ($value === null) {
                $properties['unlimitedSeating'] = null;
                goto after_unlimitedSeating;
            }

            $properties['unlimitedSeating'] = $value;

            after_unlimitedSeating:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseInfo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GhesLicenseInfo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GhesLicenseInfo(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseInfo', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\GhesLicenseInfo' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesLicenseInfo($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesLicenseInfo(mixed $object): mixed
    {
        assert($object instanceof GhesLicenseInfo);
        $result = [];

        $advancedSecurityEnabled = $object->advancedSecurityEnabled;

        if ($advancedSecurityEnabled === null) {
            goto after_advancedSecurityEnabled;
        }

        after_advancedSecurityEnabled:        $result['advanced_security_enabled'] = $advancedSecurityEnabled;

        $advancedSecuritySeats = $object->advancedSecuritySeats;

        if ($advancedSecuritySeats === null) {
            goto after_advancedSecuritySeats;
        }

        after_advancedSecuritySeats:        $result['advanced_security_seats'] = $advancedSecuritySeats;

        $clusterSupport = $object->clusterSupport;

        if ($clusterSupport === null) {
            goto after_clusterSupport;
        }

        after_clusterSupport:        $result['cluster_support'] = $clusterSupport;

        $company = $object->company;

        if ($company === null) {
            goto after_company;
        }

        after_company:        $result['company'] = $company;

        $croquetSupport = $object->croquetSupport;

        if ($croquetSupport === null) {
            goto after_croquetSupport;
        }

        after_croquetSupport:        $result['croquet_support'] = $croquetSupport;

        $customTerms = $object->customTerms;

        if ($customTerms === null) {
            goto after_customTerms;
        }

        after_customTerms:        $result['custom_terms'] = $customTerms;

        $evaluation = $object->evaluation;

        if ($evaluation === null) {
            goto after_evaluation;
        }

        after_evaluation:        $result['evaluation'] = $evaluation;

        $expireAt = $object->expireAt;

        if ($expireAt === null) {
            goto after_expireAt;
        }

        after_expireAt:        $result['expire_at'] = $expireAt;

        $insightsEnabled = $object->insightsEnabled;

        if ($insightsEnabled === null) {
            goto after_insightsEnabled;
        }

        after_insightsEnabled:        $result['insights_enabled'] = $insightsEnabled;

        $insightsExpireAt = $object->insightsExpireAt;

        if ($insightsExpireAt === null) {
            goto after_insightsExpireAt;
        }

        after_insightsExpireAt:        $result['insights_expire_at'] = $insightsExpireAt;

        $learningLabEvaluationExpires = $object->learningLabEvaluationExpires;

        if ($learningLabEvaluationExpires === null) {
            goto after_learningLabEvaluationExpires;
        }

        after_learningLabEvaluationExpires:        $result['learning_lab_evaluation_expires'] = $learningLabEvaluationExpires;

        $learningLabSeats = $object->learningLabSeats;

        if ($learningLabSeats === null) {
            goto after_learningLabSeats;
        }

        after_learningLabSeats:        $result['learning_lab_seats'] = $learningLabSeats;

        $perpetual = $object->perpetual;

        if ($perpetual === null) {
            goto after_perpetual;
        }

        after_perpetual:        $result['perpetual'] = $perpetual;

        $referenceNumber = $object->referenceNumber;

        if ($referenceNumber === null) {
            goto after_referenceNumber;
        }

        after_referenceNumber:        $result['reference_number'] = $referenceNumber;

        $seats = $object->seats;

        if ($seats === null) {
            goto after_seats;
        }

        after_seats:        $result['seats'] = $seats;

        $sshAllowed = $object->sshAllowed;

        if ($sshAllowed === null) {
            goto after_sshAllowed;
        }

        after_sshAllowed:        $result['ssh_allowed'] = $sshAllowed;

        $supportKey = $object->supportKey;

        if ($supportKey === null) {
            goto after_supportKey;
        }

        after_supportKey:        $result['support_key'] = $supportKey;

        $unlimitedSeating = $object->unlimitedSeating;

        if ($unlimitedSeating === null) {
            goto after_unlimitedSeating;
        }

        after_unlimitedSeating:        $result['unlimited_seating'] = $unlimitedSeating;

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
