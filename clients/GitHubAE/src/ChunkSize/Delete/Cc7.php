<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\ChunkSize\Delete;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Cc7
{
    private array $router = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHubAE\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHubAE\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
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
                        if ($pathChunks[4] == 'permissions') {
                            if ($pathChunks[5] == 'organizations') {
                                if ($pathChunks[6] == '{org_id}') {
                                    if ($call == 'DELETE /enterprises/{enterprise}/actions/permissions/organizations/{org_id}') {
                                        if (\array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) == false) {
                                            $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\EnterpriseAdmin::class]->disableSelectedOrganizationGithubActionsEnterprise($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'permissions') {
                            if ($pathChunks[5] == 'repositories') {
                                if ($pathChunks[6] == '{repository_id}') {
                                    if ($call == 'DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}') {
                                        if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Actions::class]->disableSelectedRepositoryGithubActionsOrganization($params);
                                    }
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'discussions') {
                                if ($pathChunks[6] == '{discussion_number}') {
                                    if ($call == 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}') {
                                        if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Teams::class]->deleteDiscussionInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == 'memberships') {
                                if ($pathChunks[6] == '{username}') {
                                    if ($call == 'DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}') {
                                        if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Teams::class]->removeMembershipForUserInOrg($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == 'projects') {
                                if ($pathChunks[6] == '{project_id}') {
                                    if ($call == 'DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}') {
                                        if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Teams::class]->removeProjectInOrg($params);
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
                            if ($pathChunks[5] == 'artifacts') {
                                if ($pathChunks[6] == '{artifact_id}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}') {
                                        if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Actions::class]->deleteArtifact($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == 'runners') {
                                if ($pathChunks[6] == '{runner_id}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}') {
                                        if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Actions::class]->deleteSelfHostedRunnerFromRepo($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == 'runs') {
                                if ($pathChunks[6] == '{run_id}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/actions/runs/{run_id}') {
                                        if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Actions::class]->deleteWorkflowRun($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == 'secrets') {
                                if ($pathChunks[6] == '{secret_name}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}') {
                                        if (\array_key_exists(Router\Delete\Actions::class, $this->router) == false) {
                                            $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Actions::class]->deleteRepoSecret($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'branches') {
                            if ($pathChunks[5] == '{branch}') {
                                if ($pathChunks[6] == 'protection') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/branches/{branch}/protection') {
                                        if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                            $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Repos::class]->deleteBranchProtection($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'code-scanning') {
                            if ($pathChunks[5] == 'analyses') {
                                if ($pathChunks[6] == '{analysis_id}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}') {
                                        if (\array_key_exists(Router\Delete\CodeScanning::class, $this->router) == false) {
                                            $this->router[Router\Delete\CodeScanning::class] = new Router\Delete\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\CodeScanning::class]->deleteAnalysis($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'git') {
                            if ($pathChunks[5] == 'refs') {
                                if ($pathChunks[6] == '{ref}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/git/refs/{ref}') {
                                        if (\array_key_exists(Router\Delete\Git::class, $this->router) == false) {
                                            $this->router[Router\Delete\Git::class] = new Router\Delete\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Git::class]->deleteRef($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}') {
                                        if (\array_key_exists(Router\Delete\Issues::class, $this->router) == false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Issues::class]->deleteComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == '{issue_number}') {
                                if ($pathChunks[6] == 'assignees') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees') {
                                        if (\array_key_exists(Router\Delete\Issues::class, $this->router) == false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Issues::class]->removeAssignees($params);
                                    }
                                } elseif ($pathChunks[6] == 'labels') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels') {
                                        if (\array_key_exists(Router\Delete\Issues::class, $this->router) == false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Issues::class]->removeAllLabels($params);
                                    }
                                } elseif ($pathChunks[6] == 'lock') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock') {
                                        if (\array_key_exists(Router\Delete\Issues::class, $this->router) == false) {
                                            $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Issues::class]->unlock($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_id}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}') {
                                        if (\array_key_exists(Router\Delete\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Delete\Pulls::class] = new Router\Delete\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Pulls::class]->deleteReviewComment($params);
                                    }
                                }
                            } elseif ($pathChunks[5] == '{pull_number}') {
                                if ($pathChunks[6] == 'requested_reviewers') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers') {
                                        if (\array_key_exists(Router\Delete\Pulls::class, $this->router) == false) {
                                            $this->router[Router\Delete\Pulls::class] = new Router\Delete\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Pulls::class]->removeRequestedReviewers($params);
                                    }
                                }
                            }
                        } elseif ($pathChunks[4] == 'releases') {
                            if ($pathChunks[5] == 'assets') {
                                if ($pathChunks[6] == '{asset_id}') {
                                    if ($call == 'DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}') {
                                        if (\array_key_exists(Router\Delete\Repos::class, $this->router) == false) {
                                            $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Repos::class]->deleteReleaseAsset($params);
                                    }
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'teams') {
                if ($pathChunks[2] == '{team_id}') {
                    if ($pathChunks[3] == 'discussions') {
                        if ($pathChunks[4] == '{discussion_number}') {
                            if ($pathChunks[5] == 'comments') {
                                if ($pathChunks[6] == '{comment_number}') {
                                    if ($call == 'DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}') {
                                        if (\array_key_exists(Router\Delete\Teams::class, $this->router) == false) {
                                            $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                        }
                                        return $this->router[Router\Delete\Teams::class]->deleteDiscussionCommentLegacy($params);
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
