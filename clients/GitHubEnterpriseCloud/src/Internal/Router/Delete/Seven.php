<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Delete;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Issue;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestSimple;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): WithoutBody|Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|CodeScanningAnalysisDeletion|Issue|BasicError|PullRequestSimple
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($pathChunks[6] === '{org_id}') {
                                    if ($call === 'DELETE /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->disableSelectedOrganizationGithubActionsEnterprise($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}/labels') {
                                        return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->removeAllCustomLabelsFromSelfHostedRunnerForEnterprise($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($pathChunks[6] === '{repository_id}') {
                                    if ($call === 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->disableSelectedRepositoryGithubActionsOrganization($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->removeAllCustomLabelsFromSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'codespaces') {
                                if ($pathChunks[6] === '{codespace_name}') {
                                    if ($call === 'DELETE /orgs/{org}/members/{username}/codespaces/{codespace_name}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Codespaces()->deleteFromOrganization($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($pathChunks[4] === 'teams') {
                            if ($pathChunks[5] === '{team_slug}') {
                                if ($pathChunks[6] === '{role_id}') {
                                    if ($call === 'DELETE /orgs/{org}/organization-roles/teams/{team_slug}/{role_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Orgs()->revokeOrgRoleTeam($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'users') {
                            if ($pathChunks[5] === '{username}') {
                                if ($pathChunks[6] === '{role_id}') {
                                    if ($call === 'DELETE /orgs/{org}/organization-roles/users/{username}/{role_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Orgs()->revokeOrgRoleUser($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Teams()->deleteDiscussionInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'memberships') {
                                if ($pathChunks[6] === '{username}') {
                                    if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Teams()->removeMembershipForUserInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($pathChunks[6] === '{project_id}') {
                                    if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Teams()->removeProjectInOrg($params);
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
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteArtifact($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'caches') {
                                if ($pathChunks[6] === '{cache_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/caches/{cache_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteActionsCacheById($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($pathChunks[6] === '{runner_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteSelfHostedRunnerFromRepo($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteWorkflowRun($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteRepoSecret($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'variables') {
                                if ($pathChunks[6] === '{name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/actions/variables/{name}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteRepoVariable($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteBranchProtection($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'bypass-responses') {
                            if ($pathChunks[5] === 'secret-scanning') {
                                if ($pathChunks[6] === '{bypass_response_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/bypass-responses/secret-scanning/{bypass_response_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀SecretScanning()->dismissBypassResponse($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'analyses') {
                                if ($pathChunks[6] === '{analysis_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀CodeScanning()->deleteAnalysis($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/codespaces/secrets/{secret_name}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Codespaces()->deleteRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Dependabot()->deleteRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'git') {
                            if ($pathChunks[5] === 'refs') {
                                if ($pathChunks[6] === '{ref}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/git/refs/{ref}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Git()->deleteRef($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Issues()->deleteComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'assignees') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Issues()->removeAssignees($params);
                                    }
                                } elseif ($pathChunks[6] === 'labels') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Issues()->removeAllLabels($params);
                                    }
                                } elseif ($pathChunks[6] === 'lock') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Issues()->unlock($params);
                                    }
                                } elseif ($pathChunks[6] === 'sub_issue') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/sub_issue') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Issues()->removeSubIssue($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($pathChunks[6] === '{comment_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Pulls()->deleteReviewComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'requested_reviewers') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Pulls()->removeRequestedReviewers($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'assets') {
                                if ($pathChunks[6] === '{asset_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteReleaseAsset($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($pathChunks[5] === 'protection') {
                                if ($pathChunks[6] === '{tag_protection_id}') {
                                    if ($call === 'DELETE /repos/{owner}/{repo}/tags/protection/{tag_protection_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteTagProtection($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'enterprises') {
                        if ($pathChunks[4] === '{enterprise}') {
                            if ($pathChunks[5] === 'Groups') {
                                if ($pathChunks[6] === '{scim_group_id}') {
                                    if ($call === 'DELETE /scim/v2/enterprises/{enterprise}/Groups/{scim_group_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deleteScimGroupFromEnterprise($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'Users') {
                                if ($pathChunks[6] === '{scim_user_id}') {
                                    if ($call === 'DELETE /scim/v2/enterprises/{enterprise}/Users/{scim_user_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deleteUserFromEnterprise($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'organizations') {
                        if ($pathChunks[4] === '{org}') {
                            if ($pathChunks[5] === 'Users') {
                                if ($pathChunks[6] === '{scim_user_id}') {
                                    if ($call === 'DELETE /scim/v2/organizations/{org}/Users/{scim_user_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Scim()->deleteUserFromOrg($params);
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
                                    if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Teams()->deleteDiscussionCommentLegacy($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($pathChunks[6] === '{repository_id}') {
                                    if ($call === 'DELETE /user/codespaces/secrets/{secret_name}/repositories/{repository_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Codespaces()->removeRepositoryForSecretForAuthenticatedUser($params);
                                    }
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'repos') {
                            if ($pathChunks[5] === '{repo_name}') {
                                if ($pathChunks[6] === 'lock') {
                                    if ($call === 'DELETE /user/migrations/{migration_id}/repos/{repo_name}/lock') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Migrations()->unlockRepoForAuthenticatedUser($params);
                                    }
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($pathChunks[5] === 'versions') {
                                if ($pathChunks[6] === '{package_version_id}') {
                                    if ($call === 'DELETE /user/packages/{package_type}/{package_name}/versions/{package_version_id}') {
                                        return $this->routers->internal🔀Router🔀Delete🔀Packages()->deletePackageVersionForAuthenticatedUser($params);
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
