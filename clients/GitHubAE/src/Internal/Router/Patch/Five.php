<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Patch;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\GistComment;
use ApiClients\Client\GitHubAE\Schema\OrgHook;
use ApiClients\Client\GitHubAE\Schema\OrgMembership;
use ApiClients\Client\GitHubAE\Schema\ProjectCard;
use ApiClients\Client\GitHubAE\Schema\TeamDiscussion;
use ApiClients\Client\GitHubAE\Schema\TeamFull;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\OrgHook|Schema\ProjectCard|array{code:int} */
    public function call(string $call, array $params, array $pathChunks): GistComment|OrgHook|TeamFull|ProjectCard|TeamDiscussion|OrgMembership|array
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
                    if ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}') {
                                return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateWebhook($params);
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
