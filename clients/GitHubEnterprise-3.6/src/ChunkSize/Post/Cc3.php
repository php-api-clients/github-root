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
final class Cc3
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
                    if ($call == 'POST /admin/hooks') {
                        if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\EnterpriseAdmin::class]->createGlobalWebhook($params);
                    }
                } elseif ($pathChunks[2] == 'organizations') {
                    if ($call == 'POST /admin/organizations') {
                        if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\EnterpriseAdmin::class]->createOrg($params);
                    }
                } elseif ($pathChunks[2] == 'pre-receive-environments') {
                    if ($call == 'POST /admin/pre-receive-environments') {
                        if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\EnterpriseAdmin::class]->createPreReceiveEnvironment($params);
                    }
                } elseif ($pathChunks[2] == 'pre-receive-hooks') {
                    if ($call == 'POST /admin/pre-receive-hooks') {
                        if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\EnterpriseAdmin::class]->createPreReceiveHook($params);
                    }
                } elseif ($pathChunks[2] == 'users') {
                    if ($call == 'POST /admin/users') {
                        if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\EnterpriseAdmin::class]->createUser($params);
                    }
                }
            } elseif ($pathChunks[1] == 'markdown') {
                if ($pathChunks[2] == 'raw') {
                    if ($call == 'POST /markdown/raw') {
                        if (\array_key_exists(Router\Post\Markdown::class, $this->router) == false) {
                            $this->router[Router\Post\Markdown::class] = new Router\Post\Markdown($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\Markdown::class]->renderRaw($params);
                    }
                }
            } elseif ($pathChunks[1] == 'user') {
                if ($pathChunks[2] == 'emails') {
                    if ($call == 'POST /user/emails') {
                        if (\array_key_exists(Router\Post\Users::class, $this->router) == false) {
                            $this->router[Router\Post\Users::class] = new Router\Post\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\Users::class]->addEmailForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] == 'gpg_keys') {
                    if ($call == 'POST /user/gpg_keys') {
                        if (\array_key_exists(Router\Post\Users::class, $this->router) == false) {
                            $this->router[Router\Post\Users::class] = new Router\Post\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\Users::class]->createGpgKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] == 'keys') {
                    if ($call == 'POST /user/keys') {
                        if (\array_key_exists(Router\Post\Users::class, $this->router) == false) {
                            $this->router[Router\Post\Users::class] = new Router\Post\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\Users::class]->createPublicSshKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] == 'migrations') {
                    if ($call == 'POST /user/migrations') {
                        if (\array_key_exists(Router\Post\Migrations::class, $this->router) == false) {
                            $this->router[Router\Post\Migrations::class] = new Router\Post\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\Migrations::class]->startForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] == 'projects') {
                    if ($call == 'POST /user/projects') {
                        if (\array_key_exists(Router\Post\Projects::class, $this->router) == false) {
                            $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\Projects::class]->createForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] == 'repos') {
                    if ($call == 'POST /user/repos') {
                        if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }
                        return $this->router[Router\Post\Repos::class]->createForAuthenticatedUser($params);
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
