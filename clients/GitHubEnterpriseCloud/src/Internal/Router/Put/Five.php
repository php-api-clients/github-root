<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Put;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Import;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\IssueType;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryRuleset;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositorySubscription;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ThreadSubscription;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Topic;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): WithoutBody|RepositoryRuleset|ThreadSubscription|IssueType|OrgMembership|Json|Import|InteractionLimitResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|Accepted|RepositorySubscription|Topic|TeamMembership|EmptyObject
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'suspended') {
                            if ($call === 'PUT /app/installations/{installation_id}/suspended') {
                                return $this->routers->internal🔀Router🔀Put🔀Apps()->suspendInstallation($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'PUT /enterprises/{enterprise}/actions/permissions') {
                                return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setGithubActionsPermissionsEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'PUT /enterprises/{enterprise}/rulesets/{ruleset_id}') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->updateEnterpriseRuleset($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'PUT /notifications/threads/{thread_id}/subscription') {
                                return $this->routers->internal🔀Router🔀Put🔀Activity()->setThreadSubscription($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'PUT /orgs/{org}/actions/permissions') {
                                return $this->routers->internal🔀Router🔀Put🔀Actions()->setGithubActionsPermissionsOrganization($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'blocks') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/blocks/{username}') {
                                return $this->routers->internal🔀Router🔀Put🔀Orgs()->blockUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'access') {
                            if ($call === 'PUT /orgs/{org}/codespaces/access') {
                                return $this->routers->internal🔀Router🔀Put🔀Codespaces()->setCodespacesAccess($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'issue-types') {
                        if ($pathChunks[4] === '{issue_type_id}') {
                            if ($call === 'PUT /orgs/{org}/issue-types/{issue_type_id}') {
                                return $this->routers->internal🔀Router🔀Put🔀Orgs()->updateIssueType($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Put🔀Orgs()->setMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/outside_collaborators/{username}') {
                                return $this->routers->internal🔀Router🔀Put🔀Orgs()->convertMemberToOutsideCollaborator($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/public_members/{username}') {
                                return $this->routers->internal🔀Router🔀Put🔀Orgs()->setPublicMembershipForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'PUT /orgs/{org}/rulesets/{ruleset_id}') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->updateOrgRuleset($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /projects/{project_id}/collaborators/{username}') {
                                return $this->routers->internal🔀Router🔀Put🔀Projects()->addCollaborator($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'automated-security-fixes') {
                            if ($call === 'PUT /repos/{owner}/{repo}/automated-security-fixes') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->enableAutomatedSecurityFixes($params);
                            }
                        } elseif ($pathChunks[4] === 'import') {
                            if ($call === 'PUT /repos/{owner}/{repo}/import') {
                                return $this->routers->internal🔀Router🔀Put🔀Migrations()->startImport($params);
                            }
                        } elseif ($pathChunks[4] === 'interaction-limits') {
                            if ($call === 'PUT /repos/{owner}/{repo}/interaction-limits') {
                                return $this->routers->internal🔀Router🔀Put🔀Interactions()->setRestrictionsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'lfs') {
                            if ($call === 'PUT /repos/{owner}/{repo}/lfs') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->enableLfsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'PUT /repos/{owner}/{repo}/notifications') {
                                return $this->routers->internal🔀Router🔀Put🔀Activity()->markRepoNotificationsAsRead($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'PUT /repos/{owner}/{repo}/pages') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->updateInformationAboutPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'private-vulnerability-reporting') {
                            if ($call === 'PUT /repos/{owner}/{repo}/private-vulnerability-reporting') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->enablePrivateVulnerabilityReporting($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'PUT /repos/{owner}/{repo}/subscription') {
                                return $this->routers->internal🔀Router🔀Put🔀Activity()->setRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'PUT /repos/{owner}/{repo}/topics') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->replaceAllTopics($params);
                            }
                        } elseif ($pathChunks[4] === 'vulnerability-alerts') {
                            if ($call === 'PUT /repos/{owner}/{repo}/vulnerability-alerts') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->enableVulnerabilityAlerts($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /teams/{team_id}/members/{username}') {
                                return $this->routers->internal🔀Router🔀Put🔀Teams()->addMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /teams/{team_id}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Put🔀Teams()->addOrUpdateMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'PUT /teams/{team_id}/projects/{project_id}') {
                                return $this->routers->internal🔀Router🔀Put🔀Teams()->addOrUpdateProjectPermissionsLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'PUT /user/codespaces/secrets/{secret_name}') {
                                return $this->routers->internal🔀Router🔀Put🔀Codespaces()->createOrUpdateSecretForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'PUT /user/starred/{owner}/{repo}') {
                                return $this->routers->internal🔀Router🔀Put🔀Activity()->starRepoForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
