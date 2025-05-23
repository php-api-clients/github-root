<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Patch;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsHostedRunner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CheckRun;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CheckSuitePreference;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeSecurityConfiguration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CommitComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Hook;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Import;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Issue;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Label;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Milestone;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkConfiguration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequest;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Release;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryInvitation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Six
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): ActionsHostedRunner|RunnerGroupsEnterprise|CodeSecurityConfiguration|WithoutBody|RunnerGroupsOrg|WebhookConfig|NetworkConfiguration|ExternalGroup|CheckRun|CheckSuitePreference|EmptyObject|CodeScanningDefaultSetupUpdateResponse|CommitComment|Hook|Import|RepositoryInvitation|Issue|BasicError|Label|Milestone|PullRequest|Release|RepositoryAdvisory
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'hosted-runners') {
                            if ($pathChunks[5] === '{hosted_runner_id}') {
                                if ($call === 'PATCH /enterprises/{enterprise}/actions/hosted-runners/{hosted_runner_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateHostedRunnerForEnterprise($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
                            if ($pathChunks[5] === '{runner_group_id}') {
                                if ($call === 'PATCH /enterprises/{enterprise}/actions/runner-groups/{runner_group_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀EnterpriseAdmin()->updateSelfHostedRunnerGroupForEnterprise($params);
                                }
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($pathChunks[5] === '{configuration_id}') {
                                if ($call === 'PATCH /enterprises/{enterprise}/code-security/configurations/{configuration_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀CodeSecurity()->updateEnterpriseConfiguration($params);
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
                                if ($call === 'PATCH /orgs/{org}/actions/hosted-runners/{hosted_runner_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Actions()->updateHostedRunnerForOrg($params);
                                }
                            }
                        } elseif ($pathChunks[4] === 'runner-groups') {
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
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($pathChunks[5] === '{configuration_id}') {
                                if ($call === 'PATCH /orgs/{org}/code-security/configurations/{configuration_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀CodeSecurity()->updateConfiguration($params);
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
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'network-configurations') {
                            if ($pathChunks[5] === '{network_configuration_id}') {
                                if ($call === 'PATCH /orgs/{org}/settings/network-configurations/{network_configuration_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀HostedCompute()->updateNetworkConfigurationForOrg($params);
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
                        } elseif ($pathChunks[4] === 'import') {
                            if ($pathChunks[5] === 'lfs') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/import/lfs') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Migrations()->setLfsPreference($params);
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
                        } elseif ($pathChunks[4] === 'properties') {
                            if ($pathChunks[5] === 'values') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/properties/values') {
                                    return $this->routers->internal🔀Router🔀Patch🔀Repos()->createOrUpdateCustomPropertiesValues($params);
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
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($pathChunks[5] === '{ghsa_id}') {
                                if ($call === 'PATCH /repos/{owner}/{repo}/security-advisories/{ghsa_id}') {
                                    return $this->routers->internal🔀Router🔀Patch🔀SecurityAdvisories()->updateRepositoryAdvisory($params);
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
