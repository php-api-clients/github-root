<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Put;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\EmptyObject;
use ApiClients\Client\GitHubAE\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubAE\Schema\ProtectedBranch;
use ApiClients\Client\GitHubAE\Schema\PullRequestMergeResult;
use ApiClients\Client\GitHubAE\Schema\TeamMembership;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Seven
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return WithoutBody|Schema\TeamMembership|Schema\EmptyObject|Schema\ProtectedBranch|iterable<int,Schema\Label>|Schema\BasicError|Schema\PullRequestMergeResult|Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json */
    public function call(string $call, array $params, array $pathChunks): WithoutBody|TeamMembership|EmptyObject|ProtectedBranch|iterable|BasicError|PullRequestMergeResult|Json
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
                                if ($pathChunks[6] === 'runners') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners') {
                                        return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setSelfHostedRunnersInGroupForEnterprise($params);
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
                                    if ($call === 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->enableSelectedRepositoryGithubActionsOrganization($params);
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
                                if ($pathChunks[6] === 'selected-actions') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/selected-actions') {
                                        return $this->routers->internal🔀Router🔀Put🔀Actions()->setAllowedActionsRepository($params);
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
            }
        }

        throw new InvalidArgumentException();
    }
}
