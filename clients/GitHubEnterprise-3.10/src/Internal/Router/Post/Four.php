<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\BaseGist;
use ApiClients\Client\GitHubEnterprise\Schema\FullRepository;
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
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterprise\Schema\TeamFull;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\GhesSetMaintenanceResponse>|WithoutBody|Schema\FullRepository */
    public function call(string $call, array $params, array $pathChunks): Integration|Authorization|GistComment|WithoutBody|BaseGist|iterable|OrganizationCustomRepositoryRole|OrgHook|Migration|Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|Project|FullRepository|TeamFull|ProjectColumn|GroupResponse|UserResponse|MaintenanceStatus|TeamDiscussion
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
            } elseif ($pathChunks[1] === 'manage') {
                if ($pathChunks[2] === 'v1') {
                    if ($pathChunks[3] === 'maintenance') {
                        if ($call === 'POST /manage/v1/maintenance') {
                            return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->setManageMaintenance($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'custom-repository-roles') {
                        if ($call === 'POST /orgs/{org}/custom-repository-roles') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->createCustomRepoRole($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'POST /orgs/{org}/hooks') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->createWebhook($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'POST /orgs/{org}/migrations') {
                            return $this->routers->internal🔀Router🔀Post🔀Migrations()->startForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'POST /orgs/{org}/personal-access-token-requests') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->reviewPatGrantRequestsInBulk($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'POST /orgs/{org}/personal-access-tokens') {
                            return $this->routers->internal🔀Router🔀Post🔀Orgs()->updatePatAccesses($params);
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
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'Groups') {
                        if ($call === 'POST /scim/v2/Groups') {
                            return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->provisionEnterpriseGroup($params);
                        }
                    } elseif ($pathChunks[3] === 'Users') {
                        if ($call === 'POST /scim/v2/Users') {
                            return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->provisionEnterpriseUser($params);
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
