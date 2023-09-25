<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Get;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHubAE\Schema\DeploymentStatus;
use ApiClients\Client\GitHubAE\Schema\HookDelivery;
use ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHubAE\Schema\PullRequestReview;
use ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHubAE\Schema\TeamRepository;
use ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHubAE\Schema\WorkflowUsage;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\TeamDiscussionComment>|Observable<Schema\Reaction>|Schema\TeamRepository|array{code:int}|array{code:int,location:string}||Observable<Schema\CodeScanningAlertInstance>|Schema\HookDelivery|Observable<Schema\SecretScanningLocation> */
    public function call(string $call, array $params, array $pathChunks): iterable|TeamRepository|Json|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|WorkflowRunUsage|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|WorkflowUsage|ProtectedBranchAdminEnforced|ProtectedBranchPullRequestReview|StatusCheckPolicy|BranchRestrictionPolicy|DeploymentStatus|DeploymentBranchPolicy|HookDelivery|PullRequestReview
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
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
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'artifacts') {
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
                                    if ($pathChunks[7] === 'instances') {
                                        if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances') {
                                            return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertInstances($params);
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
            }
        }

        throw new InvalidArgumentException();
    }
}
