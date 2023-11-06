<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters;
use ApiClients\Client\GitHubEnterprise\Schema\Autolink;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\BranchWithProtection;
use ApiClients\Client\GitHubEnterprise\Schema\CheckRun;
use ApiClients\Client\GitHubEnterprise\Schema\CheckSuite;
use ApiClients\Client\GitHubEnterprise\Schema\CodeownersErrors;
use ApiClients\Client\GitHubEnterprise\Schema\Commit;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComment;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComparison;
use ApiClients\Client\GitHubEnterprise\Schema\ContentDirectory;
use ApiClients\Client\GitHubEnterprise\Schema\ContentFile;
use ApiClients\Client\GitHubEnterprise\Schema\ContentSubmodule;
use ApiClients\Client\GitHubEnterprise\Schema\ContentSymlink;
use ApiClients\Client\GitHubEnterprise\Schema\DependabotPublicKey;
use ApiClients\Client\GitHubEnterprise\Schema\DeployKey;
use ApiClients\Client\GitHubEnterprise\Schema\Deployment;
use ApiClients\Client\GitHubEnterprise\Schema\Environment;
use ApiClients\Client\GitHubEnterprise\Schema\Hook;
use ApiClients\Client\GitHubEnterprise\Schema\Issue;
use ApiClients\Client\GitHubEnterprise\Schema\Label;
use ApiClients\Client\GitHubEnterprise\Schema\Milestone;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationDependabotSecret;
use ApiClients\Client\GitHubEnterprise\Schema\ParticipationStats;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequest;
use ApiClients\Client\GitHubEnterprise\Schema\Release;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Runner;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterprise\Schema\TeamRepository;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\PreReceiveEnvironmentDownloadStatus|Schema\ActionsCacheUsageOrgEnterprise|Schema\ActionsCacheUsagePolicyEnterprise|Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok|Schema\SelectedActions|Schema\RunnerGroupsEnterprise|iterable<int,Schema\RunnerApplication>|Schema\Runner|Schema\AdvancedSecurityActiveCommitters|Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|Schema\ActionsGetDefaultWorkflowPermissions|Schema\RunnerGroupsOrg|Schema\ActionsPublicKey|Schema\OrganizationActionsSecret|Schema\DependabotPublicKey|Schema\OrganizationDependabotSecret|Schema\WebhookConfig|iterable<int,Schema\HookDeliveryItem>|WithoutBody|iterable<int,Schema\MinimalRepository>|iterable<int,Schema\TeamDiscussion>|iterable<int,Schema\SimpleUser>|iterable<int,Schema\TeamProject>|iterable<int,Schema\Team>|Schema\ProjectCollaboratorPermission|Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|Schema\ActionsRepositoryPermissions|Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok|Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|Schema\Autolink|Schema\BranchWithProtection|Schema\BasicError|Schema\CheckRun|Schema\CheckSuite|iterable<int,Schema\CodeScanningAlertItems>|iterable<int,Schema\CodeScanningAnalysis>|Schema\CodeownersErrors|Schema\CommitComment|Schema\Commit|Schema\CommitComparison|Schema\ContentDirectory|Schema\ContentFile|Schema\ContentSymlink|Schema\ContentSubmodule|Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|Schema\Deployment|Schema\Environment|Schema\Hook|iterable<int,Schema\IssueComment>|iterable<int,Schema\IssueEvent>|Schema\Issue|Schema\DeployKey|Schema\Label|Schema\Milestone|iterable<int,Schema\PageBuild>|Schema\RepositoryPreReceiveHook|iterable<int,Schema\PullRequestReviewComment>|Schema\PullRequest|Schema\Release|iterable<int,Schema\Operations\Repos\ListCacheInfo\Response\ApplicationJson\Ok>|iterable<int,Schema\SecretScanningAlert>|iterable<int,int>|Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|iterable<int,Schema\CommitActivity>|Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|iterable<int,Schema\ContributorActivity>|Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|Schema\ParticipationStats|iterable<int,Schema\TagProtection>|Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|iterable<int,Schema\TeamDiscussionComment>|iterable<int,Schema\Reaction>|Schema\TeamRepository|iterable<int,Schema\Event> */
    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus|ActionsCacheUsageOrgEnterprise|ActionsCacheUsagePolicyEnterprise|Ok|SelectedActions|RunnerGroupsEnterprise|iterable|Runner|AdvancedSecurityActiveCommitters|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|ActionsGetDefaultWorkflowPermissions|RunnerGroupsOrg|ActionsPublicKey|OrganizationActionsSecret|DependabotPublicKey|OrganizationDependabotSecret|WebhookConfig|WithoutBody|ProjectCollaboratorPermission|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|ActionsRepositoryPermissions|Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|Autolink|BranchWithProtection|BasicError|CheckRun|CheckSuite|CodeownersErrors|CommitComment|Commit|CommitComparison|ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|Deployment|Environment|Hook|Issue|DeployKey|Label|Milestone|RepositoryPreReceiveHook|PullRequest|Release|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|ParticipationStats|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|TeamRepository
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
                                    return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getDownloadStatusForPreReceiveEnvironment($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'cache') {
                            if ($pathChunks[5] === 'usage') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/cache/usage') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getActionsCacheUsageForEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === 'usage-policy') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/cache/usage-policy') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getActionsCacheUsagePolicyForEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/permissions/organizations') {
                                    return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listSelectedOrganizationsEnabledGithubActionsEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/permissions/selected-actions') {
                                    return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAllowedActionsEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getSelfHostedRunnerGroupForEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'downloads') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/runners/downloads') {
                                    return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listRunnerApplicationsForEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/runners/{runner_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getSelfHostedRunnerForEnterprise($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'advanced-security') {
                                if ($call === 'GET /enterprises/{enterprise}/settings/billing/advanced-security') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getGithubAdvancedSecurityBillingGhe($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'cache') {
                            if ($pathChunks[5] === 'usage') {
                                if ($call === 'GET /orgs/{org}/actions/cache/usage') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getActionsCacheUsageForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'usage-by-repository') {
                                if ($call === 'GET /orgs/{org}/actions/cache/usage-by-repository') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getActionsCacheUsageByRepoForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/repositories') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/selected-actions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getAllowedActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'workflow') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/workflow') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getGithubActionsDefaultWorkflowPermissionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getSelfHostedRunnerGroupForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'downloads') {
                                if ($call === 'GET /orgs/{org}/actions/runners/downloads') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRunnerApplicationsForOrg($params);
                                }
                            } elseif ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getSelfHostedRunnerForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/public-key') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/dependabot/secrets/public-key') {
                                    return $this->routers->internal🔀Router🔀Get🔀Dependabot()->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/dependabot/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Dependabot()->getOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/config') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->getWebhookConfigForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'deliveries') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries') {
                                    return $this->routers->internal🔀Router🔀Get🔀Orgs()->listWebhookDeliveries($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'archive') {
                                if ($call === 'GET /orgs/{org}/migrations/{migration_id}/archive') {
                                    return $this->routers->internal🔀Router🔀Get🔀Migrations()->downloadArchiveForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'repositories') {
                                if ($call === 'GET /orgs/{org}/migrations/{migration_id}/repositories') {
                                    return $this->routers->internal🔀Router🔀Get🔀Migrations()->listReposForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'advanced-security') {
                                if ($call === 'GET /orgs/{org}/settings/billing/advanced-security') {
                                    return $this->routers->internal🔀Router🔀Get🔀Billing()->getGithubAdvancedSecurityBillingOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listDiscussionsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'members') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/members') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listMembersInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listProjectsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listReposInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'teams') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/teams') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listChildInOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'permission') {
                                if ($call === 'GET /projects/{project_id}/collaborators/{username}/permission') {
                                    return $this->routers->internal🔀Router🔀Get🔀Projects()->getPermissionForUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'artifacts') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listArtifactsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'permissions') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/permissions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->getGithubActionsPermissionsRepository($params);
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runners') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listSelfHostedRunnersForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runs') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listWorkflowRunsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/secrets') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRepoSecrets($params);
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/workflows') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listRepoWorkflows($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'assignees') {
                            if ($pathChunks[5] === '{assignee}') {
                                if ($call === 'GET /repos/{owner}/{repo}/assignees/{assignee}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->checkUserCanBeAssigned($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($pathChunks[5] === '{autolink_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/autolinks/{autolink_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getAutolink($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getBranch($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Checks()->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === '{check_suite_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Checks()->getSuite($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts') {
                                    return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses') {
                                    return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listRecentAnalyses($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'codeowners') {
                            if ($pathChunks[5] === 'errors') {
                                if ($call === 'GET /repos/{owner}/{repo}/codeowners/errors') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->codeownersErrors($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->checkCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommit($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'compare') {
                            if ($pathChunks[5] === '{basehead}') {
                                if ($call === 'GET /repos/{owner}/{repo}/compare/{basehead}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->compareCommits($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'GET /repos/{owner}/{repo}/contents/{path}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getContent($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/dependabot/secrets') {
                                    return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listRepoSecrets($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/comments') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->listCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/events') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->listEventsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($pathChunks[5] === '{key_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/keys/{key_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/labels/{name}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->getLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Issues()->getMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'GET /repos/{owner}/{repo}/pages/builds') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->listPagesBuilds($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($pathChunks[5] === '{pre_receive_hook_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getPreReceiveHookForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/comments') {
                                    return $this->routers->internal🔀Router🔀Get🔀Pulls()->listReviewCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Pulls()->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($pathChunks[5] === '{dir}') {
                                if ($call === 'GET /repos/{owner}/{repo}/readme/{dir}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getReadmeInDirectory($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/latest') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getLatestRelease($params);
                                }
                            } elseif ($pathChunks[5] === '{release_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'replicas') {
                            if ($pathChunks[5] === 'caches') {
                                if ($call === 'GET /repos/{owner}/{repo}/replicas/caches') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->listCacheInfo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts') {
                                    return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listAlertsForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'stats') {
                            if ($pathChunks[5] === 'code_frequency') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/code_frequency') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCodeFrequencyStats($params);
                                }
                            } elseif ($pathChunks[5] === 'commit_activity') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/commit_activity') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommitActivityStats($params);
                                }
                            } elseif ($pathChunks[5] === 'contributors') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/contributors') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getContributorsStats($params);
                                }
                            } elseif ($pathChunks[5] === 'participation') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/participation') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getParticipationStats($params);
                                }
                            } elseif ($pathChunks[5] === 'punch_card') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/punch_card') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->getPunchCardStats($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($call === 'GET /repos/{owner}/{repo}/tags/protection') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->listTagProtection($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tarball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/tarball/{ref}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->downloadTarballArchive($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'zipball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/zipball/{ref}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Repos()->downloadZipballArchive($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repositories') {
                if ($pathChunks[2] === '{repository_id}') {
                    if ($pathChunks[3] === 'environments') {
                        if ($pathChunks[4] === '{environment_name}') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets') {
                                    return $this->routers->internal🔀Router🔀Get🔀Actions()->listEnvironmentSecrets($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->listDiscussionCommentsLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    return $this->routers->internal🔀Router🔀Get🔀Reactions()->listForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'GET /teams/{team_id}/repos/{owner}/{repo}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Teams()->checkPermissionsForRepoLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'orgs') {
                            if ($pathChunks[5] === '{org}') {
                                if ($call === 'GET /users/{username}/events/orgs/{org}') {
                                    return $this->routers->internal🔀Router🔀Get🔀Activity()->listOrgEventsForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
