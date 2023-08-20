<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\CheckRun;
use ApiClients\Client\GitHubEnterprise\Schema\CheckSuitePreference;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComment;
use ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup;
use ApiClients\Client\GitHubEnterprise\Schema\Hook;
use ApiClients\Client\GitHubEnterprise\Schema\Issue;
use ApiClients\Client\GitHubEnterprise\Schema\Label;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingTeam;
use ApiClients\Client\GitHubEnterprise\Schema\LdapMappingUser;
use ApiClients\Client\GitHubEnterprise\Schema\Milestone;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequest;
use ApiClients\Client\GitHubEnterprise\Schema\Release;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryInvitation;
use ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
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

    /** @return |array{code: int} */
    public function call(string $call, array $params, array $pathChunks): LdapMappingTeam|LdapMappingUser|RunnerGroupsEnterprise|RunnerGroupsOrg|WebhookConfig|ExternalGroup|CheckRun|CheckSuitePreference|CommitComment|Hook|RepositoryInvitation|Issue|BasicError|Label|Milestone|RepositoryPreReceiveHook|PullRequest|Release|array
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'ldap') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_id}') {
                            if ($pathChunks[5] === 'mapping') {
                                if ($call === 'PATCH /admin/ldap/teams/{team_id}/mapping') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\EnterpriseAdmin::class]->updateLdapMappingForTeam($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'users') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'mapping') {
                                if ($call === 'PATCH /admin/ldap/users/{username}/mapping') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\EnterpriseAdmin::class]->updateLdapMappingForUser($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'cache') {
                            if ($pathChunks[5] === 'usage-policy') {
                                if ($call === 'PATCH /enterprises/{enterprise}/actions/cache/usage-policy') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                        $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Actions::class]->setActionsCacheUsagePolicyForEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\EnterpriseAdmin::class]->updateSelfHostedRunnerGroupForEnterprise($params);
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
                                if ($call === 'PATCH /orgs/{org}/actions/runner-groups/{runner_group_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                        $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Actions::class]->updateSelfHostedRunnerGroupForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /orgs/{org}/actions/variables/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Actions::class, $this->router) === false) {
                                        $this->router[Router\Patch\Actions::class] = new Router\Patch\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Actions::class]->updateOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Orgs::class, $this->router) === false) {
                                        $this->router[Router\Patch\Orgs::class] = new Router\Patch\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Orgs::class]->updateWebhookConfigForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'external-groups') {
                                if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/external-groups') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Teams::class, $this->router) === false) {
                                        $this->router[Router\Patch\Teams::class] = new Router\Patch\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Teams::class]->linkExternalIdpGroupToTeamForOrg($params);
                                }
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'check-runs') {
                            if ($pathChunks[5] === '{check_run_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Checks::class, $this->router) === false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Checks::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === 'preferences') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Checks::class, $this->router) === false) {
                                        $this->router[Router\Patch\Checks::class] = new Router\Patch\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Checks::class]->setSuitesPreferences($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/labels/{name}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->updateLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Issues::class, $this->router) === false) {
                                        $this->router[Router\Patch\Issues::class] = new Router\Patch\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Issues::class]->updateMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($pathChunks[5] === '{pre_receive_hook_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\EnterpriseAdmin::class, $this->router) === false) {
                                        $this->router[Router\Patch\EnterpriseAdmin::class] = new Router\Patch\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\EnterpriseAdmin::class]->updatePreReceiveHookEnforcementForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Pulls::class, $this->router) === false) {
                                        $this->router[Router\Patch\Pulls::class] = new Router\Patch\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Pulls::class]->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
                                    $matched = true;
                                    if (array_key_exists(Router\Patch\Repos::class, $this->router) === false) {
                                        $this->router[Router\Patch\Repos::class] = new Router\Patch\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                    }

                                    return $this->router[Router\Patch\Repos::class]->updateRelease($params);
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
