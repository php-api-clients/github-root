<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AuditLogStreamKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CheckAutomatedSecurityFixes;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeSecurityConfigurationForRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespacesSecret;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespacesUserPublicKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentFile;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GistComment;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\HookDelivery;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Import;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Installation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Language;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\LicenseContent;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\MarketplacePurchase;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Migration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkConfiguration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\NetworkSettings;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListHostedRunnersForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListHostedRunnersForOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationRole;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgPrivateRegistryConfiguration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Package;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Page;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ProjectCard;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryRuleset;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositorySubscription;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Stargazer;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamDiscussion;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamFull;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamMembership;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamProject;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ThreadSubscription;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Topic;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;

final class Five
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\GetAuditLogStreamConfigs>|Observable<Schema\PushRuleBypassRequest>|Observable<Schema\CodeScanningOrganizationAlertItems>|Observable<Schema\CodeSecurityConfiguration>|Observable<Schema\CopilotUsageMetricsDay>|Observable<Schema\DependabotAlertWithRepository>|WithoutBody|Observable<Schema\CustomProperty>|Observable<Schema\OrganizationSecretScanningAlert>|Observable<Schema\MarketplacePurchase>|Observable<Schema\Event>|Schema\BasicError|Observable<Schema\SecretScanningBypassRequest>|Observable<Schema\Package>|Observable<Schema\OrgRepoCustomPropertyValues>|Observable<Schema\RuleSuites>|Observable<Schema\ProjectCard>|Observable<Schema\Activity>|Observable<Schema\SimpleUser>|Observable<Schema\Autolink>|Observable<Schema\ShortBranch>|Observable<Schema\Collaborator>|Observable<Schema\CommitComment>|Observable<Schema\Commit>|Observable<Schema\Contributor>|Observable<Schema\Deployment>|Observable<Schema\MinimalRepository>|Observable<Schema\Hook>|Observable<Schema\RepositoryInvitation>|Observable<Schema\Issue>|Observable<Schema\DeployKey>|Observable<Schema\Label>|Observable<Schema\Milestone>|Observable<Schema\Thread>|Observable<Schema\Project>|Observable<Schema\PullRequestSimple>|Observable<Schema\Release>|Observable<Schema\RepositoryRuleset>|Observable<Schema\RepositoryAdvisory>|Observable<Schema\Tag>|Observable<Schema\Team> */
    public function call(string $call, array $params, array $pathChunks): HookDelivery|Ok|ActionsEnterprisePermissions|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|AuditLogStreamKey|iterable|WithoutBody|NetworkConfiguration|NetworkSettings|RepositoryRuleset|GistComment|MarketplacePurchase|BasicError|ThreadSubscription|Json|ActionsOrganizationPermissions|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|CopilotOrganizationDetails|OrganizationCustomRepositoryRole|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|ExternalGroup|OrgHook|OrgMembership|Migration|OrganizationRole|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\PrivateRegistries\GetOrgPublicKey\Response\ApplicationJson\Ok|OrgPrivateRegistryConfiguration|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\HostedCompute\ListNetworkConfigurationsForOrg\Response\ApplicationJson\Ok\Application\Json|GroupMapping|TeamFull|ProjectCard|CheckAutomatedSecurityFixes|CodeSecurityConfigurationForRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|Import|Installation|InteractionLimitResponse|One|Language|LicenseContent|Page|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\CheckPrivateVulnerabilityReporting\Response\ApplicationJson\Ok|ContentFile|SimpleUser|Stargazer|RepositorySubscription|Topic|TeamDiscussion|TeamMembership|TeamProject|CodespacesUserPublicKey|CodespacesSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|Package|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Users\ListAttestations\Response\ApplicationJson\Ok\Application\Json|EmptyObject
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
                        if ($pathChunks[4] === 'hosted-runners') {
                            if ($call === 'GET /enterprises/{enterprise}/actions/hosted-runners') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listHostedRunnersForEnterprise($params);
                            }
                        } elseif ($pathChunks[4] === 'permissions') {
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
                    } elseif ($pathChunks[3] === 'audit-log') {
                        if ($pathChunks[4] === 'stream-key') {
                            if ($call === 'GET /enterprises/{enterprise}/audit-log/stream-key') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAuditLogStreamKey($params);
                            }
                        } elseif ($pathChunks[4] === 'streams') {
                            if ($call === 'GET /enterprises/{enterprise}/audit-log/streams') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAuditLogStreams($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'bypass-requests') {
                        if ($pathChunks[4] === 'push-rules') {
                            if ($call === 'GET /enterprises/{enterprise}/bypass-requests/push-rules') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listPushBypassRequests($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/code-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($call === 'GET /enterprises/{enterprise}/code-security/configurations') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeSecurity()->getConfigurationsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'metrics') {
                            if ($call === 'GET /enterprises/{enterprise}/copilot/metrics') {
                                return $this->routers->internal🔀Router🔀Get🔀Copilot()->copilotMetricsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'dependabot') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /enterprises/{enterprise}/dependabot/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀Dependabot()->listAlertsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'network-configurations') {
                        if ($pathChunks[4] === '{network_configuration_id}') {
                            if ($call === 'GET /enterprises/{enterprise}/network-configurations/{network_configuration_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀HostedCompute()->getNetworkConfigurationForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'network-settings') {
                        if ($pathChunks[4] === '{network_settings_id}') {
                            if ($call === 'GET /enterprises/{enterprise}/network-settings/{network_settings_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀HostedCompute()->getNetworkSettingsForEnterprise($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($call === 'GET /enterprises/{enterprise}/properties/schema') {
                                return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getEnterpriseCustomProperties($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'GET /enterprises/{enterprise}/rulesets/{ruleset_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getEnterpriseRuleset($params);
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
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'plans') {
                    if ($pathChunks[3] === '{plan_id}') {
                        if ($pathChunks[4] === 'accounts') {
                            if ($call === 'GET /marketplace_listing/plans/{plan_id}/accounts') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->listAccountsForPlan($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'accounts') {
                        if ($pathChunks[4] === '{account_id}') {
                            if ($call === 'GET /marketplace_listing/stubbed/accounts/{account_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->getSubscriptionPlanForAccountStubbed($params);
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
                        if ($pathChunks[4] === 'hosted-runners') {
                            if ($call === 'GET /orgs/{org}/actions/hosted-runners') {
                                return $this->routers->internal🔀Router🔀Get🔀Actions()->listHostedRunnersForOrg($params);
                            }
                        } elseif ($pathChunks[4] === 'permissions') {
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
                    } elseif ($pathChunks[3] === 'attestations') {
                        if ($pathChunks[4] === '{subject_digest}') {
                            if ($call === 'GET /orgs/{org}/attestations/{subject_digest}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->listAttestations($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'blocks') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/blocks/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->checkBlockedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'bypass-requests') {
                        if ($pathChunks[4] === 'push-rules') {
                            if ($call === 'GET /orgs/{org}/bypass-requests/push-rules') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->listPushBypassRequests($params);
                            }
                        } elseif ($pathChunks[4] === 'secret-scanning') {
                            if ($call === 'GET /orgs/{org}/bypass-requests/secret-scanning') {
                                return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listOrgBypassRequests($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/code-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeScanning()->listAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'code-security') {
                        if ($pathChunks[4] === 'configurations') {
                            if ($call === 'GET /orgs/{org}/code-security/configurations') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeSecurity()->getConfigurationsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($pathChunks[4] === 'secrets') {
                            if ($call === 'GET /orgs/{org}/codespaces/secrets') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listOrgSecrets($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'copilot') {
                        if ($pathChunks[4] === 'billing') {
                            if ($call === 'GET /orgs/{org}/copilot/billing') {
                                return $this->routers->internal🔀Router🔀Get🔀Copilot()->getCopilotOrganizationDetails($params);
                            }
                        } elseif ($pathChunks[4] === 'metrics') {
                            if ($call === 'GET /orgs/{org}/copilot/metrics') {
                                return $this->routers->internal🔀Router🔀Get🔀Copilot()->copilotMetricsForOrganization($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'custom-repository-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'GET /orgs/{org}/custom-repository-roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getCustomRepoRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'custom_roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'GET /orgs/{org}/custom_roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getCustomRole($params);
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
                    } elseif ($pathChunks[3] === 'organization-roles') {
                        if ($pathChunks[4] === '{role_id}') {
                            if ($call === 'GET /orgs/{org}/organization-roles/{role_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getOrgRole($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'private-registries') {
                        if ($pathChunks[4] === 'public-key') {
                            if ($call === 'GET /orgs/{org}/private-registries/public-key') {
                                return $this->routers->internal🔀Router🔀Get🔀PrivateRegistries()->getOrgPublicKey($params);
                            }
                        } elseif ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'GET /orgs/{org}/private-registries/{secret_name}') {
                                return $this->routers->internal🔀Router🔀Get🔀PrivateRegistries()->getOrgPrivateRegistry($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'properties') {
                        if ($pathChunks[4] === 'schema') {
                            if ($call === 'GET /orgs/{org}/properties/schema') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->getAllCustomProperties($params);
                            }
                        } elseif ($pathChunks[4] === 'values') {
                            if ($call === 'GET /orgs/{org}/properties/values') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->listCustomPropertiesValuesForRepos($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($pathChunks[4] === '{username}') {
                            if ($call === 'GET /orgs/{org}/public_members/{username}') {
                                return $this->routers->internal🔀Router🔀Get🔀Orgs()->checkPublicMembershipForUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($pathChunks[4] === 'rule-suites') {
                            if ($call === 'GET /orgs/{org}/rulesets/rule-suites') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getOrgRuleSuites($params);
                            }
                        } elseif ($pathChunks[4] === '{ruleset_id}') {
                            if ($call === 'GET /orgs/{org}/rulesets/{ruleset_id}') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getOrgRuleset($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'secret-scanning') {
                        if ($pathChunks[4] === 'alerts') {
                            if ($call === 'GET /orgs/{org}/secret-scanning/alerts') {
                                return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->listAlertsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'settings') {
                        if ($pathChunks[4] === 'network-configurations') {
                            if ($call === 'GET /orgs/{org}/settings/network-configurations') {
                                return $this->routers->internal🔀Router🔀Get🔀HostedCompute()->listNetworkConfigurationsForOrg($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'team-sync') {
                        if ($pathChunks[4] === 'groups') {
                            if ($call === 'GET /orgs/{org}/team-sync/groups') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->listIdpGroupsForOrg($params);
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
                        if ($pathChunks[4] === 'activity') {
                            if ($call === 'GET /repos/{owner}/{repo}/activity') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listActivities($params);
                            }
                        } elseif ($pathChunks[4] === 'assignees') {
                            if ($call === 'GET /repos/{owner}/{repo}/assignees') {
                                return $this->routers->internal🔀Router🔀Get🔀Issues()->listAssignees($params);
                            }
                        } elseif ($pathChunks[4] === 'autolinks') {
                            if ($call === 'GET /repos/{owner}/{repo}/autolinks') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listAutolinks($params);
                            }
                        } elseif ($pathChunks[4] === 'automated-security-fixes') {
                            if ($call === 'GET /repos/{owner}/{repo}/automated-security-fixes') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->checkAutomatedSecurityFixes($params);
                            }
                        } elseif ($pathChunks[4] === 'branches') {
                            if ($call === 'GET /repos/{owner}/{repo}/branches') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->listBranches($params);
                            }
                        } elseif ($pathChunks[4] === 'code-security-configuration') {
                            if ($call === 'GET /repos/{owner}/{repo}/code-security-configuration') {
                                return $this->routers->internal🔀Router🔀Get🔀CodeSecurity()->getConfigurationForRepository($params);
                            }
                        } elseif ($pathChunks[4] === 'codespaces') {
                            if ($call === 'GET /repos/{owner}/{repo}/codespaces') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listInRepositoryForAuthenticatedUser($params);
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
                        } elseif ($pathChunks[4] === 'import') {
                            if ($call === 'GET /repos/{owner}/{repo}/import') {
                                return $this->routers->internal🔀Router🔀Get🔀Migrations()->getImportStatus($params);
                            }
                        } elseif ($pathChunks[4] === 'installation') {
                            if ($call === 'GET /repos/{owner}/{repo}/installation') {
                                return $this->routers->internal🔀Router🔀Get🔀Apps()->getRepoInstallation($params);
                            }
                        } elseif ($pathChunks[4] === 'interaction-limits') {
                            if ($call === 'GET /repos/{owner}/{repo}/interaction-limits') {
                                return $this->routers->internal🔀Router🔀Get🔀Interactions()->getRestrictionsForRepo($params);
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
                        } elseif ($pathChunks[4] === 'private-vulnerability-reporting') {
                            if ($call === 'GET /repos/{owner}/{repo}/private-vulnerability-reporting') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->checkPrivateVulnerabilityReporting($params);
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
                        } elseif ($pathChunks[4] === 'rulesets') {
                            if ($call === 'GET /repos/{owner}/{repo}/rulesets') {
                                return $this->routers->internal🔀Router🔀Get🔀Repos()->getRepoRulesets($params);
                            }
                        } elseif ($pathChunks[4] === 'security-advisories') {
                            if ($call === 'GET /repos/{owner}/{repo}/security-advisories') {
                                return $this->routers->internal🔀Router🔀Get🔀SecurityAdvisories()->listRepositoryAdvisories($params);
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
                    } elseif ($pathChunks[3] === 'team-sync') {
                        if ($pathChunks[4] === 'group-mappings') {
                            if ($call === 'GET /teams/{team_id}/team-sync/group-mappings') {
                                return $this->routers->internal🔀Router🔀Get🔀Teams()->listIdpGroupsForLegacy($params);
                            }
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($pathChunks[4] === 'public-key') {
                            if ($call === 'GET /user/codespaces/secrets/public-key') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getPublicKeyForAuthenticatedUser($params);
                            }
                        } elseif ($pathChunks[4] === '{secret_name}') {
                            if ($call === 'GET /user/codespaces/secrets/{secret_name}') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getSecretForAuthenticatedUser($params);
                            }
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($pathChunks[4] === 'machines') {
                            if ($call === 'GET /user/codespaces/{codespace_name}/machines') {
                                return $this->routers->internal🔀Router🔀Get🔀Codespaces()->codespaceMachinesForAuthenticatedUser($params);
                            }
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
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
                    if ($pathChunks[3] === 'attestations') {
                        if ($pathChunks[4] === '{subject_digest}') {
                            if ($call === 'GET /users/{username}/attestations/{subject_digest}') {
                                return $this->routers->internal🔀Router🔀Get🔀Users()->listAttestations($params);
                            }
                        }
                    } elseif ($pathChunks[3] === 'docker') {
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
