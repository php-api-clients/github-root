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
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Profile' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Profile($payload),
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
                    $missingFields[] = 'enterprise';
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
                    $missingFields[] = 'run_list';
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
                    $missingFields[] = 'private_mode';
                    goto after_private_mode;
                }

                $properties['private_mode'] = $value;
    
                after_private_mode:

                $value = $payload['public_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public_pages';
                    goto after_public_pages;
                }

                $properties['public_pages'] = $value;
    
                after_public_pages:

                $value = $payload['subdomain_isolation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subdomain_isolation';
                    goto after_subdomain_isolation;
                }

                $properties['subdomain_isolation'] = $value;
    
                after_subdomain_isolation:

                $value = $payload['signup_enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'signup_enabled';
                    goto after_signup_enabled;
                }

                $properties['signup_enabled'] = $value;
    
                after_signup_enabled:

                $value = $payload['github_hostname'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'github_hostname';
                    goto after_github_hostname;
                }

                $properties['github_hostname'] = $value;
    
                after_github_hostname:

                $value = $payload['identicons_host'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'identicons_host';
                    goto after_identicons_host;
                }

                $properties['identicons_host'] = $value;
    
                after_identicons_host:

                $value = $payload['http_proxy'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'http_proxy';
                    goto after_http_proxy;
                }

                $properties['http_proxy'] = $value;
    
                after_http_proxy:

                $value = $payload['auth_mode'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'auth_mode';
                    goto after_auth_mode;
                }

                $properties['auth_mode'] = $value;
    
                after_auth_mode:

                $value = $payload['expire_sessions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'expire_sessions';
                    goto after_expire_sessions;
                }

                $properties['expire_sessions'] = $value;
    
                after_expire_sessions:

                $value = $payload['admin_password'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'admin_password';
                    goto after_admin_password;
                }

                $properties['admin_password'] = $value;
    
                after_admin_password:

                $value = $payload['configuration_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'configuration_id';
                    goto after_configuration_id;
                }

                $properties['configuration_id'] = $value;
    
                after_configuration_id:

                $value = $payload['configuration_run_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'configuration_run_count';
                    goto after_configuration_run_count;
                }

                $properties['configuration_run_count'] = $value;
    
                after_configuration_run_count:

                $value = $payload['avatar'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'avatar';
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
                    $missingFields[] = 'customer';
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
                    $missingFields[] = 'license';
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
                    $missingFields[] = 'github_ssl';
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
                    $missingFields[] = 'ldap';
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
                    $missingFields[] = 'cas';
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
                    $missingFields[] = 'saml';
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
                    $missingFields[] = 'github_oauth';
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
                    $missingFields[] = 'smtp';
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
                    $missingFields[] = 'ntp';
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
                    $missingFields[] = 'timezone';
                    goto after_timezone;
                }

                $properties['timezone'] = $value;
    
                after_timezone:

                $value = $payload['snmp'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'snmp';
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
                    $missingFields[] = 'syslog';
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
                    $missingFields[] = 'assets';
                    goto after_assets;
                }

                $properties['assets'] = $value;
    
                after_assets:

                $value = $payload['pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pages';
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
                    $missingFields[] = 'collectd';
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
                    $missingFields[] = 'mapping';
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
                    $missingFields[] = 'load_balancer';
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
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['uri'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'uri';
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
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'email';
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['uuid'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'uuid';
                    goto after_uuid;
                }

                $properties['uuid'] = $value;
    
                after_uuid:

                $value = $payload['secret_key_data'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'secret_key_data';
                    goto after_secret_key_data;
                }

                $properties['secret_key_data'] = $value;
    
                after_secret_key_data:

                $value = $payload['public_key_data'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public_key_data';
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
                    $missingFields[] = 'seats';
                    goto after_seats;
                }

                $properties['seats'] = $value;
    
                after_seats:

                $value = $payload['evaluation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'evaluation';
                    goto after_evaluation;
                }

                $properties['evaluation'] = $value;
    
                after_evaluation:

                $value = $payload['perpetual'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'perpetual';
                    goto after_perpetual;
                }

                $properties['perpetual'] = $value;
    
                after_perpetual:

                $value = $payload['unlimited_seating'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'unlimited_seating';
                    goto after_unlimited_seating;
                }

                $properties['unlimited_seating'] = $value;
    
                after_unlimited_seating:

                $value = $payload['support_key'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'support_key';
                    goto after_support_key;
                }

                $properties['support_key'] = $value;
    
                after_support_key:

                $value = $payload['ssh_allowed'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'ssh_allowed';
                    goto after_ssh_allowed;
                }

                $properties['ssh_allowed'] = $value;
    
                after_ssh_allowed:

                $value = $payload['cluster_support'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'cluster_support';
                    goto after_cluster_support;
                }

                $properties['cluster_support'] = $value;
    
                after_cluster_support:

                $value = $payload['expire_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'expire_at';
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
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['cert'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'cert';
                    goto after_cert;
                }

                $properties['cert'] = $value;
    
                after_cert:

                $value = $payload['key'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'key';
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
                    $missingFields[] = 'host';
                    goto after_host;
                }

                $properties['host'] = $value;
    
                after_host:

                $value = $payload['port'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'port';
                    goto after_port;
                }

                $properties['port'] = $value;
    
                after_port:

                $value = $payload['base'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'base';
                    goto after_base;
                }

                $properties['base'] = $value;
    
                after_base:

                $value = $payload['uid'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'uid';
                    goto after_uid;
                }

                $properties['uid'] = $value;
    
                after_uid:

                $value = $payload['bind_dn'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'bind_dn';
                    goto after_bind_dn;
                }

                $properties['bind_dn'] = $value;
    
                after_bind_dn:

                $value = $payload['password'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'password';
                    goto after_password;
                }

                $properties['password'] = $value;
    
                after_password:

                $value = $payload['method'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'method';
                    goto after_method;
                }

                $properties['method'] = $value;
    
                after_method:

                $value = $payload['search_strategy'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'search_strategy';
                    goto after_search_strategy;
                }

                $properties['search_strategy'] = $value;
    
                after_search_strategy:

                $value = $payload['user_groups'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_groups';
                    goto after_user_groups;
                }

                $properties['user_groups'] = $value;
    
                after_user_groups:

                $value = $payload['admin_group'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'admin_group';
                    goto after_admin_group;
                }

                $properties['admin_group'] = $value;
    
                after_admin_group:

                $value = $payload['virtual_attribute_enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'virtual_attribute_enabled';
                    goto after_virtual_attribute_enabled;
                }

                $properties['virtual_attribute_enabled'] = $value;
    
                after_virtual_attribute_enabled:

                $value = $payload['recursive_group_search'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'recursive_group_search';
                    goto after_recursive_group_search;
                }

                $properties['recursive_group_search'] = $value;
    
                after_recursive_group_search:

                $value = $payload['posix_support'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'posix_support';
                    goto after_posix_support;
                }

                $properties['posix_support'] = $value;
    
                after_posix_support:

                $value = $payload['user_sync_emails'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_sync_emails';
                    goto after_user_sync_emails;
                }

                $properties['user_sync_emails'] = $value;
    
                after_user_sync_emails:

                $value = $payload['user_sync_keys'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_sync_keys';
                    goto after_user_sync_keys;
                }

                $properties['user_sync_keys'] = $value;
    
                after_user_sync_keys:

                $value = $payload['user_sync_interval'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_sync_interval';
                    goto after_user_sync_interval;
                }

                $properties['user_sync_interval'] = $value;
    
                after_user_sync_interval:

                $value = $payload['team_sync_interval'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'team_sync_interval';
                    goto after_team_sync_interval;
                }

                $properties['team_sync_interval'] = $value;
    
                after_team_sync_interval:

                $value = $payload['sync_enabled'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'sync_enabled';
                    goto after_sync_enabled;
                }

                $properties['sync_enabled'] = $value;
    
                after_sync_enabled:

                $value = $payload['reconciliation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'reconciliation';
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
                    $missingFields[] = 'profile';
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

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Cas(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Cas
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
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
                    $missingFields[] = 'sso_url';
                    goto after_sso_url;
                }

                $properties['sso_url'] = $value;
    
                after_sso_url:

                $value = $payload['certificate'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'certificate';
                    goto after_certificate;
                }

                $properties['certificate'] = $value;
    
                after_certificate:

                $value = $payload['certificate_path'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'certificate_path';
                    goto after_certificate_path;
                }

                $properties['certificate_path'] = $value;
    
                after_certificate_path:

                $value = $payload['issuer'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issuer';
                    goto after_issuer;
                }

                $properties['issuer'] = $value;
    
                after_issuer:

                $value = $payload['idp_initiated_sso'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'idp_initiated_sso';
                    goto after_idp_initiated_sso;
                }

                $properties['idp_initiated_sso'] = $value;
    
                after_idp_initiated_sso:

                $value = $payload['disable_admin_demote'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'disable_admin_demote';
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
                    $missingFields[] = 'client_id';
                    goto after_client_id;
                }

                $properties['client_id'] = $value;
    
                after_client_id:

                $value = $payload['client_secret'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'client_secret';
                    goto after_client_secret;
                }

                $properties['client_secret'] = $value;
    
                after_client_secret:

                $value = $payload['organization_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_name';
                    goto after_organization_name;
                }

                $properties['organization_name'] = $value;
    
                after_organization_name:

                $value = $payload['organization_team'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_team';
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
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['address'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'address';
                    goto after_address;
                }

                $properties['address'] = $value;
    
                after_address:

                $value = $payload['authentication'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'authentication';
                    goto after_authentication;
                }

                $properties['authentication'] = $value;
    
                after_authentication:

                $value = $payload['port'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'port';
                    goto after_port;
                }

                $properties['port'] = $value;
    
                after_port:

                $value = $payload['domain'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'domain';
                    goto after_domain;
                }

                $properties['domain'] = $value;
    
                after_domain:

                $value = $payload['username'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'username';
                    goto after_username;
                }

                $properties['username'] = $value;
    
                after_username:

                $value = $payload['user_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user_name';
                    goto after_user_name;
                }

                $properties['user_name'] = $value;
    
                after_user_name:

                $value = $payload['enable_starttls_auto'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'enable_starttls_auto';
                    goto after_enable_starttls_auto;
                }

                $properties['enable_starttls_auto'] = $value;
    
                after_enable_starttls_auto:

                $value = $payload['password'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'password';
                    goto after_password;
                }

                $properties['password'] = $value;
    
                after_password:

                $value = $payload['discard__m_i_n_u_s_to__m_i_n_u_s_noreply__m_i_n_u_s_address'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'discard__m_i_n_u_s_to__m_i_n_u_s_noreply__m_i_n_u_s_address';
                    goto after_discard_MINUS_to_MINUS_noreply_MINUS_address;
                }

                $properties['discard_MINUS_to_MINUS_noreply_MINUS_address'] = $value;
    
                after_discard_MINUS_to_MINUS_noreply_MINUS_address:

                $value = $payload['support_address'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'support_address';
                    goto after_support_address;
                }

                $properties['support_address'] = $value;
    
                after_support_address:

                $value = $payload['support_address_type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'support_address_type';
                    goto after_support_address_type;
                }

                $properties['support_address_type'] = $value;
    
                after_support_address_type:

                $value = $payload['noreply_address'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'noreply_address';
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
                    $missingFields[] = 'primary_server';
                    goto after_primary_server;
                }

                $properties['primary_server'] = $value;
    
                after_primary_server:

                $value = $payload['secondary_server'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'secondary_server';
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
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['community'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'community';
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
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['server'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'server';
                    goto after_server;
                }

                $properties['server'] = $value;
    
                after_server:

                $value = $payload['protocol_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'protocol_name';
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
                    $missingFields[] = 'enabled';
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
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['server'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'server';
                    goto after_server;
                }

                $properties['server'] = $value;
    
                after_server:

                $value = $payload['port'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'port';
                    goto after_port;
                }

                $properties['port'] = $value;
    
                after_port:

                $value = $payload['encryption'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'encryption';
                    goto after_encryption;
                }

                $properties['encryption'] = $value;
    
                after_encryption:

                $value = $payload['username'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'username';
                    goto after_username;
                }

                $properties['username'] = $value;
    
                after_username:

                $value = $payload['password'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'password';
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
                    $missingFields[] = 'enabled';
                    goto after_enabled;
                }

                $properties['enabled'] = $value;
    
                after_enabled:

                $value = $payload['tileserver'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'tileserver';
                    goto after_tileserver;
                }

                $properties['tileserver'] = $value;
    
                after_tileserver:

                $value = $payload['basemap'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'basemap';
                    goto after_basemap;
                }

                $properties['basemap'] = $value;
    
                after_basemap:

                $value = $payload['token'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'token';
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

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings⚡️Enterprise⚡️Ldap⚡️Reconciliation(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings\Enterprise\Ldap\Reconciliation
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user';
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['org'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'org';
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
                    $missingFields[] = 'uid';
                    goto after_uid;
                }

                $properties['uid'] = $value;
    
                after_uid:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['mail'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'mail';
                    goto after_mail;
                }

                $properties['mail'] = $value;
    
                after_mail:

                $value = $payload['key'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'key';
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
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseSettings($object),
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
