<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\FileCommit;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Six
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}| */
    public function call(string $call, array $params, array $pathChunks): FileCommit|RepositoryPreReceiveHook|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\EnterpriseAdmin::class]->DeleteSelfHostedRunnerGroupFromEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\EnterpriseAdmin::class]->DeleteSelfHostedRunnerFromEnterprise($params);
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
                                if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Actions::class]->DeleteSelfHostedRunnerGroupFromOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Actions::class]->DeleteSelfHostedRunnerFromOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Actions::class, $this->router) === false) {
                                        $this->router[Router\Delete\Actions::class] = new Router\Delete\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Actions::class]->DeleteOrgSecret($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'autolinks') {
                            if ($pathChunks[5] === '{autolink_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteAutolink($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/collaborators/{username}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->RemoveCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/contents/{path}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteFile($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteAnEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($pathChunks[5] === '{key_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/keys/{key_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/labels/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                        $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Issues::class]->DeleteLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Issues::class, $this->router) === false) {
                                        $this->router[Router\Delete\Issues::class] = new Router\Delete\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Issues::class]->DeleteMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($pathChunks[5] === '{pre_receive_hook_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\EnterpriseAdmin::class]->RemovePreReceiveHookEnforcementForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                        $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Repos::class]->DeleteRelease($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'DELETE /teams/{team_id}/repos/{owner}/{repo}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                        $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Teams::class]->RemoveRepoLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($pathChunks[5] === '{repository_id}') {
                                if ($call === 'DELETE /user/installations/{installation_id}/repositories/{repository_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                        $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Delete\Apps::class]->RemoveRepoFromInstallationForAuthenticatedUser($params);
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
