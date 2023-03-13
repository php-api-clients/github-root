<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Setup\Api;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Settings implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Avatar($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Customer($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️License($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubSsl($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Profile($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Cas($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Saml($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubOauth($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Smtp($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ntp($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Snmp($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Syslog($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Collectd($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Mapping($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['run_list'] ?? null;

            if ($value === null) {
                $properties['run_list'] = null;
                goto after_run_list;
            }

            $properties['run_list'] = $value;

            after_run_list:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['private_mode'] ?? null;

            if ($value === null) {
                $properties['private_mode'] = null;
                goto after_private_mode;
            }

            $properties['private_mode'] = $value;

            after_private_mode:

            $value = $payload['public_pages'] ?? null;

            if ($value === null) {
                $properties['public_pages'] = null;
                goto after_public_pages;
            }

            $properties['public_pages'] = $value;

            after_public_pages:

            $value = $payload['subdomain_isolation'] ?? null;

            if ($value === null) {
                $properties['subdomain_isolation'] = null;
                goto after_subdomain_isolation;
            }

            $properties['subdomain_isolation'] = $value;

            after_subdomain_isolation:

            $value = $payload['signup_enabled'] ?? null;

            if ($value === null) {
                $properties['signup_enabled'] = null;
                goto after_signup_enabled;
            }

            $properties['signup_enabled'] = $value;

            after_signup_enabled:

            $value = $payload['github_hostname'] ?? null;

            if ($value === null) {
                $properties['github_hostname'] = null;
                goto after_github_hostname;
            }

            $properties['github_hostname'] = $value;

            after_github_hostname:

            $value = $payload['identicons_host'] ?? null;

            if ($value === null) {
                $properties['identicons_host'] = null;
                goto after_identicons_host;
            }

            $properties['identicons_host'] = $value;

            after_identicons_host:

            $value = $payload['http_proxy'] ?? null;

            if ($value === null) {
                $properties['http_proxy'] = null;
                goto after_http_proxy;
            }

            $properties['http_proxy'] = $value;

            after_http_proxy:

            $value = $payload['auth_mode'] ?? null;

            if ($value === null) {
                $properties['auth_mode'] = null;
                goto after_auth_mode;
            }

            $properties['auth_mode'] = $value;

            after_auth_mode:

            $value = $payload['expire_sessions'] ?? null;

            if ($value === null) {
                $properties['expire_sessions'] = null;
                goto after_expire_sessions;
            }

            $properties['expire_sessions'] = $value;

            after_expire_sessions:

            $value = $payload['admin_password'] ?? null;

            if ($value === null) {
                $properties['admin_password'] = null;
                goto after_admin_password;
            }

            $properties['admin_password'] = $value;

            after_admin_password:

            $value = $payload['configuration_id'] ?? null;

            if ($value === null) {
                $properties['configuration_id'] = null;
                goto after_configuration_id;
            }

            $properties['configuration_id'] = $value;

            after_configuration_id:

            $value = $payload['configuration_run_count'] ?? null;

            if ($value === null) {
                $properties['configuration_run_count'] = null;
                goto after_configuration_run_count;
            }

            $properties['configuration_run_count'] = $value;

            after_configuration_run_count:

            $value = $payload['avatar'] ?? null;

            if ($value === null) {
                $properties['avatar'] = null;
                goto after_avatar;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'avatar';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Avatar($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Customer($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️License($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['github_ssl'] ?? null;

            if ($value === null) {
                $properties['github_ssl'] = null;
                goto after_github_ssl;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'github_ssl';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubSsl($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['github_ssl'] = $value;

            after_github_ssl:

            $value = $payload['ldap'] ?? null;

            if ($value === null) {
                $properties['ldap'] = null;
                goto after_ldap;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'ldap';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Cas($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Saml($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['saml'] = $value;

            after_saml:

            $value = $payload['github_oauth'] ?? null;

            if ($value === null) {
                $properties['github_oauth'] = null;
                goto after_github_oauth;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'github_oauth';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubOauth($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['github_oauth'] = $value;

            after_github_oauth:

            $value = $payload['smtp'] ?? null;

            if ($value === null) {
                $properties['smtp'] = null;
                goto after_smtp;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'smtp';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Smtp($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ntp($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Snmp($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Syslog($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Collectd($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Mapping($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['mapping'] = $value;

            after_mapping:

            $value = $payload['load_balancer'] ?? null;

            if ($value === null) {
                $properties['load_balancer'] = null;
                goto after_load_balancer;
            }

            $properties['load_balancer'] = $value;

            after_load_balancer:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Avatar(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Customer(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer
    {
        $properties = []; 
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
                $properties['secret_key_data'] = null;
                goto after_secret_key_data;
            }

            $properties['secret_key_data'] = $value;

            after_secret_key_data:

            $value = $payload['public_key_data'] ?? null;

            if ($value === null) {
                $properties['public_key_data'] = null;
                goto after_public_key_data;
            }

            $properties['public_key_data'] = $value;

            after_public_key_data:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️License(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License
    {
        $properties = []; 
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
                $properties['unlimited_seating'] = null;
                goto after_unlimited_seating;
            }

            $properties['unlimited_seating'] = $value;

            after_unlimited_seating:

            $value = $payload['support_key'] ?? null;

            if ($value === null) {
                $properties['support_key'] = null;
                goto after_support_key;
            }

            $properties['support_key'] = $value;

            after_support_key:

            $value = $payload['ssh_allowed'] ?? null;

            if ($value === null) {
                $properties['ssh_allowed'] = null;
                goto after_ssh_allowed;
            }

            $properties['ssh_allowed'] = $value;

            after_ssh_allowed:

            $value = $payload['cluster_support'] ?? null;

            if ($value === null) {
                $properties['cluster_support'] = null;
                goto after_cluster_support;
            }

            $properties['cluster_support'] = $value;

            after_cluster_support:

            $value = $payload['expire_at'] ?? null;

            if ($value === null) {
                $properties['expire_at'] = null;
                goto after_expire_at;
            }

            $properties['expire_at'] = $value;

            after_expire_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubSsl(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap
    {
        $properties = []; 
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
                $properties['bind_dn'] = null;
                goto after_bind_dn;
            }

            $properties['bind_dn'] = $value;

            after_bind_dn:

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
                $properties['search_strategy'] = null;
                goto after_search_strategy;
            }

            $properties['search_strategy'] = $value;

            after_search_strategy:

            $value = $payload['user_groups'] ?? null;

            if ($value === null) {
                $properties['user_groups'] = null;
                goto after_user_groups;
            }

            $properties['user_groups'] = $value;

            after_user_groups:

            $value = $payload['admin_group'] ?? null;

            if ($value === null) {
                $properties['admin_group'] = null;
                goto after_admin_group;
            }

            $properties['admin_group'] = $value;

            after_admin_group:

            $value = $payload['virtual_attribute_enabled'] ?? null;

            if ($value === null) {
                $properties['virtual_attribute_enabled'] = null;
                goto after_virtual_attribute_enabled;
            }

            $properties['virtual_attribute_enabled'] = $value;

            after_virtual_attribute_enabled:

            $value = $payload['recursive_group_search'] ?? null;

            if ($value === null) {
                $properties['recursive_group_search'] = null;
                goto after_recursive_group_search;
            }

            $properties['recursive_group_search'] = $value;

            after_recursive_group_search:

            $value = $payload['posix_support'] ?? null;

            if ($value === null) {
                $properties['posix_support'] = null;
                goto after_posix_support;
            }

            $properties['posix_support'] = $value;

            after_posix_support:

            $value = $payload['user_sync_emails'] ?? null;

            if ($value === null) {
                $properties['user_sync_emails'] = null;
                goto after_user_sync_emails;
            }

            $properties['user_sync_emails'] = $value;

            after_user_sync_emails:

            $value = $payload['user_sync_keys'] ?? null;

            if ($value === null) {
                $properties['user_sync_keys'] = null;
                goto after_user_sync_keys;
            }

            $properties['user_sync_keys'] = $value;

            after_user_sync_keys:

            $value = $payload['user_sync_interval'] ?? null;

            if ($value === null) {
                $properties['user_sync_interval'] = null;
                goto after_user_sync_interval;
            }

            $properties['user_sync_interval'] = $value;

            after_user_sync_interval:

            $value = $payload['team_sync_interval'] ?? null;

            if ($value === null) {
                $properties['team_sync_interval'] = null;
                goto after_team_sync_interval;
            }

            $properties['team_sync_interval'] = $value;

            after_team_sync_interval:

            $value = $payload['sync_enabled'] ?? null;

            if ($value === null) {
                $properties['sync_enabled'] = null;
                goto after_sync_enabled;
            }

            $properties['sync_enabled'] = $value;

            after_sync_enabled:

            $value = $payload['reconciliation'] ?? null;

            if ($value === null) {
                $properties['reconciliation'] = null;
                goto after_reconciliation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'reconciliation';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation($value);
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
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Profile($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['profile'] = $value;

            after_profile:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Profile(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Cas(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Saml(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sso_url'] ?? null;

            if ($value === null) {
                $properties['sso_url'] = null;
                goto after_sso_url;
            }

            $properties['sso_url'] = $value;

            after_sso_url:

            $value = $payload['certificate'] ?? null;

            if ($value === null) {
                $properties['certificate'] = null;
                goto after_certificate;
            }

            $properties['certificate'] = $value;

            after_certificate:

            $value = $payload['certificate_path'] ?? null;

            if ($value === null) {
                $properties['certificate_path'] = null;
                goto after_certificate_path;
            }

            $properties['certificate_path'] = $value;

            after_certificate_path:

            $value = $payload['issuer'] ?? null;

            if ($value === null) {
                $properties['issuer'] = null;
                goto after_issuer;
            }

            $properties['issuer'] = $value;

            after_issuer:

            $value = $payload['idp_initiated_sso'] ?? null;

            if ($value === null) {
                $properties['idp_initiated_sso'] = null;
                goto after_idp_initiated_sso;
            }

            $properties['idp_initiated_sso'] = $value;

            after_idp_initiated_sso:

            $value = $payload['disable_admin_demote'] ?? null;

            if ($value === null) {
                $properties['disable_admin_demote'] = null;
                goto after_disable_admin_demote;
            }

            $properties['disable_admin_demote'] = $value;

            after_disable_admin_demote:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubOauth(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['client_id'] ?? null;

            if ($value === null) {
                $properties['client_id'] = null;
                goto after_client_id;
            }

            $properties['client_id'] = $value;

            after_client_id:

            $value = $payload['client_secret'] ?? null;

            if ($value === null) {
                $properties['client_secret'] = null;
                goto after_client_secret;
            }

            $properties['client_secret'] = $value;

            after_client_secret:

            $value = $payload['organization_name'] ?? null;

            if ($value === null) {
                $properties['organization_name'] = null;
                goto after_organization_name;
            }

            $properties['organization_name'] = $value;

            after_organization_name:

            $value = $payload['organization_team'] ?? null;

            if ($value === null) {
                $properties['organization_team'] = null;
                goto after_organization_team;
            }

            $properties['organization_team'] = $value;

            after_organization_team:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Smtp(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp
    {
        $properties = []; 
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
                $properties['user_name'] = null;
                goto after_user_name;
            }

            $properties['user_name'] = $value;

            after_user_name:

            $value = $payload['enable_starttls_auto'] ?? null;

            if ($value === null) {
                $properties['enable_starttls_auto'] = null;
                goto after_enable_starttls_auto;
            }

            $properties['enable_starttls_auto'] = $value;

            after_enable_starttls_auto:

            $value = $payload['password'] ?? null;

            if ($value === null) {
                $properties['password'] = null;
                goto after_password;
            }

            $properties['password'] = $value;

            after_password:

            $value = $payload['discard__m_i_n_u_s_to__m_i_n_u_s_noreply__m_i_n_u_s_address'] ?? null;

            if ($value === null) {
                $properties['discard_MINUS_to_MINUS_noreply_MINUS_address'] = null;
                goto after_discard_MINUS_to_MINUS_noreply_MINUS_address;
            }

            $properties['discard_MINUS_to_MINUS_noreply_MINUS_address'] = $value;

            after_discard_MINUS_to_MINUS_noreply_MINUS_address:

            $value = $payload['support_address'] ?? null;

            if ($value === null) {
                $properties['support_address'] = null;
                goto after_support_address;
            }

            $properties['support_address'] = $value;

            after_support_address:

            $value = $payload['support_address_type'] ?? null;

            if ($value === null) {
                $properties['support_address_type'] = null;
                goto after_support_address_type;
            }

            $properties['support_address_type'] = $value;

            after_support_address_type:

            $value = $payload['noreply_address'] ?? null;

            if ($value === null) {
                $properties['noreply_address'] = null;
                goto after_noreply_address;
            }

            $properties['noreply_address'] = $value;

            after_noreply_address:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ntp(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['primary_server'] ?? null;

            if ($value === null) {
                $properties['primary_server'] = null;
                goto after_primary_server;
            }

            $properties['primary_server'] = $value;

            after_primary_server:

            $value = $payload['secondary_server'] ?? null;

            if ($value === null) {
                $properties['secondary_server'] = null;
                goto after_secondary_server;
            }

            $properties['secondary_server'] = $value;

            after_secondary_server:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Snmp(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Syslog(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog
    {
        $properties = []; 
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
                $properties['protocol_name'] = null;
                goto after_protocol_name;
            }

            $properties['protocol_name'] = $value;

            after_protocol_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['enabled'] ?? null;

            if ($value === null) {
                $properties['enabled'] = null;
                goto after_enabled;
            }

            $properties['enabled'] = $value;

            after_enabled:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Collectd(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Mapping(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping
    {
        $properties = []; 
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

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Avatar($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Customer($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️License($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubSsl($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Profile($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Cas($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Saml($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubOauth($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Smtp($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ntp($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Snmp($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Syslog($object),
            'ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Collectd($object),
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Mapping($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings);
        $result = [];

        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $run_list = $object->run_list;

        if ($run_list === null) {
            goto after_run_list;
        }
        static $run_listSerializer0;

        if ($run_listSerializer0 === null) {
            $run_listSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $run_list = $run_listSerializer0->serialize($run_list, $this);
        after_run_list:        $result['run_list'] = $run_list;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise);
        $result = [];

        $private_mode = $object->private_mode;

        if ($private_mode === null) {
            goto after_private_mode;
        }
        after_private_mode:        $result['private_mode'] = $private_mode;

        
        $public_pages = $object->public_pages;

        if ($public_pages === null) {
            goto after_public_pages;
        }
        after_public_pages:        $result['public_pages'] = $public_pages;

        
        $subdomain_isolation = $object->subdomain_isolation;

        if ($subdomain_isolation === null) {
            goto after_subdomain_isolation;
        }
        after_subdomain_isolation:        $result['subdomain_isolation'] = $subdomain_isolation;

        
        $signup_enabled = $object->signup_enabled;

        if ($signup_enabled === null) {
            goto after_signup_enabled;
        }
        after_signup_enabled:        $result['signup_enabled'] = $signup_enabled;

        
        $github_hostname = $object->github_hostname;

        if ($github_hostname === null) {
            goto after_github_hostname;
        }
        after_github_hostname:        $result['github_hostname'] = $github_hostname;

        
        $identicons_host = $object->identicons_host;

        if ($identicons_host === null) {
            goto after_identicons_host;
        }
        after_identicons_host:        $result['identicons_host'] = $identicons_host;

        
        $http_proxy = $object->http_proxy;

        if ($http_proxy === null) {
            goto after_http_proxy;
        }
        after_http_proxy:        $result['http_proxy'] = $http_proxy;

        
        $auth_mode = $object->auth_mode;

        if ($auth_mode === null) {
            goto after_auth_mode;
        }
        after_auth_mode:        $result['auth_mode'] = $auth_mode;

        
        $expire_sessions = $object->expire_sessions;

        if ($expire_sessions === null) {
            goto after_expire_sessions;
        }
        after_expire_sessions:        $result['expire_sessions'] = $expire_sessions;

        
        $admin_password = $object->admin_password;

        if ($admin_password === null) {
            goto after_admin_password;
        }
        after_admin_password:        $result['admin_password'] = $admin_password;

        
        $configuration_id = $object->configuration_id;

        if ($configuration_id === null) {
            goto after_configuration_id;
        }
        after_configuration_id:        $result['configuration_id'] = $configuration_id;

        
        $configuration_run_count = $object->configuration_run_count;

        if ($configuration_run_count === null) {
            goto after_configuration_run_count;
        }
        after_configuration_run_count:        $result['configuration_run_count'] = $configuration_run_count;

        
        $avatar = $object->avatar;

        if ($avatar === null) {
            goto after_avatar;
        }
        $avatar = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Avatar($avatar);
        after_avatar:        $result['avatar'] = $avatar;

        
        $customer = $object->customer;

        if ($customer === null) {
            goto after_customer;
        }
        $customer = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Customer($customer);
        after_customer:        $result['customer'] = $customer;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        $license = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️License($license);
        after_license:        $result['license'] = $license;

        
        $github_ssl = $object->github_ssl;

        if ($github_ssl === null) {
            goto after_github_ssl;
        }
        $github_ssl = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubSsl($github_ssl);
        after_github_ssl:        $result['github_ssl'] = $github_ssl;

        
        $ldap = $object->ldap;

        if ($ldap === null) {
            goto after_ldap;
        }
        $ldap = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap($ldap);
        after_ldap:        $result['ldap'] = $ldap;

        
        $cas = $object->cas;

        if ($cas === null) {
            goto after_cas;
        }
        $cas = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Cas($cas);
        after_cas:        $result['cas'] = $cas;

        
        $saml = $object->saml;

        if ($saml === null) {
            goto after_saml;
        }
        $saml = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Saml($saml);
        after_saml:        $result['saml'] = $saml;

        
        $github_oauth = $object->github_oauth;

        if ($github_oauth === null) {
            goto after_github_oauth;
        }
        $github_oauth = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubOauth($github_oauth);
        after_github_oauth:        $result['github_oauth'] = $github_oauth;

        
        $smtp = $object->smtp;

        if ($smtp === null) {
            goto after_smtp;
        }
        $smtp = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Smtp($smtp);
        after_smtp:        $result['smtp'] = $smtp;

        
        $ntp = $object->ntp;

        if ($ntp === null) {
            goto after_ntp;
        }
        $ntp = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ntp($ntp);
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
        $snmp = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Snmp($snmp);
        after_snmp:        $result['snmp'] = $snmp;

        
        $syslog = $object->syslog;

        if ($syslog === null) {
            goto after_syslog;
        }
        $syslog = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Syslog($syslog);
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
        $pages = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory($pages);
        after_pages:        $result['pages'] = $pages;

        
        $collectd = $object->collectd;

        if ($collectd === null) {
            goto after_collectd;
        }
        $collectd = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Collectd($collectd);
        after_collectd:        $result['collectd'] = $collectd;

        
        $mapping = $object->mapping;

        if ($mapping === null) {
            goto after_mapping;
        }
        $mapping = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Mapping($mapping);
        after_mapping:        $result['mapping'] = $mapping;

        
        $load_balancer = $object->load_balancer;

        if ($load_balancer === null) {
            goto after_load_balancer;
        }
        after_load_balancer:        $result['load_balancer'] = $load_balancer;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Avatar(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Avatar);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Customer(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Customer);
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

        
        $secret_key_data = $object->secret_key_data;

        if ($secret_key_data === null) {
            goto after_secret_key_data;
        }
        after_secret_key_data:        $result['secret_key_data'] = $secret_key_data;

        
        $public_key_data = $object->public_key_data;

        if ($public_key_data === null) {
            goto after_public_key_data;
        }
        after_public_key_data:        $result['public_key_data'] = $public_key_data;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️License(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\License);
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

        
        $unlimited_seating = $object->unlimited_seating;

        if ($unlimited_seating === null) {
            goto after_unlimited_seating;
        }
        after_unlimited_seating:        $result['unlimited_seating'] = $unlimited_seating;

        
        $support_key = $object->support_key;

        if ($support_key === null) {
            goto after_support_key;
        }
        after_support_key:        $result['support_key'] = $support_key;

        
        $ssh_allowed = $object->ssh_allowed;

        if ($ssh_allowed === null) {
            goto after_ssh_allowed;
        }
        after_ssh_allowed:        $result['ssh_allowed'] = $ssh_allowed;

        
        $cluster_support = $object->cluster_support;

        if ($cluster_support === null) {
            goto after_cluster_support;
        }
        after_cluster_support:        $result['cluster_support'] = $cluster_support;

        
        $expire_at = $object->expire_at;

        if ($expire_at === null) {
            goto after_expire_at;
        }
        after_expire_at:        $result['expire_at'] = $expire_at;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubSsl(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubSsl);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap);
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
            $baseSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $base = $baseSerializer0->serialize($base, $this);
        after_base:        $result['base'] = $base;

        
        $uid = $object->uid;

        if ($uid === null) {
            goto after_uid;
        }
        after_uid:        $result['uid'] = $uid;

        
        $bind_dn = $object->bind_dn;

        if ($bind_dn === null) {
            goto after_bind_dn;
        }
        after_bind_dn:        $result['bind_dn'] = $bind_dn;

        
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

        
        $search_strategy = $object->search_strategy;

        if ($search_strategy === null) {
            goto after_search_strategy;
        }
        after_search_strategy:        $result['search_strategy'] = $search_strategy;

        
        $user_groups = $object->user_groups;

        if ($user_groups === null) {
            goto after_user_groups;
        }
        static $user_groupsSerializer0;

        if ($user_groupsSerializer0 === null) {
            $user_groupsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $user_groups = $user_groupsSerializer0->serialize($user_groups, $this);
        after_user_groups:        $result['user_groups'] = $user_groups;

        
        $admin_group = $object->admin_group;

        if ($admin_group === null) {
            goto after_admin_group;
        }
        after_admin_group:        $result['admin_group'] = $admin_group;

        
        $virtual_attribute_enabled = $object->virtual_attribute_enabled;

        if ($virtual_attribute_enabled === null) {
            goto after_virtual_attribute_enabled;
        }
        after_virtual_attribute_enabled:        $result['virtual_attribute_enabled'] = $virtual_attribute_enabled;

        
        $recursive_group_search = $object->recursive_group_search;

        if ($recursive_group_search === null) {
            goto after_recursive_group_search;
        }
        after_recursive_group_search:        $result['recursive_group_search'] = $recursive_group_search;

        
        $posix_support = $object->posix_support;

        if ($posix_support === null) {
            goto after_posix_support;
        }
        after_posix_support:        $result['posix_support'] = $posix_support;

        
        $user_sync_emails = $object->user_sync_emails;

        if ($user_sync_emails === null) {
            goto after_user_sync_emails;
        }
        after_user_sync_emails:        $result['user_sync_emails'] = $user_sync_emails;

        
        $user_sync_keys = $object->user_sync_keys;

        if ($user_sync_keys === null) {
            goto after_user_sync_keys;
        }
        after_user_sync_keys:        $result['user_sync_keys'] = $user_sync_keys;

        
        $user_sync_interval = $object->user_sync_interval;

        if ($user_sync_interval === null) {
            goto after_user_sync_interval;
        }
        after_user_sync_interval:        $result['user_sync_interval'] = $user_sync_interval;

        
        $team_sync_interval = $object->team_sync_interval;

        if ($team_sync_interval === null) {
            goto after_team_sync_interval;
        }
        after_team_sync_interval:        $result['team_sync_interval'] = $team_sync_interval;

        
        $sync_enabled = $object->sync_enabled;

        if ($sync_enabled === null) {
            goto after_sync_enabled;
        }
        after_sync_enabled:        $result['sync_enabled'] = $sync_enabled;

        
        $reconciliation = $object->reconciliation;

        if ($reconciliation === null) {
            goto after_reconciliation;
        }
        $reconciliation = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation($reconciliation);
        after_reconciliation:        $result['reconciliation'] = $reconciliation;

        
        $profile = $object->profile;

        if ($profile === null) {
            goto after_profile;
        }
        $profile = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Profile($profile);
        after_profile:        $result['profile'] = $profile;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Profile(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Cas(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas);
        $result = [];

        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Saml(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Saml);
        $result = [];

        $sso_url = $object->sso_url;

        if ($sso_url === null) {
            goto after_sso_url;
        }
        after_sso_url:        $result['sso_url'] = $sso_url;

        
        $certificate = $object->certificate;

        if ($certificate === null) {
            goto after_certificate;
        }
        after_certificate:        $result['certificate'] = $certificate;

        
        $certificate_path = $object->certificate_path;

        if ($certificate_path === null) {
            goto after_certificate_path;
        }
        after_certificate_path:        $result['certificate_path'] = $certificate_path;

        
        $issuer = $object->issuer;

        if ($issuer === null) {
            goto after_issuer;
        }
        after_issuer:        $result['issuer'] = $issuer;

        
        $idp_initiated_sso = $object->idp_initiated_sso;

        if ($idp_initiated_sso === null) {
            goto after_idp_initiated_sso;
        }
        after_idp_initiated_sso:        $result['idp_initiated_sso'] = $idp_initiated_sso;

        
        $disable_admin_demote = $object->disable_admin_demote;

        if ($disable_admin_demote === null) {
            goto after_disable_admin_demote;
        }
        after_disable_admin_demote:        $result['disable_admin_demote'] = $disable_admin_demote;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️GithubOauth(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\GithubOauth);
        $result = [];

        $client_id = $object->client_id;

        if ($client_id === null) {
            goto after_client_id;
        }
        after_client_id:        $result['client_id'] = $client_id;

        
        $client_secret = $object->client_secret;

        if ($client_secret === null) {
            goto after_client_secret;
        }
        after_client_secret:        $result['client_secret'] = $client_secret;

        
        $organization_name = $object->organization_name;

        if ($organization_name === null) {
            goto after_organization_name;
        }
        after_organization_name:        $result['organization_name'] = $organization_name;

        
        $organization_team = $object->organization_team;

        if ($organization_team === null) {
            goto after_organization_team;
        }
        after_organization_team:        $result['organization_team'] = $organization_team;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Smtp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Smtp);
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

        
        $user_name = $object->user_name;

        if ($user_name === null) {
            goto after_user_name;
        }
        after_user_name:        $result['user_name'] = $user_name;

        
        $enable_starttls_auto = $object->enable_starttls_auto;

        if ($enable_starttls_auto === null) {
            goto after_enable_starttls_auto;
        }
        after_enable_starttls_auto:        $result['enable_starttls_auto'] = $enable_starttls_auto;

        
        $password = $object->password;

        if ($password === null) {
            goto after_password;
        }
        after_password:        $result['password'] = $password;

        
        $discard_MINUS_to_MINUS_noreply_MINUS_address = $object->discard_MINUS_to_MINUS_noreply_MINUS_address;

        if ($discard_MINUS_to_MINUS_noreply_MINUS_address === null) {
            goto after_discard_MINUS_to_MINUS_noreply_MINUS_address;
        }
        after_discard_MINUS_to_MINUS_noreply_MINUS_address:        $result['discard__m_i_n_u_s_to__m_i_n_u_s_noreply__m_i_n_u_s_address'] = $discard_MINUS_to_MINUS_noreply_MINUS_address;

        
        $support_address = $object->support_address;

        if ($support_address === null) {
            goto after_support_address;
        }
        after_support_address:        $result['support_address'] = $support_address;

        
        $support_address_type = $object->support_address_type;

        if ($support_address_type === null) {
            goto after_support_address_type;
        }
        after_support_address_type:        $result['support_address_type'] = $support_address_type;

        
        $noreply_address = $object->noreply_address;

        if ($noreply_address === null) {
            goto after_noreply_address;
        }
        after_noreply_address:        $result['noreply_address'] = $noreply_address;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ntp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ntp);
        $result = [];

        $primary_server = $object->primary_server;

        if ($primary_server === null) {
            goto after_primary_server;
        }
        after_primary_server:        $result['primary_server'] = $primary_server;

        
        $secondary_server = $object->secondary_server;

        if ($secondary_server === null) {
            goto after_secondary_server;
        }
        after_secondary_server:        $result['secondary_server'] = $secondary_server;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Snmp(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Snmp);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Syslog(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Syslog);
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

        
        $protocol_name = $object->protocol_name;

        if ($protocol_name === null) {
            goto after_protocol_name;
        }
        after_protocol_name:        $result['protocol_name'] = $protocol_name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️BranchProtection⚡️RequiredLinearHistory(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\BranchProtection\RequiredLinearHistory);
        $result = [];

        $enabled = $object->enabled;

        if ($enabled === null) {
            goto after_enabled;
        }
        after_enabled:        $result['enabled'] = $enabled;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Collectd(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Collectd);
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Mapping(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Mapping);
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
