<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsPublicKey;
use ApiClients\Client\GitHubEnterprise\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\BranchWithProtection;
use ApiClients\Client\GitHubEnterprise\Schema\CheckRun;
use ApiClients\Client\GitHubEnterprise\Schema\CheckSuite;
use ApiClients\Client\GitHubEnterprise\Schema\Commit;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComment;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComparison;
use ApiClients\Client\GitHubEnterprise\Schema\ContentDirectory;
use ApiClients\Client\GitHubEnterprise\Schema\ContentFile;
use ApiClients\Client\GitHubEnterprise\Schema\ContentSubmodule;
use ApiClients\Client\GitHubEnterprise\Schema\ContentSymlink;
use ApiClients\Client\GitHubEnterprise\Schema\DeployKey;
use ApiClients\Client\GitHubEnterprise\Schema\Deployment;
use ApiClients\Client\GitHubEnterprise\Schema\Environment;
use ApiClients\Client\GitHubEnterprise\Schema\Hook;
use ApiClients\Client\GitHubEnterprise\Schema\Issue;
use ApiClients\Client\GitHubEnterprise\Schema\Label;
use ApiClients\Client\GitHubEnterprise\Schema\Milestone;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHubEnterprise\Schema\ParticipationStats;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequest;
use ApiClients\Client\GitHubEnterprise\Schema\Release;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\Runner;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubEnterprise\Schema\SelectedActions;
use ApiClients\Client\GitHubEnterprise\Schema\TeamRepository;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Six
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |iterable<Schema\RunnerApplication>|iterable<Schema\HookDeliveryItem>|iterable<Schema\TeamDiscussion>|iterable<Schema\SimpleUser>|iterable<Schema\TeamProject>|iterable<Schema\MinimalRepository>|iterable<Schema\Team>|(Schema\ProjectCollaboratorPermission|array{code: int})|array{code: int}|iterable<Schema\CodeScanningAlertItems>|iterable<Schema\CodeScanningAnalysis>|(Schema\ContentDirectory|Schema\ContentFile|Schema\ContentSymlink|Schema\ContentSubmodule|iterable<Schema\IssueComment>|iterable<Schema\IssueEvent>|(Schema\Issue|Schema\BasicError|iterable<Schema\PageBuild>|iterable<Schema\PullRequestReviewComment>|(Schema\PullRequest|(iterable<Schema\SecretScanningAlert>|(iterable<int>|Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted|(iterable<Schema\CommitActivity>|(iterable<Schema\ContributorActivity>|array{code: int, location: string}|iterable<Schema\TeamDiscussionComment>|iterable<Schema\Reaction>|(Schema\TeamRepository|iterable<Schema\Event> */
    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus|Ok|SelectedActions|RunnerGroupsEnterprise|iterable|Runner|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|RunnerGroupsOrg|ActionsPublicKey|OrganizationActionsSecret|WebhookConfig|ProjectCollaboratorPermission|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|ActionsRepositoryPermissions|Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|BranchWithProtection|BasicError|CheckRun|CheckSuite|CommitComment|Commit|CommitComparison|ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|Deployment|Environment|Hook|Issue|DeployKey|Label|Milestone|RepositoryPreReceiveHook|PullRequest|Release|Accepted|ParticipationStats|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|TeamRepository
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}/downloads/latest') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\EnterpriseAdmin::class]->getDownloadStatusForPreReceiveEnvironment($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'permissions') {
                            if ($pathChunks[5] === 'organizations') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/permissions/organizations') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\EnterpriseAdmin::class]->listSelectedOrganizationsEnabledGithubActionsEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/permissions/selected-actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\EnterpriseAdmin::class]->getAllowedActionsEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\EnterpriseAdmin::class]->getSelfHostedRunnerGroupForEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'downloads') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/runners/downloads') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\EnterpriseAdmin::class]->listRunnerApplicationsForEnterprise($params);
                                }
                            } elseif ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'GET /enterprises/{enterprise}/actions/runners/{runner_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\EnterpriseAdmin::class]->getSelfHostedRunnerForEnterprise($params);
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
                                if ($call === 'GET /orgs/{org}/actions/permissions/repositories') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listSelectedRepositoriesEnabledGithubActionsOrganization($params);
                                }
                            } elseif ($pathChunks[5] === 'selected-actions') {
                                if ($call === 'GET /orgs/{org}/actions/permissions/selected-actions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getAllowedActionsOrganization($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'GET /orgs/{org}/actions/runner-groups/{runner_group_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getSelfHostedRunnerGroupForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runners') {
                            if ($pathChunks[5] === 'downloads') {
                                if ($call === 'GET /orgs/{org}/actions/runners/downloads') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRunnerApplicationsForOrg($params);
                                }
                            } elseif ($pathChunks[5] === '{runner_id}') {
                                if ($call === 'GET /orgs/{org}/actions/runners/{runner_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getSelfHostedRunnerForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secrets') {
                            if ($pathChunks[5] === 'public-key') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/public-key') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getOrgPublicKey($params);
                                }
                            } elseif ($pathChunks[5] === '{secret_name}') {
                                if ($call === 'GET /orgs/{org}/actions/secrets/{secret_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getOrgSecret($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/config') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Orgs::class]->getWebhookConfigForOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'deliveries') {
                                if ($call === 'GET /orgs/{org}/hooks/{hook_id}/deliveries') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Orgs::class]->listWebhookDeliveries($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/discussions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listDiscussionsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'members') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/members') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listMembersInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'projects') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/projects') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listProjectsInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'repos') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/repos') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listReposInOrg($params);
                                }
                            } elseif ($pathChunks[5] === 'teams') {
                                if ($call === 'GET /orgs/{org}/teams/{team_slug}/teams') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listChildInOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'permission') {
                                if ($call === 'GET /projects/{project_id}/collaborators/{username}/permission') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                        $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Projects::class]->getPermissionForUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'actions') {
                            if ($pathChunks[5] === 'artifacts') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/artifacts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listArtifactsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'permissions') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/permissions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->getGithubActionsPermissionsRepository($params);
                                }
                            } elseif ($pathChunks[5] === 'runners') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runners') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listSelfHostedRunnersForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'runs') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/runs') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listWorkflowRunsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/secrets') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRepoSecrets($params);
                                }
                            } elseif ($pathChunks[5] === 'workflows') {
                                if ($call === 'GET /repos/{owner}/{repo}/actions/workflows') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listRepoWorkflows($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'assignees') {
                            if ($pathChunks[5] === '{assignee}') {
                                if ($call === 'GET /repos/{owner}/{repo}/assignees/{assignee}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->checkUserCanBeAssigned($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($pathChunks[5] === '{branch}') {
                                if ($call === 'GET /repos/{owner}/{repo}/branches/{branch}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getBranch($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-runs/{check_run_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                        $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Checks::class]->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === '{check_suite_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/check-suites/{check_suite_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Checks::class, $this->router) === false) {
                                        $this->router[Router\Get\Checks::class] = new Router\Get\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Checks::class]->getSuite($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\CodeScanning::class]->listAlertsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'analyses') {
                                if ($call === 'GET /repos/{owner}/{repo}/code-scanning/analyses') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\CodeScanning::class, $this->router) === false) {
                                        $this->router[Router\Get\CodeScanning::class] = new Router\Get\CodeScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\CodeScanning::class]->listRecentAnalyses($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'collaborators') {
                            if ($pathChunks[5] === '{username}') {
                                if ($call === 'GET /repos/{owner}/{repo}/collaborators/{username}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->checkCollaborator($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/comments/{comment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'commits') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/commits/{ref}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCommit($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'compare') {
                            if ($pathChunks[5] === '{basehead}') {
                                if ($call === 'GET /repos/{owner}/{repo}/compare/{basehead}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->compareCommits($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'contents') {
                            if ($pathChunks[5] === '{path}') {
                                if ($call === 'GET /repos/{owner}/{repo}/contents/{path}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getContent($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($pathChunks[5] === '{deployment_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/deployments/{deployment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getDeployment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'environments') {
                            if ($pathChunks[5] === '{environment_name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/environments/{environment_name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getEnvironment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->listCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === 'events') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/events') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->listEventsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/issues/{issue_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($pathChunks[5] === '{key_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/keys/{key_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getDeployKey($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'GET /repos/{owner}/{repo}/labels/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->getLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                        $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Issues::class]->getMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($pathChunks[5] === 'builds') {
                                if ($call === 'GET /repos/{owner}/{repo}/pages/builds') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->listPagesBuilds($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($pathChunks[5] === '{pre_receive_hook_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\EnterpriseAdmin::class]->getPreReceiveHookForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                        $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Pulls::class]->listReviewCommentsForRepo($params);
                                }
                            } elseif ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'GET /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Pulls::class, $this->router) === false) {
                                        $this->router[Router\Get\Pulls::class] = new Router\Get\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Pulls::class]->get($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'readme') {
                            if ($pathChunks[5] === '{dir}') {
                                if ($call === 'GET /repos/{owner}/{repo}/readme/{dir}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getReadmeInDirectory($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === 'latest') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/latest') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getLatestRelease($params);
                                }
                            } elseif ($pathChunks[5] === '{release_id}') {
                                if ($call === 'GET /repos/{owner}/{repo}/releases/{release_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getRelease($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($pathChunks[5] === 'alerts') {
                                if ($call === 'GET /repos/{owner}/{repo}/secret-scanning/alerts') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\SecretScanning::class, $this->router) === false) {
                                        $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\SecretScanning::class]->listAlertsForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'stats') {
                            if ($pathChunks[5] === 'code_frequency') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/code_frequency') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCodeFrequencyStats($params);
                                }
                            } elseif ($pathChunks[5] === 'commit_activity') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/commit_activity') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getCommitActivityStats($params);
                                }
                            } elseif ($pathChunks[5] === 'contributors') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/contributors') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getContributorsStats($params);
                                }
                            } elseif ($pathChunks[5] === 'participation') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/participation') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getParticipationStats($params);
                                }
                            } elseif ($pathChunks[5] === 'punch_card') {
                                if ($call === 'GET /repos/{owner}/{repo}/stats/punch_card') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->getPunchCardStats($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'tarball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/tarball/{ref}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->downloadTarballArchive($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'zipball') {
                            if ($pathChunks[5] === '{ref}') {
                                if ($call === 'GET /repos/{owner}/{repo}/zipball/{ref}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                        $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Repos::class]->downloadZipballArchive($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repositories') {
                if ($pathChunks[2] === '{repository_id}') {
                    if ($pathChunks[3] === 'environments') {
                        if ($pathChunks[4] === '{environment_name}') {
                            if ($pathChunks[5] === 'secrets') {
                                if ($call === 'GET /repositories/{repository_id}/environments/{environment_name}/secrets') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Actions::class, $this->router) === false) {
                                        $this->router[Router\Get\Actions::class] = new Router\Get\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Actions::class]->listEnvironmentSecrets($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($pathChunks[4] === '{discussion_number}') {
                            if ($pathChunks[5] === 'comments') {
                                if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/comments') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->listDiscussionCommentsLegacy($params);
                                }
                            } elseif ($pathChunks[5] === 'reactions') {
                                if ($call === 'GET /teams/{team_id}/discussions/{discussion_number}/reactions') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Reactions::class, $this->router) === false) {
                                        $this->router[Router\Get\Reactions::class] = new Router\Get\Reactions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Reactions::class]->listForTeamDiscussionLegacy($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($pathChunks[4] === '{owner}') {
                            if ($pathChunks[5] === '{repo}') {
                                if ($call === 'GET /teams/{team_id}/repos/{owner}/{repo}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                        $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Teams::class]->checkPermissionsForRepoLegacy($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($pathChunks[4] === 'orgs') {
                            if ($pathChunks[5] === '{org}') {
                                if ($call === 'GET /users/{username}/events/orgs/{org}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                        $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Get\Activity::class]->listOrgEventsForAuthenticatedUser($params);
                                }
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
