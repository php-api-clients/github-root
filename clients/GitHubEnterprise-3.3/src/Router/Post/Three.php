<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GpgKey;
use ApiClients\Client\GitHubEnterprise\Schema\Key;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Project;
use ApiClients\Client\GitHubEnterprise\Schema\Repository;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Three
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |(string|array{code: int})|(Observable<Schema\Email>|(Schema\GpgKey|(Schema\Key|(Schema\Project|(Schema\Repository */
    public function call(string $call, array $params, array $pathChunks): GlobalHook|OrganizationSimple|PreReceiveEnvironment|PreReceiveHook|SimpleUser|string|iterable|GpgKey|Key|Project|Repository
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'POST /admin/hooks') {
                        $matched = true;
                        if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\EnterpriseAdmin::class]->CreateGlobalWebhook($params);
                    }
                } elseif ($pathChunks[2] === 'organizations') {
                    if ($call === 'POST /admin/organizations') {
                        $matched = true;
                        if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\EnterpriseAdmin::class]->CreateOrg($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'POST /admin/pre-receive-environments') {
                        $matched = true;
                        if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\EnterpriseAdmin::class]->CreatePreReceiveEnvironment($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($call === 'POST /admin/pre-receive-hooks') {
                        $matched = true;
                        if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\EnterpriseAdmin::class]->CreatePreReceiveHook($params);
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($call === 'POST /admin/users') {
                        $matched = true;
                        if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\EnterpriseAdmin::class]->CreateUser($params);
                    }
                }
            } elseif ($pathChunks[1] === 'markdown') {
                if ($pathChunks[2] === 'raw') {
                    if ($call === 'POST /markdown/raw') {
                        $matched = true;
                        if (array_key_exists(Router\Post\Markdown::class, $this->router) === false) {
                            $this->router[Router\Post\Markdown::class] = new Router\Post\Markdown($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\Markdown::class]->RenderRaw($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'POST /user/emails') {
                        $matched = true;
                        if (array_key_exists(Router\Post\Users::class, $this->router) === false) {
                            $this->router[Router\Post\Users::class] = new Router\Post\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\Users::class]->AddEmailForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'POST /user/gpg_keys') {
                        $matched = true;
                        if (array_key_exists(Router\Post\Users::class, $this->router) === false) {
                            $this->router[Router\Post\Users::class] = new Router\Post\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\Users::class]->CreateGpgKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'POST /user/keys') {
                        $matched = true;
                        if (array_key_exists(Router\Post\Users::class, $this->router) === false) {
                            $this->router[Router\Post\Users::class] = new Router\Post\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\Users::class]->CreatePublicSshKeyForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'projects') {
                    if ($call === 'POST /user/projects') {
                        $matched = true;
                        if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                            $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\Projects::class]->CreateForAuthenticatedUser($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'POST /user/repos') {
                        $matched = true;
                        if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                            $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\Post\Repos::class]->CreateForAuthenticatedUser($params);
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
