<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\ChunkSize\Patch;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
use ApiClients\Client\GitHubAE\Router;
use ApiClients\Client\GitHubAE\ChunkSize;
final class Cc4
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
            if ($pathChunks[1] == 'admin') {
                if ($pathChunks[2] == 'hooks') {
                    if ($pathChunks[3] == '{hook_id}') {
                        if ($call == 'PATCH /admin/hooks/{hook_id}') {
                            if (\array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) == false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updateGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'organizations') {
                    if ($pathChunks[3] == '{org}') {
                        if ($call == 'PATCH /admin/organizations/{org}') {
                            if (\array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) == false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updateOrgName($params);
                        }
                    }
                } elseif ($pathChunks[2] == 'pre-receive-environments') {
                    if ($pathChunks[3] == '{pre_receive_environment_id}') {
                        if ($call == 'PATCH /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            if (\array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) == false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updatePreReceiveEnvironment($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'app') {
                if ($pathChunks[2] == 'hook') {
                    if ($pathChunks[3] == 'config') {
                        if ($call == 'PATCH /app/hook/config') {
                            if (\array_key_exists(Router\Patch\Apps::class, $this->router) == false) {
                                $this->router[Router\Patch\Apps::class] = new Router\Patch\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\Apps::class]->updateWebhookConfigForApp($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'applications') {
                if ($pathChunks[2] == '{client_id}') {
                    if ($pathChunks[3] == 'token') {
                        if ($call == 'PATCH /applications/{client_id}/token') {
                            if (\array_key_exists(Router\Patch\Apps::class, $this->router) == false) {
                                $this->router[Router\Patch\Apps::class] = new Router\Patch\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\Apps::class]->resetToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'notifications') {
                if ($pathChunks[2] == 'threads') {
                    if ($pathChunks[3] == '{thread_id}') {
                        if ($call == 'PATCH /notifications/threads/{thread_id}') {
                            if (\array_key_exists(Router\Patch\Activity::class, $this->router) == false) {
                                $this->router[Router\Patch\Activity::class] = new Router\Patch\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\Activity::class]->markThreadAsRead($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'projects') {
                if ($pathChunks[2] == 'columns') {
                    if ($pathChunks[3] == '{column_id}') {
                        if ($call == 'PATCH /projects/columns/{column_id}') {
                            if (\array_key_exists(Router\Patch\Projects::class, $this->router) == false) {
                                $this->router[Router\Patch\Projects::class] = new Router\Patch\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\Projects::class]->updateColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($call == 'PATCH /repos/{owner}/{repo}') {
                            if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\Repos::class]->update($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'user') {
                if ($pathChunks[2] == 'repository_invitations') {
                    if ($pathChunks[3] == '{invitation_id}') {
                        if ($call == 'PATCH /user/repository_invitations/{invitation_id}') {
                            if (\array_key_exists(Router\Patch\Repos::class, $this->router) == false) {
                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Patch\Repos::class]->acceptInvitationForAuthenticatedUser($params);
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
