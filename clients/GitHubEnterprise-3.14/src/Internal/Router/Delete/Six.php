<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Delete;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheList;
use ApiClients\Client\GitHubEnterprise\Schema\FileCommit;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): WithoutBody|ActionsCacheList|FileCommit|RepositoryPreReceiveHook
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deleteSelfHostedRunnerGroupFromEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/actions/runners/{runner_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deleteSelfHostedRunnerFromEnterprise($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'DELETE /orgs/{org}/actions/runner-groups/{runner_group_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteSelfHostedRunnerGroupFromOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'DELETE /orgs/{org}/actions/runners/{runner_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteSelfHostedRunnerFromOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'DELETE /orgs/{org}/actions/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteOrgSecret($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'DELETE /orgs/{org}/actions/variables/{name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Dependabot()->deleteOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($pathChunks[5] === 'archive') {
                                if ($call === 'DELETE /orgs/{org}/migrations/{migration_id}/archive') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Migrations()->deleteArchiveForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($pathChunks[4] === 'teams') {
                            if ($pathChunks[5] === '{team_slug}') {
                                if ($call === 'DELETE /orgs/{org}/organization-roles/teams/{team_slug}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Orgs()->revokeAllOrgRolesTeam($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'users') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'DELETE /orgs/{org}/organization-roles/users/{username}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Orgs()->revokeAllOrgRolesUser($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'DELETE /orgs/{org}/packages/{package_type}/{package_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Packages()->deletePackageForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($pathChunks[5] === '{custom_property_name}') {
                                if ($call === 'DELETE /orgs/{org}/properties/schema/{custom_property_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Orgs()->removeCustomProperty($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($pathChunks[4] === 'teams') {
                            if ($pathChunks[5] === '{team_slug}') {
                                if ($call === 'DELETE /orgs/{org}/security-managers/teams/{team_slug}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Orgs()->removeSecurityManagerTeam($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'external-groups') {
                                if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/external-groups') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Teams()->unlinkExternalIdpGroupFromTeamForOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'caches') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/actions/caches') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteActionsCacheByKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($pathChunks[5] === '{autolink_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteAutolink($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/collaborators/{username}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->removeCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/comments/{comment_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/contents/{path}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteFile($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/environments/{environment_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteAnEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($pathChunks[5] === '{key_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/keys/{key_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/labels/{name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Issues()->deleteLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Issues()->deleteMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($pathChunks[5] === '{pre_receive_hook_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->removePreReceiveHookEnforcementForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/releases/{release_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($pathChunks[5] === '{ruleset_id}') {
                                if ($call === 'DELETE /repos/{owner}/{repo}/rulesets/{ruleset_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Repos()->deleteRepoRuleset($params);
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
                                if ($call === 'DELETE /teams/{team_id}/repos/{owner}/{repo}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Teams()->removeRepoLegacy($params);
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
                                if ($call === 'DELETE /user/installations/{installation_id}/repositories/{repository_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Apps()->removeRepoFromInstallationForAuthenticatedUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'packages') {
                        if ($pathChunks[4] === '{package_type}') {
                            if ($pathChunks[5] === '{package_name}') {
                                if ($call === 'DELETE /users/{username}/packages/{package_type}/{package_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Packages()->deletePackageForUser($params);
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
