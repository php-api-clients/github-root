<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Put;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\FileCommit;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryInvitation;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): WithoutBody|EmptyObject|RepositoryInvitation|FileCommit
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/organizations') {
                                    return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setSelectedOrganizationsEnabledGithubActionsEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/selected-actions') {
                                    return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setAllowedActionsEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/repositories') {
                                    return $this->routers->internal🔀Router🔀Put🔀Actions()->setSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/selected-actions') {
                                    return $this->routers->internal🔀Router🔀Put🔀Actions()->setAllowedActionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Actions()->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'permissions') {
                                if ($call === 'PUT /repos/{owner}/{repo}/actions/permissions') {
                                    return $this->routers->internal🔀Router🔀Put🔀Actions()->setGithubActionsPermissionsRepository($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/collaborators/{username}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Repos()->addCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/contents/{path}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Repos()->createOrUpdateFileContents($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'PUT /teams/{team_id}/repos/{owner}/{repo}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Teams()->addOrUpdateRepoPermissionsLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($pathChunks[5] === '{repository_id}') {
                                if ($call === 'PUT /user/installations/{installation_id}/repositories/{repository_id}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Apps()->addRepoToInstallationForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
