<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequestReview;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Eight
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}|(Observable<Schema\Label>|Schema\BasicError)| */
    public function call(string $call, array $params, array $pathChunks): iterable|BasicError|PullRequestReview
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($pathChunks[6] === 'organizations') {
                                    if ($pathChunks[7] === '{org_id}') {
                                        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\EnterpriseAdmin::class]->RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($pathChunks[7] === '{runner_id}') {
                                        if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\EnterpriseAdmin::class]->RemoveSelfHostedRunnerFromGroupForEnterprise($params);
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
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->RemoveRepoAccessToSelfHostedRunnerGroupInOrg($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'runners') {
                                    if ($pathChunks[7] === '{runner_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->RemoveSelfHostedRunnerFromGroupForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($pathChunks[6] === 'repositories') {
                                    if ($pathChunks[7] === '{repository_id}') {
                                        if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->RemoveSelectedRepoFromOrgSecret($params);
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
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                                $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Teams::class]->RemoveRepoInOrg($params);
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
                            if ($pathChunks[5] === 'runs') {
                                if ($pathChunks[6] === '{run_id}') {
                                    if ($pathChunks[7] === 'logs') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Actions::class]->DeleteWorkflowRunLogs($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($pathChunks[6] === 'protection') {
                                    if ($pathChunks[7] === 'enforce_admins') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_pull_request_reviews') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeletePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_signatures') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'required_status_checks') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->RemoveStatusCheckProtection($params);
                                        }
                                    } elseif ($pathChunks[7] === 'restrictions') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Reactions::class]->DeleteForCommitComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($pathChunks[6] === 'deployment-branch-policies') {
                                    if ($pathChunks[7] === '{branch_policy_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Repos::class]->DeleteDeploymentBranchPolicy($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($pathChunks[6] === 'labels') {
                                    if ($pathChunks[7] === '{name}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                                $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Issues::class]->RemoveLabel($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Reactions::class]->DeleteForIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($pathChunks[6] === 'reviews') {
                                    if ($pathChunks[7] === '{review_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Pulls::class, $this->router) === false) {
                                                $this->router[Router\Delete\Pulls::class] = new Router\Delete\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Pulls::class]->DeletePendingReview($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($pathChunks[6] === 'reactions') {
                                    if ($pathChunks[7] === '{reaction_id}') {
                                        if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}') {
                                            $matched = true;
                                            if (array_key_exists(Router\Delete\Reactions::class, $this->router) === false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }

                                            return $this->router[Router\Delete\Reactions::class]->DeleteForRelease($params);
                                        }
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
