<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\ContentFile;
use ApiClients\Client\GitHubEnterprise\Schema\GistComment;
use ApiClients\Client\GitHubEnterprise\Schema\Installation;
use ApiClients\Client\GitHubEnterprise\Schema\Language;
use ApiClients\Client\GitHubEnterprise\Schema\LicenseContent;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrgHook;
use ApiClients\Client\GitHubEnterprise\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook;
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
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Five
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |(Schema\GistComment|array{code: int})|(Observable<Schema\Event>|Schema\BasicError|(Schema\ThreadSubscription|(array{code: int}|array{code: int, location: string})|array{code: int}|(Schema\ProjectCard|(Observable<Schema\ProjectCard>|Observable<Schema\SimpleUser>|Observable<Schema\ShortBranch>|Observable<Schema\Collaborator>|Observable<Schema\CommitComment>|Observable<Schema\Commit>|(Observable<Schema\Contributor>|Observable<Schema\Deployment>|Observable<Schema\Event>|Observable<Schema\MinimalRepository>|Observable<Schema\Hook>|Observable<Schema\RepositoryInvitation>|(Observable<Schema\Issue>|Schema\BasicError)|Observable<Schema\DeployKey>|Observable<Schema\Label>|Observable<Schema\Milestone>|Observable<Schema\Thread>|Observable<Schema\RepositoryPreReceiveHook>|Observable<Schema\Project>|(Observable<Schema\PullRequestSimple>|Observable<Schema\Release>|(Schema\RepositorySubscription|Observable<Schema\Tag>|Observable<Schema\Team>|Observable<Schema\SshKey>|(Schema\TeamProject|(Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok */
    public function call(string $call, array $params, array $pathChunks): Authorization|ActionsEnterprisePermissions|Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|GistComment|iterable|BasicError|ThreadSubscription|ActionsOrganizationPermissions|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|OrgHook|OrgMembership|OrgPreReceiveHook|TeamFull|ProjectCard|Installation|Language|LicenseContent|Page|ContentFile|SimpleUser|Stargazer|RepositorySubscription|Topic|TeamDiscussion|TeamMembership|TeamProject|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'tokens') {
                        if ($pathChunks[4] === '{access_token}') {
                            if ($call === 'GET /applications/{client_id}/tokens/{access_token}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->CheckAuthorization($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/permissions') {
                                $matched = true;
                                if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\EnterpriseAdmin::class]->GetGithubActionsPermissionsEnterprise($params);
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups') {
                                $matched = true;
                                if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\EnterpriseAdmin::class]->ListSelfHostedRunnerGroupsForEnterprise($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/runners') {
                                $matched = true;
                                if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\EnterpriseAdmin::class]->ListSelfHostedRunnersForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($pathChunks[4] === '{comment_id}') {
                            if ($call === 'GET /gists/{gist_id}/comments/{comment_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                    $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Gists::class]->GetComment($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'networks') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'events') {
                            if ($call === 'GET /networks/{owner}/{repo}/events') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListPublicEventsForRepoNetwork($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /notifications/threads/{thread_id}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->GetThreadSubscriptionForAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($call === 'GET /orgs/{org}/actions/permissions') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->GetGithubActionsPermissionsOrganization($params);
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'GET /orgs/{org}/actions/runner-groups') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->ListSelfHostedRunnerGroupsForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($call === 'GET /orgs/{org}/actions/runners') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->ListSelfHostedRunnersForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/actions/secrets') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                    $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Actions::class]->ListOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($call === 'GET /orgs/{org}/hooks/{hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->GetWebhook($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->CheckMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->GetMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'pre-receive-hooks') {
                        if ($pathChunks[4] === '{pre_receive_hook_id}') {
                            if ($call === 'GET /orgs/{org}/pre-receive-hooks/{pre_receive_hook_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\EnterpriseAdmin::class]->GetPreReceiveHookForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/public_members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->CheckPublicMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($call === 'GET /orgs/{org}/teams/{team_slug}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetByName($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === 'cards') {
                        if ($pathChunks[4] === '{card_id}') {
                            if ($call === 'GET /projects/columns/cards/{card_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                    $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Projects::class]->GetCard($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'GET /projects/columns/{column_id}/cards') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                    $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Projects::class]->ListCards($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'assignees') {
                            if ($call === 'GET /repos/{owner}/{repo}/assignees') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListAssignees($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'GET /repos/{owner}/{repo}/branches') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListBranches($params);
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($call === 'GET /repos/{owner}/{repo}/collaborators') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListCollaborators($params);
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($call === 'GET /repos/{owner}/{repo}/comments') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListCommitCommentsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($call === 'GET /repos/{owner}/{repo}/commits') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListCommits($params);
                            }
                        } elseif ($pathChunks[4] === 'contributors') {
                            if ($call === 'GET /repos/{owner}/{repo}/contributors') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListContributors($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'GET /repos/{owner}/{repo}/deployments') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListDeployments($params);
                            }
                        } elseif ($pathChunks[4] === 'events') {
                            if ($call === 'GET /repos/{owner}/{repo}/events') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListRepoEvents($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'GET /repos/{owner}/{repo}/forks') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListForks($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'GET /repos/{owner}/{repo}/hooks') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListWebhooks($params);
                            }
                        } elseif ($pathChunks[4] === 'installation') {
                            if ($call === 'GET /repos/{owner}/{repo}/installation') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->GetRepoInstallation($params);
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($call === 'GET /repos/{owner}/{repo}/invitations') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListInvitations($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'GET /repos/{owner}/{repo}/issues') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'GET /repos/{owner}/{repo}/keys') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListDeployKeys($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'GET /repos/{owner}/{repo}/labels') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListLabelsForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'languages') {
                            if ($call === 'GET /repos/{owner}/{repo}/languages') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListLanguages($params);
                            }
                        } elseif ($pathChunks[4] === 'license') {
                            if ($call === 'GET /repos/{owner}/{repo}/license') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Licenses::class, $this->router) === false) {
                                    $this->router[Router\Get\Licenses::class] = new Router\Get\Licenses($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Licenses::class]->GetForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'GET /repos/{owner}/{repo}/milestones') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                    $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Issues::class]->ListMilestones($params);
                            }
                        } elseif ($pathChunks[4] === 'notifications') {
                            if ($call === 'GET /repos/{owner}/{repo}/notifications') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListRepoNotificationsForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'GET /repos/{owner}/{repo}/pages') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetPages($params);
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks') {
                                $matched = true;
                                if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\EnterpriseAdmin::class]->ListPreReceiveHooksForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'GET /repos/{owner}/{repo}/projects') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                    $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Projects::class]->ListForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'GET /repos/{owner}/{repo}/pulls') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                    $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Pulls::class]->List($params);
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($call === 'GET /repos/{owner}/{repo}/readme') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetReadme($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'GET /repos/{owner}/{repo}/releases') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListReleases($params);
                            }
                        } elseif ($pathChunks[4] === 'stargazers') {
                            if ($call === 'GET /repos/{owner}/{repo}/stargazers') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListStargazersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscribers') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscribers') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListWatchersForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'subscription') {
                            if ($call === 'GET /repos/{owner}/{repo}/subscription') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->GetRepoSubscription($params);
                            }
                        } elseif ($pathChunks[4] === 'tags') {
                            if ($call === 'GET /repos/{owner}/{repo}/tags') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListTags($params);
                            }
                        } elseif ($pathChunks[4] === 'teams') {
                            if ($call === 'GET /repos/{owner}/{repo}/teams') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->ListTeams($params);
                            }
                        } elseif ($pathChunks[4] === 'topics') {
                            if ($call === 'GET /repos/{owner}/{repo}/topics') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                    $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Repos::class]->GetAllTopics($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'authorized-keys') {
                            if ($call === 'GET /setup/api/settings/authorized-keys') {
                                $matched = true;
                                if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\EnterpriseAdmin::class]->GetAllAuthorizedSshKeys($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetDiscussionLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/members/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetMemberLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'memberships') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /teams/{team_id}/memberships/{username}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->GetMembershipForUserLegacy($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($pathChunks[4] === '{project_id}') {
                            if ($call === 'GET /teams/{team_id}/projects/{project_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                    $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Teams::class]->CheckPermissionsForProjectLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'repositories') {
                            if ($call === 'GET /user/installations/{installation_id}/repositories') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                    $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Apps::class]->ListInstallationReposForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($pathChunks[4] === '{org}') {
                            if ($call === 'GET /user/memberships/orgs/{org}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Orgs::class]->GetMembershipForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'starred') {
                    if ($pathChunks[3] === '{owner}') {
                        if ($pathChunks[4] === '{repo}') {
                            if ($call === 'GET /user/starred/{owner}/{repo}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->CheckRepoIsStarredByAuthenticatedUser($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/events/public') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListPublicEventsForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($pathChunks[4] === '{target_user}') {
                            if ($call === 'GET /users/{username}/following/{target_user}') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                    $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Users::class]->CheckFollowingForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($pathChunks[4] === 'public') {
                            if ($call === 'GET /users/{username}/received_events/public') {
                                $matched = true;
                                if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                    $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Get\Activity::class]->ListReceivedPublicEventsForUser($params);
                            }
                        }
                    }
                }
            }
        }

        if ($matched === false) {
            throw new InvalidArgumentException();
        }
    }
}
