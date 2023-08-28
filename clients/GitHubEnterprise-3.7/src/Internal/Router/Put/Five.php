<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Put;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterprise\Schema\RepositorySubscription;
use ApiClients\Client\GitHubEnterprise\Schema\TeamMembership;
use ApiClients\Client\GitHubEnterprise\Schema\ThreadSubscription;
use ApiClients\Client\GitHubEnterprise\Schema\Topic;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}|Schema\Authorization|Schema\ThreadSubscription|Schema\OrgMembership|Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|Schema\RepositorySubscription|Schema\Topic|Schema\GroupResponse|Schema\UserResponse|Schema\TeamMembership */
    public function call(string $call, array $params, array $pathChunks): Authorization|ThreadSubscription|OrgMembership|Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|RepositorySubscription|Topic|GroupResponse|UserResponse|TeamMembership|array
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
            } elseif ($pathChunks[1] === 'authorizations') {
                if ($pathChunks[2] === 'clients') {
                    if ($pathChunks[3] === '{client_id}') {
                        if ($pathChunks[4] === '{fingerprint}') {
                            if ($call === 'PUT /authorizations/clients/{client_id}/{fingerprint}') {
                                return $this->routers->internal🔀Router🔀Put🔀OauthAuthorizations()->getOrCreateAuthorizationForAppAndFingerprint($params);
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
                        if ($pathChunks[4] === 'lfs') {
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
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'PUT /repos/{owner}/{repo}/subscription') {
                                return $this->routers->internal🔀Router🔀Put🔀Activity()->setRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'PUT /repos/{owner}/{repo}/topics') {
                                return $this->routers->internal🔀Router🔀Put🔀Repos()->replaceAllTopics($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'Groups') {
                        if ($pathChunks[4] === '{scim_group_id}') {
                            if ($call === 'PUT /scim/v2/Groups/{scim_group_id}') {
                                return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setInformationForProvisionedEnterpriseGroup($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'Users') {
                        if ($pathChunks[4] === '{scim_user_id}') {
                            if ($call === 'PUT /scim/v2/Users/{scim_user_id}') {
                                return $this->routers->internal🔀Router🔀Put🔀EnterpriseAdmin()->setInformationForProvisionedEnterpriseUser($params);
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
                if ($pathChunks[2] === 'starred') {
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
