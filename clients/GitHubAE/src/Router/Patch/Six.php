<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE\Router\Patch;

use ApiClients\Client\GitHubAE\Routers;
use ApiClients\Client\GitHubAE\Schema\BasicError;
use ApiClients\Client\GitHubAE\Schema\CheckRun;
use ApiClients\Client\GitHubAE\Schema\CheckSuitePreference;
use ApiClients\Client\GitHubAE\Schema\CommitComment;
use ApiClients\Client\GitHubAE\Schema\ExternalGroup;
use ApiClients\Client\GitHubAE\Schema\Hook;
use ApiClients\Client\GitHubAE\Schema\Issue;
use ApiClients\Client\GitHubAE\Schema\Label;
use ApiClients\Client\GitHubAE\Schema\Milestone;
use ApiClients\Client\GitHubAE\Schema\PullRequest;
use ApiClients\Client\GitHubAE\Schema\Release;
use ApiClients\Client\GitHubAE\Schema\RepositoryInvitation;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubAE\Schema\WebhookConfig;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): RunnerGroupsEnterprise|RunnerGroupsOrg|WebhookConfig|ExternalGroup|CheckRun|CheckSuitePreference|CommitComment|Hook|RepositoryInvitation|Issue|BasicError|Label|Milestone|PullRequest|Release|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    return $this->routers->router🔀Patch🔀EnterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise($params);
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
                                    return $this->routers->router🔀Patch🔀Actions()->updateSelfHostedRunnerGroupForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($pathChunks[4] === '{hook_id}') {
                            if ($pathChunks[5] === 'config') {
                                if ($call === 'PATCH /orgs/{org}/hooks/{hook_id}/config') {
                                    return $this->routers->router🔀Patch🔀Orgs()->updateWebhookConfigForOrg($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'external-groups') {
                                if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/external-groups') {
                                    return $this->routers->router🔀Patch🔀Teams()->linkExternalIdpGroupToTeamForOrg($params);
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
                                    return $this->routers->router🔀Patch🔀Checks()->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($pathChunks[5] === 'preferences') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/check-suites/preferences') {
                                    return $this->routers->router🔀Patch🔀Checks()->setSuitesPreferences($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'comments') {
                            if ($pathChunks[5] === '{comment_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/comments/{comment_id}') {
                                    return $this->routers->router🔀Patch🔀Repos()->updateCommitComment($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($pathChunks[5] === '{hook_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/hooks/{hook_id}') {
                                    return $this->routers->router🔀Patch🔀Repos()->updateWebhook($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'invitations') {
                            if ($pathChunks[5] === '{invitation_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/invitations/{invitation_id}') {
                                    return $this->routers->router🔀Patch🔀Repos()->updateInvitation($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($pathChunks[5] === '{issue_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/issues/{issue_number}') {
                                    return $this->routers->router🔀Patch🔀Issues()->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($pathChunks[5] === '{name}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/labels/{name}') {
                                    return $this->routers->router🔀Patch🔀Issues()->updateLabel($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($pathChunks[5] === '{milestone_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/milestones/{milestone_number}') {
                                    return $this->routers->router🔀Patch🔀Issues()->updateMilestone($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($pathChunks[5] === '{pull_number}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/pulls/{pull_number}') {
                                    return $this->routers->router🔀Patch🔀Pulls()->update($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($pathChunks[5] === '{release_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/releases/{release_id}') {
                                    return $this->routers->router🔀Patch🔀Repos()->updateRelease($params);
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
