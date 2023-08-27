<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Put;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHubAE\Schema\OrgMembership;
use ApiClients\Client\GitHubAE\Schema\RepositorySubscription;
use ApiClients\Client\GitHubAE\Schema\TeamMembership;
use ApiClients\Client\GitHubAE\Schema\ThreadSubscription;
use ApiClients\Client\GitHubAE\Schema\Topic;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}|Schema\ThreadSubscription||Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|Schema\TeamMembership */
    public function call(string $call, array $params, array $pathChunks): ThreadSubscription|OrgMembership|Json|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|RepositorySubscription|Topic|TeamMembership|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'suspended') {
                            if ($call === 'PUT /app/installations/{installation_id}/suspended') {
                                return $this->routers->router🔀Put🔀Apps()->suspendInstallation($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'PUT /enterprises/{enterprise}/actions/permissions') {
                                return $this->routers->router🔀Put🔀EnterpriseAdmin()->setGithubActionsPermissionsEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'PUT /notifications/threads/{thread_id}/subscription') {
                                return $this->routers->router🔀Put🔀Activity()->setThreadSubscription($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'PUT /orgs/{org}/actions/permissions') {
                                return $this->routers->router🔀Put🔀Actions()->setGithubActionsPermissionsOrganization($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/memberships/{username}') {
                                return $this->routers->router🔀Put🔀Orgs()->setMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /orgs/{org}/outside_collaborators/{username}') {
                                return $this->routers->router🔀Put🔀Orgs()->convertMemberToOutsideCollaborator($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /projects/{project_id}/collaborators/{username}') {
                                return $this->routers->router🔀Put🔀Projects()->addCollaborator($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'lfs') {
                            if ($call === 'PUT /repos/{owner}/{repo}/lfs') {
                                return $this->routers->router🔀Put🔀Repos()->enableLfsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'PUT /repos/{owner}/{repo}/notifications') {
                                return $this->routers->router🔀Put🔀Activity()->markRepoNotificationsAsRead($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'PUT /repos/{owner}/{repo}/pages') {
                                return $this->routers->router🔀Put🔀Repos()->updateInformationAboutPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'PUT /repos/{owner}/{repo}/subscription') {
                                return $this->routers->router🔀Put🔀Activity()->setRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'PUT /repos/{owner}/{repo}/topics') {
                                return $this->routers->router🔀Put🔀Repos()->replaceAllTopics($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /teams/{team_id}/members/{username}') {
                                return $this->routers->router🔀Put🔀Teams()->addMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'PUT /teams/{team_id}/memberships/{username}') {
                                return $this->routers->router🔀Put🔀Teams()->addOrUpdateMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'PUT /teams/{team_id}/projects/{project_id}') {
                                return $this->routers->router🔀Put🔀Teams()->addOrUpdateProjectPermissionsLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'PUT /user/starred/{owner}/{repo}') {
                                return $this->routers->router🔀Put🔀Activity()->starRepoForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
