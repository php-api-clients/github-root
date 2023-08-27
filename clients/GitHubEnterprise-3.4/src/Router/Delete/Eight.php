<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestReview;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}||iterable<Schema\Label>|Schema\BasicError */
    public function call(string $call, array $params, array $pathChunks): Ok|Json|iterable|BasicError|PullRequestReview
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'organizations') {
                                    if ($pathChunks[7] === '{org_id}') {
                                        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
                                            return $this->routers->router🔀Delete🔀EnterpriseAdmin()->removeOrgAccessToSelfHostedRunnerGroupInEnterprise($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($pathChunks[7] === '{runner_id}') {
                                        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            return $this->routers->router🔀Delete🔀EnterpriseAdmin()->removeSelfHostedRunnerFromGroupForEnterprise($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}/labels/{name}') {
                                            return $this->routers->router🔀Delete🔀EnterpriseAdmin()->removeCustomLabelFromSelfHostedRunnerForEnterprise($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
                                            return $this->routers->router🔀Delete🔀Actions()->removeRepoAccessToSelfHostedRunnerGroupInOrg($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($pathChunks[7] === '{runner_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            return $this->routers->router🔀Delete🔀Actions()->removeSelfHostedRunnerFromGroupForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels/{name}') {
                                            return $this->routers->router🔀Delete🔀Actions()->removeCustomLabelFromSelfHostedRunnerForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
                                            return $this->routers->router🔀Delete🔀Actions()->removeSelectedRepoFromOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}') {
                                            return $this->routers->router🔀Delete🔀Dependabot()->removeSelectedRepoFromOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'repos') {
                                if ($pathChunks[6] === '{repo_name}') {
                                    if ($pathChunks[7] === 'lock') {
                                        if ($call === 'DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock') {
                                            return $this->routers->router🔀Delete🔀Migrations()->unlockRepoForOrg($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'repos') {
                                if ($pathChunks[6] === '{owner}') {
                                    if ($pathChunks[7] === '{repo}') {
                                        if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            return $this->routers->router🔀Delete🔀Teams()->removeRepoInOrg($params);
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
                            if ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($pathChunks[7] === 'labels') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels') {
                                            return $this->routers->router🔀Delete🔀Actions()->removeAllCustomLabelsFromSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            return $this->routers->router🔀Delete🔀Actions()->deleteWorkflowRunLogs($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            return $this->routers->router🔀Delete🔀Repos()->deleteAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            return $this->routers->router🔀Delete🔀Repos()->deletePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            return $this->routers->router🔀Delete🔀Repos()->deleteCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            return $this->routers->router🔀Delete🔀Repos()->removeStatusCheckProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            return $this->routers->router🔀Delete🔀Repos()->deleteAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}') {
                                            return $this->routers->router🔀Delete🔀Reactions()->deleteForCommitComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($pathChunks[7] === '{branch_policy_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            return $this->routers->router🔀Delete🔀Repos()->deleteDeploymentBranchPolicy($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}') {
                                            return $this->routers->router🔀Delete🔀Issues()->removeLabel($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}') {
                                            return $this->routers->router🔀Delete🔀Reactions()->deleteForIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            return $this->routers->router🔀Delete🔀Pulls()->deletePendingReview($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}') {
                                            return $this->routers->router🔀Delete🔀Reactions()->deleteForRelease($params);
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
