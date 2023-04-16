<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\ChunkSize\Patch;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Cc4
{
    private array $router = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function call(string $call, array $params, array $pathChunks)
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($call === 'PATCH /admin/hooks/{hook_id}') {
                            if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updateGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'organizations') {
                    if ($pathChunks[3] === '{org}') {
                        if ($call === 'PATCH /admin/organizations/{org}') {
                            if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updateOrgName($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($call === 'PATCH /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updatePreReceiveEnvironment($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($pathChunks[3] === '{pre_receive_hook_id}') {
                        if ($call === 'PATCH /admin/pre-receive-hooks/{pre_receive_hook_id}') {
                            if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updatePreReceiveHook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PATCH /admin/users/{username}') {
                            if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\EnterpriseAdmin::class]->updateUsernameForUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'PATCH /app/hook/config') {
                            if (array_key_exists(Router\Patch\Apps::class, $this->router) === false) {
                                $this->router[Router\Patch\Apps::class] = new Router\Patch\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Apps::class]->updateWebhookConfigForApp($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'PATCH /applications/{client_id}/token') {
                            if (array_key_exists(Router\Patch\Apps::class, $this->router) === false) {
                                $this->router[Router\Patch\Apps::class] = new Router\Patch\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Apps::class]->resetToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'code_security_and_analysis') {
                        if ($call === 'PATCH /enterprises/{enterprise}/code_security_and_analysis') {
                            if (array_key_exists(Router\Patch\SecretScanning::class, $this->router) === false) {
                                $this->router[Router\Patch\SecretScanning::class] = new Router\Patch\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\SecretScanning::class]->patchSecurityAnalysisSettingsForEnterprise($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'PATCH /notifications/threads/{thread_id}') {
                            if (array_key_exists(Router\Patch\Activity::class, $this->router) === false) {
                                $this->router[Router\Patch\Activity::class] = new Router\Patch\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Activity::class]->markThreadAsRead($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'announcement') {
                        if ($call === 'PATCH /orgs/{org}/announcement') {
                            if (array_key_exists(Router\Patch\AnnouncementBanners::class, $this->router) === false) {
                                $this->router[Router\Patch\AnnouncementBanners::class] = new Router\Patch\AnnouncementBanners($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\AnnouncementBanners::class]->setAnnouncementBannerForOrg($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'PATCH /projects/columns/{column_id}') {
                            if (array_key_exists(Router\Patch\Projects::class, $this->router) === false) {
                                $this->router[Router\Patch\Projects::class] = new Router\Patch\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Projects::class]->updateColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'PATCH /repos/{owner}/{repo}') {
                            if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Repos::class]->update($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'repository_invitations') {
                    if ($pathChunks[3] === '{invitation_id}') {
                        if ($call === 'PATCH /user/repository_invitations/{invitation_id}') {
                            if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Patch\Repos::class]->acceptInvitationForAuthenticatedUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
