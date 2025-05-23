<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Put;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CustomProperty;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Environment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\FileCommit;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAuditLogStreamConfig;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryInvitation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryRuleset;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): WithoutBody|GetAuditLogStreamConfig|CustomProperty|EmptyObject|RepositoryInvitation|FileCommit|Environment|RepositoryRuleset
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
                            } elseif ($pathChunks[5] === 'workflow') {
                                if ($call === 'PUT /enterprises/{enterprise}/actions/permissions/workflow') {
                                    return $this->routers->internal🔀Router🔀Put🔀Actions()->setGithubActionsDefaultWorkflowPermissionsEnterprise($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'audit-log') {
                        if ($pathChunks[4] === 'streams') {
                            if ($pathChunks[5] === '{stream_id}') {
                                if ($call === 'PUT /enterprises/{enterprise}/audit-log/streams/{stream_id}') {
                                    return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->updateAuditLogStream($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($pathChunks[5] === '{custom_property_name}') {
                                if ($call === 'PUT /enterprises/{enterprise}/properties/schema/{custom_property_name}') {
                                    return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->createOrUpdateEnterpriseCustomProperty($params);
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
                            } elseif ($pathChunks[5] === 'workflow') {
                                if ($call === 'PUT /orgs/{org}/actions/permissions/workflow') {
                                    return $this->routers->internal🔀Router🔀Put🔀Actions()->setGithubActionsDefaultWorkflowPermissionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/actions/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Actions()->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/codespaces/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Codespaces()->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'PUT /orgs/{org}/dependabot/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Dependabot()->createOrUpdateOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($pathChunks[5] === '{custom_property_name}') {
                                if ($call === 'PUT /orgs/{org}/properties/schema/{custom_property_name}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Orgs()->createOrUpdateCustomProperty($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($pathChunks[4] === 'teams') {
                            if ($pathChunks[5] === '{team_slug}') {
                                if ($call === 'PUT /orgs/{org}/security-managers/teams/{team_slug}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Orgs()->addSecurityManagerTeam($params);
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
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/environments/{environment_name}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Repos()->createOrUpdateEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($pathChunks[5] === '{ruleset_id}') {
                                if ($call === 'PUT /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
                                    return $this->routers->internal🔀Router🔀Put🔀Repos()->updateRepoRuleset($params);
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
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($pathChunks[5] === 'repositories') {
                                if ($call === 'PUT /user/codespaces/secrets/{secret_name}/repositories') {
                                    return $this->routers->internal🔀Router🔀Put🔀Codespaces()->setRepositoriesForSecretForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
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
