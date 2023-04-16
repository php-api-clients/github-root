<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE\ChunkSize\Put;

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
            if ($pathChunks[1] == 'gists') {
                if ($pathChunks[2] == '{gist_id}') {
                    if ($pathChunks[3] == 'star') {
                        if ($call == 'PUT /gists/{gist_id}/star') {
                            if (\array_key_exists(Router\Put\Gists::class, $this->router) == false) {
                                $this->router[Router\Put\Gists::class] = new Router\Put\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Put\Gists::class]->star($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'user') {
                if ($pathChunks[2] == 'following') {
                    if ($pathChunks[3] == '{username}') {
                        if ($call == 'PUT /user/following/{username}') {
                            if (\array_key_exists(Router\Put\Users::class, $this->router) == false) {
                                $this->router[Router\Put\Users::class] = new Router\Put\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Put\Users::class]->follow($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'users') {
                if ($pathChunks[2] == '{username}') {
                    if ($pathChunks[3] == 'suspended') {
                        if ($call == 'PUT /users/{username}/suspended') {
                            if (\array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) == false) {
                                $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }
                            return $this->router[Router\Put\EnterpriseAdmin::class]->suspendUser($params);
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
