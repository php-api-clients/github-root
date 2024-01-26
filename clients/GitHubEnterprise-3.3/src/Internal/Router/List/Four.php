<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\List;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\AuditLogEvent>|Observable<Schema\GistComment>|WithoutBody|Observable<Schema\GistCommit>|Observable<Schema\GistSimple>|Observable<Schema\Event>|Observable<Schema\OrgHook>|Observable<Schema\Issue>|Observable<Schema\SimpleUser>|Observable<Schema\OrgPreReceiveHook>|Observable<Schema\Project>|Observable<Schema\MinimalRepository>|Observable<Schema\Team>|Observable<Schema\ProjectColumn>|Observable<Schema\TeamDiscussion>|Observable<Schema\TeamProject>|Observable<Schema\OrgMembership>|Observable<Schema\BaseGist>|Observable<Schema\GpgKey>|Observable<Schema\KeySimple>|Observable<Schema\OrganizationSimple> */
    public function call(string $call, array $params, array $pathChunks): iterable|WithoutBody
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'LIST /enterprises/{enterprise}/audit-log') {
                            return $this->routers->internal🔀Router🔀List🔀EnterpriseAdmin()->getAuditLogListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'LIST /gists/{gist_id}/comments') {
                            return $this->routers->internal🔀Router🔀List🔀Gists()->listCommentsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'LIST /gists/{gist_id}/commits') {
                            return $this->routers->internal🔀Router🔀List🔀Gists()->listCommitsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'LIST /gists/{gist_id}/forks') {
                            return $this->routers->internal🔀Router🔀List🔀Gists()->listForksListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'LIST /orgs/{org}/audit-log') {
                            return $this->routers->internal🔀Router🔀List🔀Orgs()->getAuditLogListing($params);
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($call === 'LIST /orgs/{org}/events') {
                            return $this->routers->internal🔀Router🔀List🔀Activity()->listPublicOrgEventsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'LIST /orgs/{org}/hooks') {
                            return $this->routers->internal🔀Router🔀List🔀Orgs()->listWebhooksListing($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'LIST /orgs/{org}/issues') {
                            return $this->routers->internal🔀Router🔀List🔀Issues()->listForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'LIST /orgs/{org}/members') {
                            return $this->routers->internal🔀Router🔀List🔀Orgs()->listMembersListing($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'LIST /orgs/{org}/outside_collaborators') {
                            return $this->routers->internal🔀Router🔀List🔀Orgs()->listOutsideCollaboratorsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'pre-receive-hooks') {
                        if ($call === 'LIST /orgs/{org}/pre-receive-hooks') {
                            return $this->routers->internal🔀Router🔀List🔀EnterpriseAdmin()->listPreReceiveHooksForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /orgs/{org}/projects') {
                            return $this->routers->internal🔀Router🔀List🔀Projects()->listForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($call === 'LIST /orgs/{org}/public_members') {
                            return $this->routers->internal🔀Router🔀List🔀Orgs()->listPublicMembersListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /orgs/{org}/repos') {
                            return $this->routers->internal🔀Router🔀List🔀Repos()->listForOrgListing($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'LIST /orgs/{org}/teams') {
                            return $this->routers->internal🔀Router🔀List🔀Teams()->listListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'LIST /projects/{project_id}/collaborators') {
                            return $this->routers->internal🔀Router🔀List🔀Projects()->listCollaboratorsListing($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'LIST /projects/{project_id}/columns') {
                            return $this->routers->internal🔀Router🔀List🔀Projects()->listColumnsListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'LIST /teams/{team_id}/discussions') {
                            return $this->routers->internal🔀Router🔀List🔀Teams()->listDiscussionsLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'LIST /teams/{team_id}/members') {
                            return $this->routers->internal🔀Router🔀List🔀Teams()->listMembersLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /teams/{team_id}/projects') {
                            return $this->routers->internal🔀Router🔀List🔀Teams()->listProjectsLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /teams/{team_id}/repos') {
                            return $this->routers->internal🔀Router🔀List🔀Teams()->listReposLegacyListing($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'LIST /teams/{team_id}/teams') {
                            return $this->routers->internal🔀Router🔀List🔀Teams()->listChildLegacyListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'LIST /user/memberships/orgs') {
                            return $this->routers->internal🔀Router🔀List🔀Orgs()->listMembershipsForAuthenticatedUserListing($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'LIST /users/{username}/events') {
                            return $this->routers->internal🔀Router🔀List🔀Activity()->listEventsForAuthenticatedUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'LIST /users/{username}/followers') {
                            return $this->routers->internal🔀Router🔀List🔀Users()->listFollowersForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'LIST /users/{username}/following') {
                            return $this->routers->internal🔀Router🔀List🔀Users()->listFollowingForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'LIST /users/{username}/gists') {
                            return $this->routers->internal🔀Router🔀List🔀Gists()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'LIST /users/{username}/gpg_keys') {
                            return $this->routers->internal🔀Router🔀List🔀Users()->listGpgKeysForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'LIST /users/{username}/keys') {
                            return $this->routers->internal🔀Router🔀List🔀Users()->listPublicKeysForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'LIST /users/{username}/orgs') {
                            return $this->routers->internal🔀Router🔀List🔀Orgs()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'LIST /users/{username}/projects') {
                            return $this->routers->internal🔀Router🔀List🔀Projects()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($call === 'LIST /users/{username}/received_events') {
                            return $this->routers->internal🔀Router🔀List🔀Activity()->listReceivedEventsForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'LIST /users/{username}/repos') {
                            return $this->routers->internal🔀Router🔀List🔀Repos()->listForUserListing($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'LIST /users/{username}/subscriptions') {
                            return $this->routers->internal🔀Router🔀List🔀Activity()->listReposWatchedByUserListing($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
