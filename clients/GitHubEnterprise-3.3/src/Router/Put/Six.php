<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Put;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\Environment;
use ApiClients\Client\GitHubEnterprise\Schema\FileCommit;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryInvitation;
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

    /** @return array{code: int}|(Schema\EmptyObject|array{code: int})|(Schema\RepositoryInvitation| */
    public function call(string $call, array $params, array $pathChunks): EmptyObject|RepositoryInvitation|FileCommit|Environment|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\EnterpriseAdmin::class]->SetSelectedOrganizationsEnabledGithubActionsEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/selected-actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Put\EnterpriseAdmin::class] = new Router\Put\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\EnterpriseAdmin::class]->SetAllowedActionsEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->SetSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/selected-actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->SetAllowedActionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->CreateOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'permissions') {
                                if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Actions::class, $this->router) === false) {
                                        $this->router[Router\Put\Actions::class] = new Router\Put\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Actions::class]->SetGithubActionsPermissionsRepository($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/collaborators/{username}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                        $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Repos::class]->AddCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/contents/{path}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                        $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Repos::class]->CreateOrUpdateFileContents($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Repos::class, $this->router) === false) {
                                        $this->router[Router\Put\Repos::class] = new Router\Put\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Repos::class]->CreateOrUpdateEnvironment($params);
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
                                if ($call === 'PUT /teams/{team_id}/repos/{owner}/{repo}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Teams::class, $this->router) === false) {
                                        $this->router[Router\Put\Teams::class] = new Router\Put\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Teams::class]->AddOrUpdateRepoPermissionsLegacy($params);
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
                                if ($call === 'PUT /user/installations/{installation_id}/repositories/{repository_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Put\Apps::class, $this->router) === false) {
                                        $this->router[Router\Put\Apps::class] = new Router\Put\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Put\Apps::class]->AddRepoToInstallationForAuthenticatedUser($params);
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
