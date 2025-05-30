<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Hydrator\Operation\Manage\V1\Config;

use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Avatar;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Cas;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Collectd;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Customer;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubOauth;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubSsl;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Profile;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Reconciliation;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\License;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Mapping;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ntp;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Pages;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Saml;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Smtp;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Snmp;
use ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Syslog;
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

class Settings implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Avatar' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Avatar($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Customer' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Customer($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\License' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️License($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubSsl' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubSsl($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Reconciliation' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Reconciliation($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Profile' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Profile($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Cas' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Cas($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Saml' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Saml($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubOauth' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubOauth($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Smtp' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Smtp($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ntp' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ntp($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Snmp' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Snmp($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Syslog' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Syslog($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Pages' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Pages($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Collectd' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Collectd($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Mapping' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Mapping($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings(array $payload): GhesGetSettings
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['private_mode'] ?? null;

            if ($value === null) {
                $properties['privateMode'] = null;
                goto after_privateMode;
            }

            $properties['privateMode'] = $value;

            after_privateMode:

            $value = $payload['public_pages'] ?? null;

            if ($value === null) {
                $properties['publicPages'] = null;
                goto after_publicPages;
            }

            $properties['publicPages'] = $value;

            after_publicPages:

            $value = $payload['subdomain_isolation'] ?? null;

            if ($value === null) {
                $properties['subdomainIsolation'] = null;
                goto after_subdomainIsolation;
            }

            $properties['subdomainIsolation'] = $value;

            after_subdomainIsolation:

            $value = $payload['signup_enabled'] ?? null;

            if ($value === null) {
                $properties['signupEnabled'] = null;
                goto after_signupEnabled;
            }

            $properties['signupEnabled'] = $value;

            after_signupEnabled:

            $value = $payload['github_hostname'] ?? null;

            if ($value === null) {
                $properties['githubHostname'] = null;
                goto after_githubHostname;
            }

            $properties['githubHostname'] = $value;

            after_githubHostname:

            $value = $payload['identicons_host'] ?? null;

            if ($value === null) {
                $properties['identiconsHost'] = null;
                goto after_identiconsHost;
            }

            $properties['identiconsHost'] = $value;

            after_identiconsHost:

            $value = $payload['http_proxy'] ?? null;

            if ($value === null) {
                $properties['httpProxy'] = null;
                goto after_httpProxy;
            }

            $properties['httpProxy'] = $value;

            after_httpProxy:

            $value = $payload['auth_mode'] ?? null;

            if ($value === null) {
                $properties['authMode'] = null;
                goto after_authMode;
            }

            $properties['authMode'] = $value;

            after_authMode:

            $value = $payload['expire_sessions'] ?? null;

            if ($value === null) {
                $properties['expireSessions'] = null;
                goto after_expireSessions;
            }

            $properties['expireSessions'] = $value;

            after_expireSessions:

            $value = $payload['admin_password'] ?? null;

            if ($value === null) {
                $properties['adminPassword'] = null;
                goto after_adminPassword;
            }

            $properties['adminPassword'] = $value;

            after_adminPassword:

            $value = $payload['configuration_id'] ?? null;

            if ($value === null) {
                $properties['configurationId'] = null;
                goto after_configurationId;
            }

            $properties['configurationId'] = $value;

            after_configurationId:

            $value = $payload['configuration_run_count'] ?? null;

            if ($value === null) {
                $properties['configurationRunCount'] = null;
                goto after_configurationRunCount;
            }

            $properties['configurationRunCount'] = $value;

            after_configurationRunCount:

            $value = $payload['avatar'] ?? null;

            if ($value === null) {
                $properties['avatar'] = null;
                goto after_avatar;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'avatar';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Avatar($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['avatar'] = $value;

            after_avatar:

            $value = $payload['customer'] ?? null;

            if ($value === null) {
                $properties['customer'] = null;
                goto after_customer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'customer';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Customer($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['customer'] = $value;

            after_customer:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️License($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['github_ssl'] ?? null;

            if ($value === null) {
                $properties['githubSsl'] = null;
                goto after_githubSsl;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'githubSsl';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubSsl($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['githubSsl'] = $value;

            after_githubSsl:

            $value = $payload['ldap'] ?? null;

            if ($value === null) {
                $properties['ldap'] = null;
                goto after_ldap;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'ldap';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['ldap'] = $value;

            after_ldap:

            $value = $payload['cas'] ?? null;

            if ($value === null) {
                $properties['cas'] = null;
                goto after_cas;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'cas';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Cas($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['cas'] = $value;

            after_cas:

            $value = $payload['saml'] ?? null;

            if ($value === null) {
                $properties['saml'] = null;
                goto after_saml;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'saml';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Saml($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['saml'] = $value;

            after_saml:

            $value = $payload['github_oauth'] ?? null;

            if ($value === null) {
                $properties['githubOauth'] = null;
                goto after_githubOauth;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'githubOauth';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubOauth($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['githubOauth'] = $value;

            after_githubOauth:

            $value = $payload['smtp'] ?? null;

            if ($value === null) {
                $properties['smtp'] = null;
                goto after_smtp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'smtp';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Smtp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['smtp'] = $value;

            after_smtp:

            $value = $payload['ntp'] ?? null;

            if ($value === null) {
                $properties['ntp'] = null;
                goto after_ntp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'ntp';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ntp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['ntp'] = $value;

            after_ntp:

            $value = $payload['timezone'] ?? null;

            if ($value === null) {
                $properties['timezone'] = null;
                goto after_timezone;
            }

            $properties['timezone'] = $value;

            after_timezone:

            $value = $payload['snmp'] ?? null;

            if ($value === null) {
                $properties['snmp'] = null;
                goto after_snmp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'snmp';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Snmp($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['snmp'] = $value;

            after_snmp:

            $value = $payload['syslog'] ?? null;

            if ($value === null) {
                $properties['syslog'] = null;
                goto after_syslog;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'syslog';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Syslog($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['syslog'] = $value;

            after_syslog:

            $value = $payload['assets'] ?? null;

            if ($value === null) {
                $properties['assets'] = null;
                goto after_assets;
            }

            $properties['assets'] = $value;

            after_assets:

            $value = $payload['pages'] ?? null;

            if ($value === null) {
                $properties['pages'] = null;
                goto after_pages;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pages';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Pages($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pages'] = $value;

            after_pages:

            $value = $payload['collectd'] ?? null;

            if ($value === null) {
                $properties['collectd'] = null;
                goto after_collectd;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'collectd';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Collectd($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['collectd'] = $value;

            after_collectd:

            $value = $payload['mapping'] ?? null;

            if ($value === null) {
                $properties['mapping'] = null;
                goto after_mapping;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'mapping';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Mapping($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['mapping'] = $value;

            after_mapping:

            $value = $payload['load_balancer'] ?? null;

            if ($value === null) {
                $properties['loadBalancer'] = null;
                goto after_loadBalancer;
            }

            $properties['loadBalancer'] = $value;

            after_loadBalancer:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GhesGetSettings::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GhesGetSettings(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Avatar(array $payload): Avatar
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['uri'] ?? null;

            if ($value === null) {
                $properties['uri'] = null;
                goto after_uri;
            }

            $properties['uri'] = $value;

            after_uri:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Avatar', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Avatar::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Avatar(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Avatar', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Customer(array $payload): Customer
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['uuid'] ?? null;

            if ($value === null) {
                $properties['uuid'] = null;
                goto after_uuid;
            }

            $properties['uuid'] = $value;

            after_uuid:

            $value = $payload['secret_key_data'] ?? null;

            if ($value === null) {
                $properties['secretKeyData'] = null;
                goto after_secretKeyData;
            }

            $properties['secretKeyData'] = $value;

            after_secretKeyData:

            $value = $payload['public_key_data'] ?? null;

            if ($value === null) {
                $properties['publicKeyData'] = null;
                goto after_publicKeyData;
            }

            $properties['publicKeyData'] = $value;

            after_publicKeyData:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Customer', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Customer::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Customer(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Customer', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️License(array $payload): License
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['seats'] ?? null;

            if ($value === null) {
                $properties['seats'] = null;
                goto after_seats;
            }

            $properties['seats'] = $value;

            after_seats:

            $value = $payload['evaluation'] ?? null;

            if ($value === null) {
                $properties['evaluation'] = null;
                goto after_evaluation;
            }

            $properties['evaluation'] = $value;

            after_evaluation:

            $value = $payload['perpetual'] ?? null;

            if ($value === null) {
                $properties['perpetual'] = null;
                goto after_perpetual;
            }

            $properties['perpetual'] = $value;

            after_perpetual:

            $value = $payload['unlimited_seating'] ?? null;

            if ($value === null) {
                $properties['unlimitedSeating'] = null;
                goto after_unlimitedSeating;
            }

            $properties['unlimitedSeating'] = $value;

            after_unlimitedSeating:

            $value = $payload['support_key'] ?? null;

            if ($value === null) {
                $properties['supportKey'] = null;
                goto after_supportKey;
            }

            $properties['supportKey'] = $value;

            after_supportKey:

            $value = $payload['ssh_allowed'] ?? null;

            if ($value === null) {
                $properties['sshAllowed'] = null;
                goto after_sshAllowed;
            }

            $properties['sshAllowed'] = $value;

            after_sshAllowed:

            $value = $payload['cluster_support'] ?? null;

            if ($value === null) {
                $properties['clusterSupport'] = null;
                goto after_clusterSupport;
            }

            $properties['clusterSupport'] = $value;

            after_clusterSupport:

            $value = $payload['expire_at'] ?? null;

            if ($value === null) {
                $properties['expireAt'] = null;
                goto after_expireAt;
            }

            $properties['expireAt'] = $value;

            after_expireAt:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\License', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(License::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new License(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\License', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubSsl(array $payload): GithubSsl
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['cert'] ?? null;

            if ($value === null) {
                $properties['cert'] = null;
                goto after_cert;
            }

            $properties['cert'] = $value;

            after_cert:

            $value = $payload['key'] ?? null;

            if ($value === null) {
                $properties['key'] = null;
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubSsl', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GithubSsl::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GithubSsl(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubSsl', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap(array $payload): Ldap
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['host'] ?? null;

            if ($value === null) {
                $properties['host'] = null;
                goto after_host;
            }

            $properties['host'] = $value;

            after_host:

            $value = $payload['port'] ?? null;

            if ($value === null) {
                $properties['port'] = null;
                goto after_port;
            }

            $properties['port'] = $value;

            after_port:

            $value = $payload['base'] ?? null;

            if ($value === null) {
                $properties['base'] = null;
                goto after_base;
            }

            $properties['base'] = $value;

            after_base:

            $value = $payload['uid'] ?? null;

            if ($value === null) {
                $properties['uid'] = null;
                goto after_uid;
            }

            $properties['uid'] = $value;

            after_uid:

            $value = $payload['bind_dn'] ?? null;

            if ($value === null) {
                $properties['bindDn'] = null;
                goto after_bindDn;
            }

            $properties['bindDn'] = $value;

            after_bindDn:

            $value = $payload['password'] ?? null;

            if ($value === null) {
                $properties['password'] = null;
                goto after_password;
            }

            $properties['password'] = $value;

            after_password:

            $value = $payload['method'] ?? null;

            if ($value === null) {
                $properties['method'] = null;
                goto after_method;
            }

            $properties['method'] = $value;

            after_method:

            $value = $payload['search_strategy'] ?? null;

            if ($value === null) {
                $properties['searchStrategy'] = null;
                goto after_searchStrategy;
            }

            $properties['searchStrategy'] = $value;

            after_searchStrategy:

            $value = $payload['user_groups'] ?? null;

            if ($value === null) {
                $properties['userGroups'] = null;
                goto after_userGroups;
            }

            $properties['userGroups'] = $value;

            after_userGroups:

            $value = $payload['admin_group'] ?? null;

            if ($value === null) {
                $properties['adminGroup'] = null;
                goto after_adminGroup;
            }

            $properties['adminGroup'] = $value;

            after_adminGroup:

            $value = $payload['virtual_attribute_enabled'] ?? null;

            if ($value === null) {
                $properties['virtualAttributeEnabled'] = null;
                goto after_virtualAttributeEnabled;
            }

            $properties['virtualAttributeEnabled'] = $value;

            after_virtualAttributeEnabled:

            $value = $payload['recursive_group_search'] ?? null;

            if ($value === null) {
                $properties['recursiveGroupSearch'] = null;
                goto after_recursiveGroupSearch;
            }

            $properties['recursiveGroupSearch'] = $value;

            after_recursiveGroupSearch:

            $value = $payload['posix_support'] ?? null;

            if ($value === null) {
                $properties['posixSupport'] = null;
                goto after_posixSupport;
            }

            $properties['posixSupport'] = $value;

            after_posixSupport:

            $value = $payload['user_sync_emails'] ?? null;

            if ($value === null) {
                $properties['userSyncEmails'] = null;
                goto after_userSyncEmails;
            }

            $properties['userSyncEmails'] = $value;

            after_userSyncEmails:

            $value = $payload['user_sync_keys'] ?? null;

            if ($value === null) {
                $properties['userSyncKeys'] = null;
                goto after_userSyncKeys;
            }

            $properties['userSyncKeys'] = $value;

            after_userSyncKeys:

            $value = $payload['user_sync_interval'] ?? null;

            if ($value === null) {
                $properties['userSyncInterval'] = null;
                goto after_userSyncInterval;
            }

            $properties['userSyncInterval'] = $value;

            after_userSyncInterval:

            $value = $payload['team_sync_interval'] ?? null;

            if ($value === null) {
                $properties['teamSyncInterval'] = null;
                goto after_teamSyncInterval;
            }

            $properties['teamSyncInterval'] = $value;

            after_teamSyncInterval:

            $value = $payload['sync_enabled'] ?? null;

            if ($value === null) {
                $properties['syncEnabled'] = null;
                goto after_syncEnabled;
            }

            $properties['syncEnabled'] = $value;

            after_syncEnabled:

            $value = $payload['reconciliation'] ?? null;

            if ($value === null) {
                $properties['reconciliation'] = null;
                goto after_reconciliation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reconciliation';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Reconciliation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['reconciliation'] = $value;

            after_reconciliation:

            $value = $payload['profile'] ?? null;

            if ($value === null) {
                $properties['profile'] = null;
                goto after_profile;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'profile';
                    $value                  = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Profile($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['profile'] = $value;

            after_profile:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Ldap::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Ldap(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Reconciliation(array $payload): Reconciliation
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['user'] ?? null;

            if ($value === null) {
                $properties['user'] = null;
                goto after_user;
            }

            $properties['user'] = $value;

            after_user:

            $value = $payload['org'] ?? null;

            if ($value === null) {
                $properties['org'] = null;
                goto after_org;
            }

            $properties['org'] = $value;

            after_org:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Reconciliation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Reconciliation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Reconciliation(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Reconciliation', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Profile(array $payload): Profile
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['uid'] ?? null;

            if ($value === null) {
                $properties['uid'] = null;
                goto after_uid;
            }

            $properties['uid'] = $value;

            after_uid:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['mail'] ?? null;

            if ($value === null) {
                $properties['mail'] = null;
                goto after_mail;
            }

            $properties['mail'] = $value;

            after_mail:

            $value = $payload['key'] ?? null;

            if ($value === null) {
                $properties['key'] = null;
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Profile', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Profile::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Profile(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Profile', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Cas(array $payload): Cas
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
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Cas', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Cas::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Cas(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Cas', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Saml(array $payload): Saml
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['sso_url'] ?? null;

            if ($value === null) {
                $properties['ssoUrl'] = null;
                goto after_ssoUrl;
            }

            $properties['ssoUrl'] = $value;

            after_ssoUrl:

            $value = $payload['certificate'] ?? null;

            if ($value === null) {
                $properties['certificate'] = null;
                goto after_certificate;
            }

            $properties['certificate'] = $value;

            after_certificate:

            $value = $payload['certificate_path'] ?? null;

            if ($value === null) {
                $properties['certificatePath'] = null;
                goto after_certificatePath;
            }

            $properties['certificatePath'] = $value;

            after_certificatePath:

            $value = $payload['issuer'] ?? null;

            if ($value === null) {
                $properties['issuer'] = null;
                goto after_issuer;
            }

            $properties['issuer'] = $value;

            after_issuer:

            $value = $payload['idp_initiated_sso'] ?? null;

            if ($value === null) {
                $properties['idpInitiatedSso'] = null;
                goto after_idpInitiatedSso;
            }

            $properties['idpInitiatedSso'] = $value;

            after_idpInitiatedSso:

            $value = $payload['disable_admin_demote'] ?? null;

            if ($value === null) {
                $properties['disableAdminDemote'] = null;
                goto after_disableAdminDemote;
            }

            $properties['disableAdminDemote'] = $value;

            after_disableAdminDemote:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Saml', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Saml::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Saml(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Saml', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubOauth(array $payload): GithubOauth
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['client_id'] ?? null;

            if ($value === null) {
                $properties['clientId'] = null;
                goto after_clientId;
            }

            $properties['clientId'] = $value;

            after_clientId:

            $value = $payload['client_secret'] ?? null;

            if ($value === null) {
                $properties['clientSecret'] = null;
                goto after_clientSecret;
            }

            $properties['clientSecret'] = $value;

            after_clientSecret:

            $value = $payload['organization_name'] ?? null;

            if ($value === null) {
                $properties['organizationName'] = null;
                goto after_organizationName;
            }

            $properties['organizationName'] = $value;

            after_organizationName:

            $value = $payload['organization_team'] ?? null;

            if ($value === null) {
                $properties['organizationTeam'] = null;
                goto after_organizationTeam;
            }

            $properties['organizationTeam'] = $value;

            after_organizationTeam:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubOauth', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(GithubOauth::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new GithubOauth(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubOauth', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Smtp(array $payload): Smtp
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['address'] ?? null;

            if ($value === null) {
                $properties['address'] = null;
                goto after_address;
            }

            $properties['address'] = $value;

            after_address:

            $value = $payload['authentication'] ?? null;

            if ($value === null) {
                $properties['authentication'] = null;
                goto after_authentication;
            }

            $properties['authentication'] = $value;

            after_authentication:

            $value = $payload['port'] ?? null;

            if ($value === null) {
                $properties['port'] = null;
                goto after_port;
            }

            $properties['port'] = $value;

            after_port:

            $value = $payload['domain'] ?? null;

            if ($value === null) {
                $properties['domain'] = null;
                goto after_domain;
            }

            $properties['domain'] = $value;

            after_domain:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:

            $value = $payload['user_name'] ?? null;

            if ($value === null) {
                $properties['userName'] = null;
                goto after_userName;
            }

            $properties['userName'] = $value;

            after_userName:

            $value = $payload['enable_starttls_auto'] ?? null;

            if ($value === null) {
                $properties['enableStarttlsAuto'] = null;
                goto after_enableStarttlsAuto;
            }

            $properties['enableStarttlsAuto'] = $value;

            after_enableStarttlsAuto:

            $value = $payload['password'] ?? null;

            if ($value === null) {
                $properties['password'] = null;
                goto after_password;
            }

            $properties['password'] = $value;

            after_password:

            $value = $payload['discard-to-noreply-address'] ?? null;

            if ($value === null) {
                $properties['discardMinToMinNoreplyMinAddress'] = null;
                goto after_discardMinToMinNoreplyMinAddress;
            }

            $properties['discardMinToMinNoreplyMinAddress'] = $value;

            after_discardMinToMinNoreplyMinAddress:

            $value = $payload['support_address'] ?? null;

            if ($value === null) {
                $properties['supportAddress'] = null;
                goto after_supportAddress;
            }

            $properties['supportAddress'] = $value;

            after_supportAddress:

            $value = $payload['support_address_type'] ?? null;

            if ($value === null) {
                $properties['supportAddressType'] = null;
                goto after_supportAddressType;
            }

            $properties['supportAddressType'] = $value;

            after_supportAddressType:

            $value = $payload['noreply_address'] ?? null;

            if ($value === null) {
                $properties['noreplyAddress'] = null;
                goto after_noreplyAddress;
            }

            $properties['noreplyAddress'] = $value;

            after_noreplyAddress:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Smtp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Smtp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Smtp(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Smtp', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ntp(array $payload): Ntp
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['primary_server'] ?? null;

            if ($value === null) {
                $properties['primaryServer'] = null;
                goto after_primaryServer;
            }

            $properties['primaryServer'] = $value;

            after_primaryServer:

            $value = $payload['secondary_server'] ?? null;

            if ($value === null) {
                $properties['secondaryServer'] = null;
                goto after_secondaryServer;
            }

            $properties['secondaryServer'] = $value;

            after_secondaryServer:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ntp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Ntp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Ntp(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ntp', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Snmp(array $payload): Snmp
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['community'] ?? null;

            if ($value === null) {
                $properties['community'] = null;
                goto after_community;
            }

            $properties['community'] = $value;

            after_community:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Snmp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Snmp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Snmp(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Snmp', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Syslog(array $payload): Syslog
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['server'] ?? null;

            if ($value === null) {
                $properties['server'] = null;
                goto after_server;
            }

            $properties['server'] = $value;

            after_server:

            $value = $payload['protocol_name'] ?? null;

            if ($value === null) {
                $properties['protocolName'] = null;
                goto after_protocolName;
            }

            $properties['protocolName'] = $value;

            after_protocolName:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Syslog', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Syslog::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Syslog(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Syslog', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Pages(array $payload): Pages
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Pages', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Pages::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Pages(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Pages', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Collectd(array $payload): Collectd
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['server'] ?? null;

            if ($value === null) {
                $properties['server'] = null;
                goto after_server;
            }

            $properties['server'] = $value;

            after_server:

            $value = $payload['port'] ?? null;

            if ($value === null) {
                $properties['port'] = null;
                goto after_port;
            }

            $properties['port'] = $value;

            after_port:

            $value = $payload['encryption'] ?? null;

            if ($value === null) {
                $properties['encryption'] = null;
                goto after_encryption;
            }

            $properties['encryption'] = $value;

            after_encryption:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:

            $value = $payload['password'] ?? null;

            if ($value === null) {
                $properties['password'] = null;
                goto after_password;
            }

            $properties['password'] = $value;

            after_password:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Collectd', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Collectd::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Collectd(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Collectd', $exception, stack: $this->hydrationStack);
        }
    }

    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Mapping(array $payload): Mapping
    {
        $properties    = [];
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

            $value = $payload['tileserver'] ?? null;

            if ($value === null) {
                $properties['tileserver'] = null;
                goto after_tileserver;
            }

            $properties['tileserver'] = $value;

            after_tileserver:

            $value = $payload['basemap'] ?? null;

            if ($value === null) {
                $properties['basemap'] = null;
                goto after_basemap;
            }

            $properties['basemap'] = $value;

            after_basemap:

            $value = $payload['token'] ?? null;

            if ($value === null) {
                $properties['token'] = null;
                goto after_token;
            }

            $properties['token'] = $value;

            after_token:
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Mapping', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(Mapping::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new Mapping(...$properties);
        } catch (Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Mapping', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Avatar' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Avatar($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Customer' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Customer($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\License' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️License($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubSsl' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubSsl($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Reconciliation' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Reconciliation($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ldap\Profile' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Profile($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Cas' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Cas($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Saml' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Saml($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\GithubOauth' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubOauth($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Smtp' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Smtp($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Ntp' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ntp($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Snmp' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Snmp($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Syslog' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Syslog($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Pages' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Pages($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Collectd' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Collectd($object),
                'ApiClients\Client\GitHubEnterprise\Schema\GhesGetSettings\Mapping' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Mapping($object),
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

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings(mixed $object): mixed
    {
        assert($object instanceof GhesGetSettings);
        $result = [];

        $privateMode = $object->privateMode;

        if ($privateMode === null) {
            goto after_privateMode;
        }

        after_privateMode:        $result['private_mode'] = $privateMode;

        $publicPages = $object->publicPages;

        if ($publicPages === null) {
            goto after_publicPages;
        }

        after_publicPages:        $result['public_pages'] = $publicPages;

        $subdomainIsolation = $object->subdomainIsolation;

        if ($subdomainIsolation === null) {
            goto after_subdomainIsolation;
        }

        after_subdomainIsolation:        $result['subdomain_isolation'] = $subdomainIsolation;

        $signupEnabled = $object->signupEnabled;

        if ($signupEnabled === null) {
            goto after_signupEnabled;
        }

        after_signupEnabled:        $result['signup_enabled'] = $signupEnabled;

        $githubHostname = $object->githubHostname;

        if ($githubHostname === null) {
            goto after_githubHostname;
        }

        after_githubHostname:        $result['github_hostname'] = $githubHostname;

        $identiconsHost = $object->identiconsHost;

        if ($identiconsHost === null) {
            goto after_identiconsHost;
        }

        after_identiconsHost:        $result['identicons_host'] = $identiconsHost;

        $httpProxy = $object->httpProxy;

        if ($httpProxy === null) {
            goto after_httpProxy;
        }

        after_httpProxy:        $result['http_proxy'] = $httpProxy;

        $authMode = $object->authMode;

        if ($authMode === null) {
            goto after_authMode;
        }

        after_authMode:        $result['auth_mode'] = $authMode;

        $expireSessions = $object->expireSessions;

        if ($expireSessions === null) {
            goto after_expireSessions;
        }

        after_expireSessions:        $result['expire_sessions'] = $expireSessions;

        $adminPassword = $object->adminPassword;

        if ($adminPassword === null) {
            goto after_adminPassword;
        }

        after_adminPassword:        $result['admin_password'] = $adminPassword;

        $configurationId = $object->configurationId;

        if ($configurationId === null) {
            goto after_configurationId;
        }

        after_configurationId:        $result['configuration_id'] = $configurationId;

        $configurationRunCount = $object->configurationRunCount;

        if ($configurationRunCount === null) {
            goto after_configurationRunCount;
        }

        after_configurationRunCount:        $result['configuration_run_count'] = $configurationRunCount;

        $avatar = $object->avatar;

        if ($avatar === null) {
            goto after_avatar;
        }

        $avatar                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Avatar($avatar);
        after_avatar:        $result['avatar'] = $avatar;

        $customer = $object->customer;

        if ($customer === null) {
            goto after_customer;
        }

        $customer                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Customer($customer);
        after_customer:        $result['customer'] = $customer;

        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }

        $license                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️License($license);
        after_license:        $result['license'] = $license;

        $githubSsl = $object->githubSsl;

        if ($githubSsl === null) {
            goto after_githubSsl;
        }

        $githubSsl                                    = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubSsl($githubSsl);
        after_githubSsl:        $result['github_ssl'] = $githubSsl;

        $ldap = $object->ldap;

        if ($ldap === null) {
            goto after_ldap;
        }

        $ldap                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap($ldap);
        after_ldap:        $result['ldap'] = $ldap;

        $cas = $object->cas;

        if ($cas === null) {
            goto after_cas;
        }

        $cas                             = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Cas($cas);
        after_cas:        $result['cas'] = $cas;

        $saml = $object->saml;

        if ($saml === null) {
            goto after_saml;
        }

        $saml                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Saml($saml);
        after_saml:        $result['saml'] = $saml;

        $githubOauth = $object->githubOauth;

        if ($githubOauth === null) {
            goto after_githubOauth;
        }

        $githubOauth                                      = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubOauth($githubOauth);
        after_githubOauth:        $result['github_oauth'] = $githubOauth;

        $smtp = $object->smtp;

        if ($smtp === null) {
            goto after_smtp;
        }

        $smtp                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Smtp($smtp);
        after_smtp:        $result['smtp'] = $smtp;

        $ntp = $object->ntp;

        if ($ntp === null) {
            goto after_ntp;
        }

        $ntp                             = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ntp($ntp);
        after_ntp:        $result['ntp'] = $ntp;

        $timezone = $object->timezone;

        if ($timezone === null) {
            goto after_timezone;
        }

        after_timezone:        $result['timezone'] = $timezone;

        $snmp = $object->snmp;

        if ($snmp === null) {
            goto after_snmp;
        }

        $snmp                              = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Snmp($snmp);
        after_snmp:        $result['snmp'] = $snmp;

        $syslog = $object->syslog;

        if ($syslog === null) {
            goto after_syslog;
        }

        $syslog                                = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Syslog($syslog);
        after_syslog:        $result['syslog'] = $syslog;

        $assets = $object->assets;

        if ($assets === null) {
            goto after_assets;
        }

        after_assets:        $result['assets'] = $assets;

        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }

        $pages                               = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Pages($pages);
        after_pages:        $result['pages'] = $pages;

        $collectd = $object->collectd;

        if ($collectd === null) {
            goto after_collectd;
        }

        $collectd                                  = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Collectd($collectd);
        after_collectd:        $result['collectd'] = $collectd;

        $mapping = $object->mapping;

        if ($mapping === null) {
            goto after_mapping;
        }

        $mapping                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Mapping($mapping);
        after_mapping:        $result['mapping'] = $mapping;

        $loadBalancer = $object->loadBalancer;

        if ($loadBalancer === null) {
            goto after_loadBalancer;
        }

        after_loadBalancer:        $result['load_balancer'] = $loadBalancer;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Avatar(mixed $object): mixed
    {
        assert($object instanceof Avatar);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $uri = $object->uri;

        if ($uri === null) {
            goto after_uri;
        }

        after_uri:        $result['uri'] = $uri;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Customer(mixed $object): mixed
    {
        assert($object instanceof Customer);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }

        after_email:        $result['email'] = $email;

        $uuid = $object->uuid;

        if ($uuid === null) {
            goto after_uuid;
        }

        after_uuid:        $result['uuid'] = $uuid;

        $secretKeyData = $object->secretKeyData;

        if ($secretKeyData === null) {
            goto after_secretKeyData;
        }

        after_secretKeyData:        $result['secret_key_data'] = $secretKeyData;

        $publicKeyData = $object->publicKeyData;

        if ($publicKeyData === null) {
            goto after_publicKeyData;
        }

        after_publicKeyData:        $result['public_key_data'] = $publicKeyData;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️License(mixed $object): mixed
    {
        assert($object instanceof License);
        $result = [];

        $seats = $object->seats;

        if ($seats === null) {
            goto after_seats;
        }

        after_seats:        $result['seats'] = $seats;

        $evaluation = $object->evaluation;

        if ($evaluation === null) {
            goto after_evaluation;
        }

        after_evaluation:        $result['evaluation'] = $evaluation;

        $perpetual = $object->perpetual;

        if ($perpetual === null) {
            goto after_perpetual;
        }

        after_perpetual:        $result['perpetual'] = $perpetual;

        $unlimitedSeating = $object->unlimitedSeating;

        if ($unlimitedSeating === null) {
            goto after_unlimitedSeating;
        }

        after_unlimitedSeating:        $result['unlimited_seating'] = $unlimitedSeating;

        $supportKey = $object->supportKey;

        if ($supportKey === null) {
            goto after_supportKey;
        }

        after_supportKey:        $result['support_key'] = $supportKey;

        $sshAllowed = $object->sshAllowed;

        if ($sshAllowed === null) {
            goto after_sshAllowed;
        }

        after_sshAllowed:        $result['ssh_allowed'] = $sshAllowed;

        $clusterSupport = $object->clusterSupport;

        if ($clusterSupport === null) {
            goto after_clusterSupport;
        }

        after_clusterSupport:        $result['cluster_support'] = $clusterSupport;

        $expireAt = $object->expireAt;

        if ($expireAt === null) {
            goto after_expireAt;
        }

        after_expireAt:        $result['expire_at'] = $expireAt;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubSsl(mixed $object): mixed
    {
        assert($object instanceof GithubSsl);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $cert = $object->cert;

        if ($cert === null) {
            goto after_cert;
        }

        after_cert:        $result['cert'] = $cert;

        $key = $object->key;

        if ($key === null) {
            goto after_key;
        }

        after_key:        $result['key'] = $key;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap(mixed $object): mixed
    {
        assert($object instanceof Ldap);
        $result = [];

        $host = $object->host;

        if ($host === null) {
            goto after_host;
        }

        after_host:        $result['host'] = $host;

        $port = $object->port;

        if ($port === null) {
            goto after_port;
        }

        after_port:        $result['port'] = $port;

        $base = $object->base;

        if ($base === null) {
            goto after_base;
        }

        static $baseSerializer0;

        if ($baseSerializer0 === null) {
            $baseSerializer0 = new SerializeArrayItems(...[]);
        }

        $base                              = $baseSerializer0->serialize($base, $this);
        after_base:        $result['base'] = $base;

        $uid = $object->uid;

        if ($uid === null) {
            goto after_uid;
        }

        after_uid:        $result['uid'] = $uid;

        $bindDn = $object->bindDn;

        if ($bindDn === null) {
            goto after_bindDn;
        }

        after_bindDn:        $result['bind_dn'] = $bindDn;

        $password = $object->password;

        if ($password === null) {
            goto after_password;
        }

        after_password:        $result['password'] = $password;

        $method = $object->method;

        if ($method === null) {
            goto after_method;
        }

        after_method:        $result['method'] = $method;

        $searchStrategy = $object->searchStrategy;

        if ($searchStrategy === null) {
            goto after_searchStrategy;
        }

        after_searchStrategy:        $result['search_strategy'] = $searchStrategy;

        $userGroups = $object->userGroups;

        if ($userGroups === null) {
            goto after_userGroups;
        }

        static $userGroupsSerializer0;

        if ($userGroupsSerializer0 === null) {
            $userGroupsSerializer0 = new SerializeArrayItems(...[]);
        }

        $userGroups                                     = $userGroupsSerializer0->serialize($userGroups, $this);
        after_userGroups:        $result['user_groups'] = $userGroups;

        $adminGroup = $object->adminGroup;

        if ($adminGroup === null) {
            goto after_adminGroup;
        }

        after_adminGroup:        $result['admin_group'] = $adminGroup;

        $virtualAttributeEnabled = $object->virtualAttributeEnabled;

        if ($virtualAttributeEnabled === null) {
            goto after_virtualAttributeEnabled;
        }

        after_virtualAttributeEnabled:        $result['virtual_attribute_enabled'] = $virtualAttributeEnabled;

        $recursiveGroupSearch = $object->recursiveGroupSearch;

        if ($recursiveGroupSearch === null) {
            goto after_recursiveGroupSearch;
        }

        after_recursiveGroupSearch:        $result['recursive_group_search'] = $recursiveGroupSearch;

        $posixSupport = $object->posixSupport;

        if ($posixSupport === null) {
            goto after_posixSupport;
        }

        after_posixSupport:        $result['posix_support'] = $posixSupport;

        $userSyncEmails = $object->userSyncEmails;

        if ($userSyncEmails === null) {
            goto after_userSyncEmails;
        }

        after_userSyncEmails:        $result['user_sync_emails'] = $userSyncEmails;

        $userSyncKeys = $object->userSyncKeys;

        if ($userSyncKeys === null) {
            goto after_userSyncKeys;
        }

        after_userSyncKeys:        $result['user_sync_keys'] = $userSyncKeys;

        $userSyncInterval = $object->userSyncInterval;

        if ($userSyncInterval === null) {
            goto after_userSyncInterval;
        }

        after_userSyncInterval:        $result['user_sync_interval'] = $userSyncInterval;

        $teamSyncInterval = $object->teamSyncInterval;

        if ($teamSyncInterval === null) {
            goto after_teamSyncInterval;
        }

        after_teamSyncInterval:        $result['team_sync_interval'] = $teamSyncInterval;

        $syncEnabled = $object->syncEnabled;

        if ($syncEnabled === null) {
            goto after_syncEnabled;
        }

        after_syncEnabled:        $result['sync_enabled'] = $syncEnabled;

        $reconciliation = $object->reconciliation;

        if ($reconciliation === null) {
            goto after_reconciliation;
        }

        $reconciliation                                        = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Reconciliation($reconciliation);
        after_reconciliation:        $result['reconciliation'] = $reconciliation;

        $profile = $object->profile;

        if ($profile === null) {
            goto after_profile;
        }

        $profile                                 = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Profile($profile);
        after_profile:        $result['profile'] = $profile;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Reconciliation(mixed $object): mixed
    {
        assert($object instanceof Reconciliation);
        $result = [];

        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }

        after_user:        $result['user'] = $user;

        $org = $object->org;

        if ($org === null) {
            goto after_org;
        }

        after_org:        $result['org'] = $org;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ldap⚡️Profile(mixed $object): mixed
    {
        assert($object instanceof Profile);
        $result = [];

        $uid = $object->uid;

        if ($uid === null) {
            goto after_uid;
        }

        after_uid:        $result['uid'] = $uid;

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }

        after_name:        $result['name'] = $name;

        $mail = $object->mail;

        if ($mail === null) {
            goto after_mail;
        }

        after_mail:        $result['mail'] = $mail;

        $key = $object->key;

        if ($key === null) {
            goto after_key;
        }

        after_key:        $result['key'] = $key;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Cas(mixed $object): mixed
    {
        assert($object instanceof Cas);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }

        after_url:        $result['url'] = $url;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Saml(mixed $object): mixed
    {
        assert($object instanceof Saml);
        $result = [];

        $ssoUrl = $object->ssoUrl;

        if ($ssoUrl === null) {
            goto after_ssoUrl;
        }

        after_ssoUrl:        $result['sso_url'] = $ssoUrl;

        $certificate = $object->certificate;

        if ($certificate === null) {
            goto after_certificate;
        }

        after_certificate:        $result['certificate'] = $certificate;

        $certificatePath = $object->certificatePath;

        if ($certificatePath === null) {
            goto after_certificatePath;
        }

        after_certificatePath:        $result['certificate_path'] = $certificatePath;

        $issuer = $object->issuer;

        if ($issuer === null) {
            goto after_issuer;
        }

        after_issuer:        $result['issuer'] = $issuer;

        $idpInitiatedSso = $object->idpInitiatedSso;

        if ($idpInitiatedSso === null) {
            goto after_idpInitiatedSso;
        }

        after_idpInitiatedSso:        $result['idp_initiated_sso'] = $idpInitiatedSso;

        $disableAdminDemote = $object->disableAdminDemote;

        if ($disableAdminDemote === null) {
            goto after_disableAdminDemote;
        }

        after_disableAdminDemote:        $result['disable_admin_demote'] = $disableAdminDemote;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️GithubOauth(mixed $object): mixed
    {
        assert($object instanceof GithubOauth);
        $result = [];

        $clientId = $object->clientId;

        if ($clientId === null) {
            goto after_clientId;
        }

        after_clientId:        $result['client_id'] = $clientId;

        $clientSecret = $object->clientSecret;

        if ($clientSecret === null) {
            goto after_clientSecret;
        }

        after_clientSecret:        $result['client_secret'] = $clientSecret;

        $organizationName = $object->organizationName;

        if ($organizationName === null) {
            goto after_organizationName;
        }

        after_organizationName:        $result['organization_name'] = $organizationName;

        $organizationTeam = $object->organizationTeam;

        if ($organizationTeam === null) {
            goto after_organizationTeam;
        }

        after_organizationTeam:        $result['organization_team'] = $organizationTeam;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Smtp(mixed $object): mixed
    {
        assert($object instanceof Smtp);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $address = $object->address;

        if ($address === null) {
            goto after_address;
        }

        after_address:        $result['address'] = $address;

        $authentication = $object->authentication;

        if ($authentication === null) {
            goto after_authentication;
        }

        after_authentication:        $result['authentication'] = $authentication;

        $port = $object->port;

        if ($port === null) {
            goto after_port;
        }

        after_port:        $result['port'] = $port;

        $domain = $object->domain;

        if ($domain === null) {
            goto after_domain;
        }

        after_domain:        $result['domain'] = $domain;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        $userName = $object->userName;

        if ($userName === null) {
            goto after_userName;
        }

        after_userName:        $result['user_name'] = $userName;

        $enableStarttlsAuto = $object->enableStarttlsAuto;

        if ($enableStarttlsAuto === null) {
            goto after_enableStarttlsAuto;
        }

        after_enableStarttlsAuto:        $result['enable_starttls_auto'] = $enableStarttlsAuto;

        $password = $object->password;

        if ($password === null) {
            goto after_password;
        }

        after_password:        $result['password'] = $password;

        $discardMinToMinNoreplyMinAddress = $object->discardMinToMinNoreplyMinAddress;

        if ($discardMinToMinNoreplyMinAddress === null) {
            goto after_discardMinToMinNoreplyMinAddress;
        }

        after_discardMinToMinNoreplyMinAddress:        $result['discard-to-noreply-address'] = $discardMinToMinNoreplyMinAddress;

        $supportAddress = $object->supportAddress;

        if ($supportAddress === null) {
            goto after_supportAddress;
        }

        after_supportAddress:        $result['support_address'] = $supportAddress;

        $supportAddressType = $object->supportAddressType;

        if ($supportAddressType === null) {
            goto after_supportAddressType;
        }

        after_supportAddressType:        $result['support_address_type'] = $supportAddressType;

        $noreplyAddress = $object->noreplyAddress;

        if ($noreplyAddress === null) {
            goto after_noreplyAddress;
        }

        after_noreplyAddress:        $result['noreply_address'] = $noreplyAddress;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Ntp(mixed $object): mixed
    {
        assert($object instanceof Ntp);
        $result = [];

        $primaryServer = $object->primaryServer;

        if ($primaryServer === null) {
            goto after_primaryServer;
        }

        after_primaryServer:        $result['primary_server'] = $primaryServer;

        $secondaryServer = $object->secondaryServer;

        if ($secondaryServer === null) {
            goto after_secondaryServer;
        }

        after_secondaryServer:        $result['secondary_server'] = $secondaryServer;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Snmp(mixed $object): mixed
    {
        assert($object instanceof Snmp);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $community = $object->community;

        if ($community === null) {
            goto after_community;
        }

        after_community:        $result['community'] = $community;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Syslog(mixed $object): mixed
    {
        assert($object instanceof Syslog);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $server = $object->server;

        if ($server === null) {
            goto after_server;
        }

        after_server:        $result['server'] = $server;

        $protocolName = $object->protocolName;

        if ($protocolName === null) {
            goto after_protocolName;
        }

        after_protocolName:        $result['protocol_name'] = $protocolName;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Pages(mixed $object): mixed
    {
        assert($object instanceof Pages);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Collectd(mixed $object): mixed
    {
        assert($object instanceof Collectd);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $server = $object->server;

        if ($server === null) {
            goto after_server;
        }

        after_server:        $result['server'] = $server;

        $port = $object->port;

        if ($port === null) {
            goto after_port;
        }

        after_port:        $result['port'] = $port;

        $encryption = $object->encryption;

        if ($encryption === null) {
            goto after_encryption;
        }

        after_encryption:        $result['encryption'] = $encryption;

        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }

        after_username:        $result['username'] = $username;

        $password = $object->password;

        if ($password === null) {
            goto after_password;
        }

        after_password:        $result['password'] = $password;

        return $result;
    }

    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️GhesGetSettings⚡️Mapping(mixed $object): mixed
    {
        assert($object instanceof Mapping);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }

        after_enabled:        $result['enabled'] = $enabled;

        $tileserver = $object->tileserver;

        if ($tileserver === null) {
            goto after_tileserver;
        }

        after_tileserver:        $result['tileserver'] = $tileserver;

        $basemap = $object->basemap;

        if ($basemap === null) {
            goto after_basemap;
        }

        after_basemap:        $result['basemap'] = $basemap;

        $token = $object->token;

        if ($token === null) {
            goto after_token;
        }

        after_token:        $result['token'] = $token;

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
