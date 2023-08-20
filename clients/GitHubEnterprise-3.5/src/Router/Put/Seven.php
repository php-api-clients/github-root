<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestMergeResult;
use ApiClients\Client\GitHubEnterprise\Schema\TeamMembership;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Seven
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}||(Schema\TeamMembership|array{code: int})|(Schema\EmptyObject|(iterable<Schema\Label>|Schema\BasicError) */
    public function call(string $call, array $params, array $pathChunks): Ok|TeamMembership|EmptyObject|ProtectedBranch|iterable|BasicError|PullRequestMergeResult|Json
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($pathChunks[6] === '{org_id}') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                            $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\EnterpriseAdmin::class]->enableSelectedOrganizationGithubActionsEnterprise($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'organizations') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                            $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\EnterpriseAdmin::class]->setOrgAccessToSelfHostedRunnerGroupInEnterprise($params);
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                            $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\EnterpriseAdmin::class]->setSelfHostedRunnersInGroupForEnterprise($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'PUT /enterprises/{enterprise}/actions/runners/{runner_id}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                            $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\EnterpriseAdmin::class]->setCustomLabelsForSelfHostedRunnerForEnterprise($params);
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
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->enableSelectedRepositoryGithubActionsOrganization($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->setRepoAccessToSelfHostedRunnerGroupInOrg($params);
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($call === 'PUT /orgs/{org}/actions/runner-groups/{runner_group_id}/runners') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->setSelfHostedRunnersInGroupForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'PUT /orgs/{org}/actions/runners/{runner_id}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->setCustomLabelsForSelfHostedRunnerForOrg($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}/repositories') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->setSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Put\Dependabot::class] = new Router\Put\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Dependabot::class]->setSelectedReposForOrgSecret($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'memberships') {
                                if ($pathChunks[6] === '{username}') {
                                    if ($call === 'PUT /orgs/{org}/teams/{team_slug}/memberships/{username}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                            $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Teams::class]->addOrUpdateMembershipForUserInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($pathChunks[6] === '{project_id}') {
                                    if ($call === 'PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                            $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Teams::class]->addOrUpdateProjectPermissionsInOrg($params);
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
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->setWorkflowAccessToRepository($params);
                                    }
                                } elseif ($pathChunks[6] === 'selected-actions') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions/selected-actions') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->setAllowedActionsRepository($params);
                                    }
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->createOrUpdateRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/branches/{branch}/protection') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                            $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Repos::class]->updateBranchProtection($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'dependabot') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/dependabot/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Dependabot::class, $this->router) === false) {
                                            $this->router[Router\Put\Dependabot::class] = new Router\Put\Dependabot($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Dependabot::class]->createOrUpdateRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Issues::class, $this->router) === false) {
                                            $this->router[Router\Put\Issues::class] = new Router\Put\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Issues::class]->setLabels($params);
                                    }
                                } elseif ($pathChunks[6] === 'lock') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/issues/{issue_number}/lock') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Issues::class, $this->router) === false) {
                                            $this->router[Router\Put\Issues::class] = new Router\Put\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Issues::class]->lock($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'merge') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Put\Pulls::class] = new Router\Put\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Pulls::class]->merge($params);
                                    }
                                } elseif ($pathChunks[6] === 'update-branch') {
                                    if ($call === 'PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Pulls::class, $this->router) === false) {
                                            $this->router[Router\Put\Pulls::class] = new Router\Put\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Pulls::class]->updateBranch($params);
                                    }
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
                                if ($pathChunks[6] === '{secret_name}') {
                                    if ($call === 'PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}') {
                                        $matched = true;
                                        if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                            $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }

                                        return $this->router[Router\Put\Actions::class]->createOrUpdateEnvironmentSecret($params);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
