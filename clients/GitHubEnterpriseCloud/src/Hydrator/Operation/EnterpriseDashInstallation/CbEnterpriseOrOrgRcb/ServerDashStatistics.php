<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class ServerDashStatistics implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Comments($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Gists($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Hooks($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Issues($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Milestones($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Orgs($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pages($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pulls($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Repos($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Users($payload),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['server_id'] ?? null;
    
                if ($value === null) {
                    $properties['server_id'] = null;
                    goto after_server_id;
                }

                $properties['server_id'] = $value;
    
                after_server_id:

                $value = $payload['collection_date'] ?? null;
    
                if ($value === null) {
                    $properties['collection_date'] = null;
                    goto after_collection_date;
                }

                $properties['collection_date'] = $value;
    
                after_collection_date:

                $value = $payload['schema_version'] ?? null;
    
                if ($value === null) {
                    $properties['schema_version'] = null;
                    goto after_schema_version;
                }

                $properties['schema_version'] = $value;
    
                after_schema_version:

                $value = $payload['ghes_version'] ?? null;
    
                if ($value === null) {
                    $properties['ghes_version'] = null;
                    goto after_ghes_version;
                }

                $properties['ghes_version'] = $value;
    
                after_ghes_version:

                $value = $payload['host_name'] ?? null;
    
                if ($value === null) {
                    $properties['host_name'] = null;
                    goto after_host_name;
                }

                $properties['host_name'] = $value;
    
                after_host_name:

                $value = $payload['github_connect'] ?? null;
    
                if ($value === null) {
                    $properties['github_connect'] = null;
                    goto after_github_connect;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'github_connect';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['github_connect'] = $value;
    
                after_github_connect:

                $value = $payload['ghe_stats'] ?? null;
    
                if ($value === null) {
                    $properties['ghe_stats'] = null;
                    goto after_ghe_stats;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'ghe_stats';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['ghe_stats'] = $value;
    
                after_ghe_stats:

                $value = $payload['dormant_users'] ?? null;
    
                if ($value === null) {
                    $properties['dormant_users'] = null;
                    goto after_dormant_users;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'dormant_users';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['dormant_users'] = $value;
    
                after_dormant_users:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['features_enabled'] ?? null;
    
                if ($value === null) {
                    $properties['features_enabled'] = null;
                    goto after_features_enabled;
                }

                $properties['features_enabled'] = $value;
    
                after_features_enabled:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['comments'] ?? null;
    
                if ($value === null) {
                    $properties['comments'] = null;
                    goto after_comments;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'comments';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Comments($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['comments'] = $value;
    
                after_comments:

                $value = $payload['gists'] ?? null;
    
                if ($value === null) {
                    $properties['gists'] = null;
                    goto after_gists;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'gists';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Gists($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['gists'] = $value;
    
                after_gists:

                $value = $payload['hooks'] ?? null;
    
                if ($value === null) {
                    $properties['hooks'] = null;
                    goto after_hooks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'hooks';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Hooks($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['hooks'] = $value;
    
                after_hooks:

                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $properties['issues'] = null;
                    goto after_issues;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'issues';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Issues($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['issues'] = $value;
    
                after_issues:

                $value = $payload['milestones'] ?? null;
    
                if ($value === null) {
                    $properties['milestones'] = null;
                    goto after_milestones;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'milestones';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Milestones($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['milestones'] = $value;
    
                after_milestones:

                $value = $payload['orgs'] ?? null;
    
                if ($value === null) {
                    $properties['orgs'] = null;
                    goto after_orgs;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'orgs';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Orgs($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['orgs'] = $value;
    
                after_orgs:

                $value = $payload['pages'] ?? null;
    
                if ($value === null) {
                    $properties['pages'] = null;
                    goto after_pages;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pages';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pages($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pages'] = $value;
    
                after_pages:

                $value = $payload['pulls'] ?? null;
    
                if ($value === null) {
                    $properties['pulls'] = null;
                    goto after_pulls;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pulls';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pulls($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pulls'] = $value;
    
                after_pulls:

                $value = $payload['repos'] ?? null;
    
                if ($value === null) {
                    $properties['repos'] = null;
                    goto after_repos;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repos';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Repos($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repos'] = $value;
    
                after_repos:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'users';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Users($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['users'] = $value;
    
                after_users:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Comments(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_commit_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_commit_comments'] = null;
                    goto after_total_commit_comments;
                }

                $properties['total_commit_comments'] = $value;
    
                after_total_commit_comments:

                $value = $payload['total_gist_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_gist_comments'] = null;
                    goto after_total_gist_comments;
                }

                $properties['total_gist_comments'] = $value;
    
                after_total_gist_comments:

                $value = $payload['total_issue_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_issue_comments'] = null;
                    goto after_total_issue_comments;
                }

                $properties['total_issue_comments'] = $value;
    
                after_total_issue_comments:

                $value = $payload['total_pull_request_comments'] ?? null;
    
                if ($value === null) {
                    $properties['total_pull_request_comments'] = null;
                    goto after_total_pull_request_comments;
                }

                $properties['total_pull_request_comments'] = $value;
    
                after_total_pull_request_comments:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Gists(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_gists'] ?? null;
    
                if ($value === null) {
                    $properties['total_gists'] = null;
                    goto after_total_gists;
                }

                $properties['total_gists'] = $value;
    
                after_total_gists:

                $value = $payload['private_gists'] ?? null;
    
                if ($value === null) {
                    $properties['private_gists'] = null;
                    goto after_private_gists;
                }

                $properties['private_gists'] = $value;
    
                after_private_gists:

                $value = $payload['public_gists'] ?? null;
    
                if ($value === null) {
                    $properties['public_gists'] = null;
                    goto after_public_gists;
                }

                $properties['public_gists'] = $value;
    
                after_public_gists:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Hooks(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_hooks'] ?? null;
    
                if ($value === null) {
                    $properties['total_hooks'] = null;
                    goto after_total_hooks;
                }

                $properties['total_hooks'] = $value;
    
                after_total_hooks:

                $value = $payload['active_hooks'] ?? null;
    
                if ($value === null) {
                    $properties['active_hooks'] = null;
                    goto after_active_hooks;
                }

                $properties['active_hooks'] = $value;
    
                after_active_hooks:

                $value = $payload['inactive_hooks'] ?? null;
    
                if ($value === null) {
                    $properties['inactive_hooks'] = null;
                    goto after_inactive_hooks;
                }

                $properties['inactive_hooks'] = $value;
    
                after_inactive_hooks:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Issues(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_issues'] ?? null;
    
                if ($value === null) {
                    $properties['total_issues'] = null;
                    goto after_total_issues;
                }

                $properties['total_issues'] = $value;
    
                after_total_issues:

                $value = $payload['open_issues'] ?? null;
    
                if ($value === null) {
                    $properties['open_issues'] = null;
                    goto after_open_issues;
                }

                $properties['open_issues'] = $value;
    
                after_open_issues:

                $value = $payload['closed_issues'] ?? null;
    
                if ($value === null) {
                    $properties['closed_issues'] = null;
                    goto after_closed_issues;
                }

                $properties['closed_issues'] = $value;
    
                after_closed_issues:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Milestones(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_milestones'] ?? null;
    
                if ($value === null) {
                    $properties['total_milestones'] = null;
                    goto after_total_milestones;
                }

                $properties['total_milestones'] = $value;
    
                after_total_milestones:

                $value = $payload['open_milestones'] ?? null;
    
                if ($value === null) {
                    $properties['open_milestones'] = null;
                    goto after_open_milestones;
                }

                $properties['open_milestones'] = $value;
    
                after_open_milestones:

                $value = $payload['closed_milestones'] ?? null;
    
                if ($value === null) {
                    $properties['closed_milestones'] = null;
                    goto after_closed_milestones;
                }

                $properties['closed_milestones'] = $value;
    
                after_closed_milestones:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Orgs(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_orgs'] ?? null;
    
                if ($value === null) {
                    $properties['total_orgs'] = null;
                    goto after_total_orgs;
                }

                $properties['total_orgs'] = $value;
    
                after_total_orgs:

                $value = $payload['disabled_orgs'] ?? null;
    
                if ($value === null) {
                    $properties['disabled_orgs'] = null;
                    goto after_disabled_orgs;
                }

                $properties['disabled_orgs'] = $value;
    
                after_disabled_orgs:

                $value = $payload['total_teams'] ?? null;
    
                if ($value === null) {
                    $properties['total_teams'] = null;
                    goto after_total_teams;
                }

                $properties['total_teams'] = $value;
    
                after_total_teams:

                $value = $payload['total_team_members'] ?? null;
    
                if ($value === null) {
                    $properties['total_team_members'] = null;
                    goto after_total_team_members;
                }

                $properties['total_team_members'] = $value;
    
                after_total_team_members:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pages(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_pages'] ?? null;
    
                if ($value === null) {
                    $properties['total_pages'] = null;
                    goto after_total_pages;
                }

                $properties['total_pages'] = $value;
    
                after_total_pages:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pulls(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_pulls'] ?? null;
    
                if ($value === null) {
                    $properties['total_pulls'] = null;
                    goto after_total_pulls;
                }

                $properties['total_pulls'] = $value;
    
                after_total_pulls:

                $value = $payload['merged_pulls'] ?? null;
    
                if ($value === null) {
                    $properties['merged_pulls'] = null;
                    goto after_merged_pulls;
                }

                $properties['merged_pulls'] = $value;
    
                after_merged_pulls:

                $value = $payload['mergeable_pulls'] ?? null;
    
                if ($value === null) {
                    $properties['mergeable_pulls'] = null;
                    goto after_mergeable_pulls;
                }

                $properties['mergeable_pulls'] = $value;
    
                after_mergeable_pulls:

                $value = $payload['unmergeable_pulls'] ?? null;
    
                if ($value === null) {
                    $properties['unmergeable_pulls'] = null;
                    goto after_unmergeable_pulls;
                }

                $properties['unmergeable_pulls'] = $value;
    
                after_unmergeable_pulls:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Repos(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_repos'] ?? null;
    
                if ($value === null) {
                    $properties['total_repos'] = null;
                    goto after_total_repos;
                }

                $properties['total_repos'] = $value;
    
                after_total_repos:

                $value = $payload['root_repos'] ?? null;
    
                if ($value === null) {
                    $properties['root_repos'] = null;
                    goto after_root_repos;
                }

                $properties['root_repos'] = $value;
    
                after_root_repos:

                $value = $payload['fork_repos'] ?? null;
    
                if ($value === null) {
                    $properties['fork_repos'] = null;
                    goto after_fork_repos;
                }

                $properties['fork_repos'] = $value;
    
                after_fork_repos:

                $value = $payload['org_repos'] ?? null;
    
                if ($value === null) {
                    $properties['org_repos'] = null;
                    goto after_org_repos;
                }

                $properties['org_repos'] = $value;
    
                after_org_repos:

                $value = $payload['total_pushes'] ?? null;
    
                if ($value === null) {
                    $properties['total_pushes'] = null;
                    goto after_total_pushes;
                }

                $properties['total_pushes'] = $value;
    
                after_total_pushes:

                $value = $payload['total_wikis'] ?? null;
    
                if ($value === null) {
                    $properties['total_wikis'] = null;
                    goto after_total_wikis;
                }

                $properties['total_wikis'] = $value;
    
                after_total_wikis:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Users(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_users'] ?? null;
    
                if ($value === null) {
                    $properties['total_users'] = null;
                    goto after_total_users;
                }

                $properties['total_users'] = $value;
    
                after_total_users:

                $value = $payload['admin_users'] ?? null;
    
                if ($value === null) {
                    $properties['admin_users'] = null;
                    goto after_admin_users;
                }

                $properties['admin_users'] = $value;
    
                after_admin_users:

                $value = $payload['suspended_users'] ?? null;
    
                if ($value === null) {
                    $properties['suspended_users'] = null;
                    goto after_suspended_users;
                }

                $properties['suspended_users'] = $value;
    
                after_suspended_users:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers(array $payload): \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_dormant_users'] ?? null;
    
                if ($value === null) {
                    $properties['total_dormant_users'] = null;
                    goto after_total_dormant_users;
                }

                $properties['total_dormant_users'] = $value;
    
                after_total_dormant_users:

                $value = $payload['dormancy_threshold'] ?? null;
    
                if ($value === null) {
                    $properties['dormancy_threshold'] = null;
                    goto after_dormancy_threshold;
                }

                $properties['dormancy_threshold'] = $value;
    
                after_dormancy_threshold:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Comments($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Gists($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Hooks($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Issues($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Milestones($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Orgs($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pages($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pulls($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Repos($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Users($object),
                'ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics);
        $result = [];
        
        $server_id = $object->server_id;

        if ($server_id === null) {
            goto after_server_id;
        }
        after_server_id:        $result['server_id'] = $server_id;

        
        $collection_date = $object->collection_date;

        if ($collection_date === null) {
            goto after_collection_date;
        }
        after_collection_date:        $result['collection_date'] = $collection_date;

        
        $schema_version = $object->schema_version;

        if ($schema_version === null) {
            goto after_schema_version;
        }
        after_schema_version:        $result['schema_version'] = $schema_version;

        
        $ghes_version = $object->ghes_version;

        if ($ghes_version === null) {
            goto after_ghes_version;
        }
        after_ghes_version:        $result['ghes_version'] = $ghes_version;

        
        $host_name = $object->host_name;

        if ($host_name === null) {
            goto after_host_name;
        }
        after_host_name:        $result['host_name'] = $host_name;

        
        $github_connect = $object->github_connect;

        if ($github_connect === null) {
            goto after_github_connect;
        }
        $github_connect = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect($github_connect);
        after_github_connect:        $result['github_connect'] = $github_connect;

        
        $ghe_stats = $object->ghe_stats;

        if ($ghe_stats === null) {
            goto after_ghe_stats;
        }
        $ghe_stats = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats($ghe_stats);
        after_ghe_stats:        $result['ghe_stats'] = $ghe_stats;

        
        $dormant_users = $object->dormant_users;

        if ($dormant_users === null) {
            goto after_dormant_users;
        }
        $dormant_users = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers($dormant_users);
        after_dormant_users:        $result['dormant_users'] = $dormant_users;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect);
        $result = [];
        
        $features_enabled = $object->features_enabled;

        if ($features_enabled === null) {
            goto after_features_enabled;
        }
        static $features_enabledSerializer0;

        if ($features_enabledSerializer0 === null) {
            $features_enabledSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $features_enabled = $features_enabledSerializer0->serialize($features_enabled, $this);
        after_features_enabled:        $result['features_enabled'] = $features_enabled;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats);
        $result = [];
        
        $comments = $object->comments;

        if ($comments === null) {
            goto after_comments;
        }
        $comments = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Comments($comments);
        after_comments:        $result['comments'] = $comments;

        
        $gists = $object->gists;

        if ($gists === null) {
            goto after_gists;
        }
        $gists = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Gists($gists);
        after_gists:        $result['gists'] = $gists;

        
        $hooks = $object->hooks;

        if ($hooks === null) {
            goto after_hooks;
        }
        $hooks = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Hooks($hooks);
        after_hooks:        $result['hooks'] = $hooks;

        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        $issues = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Issues($issues);
        after_issues:        $result['issues'] = $issues;

        
        $milestones = $object->milestones;

        if ($milestones === null) {
            goto after_milestones;
        }
        $milestones = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Milestones($milestones);
        after_milestones:        $result['milestones'] = $milestones;

        
        $orgs = $object->orgs;

        if ($orgs === null) {
            goto after_orgs;
        }
        $orgs = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Orgs($orgs);
        after_orgs:        $result['orgs'] = $orgs;

        
        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }
        $pages = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pages($pages);
        after_pages:        $result['pages'] = $pages;

        
        $pulls = $object->pulls;

        if ($pulls === null) {
            goto after_pulls;
        }
        $pulls = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pulls($pulls);
        after_pulls:        $result['pulls'] = $pulls;

        
        $repos = $object->repos;

        if ($repos === null) {
            goto after_repos;
        }
        $repos = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Repos($repos);
        after_repos:        $result['repos'] = $repos;

        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        $users = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Users($users);
        after_users:        $result['users'] = $users;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Comments(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Comments);
        $result = [];
        
        $total_commit_comments = $object->total_commit_comments;

        if ($total_commit_comments === null) {
            goto after_total_commit_comments;
        }
        after_total_commit_comments:        $result['total_commit_comments'] = $total_commit_comments;

        
        $total_gist_comments = $object->total_gist_comments;

        if ($total_gist_comments === null) {
            goto after_total_gist_comments;
        }
        after_total_gist_comments:        $result['total_gist_comments'] = $total_gist_comments;

        
        $total_issue_comments = $object->total_issue_comments;

        if ($total_issue_comments === null) {
            goto after_total_issue_comments;
        }
        after_total_issue_comments:        $result['total_issue_comments'] = $total_issue_comments;

        
        $total_pull_request_comments = $object->total_pull_request_comments;

        if ($total_pull_request_comments === null) {
            goto after_total_pull_request_comments;
        }
        after_total_pull_request_comments:        $result['total_pull_request_comments'] = $total_pull_request_comments;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Gists(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists);
        $result = [];
        
        $total_gists = $object->total_gists;

        if ($total_gists === null) {
            goto after_total_gists;
        }
        after_total_gists:        $result['total_gists'] = $total_gists;

        
        $private_gists = $object->private_gists;

        if ($private_gists === null) {
            goto after_private_gists;
        }
        after_private_gists:        $result['private_gists'] = $private_gists;

        
        $public_gists = $object->public_gists;

        if ($public_gists === null) {
            goto after_public_gists;
        }
        after_public_gists:        $result['public_gists'] = $public_gists;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Hooks(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks);
        $result = [];
        
        $total_hooks = $object->total_hooks;

        if ($total_hooks === null) {
            goto after_total_hooks;
        }
        after_total_hooks:        $result['total_hooks'] = $total_hooks;

        
        $active_hooks = $object->active_hooks;

        if ($active_hooks === null) {
            goto after_active_hooks;
        }
        after_active_hooks:        $result['active_hooks'] = $active_hooks;

        
        $inactive_hooks = $object->inactive_hooks;

        if ($inactive_hooks === null) {
            goto after_inactive_hooks;
        }
        after_inactive_hooks:        $result['inactive_hooks'] = $inactive_hooks;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Issues(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues);
        $result = [];
        
        $total_issues = $object->total_issues;

        if ($total_issues === null) {
            goto after_total_issues;
        }
        after_total_issues:        $result['total_issues'] = $total_issues;

        
        $open_issues = $object->open_issues;

        if ($open_issues === null) {
            goto after_open_issues;
        }
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $closed_issues = $object->closed_issues;

        if ($closed_issues === null) {
            goto after_closed_issues;
        }
        after_closed_issues:        $result['closed_issues'] = $closed_issues;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Milestones(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones);
        $result = [];
        
        $total_milestones = $object->total_milestones;

        if ($total_milestones === null) {
            goto after_total_milestones;
        }
        after_total_milestones:        $result['total_milestones'] = $total_milestones;

        
        $open_milestones = $object->open_milestones;

        if ($open_milestones === null) {
            goto after_open_milestones;
        }
        after_open_milestones:        $result['open_milestones'] = $open_milestones;

        
        $closed_milestones = $object->closed_milestones;

        if ($closed_milestones === null) {
            goto after_closed_milestones;
        }
        after_closed_milestones:        $result['closed_milestones'] = $closed_milestones;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Orgs(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs);
        $result = [];
        
        $total_orgs = $object->total_orgs;

        if ($total_orgs === null) {
            goto after_total_orgs;
        }
        after_total_orgs:        $result['total_orgs'] = $total_orgs;

        
        $disabled_orgs = $object->disabled_orgs;

        if ($disabled_orgs === null) {
            goto after_disabled_orgs;
        }
        after_disabled_orgs:        $result['disabled_orgs'] = $disabled_orgs;

        
        $total_teams = $object->total_teams;

        if ($total_teams === null) {
            goto after_total_teams;
        }
        after_total_teams:        $result['total_teams'] = $total_teams;

        
        $total_team_members = $object->total_team_members;

        if ($total_team_members === null) {
            goto after_total_team_members;
        }
        after_total_team_members:        $result['total_team_members'] = $total_team_members;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pages(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages);
        $result = [];
        
        $total_pages = $object->total_pages;

        if ($total_pages === null) {
            goto after_total_pages;
        }
        after_total_pages:        $result['total_pages'] = $total_pages;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pulls(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls);
        $result = [];
        
        $total_pulls = $object->total_pulls;

        if ($total_pulls === null) {
            goto after_total_pulls;
        }
        after_total_pulls:        $result['total_pulls'] = $total_pulls;

        
        $merged_pulls = $object->merged_pulls;

        if ($merged_pulls === null) {
            goto after_merged_pulls;
        }
        after_merged_pulls:        $result['merged_pulls'] = $merged_pulls;

        
        $mergeable_pulls = $object->mergeable_pulls;

        if ($mergeable_pulls === null) {
            goto after_mergeable_pulls;
        }
        after_mergeable_pulls:        $result['mergeable_pulls'] = $mergeable_pulls;

        
        $unmergeable_pulls = $object->unmergeable_pulls;

        if ($unmergeable_pulls === null) {
            goto after_unmergeable_pulls;
        }
        after_unmergeable_pulls:        $result['unmergeable_pulls'] = $unmergeable_pulls;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Repos(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos);
        $result = [];
        
        $total_repos = $object->total_repos;

        if ($total_repos === null) {
            goto after_total_repos;
        }
        after_total_repos:        $result['total_repos'] = $total_repos;

        
        $root_repos = $object->root_repos;

        if ($root_repos === null) {
            goto after_root_repos;
        }
        after_root_repos:        $result['root_repos'] = $root_repos;

        
        $fork_repos = $object->fork_repos;

        if ($fork_repos === null) {
            goto after_fork_repos;
        }
        after_fork_repos:        $result['fork_repos'] = $fork_repos;

        
        $org_repos = $object->org_repos;

        if ($org_repos === null) {
            goto after_org_repos;
        }
        after_org_repos:        $result['org_repos'] = $org_repos;

        
        $total_pushes = $object->total_pushes;

        if ($total_pushes === null) {
            goto after_total_pushes;
        }
        after_total_pushes:        $result['total_pushes'] = $total_pushes;

        
        $total_wikis = $object->total_wikis;

        if ($total_wikis === null) {
            goto after_total_wikis;
        }
        after_total_wikis:        $result['total_wikis'] = $total_wikis;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Users(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users);
        $result = [];
        
        $total_users = $object->total_users;

        if ($total_users === null) {
            goto after_total_users;
        }
        after_total_users:        $result['total_users'] = $total_users;

        
        $admin_users = $object->admin_users;

        if ($admin_users === null) {
            goto after_admin_users;
        }
        after_admin_users:        $result['admin_users'] = $admin_users;

        
        $suspended_users = $object->suspended_users;

        if ($suspended_users === null) {
            goto after_suspended_users;
        }
        after_suspended_users:        $result['suspended_users'] = $suspended_users;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers);
        $result = [];
        
        $total_dormant_users = $object->total_dormant_users;

        if ($total_dormant_users === null) {
            goto after_total_dormant_users;
        }
        after_total_dormant_users:        $result['total_dormant_users'] = $total_dormant_users;

        
        $dormancy_threshold = $object->dormancy_threshold;

        if ($dormancy_threshold === null) {
            goto after_dormancy_threshold;
        }
        after_dormancy_threshold:        $result['dormancy_threshold'] = $dormancy_threshold;


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
