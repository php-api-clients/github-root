<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\Label>|Schema\BasicError */
    public function call(string $call, array $params, array $pathChunks): WithoutBody|Ok|Json|iterable|BasicError|PullRequestReview
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->removeRepoAccessToSelfHostedRunnerGroupInOrg($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($pathChunks[7] === '{runner_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->removeSelfHostedRunnerFromGroupForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels/{name}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->removeCustomLabelFromSelfHostedRunnerForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->removeSelectedRepoFromOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/variables/{name}/repositories/{repository_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->removeSelectedRepoFromOrgVariable($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Codespaces()->removeSelectedRepoFromOrgSecret($params);
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
                                            return $this->routers->internal🔀Router🔀Delete🔀Dependabot()->removeSelectedRepoFromOrgSecret($params);
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
                                            return $this->routers->internal🔀Router🔀Delete🔀Migrations()->unlockRepoForOrg($params);
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
                                        if ($call === 'DELETE /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Packages()->deletePackageVersionForOrg($params);
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
                                            return $this->routers->internal🔀Router🔀Delete🔀Teams()->removeRepoInOrg($params);
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
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->removeAllCustomLabelsFromSelfHostedRunnerForRepo($params);
                                        }
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteWorkflowRunLogs($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->deletePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->removeStatusCheckProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'codeql') {
                                if ($pathChunks[6] === 'databases') {
                                    if ($pathChunks[7] === '{language}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀CodeScanning()->deleteCodeqlDatabase($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Reactions()->deleteForCommitComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($pathChunks[7] === '{branch_policy_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteDeploymentBranchPolicy($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'deployment_protection_rules') {
                                    if ($pathChunks[7] === '{protection_rule_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Repos()->disableDeploymentProtectionRule($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'secrets') {
                                    if ($pathChunks[7] === '{secret_name}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/secrets/{secret_name}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteEnvironmentSecret($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'variables') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/variables/{name}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteEnvironmentVariable($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Issues()->removeLabel($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Reactions()->deleteForIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Pulls()->deletePendingReview($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Reactions()->deleteForRelease($params);
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
                                        if ($call === 'DELETE /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                            return $this->routers->internal🔀Router🔀Delete🔀Packages()->deletePackageVersionForUser($params);
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
