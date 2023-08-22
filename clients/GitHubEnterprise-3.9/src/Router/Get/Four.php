<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise\Router\Get;

use ApiClients\Client\GitHubEnterprise\Hydrators;
use ApiClients\Client\GitHubEnterprise\Router;
use ApiClients\Client\GitHubEnterprise\Schema\AnnouncementBanner;
use ApiClients\Client\GitHubEnterprise\Schema\ApplicationGrant;
use ApiClients\Client\GitHubEnterprise\Schema\BasicError;
use ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityAnalysisSettings;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings;
use ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview;
use ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups;
use ApiClients\Client\GitHubEnterprise\Schema\FullRepository;
use ApiClients\Client\GitHubEnterprise\Schema\GistSimple;
use ApiClients\Client\GitHubEnterprise\Schema\GitignoreTemplate;
use ApiClients\Client\GitHubEnterprise\Schema\GlobalHook;
use ApiClients\Client\GitHubEnterprise\Schema\GpgKey;
use ApiClients\Client\GitHubEnterprise\Schema\Hovercard;
use ApiClients\Client\GitHubEnterprise\Schema\Installation;
use ApiClients\Client\GitHubEnterprise\Schema\Key;
use ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo;
use ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment;
use ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook;
use ApiClients\Client\GitHubEnterprise\Schema\ProjectColumn;
use ApiClients\Client\GitHubEnterprise\Schema\Repository;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList;
use ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList;
use ApiClients\Client\GitHubEnterprise\Schema\SshSigningKey;
use ApiClients\Client\GitHubEnterprise\Schema\StarredRepository;
use ApiClients\Client\GitHubEnterprise\Schema\Thread;
use ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Four
{
    private array $router = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return |Observable<Schema\HookDeliveryItem>|(Schema\ApplicationGrant|array{code: int})|Observable<Schema\AuditLogEvent>|(Observable<Schema\GistComment>|(Observable<Schema\GistCommit>|(Observable<Schema\GistSimple>|array{code: int}|(Schema\GitignoreTemplate|(Observable<Schema\GhesVersion>|(Schema\Thread|Observable<Schema\Event>|Observable<Schema\OrgHook>|Observable<Schema\Issue>|Observable<Schema\SimpleUser>|Observable<Schema\Migration>|(Observable<Schema\Package>|Observable<Schema\OrgPreReceiveHook>|Observable<Schema\Project>|Observable<Schema\MinimalRepository>|Observable<Schema\RepositoryFineGrainedPermission>|Observable<Schema\TeamSimple>|Observable<Schema\Team>|(Schema\ProjectColumn|(Observable<Schema\SimpleUser>|(Observable<Schema\ProjectColumn>|(Schema\ScimEnterpriseGroupList|(Schema\ScimEnterpriseUserList|(Schema\ConfigurationStatus|(Schema\MaintenanceStatus|(Schema\EnterpriseSettings|Observable<Schema\TeamDiscussion>|Observable<Schema\TeamProject>|Observable<Schema\Package>|(Schema\GpgKey|(Schema\Key|(Observable<Schema\OrgMembership>|(Schema\SshSigningKey|Observable<Schema\BaseGist>|Observable<Schema\GpgKey>|Observable<Schema\KeySimple>|Observable<Schema\OrganizationSimple>|Observable<Schema\SocialAccount>|Observable<Schema\SshSigningKey> */
    public function call(string $call, array $params, array $pathChunks): GlobalHook|PreReceiveEnvironment|PreReceiveHook|WebhookConfig|iterable|Installation|ApplicationGrant|LicenseInfo|EnterpriseOverview|EnterpriseCommentOverview|EnterpriseGistOverview|EnterpriseHookOverview|EnterpriseIssueOverview|EnterpriseMilestoneOverview|EnterpriseOrganizationOverview|EnterprisePageOverview|EnterprisePullRequestOverview|EnterpriseRepositoryOverview|EnterpriseUserOverview|EnterpriseSecurityAnalysisSettings|GistSimple|GitignoreTemplate|Thread|Ok|AnnouncementBanner|Json|ExternalGroups|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|ProjectColumn|FullRepository|BasicError|ScimEnterpriseGroupList|ScimEnterpriseUserList|ConfigurationStatus|MaintenanceStatus|EnterpriseSettings|GpgKey|Key|SshSigningKey|Hovercard|StarredRepository|Repository
    {
        $matched = false;
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'admin') {
                if ($pathChunks[2] === 'hooks') {
                    if ($pathChunks[3] === '{hook_id}') {
                        if ($call === 'GET /admin/hooks/{hook_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetGlobalWebhook($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-environments') {
                    if ($pathChunks[3] === '{pre_receive_environment_id}') {
                        if ($call === 'GET /admin/pre-receive-environments/{pre_receive_environment_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetPreReceiveEnvironment($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'pre-receive-hooks') {
                    if ($pathChunks[3] === '{pre_receive_hook_id}') {
                        if ($call === 'GET /admin/pre-receive-hooks/{pre_receive_hook_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetPreReceiveHook($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'GET /app/hook/config') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetWebhookConfigForApp($params);
                        }
                    } elseif ($pathChunks[3] === 'deliveries') {
                        if ($call === 'GET /app/hook/deliveries') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->ListWebhookDeliveries($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'GET /app/installations/{installation_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'applications') {
                if ($pathChunks[2] === 'grants') {
                    if ($pathChunks[3] === '{grant_id}') {
                        if ($call === 'GET /applications/grants/{grant_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\OauthAuthorizations::class, $this->router) === false) {
                                $this->router[Router\Get\OauthAuthorizations::class] = new Router\Get\OauthAuthorizations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\OauthAuthorizations::class]->GetGrant($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprise') {
                if ($pathChunks[2] === 'settings') {
                    if ($pathChunks[3] === 'license') {
                        if ($call === 'GET /enterprise/settings/license') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetLicenseInformation($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'stats') {
                    if ($pathChunks[3] === 'all') {
                        if ($call === 'GET /enterprise/stats/all') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetAllStats($params);
                        }
                    } elseif ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /enterprise/stats/comments') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetCommentStats($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /enterprise/stats/gists') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetGistStats($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /enterprise/stats/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetHooksStats($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /enterprise/stats/issues') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetIssueStats($params);
                        }
                    } elseif ($pathChunks[3] === 'milestones') {
                        if ($call === 'GET /enterprise/stats/milestones') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetMilestoneStats($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /enterprise/stats/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetOrgStats($params);
                        }
                    } elseif ($pathChunks[3] === 'pages') {
                        if ($call === 'GET /enterprise/stats/pages') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetPagesStats($params);
                        }
                    } elseif ($pathChunks[3] === 'pulls') {
                        if ($call === 'GET /enterprise/stats/pulls') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetPullRequestStats($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /enterprise/stats/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetRepoStats($params);
                        }
                    } elseif ($pathChunks[3] === 'users') {
                        if ($call === 'GET /enterprise/stats/users') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetUserStats($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /enterprises/{enterprise}/audit-log') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetAuditLog($params);
                        }
                    } elseif ($pathChunks[3] === 'code_security_and_analysis') {
                        if ($call === 'GET /enterprises/{enterprise}/code_security_and_analysis') {
                            $matched = true;
                            if (array_key_exists(Router\Get\SecretScanning::class, $this->router) === false) {
                                $this->router[Router\Get\SecretScanning::class] = new Router\Get\SecretScanning($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\SecretScanning::class]->GetSecurityAnalysisSettingsForEnterprise($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /gists/{gist_id}/comments') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListComments($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'GET /gists/{gist_id}/commits') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListCommits($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'GET /gists/{gist_id}/forks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListForks($params);
                        }
                    } elseif ($pathChunks[3] === 'star') {
                        if ($call === 'GET /gists/{gist_id}/star') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->CheckIsStarred($params);
                        }
                    } elseif ($pathChunks[3] === '{sha}') {
                        if ($call === 'GET /gists/{gist_id}/{sha}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->GetRevision($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($pathChunks[3] === '{name}') {
                        if ($call === 'GET /gitignore/templates/{name}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gitignore::class, $this->router) === false) {
                                $this->router[Router\Get\Gitignore::class] = new Router\Get\Gitignore($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gitignore::class]->GetTemplate($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'manage') {
                if ($pathChunks[2] === 'v1') {
                    if ($pathChunks[3] === 'version') {
                        if ($call === 'GET /manage/v1/version') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetVersion($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'GET /notifications/threads/{thread_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->GetThread($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($pathChunks[2] === '{organization_id}') {
                    if ($pathChunks[3] === 'custom_roles') {
                        if ($call === 'GET /organizations/{organization_id}/custom_roles') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListCustomRoles($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'announcement') {
                        if ($call === 'GET /orgs/{org}/announcement') {
                            $matched = true;
                            if (array_key_exists(Router\Get\AnnouncementBanners::class, $this->router) === false) {
                                $this->router[Router\Get\AnnouncementBanners::class] = new Router\Get\AnnouncementBanners($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\AnnouncementBanners::class]->GetAnnouncementBannerForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /orgs/{org}/audit-log') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->GetAuditLog($params);
                        }
                    } elseif ($pathChunks[3] === 'custom-repository-roles') {
                        if ($call === 'GET /orgs/{org}/custom-repository-roles') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListCustomRepoRoles($params);
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($call === 'GET /orgs/{org}/events') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListPublicOrgEvents($params);
                        }
                    } elseif ($pathChunks[3] === 'external-groups') {
                        if ($call === 'GET /orgs/{org}/external-groups') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListExternalIdpGroupsForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /orgs/{org}/hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListWebhooks($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /orgs/{org}/installation') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetOrgInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'installations') {
                        if ($call === 'GET /orgs/{org}/installations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListAppInstallations($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /orgs/{org}/issues') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Issues::class, $this->router) === false) {
                                $this->router[Router\Get\Issues::class] = new Router\Get\Issues($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Issues::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /orgs/{org}/members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'GET /orgs/{org}/migrations') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Migrations::class, $this->router) === false) {
                                $this->router[Router\Get\Migrations::class] = new Router\Get\Migrations($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Migrations::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'GET /orgs/{org}/outside_collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListOutsideCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /orgs/{org}/packages') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->ListPackagesForOrganization($params);
                        }
                    } elseif ($pathChunks[3] === 'pre-receive-hooks') {
                        if ($call === 'GET /orgs/{org}/pre-receive-hooks') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->ListPreReceiveHooksForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /orgs/{org}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($call === 'GET /orgs/{org}/public_members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListPublicMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /orgs/{org}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->ListForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repository-fine-grained-permissions') {
                        if ($call === 'GET /orgs/{org}/repository-fine-grained-permissions') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListRepoFineGrainedPermissions($params);
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($call === 'GET /orgs/{org}/security-managers') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListSecurityManagerTeams($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /orgs/{org}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->List($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'GET /projects/columns/{column_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->GetColumn($params);
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'GET /projects/{project_id}/collaborators') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'GET /projects/{project_id}/columns') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListColumns($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'GET /repos/{owner}/{repo}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->Get($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'Groups') {
                        if ($call === 'GET /scim/v2/Groups') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->ListProvisionedGroupsEnterprise($params);
                        }
                    } elseif ($pathChunks[3] === 'Users') {
                        if ($call === 'GET /scim/v2/Users') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->ListProvisionedIdentitiesEnterprise($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'setup') {
                if ($pathChunks[2] === 'api') {
                    if ($pathChunks[3] === 'configcheck') {
                        if ($call === 'GET /setup/api/configcheck') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetConfigurationStatus($params);
                        }
                    } elseif ($pathChunks[3] === 'maintenance') {
                        if ($call === 'GET /setup/api/maintenance') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetMaintenanceStatus($params);
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($call === 'GET /setup/api/settings') {
                            $matched = true;
                            if (array_key_exists(Router\Get\EnterpriseAdmin::class, $this->router) === false) {
                                $this->router[Router\Get\EnterpriseAdmin::class] = new Router\Get\EnterpriseAdmin($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\EnterpriseAdmin::class]->GetSettings($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'GET /teams/{team_id}/discussions') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListDiscussionsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /teams/{team_id}/members') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListMembersLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /teams/{team_id}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListProjectsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /teams/{team_id}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListReposLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /teams/{team_id}/teams') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Teams::class, $this->router) === false) {
                                $this->router[Router\Get\Teams::class] = new Router\Get\Teams($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Teams::class]->ListChildLegacy($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'docker') {
                    if ($pathChunks[3] === 'conflicts') {
                        if ($call === 'GET /user/docker/conflicts') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->ListDockerMigrationConflictingPackagesForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/following/{username}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->CheckPersonIsFollowedByAuthenticated($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->GetGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'GET /user/keys/{key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->GetPublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /user/memberships/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListMembershipsForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($pathChunks[3] === '{ssh_signing_key_id}') {
                        if ($call === 'GET /user/ssh_signing_keys/{ssh_signing_key_id}') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->GetSshSigningKeyForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'GET /users/{username}/events') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListEventsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'GET /users/{username}/followers') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListFollowersForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'GET /users/{username}/following') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListFollowingForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /users/{username}/gists') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Gists::class, $this->router) === false) {
                                $this->router[Router\Get\Gists::class] = new Router\Get\Gists($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Gists::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'GET /users/{username}/gpg_keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListGpgKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'hovercard') {
                        if ($call === 'GET /users/{username}/hovercard') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->GetContextForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /users/{username}/installation') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Apps::class, $this->router) === false) {
                                $this->router[Router\Get\Apps::class] = new Router\Get\Apps($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Apps::class]->GetUserInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'GET /users/{username}/keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListPublicKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /users/{username}/orgs') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Orgs::class, $this->router) === false) {
                                $this->router[Router\Get\Orgs::class] = new Router\Get\Orgs($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Orgs::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /users/{username}/packages') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Packages::class, $this->router) === false) {
                                $this->router[Router\Get\Packages::class] = new Router\Get\Packages($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Packages::class]->ListPackagesForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /users/{username}/projects') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Projects::class, $this->router) === false) {
                                $this->router[Router\Get\Projects::class] = new Router\Get\Projects($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Projects::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($call === 'GET /users/{username}/received_events') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListReceivedEventsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /users/{username}/repos') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Repos::class, $this->router) === false) {
                                $this->router[Router\Get\Repos::class] = new Router\Get\Repos($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Repos::class]->ListForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'social_accounts') {
                        if ($call === 'GET /users/{username}/social_accounts') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListSocialAccountsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'ssh_signing_keys') {
                        if ($call === 'GET /users/{username}/ssh_signing_keys') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Users::class, $this->router) === false) {
                                $this->router[Router\Get\Users::class] = new Router\Get\Users($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Users::class]->ListSshSigningKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'starred') {
                        if ($call === 'GET /users/{username}/starred') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListReposStarredByUser($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'GET /users/{username}/subscriptions') {
                            $matched = true;
                            if (array_key_exists(Router\Get\Activity::class, $this->router) === false) {
                                $this->router[Router\Get\Activity::class] = new Router\Get\Activity($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators, $this->browser, $this->authentication);
                            }

                            return $this->router[Router\Get\Activity::class]->ListReposWatchedByUser($params);
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
