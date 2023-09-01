<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Put;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestReview;
use InvalidArgumentException;

final class Eight
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}| */
    public function call(string $call, array $params, array $pathChunks): PullRequestReview|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'organizations') {
                                    if ($pathChunks[7] === '{org_id}') {
                                        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
                                            return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->addOrgAccessToSelfHostedRunnerGroupInEnterprise($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($pathChunks[7] === '{runner_id}') {
                                        if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->addSelfHostedRunnerToGroupForEnterprise($params);
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
                                        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
                                            return $this->routers->internal🔀Router🔀Put🔀Actions()->addRepoAccessToSelfHostedRunnerGroupInOrg($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($pathChunks[7] === '{runner_id}') {
                                        if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            return $this->routers->internal🔀Router🔀Put🔀Actions()->addSelfHostedRunnerToGroupForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
                                            return $this->routers->internal🔀Router🔀Put🔀Actions()->addSelectedRepoToOrgSecret($params);
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
                                        if ($call === 'PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            return $this->routers->internal🔀Router🔀Put🔀Teams()->addOrUpdateRepoPermissionsInOrg($params);
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
                            if ($pathChunks[5] === 'workflows') {
                                if ($pathChunks[6] === '{workflow_id}') {
                                    if ($pathChunks[7] === 'disable') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable') {
                                            return $this->routers->internal🔀Router🔀Put🔀Actions()->disableWorkflow($params);
                                        }
                                    } elseif ($pathChunks[7] === 'enable') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable') {
                                            return $this->routers->internal🔀Router🔀Put🔀Actions()->enableWorkflow($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            return $this->routers->internal🔀Router🔀Put🔀Pulls()->updateReview($params);
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
