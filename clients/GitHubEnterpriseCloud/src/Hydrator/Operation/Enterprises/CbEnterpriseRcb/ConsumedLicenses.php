<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\Enterprises\CbEnterpriseRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class ConsumedLicenses implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses⚡️Users($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total_seats_consumed'] ?? null;

            if ($value === null) {
                $properties['totalSeatsConsumed'] = null;
                goto after_totalSeatsConsumed;
            }

            $properties['totalSeatsConsumed'] = $value;

            after_totalSeatsConsumed:

            $value = $payload['total_seats_purchased'] ?? null;

            if ($value === null) {
                $properties['totalSeatsPurchased'] = null;
                goto after_totalSeatsPurchased;
            }

            $properties['totalSeatsPurchased'] = $value;

            after_totalSeatsPurchased:

            $value = $payload['users'] ?? null;

            if ($value === null) {
                $properties['users'] = null;
                goto after_users;
            }

            static $usersCaster1;

            if ($usersCaster1 === null) {
                $usersCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetConsumedLicenses\\Users',
));
            }

            $value = $usersCaster1->cast($value, $this);

            $properties['users'] = $value;

            after_users:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses⚡️Users(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['github_com_login'] ?? null;

            if ($value === null) {
                $properties['githubComLogin'] = null;
                goto after_githubComLogin;
            }

            $properties['githubComLogin'] = $value;

            after_githubComLogin:

            $value = $payload['github_com_name'] ?? null;

            if ($value === null) {
                $properties['githubComName'] = null;
                goto after_githubComName;
            }

            $properties['githubComName'] = $value;

            after_githubComName:

            $value = $payload['enterprise_server_user_ids'] ?? null;

            if ($value === null) {
                $properties['enterpriseServerUserIds'] = null;
                goto after_enterpriseServerUserIds;
            }

            $properties['enterpriseServerUserIds'] = $value;

            after_enterpriseServerUserIds:

            $value = $payload['github_com_user'] ?? null;

            if ($value === null) {
                $properties['githubComUser'] = null;
                goto after_githubComUser;
            }

            $properties['githubComUser'] = $value;

            after_githubComUser:

            $value = $payload['enterprise_server_user'] ?? null;

            if ($value === null) {
                $properties['enterpriseServerUser'] = null;
                goto after_enterpriseServerUser;
            }

            $properties['enterpriseServerUser'] = $value;

            after_enterpriseServerUser:

            $value = $payload['visual_studio_subscription_user'] ?? null;

            if ($value === null) {
                $properties['visualStudioSubscriptionUser'] = null;
                goto after_visualStudioSubscriptionUser;
            }

            $properties['visualStudioSubscriptionUser'] = $value;

            after_visualStudioSubscriptionUser:

            $value = $payload['license_type'] ?? null;

            if ($value === null) {
                $properties['licenseType'] = null;
                goto after_licenseType;
            }

            $properties['licenseType'] = $value;

            after_licenseType:

            $value = $payload['github_com_profile'] ?? null;

            if ($value === null) {
                $properties['githubComProfile'] = null;
                goto after_githubComProfile;
            }

            $properties['githubComProfile'] = $value;

            after_githubComProfile:

            $value = $payload['github_com_member_roles'] ?? null;

            if ($value === null) {
                $properties['githubComMemberRoles'] = null;
                goto after_githubComMemberRoles;
            }

            $properties['githubComMemberRoles'] = $value;

            after_githubComMemberRoles:

            $value = $payload['github_com_enterprise_roles'] ?? null;

            if ($value === null) {
                $properties['githubComEnterpriseRoles'] = null;
                goto after_githubComEnterpriseRoles;
            }

            $properties['githubComEnterpriseRoles'] = $value;

            after_githubComEnterpriseRoles:

            $value = $payload['github_com_verified_domain_emails'] ?? null;

            if ($value === null) {
                $properties['githubComVerifiedDomainEmails'] = null;
                goto after_githubComVerifiedDomainEmails;
            }

            $properties['githubComVerifiedDomainEmails'] = $value;

            after_githubComVerifiedDomainEmails:

            $value = $payload['github_com_saml_name_id'] ?? null;

            if ($value === null) {
                $properties['githubComSamlNameId'] = null;
                goto after_githubComSamlNameId;
            }

            $properties['githubComSamlNameId'] = $value;

            after_githubComSamlNameId:

            $value = $payload['github_com_orgs_with_pending_invites'] ?? null;

            if ($value === null) {
                $properties['githubComOrgsWithPendingInvites'] = null;
                goto after_githubComOrgsWithPendingInvites;
            }

            $properties['githubComOrgsWithPendingInvites'] = $value;

            after_githubComOrgsWithPendingInvites:

            $value = $payload['github_com_two_factor_auth'] ?? null;

            if ($value === null) {
                $properties['githubComTwoFactorAuth'] = null;
                goto after_githubComTwoFactorAuth;
            }

            $properties['githubComTwoFactorAuth'] = $value;

            after_githubComTwoFactorAuth:

            $value = $payload['enterprise_server_emails'] ?? null;

            if ($value === null) {
                $properties['enterpriseServerEmails'] = null;
                goto after_enterpriseServerEmails;
            }

            $properties['enterpriseServerEmails'] = $value;

            after_enterpriseServerEmails:

            $value = $payload['visual_studio_license_status'] ?? null;

            if ($value === null) {
                $properties['visualStudioLicenseStatus'] = null;
                goto after_visualStudioLicenseStatus;
            }

            $properties['visualStudioLicenseStatus'] = $value;

            after_visualStudioLicenseStatus:

            $value = $payload['visual_studio_subscription_email'] ?? null;

            if ($value === null) {
                $properties['visualStudioSubscriptionEmail'] = null;
                goto after_visualStudioSubscriptionEmail;
            }

            $properties['visualStudioSubscriptionEmail'] = $value;

            after_visualStudioSubscriptionEmail:

            $value = $payload['total_user_accounts'] ?? null;

            if ($value === null) {
                $properties['totalUserAccounts'] = null;
                goto after_totalUserAccounts;
            }

            $properties['totalUserAccounts'] = $value;

            after_totalUserAccounts:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses($object),
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses⚡️Users($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses);
        $result = [];

        $totalSeatsConsumed = $object->totalSeatsConsumed;

        if ($totalSeatsConsumed === null) {
            goto after_totalSeatsConsumed;
        }
        after_totalSeatsConsumed:        $result['total_seats_consumed'] = $totalSeatsConsumed;

        
        $totalSeatsPurchased = $object->totalSeatsPurchased;

        if ($totalSeatsPurchased === null) {
            goto after_totalSeatsPurchased;
        }
        after_totalSeatsPurchased:        $result['total_seats_purchased'] = $totalSeatsPurchased;

        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        static $usersSerializer0;

        if ($usersSerializer0 === null) {
            $usersSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetConsumedLicenses\\Users',
));
        }
        
        $users = $usersSerializer0->serialize($users, $this);
        after_users:        $result['users'] = $users;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️GetConsumedLicenses⚡️Users(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\GetConsumedLicenses\Users);
        $result = [];

        $githubComLogin = $object->githubComLogin;

        if ($githubComLogin === null) {
            goto after_githubComLogin;
        }
        after_githubComLogin:        $result['github_com_login'] = $githubComLogin;

        
        $githubComName = $object->githubComName;

        if ($githubComName === null) {
            goto after_githubComName;
        }
        after_githubComName:        $result['github_com_name'] = $githubComName;

        
        $enterpriseServerUserIds = $object->enterpriseServerUserIds;

        if ($enterpriseServerUserIds === null) {
            goto after_enterpriseServerUserIds;
        }
        static $enterpriseServerUserIdsSerializer0;

        if ($enterpriseServerUserIdsSerializer0 === null) {
            $enterpriseServerUserIdsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $enterpriseServerUserIds = $enterpriseServerUserIdsSerializer0->serialize($enterpriseServerUserIds, $this);
        after_enterpriseServerUserIds:        $result['enterprise_server_user_ids'] = $enterpriseServerUserIds;

        
        $githubComUser = $object->githubComUser;

        if ($githubComUser === null) {
            goto after_githubComUser;
        }
        after_githubComUser:        $result['github_com_user'] = $githubComUser;

        
        $enterpriseServerUser = $object->enterpriseServerUser;

        if ($enterpriseServerUser === null) {
            goto after_enterpriseServerUser;
        }
        after_enterpriseServerUser:        $result['enterprise_server_user'] = $enterpriseServerUser;

        
        $visualStudioSubscriptionUser = $object->visualStudioSubscriptionUser;

        if ($visualStudioSubscriptionUser === null) {
            goto after_visualStudioSubscriptionUser;
        }
        after_visualStudioSubscriptionUser:        $result['visual_studio_subscription_user'] = $visualStudioSubscriptionUser;

        
        $licenseType = $object->licenseType;

        if ($licenseType === null) {
            goto after_licenseType;
        }
        after_licenseType:        $result['license_type'] = $licenseType;

        
        $githubComProfile = $object->githubComProfile;

        if ($githubComProfile === null) {
            goto after_githubComProfile;
        }
        after_githubComProfile:        $result['github_com_profile'] = $githubComProfile;

        
        $githubComMemberRoles = $object->githubComMemberRoles;

        if ($githubComMemberRoles === null) {
            goto after_githubComMemberRoles;
        }
        static $githubComMemberRolesSerializer0;

        if ($githubComMemberRolesSerializer0 === null) {
            $githubComMemberRolesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $githubComMemberRoles = $githubComMemberRolesSerializer0->serialize($githubComMemberRoles, $this);
        after_githubComMemberRoles:        $result['github_com_member_roles'] = $githubComMemberRoles;

        
        $githubComEnterpriseRoles = $object->githubComEnterpriseRoles;

        if ($githubComEnterpriseRoles === null) {
            goto after_githubComEnterpriseRoles;
        }
        static $githubComEnterpriseRolesSerializer0;

        if ($githubComEnterpriseRolesSerializer0 === null) {
            $githubComEnterpriseRolesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $githubComEnterpriseRoles = $githubComEnterpriseRolesSerializer0->serialize($githubComEnterpriseRoles, $this);
        after_githubComEnterpriseRoles:        $result['github_com_enterprise_roles'] = $githubComEnterpriseRoles;

        
        $githubComVerifiedDomainEmails = $object->githubComVerifiedDomainEmails;

        if ($githubComVerifiedDomainEmails === null) {
            goto after_githubComVerifiedDomainEmails;
        }
        static $githubComVerifiedDomainEmailsSerializer0;

        if ($githubComVerifiedDomainEmailsSerializer0 === null) {
            $githubComVerifiedDomainEmailsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $githubComVerifiedDomainEmails = $githubComVerifiedDomainEmailsSerializer0->serialize($githubComVerifiedDomainEmails, $this);
        after_githubComVerifiedDomainEmails:        $result['github_com_verified_domain_emails'] = $githubComVerifiedDomainEmails;

        
        $githubComSamlNameId = $object->githubComSamlNameId;

        if ($githubComSamlNameId === null) {
            goto after_githubComSamlNameId;
        }
        after_githubComSamlNameId:        $result['github_com_saml_name_id'] = $githubComSamlNameId;

        
        $githubComOrgsWithPendingInvites = $object->githubComOrgsWithPendingInvites;

        if ($githubComOrgsWithPendingInvites === null) {
            goto after_githubComOrgsWithPendingInvites;
        }
        static $githubComOrgsWithPendingInvitesSerializer0;

        if ($githubComOrgsWithPendingInvitesSerializer0 === null) {
            $githubComOrgsWithPendingInvitesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $githubComOrgsWithPendingInvites = $githubComOrgsWithPendingInvitesSerializer0->serialize($githubComOrgsWithPendingInvites, $this);
        after_githubComOrgsWithPendingInvites:        $result['github_com_orgs_with_pending_invites'] = $githubComOrgsWithPendingInvites;

        
        $githubComTwoFactorAuth = $object->githubComTwoFactorAuth;

        if ($githubComTwoFactorAuth === null) {
            goto after_githubComTwoFactorAuth;
        }
        after_githubComTwoFactorAuth:        $result['github_com_two_factor_auth'] = $githubComTwoFactorAuth;

        
        $enterpriseServerEmails = $object->enterpriseServerEmails;

        if ($enterpriseServerEmails === null) {
            goto after_enterpriseServerEmails;
        }
        static $enterpriseServerEmailsSerializer0;

        if ($enterpriseServerEmailsSerializer0 === null) {
            $enterpriseServerEmailsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $enterpriseServerEmails = $enterpriseServerEmailsSerializer0->serialize($enterpriseServerEmails, $this);
        after_enterpriseServerEmails:        $result['enterprise_server_emails'] = $enterpriseServerEmails;

        
        $visualStudioLicenseStatus = $object->visualStudioLicenseStatus;

        if ($visualStudioLicenseStatus === null) {
            goto after_visualStudioLicenseStatus;
        }
        after_visualStudioLicenseStatus:        $result['visual_studio_license_status'] = $visualStudioLicenseStatus;

        
        $visualStudioSubscriptionEmail = $object->visualStudioSubscriptionEmail;

        if ($visualStudioSubscriptionEmail === null) {
            goto after_visualStudioSubscriptionEmail;
        }
        after_visualStudioSubscriptionEmail:        $result['visual_studio_subscription_email'] = $visualStudioSubscriptionEmail;

        
        $totalUserAccounts = $object->totalUserAccounts;

        if ($totalUserAccounts === null) {
            goto after_totalUserAccounts;
        }
        after_totalUserAccounts:        $result['total_user_accounts'] = $totalUserAccounts;


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
