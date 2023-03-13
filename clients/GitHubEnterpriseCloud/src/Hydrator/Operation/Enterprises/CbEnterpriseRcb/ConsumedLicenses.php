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
                $properties['total_seats_consumed'] = null;
                goto after_total_seats_consumed;
            }

            $properties['total_seats_consumed'] = $value;

            after_total_seats_consumed:

            $value = $payload['total_seats_purchased'] ?? null;

            if ($value === null) {
                $properties['total_seats_purchased'] = null;
                goto after_total_seats_purchased;
            }

            $properties['total_seats_purchased'] = $value;

            after_total_seats_purchased:

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
                $properties['github_com_login'] = null;
                goto after_github_com_login;
            }

            $properties['github_com_login'] = $value;

            after_github_com_login:

            $value = $payload['github_com_name'] ?? null;

            if ($value === null) {
                $properties['github_com_name'] = null;
                goto after_github_com_name;
            }

            $properties['github_com_name'] = $value;

            after_github_com_name:

            $value = $payload['enterprise_server_user_ids'] ?? null;

            if ($value === null) {
                $properties['enterprise_server_user_ids'] = null;
                goto after_enterprise_server_user_ids;
            }

            $properties['enterprise_server_user_ids'] = $value;

            after_enterprise_server_user_ids:

            $value = $payload['github_com_user'] ?? null;

            if ($value === null) {
                $properties['github_com_user'] = null;
                goto after_github_com_user;
            }

            $properties['github_com_user'] = $value;

            after_github_com_user:

            $value = $payload['enterprise_server_user'] ?? null;

            if ($value === null) {
                $properties['enterprise_server_user'] = null;
                goto after_enterprise_server_user;
            }

            $properties['enterprise_server_user'] = $value;

            after_enterprise_server_user:

            $value = $payload['visual_studio_subscription_user'] ?? null;

            if ($value === null) {
                $properties['visual_studio_subscription_user'] = null;
                goto after_visual_studio_subscription_user;
            }

            $properties['visual_studio_subscription_user'] = $value;

            after_visual_studio_subscription_user:

            $value = $payload['license_type'] ?? null;

            if ($value === null) {
                $properties['license_type'] = null;
                goto after_license_type;
            }

            $properties['license_type'] = $value;

            after_license_type:

            $value = $payload['github_com_profile'] ?? null;

            if ($value === null) {
                $properties['github_com_profile'] = null;
                goto after_github_com_profile;
            }

            $properties['github_com_profile'] = $value;

            after_github_com_profile:

            $value = $payload['github_com_member_roles'] ?? null;

            if ($value === null) {
                $properties['github_com_member_roles'] = null;
                goto after_github_com_member_roles;
            }

            $properties['github_com_member_roles'] = $value;

            after_github_com_member_roles:

            $value = $payload['github_com_enterprise_roles'] ?? null;

            if ($value === null) {
                $properties['github_com_enterprise_roles'] = null;
                goto after_github_com_enterprise_roles;
            }

            $properties['github_com_enterprise_roles'] = $value;

            after_github_com_enterprise_roles:

            $value = $payload['github_com_verified_domain_emails'] ?? null;

            if ($value === null) {
                $properties['github_com_verified_domain_emails'] = null;
                goto after_github_com_verified_domain_emails;
            }

            $properties['github_com_verified_domain_emails'] = $value;

            after_github_com_verified_domain_emails:

            $value = $payload['github_com_saml_name_id'] ?? null;

            if ($value === null) {
                $properties['github_com_saml_name_id'] = null;
                goto after_github_com_saml_name_id;
            }

            $properties['github_com_saml_name_id'] = $value;

            after_github_com_saml_name_id:

            $value = $payload['github_com_orgs_with_pending_invites'] ?? null;

            if ($value === null) {
                $properties['github_com_orgs_with_pending_invites'] = null;
                goto after_github_com_orgs_with_pending_invites;
            }

            $properties['github_com_orgs_with_pending_invites'] = $value;

            after_github_com_orgs_with_pending_invites:

            $value = $payload['github_com_two_factor_auth'] ?? null;

            if ($value === null) {
                $properties['github_com_two_factor_auth'] = null;
                goto after_github_com_two_factor_auth;
            }

            $properties['github_com_two_factor_auth'] = $value;

            after_github_com_two_factor_auth:

            $value = $payload['enterprise_server_emails'] ?? null;

            if ($value === null) {
                $properties['enterprise_server_emails'] = null;
                goto after_enterprise_server_emails;
            }

            $properties['enterprise_server_emails'] = $value;

            after_enterprise_server_emails:

            $value = $payload['visual_studio_license_status'] ?? null;

            if ($value === null) {
                $properties['visual_studio_license_status'] = null;
                goto after_visual_studio_license_status;
            }

            $properties['visual_studio_license_status'] = $value;

            after_visual_studio_license_status:

            $value = $payload['visual_studio_subscription_email'] ?? null;

            if ($value === null) {
                $properties['visual_studio_subscription_email'] = null;
                goto after_visual_studio_subscription_email;
            }

            $properties['visual_studio_subscription_email'] = $value;

            after_visual_studio_subscription_email:

            $value = $payload['total_user_accounts'] ?? null;

            if ($value === null) {
                $properties['total_user_accounts'] = null;
                goto after_total_user_accounts;
            }

            $properties['total_user_accounts'] = $value;

            after_total_user_accounts:

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

        $total_seats_consumed = $object->total_seats_consumed;

        if ($total_seats_consumed === null) {
            goto after_total_seats_consumed;
        }
        after_total_seats_consumed:        $result['total_seats_consumed'] = $total_seats_consumed;

        
        $total_seats_purchased = $object->total_seats_purchased;

        if ($total_seats_purchased === null) {
            goto after_total_seats_purchased;
        }
        after_total_seats_purchased:        $result['total_seats_purchased'] = $total_seats_purchased;

        
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

        $github_com_login = $object->github_com_login;

        if ($github_com_login === null) {
            goto after_github_com_login;
        }
        after_github_com_login:        $result['github_com_login'] = $github_com_login;

        
        $github_com_name = $object->github_com_name;

        if ($github_com_name === null) {
            goto after_github_com_name;
        }
        after_github_com_name:        $result['github_com_name'] = $github_com_name;

        
        $enterprise_server_user_ids = $object->enterprise_server_user_ids;

        if ($enterprise_server_user_ids === null) {
            goto after_enterprise_server_user_ids;
        }
        static $enterprise_server_user_idsSerializer0;

        if ($enterprise_server_user_idsSerializer0 === null) {
            $enterprise_server_user_idsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $enterprise_server_user_ids = $enterprise_server_user_idsSerializer0->serialize($enterprise_server_user_ids, $this);
        after_enterprise_server_user_ids:        $result['enterprise_server_user_ids'] = $enterprise_server_user_ids;

        
        $github_com_user = $object->github_com_user;

        if ($github_com_user === null) {
            goto after_github_com_user;
        }
        after_github_com_user:        $result['github_com_user'] = $github_com_user;

        
        $enterprise_server_user = $object->enterprise_server_user;

        if ($enterprise_server_user === null) {
            goto after_enterprise_server_user;
        }
        after_enterprise_server_user:        $result['enterprise_server_user'] = $enterprise_server_user;

        
        $visual_studio_subscription_user = $object->visual_studio_subscription_user;

        if ($visual_studio_subscription_user === null) {
            goto after_visual_studio_subscription_user;
        }
        after_visual_studio_subscription_user:        $result['visual_studio_subscription_user'] = $visual_studio_subscription_user;

        
        $license_type = $object->license_type;

        if ($license_type === null) {
            goto after_license_type;
        }
        after_license_type:        $result['license_type'] = $license_type;

        
        $github_com_profile = $object->github_com_profile;

        if ($github_com_profile === null) {
            goto after_github_com_profile;
        }
        after_github_com_profile:        $result['github_com_profile'] = $github_com_profile;

        
        $github_com_member_roles = $object->github_com_member_roles;

        if ($github_com_member_roles === null) {
            goto after_github_com_member_roles;
        }
        static $github_com_member_rolesSerializer0;

        if ($github_com_member_rolesSerializer0 === null) {
            $github_com_member_rolesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $github_com_member_roles = $github_com_member_rolesSerializer0->serialize($github_com_member_roles, $this);
        after_github_com_member_roles:        $result['github_com_member_roles'] = $github_com_member_roles;

        
        $github_com_enterprise_roles = $object->github_com_enterprise_roles;

        if ($github_com_enterprise_roles === null) {
            goto after_github_com_enterprise_roles;
        }
        static $github_com_enterprise_rolesSerializer0;

        if ($github_com_enterprise_rolesSerializer0 === null) {
            $github_com_enterprise_rolesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $github_com_enterprise_roles = $github_com_enterprise_rolesSerializer0->serialize($github_com_enterprise_roles, $this);
        after_github_com_enterprise_roles:        $result['github_com_enterprise_roles'] = $github_com_enterprise_roles;

        
        $github_com_verified_domain_emails = $object->github_com_verified_domain_emails;

        if ($github_com_verified_domain_emails === null) {
            goto after_github_com_verified_domain_emails;
        }
        static $github_com_verified_domain_emailsSerializer0;

        if ($github_com_verified_domain_emailsSerializer0 === null) {
            $github_com_verified_domain_emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $github_com_verified_domain_emails = $github_com_verified_domain_emailsSerializer0->serialize($github_com_verified_domain_emails, $this);
        after_github_com_verified_domain_emails:        $result['github_com_verified_domain_emails'] = $github_com_verified_domain_emails;

        
        $github_com_saml_name_id = $object->github_com_saml_name_id;

        if ($github_com_saml_name_id === null) {
            goto after_github_com_saml_name_id;
        }
        after_github_com_saml_name_id:        $result['github_com_saml_name_id'] = $github_com_saml_name_id;

        
        $github_com_orgs_with_pending_invites = $object->github_com_orgs_with_pending_invites;

        if ($github_com_orgs_with_pending_invites === null) {
            goto after_github_com_orgs_with_pending_invites;
        }
        static $github_com_orgs_with_pending_invitesSerializer0;

        if ($github_com_orgs_with_pending_invitesSerializer0 === null) {
            $github_com_orgs_with_pending_invitesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $github_com_orgs_with_pending_invites = $github_com_orgs_with_pending_invitesSerializer0->serialize($github_com_orgs_with_pending_invites, $this);
        after_github_com_orgs_with_pending_invites:        $result['github_com_orgs_with_pending_invites'] = $github_com_orgs_with_pending_invites;

        
        $github_com_two_factor_auth = $object->github_com_two_factor_auth;

        if ($github_com_two_factor_auth === null) {
            goto after_github_com_two_factor_auth;
        }
        after_github_com_two_factor_auth:        $result['github_com_two_factor_auth'] = $github_com_two_factor_auth;

        
        $enterprise_server_emails = $object->enterprise_server_emails;

        if ($enterprise_server_emails === null) {
            goto after_enterprise_server_emails;
        }
        static $enterprise_server_emailsSerializer0;

        if ($enterprise_server_emailsSerializer0 === null) {
            $enterprise_server_emailsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $enterprise_server_emails = $enterprise_server_emailsSerializer0->serialize($enterprise_server_emails, $this);
        after_enterprise_server_emails:        $result['enterprise_server_emails'] = $enterprise_server_emails;

        
        $visual_studio_license_status = $object->visual_studio_license_status;

        if ($visual_studio_license_status === null) {
            goto after_visual_studio_license_status;
        }
        after_visual_studio_license_status:        $result['visual_studio_license_status'] = $visual_studio_license_status;

        
        $visual_studio_subscription_email = $object->visual_studio_subscription_email;

        if ($visual_studio_subscription_email === null) {
            goto after_visual_studio_subscription_email;
        }
        after_visual_studio_subscription_email:        $result['visual_studio_subscription_email'] = $visual_studio_subscription_email;

        
        $total_user_accounts = $object->total_user_accounts;

        if ($total_user_accounts === null) {
            goto after_total_user_accounts;
        }
        after_total_user_accounts:        $result['total_user_accounts'] = $total_user_accounts;


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
