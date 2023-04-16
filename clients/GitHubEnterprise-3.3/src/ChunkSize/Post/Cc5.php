<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise\ChunkSize\Post;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\ChunkSize;
final class Cc5
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
            if ($pathChunks[1] == 'admin') {
                if ($pathChunks[2] == 'hooks') {
                    if ($pathChunks[3] == '{hook_id}') {
                        if ($pathChunks[4] == 'pings') {
                            if ($call == 'POST /admin/hooks/{hook_id}/pings') {
                                if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\EnterpriseAdmin::class]->pingGlobalWebhook($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] == 'pre-receive-environments') {
                    if ($pathChunks[3] == '{pre_receive_environment_id}') {
                        if ($pathChunks[4] == 'downloads') {
                            if ($call == 'POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
                                if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\EnterpriseAdmin::class]->startPreReceiveEnvironmentDownload($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] == 'users') {
                    if ($pathChunks[3] == '{username}') {
                        if ($pathChunks[4] == 'authorizations') {
                            if ($call == 'POST /admin/users/{username}/authorizations') {
                                if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\EnterpriseAdmin::class]->createImpersonationOAuthToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'app') {
                if ($pathChunks[2] == 'installations') {
                    if ($pathChunks[3] == '{installation_id}') {
                        if ($pathChunks[4] == 'access_tokens') {
                            if ($call == 'POST /app/installations/{installation_id}/access_tokens') {
                                if (\array_key_exists(Router\Post\Apps::class, $this->router) == false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Apps::class]->createInstallationAccessToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'applications') {
                if ($pathChunks[2] == '{client_id}') {
                    if ($pathChunks[3] == 'token') {
                        if ($pathChunks[4] == 'scoped') {
                            if ($call == 'POST /applications/{client_id}/token/scoped') {
                                if (\array_key_exists(Router\Post\Apps::class, $this->router) == false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Apps::class]->scopeToken($params);
                            }
                        }
                    } elseif ($pathChunks[3] == 'tokens') {
                        if ($pathChunks[4] == '{access_token}') {
                            if ($call == 'POST /applications/{client_id}/tokens/{access_token}') {
                                if (\array_key_exists(Router\Post\Apps::class, $this->router) == false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Apps::class]->resetAuthorization($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'enterprises') {
                if ($pathChunks[2] == '{enterprise}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runner-groups') {
                            if ($call == 'POST /enterprises/{enterprise}/actions/runner-groups') {
                                if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\EnterpriseAdmin::class]->createSelfHostedRunnerGroupForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runner-groups') {
                            if ($call == 'POST /orgs/{org}/actions/runner-groups') {
                                if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                    $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Actions::class]->createSelfHostedRunnerGroupForOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'projects') {
                if ($pathChunks[2] == 'columns') {
                    if ($pathChunks[3] == '{column_id}') {
                        if ($pathChunks[4] == 'cards') {
                            if ($call == 'POST /projects/columns/{column_id}/cards') {
                                if (\array_key_exists(Router\Post\Projects::class, $this->router) == false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Projects::class]->createCard($params);
                            }
                        } elseif ($pathChunks[4] == 'moves') {
                            if ($call == 'POST /projects/columns/{column_id}/moves') {
                                if (\array_key_exists(Router\Post\Projects::class, $this->router) == false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Projects::class]->moveColumn($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'autolinks') {
                            if ($call == 'POST /repos/{owner}/{repo}/autolinks') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createAutolink($params);
                            }
                        } elseif ($pathChunks[4] == 'check-runs') {
                            if ($call == 'POST /repos/{owner}/{repo}/check-runs') {
                                if (\array_key_exists(Router\Post\Checks::class, $this->router) == false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Checks::class]->create($params);
                            }
                        } elseif ($pathChunks[4] == 'check-suites') {
                            if ($call == 'POST /repos/{owner}/{repo}/check-suites') {
                                if (\array_key_exists(Router\Post\Checks::class, $this->router) == false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Checks::class]->createSuite($params);
                            }
                        } elseif ($pathChunks[4] == 'deployments') {
                            if ($call == 'POST /repos/{owner}/{repo}/deployments') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createDeployment($params);
                            }
                        } elseif ($pathChunks[4] == 'dispatches') {
                            if ($call == 'POST /repos/{owner}/{repo}/dispatches') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createDispatchEvent($params);
                            }
                        } elseif ($pathChunks[4] == 'forks') {
                            if ($call == 'POST /repos/{owner}/{repo}/forks') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createFork($params);
                            }
                        } elseif ($pathChunks[4] == 'hooks') {
                            if ($call == 'POST /repos/{owner}/{repo}/hooks') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createWebhook($params);
                            }
                        } elseif ($pathChunks[4] == 'issues') {
                            if ($call == 'POST /repos/{owner}/{repo}/issues') {
                                if (\array_key_exists(Router\Post\Issues::class, $this->router) == false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Issues::class]->create($params);
                            }
                        } elseif ($pathChunks[4] == 'keys') {
                            if ($call == 'POST /repos/{owner}/{repo}/keys') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createDeployKey($params);
                            }
                        } elseif ($pathChunks[4] == 'labels') {
                            if ($call == 'POST /repos/{owner}/{repo}/labels') {
                                if (\array_key_exists(Router\Post\Issues::class, $this->router) == false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Issues::class]->createLabel($params);
                            }
                        } elseif ($pathChunks[4] == 'merge-upstream') {
                            if ($call == 'POST /repos/{owner}/{repo}/merge-upstream') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->mergeUpstream($params);
                            }
                        } elseif ($pathChunks[4] == 'merges') {
                            if ($call == 'POST /repos/{owner}/{repo}/merges') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->merge($params);
                            }
                        } elseif ($pathChunks[4] == 'milestones') {
                            if ($call == 'POST /repos/{owner}/{repo}/milestones') {
                                if (\array_key_exists(Router\Post\Issues::class, $this->router) == false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Issues::class]->createMilestone($params);
                            }
                        } elseif ($pathChunks[4] == 'pages') {
                            if ($call == 'POST /repos/{owner}/{repo}/pages') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createPagesSite($params);
                            }
                        } elseif ($pathChunks[4] == 'projects') {
                            if ($call == 'POST /repos/{owner}/{repo}/projects') {
                                if (\array_key_exists(Router\Post\Projects::class, $this->router) == false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Projects::class]->createForRepo($params);
                            }
                        } elseif ($pathChunks[4] == 'pulls') {
                            if ($call == 'POST /repos/{owner}/{repo}/pulls') {
                                if (\array_key_exists(Router\Post\Pulls::class, $this->router) == false) {
                                    $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Pulls::class]->create($params);
                            }
                        } elseif ($pathChunks[4] == 'releases') {
                            if ($call == 'POST /repos/{owner}/{repo}/releases') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createRelease($params);
                            }
                        } elseif ($pathChunks[4] == 'transfer') {
                            if ($call == 'POST /repos/{owner}/{repo}/transfer') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->transfer($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] == '{template_owner}') {
                    if ($pathChunks[3] == '{template_repo}') {
                        if ($pathChunks[4] == 'generate') {
                            if ($call == 'POST /repos/{template_owner}/{template_repo}/generate') {
                                if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\Repos::class]->createUsingTemplate($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'setup') {
                if ($pathChunks[2] == 'api') {
                    if ($pathChunks[3] == 'settings') {
                        if ($pathChunks[4] == 'authorized-keys') {
                            if ($call == 'POST /setup/api/settings/authorized-keys') {
                                if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }
                                return $this->router[Router\Post\EnterpriseAdmin::class]->addAuthorizedSshKey($params);
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
