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
                $properties['repos'] = null;
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
                $properties['hooks'] = null;
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
                $properties['pages'] = null;
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
                $properties['orgs'] = null;
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
                $properties['users'] = null;
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
                $properties['pulls'] = null;
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
                $properties['issues'] = null;
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
                $properties['milestones'] = null;
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
                $properties['gists'] = null;
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
                $properties['comments'] = null;
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
            'ApiClients\Client\GitHubAE\Schema\EnterpriseOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseRepositoryOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseHookOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePageOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOrganizationOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseUserOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePullRequestOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseIssueOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseMilestoneOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseGistOverview($object),
            'ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview' => $this->serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseRepositoryOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview);
        $result = [];

        $total_repos = $object->total_repos;
        after_total_repos:        $result['total_repos'] = $total_repos;

        
        $root_repos = $object->root_repos;
        after_root_repos:        $result['root_repos'] = $root_repos;

        
        $fork_repos = $object->fork_repos;
        after_fork_repos:        $result['fork_repos'] = $fork_repos;

        
        $org_repos = $object->org_repos;
        after_org_repos:        $result['org_repos'] = $org_repos;

        
        $total_pushes = $object->total_pushes;
        after_total_pushes:        $result['total_pushes'] = $total_pushes;

        
        $total_wikis = $object->total_wikis;
        after_total_wikis:        $result['total_wikis'] = $total_wikis;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseHookOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview);
        $result = [];

        $total_hooks = $object->total_hooks;
        after_total_hooks:        $result['total_hooks'] = $total_hooks;

        
        $active_hooks = $object->active_hooks;
        after_active_hooks:        $result['active_hooks'] = $active_hooks;

        
        $inactive_hooks = $object->inactive_hooks;
        after_inactive_hooks:        $result['inactive_hooks'] = $inactive_hooks;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePageOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview);
        $result = [];

        $total_pages = $object->total_pages;
        after_total_pages:        $result['total_pages'] = $total_pages;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseOrganizationOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview);
        $result = [];

        $total_orgs = $object->total_orgs;
        after_total_orgs:        $result['total_orgs'] = $total_orgs;

        
        $disabled_orgs = $object->disabled_orgs;
        after_disabled_orgs:        $result['disabled_orgs'] = $disabled_orgs;

        
        $total_teams = $object->total_teams;
        after_total_teams:        $result['total_teams'] = $total_teams;

        
        $total_team_members = $object->total_team_members;
        after_total_team_members:        $result['total_team_members'] = $total_team_members;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseUserOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview);
        $result = [];

        $total_users = $object->total_users;
        after_total_users:        $result['total_users'] = $total_users;

        
        $admin_users = $object->admin_users;
        after_admin_users:        $result['admin_users'] = $admin_users;

        
        $suspended_users = $object->suspended_users;
        after_suspended_users:        $result['suspended_users'] = $suspended_users;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterprisePullRequestOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview);
        $result = [];

        $total_pulls = $object->total_pulls;
        after_total_pulls:        $result['total_pulls'] = $total_pulls;

        
        $merged_pulls = $object->merged_pulls;
        after_merged_pulls:        $result['merged_pulls'] = $merged_pulls;

        
        $mergeable_pulls = $object->mergeable_pulls;
        after_mergeable_pulls:        $result['mergeable_pulls'] = $mergeable_pulls;

        
        $unmergeable_pulls = $object->unmergeable_pulls;
        after_unmergeable_pulls:        $result['unmergeable_pulls'] = $unmergeable_pulls;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseIssueOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview);
        $result = [];

        $total_issues = $object->total_issues;
        after_total_issues:        $result['total_issues'] = $total_issues;

        
        $open_issues = $object->open_issues;
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $closed_issues = $object->closed_issues;
        after_closed_issues:        $result['closed_issues'] = $closed_issues;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseMilestoneOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview);
        $result = [];

        $total_milestones = $object->total_milestones;
        after_total_milestones:        $result['total_milestones'] = $total_milestones;

        
        $open_milestones = $object->open_milestones;
        after_open_milestones:        $result['open_milestones'] = $open_milestones;

        
        $closed_milestones = $object->closed_milestones;
        after_closed_milestones:        $result['closed_milestones'] = $closed_milestones;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseGistOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview);
        $result = [];

        $total_gists = $object->total_gists;
        after_total_gists:        $result['total_gists'] = $total_gists;

        
        $private_gists = $object->private_gists;
        after_private_gists:        $result['private_gists'] = $private_gists;

        
        $public_gists = $object->public_gists;
        after_public_gists:        $result['public_gists'] = $public_gists;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubAE⚡️Schema⚡️EnterpriseCommentOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview);
        $result = [];

        $total_commit_comments = $object->total_commit_comments;
        after_total_commit_comments:        $result['total_commit_comments'] = $total_commit_comments;

        
        $total_gist_comments = $object->total_gist_comments;
        after_total_gist_comments:        $result['total_gist_comments'] = $total_gist_comments;

        
        $total_issue_comments = $object->total_issue_comments;
        after_total_issue_comments:        $result['total_issue_comments'] = $total_issue_comments;

        
        $total_pull_request_comments = $object->total_pull_request_comments;
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
