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
                $missingFields[] = 'total_repos';
                goto after_totalRepos;
            }

            $properties['totalRepos'] = $value;

            after_totalRepos:

            $value = $payload['root_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'root_repos';
                goto after_rootRepos;
            }

            $properties['rootRepos'] = $value;

            after_rootRepos:

            $value = $payload['fork_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork_repos';
                goto after_forkRepos;
            }

            $properties['forkRepos'] = $value;

            after_forkRepos:

            $value = $payload['org_repos'] ?? null;

            if ($value === null) {
                $missingFields[] = 'org_repos';
                goto after_orgRepos;
            }

            $properties['orgRepos'] = $value;

            after_orgRepos:

            $value = $payload['total_pushes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_pushes';
                goto after_totalPushes;
            }

            $properties['totalPushes'] = $value;

            after_totalPushes:

            $value = $payload['total_wikis'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_wikis';
                goto after_totalWikis;
            }

            $properties['totalWikis'] = $value;

            after_totalWikis:

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
                $missingFields[] = 'total_hooks';
                goto after_totalHooks;
            }

            $properties['totalHooks'] = $value;

            after_totalHooks:

            $value = $payload['active_hooks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'active_hooks';
                goto after_activeHooks;
            }

            $properties['activeHooks'] = $value;

            after_activeHooks:

            $value = $payload['inactive_hooks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'inactive_hooks';
                goto after_inactiveHooks;
            }

            $properties['inactiveHooks'] = $value;

            after_inactiveHooks:

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
                $missingFields[] = 'total_pages';
                goto after_totalPages;
            }

            $properties['totalPages'] = $value;

            after_totalPages:

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
                $missingFields[] = 'total_orgs';
                goto after_totalOrgs;
            }

            $properties['totalOrgs'] = $value;

            after_totalOrgs:

            $value = $payload['disabled_orgs'] ?? null;

            if ($value === null) {
                $missingFields[] = 'disabled_orgs';
                goto after_disabledOrgs;
            }

            $properties['disabledOrgs'] = $value;

            after_disabledOrgs:

            $value = $payload['total_teams'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_teams';
                goto after_totalTeams;
            }

            $properties['totalTeams'] = $value;

            after_totalTeams:

            $value = $payload['total_team_members'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_team_members';
                goto after_totalTeamMembers;
            }

            $properties['totalTeamMembers'] = $value;

            after_totalTeamMembers:

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
                $missingFields[] = 'total_users';
                goto after_totalUsers;
            }

            $properties['totalUsers'] = $value;

            after_totalUsers:

            $value = $payload['admin_users'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin_users';
                goto after_adminUsers;
            }

            $properties['adminUsers'] = $value;

            after_adminUsers:

            $value = $payload['suspended_users'] ?? null;

            if ($value === null) {
                $missingFields[] = 'suspended_users';
                goto after_suspendedUsers;
            }

            $properties['suspendedUsers'] = $value;

            after_suspendedUsers:

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
                $missingFields[] = 'total_pulls';
                goto after_totalPulls;
            }

            $properties['totalPulls'] = $value;

            after_totalPulls:

            $value = $payload['merged_pulls'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merged_pulls';
                goto after_mergedPulls;
            }

            $properties['mergedPulls'] = $value;

            after_mergedPulls:

            $value = $payload['mergeable_pulls'] ?? null;

            if ($value === null) {
                $missingFields[] = 'mergeable_pulls';
                goto after_mergeablePulls;
            }

            $properties['mergeablePulls'] = $value;

            after_mergeablePulls:

            $value = $payload['unmergeable_pulls'] ?? null;

            if ($value === null) {
                $missingFields[] = 'unmergeable_pulls';
                goto after_unmergeablePulls;
            }

            $properties['unmergeablePulls'] = $value;

            after_unmergeablePulls:

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
                $missingFields[] = 'total_issues';
                goto after_totalIssues;
            }

            $properties['totalIssues'] = $value;

            after_totalIssues:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['closed_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'closed_issues';
                goto after_closedIssues;
            }

            $properties['closedIssues'] = $value;

            after_closedIssues:

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
                $missingFields[] = 'total_milestones';
                goto after_totalMilestones;
            }

            $properties['totalMilestones'] = $value;

            after_totalMilestones:

            $value = $payload['open_milestones'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_milestones';
                goto after_openMilestones;
            }

            $properties['openMilestones'] = $value;

            after_openMilestones:

            $value = $payload['closed_milestones'] ?? null;

            if ($value === null) {
                $missingFields[] = 'closed_milestones';
                goto after_closedMilestones;
            }

            $properties['closedMilestones'] = $value;

            after_closedMilestones:

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
                $missingFields[] = 'total_gists';
                goto after_totalGists;
            }

            $properties['totalGists'] = $value;

            after_totalGists:

            $value = $payload['private_gists'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private_gists';
                goto after_privateGists;
            }

            $properties['privateGists'] = $value;

            after_privateGists:

            $value = $payload['public_gists'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_gists';
                goto after_publicGists;
            }

            $properties['publicGists'] = $value;

            after_publicGists:

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
                $missingFields[] = 'total_commit_comments';
                goto after_totalCommitComments;
            }

            $properties['totalCommitComments'] = $value;

            after_totalCommitComments:

            $value = $payload['total_gist_comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_gist_comments';
                goto after_totalGistComments;
            }

            $properties['totalGistComments'] = $value;

            after_totalGistComments:

            $value = $payload['total_issue_comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_issue_comments';
                goto after_totalIssueComments;
            }

            $properties['totalIssueComments'] = $value;

            after_totalIssueComments:

            $value = $payload['total_pull_request_comments'] ?? null;

            if ($value === null) {
                $missingFields[] = 'total_pull_request_comments';
                goto after_totalPullRequestComments;
            }

            $properties['totalPullRequestComments'] = $value;

            after_totalPullRequestComments:

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

        $totalRepos = $object->totalRepos;
        after_totalRepos:        $result['total_repos'] = $totalRepos;

        
        $rootRepos = $object->rootRepos;
        after_rootRepos:        $result['root_repos'] = $rootRepos;

        
        $forkRepos = $object->forkRepos;
        after_forkRepos:        $result['fork_repos'] = $forkRepos;

        
        $orgRepos = $object->orgRepos;
        after_orgRepos:        $result['org_repos'] = $orgRepos;

        
        $totalPushes = $object->totalPushes;
        after_totalPushes:        $result['total_pushes'] = $totalPushes;

        
        $totalWikis = $object->totalWikis;
        after_totalWikis:        $result['total_wikis'] = $totalWikis;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseHookOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview);
        $result = [];

        $totalHooks = $object->totalHooks;
        after_totalHooks:        $result['total_hooks'] = $totalHooks;

        
        $activeHooks = $object->activeHooks;
        after_activeHooks:        $result['active_hooks'] = $activeHooks;

        
        $inactiveHooks = $object->inactiveHooks;
        after_inactiveHooks:        $result['inactive_hooks'] = $inactiveHooks;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePageOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview);
        $result = [];

        $totalPages = $object->totalPages;
        after_totalPages:        $result['total_pages'] = $totalPages;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseOrganizationOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview);
        $result = [];

        $totalOrgs = $object->totalOrgs;
        after_totalOrgs:        $result['total_orgs'] = $totalOrgs;

        
        $disabledOrgs = $object->disabledOrgs;
        after_disabledOrgs:        $result['disabled_orgs'] = $disabledOrgs;

        
        $totalTeams = $object->totalTeams;
        after_totalTeams:        $result['total_teams'] = $totalTeams;

        
        $totalTeamMembers = $object->totalTeamMembers;
        after_totalTeamMembers:        $result['total_team_members'] = $totalTeamMembers;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseUserOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview);
        $result = [];

        $totalUsers = $object->totalUsers;
        after_totalUsers:        $result['total_users'] = $totalUsers;

        
        $adminUsers = $object->adminUsers;
        after_adminUsers:        $result['admin_users'] = $adminUsers;

        
        $suspendedUsers = $object->suspendedUsers;
        after_suspendedUsers:        $result['suspended_users'] = $suspendedUsers;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterprisePullRequestOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview);
        $result = [];

        $totalPulls = $object->totalPulls;
        after_totalPulls:        $result['total_pulls'] = $totalPulls;

        
        $mergedPulls = $object->mergedPulls;
        after_mergedPulls:        $result['merged_pulls'] = $mergedPulls;

        
        $mergeablePulls = $object->mergeablePulls;
        after_mergeablePulls:        $result['mergeable_pulls'] = $mergeablePulls;

        
        $unmergeablePulls = $object->unmergeablePulls;
        after_unmergeablePulls:        $result['unmergeable_pulls'] = $unmergeablePulls;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseIssueOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview);
        $result = [];

        $totalIssues = $object->totalIssues;
        after_totalIssues:        $result['total_issues'] = $totalIssues;

        
        $openIssues = $object->openIssues;
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $closedIssues = $object->closedIssues;
        after_closedIssues:        $result['closed_issues'] = $closedIssues;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseMilestoneOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview);
        $result = [];

        $totalMilestones = $object->totalMilestones;
        after_totalMilestones:        $result['total_milestones'] = $totalMilestones;

        
        $openMilestones = $object->openMilestones;
        after_openMilestones:        $result['open_milestones'] = $openMilestones;

        
        $closedMilestones = $object->closedMilestones;
        after_closedMilestones:        $result['closed_milestones'] = $closedMilestones;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseGistOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview);
        $result = [];

        $totalGists = $object->totalGists;
        after_totalGists:        $result['total_gists'] = $totalGists;

        
        $privateGists = $object->privateGists;
        after_privateGists:        $result['private_gists'] = $privateGists;

        
        $publicGists = $object->publicGists;
        after_publicGists:        $result['public_gists'] = $publicGists;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterprise⚡️Schema⚡️EnterpriseCommentOverview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview);
        $result = [];

        $totalCommitComments = $object->totalCommitComments;
        after_totalCommitComments:        $result['total_commit_comments'] = $totalCommitComments;

        
        $totalGistComments = $object->totalGistComments;
        after_totalGistComments:        $result['total_gist_comments'] = $totalGistComments;

        
        $totalIssueComments = $object->totalIssueComments;
        after_totalIssueComments:        $result['total_issue_comments'] = $totalIssueComments;

        
        $totalPullRequestComments = $object->totalPullRequestComments;
        after_totalPullRequestComments:        $result['total_pull_request_comments'] = $totalPullRequestComments;


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
