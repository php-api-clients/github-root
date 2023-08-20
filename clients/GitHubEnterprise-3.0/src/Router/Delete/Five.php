<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Five
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return array{code: int}||iterable<Schema\SshKey> */
    public function call(string $call, array $params, array $pathChunks): OrgPreReceiveHook|iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'users') {
                    if ($pathChunks[3] === '{username}') {
                        if ($pathChunks[4] === 'authorizations') {
                            if ($call === 'DELETE /admin/users/{username}/authorizations') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\EnterpriseAdmin::class]->deleteImpersonationOAuthToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'suspended') {
                            if ($call === 'DELETE /app/installations/{installation_id}/suspended') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                    $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Apps::class]->unsuspendInstallation($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'grants') {
                        if ($pathChunks[4] === '{access_token}') {
                            if ($call === 'DELETE /applications/{client_id}/grants/{access_token}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                    $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Apps::class]->revokeGrantForApplication($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'tokens') {
                        if ($pathChunks[4] === '{access_token}') {
                            if ($call === 'DELETE /applications/{client_id}/tokens/{access_token}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Apps::class, $this->router) === false) {
                                    $this->router[Router\Delete\Apps::class] = new Router\Delete\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Apps::class]->revokeAuthorizationForApplication($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'DELETE /gists/{gist_id}/comments/{comment_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Gists::class, $this->router) === false) {
                                    $this->router[Router\Delete\Gists::class] = new Router\Delete\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Gists::class]->deleteComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'DELETE /notifications/threads/{thread_id}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Activity::class, $this->router) === false) {
                                    $this->router[Router\Delete\Activity::class] = new Router\Delete\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Activity::class]->deleteThreadSubscription($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'DELETE /orgs/{org}/hooks/{hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->deleteWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->removeMember($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->removeMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/outside_collaborators/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->removeOutsideCollaborator($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'pre-receive-hooks') {
                        if ($pathChunks[4] === '{pre_receive_hook_id}') {
                            if ($call === 'DELETE /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\EnterpriseAdmin::class]->removePreReceiveHookEnforcementForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /orgs/{org}/public_members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Delete\Orgs::class] = new Router\Delete\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Orgs::class]->removePublicMembershipForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'DELETE /orgs/{org}/teams/{team_slug}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->deleteInOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'DELETE /projects/columns/cards/{card_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Projects::class, $this->router) === false) {
                                    $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Projects::class]->deleteCard($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /projects/{project_id}/collaborators/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Projects::class, $this->router) === false) {
                                    $this->router[Router\Delete\Projects::class] = new Router\Delete\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Projects::class]->removeCollaborator($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'pages') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/pages') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Repos::class, $this->router) === false) {
                                    $this->router[Router\Delete\Repos::class] = new Router\Delete\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Repos::class]->deletePagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'DELETE /repos/{owner}/{repo}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Activity::class, $this->router) === false) {
                                    $this->router[Router\Delete\Activity::class] = new Router\Delete\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Activity::class]->deleteRepoSubscription($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'authorized-keys') {
                            if ($call === 'DELETE /setup/api/settings/authorized-keys') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Delete\EnterpriseAdmin::class] = new Router\Delete\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\EnterpriseAdmin::class]->removeAuthorizedSshKey($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'DELETE /teams/{team_id}/discussions/{discussion_number}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->deleteDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /teams/{team_id}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->removeMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'DELETE /teams/{team_id}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->removeMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'DELETE /teams/{team_id}/projects/{project_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Teams::class, $this->router) === false) {
                                    $this->router[Router\Delete\Teams::class] = new Router\Delete\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Teams::class]->removeProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'DELETE /user/starred/{owner}/{repo}') {
                                $matched = true;
                                if (array_key_exists(Router\Delete\Activity::class, $this->router) === false) {
                                    $this->router[Router\Delete\Activity::class] = new Router\Delete\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Delete\Activity::class]->unstarRepoForAuthenticatedUser($params);
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
