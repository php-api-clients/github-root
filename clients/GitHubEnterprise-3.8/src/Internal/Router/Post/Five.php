<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Internal\Router\Post;

use ApiClients\Client\GitHubEnterprise\Internal\Routers;
use ApiClients\Client\GitHubEnterprise\Schema\Authorization;
use ApiClients\Client\GitHubEnterprise\Schema\Autolink;
use ApiClients\Client\GitHubEnterprise\Schema\CheckRun;
use ApiClients\Client\GitHubEnterprise\Schema\CheckSuite;
use ApiClients\Client\GitHubEnterprise\Schema\Commit;
use ApiClients\Client\GitHubEnterprise\Schema\DeployKey;
use ApiClients\Client\GitHubEnterprise\Schema\Deployment;
use ApiClients\Client\GitHubEnterprise\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterprise\Schema\FullRepository;
use ApiClients\Client\GitHubEnterprise\Schema\Hook;
use ApiClients\Client\GitHubEnterprise\Schema\InstallationToken;
use ApiClients\Client\GitHubEnterprise\Schema\Issue;
use ApiClients\Client\GitHubEnterprise\Schema\Label;
use ApiClients\Client\GitHubEnterprise\Schema\MergedUpstream;
use ApiClients\Client\GitHubEnterprise\Schema\Milestone;
use ApiClients\Client\GitHubEnterprise\Schema\MinimalRepository;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Page;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Project;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectCard;
use ApiClients\Client\GitHubEnterprise\Schema\PullRequest;
use ApiClients\Client\GitHubEnterprise\Schema\Release;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Schema\FullRepository|Observable<Schema\SshKey>|WithoutBody */
    public function call(string $call, array $params, array $pathChunks): WithoutBody|PreReceiveEnvironmentDownloadStatus|Authorization|InstallationToken|RunnerGroupsEnterprise|RunnerGroupsOrg|EmptyObject|ProjectCard|Json|Autolink|CheckRun|CheckSuite|Deployment|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|FullRepository|Hook|Issue|DeployKey|Label|MergedUpstream|Commit|Milestone|Page|Project|PullRequest|Release|MinimalRepository|iterable
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($pathChunks[4] === 'pings') {
                            if ($call === 'POST /admin/hooks/{hook_id}/pings') {
                                return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->pingGlobalWebhook($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($call === 'POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
                                return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->startPreReceiveEnvironmentDownload($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($pathChunks[3] === '{username}') {
                        if ($pathChunks[4] === 'authorizations') {
                            if ($call === 'POST /admin/users/{username}/authorizations') {
                                return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createImpersonationOAuthToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'access_tokens') {
                            if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
                                return $this->routers->internal🔀Router🔀Post🔀Apps()->createInstallationAccessToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($pathChunks[4] === 'scoped') {
                            if ($call === 'POST /applications/{client_id}/token/scoped') {
                                return $this->routers->internal🔀Router🔀Post🔀Apps()->scopeToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'POST /enterprises/{enterprise}/actions/runner-groups') {
                                return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->createSelfHostedRunnerGroupForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /enterprises/{enterprise}/{security_product}/{enablement}') {
                                return $this->routers->internal🔀Router🔀Post🔀SecretScanning()->postSecurityProductEnablementForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'POST /orgs/{org}/actions/runner-groups') {
                                return $this->routers->internal🔀Router🔀Post🔀Actions()->createSelfHostedRunnerGroupForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($call === 'POST /orgs/{org}/actions/variables') {
                                return $this->routers->internal🔀Router🔀Post🔀Actions()->createOrgVariable($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /orgs/{org}/{security_product}/{enablement}') {
                                return $this->routers->internal🔀Router🔀Post🔀Orgs()->enableOrDisableSecurityProductOnAllOrgRepos($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'POST /projects/columns/{column_id}/cards') {
                                return $this->routers->internal🔀Router🔀Post🔀Projects()->createCard($params);
                            }
                        } elseif ($pathChunks[4] === 'moves') {
                            if ($call === 'POST /projects/columns/{column_id}/moves') {
                                return $this->routers->internal🔀Router🔀Post🔀Projects()->moveColumn($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'autolinks') {
                            if ($call === 'POST /repos/{owner}/{repo}/autolinks') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createAutolink($params);
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
                                return $this->routers->internal🔀Router🔀Post🔀Checks()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
                                return $this->routers->internal🔀Router🔀Post🔀Checks()->createSuite($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'POST /repos/{owner}/{repo}/deployments') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeployment($params);
                            }
                        } elseif ($pathChunks[4] === 'dispatches') {
                            if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createDispatchEvent($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'POST /repos/{owner}/{repo}/forks') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createFork($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'POST /repos/{owner}/{repo}/hooks') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createWebhook($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'POST /repos/{owner}/{repo}/issues') {
                                return $this->routers->internal🔀Router🔀Post🔀Issues()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'POST /repos/{owner}/{repo}/keys') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createDeployKey($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'POST /repos/{owner}/{repo}/labels') {
                                return $this->routers->internal🔀Router🔀Post🔀Issues()->createLabel($params);
                            }
                        } elseif ($pathChunks[4] === 'merge-upstream') {
                            if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->mergeUpstream($params);
                            }
                        } elseif ($pathChunks[4] === 'merges') {
                            if ($call === 'POST /repos/{owner}/{repo}/merges') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->merge($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'POST /repos/{owner}/{repo}/milestones') {
                                return $this->routers->internal🔀Router🔀Post🔀Issues()->createMilestone($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'POST /repos/{owner}/{repo}/pages') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createPagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'POST /repos/{owner}/{repo}/projects') {
                                return $this->routers->internal🔀Router🔀Post🔀Projects()->createForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'POST /repos/{owner}/{repo}/pulls') {
                                return $this->routers->internal🔀Router🔀Post🔀Pulls()->create($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'POST /repos/{owner}/{repo}/releases') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createRelease($params);
                            }
                        } elseif ($pathChunks[4] === 'transfer') {
                            if ($call === 'POST /repos/{owner}/{repo}/transfer') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->transfer($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{template_owner}') {
                    if ($pathChunks[3] === '{template_repo}') {
                        if ($pathChunks[4] === 'generate') {
                            if ($call === 'POST /repos/{template_owner}/{template_repo}/generate') {
                                return $this->routers->internal🔀Router🔀Post🔀Repos()->createUsingTemplate($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'authorized-keys') {
                            if ($call === 'POST /setup/api/settings/authorized-keys') {
                                return $this->routers->internal🔀Router🔀Post🔀EnterpriseAdmin()->addAuthorizedSshKey($params);
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
