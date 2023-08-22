<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Four
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (Schema\Authorization|array{code: int})|array{code: int} */
    public function call(string $call, array $params, array $pathChunks): Authorization|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'authorizations') {
                if ($pathChunks[2] === 'clients') {
                    if ($pathChunks[3] === '{client_id}') {
                        if ($call === 'PUT /authorizations/clients/{client_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Put\OauthAuthorizations::class, $this->router) === false) {
                                $this->router[Router\Put\OauthAuthorizations::class] = new Router\Put\OauthAuthorizations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\OauthAuthorizations::class]->GetOrCreateAuthorizationForApp($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'star') {
                        if ($call === 'PUT /gists/{gist_id}/star') {
                            $matched = true;
                            if (array_key_exists(Router\Put\Gists::class, $this->router) === false) {
                                $this->router[Router\Put\Gists::class] = new Router\Put\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\Gists::class]->Star($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'settings') {
                        if ($call === 'PUT /setup/api/settings') {
                            $matched = true;
                            if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\EnterpriseAdmin::class]->SetSettings($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PUT /user/following/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Put\Users::class, $this->router) === false) {
                                $this->router[Router\Put\Users::class] = new Router\Put\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\Users::class]->Follow($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'site_admin') {
                        if ($call === 'PUT /users/{username}/site_admin') {
                            $matched = true;
                            if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\EnterpriseAdmin::class]->PromoteUserToBeSiteAdministrator($params);
                        }
                    } elseif ($pathChunks[3] === 'suspended') {
                        if ($call === 'PUT /users/{username}/suspended') {
                            $matched = true;
                            if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Put\EnterpriseAdmin::class]->SuspendUser($params);
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
