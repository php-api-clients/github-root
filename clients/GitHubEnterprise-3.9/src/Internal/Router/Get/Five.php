<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Get;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\ContentFile;
use ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup;
use ApiClients\Client\GitHubEnterprise\Schema\GhesConfigNodes;
use ApiClients\Client\GitHubEnterprise\Schema\GhesReplicationStatus;
use ApiClients\Client\GitHubEnterprise\Schema\GistComment;
use ApiClients\Client\GitHubEnterprise\Schema\GroupResponse;
use ApiClients\Client\GitHubEnterprise\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterprise\Schema\Installation;
use ApiClients\Client\GitHubEnterprise\Schema\Language;
use ApiClients\Client\GitHubEnterprise\Schema\LicenseContent;
use ApiClients\Client\GitHubEnterprise\Schema\Migration;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Package;
use ApiClients\Client\GitHubEnterprise\Schema\Page;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectCard;
use ApiClients\Client\GitHubEnterprise\Schema\RepositorySubscription;
use ApiClients\Client\GitHubEnterprise\Schema\SimpleUser;
use ApiClients\Client\GitHubEnterprise\Schema\Stargazer;
use ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterprise\Schema\TeamFull;
use ApiClients\Client\GitHubEnterprise\Schema\TeamMembership;
use ApiClients\Client\GitHubEnterprise\Schema\TeamProject;
use ApiClients\Client\GitHubEnterprise\Schema\ThreadSubscription;
use ApiClients\Client\GitHubEnterprise\Schema\Topic;
use ApiClients\Client\GitHubEnterprise\Schema\UserResponse;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|iterable<int,Schema\CodeScanningOrganizationAlertItems>|iterable<int,Schema\DependabotAlertWithRepository>|\ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody|iterable<int,Schema\OrganizationSecretScanningAlert>|iterable<int,Schema\Event>|Schema\BasicError|Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|Observable<Schema\Package>|iterable<int,Schema\ProjectCard>|iterable<int,Schema\SimpleUser>|iterable<int,Schema\Autolink>|iterable<int,Schema\ShortBranch>|iterable<int,Schema\Collaborator>|iterable<int,Schema\CommitComment>|iterable<int,Schema\Commit>|iterable<int,Schema\Contributor>|iterable<int,Schema\Deployment>|Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|iterable<int,Schema\MinimalRepository>|iterable<int,Schema\Hook>|iterable<int,Schema\RepositoryInvitation>|iterable<int,Schema\Issue>|iterable<int,Schema\DeployKey>|iterable<int,Schema\Label>|iterable<int,Schema\Milestone>|iterable<int,Schema\Thread>|iterable<int,Schema\RepositoryPreReceiveHook>|iterable<int,Schema\Project>|iterable<int,Schema\PullRequestSimple>|iterable<int,Schema\Release>|Schema\SimpleUser|Schema\Stargazer|iterable<int,Schema\Tag>|iterable<int,Schema\Team>|Schema\Topic|Observable<Schema\SshKey>|WithoutBody|Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok */
    public function call(string $call, array $params, array $pathChunks): HookDelivery|ActionsEnterprisePermissions|Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|iterable|WithoutBody|GistComment|GhesConfigNodes|GhesReplicationStatus|BasicError|ThreadSubscription|ActionsOrganizationPermissions|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|OrganizationCustomRepositoryRole|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|ExternalGroup|OrgHook|OrgMembership|Migration|OrgPreReceiveHook|TeamFull|ProjectCard|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|Installation|Language|LicenseContent|Page|ContentFile|SimpleUser|Stargazer|RepositorySubscription|Topic|GroupResponse|UserResponse|TeamDiscussion|TeamMembership|TeamProject|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|Package
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'deliveries') {
                        if ($pathChunks[4] === '{delivery_id}') {
                            if ($call === 'GET /app/hook/deliveries/{delivery_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->getWebhookDelivery($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/permissions') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getGithubActionsPermissionsEnterprise($params);
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listSelfHostedRunnerGroupsForEnterprise($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/runners') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listSelfHostedRunnersForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/code-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/dependabot/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listAlertsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/secret-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listAlertsForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'GET /gists/{gist_id}/comments/{comment_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Gists()->getComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'manage') {
                if ($pathChunks[2] === 'v1') {
                    if ($pathChunks[3] === 'config') {
                        if ($pathChunks[4] === 'nodes') {
                            if ($call === 'GET /manage/v1/config/nodes') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getConfigNodes($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'replication') {
                        if ($pathChunks[4] === 'status') {
                            if ($call === 'GET /manage/v1/replication/status') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getReplicationStatus($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'networks') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'events') {
                            if ($call === 'GET /networks/{owner}/{repo}/events') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listPublicEventsForRepoNetwork($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /notifications/threads/{thread_id}/subscription') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->getThreadSubscriptionForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /orgs/{org}/actions/permissions') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->getGithubActionsPermissionsOrganization($params);
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'GET /orgs/{org}/actions/runner-groups') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listSelfHostedRunnerGroupsForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /orgs/{org}/actions/runners') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listSelfHostedRunnersForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/actions/secrets') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listOrgSecrets($params);
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($call === 'GET /orgs/{org}/actions/variables') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listOrgVariables($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/code-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'custom-repository-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'GET /orgs/{org}/custom-repository-roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getCustomRepoRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/dependabot/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listAlertsForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/dependabot/secrets') {
                                return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'docker') {
                        if ($pathChunks[4] === 'conflicts') {
                            if ($call === 'GET /orgs/{org}/docker/conflicts') {
                                return $this->routers->internal🔀Router🔀Get🔀Packages()->listDockerMigrationConflictingPackagesForOrganization($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'external-group') {
                        if ($pathChunks[4] === '{group_id}') {
                            if ($call === 'GET /orgs/{org}/external-group/{group_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->externalIdpGroupInfoForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'GET /orgs/{org}/hooks/{hook_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/members/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->checkMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($pathChunks[4] === '{migration_id}') {
                            if ($call === 'GET /orgs/{org}/migrations/{migration_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->getStatusForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'pre-receive-hooks') {
                        if ($pathChunks[4] === '{pre_receive_hook_id}') {
                            if ($call === 'GET /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getPreReceiveHookForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/public_members/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->checkPublicMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/secret-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'GET /orgs/{org}/teams/{team_slug}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getByName($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'GET /projects/columns/cards/{card_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Projects()->getCard($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'GET /projects/columns/{column_id}/cards') {
                                return $this->routers->internal🔀Router🔀Get🔀Projects()->listCards($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'assignees') {
                            if ($call === 'GET /repos/{owner}/{repo}/assignees') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listAssignees($params);
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($call === 'GET /repos/{owner}/{repo}/autolinks') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listAutolinks($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'GET /repos/{owner}/{repo}/branches') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listBranches($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'GET /repos/{owner}/{repo}/collaborators') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listCollaborators($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'GET /repos/{owner}/{repo}/comments') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listCommitCommentsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'GET /repos/{owner}/{repo}/commits') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listCommits($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'GET /repos/{owner}/{repo}/contributors') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listContributors($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'GET /repos/{owner}/{repo}/deployments') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listDeployments($params);
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($call === 'GET /repos/{owner}/{repo}/environments') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getAllEnvironments($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'GET /repos/{owner}/{repo}/events') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listRepoEvents($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'GET /repos/{owner}/{repo}/forks') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listForks($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'GET /repos/{owner}/{repo}/hooks') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listWebhooks($params);
                            }
                        } elseif ($pathChunks[4] === 'installation') {
                            if ($call === 'GET /repos/{owner}/{repo}/installation') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->getRepoInstallation($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'GET /repos/{owner}/{repo}/invitations') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listInvitations($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'GET /repos/{owner}/{repo}/issues') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'GET /repos/{owner}/{repo}/keys') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listDeployKeys($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'GET /repos/{owner}/{repo}/labels') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listLabelsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'languages') {
                            if ($call === 'GET /repos/{owner}/{repo}/languages') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listLanguages($params);
                            }
                        } elseif ($pathChunks[4] === 'license') {
                            if ($call === 'GET /repos/{owner}/{repo}/license') {
                                return $this->routers->internal🔀Router🔀Get🔀Licenses()->getForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'GET /repos/{owner}/{repo}/milestones') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listMilestones($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'GET /repos/{owner}/{repo}/notifications') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listRepoNotificationsForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'GET /repos/{owner}/{repo}/pages') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getPages($params);
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listPreReceiveHooksForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'GET /repos/{owner}/{repo}/projects') {
                                return $this->routers->internal🔀Router🔀Get🔀Projects()->listForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'GET /repos/{owner}/{repo}/pulls') {
                                return $this->routers->internal🔀Router🔀Get🔀Pulls()->list($params);
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($call === 'GET /repos/{owner}/{repo}/readme') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getReadme($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'GET /repos/{owner}/{repo}/releases') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listReleases($params);
                            }
                        } elseif ($pathChunks[4] === 'stargazers') {
                            if ($call === 'GET /repos/{owner}/{repo}/stargazers') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listStargazersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscribers') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listWatchersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscription') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->getRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'GET /repos/{owner}/{repo}/tags') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listTags($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'GET /repos/{owner}/{repo}/teams') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listTeams($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'GET /repos/{owner}/{repo}/topics') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getAllTopics($params);
                            }
                        } elseif ($pathChunks[4] === 'vulnerability-alerts') {
                            if ($call === 'GET /repos/{owner}/{repo}/vulnerability-alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->checkVulnerabilityAlerts($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'Groups') {
                        if ($pathChunks[4] === '{scim_group_id}') {
                            if ($call === 'GET /scim/v2/Groups/{scim_group_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getProvisioningInformationForEnterpriseGroup($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'Users') {
                        if ($pathChunks[4] === '{scim_user_id}') {
                            if ($call === 'GET /scim/v2/Users/{scim_user_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getProvisioningInformationForEnterpriseUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'authorized-keys') {
                            if ($call === 'GET /setup/api/settings/authorized-keys') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAllAuthorizedSshKeys($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/members/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/memberships/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->getMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'GET /teams/{team_id}/projects/{project_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->checkPermissionsForProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/installations/{installation_id}/repositories') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->listInstallationReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'GET /user/memberships/orgs/{org}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($pathChunks[4] === 'archive') {
                            if ($call === 'GET /user/migrations/{migration_id}/archive') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->getArchiveForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/migrations/{migration_id}/repositories') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->listReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'packages') {
                    if ($pathChunks[3] === '{package_type}') {
                        if ($pathChunks[4] === '{package_name}') {
                            if ($call === 'GET /user/packages/{package_type}/{package_name}') {
                                return $this->routers->internal🔀Router🔀Get🔀Packages()->getPackageForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'GET /user/starred/{owner}/{repo}') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->checkRepoIsStarredByAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'docker') {
                        if ($pathChunks[4] === 'conflicts') {
                            if ($call === 'GET /users/{username}/docker/conflicts') {
                                return $this->routers->internal🔀Router🔀Get🔀Packages()->listDockerMigrationConflictingPackagesForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/events/public') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listPublicEventsForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($pathChunks[4] === '{target_user}') {
                            if ($call === 'GET /users/{username}/following/{target_user}') {
                                return $this->routers->internal🔀Router🔀Get🔀Users()->checkFollowingForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/received_events/public') {
                                return $this->routers->internal🔀Router🔀Get🔀Activity()->listReceivedPublicEventsForUser($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
