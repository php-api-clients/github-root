<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Hydrator\Operation\Enterprise\Stats;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class All implements ObjectMapper
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
            'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseHookOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePageOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseUserOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePullRequestOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseIssueOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseMilestoneOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseGistOverview($payload),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseCommentOverview($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['repos'] ?? null;
    
                if ($value === null) {
                    $properties['repos'] = null;
                    goto after_repos;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repos';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repos'] = $value;
    
                after_repos:

                $value = $payload['hooks'] ?? null;
    
                if ($value === null) {
                    $properties['hooks'] = null;
                    goto after_hooks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'hooks';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseHookOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['hooks'] = $value;
    
                after_hooks:

                $value = $payload['pages'] ?? null;
    
                if ($value === null) {
                    $properties['pages'] = null;
                    goto after_pages;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pages';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePageOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pages'] = $value;
    
                after_pages:

                $value = $payload['orgs'] ?? null;
    
                if ($value === null) {
                    $properties['orgs'] = null;
                    goto after_orgs;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'orgs';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['orgs'] = $value;
    
                after_orgs:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $properties['users'] = null;
                    goto after_users;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'users';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseUserOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['pulls'] ?? null;
    
                if ($value === null) {
                    $properties['pulls'] = null;
                    goto after_pulls;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pulls';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePullRequestOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pulls'] = $value;
    
                after_pulls:

                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $properties['issues'] = null;
                    goto after_issues;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'issues';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseIssueOverview($value);
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
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseMilestoneOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['milestones'] = $value;
    
                after_milestones:

                $value = $payload['gists'] ?? null;
    
                if ($value === null) {
                    $properties['gists'] = null;
                    goto after_gists;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'gists';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseGistOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['gists'] = $value;
    
                after_gists:

                $value = $payload['comments'] ?? null;
    
                if ($value === null) {
                    $properties['comments'] = null;
                    goto after_comments;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'comments';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseCommentOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['comments'] = $value;
    
                after_comments:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseHookOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePageOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseUserOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePullRequestOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseIssueOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseMilestoneOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseGistOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseCommentOverview(array $payload): \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview
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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseHookOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePageOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseUserOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePullRequestOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseIssueOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseMilestoneOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseGistOverview($object),
                'ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseCommentOverview($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview);
        $result = [];
        
        $repos = $object->repos;

        if ($repos === null) {
            goto after_repos;
        }
        $repos = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview($repos);
        after_repos:        $result['repos'] = $repos;

        
        $hooks = $object->hooks;

        if ($hooks === null) {
            goto after_hooks;
        }
        $hooks = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseHookOverview($hooks);
        after_hooks:        $result['hooks'] = $hooks;

        
        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }
        $pages = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePageOverview($pages);
        after_pages:        $result['pages'] = $pages;

        
        $orgs = $object->orgs;

        if ($orgs === null) {
            goto after_orgs;
        }
        $orgs = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview($orgs);
        after_orgs:        $result['orgs'] = $orgs;

        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        $users = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseUserOverview($users);
        after_users:        $result['users'] = $users;

        
        $pulls = $object->pulls;

        if ($pulls === null) {
            goto after_pulls;
        }
        $pulls = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePullRequestOverview($pulls);
        after_pulls:        $result['pulls'] = $pulls;

        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        $issues = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseIssueOverview($issues);
        after_issues:        $result['issues'] = $issues;

        
        $milestones = $object->milestones;

        if ($milestones === null) {
            goto after_milestones;
        }
        $milestones = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseMilestoneOverview($milestones);
        after_milestones:        $result['milestones'] = $milestones;

        
        $gists = $object->gists;

        if ($gists === null) {
            goto after_gists;
        }
        $gists = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseGistOverview($gists);
        after_gists:        $result['gists'] = $gists;

        
        $comments = $object->comments;

        if ($comments === null) {
            goto after_comments;
        }
        $comments = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseCommentOverview($comments);
        after_comments:        $result['comments'] = $comments;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseRepositoryOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseHookOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePageOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview);
        $result = [];
        
        $total_pages = $object->total_pages;

        if ($total_pages === null) {
            goto after_total_pages;
        }
        after_total_pages:        $result['total_pages'] = $total_pages;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseUserOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePullRequestOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseIssueOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseMilestoneOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseGistOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview);
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseCommentOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview);
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
