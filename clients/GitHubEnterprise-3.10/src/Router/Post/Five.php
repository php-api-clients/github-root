<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Post;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
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
use ApiClients\Client\GitHubEnterprise\Schema\Repository;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise;
use ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg;
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

    /** @return array{code: int}||(Schema\ProjectCard|array{code: int})|(Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|(Schema\Deployment|Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|(Schema\MergedUpstream|(Schema\Commit|(Observable<Schema\SshKey> */
    public function call(string $call, array $params, array $pathChunks): PreReceiveEnvironmentDownloadStatus|Authorization|InstallationToken|RunnerGroupsEnterprise|RunnerGroupsOrg|EmptyObject|ProjectCard|Json|Autolink|CheckRun|CheckSuite|Deployment|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|FullRepository|Hook|Issue|DeployKey|Label|MergedUpstream|Commit|Milestone|Page|Project|PullRequest|Release|MinimalRepository|Repository|iterable
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($pathChunks[4] === 'pings') {
                            if ($call === 'POST /admin/hooks/{hook_id}/pings') {
                                $matched = true;
                                if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\EnterpriseAdmin::class]->PingGlobalWebhook($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($pathChunks[4] === 'downloads') {
                            if ($call === 'POST /admin/pre-receive-environments/{pre_receive_environment_id}/downloads') {
                                $matched = true;
                                if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\EnterpriseAdmin::class]->StartPreReceiveEnvironmentDownload($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'users') {
                    if ($pathChunks[3] === '{username}') {
                        if ($pathChunks[4] === 'authorizations') {
                            if ($call === 'POST /admin/users/{username}/authorizations') {
                                $matched = true;
                                if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\EnterpriseAdmin::class]->CreateImpersonationOAuthToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($pathChunks[4] === 'access_tokens') {
                            if ($call === 'POST /app/installations/{installation_id}/access_tokens') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Apps::class]->CreateInstallationAccessToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === '{client_id}') {
                    if ($pathChunks[3] === 'token') {
                        if ($pathChunks[4] === 'scoped') {
                            if ($call === 'POST /applications/{client_id}/token/scoped') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Apps::class, $this->router) === false) {
                                    $this->router[Router\Post\Apps::class] = new Router\Post\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Apps::class]->ScopeToken($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'POST /enterprises/{enterprise}/actions/runner-groups') {
                                $matched = true;
                                if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\EnterpriseAdmin::class]->CreateSelfHostedRunnerGroupForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /enterprises/{enterprise}/{security_product}/{enablement}') {
                                $matched = true;
                                if (array_key_exists(Router\Post\SecretScanning::class, $this->router) === false) {
                                    $this->router[Router\Post\SecretScanning::class] = new Router\Post\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\SecretScanning::class]->PostSecurityProductEnablementForEnterprise($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'actions') {
                        if ($pathChunks[4] === 'runner-groups') {
                            if ($call === 'POST /orgs/{org}/actions/runner-groups') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                    $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Actions::class]->CreateSelfHostedRunnerGroupForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'variables') {
                            if ($call === 'POST /orgs/{org}/actions/variables') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Actions::class, $this->router) === false) {
                                    $this->router[Router\Post\Actions::class] = new Router\Post\Actions($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Actions::class]->CreateOrgVariable($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($pathChunks[4] === '{pat_request_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-token-requests/{pat_request_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->ReviewPatGrantRequest($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($pathChunks[4] === '{pat_id}') {
                            if ($call === 'POST /orgs/{org}/personal-access-tokens/{pat_id}') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->UpdatePatAccess($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{security_product}') {
                        if ($pathChunks[4] === '{enablement}') {
                            if ($call === 'POST /orgs/{org}/{security_product}/{enablement}') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Orgs::class, $this->router) === false) {
                                    $this->router[Router\Post\Orgs::class] = new Router\Post\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Orgs::class]->EnableOrDisableSecurityProductOnAllOrgRepos($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($pathChunks[4] === 'cards') {
                            if ($call === 'POST /projects/columns/{column_id}/cards') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->CreateCard($params);
                            }
                        } elseif ($pathChunks[4] === 'moves') {
                            if ($call === 'POST /projects/columns/{column_id}/moves') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->MoveColumn($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($pathChunks[4] === 'autolinks') {
                            if ($call === 'POST /repos/{owner}/{repo}/autolinks') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateAutolink($params);
                            }
                        } elseif ($pathChunks[4] === 'check-runs') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-runs') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Checks::class, $this->router) === false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Checks::class]->Create($params);
                            }
                        } elseif ($pathChunks[4] === 'check-suites') {
                            if ($call === 'POST /repos/{owner}/{repo}/check-suites') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Checks::class, $this->router) === false) {
                                    $this->router[Router\Post\Checks::class] = new Router\Post\Checks($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Checks::class]->CreateSuite($params);
                            }
                        } elseif ($pathChunks[4] === 'deployments') {
                            if ($call === 'POST /repos/{owner}/{repo}/deployments') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateDeployment($params);
                            }
                        } elseif ($pathChunks[4] === 'dispatches') {
                            if ($call === 'POST /repos/{owner}/{repo}/dispatches') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateDispatchEvent($params);
                            }
                        } elseif ($pathChunks[4] === 'forks') {
                            if ($call === 'POST /repos/{owner}/{repo}/forks') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateFork($params);
                            }
                        } elseif ($pathChunks[4] === 'hooks') {
                            if ($call === 'POST /repos/{owner}/{repo}/hooks') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateWebhook($params);
                            }
                        } elseif ($pathChunks[4] === 'issues') {
                            if ($call === 'POST /repos/{owner}/{repo}/issues') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->Create($params);
                            }
                        } elseif ($pathChunks[4] === 'keys') {
                            if ($call === 'POST /repos/{owner}/{repo}/keys') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateDeployKey($params);
                            }
                        } elseif ($pathChunks[4] === 'labels') {
                            if ($call === 'POST /repos/{owner}/{repo}/labels') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->CreateLabel($params);
                            }
                        } elseif ($pathChunks[4] === 'merge-upstream') {
                            if ($call === 'POST /repos/{owner}/{repo}/merge-upstream') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->MergeUpstream($params);
                            }
                        } elseif ($pathChunks[4] === 'merges') {
                            if ($call === 'POST /repos/{owner}/{repo}/merges') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->Merge($params);
                            }
                        } elseif ($pathChunks[4] === 'milestones') {
                            if ($call === 'POST /repos/{owner}/{repo}/milestones') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Issues::class, $this->router) === false) {
                                    $this->router[Router\Post\Issues::class] = new Router\Post\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Issues::class]->CreateMilestone($params);
                            }
                        } elseif ($pathChunks[4] === 'pages') {
                            if ($call === 'POST /repos/{owner}/{repo}/pages') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreatePagesSite($params);
                            }
                        } elseif ($pathChunks[4] === 'projects') {
                            if ($call === 'POST /repos/{owner}/{repo}/projects') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Projects::class, $this->router) === false) {
                                    $this->router[Router\Post\Projects::class] = new Router\Post\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Projects::class]->CreateForRepo($params);
                            }
                        } elseif ($pathChunks[4] === 'pulls') {
                            if ($call === 'POST /repos/{owner}/{repo}/pulls') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Pulls::class, $this->router) === false) {
                                    $this->router[Router\Post\Pulls::class] = new Router\Post\Pulls($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Pulls::class]->Create($params);
                            }
                        } elseif ($pathChunks[4] === 'releases') {
                            if ($call === 'POST /repos/{owner}/{repo}/releases') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateRelease($params);
                            }
                        } elseif ($pathChunks[4] === 'transfer') {
                            if ($call === 'POST /repos/{owner}/{repo}/transfer') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->Transfer($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === '{template_owner}') {
                    if ($pathChunks[3] === '{template_repo}') {
                        if ($pathChunks[4] === 'generate') {
                            if ($call === 'POST /repos/{template_owner}/{template_repo}/generate') {
                                $matched = true;
                                if (array_key_exists(Router\Post\Repos::class, $this->router) === false) {
                                    $this->router[Router\Post\Repos::class] = new Router\Post\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\Repos::class]->CreateUsingTemplate($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'authorized-keys') {
                            if ($call === 'POST /setup/api/settings/authorized-keys') {
                                $matched = true;
                                if (array_key_exists(Router\Post\EnterpriseAdmin::class, $this->router) === false) {
                                    $this->router[Router\Post\EnterpriseAdmin::class] = new Router\Post\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                                }

                                return $this->router[Router\Post\EnterpriseAdmin::class]->AddAuthorizedSshKey($params);
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
