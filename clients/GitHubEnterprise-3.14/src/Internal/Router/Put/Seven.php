<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Put;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestMergeResult;
use ApiClients\Client\GitHubEnterprise\Schema\TeamMembership;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\Label>|Schema\BasicError */
    public function call(string $call, array $params, array $pathChunks): WithoutBody|Ok|EmptyObject|TeamMembership|ProtectedBranch|iterable|BasicError|PullRequestMergeResult|Json|GroupResponse|UserResponse
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($pathChunks[6] === '{org_id}') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->enableSelectedOrganizationGithubActionsEnterprise($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'organizations') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations') {
                                        return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setOrgAccessToSelfHostedRunnerGroupInEnterprise($params);
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners') {
                                        return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setSelfHostedRunnersInGroupForEnterprise($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/runners/{runner_id}/labels') {
                                        return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setCustomLabelsForSelfHostedRunnerForEnterprise($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'oidc') {
                            if ($pathChunks[5] === 'customization') {
                                if ($pathChunks[6] === 'sub') {
                                    if ($call === 'PUT /orgs/{org}/actions/oidc/customization/sub') {
                                        return $this->routers->internal🔀Router🔀Put🔀Oidc()->updateOidcCustomSubTemplateForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($pathChunks[6] === '{repository_id}') {
                                    if ($call === 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->enableSelectedRepositoryGithubActionsOrganization($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setRepoAccessToSelfHostedRunnerGroupInOrg($params);
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setSelfHostedRunnersInGroupForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'PUT /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setCustomLabelsForSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'PUT /orgs/{org}/actions/variables/{name}/repositories') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setSelectedReposForOrgVariable($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories') {
                                        return $this->routers->internal🔀Router🔀Put🔀Dependabot()->setSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($pathChunks[4] === 'teams') {
                            if ($pathChunks[5] === '{team_slug}') {
                                if ($pathChunks[6] === '{role_id}') {
                                    if ($call === 'PUT /orgs/{org}/organization-roles/teams/{team_slug}/{role_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Orgs()->assignTeamToOrgRole($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'users') {
                            if ($pathChunks[5] === '{username}') {
                                if ($pathChunks[6] === '{role_id}') {
                                    if ($call === 'PUT /orgs/{org}/organization-roles/users/{username}/{role_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Orgs()->assignUserToOrgRole($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'memberships') {
                                if ($pathChunks[6] === '{username}') {
                                    if ($call === 'PUT /orgs/{org}/teams/{team_slug}/memberships/{username}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Teams()->addOrUpdateMembershipForUserInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($pathChunks[6] === '{project_id}') {
                                    if ($call === 'PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Teams()->addOrUpdateProjectPermissionsInOrg($params);
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
                            if ($pathChunks[5] === 'permissions') {
                                if ($pathChunks[6] === 'access') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/access') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setWorkflowAccessToRepository($params);
                                    }
                                } elseif ($pathChunks[6] === 'selected-actions') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/selected-actions') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setAllowedActionsRepository($params);
                                    }
                                } elseif ($pathChunks[6] === 'workflow') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/workflow') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setGithubActionsDefaultWorkflowPermissionsRepository($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->createOrUpdateRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection') {
                                        return $this->routers->internal🔀Router🔀Put🔀Repos()->updateBranchProtection($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Dependabot()->createOrUpdateRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        return $this->routers->internal🔀Router🔀Put🔀Issues()->setLabels($params);
                                    }
                                } elseif ($pathChunks[6] === 'lock') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/lock') {
                                        return $this->routers->internal🔀Router🔀Put🔀Issues()->lock($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'merge') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
                                        return $this->routers->internal🔀Router🔀Put🔀Pulls()->merge($params);
                                    }
                                } elseif ($pathChunks[6] === 'update-branch') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch') {
                                        return $this->routers->internal🔀Router🔀Put🔀Pulls()->updateBranch($params);
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
                                    if ($call === 'PUT /scim/v2/enterprises/{enterprise}/Groups/{scim_group_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setInformationForProvisionedEnterpriseGroup($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'Users') {
                                if ($pathChunks[6] === '{scim_user_id}') {
                                    if ($call === 'PUT /scim/v2/enterprises/{enterprise}/Users/{scim_user_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setInformationForProvisionedEnterpriseUser($params);
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
