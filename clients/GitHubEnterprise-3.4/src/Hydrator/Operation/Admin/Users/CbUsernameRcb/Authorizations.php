<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Admin\Users\CbUsernameRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Authorizations implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\Authorization' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\Authorization\App' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization⚡️App($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\ScopedInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScopedInstallation($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\AppPermissions' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AppPermissions($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Authorization
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'id';
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['scopes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'scopes';
                    goto after_scopes;
                }

                $properties['scopes'] = $value;
    
                after_scopes:

                $value = $payload['token'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'token';
                    goto after_token;
                }

                $properties['token'] = $value;
    
                after_token:

                $value = $payload['token_last_eight'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'token_last_eight';
                    goto after_token_last_eight;
                }

                $properties['token_last_eight'] = $value;
    
                after_token_last_eight:

                $value = $payload['hashed_token'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'hashed_token';
                    goto after_hashed_token;
                }

                $properties['hashed_token'] = $value;
    
                after_hashed_token:

                $value = $payload['app'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'app';
                    goto after_app;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'app';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization⚡️App($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['app'] = $value;
    
                after_app:

                $value = $payload['note'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'note';
                    goto after_note;
                }

                $properties['note'] = $value;
    
                after_note:

                $value = $payload['note_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'note_url';
                    goto after_note_url;
                }

                $properties['note_url'] = $value;
    
                after_note_url:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'updated_at';
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'created_at';
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['fingerprint'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fingerprint';
                    goto after_fingerprint;
                }

                $properties['fingerprint'] = $value;
    
                after_fingerprint:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'user';
                    goto after_user;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'user';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['installation'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'installation';
                    goto after_installation;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'installation';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScopedInstallation($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['installation'] = $value;
    
                after_installation:

                $value = $payload['expires_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'expires_at';
                    goto after_expires_at;
                }

                $properties['expires_at'] = $value;
    
                after_expires_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Authorization', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Authorization::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\Authorization(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Authorization', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization⚡️App(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\Authorization\App
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

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'name';
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Authorization\App', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\Authorization\App::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\Authorization\App(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\Authorization\App', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\SimpleUser
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

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'login';
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

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
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'avatar_url';
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'gravatar_id';
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'html_url';
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['followers_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'followers_url';
                    goto after_followers_url;
                }

                $properties['followers_url'] = $value;
    
                after_followers_url:

                $value = $payload['following_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'following_url';
                    goto after_following_url;
                }

                $properties['following_url'] = $value;
    
                after_following_url:

                $value = $payload['gists_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'gists_url';
                    goto after_gists_url;
                }

                $properties['gists_url'] = $value;
    
                after_gists_url:

                $value = $payload['starred_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_url';
                    goto after_starred_url;
                }

                $properties['starred_url'] = $value;
    
                after_starred_url:

                $value = $payload['subscriptions_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'subscriptions_url';
                    goto after_subscriptions_url;
                }

                $properties['subscriptions_url'] = $value;
    
                after_subscriptions_url:

                $value = $payload['organizations_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organizations_url';
                    goto after_organizations_url;
                }

                $properties['organizations_url'] = $value;
    
                after_organizations_url:

                $value = $payload['repos_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repos_url';
                    goto after_repos_url;
                }

                $properties['repos_url'] = $value;
    
                after_repos_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'events_url';
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['received_events_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'received_events_url';
                    goto after_received_events_url;
                }

                $properties['received_events_url'] = $value;
    
                after_received_events_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'type';
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['site_admin'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'site_admin';
                    goto after_site_admin;
                }

                $properties['site_admin'] = $value;
    
                after_site_admin:

                $value = $payload['starred_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_at';
                    goto after_starred_at;
                }

                $properties['starred_at'] = $value;
    
                after_starred_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\SimpleUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScopedInstallation(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\ScopedInstallation
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['permissions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'permissions';
                    goto after_permissions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'permissions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AppPermissions($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['permissions'] = $value;
    
                after_permissions:

                $value = $payload['repository_selection'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_selection';
                    goto after_repository_selection;
                }

                $properties['repository_selection'] = $value;
    
                after_repository_selection:

                $value = $payload['single_file_name'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file_name';
                    goto after_single_file_name;
                }

                $properties['single_file_name'] = $value;
    
                after_single_file_name:

                $value = $payload['has_multiple_single_files'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_multiple_single_files';
                    goto after_has_multiple_single_files;
                }

                $properties['has_multiple_single_files'] = $value;
    
                after_has_multiple_single_files:

                $value = $payload['single_file_paths'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file_paths';
                    goto after_single_file_paths;
                }

                $properties['single_file_paths'] = $value;
    
                after_single_file_paths:

                $value = $payload['repositories_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repositories_url';
                    goto after_repositories_url;
                }

                $properties['repositories_url'] = $value;
    
                after_repositories_url:

                $value = $payload['account'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'account';
                    goto after_account;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'account';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['account'] = $value;
    
                after_account:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScopedInstallation', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\ScopedInstallation::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\ScopedInstallation(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\ScopedInstallation', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️AppPermissions(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\AppPermissions
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['actions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'actions';
                    goto after_actions;
                }

                $properties['actions'] = $value;
    
                after_actions:

                $value = $payload['administration'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'administration';
                    goto after_administration;
                }

                $properties['administration'] = $value;
    
                after_administration:

                $value = $payload['checks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'checks';
                    goto after_checks;
                }

                $properties['checks'] = $value;
    
                after_checks:

                $value = $payload['contents'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'contents';
                    goto after_contents;
                }

                $properties['contents'] = $value;
    
                after_contents:

                $value = $payload['deployments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'deployments';
                    goto after_deployments;
                }

                $properties['deployments'] = $value;
    
                after_deployments:

                $value = $payload['environments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'environments';
                    goto after_environments;
                }

                $properties['environments'] = $value;
    
                after_environments:

                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issues';
                    goto after_issues;
                }

                $properties['issues'] = $value;
    
                after_issues:

                $value = $payload['metadata'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'metadata';
                    goto after_metadata;
                }

                $properties['metadata'] = $value;
    
                after_metadata:

                $value = $payload['packages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'packages';
                    goto after_packages;
                }

                $properties['packages'] = $value;
    
                after_packages:

                $value = $payload['pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pages';
                    goto after_pages;
                }

                $properties['pages'] = $value;
    
                after_pages:

                $value = $payload['pull_requests'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pull_requests';
                    goto after_pull_requests;
                }

                $properties['pull_requests'] = $value;
    
                after_pull_requests:

                $value = $payload['repository_hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_hooks';
                    goto after_repository_hooks;
                }

                $properties['repository_hooks'] = $value;
    
                after_repository_hooks:

                $value = $payload['repository_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_projects';
                    goto after_repository_projects;
                }

                $properties['repository_projects'] = $value;
    
                after_repository_projects:

                $value = $payload['secret_scanning_alerts'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'secret_scanning_alerts';
                    goto after_secret_scanning_alerts;
                }

                $properties['secret_scanning_alerts'] = $value;
    
                after_secret_scanning_alerts:

                $value = $payload['secrets'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'secrets';
                    goto after_secrets;
                }

                $properties['secrets'] = $value;
    
                after_secrets:

                $value = $payload['security_events'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'security_events';
                    goto after_security_events;
                }

                $properties['security_events'] = $value;
    
                after_security_events:

                $value = $payload['single_file'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'single_file';
                    goto after_single_file;
                }

                $properties['single_file'] = $value;
    
                after_single_file:

                $value = $payload['statuses'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'statuses';
                    goto after_statuses;
                }

                $properties['statuses'] = $value;
    
                after_statuses:

                $value = $payload['vulnerability_alerts'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'vulnerability_alerts';
                    goto after_vulnerability_alerts;
                }

                $properties['vulnerability_alerts'] = $value;
    
                after_vulnerability_alerts:

                $value = $payload['workflows'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'workflows';
                    goto after_workflows;
                }

                $properties['workflows'] = $value;
    
                after_workflows:

                $value = $payload['members'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'members';
                    goto after_members;
                }

                $properties['members'] = $value;
    
                after_members:

                $value = $payload['organization_administration'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_administration';
                    goto after_organization_administration;
                }

                $properties['organization_administration'] = $value;
    
                after_organization_administration:

                $value = $payload['organization_hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_hooks';
                    goto after_organization_hooks;
                }

                $properties['organization_hooks'] = $value;
    
                after_organization_hooks:

                $value = $payload['organization_plan'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_plan';
                    goto after_organization_plan;
                }

                $properties['organization_plan'] = $value;
    
                after_organization_plan:

                $value = $payload['organization_projects'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_projects';
                    goto after_organization_projects;
                }

                $properties['organization_projects'] = $value;
    
                after_organization_projects:

                $value = $payload['organization_packages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_packages';
                    goto after_organization_packages;
                }

                $properties['organization_packages'] = $value;
    
                after_organization_packages:

                $value = $payload['organization_secrets'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_secrets';
                    goto after_organization_secrets;
                }

                $properties['organization_secrets'] = $value;
    
                after_organization_secrets:

                $value = $payload['organization_self_hosted_runners'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_self_hosted_runners';
                    goto after_organization_self_hosted_runners;
                }

                $properties['organization_self_hosted_runners'] = $value;
    
                after_organization_self_hosted_runners:

                $value = $payload['organization_user_blocking'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_user_blocking';
                    goto after_organization_user_blocking;
                }

                $properties['organization_user_blocking'] = $value;
    
                after_organization_user_blocking:

                $value = $payload['team_discussions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'team_discussions';
                    goto after_team_discussions;
                }

                $properties['team_discussions'] = $value;
    
                after_team_discussions:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\AppPermissions::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\AppPermissions(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\AppPermissions', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\Authorization' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\Authorization);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $scopes = $object->scopes;

        if ($scopes === null) {
            goto after_scopes;
        }
        static $scopesSerializer0;

        if ($scopesSerializer0 === null) {
            $scopesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $scopes = $scopesSerializer0->serialize($scopes, $this);
        after_scopes:        $result['scopes'] = $scopes;

        
        $token = $object->token;

        if ($token === null) {
            goto after_token;
        }
        after_token:        $result['token'] = $token;

        
        $token_last_eight = $object->token_last_eight;

        if ($token_last_eight === null) {
            goto after_token_last_eight;
        }
        after_token_last_eight:        $result['token_last_eight'] = $token_last_eight;

        
        $hashed_token = $object->hashed_token;

        if ($hashed_token === null) {
            goto after_hashed_token;
        }
        after_hashed_token:        $result['hashed_token'] = $hashed_token;

        
        $app = $object->app;

        if ($app === null) {
            goto after_app;
        }
        $app = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️Authorization⚡️App($app);
        after_app:        $result['app'] = $app;

        
        $note = $object->note;

        if ($note === null) {
            goto after_note;
        }
        after_note:        $result['note'] = $note;

        
        $note_url = $object->note_url;

        if ($note_url === null) {
            goto after_note_url;
        }
        after_note_url:        $result['note_url'] = $note_url;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $fingerprint = $object->fingerprint;

        if ($fingerprint === null) {
            goto after_fingerprint;
        }
        after_fingerprint:        $result['fingerprint'] = $fingerprint;

        
        $user = $object->user;
        $user = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️SimpleUser($user);
        after_user:        $result['user'] = $user;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️ScopedInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $expires_at = $object->expires_at;

        if ($expires_at === null) {
            goto after_expires_at;
        }
        after_expires_at:        $result['expires_at'] = $expires_at;


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
