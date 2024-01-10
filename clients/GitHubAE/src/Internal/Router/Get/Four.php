<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Internal\Router\Get;

use ApiClients\Client\GitHubAE\Internal\Routers;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview;
use ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview;
use ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubAE\Schema\ExternalGroups;
use ApiClients\Client\GitHubAE\Schema\FullRepository;
use ApiClients\Client\GitHubAE\Schema\GistSimple;
use ApiClients\Client\GitHubAE\Schema\GitignoreTemplate;
use ApiClients\Client\GitHubAE\Schema\GlobalHook;
use ApiClients\Client\GitHubAE\Schema\GpgKey;
use ApiClients\Client\GitHubAE\Schema\Hovercard;
use ApiClients\Client\GitHubAE\Schema\Installation;
use ApiClients\Client\GitHubAE\Schema\Key;
use ApiClients\Client\GitHubAE\Schema\LicenseInfo;
use ApiClients\Client\GitHubAE\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubAE\Schema\ProjectColumn;
use ApiClients\Client\GitHubAE\Schema\Repository;
use ApiClients\Client\GitHubAE\Schema\StarredRepository;
use ApiClients\Client\GitHubAE\Schema\Thread;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\HookDeliveryItem>|Observable<Schema\AuditLogEvent>|Observable<Schema\GistComment>|WithoutBody|Observable<Schema\GistCommit>|Observable<Schema\GistSimple>|Observable<Schema\OrgHook>|Observable<Schema\Issue>|Observable<Schema\SimpleUser>|Observable<Schema\Migration>|Observable<Schema\Project>|Observable<Schema\MinimalRepository>|Observable<Schema\Team>|Observable<Schema\ProjectColumn>|Observable<Schema\TeamDiscussion>|Observable<Schema\TeamProject>|Observable<Schema\OrgMembership>|Observable<Schema\Event>|Observable<Schema\BaseGist>|Observable<Schema\GpgKey>|Observable<Schema\KeySimple>|Observable<Schema\OrganizationSimple> */
    public function call(string $call, array $params, array $pathChunks): GlobalHook|PreReceiveEnvironment|WebhookConfig|iterable|Installation|LicenseInfo|EnterpriseOverview|EnterpriseCommentOverview|EnterpriseGistOverview|EnterpriseHookOverview|EnterpriseIssueOverview|EnterpriseMilestoneOverview|EnterpriseOrganizationOverview|EnterprisePageOverview|EnterprisePullRequestOverview|EnterpriseRepositoryOverview|EnterpriseUserOverview|WithoutBody|GistSimple|GitignoreTemplate|Thread|ExternalGroups|Ok|ProjectColumn|FullRepository|BasicError|GpgKey|Key|Hovercard|StarredRepository|Repository
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($call === 'GET /admin/hooks/{hook_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getPreReceiveEnvironment($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'GET /app/hook/config') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getWebhookConfigForApp($params);
                        }
                    } elseif ($pathChunks[3] === 'deliveries') {
                        if ($call === 'GET /app/hook/deliveries') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->listWebhookDeliveries($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'GET /app/installations/{installation_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'settings') {
                    if ($pathChunks[3] === 'license') {
                        if ($call === 'GET /enterprise/settings/license') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getLicenseInformation($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'stats') {
                    if ($pathChunks[3] === 'all') {
                        if ($call === 'GET /enterprise/stats/all') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAllStats($params);
                        }
                    } elseif ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /enterprise/stats/comments') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getCommentStats($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /enterprise/stats/gists') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getGistStats($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /enterprise/stats/hooks') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getHooksStats($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /enterprise/stats/issues') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getIssueStats($params);
                        }
                    } elseif ($pathChunks[3] === 'milestones') {
                        if ($call === 'GET /enterprise/stats/milestones') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getMilestoneStats($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /enterprise/stats/orgs') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getOrgStats($params);
                        }
                    } elseif ($pathChunks[3] === 'pages') {
                        if ($call === 'GET /enterprise/stats/pages') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getPagesStats($params);
                        }
                    } elseif ($pathChunks[3] === 'pulls') {
                        if ($call === 'GET /enterprise/stats/pulls') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getPullRequestStats($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /enterprise/stats/repos') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getRepoStats($params);
                        }
                    } elseif ($pathChunks[3] === 'users') {
                        if ($call === 'GET /enterprise/stats/users') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getUserStats($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /enterprises/{enterprise}/audit-log') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAuditLog($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /gists/{gist_id}/comments') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listComments($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'GET /gists/{gist_id}/commits') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listCommits($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'GET /gists/{gist_id}/forks') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listForks($params);
                        }
                    } elseif ($pathChunks[3] === 'star') {
                        if ($call === 'GET /gists/{gist_id}/star') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->checkIsStarred($params);
                        }
                    } elseif ($pathChunks[3] === '{sha}') {
                        if ($call === 'GET /gists/{gist_id}/{sha}') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->getRevision($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($pathChunks[3] === '{name}') {
                        if ($call === 'GET /gitignore/templates/{name}') {
                            return $this->routers->internal🔀Router🔀Get🔀Gitignore()->getTemplate($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'GET /notifications/threads/{thread_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->getThread($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /orgs/{org}/audit-log') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->getAuditLog($params);
                        }
                    } elseif ($pathChunks[3] === 'external-groups') {
                        if ($call === 'GET /orgs/{org}/external-groups') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listExternalIdpGroupsForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /orgs/{org}/hooks') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listWebhooks($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /orgs/{org}/installation') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getOrgInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'installations') {
                        if ($call === 'GET /orgs/{org}/installations') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listAppInstallations($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /orgs/{org}/issues') {
                            return $this->routers->internal🔀Router🔀Get🔀Issues()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /orgs/{org}/members') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'GET /orgs/{org}/migrations') {
                            return $this->routers->internal🔀Router🔀Get🔀Migrations()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'GET /orgs/{org}/outside_collaborators') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listOutsideCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /orgs/{org}/projects') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /orgs/{org}/repos') {
                            return $this->routers->internal🔀Router🔀Get🔀Repos()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /orgs/{org}/teams') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->list($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'GET /projects/columns/{column_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->getColumn($params);
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'GET /projects/{project_id}/collaborators') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'GET /projects/{project_id}/columns') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listColumns($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'GET /repos/{owner}/{repo}') {
                            return $this->routers->internal🔀Router🔀Get🔀Repos()->get($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'GET /teams/{team_id}/discussions') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listDiscussionsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /teams/{team_id}/members') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listMembersLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /teams/{team_id}/projects') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listProjectsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /teams/{team_id}/repos') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listReposLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /teams/{team_id}/teams') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listChildLegacy($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/following/{username}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->checkPersonIsFollowedByAuthenticated($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->getGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'GET /user/keys/{key_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->getPublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /user/memberships/orgs') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listMembershipsForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'GET /users/{username}/events') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listEventsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'GET /users/{username}/followers') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listFollowersForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'GET /users/{username}/following') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listFollowingForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /users/{username}/gists') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'GET /users/{username}/gpg_keys') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listGpgKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'hovercard') {
                        if ($call === 'GET /users/{username}/hovercard') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->getContextForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /users/{username}/installation') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getUserInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'GET /users/{username}/keys') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listPublicKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /users/{username}/orgs') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /users/{username}/projects') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /users/{username}/repos') {
                            return $this->routers->internal🔀Router🔀Get🔀Repos()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'starred') {
                        if ($call === 'GET /users/{username}/starred') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listReposStarredByUser($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'GET /users/{username}/subscriptions') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listReposWatchedByUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
