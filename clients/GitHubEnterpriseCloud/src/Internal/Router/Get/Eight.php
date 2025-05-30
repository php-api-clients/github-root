<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsSecret;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsVariable;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiInsightsSummaryStats;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAutofix;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\DeploymentProtectionRule;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\DeploymentStatus;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OidcCustomSubRepo;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PackageVersion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReview;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RulesetVersion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowUsage;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\ApiInsightsRouteStats>||Observable<Schema\ApiInsightsTimeStats>|Observable<Schema\TeamDiscussionComment>|Observable<Schema\Reaction>|Observable<Schema\EnvironmentApprovals>|Observable<Schema\PendingDeployment>|Observable<Schema\CodeScanningAlertInstance>|Observable<Schema\SecretScanningLocation>|WithoutBody */
    public function call(string $call, array $params, array $pathChunks): iterable|ApiInsightsSummaryStats|PackageVersion|TeamRepository|WithoutBody|OidcCustomSubRepo|Ok|Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|WorkflowRunUsage|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|WorkflowUsage|ProtectedBranchAdminEnforced|ProtectedBranchPullRequestReview|StatusCheckPolicy|BranchRestrictionPolicy|CodeScanningAutofix|CodeScanningCodeqlDatabase|CodeScanningVariantAnalysis|DeploymentStatus|DeploymentBranchPolicy|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|DeploymentProtectionRule|ActionsPublicKey|ActionsSecret|ActionsVariable|HookDelivery|PullRequestReview|RulesetVersion
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'insights') {
                        if ($pathChunks[4] === 'api') {
                            if ($pathChunks[5] === 'route-stats') {
                                if ($pathChunks[6] === '{actor_type}') {
                                    if ($pathChunks[7] === '{actor_id}') {
                                        if ($call === 'GET /orgs/{org}/insights/api/route-stats/{actor_type}/{actor_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀ApiInsights()->getRouteStatsByActor($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'summary-stats') {
                                if ($pathChunks[6] === 'users') {
                                    if ($pathChunks[7] === '{user_id}') {
                                        if ($call === 'GET /orgs/{org}/insights/api/summary-stats/users/{user_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀ApiInsights()->getSummaryStatsByUser($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === '{actor_type}') {
                                    if ($pathChunks[7] === '{actor_id}') {
                                        if ($call === 'GET /orgs/{org}/insights/api/summary-stats/{actor_type}/{actor_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀ApiInsights()->getSummaryStatsByActor($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'time-stats') {
                                if ($pathChunks[6] === 'users') {
                                    if ($pathChunks[7] === '{user_id}') {
                                        if ($call === 'GET /orgs/{org}/insights/api/time-stats/users/{user_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀ApiInsights()->getTimeStatsByUser($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === '{actor_type}') {
                                    if ($pathChunks[7] === '{actor_id}') {
                                        if ($call === 'GET /orgs/{org}/insights/api/time-stats/{actor_type}/{actor_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀ApiInsights()->getTimeStatsByActor($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($pathChunks[7] === '{package_version_id}') {
                                        if ($call === 'GET /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Packages()->getPackageVersionForOrganization($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($pathChunks[7] === 'comments') {
                                        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments') {
                                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listDiscussionCommentsInOrg($params);
                                        }
                                    } elseif ($pathChunks[7] === 'reactions') {
                                        if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions') {
                                            return $this->routers->internal🔀Router🔀Get🔀Reactions()->listForTeamDiscussionInOrg($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($pathChunks[6] === '{owner}') {
                                    if ($pathChunks[7] === '{repo}') {
                                        if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Teams()->checkPermissionsForRepoInOrg($params);
                                        }
                                    }
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
                                if ($pathChunks[6] === '{artifact_id}') {
                                    if ($pathChunks[7] === '{archive_format}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->downloadArtifact($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'jobs') {
                                if ($pathChunks[6] === '{job_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->downloadJobLogsForWorkflowRun($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'oidc') {
                                if ($pathChunks[6] === 'customization') {
                                    if ($pathChunks[7] === 'sub') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/oidc/customization/sub') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getCustomOidcSubClaimForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->listLabelsForSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'approvals') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/approvals') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getReviewsForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'artifacts') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->listWorkflowRunArtifacts($params);
                                        }
                                    } elseif ($pathChunks[7] === 'jobs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->listJobsForWorkflowRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'logs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->downloadWorkflowRunLogs($params);
                                        }
                                    } elseif ($pathChunks[7] === 'pending_deployments') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getPendingDeploymentsForRun($params);
                                        }
                                    } elseif ($pathChunks[7] === 'timing') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/runs/{run_id}/timing') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getWorkflowRunUsage($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($pathChunks[6] === '{workflow_id}') {
                                    if ($pathChunks[7] === 'runs') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->listWorkflowRuns($params);
                                        }
                                    } elseif ($pathChunks[7] === 'timing') {
                                        if ($call === 'GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getWorkflowUsage($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getPullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getStatusChecksProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'autofix') {
                                        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/autofix') {
                                            return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->getAutofix($params);
                                        }
                                    } elseif ($pathChunks[7] === 'instances') {
                                        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
                                            return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertInstances($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'codeql') {
                                if ($pathChunks[6] === 'databases') {
                                    if ($pathChunks[7] === '{language}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}') {
                                            return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->getCodeqlDatabase($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'variant-analyses') {
                                    if ($pathChunks[7] === '{codeql_variant_analysis_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/codeql/variant-analyses/{codeql_variant_analysis_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->getVariantAnalysis($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($pathChunks[6] === 'statuses') {
                                    if ($pathChunks[7] === '{status_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getDeploymentStatus($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($pathChunks[7] === '{branch_policy_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getDeploymentBranchPolicy($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'deployment_protection_rules') {
                                    if ($pathChunks[7] === 'apps') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/apps') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->listCustomDeploymentRuleIntegrations($params);
                                        }
                                    } elseif ($pathChunks[7] === '{protection_rule_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getCustomDeploymentProtectionRule($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'secrets') {
                                    if ($pathChunks[7] === 'public-key') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/secrets/public-key') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getEnvironmentPublicKey($params);
                                        }
                                    } elseif ($pathChunks[7] === '{secret_name}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/secrets/{secret_name}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getEnvironmentSecret($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'variables') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}/variables/{name}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Actions()->getEnvironmentVariable($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($pathChunks[6] === 'deliveries') {
                                    if ($pathChunks[7] === '{delivery_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getWebhookDelivery($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions') {
                                            return $this->routers->internal🔀Router🔀Get🔀Reactions()->listForIssueComment($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'assignees') {
                                    if ($pathChunks[7] === '{assignee}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Issues()->checkUserCanBeAssignedToIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions') {
                                            return $this->routers->internal🔀Router🔀Get🔀Reactions()->listForPullRequestReviewComment($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Pulls()->getReview($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($pathChunks[5] === '{ruleset_id}') {
                                if ($pathChunks[6] === 'history') {
                                    if ($pathChunks[7] === '{version_id}') {
                                        if ($call === 'GET /repos/{owner}/{repo}/rulesets/{ruleset_id}/history/{version_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getRepoRulesetVersion($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($pathChunks[6] === '{alert_number}') {
                                    if ($pathChunks[7] === 'locations') {
                                        if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations') {
                                            return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listLocationsForAlert($params);
                                        }
                                    }
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
                                if ($pathChunks[6] === '{comment_number}') {
                                    if ($pathChunks[7] === 'reactions') {
                                        if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                            return $this->routers->internal🔀Router🔀Get🔀Reactions()->listForTeamDiscussionCommentLegacy($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($pathChunks[6] === 'versions') {
                                    if ($pathChunks[7] === '{package_version_id}') {
                                        if ($call === 'GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            return $this->routers->internal🔀Router🔀Get🔀Packages()->getPackageVersionForUser($params);
                                        }
                                    }
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
