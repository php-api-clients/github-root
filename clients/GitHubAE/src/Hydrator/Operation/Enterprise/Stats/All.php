<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Hydrator\Operation\Enterprise\Stats;

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
            'ApiClients\Client\GitHubAE\Schema\EnterpriseOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseRepositoryOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseHookOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePageOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOrganizationOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseUserOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePullRequestOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseIssueOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseMilestoneOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseGistOverview($payload),
                'ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview' => $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repos';
                    goto after_repos;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'repos';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseRepositoryOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['repos'] = $value;
    
                after_repos:

                $value = $payload['hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'hooks';
                    goto after_hooks;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'hooks';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseHookOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['hooks'] = $value;
    
                after_hooks:

                $value = $payload['pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pages';
                    goto after_pages;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pages';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePageOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pages'] = $value;
    
                after_pages:

                $value = $payload['orgs'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'orgs';
                    goto after_orgs;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'orgs';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOrganizationOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['orgs'] = $value;
    
                after_orgs:

                $value = $payload['users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'users';
                    goto after_users;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'users';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseUserOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['users'] = $value;
    
                after_users:

                $value = $payload['pulls'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'pulls';
                    goto after_pulls;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pulls';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePullRequestOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pulls'] = $value;
    
                after_pulls:

                $value = $payload['issues'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'issues';
                    goto after_issues;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'issues';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseIssueOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['issues'] = $value;
    
                after_issues:

                $value = $payload['milestones'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'milestones';
                    goto after_milestones;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'milestones';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseMilestoneOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['milestones'] = $value;
    
                after_milestones:

                $value = $payload['gists'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'gists';
                    goto after_gists;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'gists';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseGistOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['gists'] = $value;
    
                after_gists:

                $value = $payload['comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'comments';
                    goto after_comments;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'comments';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['comments'] = $value;
    
                after_comments:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseRepositoryOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_repos';
                    goto after_total_repos;
                }

                $properties['total_repos'] = $value;
    
                after_total_repos:

                $value = $payload['root_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'root_repos';
                    goto after_root_repos;
                }

                $properties['root_repos'] = $value;
    
                after_root_repos:

                $value = $payload['fork_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'fork_repos';
                    goto after_fork_repos;
                }

                $properties['fork_repos'] = $value;
    
                after_fork_repos:

                $value = $payload['org_repos'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'org_repos';
                    goto after_org_repos;
                }

                $properties['org_repos'] = $value;
    
                after_org_repos:

                $value = $payload['total_pushes'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_pushes';
                    goto after_total_pushes;
                }

                $properties['total_pushes'] = $value;
    
                after_total_pushes:

                $value = $payload['total_wikis'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_wikis';
                    goto after_total_wikis;
                }

                $properties['total_wikis'] = $value;
    
                after_total_wikis:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseHookOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_hooks';
                    goto after_total_hooks;
                }

                $properties['total_hooks'] = $value;
    
                after_total_hooks:

                $value = $payload['active_hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'active_hooks';
                    goto after_active_hooks;
                }

                $properties['active_hooks'] = $value;
    
                after_active_hooks:

                $value = $payload['inactive_hooks'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'inactive_hooks';
                    goto after_inactive_hooks;
                }

                $properties['inactive_hooks'] = $value;
    
                after_inactive_hooks:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePageOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_pages'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_pages';
                    goto after_total_pages;
                }

                $properties['total_pages'] = $value;
    
                after_total_pages:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOrganizationOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_orgs'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_orgs';
                    goto after_total_orgs;
                }

                $properties['total_orgs'] = $value;
    
                after_total_orgs:

                $value = $payload['disabled_orgs'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'disabled_orgs';
                    goto after_disabled_orgs;
                }

                $properties['disabled_orgs'] = $value;
    
                after_disabled_orgs:

                $value = $payload['total_teams'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_teams';
                    goto after_total_teams;
                }

                $properties['total_teams'] = $value;
    
                after_total_teams:

                $value = $payload['total_team_members'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_team_members';
                    goto after_total_team_members;
                }

                $properties['total_team_members'] = $value;
    
                after_total_team_members:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseUserOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_users';
                    goto after_total_users;
                }

                $properties['total_users'] = $value;
    
                after_total_users:

                $value = $payload['admin_users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'admin_users';
                    goto after_admin_users;
                }

                $properties['admin_users'] = $value;
    
                after_admin_users:

                $value = $payload['suspended_users'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'suspended_users';
                    goto after_suspended_users;
                }

                $properties['suspended_users'] = $value;
    
                after_suspended_users:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePullRequestOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_pulls'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_pulls';
                    goto after_total_pulls;
                }

                $properties['total_pulls'] = $value;
    
                after_total_pulls:

                $value = $payload['merged_pulls'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'merged_pulls';
                    goto after_merged_pulls;
                }

                $properties['merged_pulls'] = $value;
    
                after_merged_pulls:

                $value = $payload['mergeable_pulls'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'mergeable_pulls';
                    goto after_mergeable_pulls;
                }

                $properties['mergeable_pulls'] = $value;
    
                after_mergeable_pulls:

                $value = $payload['unmergeable_pulls'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'unmergeable_pulls';
                    goto after_unmergeable_pulls;
                }

                $properties['unmergeable_pulls'] = $value;
    
                after_unmergeable_pulls:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseIssueOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_issues'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_issues';
                    goto after_total_issues;
                }

                $properties['total_issues'] = $value;
    
                after_total_issues:

                $value = $payload['open_issues'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'open_issues';
                    goto after_open_issues;
                }

                $properties['open_issues'] = $value;
    
                after_open_issues:

                $value = $payload['closed_issues'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'closed_issues';
                    goto after_closed_issues;
                }

                $properties['closed_issues'] = $value;
    
                after_closed_issues:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseMilestoneOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_milestones'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_milestones';
                    goto after_total_milestones;
                }

                $properties['total_milestones'] = $value;
    
                after_total_milestones:

                $value = $payload['open_milestones'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'open_milestones';
                    goto after_open_milestones;
                }

                $properties['open_milestones'] = $value;
    
                after_open_milestones:

                $value = $payload['closed_milestones'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'closed_milestones';
                    goto after_closed_milestones;
                }

                $properties['closed_milestones'] = $value;
    
                after_closed_milestones:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseGistOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_gists'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_gists';
                    goto after_total_gists;
                }

                $properties['total_gists'] = $value;
    
                after_total_gists:

                $value = $payload['private_gists'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'private_gists';
                    goto after_private_gists;
                }

                $properties['private_gists'] = $value;
    
                after_private_gists:

                $value = $payload['public_gists'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'public_gists';
                    goto after_public_gists;
                }

                $properties['public_gists'] = $value;
    
                after_public_gists:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview(array $payload): \ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['total_commit_comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_commit_comments';
                    goto after_total_commit_comments;
                }

                $properties['total_commit_comments'] = $value;
    
                after_total_commit_comments:

                $value = $payload['total_gist_comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_gist_comments';
                    goto after_total_gist_comments;
                }

                $properties['total_gist_comments'] = $value;
    
                after_total_gist_comments:

                $value = $payload['total_issue_comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_issue_comments';
                    goto after_total_issue_comments;
                }

                $properties['total_issue_comments'] = $value;
    
                after_total_issue_comments:

                $value = $payload['total_pull_request_comments'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'total_pull_request_comments';
                    goto after_total_pull_request_comments;
                }

                $properties['total_pull_request_comments'] = $value;
    
                after_total_pull_request_comments:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHubAE\Schema\EnterpriseOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOverview($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseOverview);
        $result = [];
        
        $repos = $object->repos;

        if ($repos === null) {
            goto after_repos;
        }
        $repos = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseRepositoryOverview($repos);
        after_repos:        $result['repos'] = $repos;

        
        $hooks = $object->hooks;

        if ($hooks === null) {
            goto after_hooks;
        }
        $hooks = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseHookOverview($hooks);
        after_hooks:        $result['hooks'] = $hooks;

        
        $pages = $object->pages;

        if ($pages === null) {
            goto after_pages;
        }
        $pages = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePageOverview($pages);
        after_pages:        $result['pages'] = $pages;

        
        $orgs = $object->orgs;

        if ($orgs === null) {
            goto after_orgs;
        }
        $orgs = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOrganizationOverview($orgs);
        after_orgs:        $result['orgs'] = $orgs;

        
        $users = $object->users;

        if ($users === null) {
            goto after_users;
        }
        $users = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseUserOverview($users);
        after_users:        $result['users'] = $users;

        
        $pulls = $object->pulls;

        if ($pulls === null) {
            goto after_pulls;
        }
        $pulls = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePullRequestOverview($pulls);
        after_pulls:        $result['pulls'] = $pulls;

        
        $issues = $object->issues;

        if ($issues === null) {
            goto after_issues;
        }
        $issues = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseIssueOverview($issues);
        after_issues:        $result['issues'] = $issues;

        
        $milestones = $object->milestones;

        if ($milestones === null) {
            goto after_milestones;
        }
        $milestones = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseMilestoneOverview($milestones);
        after_milestones:        $result['milestones'] = $milestones;

        
        $gists = $object->gists;

        if ($gists === null) {
            goto after_gists;
        }
        $gists = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseGistOverview($gists);
        after_gists:        $result['gists'] = $gists;

        
        $comments = $object->comments;

        if ($comments === null) {
            goto after_comments;
        }
        $comments = $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview($comments);
        after_comments:        $result['comments'] = $comments;


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
