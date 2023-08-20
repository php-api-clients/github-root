<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\GistComment;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectCard;
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterprise\Schema\TeamFull;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
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

    /** @return |(Schema\ProjectCard|array{code: int})|(Schema\GroupResponse|(Schema\UserResponse */
    public function call(string $call, array $params, array $pathChunks): GistComment|OrgHook|OrgPreReceiveHook|TeamFull|ProjectCard|GroupResponse|UserResponse|TeamDiscussion|OrgMembership|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'PATCH /gists/{gist_id}/comments/{comment_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\Gists::class, $this->router) === false) {
                                    $this->router[Router\Patch\Gists::class] = new Router\Patch\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\Gists::class]->updateComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\Orgs::class]->updateWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'pre-receive-hooks') {
                        if ($pathChunks[4] === '{pre_receive_hook_id}') {
                            if ($call === 'PATCH /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\EnterpriseAdmin::class]->updatePreReceiveHookEnforcementForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'PATCH /orgs/{org}/teams/{team_slug}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\Teams::class, $this->router) === false) {
                                    $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\Teams::class]->updateInOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'PATCH /projects/columns/cards/{card_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\Projects::class, $this->router) === false) {
                                    $this->router[Router\Patch\Projects::class] = new Router\Patch\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\Projects::class]->updateCard($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'Groups') {
                        if ($pathChunks[4] === '{scim_group_id}') {
                            if ($call === 'PATCH /scim/v2/Groups/{scim_group_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\EnterpriseAdmin::class]->updateAttributeForEnterpriseGroup($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'Users') {
                        if ($pathChunks[4] === '{scim_user_id}') {
                            if ($call === 'PATCH /scim/v2/Users/{scim_user_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\EnterpriseAdmin::class]->updateAttributeForEnterpriseUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\Teams::class, $this->router) === false) {
                                    $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\Teams::class]->updateDiscussionLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'PATCH /user/memberships/orgs/{org}') {
                                $matched = true;
                                if (array_key_exists(Router\Patch\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Patch\Orgs::class]->updateMembershipForAuthenticatedUser($params);
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
