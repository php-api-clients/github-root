<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Delete;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheList;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsHostedRunner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\FileCommit;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): ActionsHostedRunner|WithoutBody|Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok|ActionsCacheList|FileCommit
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'hosted-runners') {
                            if ($pathChunks[5] === '{hosted_runner_id}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/actions/hosted-runners/{hosted_runner_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteHostedRunnerForEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
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
                    } elseif ($pathChunks[3] === 'audit-log') {
                        if ($pathChunks[4] === 'streams') {
                            if ($pathChunks[5] === '{stream_id}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/audit-log/streams/{stream_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->deleteAuditLogStream($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($pathChunks[5] === '{configuration_id}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/code-security/configurations/{configuration_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀CodeSecurity()->deleteConfigurationForEnterprise($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($pathChunks[5] === '{custom_property_name}') {
                                if ($call === 'DELETE /enterprises/{enterprise}/properties/schema/{custom_property_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀EnterpriseAdmin()->removeEnterpriseCustomProperty($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'hosted-runners') {
                            if ($pathChunks[5] === '{hosted_runner_id}') {
                                if ($call === 'DELETE /orgs/{org}/actions/hosted-runners/{hosted_runner_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Actions()->deleteHostedRunnerForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
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
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($pathChunks[5] === 'detach') {
                                if ($call === 'DELETE /orgs/{org}/code-security/configurations/detach') {
                                    return $this->routers->internal🔀Router🔀Delete🔀CodeSecurity()->detachConfiguration($params);
                                }
                            } elseif ($pathChunks[5] === '{configuration_id}') {
                                if ($call === 'DELETE /orgs/{org}/code-security/configurations/{configuration_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀CodeSecurity()->deleteConfiguration($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'access') {
                            if ($pathChunks[5] === 'selected_users') {
                                if ($call === 'DELETE /orgs/{org}/codespaces/access/selected_users') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Codespaces()->deleteCodespacesAccessUsers($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'DELETE /orgs/{org}/codespaces/secrets/{secret_name}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Codespaces()->deleteOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($pathChunks[5] === 'selected_teams') {
                                if ($call === 'DELETE /orgs/{org}/copilot/billing/selected_teams') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Copilot()->cancelCopilotSeatAssignmentForTeams($params);
                                }
                            } elseif ($pathChunks[5] === 'selected_users') {
                                if ($call === 'DELETE /orgs/{org}/copilot/billing/selected_users') {
                                    return $this->routers->internal🔀Router🔀Delete🔀Copilot()->cancelCopilotSeatAssignmentForUsers($params);
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
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'network-configurations') {
                            if ($pathChunks[5] === '{network_configuration_id}') {
                                if ($call === 'DELETE /orgs/{org}/settings/network-configurations/{network_configuration_id}') {
                                    return $this->routers->internal🔀Router🔀Delete🔀HostedCompute()->deleteNetworkConfigurationFromOrg($params);
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
