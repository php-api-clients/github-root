<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\GistComment;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectCard;
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterprise\Schema\TeamFull;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\GistComment|Schema\OrganizationCustomRepositoryRole|Schema\OrgHook|Schema\OrgPreReceiveHook|iterable<int,Schema\CustomProperty>|WithoutBody|Schema\TeamFull|Schema\ProjectCard|Schema\TeamDiscussion|Schema\OrgMembership */
    public function call(string $call, array $params, array $pathChunks): GistComment|OrganizationCustomRepositoryRole|OrgHook|OrgPreReceiveHook|iterable|WithoutBody|TeamFull|ProjectCard|TeamDiscussion|OrgMembership
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'PATCH /gists/{gist_id}/comments/{comment_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Gists()->updateComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'custom-repository-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'PATCH /orgs/{org}/custom-repository-roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateCustomRepoRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'pre-receive-hooks') {
                        if ($pathChunks[4] === '{pre_receive_hook_id}') {
                            if ($call === 'PATCH /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updatePreReceiveHookEnforcementForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($call === 'PATCH /orgs/{org}/properties/schema') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->createOrUpdateCustomProperties($params);
                            }
                        } elseif ($pathChunks[4] === 'values') {
                            if ($call === 'PATCH /orgs/{org}/properties/values') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->createOrUpdateCustomPropertiesValuesForRepos($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'PATCH /orgs/{org}/teams/{team_slug}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateInOrg($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'PATCH /projects/columns/cards/{card_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Projects()->updateCard($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'PATCH /teams/{team_id}/discussions/{discussion_number}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateDiscussionLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'PATCH /user/memberships/orgs/{org}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
