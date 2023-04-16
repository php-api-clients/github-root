<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\ChunkSize\Delete;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\ChunkSize;
final class Cc8
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubEnterprise\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] == '') {
            if ($pathChunks[1] == 'enterprises') {
                if ($pathChunks[2] == '{enterprise}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runner-groups') {
                            if ($pathChunks[5] == '{runner_group_id}') {
                                if ($pathChunks[6] == 'organizations') {
                                    if ($pathChunks[7] == '{org_id}') {
                                        if ($call == 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/organizations/{org_id}') {
                                            if (\array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) == false) {
                                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\EnterpriseAdmin::class]->removeOrgAccessToSelfHostedRunnerGroupInEnterprise($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] == 'runners') {
                                    if ($pathChunks[7] == '{runner_id}') {
                                        if ($call == 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            if (\array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) == false) {
                                                $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\EnterpriseAdmin::class]->removeSelfHostedRunnerFromGroupForEnterprise($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runner-groups') {
                            if ($pathChunks[5] == '{runner_group_id}') {
                                if ($pathChunks[6] == 'repositories') {
                                    if ($pathChunks[7] == '{repository_id}') {
                                        if ($call == 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/repositories/{repository_id}') {
                                            if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Actions::class]->removeRepoAccessToSelfHostedRunnerGroupInOrg($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] == 'runners') {
                                    if ($pathChunks[7] == '{runner_id}') {
                                        if ($call == 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}/runners/{runner_id}') {
                                            if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Actions::class]->removeSelfHostedRunnerFromGroupForOrg($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'secrets') {
                            if ($pathChunks[5] == '{secret_name}') {
                                if ($pathChunks[6] == 'repositories') {
                                    if ($pathChunks[7] == '{repository_id}') {
                                        if ($call == 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}') {
                                            if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Actions::class]->removeSelectedRepoFromOrgSecret($params);
                                        }
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'repos') {
                                if ($pathChunks[6] == '{owner}') {
                                    if ($pathChunks[7] == '{repo}') {
                                        if ($call == 'DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}') {
                                            if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                                                $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Teams::class]->removeRepoInOrg($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'actions') {
                            if ($pathChunks[5] == 'runs') {
                                if ($pathChunks[6] == '{run_id}') {
                                    if ($pathChunks[7] == 'logs') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs') {
                                            if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                                $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Actions::class]->deleteWorkflowRunLogs($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'protection') {
                                    if ($pathChunks[7] == 'enforce_admins') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins') {
                                            if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Repos::class]->deleteAdminBranchProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_pull_request_reviews') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews') {
                                            if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Repos::class]->deletePullRequestReviewProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_signatures') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures') {
                                            if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Repos::class]->deleteCommitSignatureProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'required_status_checks') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks') {
                                            if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Repos::class]->removeStatusCheckProtection($params);
                                        }
                                    } elseif ($pathChunks[7] == 'restrictions') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions') {
                                            if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                                $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Repos::class]->deleteAccessRestrictions($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'comments') {
                            if ($pathChunks[5] == '{comment_id}') {
                                if ($pathChunks[6] == 'reactions') {
                                    if ($pathChunks[7] == '{reaction_id}') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}') {
                                            if (\array_key_exists(Router\Delete\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Reactions::class]->deleteForCommitComment($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == '{issue_number}') {
                                if ($pathChunks[6] == 'labels') {
                                    if ($pathChunks[7] == '{name}') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}') {
                                            if (\array_key_exists(Router\Delete\Issues::class, $this->router) == false) {
                                                $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Issues::class]->removeLabel($params);
                                        }
                                    }
                                } elseif ($pathChunks[6] == 'reactions') {
                                    if ($pathChunks[7] == '{reaction_id}') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}') {
                                            if (\array_key_exists(Router\Delete\Reactions::class, $this->router) == false) {
                                                $this->router[Router\Delete\Reactions::class] = new Router\Delete\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Reactions::class]->deleteForIssue($params);
                                        }
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == '{pull_number}') {
                                if ($pathChunks[6] == 'reviews') {
                                    if ($pathChunks[7] == '{review_id}') {
                                        if ($call == 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}') {
                                            if (\array_key_exists(Router\Delete\Pulls::class, $this->router) == false) {
                                                $this->router[Router\Delete\Pulls::class] = new Router\Delete\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                            }
                                            return $this->router[Router\Delete\Pulls::class]->deletePendingReview($params);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
