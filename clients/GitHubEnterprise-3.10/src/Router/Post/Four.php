<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\BaseGist;
use ApiClients\Client\GitHubEnterprise\Schema\GistComment;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Migration;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\Project;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectColumn;
use ApiClients\Client\GitHubEnterprise\Schema\Repository;
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterprise\Schema\TeamFull;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
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

    /** @return |(Schema\GistComment|array{code: int})|(Schema\BaseGist|(iterable<Schema\GhesSetMaintenanceResponse>|(Schema\ProjectColumn|(Schema\GroupResponse|(Schema\UserResponse|array{code: int}|(Schema\MaintenanceStatus */
    public function call(string $call, array $params, array $pathChunks): Integration|Authorization|GistComment|BaseGist|iterable|OrganizationCustomRepositoryRole|OrgHook|Migration|Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|Project|Repository|TeamFull|ProjectColumn|GroupResponse|UserResponse|MaintenanceStatus|TeamDiscussion
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app-manifests') {
                if ($pathChunks[2] === '{code}') {
                    if ($pathChunks[3] === 'conversions') {
                        if ($call === 'POST /app-manifests/{code}/conversions') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Apps::class]->createFromManifest($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'POST /applications/{client_id}/token') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Apps::class]->checkToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'POST /gists/{gist_id}/comments') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Gists::class, $this->router) === false) {
                                $this->router[Router\Post\Gists::class] = new Router\Post\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Gists::class]->createComment($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'POST /gists/{gist_id}/forks') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Gists::class, $this->router) === false) {
                                $this->router[Router\Post\Gists::class] = new Router\Post\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Gists::class]->fork($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'manage') {
                if ($pathChunks[2] === 'v1') {
                    if ($pathChunks[3] === 'maintenance') {
                        if ($call === 'POST /manage/v1/maintenance') {
                            $matched = true;
                            if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\EnterpriseAdmin::class]->setManageMaintenance($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'custom-repository-roles') {
                        if ($call === 'POST /orgs/{org}/custom-repository-roles') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->createCustomRepoRole($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'POST /orgs/{org}/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->createWebhook($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'POST /orgs/{org}/migrations') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Migrations::class, $this->router) === false) {
                                $this->router[Router\Post\Migrations::class] = new Router\Post\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Migrations::class]->startForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'POST /orgs/{org}/personal-access-token-requests') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->reviewPatGrantRequestsInBulk($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'POST /orgs/{org}/personal-access-tokens') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Orgs::class]->updatePatAccesses($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'POST /orgs/{org}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Projects::class]->createForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'POST /orgs/{org}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Repos::class]->createInOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'POST /orgs/{org}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Teams::class]->create($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'columns') {
                        if ($call === 'POST /projects/{project_id}/columns') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Projects::class]->createColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'Groups') {
                        if ($call === 'POST /scim/v2/Groups') {
                            $matched = true;
                            if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\EnterpriseAdmin::class]->provisionEnterpriseGroup($params);
                        }
                    } elseif ($pathChunks[3] === 'Users') {
                        if ($call === 'POST /scim/v2/Users') {
                            $matched = true;
                            if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\EnterpriseAdmin::class]->provisionEnterpriseUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'configure') {
                        if ($call === 'POST /setup/api/configure') {
                            $matched = true;
                            if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\EnterpriseAdmin::class]->startConfigurationProcess($params);
                        }
                    } elseif ($pathChunks[3] === 'maintenance') {
                        if ($call === 'POST /setup/api/maintenance') {
                            $matched = true;
                            if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\EnterpriseAdmin::class]->enableOrDisableMaintenanceMode($params);
                        }
                    } elseif ($pathChunks[3] === 'start') {
                        if ($call === 'POST /setup/api/start') {
                            $matched = true;
                            if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\EnterpriseAdmin::class]->createEnterpriseServerLicense($params);
                        }
                    } elseif ($pathChunks[3] === 'upgrade') {
                        if ($call === 'POST /setup/api/upgrade') {
                            $matched = true;
                            if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\EnterpriseAdmin::class]->upgradeLicense($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'POST /teams/{team_id}/discussions') {
                            $matched = true;
                            if (array_key_exists(Router\Post\Teams::class, $this->router) === false) {
                                $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Post\Teams::class]->createDiscussionLegacy($params);
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
