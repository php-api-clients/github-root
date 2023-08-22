<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\List;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
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

    /** @return iterable<Schema\GlobalHook>|iterable<Schema\PublicKeyFull>|iterable<Schema\PreReceiveEnvironment>|iterable<Schema\PreReceiveHook>|iterable<Schema\Authorization>|iterable<Schema\Installation>|(iterable<Schema\ApplicationGrant>|array{code: int})|(iterable<Schema\BaseGist>|(iterable<Schema\Email>|(iterable<Schema\SimpleUser>|(iterable<Schema\GpgKey>|(iterable<Schema\Issue>|(iterable<Schema\Key>|(iterable<Schema\OrganizationSimple>|(iterable<Schema\Repository>|(iterable<Schema\RepositoryInvitation>|(iterable<Schema\MinimalRepository>|(iterable<Schema\TeamFull> */
    public function call(string $call, array $params, array $pathChunks): iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($call === 'LIST /admin/hooks') {
                        $matched = true;
                        if (array_key_exists(Router\List\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\List\EnterpriseAdmin::class] = new Router\List\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\EnterpriseAdmin::class]->ListGlobalWebhooksListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /admin/keys') {
                        $matched = true;
                        if (array_key_exists(Router\List\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\List\EnterpriseAdmin::class] = new Router\List\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\EnterpriseAdmin::class]->ListPublicKeysListing($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($call === 'LIST /admin/pre-receive-environments') {
                        $matched = true;
                        if (array_key_exists(Router\List\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\List\EnterpriseAdmin::class] = new Router\List\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\EnterpriseAdmin::class]->ListPreReceiveEnvironmentsListing($params);
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($call === 'LIST /admin/pre-receive-hooks') {
                        $matched = true;
                        if (array_key_exists(Router\List\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\List\EnterpriseAdmin::class] = new Router\List\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\EnterpriseAdmin::class]->ListPreReceiveHooksListing($params);
                    }
                } elseif ($pathChunks[2] === 'tokens') {
                    if ($call === 'LIST /admin/tokens') {
                        $matched = true;
                        if (array_key_exists(Router\List\EnterpriseAdmin::class, $this->router) === false) {
                            $this->router[Router\List\EnterpriseAdmin::class] = new Router\List\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\EnterpriseAdmin::class]->ListPersonalAccessTokensListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($call === 'LIST /app/installations') {
                        $matched = true;
                        if (array_key_exists(Router\List\Apps::class, $this->router) === false) {
                            $this->router[Router\List\Apps::class] = new Router\List\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Apps::class]->ListInstallationsListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === 'grants') {
                    if ($call === 'LIST /applications/grants') {
                        $matched = true;
                        if (array_key_exists(Router\List\OauthAuthorizations::class, $this->router) === false) {
                            $this->router[Router\List\OauthAuthorizations::class] = new Router\List\OauthAuthorizations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\OauthAuthorizations::class]->ListGrantsListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === 'public') {
                    if ($call === 'LIST /gists/public') {
                        $matched = true;
                        if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                            $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Gists::class]->ListPublicListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /gists/starred') {
                        $matched = true;
                        if (array_key_exists(Router\List\Gists::class, $this->router) === false) {
                            $this->router[Router\List\Gists::class] = new Router\List\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Gists::class]->ListStarredListing($params);
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'emails') {
                    if ($call === 'LIST /user/emails') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'followers') {
                    if ($call === 'LIST /user/followers') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListFollowersForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($call === 'LIST /user/following') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListFollowedByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($call === 'LIST /user/gpg_keys') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListGpgKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'issues') {
                    if ($call === 'LIST /user/issues') {
                        $matched = true;
                        if (array_key_exists(Router\List\Issues::class, $this->router) === false) {
                            $this->router[Router\List\Issues::class] = new Router\List\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Issues::class]->ListForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($call === 'LIST /user/keys') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListPublicSshKeysForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'orgs') {
                    if ($call === 'LIST /user/orgs') {
                        $matched = true;
                        if (array_key_exists(Router\List\Orgs::class, $this->router) === false) {
                            $this->router[Router\List\Orgs::class] = new Router\List\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Orgs::class]->ListForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'public_emails') {
                    if ($call === 'LIST /user/public_emails') {
                        $matched = true;
                        if (array_key_exists(Router\List\Users::class, $this->router) === false) {
                            $this->router[Router\List\Users::class] = new Router\List\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Users::class]->ListPublicEmailsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repos') {
                    if ($call === 'LIST /user/repos') {
                        $matched = true;
                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Repos::class]->ListForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'repository_invitations') {
                    if ($call === 'LIST /user/repository_invitations') {
                        $matched = true;
                        if (array_key_exists(Router\List\Repos::class, $this->router) === false) {
                            $this->router[Router\List\Repos::class] = new Router\List\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Repos::class]->ListInvitationsForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($call === 'LIST /user/starred') {
                        $matched = true;
                        if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                            $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Activity::class]->ListReposStarredByAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'subscriptions') {
                    if ($call === 'LIST /user/subscriptions') {
                        $matched = true;
                        if (array_key_exists(Router\List\Activity::class, $this->router) === false) {
                            $this->router[Router\List\Activity::class] = new Router\List\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Activity::class]->ListWatchedReposForAuthenticatedUserListing($params);
                    }
                } elseif ($pathChunks[2] === 'teams') {
                    if ($call === 'LIST /user/teams') {
                        $matched = true;
                        if (array_key_exists(Router\List\Teams::class, $this->router) === false) {
                            $this->router[Router\List\Teams::class] = new Router\List\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                        }

                        return $this->router[Router\List\Teams::class]->ListForAuthenticatedUserListing($params);
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
