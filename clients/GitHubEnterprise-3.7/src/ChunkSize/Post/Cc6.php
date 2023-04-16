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
final class Cc6
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
                if ($pathChunks[2] == 'ldap') {
                    if ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_id}') {
                            if ($pathChunks[5] == 'sync') {
                                if ($call == 'POST /admin/ldap/teams/{team_id}/sync') {
                                    if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                        $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\EnterpriseAdmin::class]->syncLdapMappingForTeam($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'users') {
                        if ($pathChunks[4] == '{username}') {
                            if ($pathChunks[5] == 'sync') {
                                if ($call == 'POST /admin/ldap/users/{username}/sync') {
                                    if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                        $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\EnterpriseAdmin::class]->syncLdapMappingForUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'app') {
                if ($pathChunks[2] == 'hook') {
                    if ($pathChunks[3] == 'deliveries') {
                        if ($pathChunks[4] == '{delivery_id}') {
                            if ($pathChunks[5] == 'attempts') {
                                if ($call == 'POST /app/hook/deliveries/{delivery_id}/attempts') {
                                    if (\array_key_exists(Router\Post\Apps::class, $this->router) == false) {
                                        $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Apps::class]->redeliverWebhookDelivery($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'enterprises') {
                if ($pathChunks[2] == '{enterprise}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runners') {
                            if ($pathChunks[5] == 'registration-token') {
                                if ($call == 'POST /enterprises/{enterprise}/actions/runners/registration-token') {
                                    if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                        $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\EnterpriseAdmin::class]->createRegistrationTokenForEnterprise($params);
                                }
                            } elseif ($pathChunks[5] == 'remove-token') {
                                if ($call == 'POST /enterprises/{enterprise}/actions/runners/remove-token') {
                                    if (\array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) == false) {
                                        $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\EnterpriseAdmin::class]->createRemoveTokenForEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'orgs') {
                if ($pathChunks[2] == '{org}') {
                    if ($pathChunks[3] == 'actions') {
                        if ($pathChunks[4] == 'runners') {
                            if ($pathChunks[5] == 'registration-token') {
                                if ($call == 'POST /orgs/{org}/actions/runners/registration-token') {
                                    if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Actions::class]->createRegistrationTokenForOrg($params);
                                }
                            } elseif ($pathChunks[5] == 'remove-token') {
                                if ($call == 'POST /orgs/{org}/actions/runners/remove-token') {
                                    if (\array_key_exists(Router\Post\Actions::class, $this->router) == false) {
                                        $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Actions::class]->createRemoveTokenForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'hooks') {
                        if ($pathChunks[4] == '{hook_id}') {
                            if ($pathChunks[5] == 'pings') {
                                if ($call == 'POST /orgs/{org}/hooks/{hook_id}/pings') {
                                    if (\array_key_exists(Router\Post\Orgs::class, $this->router) == false) {
                                        $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Orgs::class]->pingWebhook($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] == 'teams') {
                        if ($pathChunks[4] == '{team_slug}') {
                            if ($pathChunks[5] == 'discussions') {
                                if ($call == 'POST /orgs/{org}/teams/{team_slug}/discussions') {
                                    if (\array_key_exists(Router\Post\Teams::class, $this->router) == false) {
                                        $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Teams::class]->createDiscussionInOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'projects') {
                if ($pathChunks[2] == 'columns') {
                    if ($pathChunks[3] == 'cards') {
                        if ($pathChunks[4] == '{card_id}') {
                            if ($pathChunks[5] == 'moves') {
                                if ($call == 'POST /projects/columns/cards/{card_id}/moves') {
                                    if (\array_key_exists(Router\Post\Projects::class, $this->router) == false) {
                                        $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Projects::class]->moveCard($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'repos') {
                if ($pathChunks[2] == '{owner}') {
                    if ($pathChunks[3] == '{repo}') {
                        if ($pathChunks[4] == 'code-scanning') {
                            if ($pathChunks[5] == 'sarifs') {
                                if ($call == 'POST /repos/{owner}/{repo}/code-scanning/sarifs') {
                                    if (\array_key_exists(Router\Post\CodeScanning::class, $this->router) == false) {
                                        $this->router[Router\Post\CodeScanning::class] = new Router\Post\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\CodeScanning::class]->uploadSarif($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'dependency-graph') {
                            if ($pathChunks[5] == 'snapshots') {
                                if ($call == 'POST /repos/{owner}/{repo}/dependency-graph/snapshots') {
                                    if (\array_key_exists(Router\Post\DependencyGraph::class, $this->router) == false) {
                                        $this->router[Router\Post\DependencyGraph::class] = new Router\Post\DependencyGraph($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\DependencyGraph::class]->createRepositorySnapshot($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'git') {
                            if ($pathChunks[5] == 'blobs') {
                                if ($call == 'POST /repos/{owner}/{repo}/git/blobs') {
                                    if (\array_key_exists(Router\Post\Git::class, $this->router) == false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Git::class]->createBlob($params);
                                }
                            } elseif ($pathChunks[5] == 'commits') {
                                if ($call == 'POST /repos/{owner}/{repo}/git/commits') {
                                    if (\array_key_exists(Router\Post\Git::class, $this->router) == false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Git::class]->createCommit($params);
                                }
                            } elseif ($pathChunks[5] == 'refs') {
                                if ($call == 'POST /repos/{owner}/{repo}/git/refs') {
                                    if (\array_key_exists(Router\Post\Git::class, $this->router) == false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Git::class]->createRef($params);
                                }
                            } elseif ($pathChunks[5] == 'tags') {
                                if ($call == 'POST /repos/{owner}/{repo}/git/tags') {
                                    if (\array_key_exists(Router\Post\Git::class, $this->router) == false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Git::class]->createTag($params);
                                }
                            } elseif ($pathChunks[5] == 'trees') {
                                if ($call == 'POST /repos/{owner}/{repo}/git/trees') {
                                    if (\array_key_exists(Router\Post\Git::class, $this->router) == false) {
                                        $this->router[Router\Post\Git::class] = new Router\Post\Git($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Git::class]->createTree($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'pages') {
                            if ($pathChunks[5] == 'builds') {
                                if ($call == 'POST /repos/{owner}/{repo}/pages/builds') {
                                    if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Repos::class]->requestPagesBuild($params);
                                }
                            } elseif ($pathChunks[5] == 'deployment') {
                                if ($call == 'POST /repos/{owner}/{repo}/pages/deployment') {
                                    if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Repos::class]->createPagesDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'releases') {
                            if ($pathChunks[5] == 'generate-notes') {
                                if ($call == 'POST /repos/{owner}/{repo}/releases/generate-notes') {
                                    if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Repos::class]->generateReleaseNotes($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'statuses') {
                            if ($pathChunks[5] == '{sha}') {
                                if ($call == 'POST /repos/{owner}/{repo}/statuses/{sha}') {
                                    if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Repos::class]->createCommitStatus($params);
                                }
                            }
                        } elseif ($pathChunks[4] == 'tags') {
                            if ($pathChunks[5] == 'protection') {
                                if ($call == 'POST /repos/{owner}/{repo}/tags/protection') {
                                    if (\array_key_exists(Router\Post\Repos::class, $this->router) == false) {
                                        $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Repos::class]->createTagProtection($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] == 'teams') {
                if ($pathChunks[2] == '{team_id}') {
                    if ($pathChunks[3] == 'discussions') {
                        if ($pathChunks[4] == '{discussion_number}') {
                            if ($pathChunks[5] == 'comments') {
                                if ($call == 'POST /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    if (\array_key_exists(Router\Post\Teams::class, $this->router) == false) {
                                        $this->router[Router\Post\Teams::class] = new Router\Post\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Teams::class]->createDiscussionCommentLegacy($params);
                                }
                            } elseif ($pathChunks[5] == 'reactions') {
                                if ($call == 'POST /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    if (\array_key_exists(Router\Post\Reactions::class, $this->router) == false) {
                                        $this->router[Router\Post\Reactions::class] = new Router\Post\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }
                                    return $this->router[Router\Post\Reactions::class]->createForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    }
                }
            }
        }
        throw new \InvalidArgumentException();
    }
}
