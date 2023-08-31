<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\BaseGist;
use ApiClients\Client\GitHubEnterprise\Schema\GistComment;
use ApiClients\Client\GitHubEnterprise\Schema\Integration;
use ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Migration;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\Project;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectColumn;
use ApiClients\Client\GitHubEnterprise\Schema\Repository;
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterprise\Schema\TeamFull;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\GistComment|array{code:int}|Schema\BaseGist|Schema\ProjectColumn|Schema\MaintenanceStatus */
    public function call(string $call, array $params, array $pathChunks): Integration|Authorization|GistComment|BaseGist|OrgHook|Migration|Project|Repository|TeamFull|ProjectColumn|MaintenanceStatus|TeamDiscussion|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app-manifests') {
                if ($pathChunks[2] === '{code}') {
                    if ($pathChunks[3] === 'conversions') {
                        if ($call === 'POST /app-manifests/{code}/conversions') {
                            return $this->routers->internal🔀Router🔀Post🔀Apps()->createFromManifest($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($call === 'POST /applications/{client_id}/token') {
                            return $this->routers->internal🔀Router🔀Post🔀Apps()->checkToken($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'POST /gists/{gist_id}/comments') {
                            return $this->routers->internal🔀Router🔀Post🔀Gists()->createComment($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'POST /gists/{gist_id}/forks') {
                            return $this->routers->internal🔀Router🔀Post🔀Gists()->fork($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'hooks') {
                        if ($call === 'POST /orgs/{org}/hooks') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->createWebhook($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'POST /orgs/{org}/migrations') {
                            return $this->routers->internal🔀Router🔀Post🔀Migrations()->startForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'POST /orgs/{org}/projects') {
                            return $this->routers->internal🔀Router🔀Post🔀Projects()->createForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'POST /orgs/{org}/repos') {
                            return $this->routers->internal🔀Router🔀Post🔀Repos()->createInOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'POST /orgs/{org}/teams') {
                            return $this->routers->internal🔀Router🔀Post🔀Teams()->create($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'columns') {
                        if ($call === 'POST /projects/{project_id}/columns') {
                            return $this->routers->internal🔀Router🔀Post🔀Projects()->createColumn($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'configure') {
                        if ($call === 'POST /setup/api/configure') {
                            return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->startConfigurationProcess($params);
                        }
                    } elseif ($pathChunks[3] === 'maintenance') {
                        if ($call === 'POST /setup/api/maintenance') {
                            return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->enableOrDisableMaintenanceMode($params);
                        }
                    } elseif ($pathChunks[3] === 'start') {
                        if ($call === 'POST /setup/api/start') {
                            return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createEnterpriseServerLicense($params);
                        }
                    } elseif ($pathChunks[3] === 'upgrade') {
                        if ($call === 'POST /setup/api/upgrade') {
                            return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->upgradeLicense($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'POST /teams/{team_id}/discussions') {
                            return $this->routers->internal🔀Router🔀Post🔀Teams()->createDiscussionLegacy($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
