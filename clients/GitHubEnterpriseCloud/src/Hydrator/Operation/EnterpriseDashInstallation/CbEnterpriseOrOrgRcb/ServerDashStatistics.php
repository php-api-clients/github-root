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
                $properties['serverId'] = null;
                goto after_serverId;
            }

            $properties['serverId'] = $value;

            after_serverId:

            $value = $payload['collection_date'] ?? null;

            if ($value === null) {
                $properties['collectionDate'] = null;
                goto after_collectionDate;
            }

            $properties['collectionDate'] = $value;

            after_collectionDate:

            $value = $payload['schema_version'] ?? null;

            if ($value === null) {
                $properties['schemaVersion'] = null;
                goto after_schemaVersion;
            }

            $properties['schemaVersion'] = $value;

            after_schemaVersion:

            $value = $payload['ghes_version'] ?? null;

            if ($value === null) {
                $properties['ghesVersion'] = null;
                goto after_ghesVersion;
            }

            $properties['ghesVersion'] = $value;

            after_ghesVersion:

            $value = $payload['host_name'] ?? null;

            if ($value === null) {
                $properties['hostName'] = null;
                goto after_hostName;
            }

            $properties['hostName'] = $value;

            after_hostName:

            $value = $payload['github_connect'] ?? null;

            if ($value === null) {
                $properties['githubConnect'] = null;
                goto after_githubConnect;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'githubConnect';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['githubConnect'] = $value;

            after_githubConnect:

            $value = $payload['ghe_stats'] ?? null;

            if ($value === null) {
                $properties['gheStats'] = null;
                goto after_gheStats;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'gheStats';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['gheStats'] = $value;

            after_gheStats:

            $value = $payload['dormant_users'] ?? null;

            if ($value === null) {
                $properties['dormantUsers'] = null;
                goto after_dormantUsers;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dormantUsers';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dormantUsers'] = $value;

            after_dormantUsers:

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
                $properties['featuresEnabled'] = null;
                goto after_featuresEnabled;
            }

            $properties['featuresEnabled'] = $value;

            after_featuresEnabled:

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
                $properties['totalCommitComments'] = null;
                goto after_totalCommitComments;
            }

            $properties['totalCommitComments'] = $value;

            after_totalCommitComments:

            $value = $payload['total_gist_comments'] ?? null;

            if ($value === null) {
                $properties['totalGistComments'] = null;
                goto after_totalGistComments;
            }

            $properties['totalGistComments'] = $value;

            after_totalGistComments:

            $value = $payload['total_issue_comments'] ?? null;

            if ($value === null) {
                $properties['totalIssueComments'] = null;
                goto after_totalIssueComments;
            }

            $properties['totalIssueComments'] = $value;

            after_totalIssueComments:

            $value = $payload['total_pull_request_comments'] ?? null;

            if ($value === null) {
                $properties['totalPullRequestComments'] = null;
                goto after_totalPullRequestComments;
            }

            $properties['totalPullRequestComments'] = $value;

            after_totalPullRequestComments:

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
                $properties['totalGists'] = null;
                goto after_totalGists;
            }

            $properties['totalGists'] = $value;

            after_totalGists:

            $value = $payload['private_gists'] ?? null;

            if ($value === null) {
                $properties['privateGists'] = null;
                goto after_privateGists;
            }

            $properties['privateGists'] = $value;

            after_privateGists:

            $value = $payload['public_gists'] ?? null;

            if ($value === null) {
                $properties['publicGists'] = null;
                goto after_publicGists;
            }

            $properties['publicGists'] = $value;

            after_publicGists:

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
                $properties['totalHooks'] = null;
                goto after_totalHooks;
            }

            $properties['totalHooks'] = $value;

            after_totalHooks:

            $value = $payload['active_hooks'] ?? null;

            if ($value === null) {
                $properties['activeHooks'] = null;
                goto after_activeHooks;
            }

            $properties['activeHooks'] = $value;

            after_activeHooks:

            $value = $payload['inactive_hooks'] ?? null;

            if ($value === null) {
                $properties['inactiveHooks'] = null;
                goto after_inactiveHooks;
            }

            $properties['inactiveHooks'] = $value;

            after_inactiveHooks:

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
                $properties['totalIssues'] = null;
                goto after_totalIssues;
            }

            $properties['totalIssues'] = $value;

            after_totalIssues:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $properties['openIssues'] = null;
                goto after_openIssues;
            }

            $properties['openIssues'] = $value;

            after_openIssues:

            $value = $payload['closed_issues'] ?? null;

            if ($value === null) {
                $properties['closedIssues'] = null;
                goto after_closedIssues;
            }

            $properties['closedIssues'] = $value;

            after_closedIssues:

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
                $properties['totalMilestones'] = null;
                goto after_totalMilestones;
            }

            $properties['totalMilestones'] = $value;

            after_totalMilestones:

            $value = $payload['open_milestones'] ?? null;

            if ($value === null) {
                $properties['openMilestones'] = null;
                goto after_openMilestones;
            }

            $properties['openMilestones'] = $value;

            after_openMilestones:

            $value = $payload['closed_milestones'] ?? null;

            if ($value === null) {
                $properties['closedMilestones'] = null;
                goto after_closedMilestones;
            }

            $properties['closedMilestones'] = $value;

            after_closedMilestones:

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
                $properties['totalOrgs'] = null;
                goto after_totalOrgs;
            }

            $properties['totalOrgs'] = $value;

            after_totalOrgs:

            $value = $payload['disabled_orgs'] ?? null;

            if ($value === null) {
                $properties['disabledOrgs'] = null;
                goto after_disabledOrgs;
            }

            $properties['disabledOrgs'] = $value;

            after_disabledOrgs:

            $value = $payload['total_teams'] ?? null;

            if ($value === null) {
                $properties['totalTeams'] = null;
                goto after_totalTeams;
            }

            $properties['totalTeams'] = $value;

            after_totalTeams:

            $value = $payload['total_team_members'] ?? null;

            if ($value === null) {
                $properties['totalTeamMembers'] = null;
                goto after_totalTeamMembers;
            }

            $properties['totalTeamMembers'] = $value;

            after_totalTeamMembers:

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
                $properties['totalPages'] = null;
                goto after_totalPages;
            }

            $properties['totalPages'] = $value;

            after_totalPages:

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
                $properties['totalPulls'] = null;
                goto after_totalPulls;
            }

            $properties['totalPulls'] = $value;

            after_totalPulls:

            $value = $payload['merged_pulls'] ?? null;

            if ($value === null) {
                $properties['mergedPulls'] = null;
                goto after_mergedPulls;
            }

            $properties['mergedPulls'] = $value;

            after_mergedPulls:

            $value = $payload['mergeable_pulls'] ?? null;

            if ($value === null) {
                $properties['mergeablePulls'] = null;
                goto after_mergeablePulls;
            }

            $properties['mergeablePulls'] = $value;

            after_mergeablePulls:

            $value = $payload['unmergeable_pulls'] ?? null;

            if ($value === null) {
                $properties['unmergeablePulls'] = null;
                goto after_unmergeablePulls;
            }

            $properties['unmergeablePulls'] = $value;

            after_unmergeablePulls:

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
                $properties['totalRepos'] = null;
                goto after_totalRepos;
            }

            $properties['totalRepos'] = $value;

            after_totalRepos:

            $value = $payload['root_repos'] ?? null;

            if ($value === null) {
                $properties['rootRepos'] = null;
                goto after_rootRepos;
            }

            $properties['rootRepos'] = $value;

            after_rootRepos:

            $value = $payload['fork_repos'] ?? null;

            if ($value === null) {
                $properties['forkRepos'] = null;
                goto after_forkRepos;
            }

            $properties['forkRepos'] = $value;

            after_forkRepos:

            $value = $payload['org_repos'] ?? null;

            if ($value === null) {
                $properties['orgRepos'] = null;
                goto after_orgRepos;
            }

            $properties['orgRepos'] = $value;

            after_orgRepos:

            $value = $payload['total_pushes'] ?? null;

            if ($value === null) {
                $properties['totalPushes'] = null;
                goto after_totalPushes;
            }

            $properties['totalPushes'] = $value;

            after_totalPushes:

            $value = $payload['total_wikis'] ?? null;

            if ($value === null) {
                $properties['totalWikis'] = null;
                goto after_totalWikis;
            }

            $properties['totalWikis'] = $value;

            after_totalWikis:

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
                $properties['totalUsers'] = null;
                goto after_totalUsers;
            }

            $properties['totalUsers'] = $value;

            after_totalUsers:

            $value = $payload['admin_users'] ?? null;

            if ($value === null) {
                $properties['adminUsers'] = null;
                goto after_adminUsers;
            }

            $properties['adminUsers'] = $value;

            after_adminUsers:

            $value = $payload['suspended_users'] ?? null;

            if ($value === null) {
                $properties['suspendedUsers'] = null;
                goto after_suspendedUsers;
            }

            $properties['suspendedUsers'] = $value;

            after_suspendedUsers:

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
                $properties['totalDormantUsers'] = null;
                goto after_totalDormantUsers;
            }

            $properties['totalDormantUsers'] = $value;

            after_totalDormantUsers:

            $value = $payload['dormancy_threshold'] ?? null;

            if ($value === null) {
                $properties['dormancyThreshold'] = null;
                goto after_dormancyThreshold;
            }

            $properties['dormancyThreshold'] = $value;

            after_dormancyThreshold:

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

        $serverId = $object->serverId;

        if ($serverId === null) {
            goto after_serverId;
        }
        after_serverId:        $result['server_id'] = $serverId;

        
        $collectionDate = $object->collectionDate;

        if ($collectionDate === null) {
            goto after_collectionDate;
        }
        after_collectionDate:        $result['collection_date'] = $collectionDate;

        
        $schemaVersion = $object->schemaVersion;

        if ($schemaVersion === null) {
            goto after_schemaVersion;
        }
        after_schemaVersion:        $result['schema_version'] = $schemaVersion;

        
        $ghesVersion = $object->ghesVersion;

        if ($ghesVersion === null) {
            goto after_ghesVersion;
        }
        after_ghesVersion:        $result['ghes_version'] = $ghesVersion;

        
        $hostName = $object->hostName;

        if ($hostName === null) {
            goto after_hostName;
        }
        after_hostName:        $result['host_name'] = $hostName;

        
        $githubConnect = $object->githubConnect;

        if ($githubConnect === null) {
            goto after_githubConnect;
        }
        $githubConnect = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect($githubConnect);
        after_githubConnect:        $result['github_connect'] = $githubConnect;

        
        $gheStats = $object->gheStats;

        if ($gheStats === null) {
            goto after_gheStats;
        }
        $gheStats = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats($gheStats);
        after_gheStats:        $result['ghe_stats'] = $gheStats;

        
        $dormantUsers = $object->dormantUsers;

        if ($dormantUsers === null) {
            goto after_dormantUsers;
        }
        $dormantUsers = $this->serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers($dormantUsers);
        after_dormantUsers:        $result['dormant_users'] = $dormantUsers;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GithubConnect(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GithubConnect);
        $result = [];

        $featuresEnabled = $object->featuresEnabled;

        if ($featuresEnabled === null) {
            goto after_featuresEnabled;
        }
        static $featuresEnabledSerializer0;

        if ($featuresEnabledSerializer0 === null) {
            $featuresEnabledSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $featuresEnabled = $featuresEnabledSerializer0->serialize($featuresEnabled, $this);
        after_featuresEnabled:        $result['features_enabled'] = $featuresEnabled;


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

        $totalCommitComments = $object->totalCommitComments;

        if ($totalCommitComments === null) {
            goto after_totalCommitComments;
        }
        after_totalCommitComments:        $result['total_commit_comments'] = $totalCommitComments;

        
        $totalGistComments = $object->totalGistComments;

        if ($totalGistComments === null) {
            goto after_totalGistComments;
        }
        after_totalGistComments:        $result['total_gist_comments'] = $totalGistComments;

        
        $totalIssueComments = $object->totalIssueComments;

        if ($totalIssueComments === null) {
            goto after_totalIssueComments;
        }
        after_totalIssueComments:        $result['total_issue_comments'] = $totalIssueComments;

        
        $totalPullRequestComments = $object->totalPullRequestComments;

        if ($totalPullRequestComments === null) {
            goto after_totalPullRequestComments;
        }
        after_totalPullRequestComments:        $result['total_pull_request_comments'] = $totalPullRequestComments;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Gists(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Gists);
        $result = [];

        $totalGists = $object->totalGists;

        if ($totalGists === null) {
            goto after_totalGists;
        }
        after_totalGists:        $result['total_gists'] = $totalGists;

        
        $privateGists = $object->privateGists;

        if ($privateGists === null) {
            goto after_privateGists;
        }
        after_privateGists:        $result['private_gists'] = $privateGists;

        
        $publicGists = $object->publicGists;

        if ($publicGists === null) {
            goto after_publicGists;
        }
        after_publicGists:        $result['public_gists'] = $publicGists;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Hooks(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Hooks);
        $result = [];

        $totalHooks = $object->totalHooks;

        if ($totalHooks === null) {
            goto after_totalHooks;
        }
        after_totalHooks:        $result['total_hooks'] = $totalHooks;

        
        $activeHooks = $object->activeHooks;

        if ($activeHooks === null) {
            goto after_activeHooks;
        }
        after_activeHooks:        $result['active_hooks'] = $activeHooks;

        
        $inactiveHooks = $object->inactiveHooks;

        if ($inactiveHooks === null) {
            goto after_inactiveHooks;
        }
        after_inactiveHooks:        $result['inactive_hooks'] = $inactiveHooks;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Issues(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Issues);
        $result = [];

        $totalIssues = $object->totalIssues;

        if ($totalIssues === null) {
            goto after_totalIssues;
        }
        after_totalIssues:        $result['total_issues'] = $totalIssues;

        
        $openIssues = $object->openIssues;

        if ($openIssues === null) {
            goto after_openIssues;
        }
        after_openIssues:        $result['open_issues'] = $openIssues;

        
        $closedIssues = $object->closedIssues;

        if ($closedIssues === null) {
            goto after_closedIssues;
        }
        after_closedIssues:        $result['closed_issues'] = $closedIssues;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Milestones(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Milestones);
        $result = [];

        $totalMilestones = $object->totalMilestones;

        if ($totalMilestones === null) {
            goto after_totalMilestones;
        }
        after_totalMilestones:        $result['total_milestones'] = $totalMilestones;

        
        $openMilestones = $object->openMilestones;

        if ($openMilestones === null) {
            goto after_openMilestones;
        }
        after_openMilestones:        $result['open_milestones'] = $openMilestones;

        
        $closedMilestones = $object->closedMilestones;

        if ($closedMilestones === null) {
            goto after_closedMilestones;
        }
        after_closedMilestones:        $result['closed_milestones'] = $closedMilestones;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Orgs(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Orgs);
        $result = [];

        $totalOrgs = $object->totalOrgs;

        if ($totalOrgs === null) {
            goto after_totalOrgs;
        }
        after_totalOrgs:        $result['total_orgs'] = $totalOrgs;

        
        $disabledOrgs = $object->disabledOrgs;

        if ($disabledOrgs === null) {
            goto after_disabledOrgs;
        }
        after_disabledOrgs:        $result['disabled_orgs'] = $disabledOrgs;

        
        $totalTeams = $object->totalTeams;

        if ($totalTeams === null) {
            goto after_totalTeams;
        }
        after_totalTeams:        $result['total_teams'] = $totalTeams;

        
        $totalTeamMembers = $object->totalTeamMembers;

        if ($totalTeamMembers === null) {
            goto after_totalTeamMembers;
        }
        after_totalTeamMembers:        $result['total_team_members'] = $totalTeamMembers;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pages(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pages);
        $result = [];

        $totalPages = $object->totalPages;

        if ($totalPages === null) {
            goto after_totalPages;
        }
        after_totalPages:        $result['total_pages'] = $totalPages;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Pulls(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Pulls);
        $result = [];

        $totalPulls = $object->totalPulls;

        if ($totalPulls === null) {
            goto after_totalPulls;
        }
        after_totalPulls:        $result['total_pulls'] = $totalPulls;

        
        $mergedPulls = $object->mergedPulls;

        if ($mergedPulls === null) {
            goto after_mergedPulls;
        }
        after_mergedPulls:        $result['merged_pulls'] = $mergedPulls;

        
        $mergeablePulls = $object->mergeablePulls;

        if ($mergeablePulls === null) {
            goto after_mergeablePulls;
        }
        after_mergeablePulls:        $result['mergeable_pulls'] = $mergeablePulls;

        
        $unmergeablePulls = $object->unmergeablePulls;

        if ($unmergeablePulls === null) {
            goto after_unmergeablePulls;
        }
        after_unmergeablePulls:        $result['unmergeable_pulls'] = $unmergeablePulls;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Repos(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Repos);
        $result = [];

        $totalRepos = $object->totalRepos;

        if ($totalRepos === null) {
            goto after_totalRepos;
        }
        after_totalRepos:        $result['total_repos'] = $totalRepos;

        
        $rootRepos = $object->rootRepos;

        if ($rootRepos === null) {
            goto after_rootRepos;
        }
        after_rootRepos:        $result['root_repos'] = $rootRepos;

        
        $forkRepos = $object->forkRepos;

        if ($forkRepos === null) {
            goto after_forkRepos;
        }
        after_forkRepos:        $result['fork_repos'] = $forkRepos;

        
        $orgRepos = $object->orgRepos;

        if ($orgRepos === null) {
            goto after_orgRepos;
        }
        after_orgRepos:        $result['org_repos'] = $orgRepos;

        
        $totalPushes = $object->totalPushes;

        if ($totalPushes === null) {
            goto after_totalPushes;
        }
        after_totalPushes:        $result['total_pushes'] = $totalPushes;

        
        $totalWikis = $object->totalWikis;

        if ($totalWikis === null) {
            goto after_totalWikis;
        }
        after_totalWikis:        $result['total_wikis'] = $totalWikis;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️GheStats⚡️Users(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\GheStats\Users);
        $result = [];

        $totalUsers = $object->totalUsers;

        if ($totalUsers === null) {
            goto after_totalUsers;
        }
        after_totalUsers:        $result['total_users'] = $totalUsers;

        
        $adminUsers = $object->adminUsers;

        if ($adminUsers === null) {
            goto after_adminUsers;
        }
        after_adminUsers:        $result['admin_users'] = $adminUsers;

        
        $suspendedUsers = $object->suspendedUsers;

        if ($suspendedUsers === null) {
            goto after_suspendedUsers;
        }
        after_suspendedUsers:        $result['suspended_users'] = $suspendedUsers;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHubEnterpriseCloud⚡️Schema⚡️ServerStatistics⚡️DormantUsers(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHubEnterpriseCloud\Schema\ServerStatistics\DormantUsers);
        $result = [];

        $totalDormantUsers = $object->totalDormantUsers;

        if ($totalDormantUsers === null) {
            goto after_totalDormantUsers;
        }
        after_totalDormantUsers:        $result['total_dormant_users'] = $totalDormantUsers;

        
        $dormancyThreshold = $object->dormancyThreshold;

        if ($dormancyThreshold === null) {
            goto after_dormancyThreshold;
        }
        after_dormancyThreshold:        $result['dormancy_threshold'] = $dormancyThreshold;


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
