<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\CheckRun;
use ApiClients\Client\GitHubEnterprise\Schema\CheckSuitePreference;
use ApiClients\Client\GitHubEnterprise\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHubEnterprise\Schema\CommitComment;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
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
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |array{code:int} */
    public function call(string $call, array $params, array $pathChunks): LdapMappingTeam|LdapMappingUser|RunnerGroupsEnterprise|RunnerGroupsOrg|WebhookConfig|ExternalGroup|CheckRun|CheckSuitePreference|EmptyObject|CodeScanningDefaultSetupUpdateResponse|CommitComment|Hook|RepositoryInvitation|Issue|BasicError|Label|Milestone|RepositoryPreReceiveHook|PullRequest|Release|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'ldap') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_id}') {
                            if ($pathChunks[5] === 'mapping') {
                                if ($call === 'PATCH /admin/ldap/teams/{team_id}/mapping') {
                                    return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updateLdapMappingForTeam($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'users') {
                        if ($pathChunks[4] === '{username}') {
                            if ($pathChunks[5] === 'mapping') {
                                if ($call === 'PATCH /admin/ldap/users/{username}/mapping') {
                                    return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updateLdapMappingForUser($params);
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
                                    return $this->routers->internal🔀Router🔀Patch🔀Actions()->setActionsCacheUsagePolicyForEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise($params);
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
                                    return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateSelfHostedRunnerGroupForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /orgs/{org}/actions/variables/{name}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateOrgVariable($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Orgs()->updateWebhookConfigForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'external-groups') {
                                if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/external-groups') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Teams()->linkExternalIdpGroupToTeamForOrg($params);
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
                                    return $this->routers->internal🔀Router🔀Patch🔀Checks()->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === 'preferences') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Checks()->setSuitesPreferences($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'code-scanning') {
                            if ($pathChunks[5] === 'default-setup') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/code-scanning/default-setup') {
                                    return $this->routers->internal🔀Router🔀Patch🔀CodeScanning()->updateDefaultSetup($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Issues()->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/labels/{name}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Issues()->updateLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Issues()->updateMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pre-receive-hooks') {
                            if ($pathChunks[5] === '{pre_receive_hook_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/pre-receive-hooks/{pre_receive_hook_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updatePreReceiveHookEnforcementForRepo($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Pulls()->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Repos()->updateRelease($params);
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
