<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud\Internal\Router\Get;

use ApiClients\Client\GitHubEnterpriseCloud\Internal\Routers;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\AnnouncementBanner;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespace;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\FullRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GistSimple;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GitignoreTemplate;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\GpgKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Hovercard;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Installation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Key;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\MarketplacePurchase;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Migration;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ProjectColumn;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Repository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimEnterpriseGroupList;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimEnterpriseUserList;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\SshSigningKey;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\StarredRepository;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\Thread;
use ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookConfig;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return |Observable<Schema\HookDeliveryItem>|iterable<Schema\ClassroomAcceptedAssignment>|iterable<Schema\ClassroomAssignmentGrade>|iterable<Schema\SimpleClassroomAssignment>|Observable<Schema\ServerStatistics>|Observable<Schema\AuditLogEvent>|Observable<Schema\GistComment>|array{code:int}|Observable<Schema\GistCommit>|Observable<Schema\GistSimple>|Schema\GitignoreTemplate|Observable<Schema\MarketplaceListingPlan>|Schema\Thread|Observable<Schema\SimpleUser>|Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|Observable<Schema\CredentialAuthorization>|Observable<Schema\Event>|Observable<Schema\OrganizationInvitation>|Observable<Schema\RepositoryFineGrainedPermission>|Observable<Schema\OrgHook>|Observable<Schema\Issue>|Observable<Schema\Migration>|Observable<Schema\Package>|Observable<Schema\OrganizationProgrammaticAccessGrantRequest>|Observable<Schema\OrganizationProgrammaticAccessGrant>|Observable<Schema\Project>|Observable<Schema\MinimalRepository>|Observable<Schema\RepositoryRuleset>|Observable<Schema\RepositoryAdvisory>|Observable<Schema\TeamSimple>|Observable<Schema\Team>|Schema\ProjectColumn|Observable<Schema\ProjectColumn>|Schema\ScimEnterpriseGroupList|Schema\ScimEnterpriseUserList|Observable<Schema\TeamDiscussion>|Observable<Schema\TeamProject>|Schema\Codespace|Schema\GpgKey|Schema\Key|Observable<Schema\UserMarketplacePurchase>|Observable<Schema\OrgMembership>|Schema\Migration|Schema\SshSigningKey|Observable<Schema\BaseGist>|Observable<Schema\GpgKey>|Observable<Schema\KeySimple>|Observable<Schema\OrganizationSimple>|Observable<Schema\SocialAccount>|Observable<Schema\SshSigningKey> */
    public function call(string $call, array $params, array $pathChunks): WebhookConfig|iterable|Installation|AnnouncementBanner|EnterpriseSecurityAnalysisSettings|string|GistSimple|GitignoreTemplate|MarketplacePurchase|Thread|Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|Json|ExternalGroups|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|InteractionLimitResponse|One|ProjectColumn|FullRepository|BasicError|ScimEnterpriseGroupList|ScimEnterpriseUserList|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|Codespace|GpgKey|Key|Migration|SshSigningKey|Hovercard|StarredRepository|Repository
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'app') {
                if ($pathChunks[2] === 'hook') {
                    if ($pathChunks[3] === 'config') {
                        if ($call === 'GET /app/hook/config') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getWebhookConfigForApp($params);
                        }
                    } elseif ($pathChunks[3] === 'deliveries') {
                        if ($call === 'GET /app/hook/deliveries') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->listWebhookDeliveries($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'installations') {
                    if ($pathChunks[3] === '{installation_id}') {
                        if ($call === 'GET /app/installations/{installation_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getInstallation($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'assignments') {
                if ($pathChunks[2] === '{assignment_id}') {
                    if ($pathChunks[3] === 'accepted_assignments') {
                        if ($call === 'GET /assignments/{assignment_id}/accepted_assignments') {
                            return $this->routers->internal🔀Router🔀Get🔀Classroom()->listAcceptedAssigmentsForAnAssignment($params);
                        }
                    } elseif ($pathChunks[3] === 'grades') {
                        if ($call === 'GET /assignments/{assignment_id}/grades') {
                            return $this->routers->internal🔀Router🔀Get🔀Classroom()->getAssignmentGrades($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'classrooms') {
                if ($pathChunks[2] === '{classroom_id}') {
                    if ($pathChunks[3] === 'assignments') {
                        if ($call === 'GET /classrooms/{classroom_id}/assignments') {
                            return $this->routers->internal🔀Router🔀Get🔀Classroom()->listAssignmentsForAClassroom($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprise-installation') {
                if ($pathChunks[2] === '{enterprise_or_org}') {
                    if ($pathChunks[3] === 'server-statistics') {
                        if ($call === 'GET /enterprise-installation/{enterprise_or_org}/server-statistics') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getServerStatistics($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'enterprises') {
                if ($pathChunks[2] === '{enterprise}') {
                    if ($pathChunks[3] === 'announcement') {
                        if ($call === 'GET /enterprises/{enterprise}/announcement') {
                            return $this->routers->internal🔀Router🔀Get🔀AnnouncementBanners()->getAnnouncementBannerForEnterprise($params);
                        }
                    } elseif ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /enterprises/{enterprise}/audit-log') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getAuditLog($params);
                        }
                    } elseif ($pathChunks[3] === 'code_security_and_analysis') {
                        if ($call === 'GET /enterprises/{enterprise}/code_security_and_analysis') {
                            return $this->routers->internal🔀Router🔀Get🔀SecretScanning()->getSecurityAnalysisSettingsForEnterprise($params);
                        }
                    } elseif ($pathChunks[3] === 'consumed-licenses') {
                        if ($call === 'GET /enterprises/{enterprise}/consumed-licenses') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getConsumedLicenses($params);
                        }
                    } elseif ($pathChunks[3] === 'license-sync-status') {
                        if ($call === 'GET /enterprises/{enterprise}/license-sync-status') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->getLicenseSyncStatus($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'comments') {
                        if ($call === 'GET /gists/{gist_id}/comments') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listComments($params);
                        }
                    } elseif ($pathChunks[3] === 'commits') {
                        if ($call === 'GET /gists/{gist_id}/commits') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listCommits($params);
                        }
                    } elseif ($pathChunks[3] === 'forks') {
                        if ($call === 'GET /gists/{gist_id}/forks') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listForks($params);
                        }
                    } elseif ($pathChunks[3] === 'star') {
                        if ($call === 'GET /gists/{gist_id}/star') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->checkIsStarred($params);
                        }
                    } elseif ($pathChunks[3] === '{sha}') {
                        if ($call === 'GET /gists/{gist_id}/{sha}') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->getRevision($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'gitignore') {
                if ($pathChunks[2] === 'templates') {
                    if ($pathChunks[3] === '{name}') {
                        if ($call === 'GET /gitignore/templates/{name}') {
                            return $this->routers->internal🔀Router🔀Get🔀Gitignore()->getTemplate($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'marketplace_listing') {
                if ($pathChunks[2] === 'accounts') {
                    if ($pathChunks[3] === '{account_id}') {
                        if ($call === 'GET /marketplace_listing/accounts/{account_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getSubscriptionPlanForAccount($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'stubbed') {
                    if ($pathChunks[3] === 'plans') {
                        if ($call === 'GET /marketplace_listing/stubbed/plans') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->listPlansStubbed($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'notifications') {
                if ($pathChunks[2] === 'threads') {
                    if ($pathChunks[3] === '{thread_id}') {
                        if ($call === 'GET /notifications/threads/{thread_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->getThread($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'organizations') {
                if ($pathChunks[2] === '{organization_id}') {
                    if ($pathChunks[3] === 'custom_roles') {
                        if ($call === 'GET /organizations/{organization_id}/custom_roles') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listCustomRoles($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'announcement') {
                        if ($call === 'GET /orgs/{org}/announcement') {
                            return $this->routers->internal🔀Router🔀Get🔀AnnouncementBanners()->getAnnouncementBannerForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'audit-log') {
                        if ($call === 'GET /orgs/{org}/audit-log') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->getAuditLog($params);
                        }
                    } elseif ($pathChunks[3] === 'blocks') {
                        if ($call === 'GET /orgs/{org}/blocks') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listBlockedUsers($params);
                        }
                    } elseif ($pathChunks[3] === 'codespaces') {
                        if ($call === 'GET /orgs/{org}/codespaces') {
                            return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listInOrganization($params);
                        }
                    } elseif ($pathChunks[3] === 'credential-authorizations') {
                        if ($call === 'GET /orgs/{org}/credential-authorizations') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listSamlSsoAuthorizations($params);
                        }
                    } elseif ($pathChunks[3] === 'custom-repository-roles') {
                        if ($call === 'GET /orgs/{org}/custom-repository-roles') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listCustomRepoRoles($params);
                        }
                    } elseif ($pathChunks[3] === 'events') {
                        if ($call === 'GET /orgs/{org}/events') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listPublicOrgEvents($params);
                        }
                    } elseif ($pathChunks[3] === 'external-groups') {
                        if ($call === 'GET /orgs/{org}/external-groups') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listExternalIdpGroupsForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'failed_invitations') {
                        if ($call === 'GET /orgs/{org}/failed_invitations') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listFailedInvitations($params);
                        }
                    } elseif ($pathChunks[3] === 'fine_grained_permissions') {
                        if ($call === 'GET /orgs/{org}/fine_grained_permissions') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listFineGrainedPermissions($params);
                        }
                    } elseif ($pathChunks[3] === 'hooks') {
                        if ($call === 'GET /orgs/{org}/hooks') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listWebhooks($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /orgs/{org}/installation') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getOrgInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'installations') {
                        if ($call === 'GET /orgs/{org}/installations') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listAppInstallations($params);
                        }
                    } elseif ($pathChunks[3] === 'interaction-limits') {
                        if ($call === 'GET /orgs/{org}/interaction-limits') {
                            return $this->routers->internal🔀Router🔀Get🔀Interactions()->getRestrictionsForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'GET /orgs/{org}/invitations') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listPendingInvitations($params);
                        }
                    } elseif ($pathChunks[3] === 'issues') {
                        if ($call === 'GET /orgs/{org}/issues') {
                            return $this->routers->internal🔀Router🔀Get🔀Issues()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /orgs/{org}/members') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'migrations') {
                        if ($call === 'GET /orgs/{org}/migrations') {
                            return $this->routers->internal🔀Router🔀Get🔀Migrations()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'outside_collaborators') {
                        if ($call === 'GET /orgs/{org}/outside_collaborators') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listOutsideCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /orgs/{org}/packages') {
                            return $this->routers->internal🔀Router🔀Get🔀Packages()->listPackagesForOrganization($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-token-requests') {
                        if ($call === 'GET /orgs/{org}/personal-access-token-requests') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listPatGrantRequests($params);
                        }
                    } elseif ($pathChunks[3] === 'personal-access-tokens') {
                        if ($call === 'GET /orgs/{org}/personal-access-tokens') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listPatGrants($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /orgs/{org}/projects') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'public_members') {
                        if ($call === 'GET /orgs/{org}/public_members') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listPublicMembers($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /orgs/{org}/repos') {
                            return $this->routers->internal🔀Router🔀Get🔀Repos()->listForOrg($params);
                        }
                    } elseif ($pathChunks[3] === 'repository-fine-grained-permissions') {
                        if ($call === 'GET /orgs/{org}/repository-fine-grained-permissions') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listRepoFineGrainedPermissions($params);
                        }
                    } elseif ($pathChunks[3] === 'rulesets') {
                        if ($call === 'GET /orgs/{org}/rulesets') {
                            return $this->routers->internal🔀Router🔀Get🔀Repos()->getOrgRulesets($params);
                        }
                    } elseif ($pathChunks[3] === 'security-advisories') {
                        if ($call === 'GET /orgs/{org}/security-advisories') {
                            return $this->routers->internal🔀Router🔀Get🔀SecurityAdvisories()->listOrgRepositoryAdvisories($params);
                        }
                    } elseif ($pathChunks[3] === 'security-managers') {
                        if ($call === 'GET /orgs/{org}/security-managers') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listSecurityManagerTeams($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /orgs/{org}/teams') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->list($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'projects') {
                if ($pathChunks[2] === 'columns') {
                    if ($pathChunks[3] === '{column_id}') {
                        if ($call === 'GET /projects/columns/{column_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->getColumn($params);
                        }
                    }
                } elseif ($pathChunks[2] === '{project_id}') {
                    if ($pathChunks[3] === 'collaborators') {
                        if ($call === 'GET /projects/{project_id}/collaborators') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listCollaborators($params);
                        }
                    } elseif ($pathChunks[3] === 'columns') {
                        if ($call === 'GET /projects/{project_id}/columns') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listColumns($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'repos') {
                if ($pathChunks[2] === '{owner}') {
                    if ($pathChunks[3] === '{repo}') {
                        if ($call === 'GET /repos/{owner}/{repo}') {
                            return $this->routers->internal🔀Router🔀Get🔀Repos()->get($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'scim') {
                if ($pathChunks[2] === 'v2') {
                    if ($pathChunks[3] === 'Groups') {
                        if ($call === 'GET /scim/v2/Groups') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listProvisionedGroupsEnterprise($params);
                        }
                    } elseif ($pathChunks[3] === 'Users') {
                        if ($call === 'GET /scim/v2/Users') {
                            return $this->routers->internal🔀Router🔀Get🔀EnterpriseAdmin()->listProvisionedIdentitiesEnterprise($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'teams') {
                if ($pathChunks[2] === '{team_id}') {
                    if ($pathChunks[3] === 'discussions') {
                        if ($call === 'GET /teams/{team_id}/discussions') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listDiscussionsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'invitations') {
                        if ($call === 'GET /teams/{team_id}/invitations') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listPendingInvitationsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'members') {
                        if ($call === 'GET /teams/{team_id}/members') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listMembersLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /teams/{team_id}/projects') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listProjectsLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /teams/{team_id}/repos') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listReposLegacy($params);
                        }
                    } elseif ($pathChunks[3] === 'teams') {
                        if ($call === 'GET /teams/{team_id}/teams') {
                            return $this->routers->internal🔀Router🔀Get🔀Teams()->listChildLegacy($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/blocks/{username}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->checkBlocked($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'codespaces') {
                    if ($pathChunks[3] === 'secrets') {
                        if ($call === 'GET /user/codespaces/secrets') {
                            return $this->routers->internal🔀Router🔀Get🔀Codespaces()->listSecretsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === '{codespace_name}') {
                        if ($call === 'GET /user/codespaces/{codespace_name}') {
                            return $this->routers->internal🔀Router🔀Get🔀Codespaces()->getForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'docker') {
                    if ($pathChunks[3] === 'conflicts') {
                        if ($call === 'GET /user/docker/conflicts') {
                            return $this->routers->internal🔀Router🔀Get🔀Packages()->listDockerMigrationConflictingPackagesForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'GET /user/following/{username}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->checkPersonIsFollowedByAuthenticated($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'gpg_keys') {
                    if ($pathChunks[3] === '{gpg_key_id}') {
                        if ($call === 'GET /user/gpg_keys/{gpg_key_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->getGpgKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'keys') {
                    if ($pathChunks[3] === '{key_id}') {
                        if ($call === 'GET /user/keys/{key_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->getPublicSshKeyForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'marketplace_purchases') {
                    if ($pathChunks[3] === 'stubbed') {
                        if ($call === 'GET /user/marketplace_purchases/stubbed') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->listSubscriptionsForAuthenticatedUserStubbed($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'memberships') {
                    if ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /user/memberships/orgs') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listMembershipsForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'migrations') {
                    if ($pathChunks[3] === '{migration_id}') {
                        if ($call === 'GET /user/migrations/{migration_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Migrations()->getStatusForAuthenticatedUser($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'ssh_signing_keys') {
                    if ($pathChunks[3] === '{ssh_signing_key_id}') {
                        if ($call === 'GET /user/ssh_signing_keys/{ssh_signing_key_id}') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->getSshSigningKeyForAuthenticatedUser($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'users') {
                if ($pathChunks[2] === '{username}') {
                    if ($pathChunks[3] === 'events') {
                        if ($call === 'GET /users/{username}/events') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listEventsForAuthenticatedUser($params);
                        }
                    } elseif ($pathChunks[3] === 'followers') {
                        if ($call === 'GET /users/{username}/followers') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listFollowersForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'following') {
                        if ($call === 'GET /users/{username}/following') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listFollowingForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gists') {
                        if ($call === 'GET /users/{username}/gists') {
                            return $this->routers->internal🔀Router🔀Get🔀Gists()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'gpg_keys') {
                        if ($call === 'GET /users/{username}/gpg_keys') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listGpgKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'hovercard') {
                        if ($call === 'GET /users/{username}/hovercard') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->getContextForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'installation') {
                        if ($call === 'GET /users/{username}/installation') {
                            return $this->routers->internal🔀Router🔀Get🔀Apps()->getUserInstallation($params);
                        }
                    } elseif ($pathChunks[3] === 'keys') {
                        if ($call === 'GET /users/{username}/keys') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listPublicKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'orgs') {
                        if ($call === 'GET /users/{username}/orgs') {
                            return $this->routers->internal🔀Router🔀Get🔀Orgs()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'packages') {
                        if ($call === 'GET /users/{username}/packages') {
                            return $this->routers->internal🔀Router🔀Get🔀Packages()->listPackagesForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'projects') {
                        if ($call === 'GET /users/{username}/projects') {
                            return $this->routers->internal🔀Router🔀Get🔀Projects()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'received_events') {
                        if ($call === 'GET /users/{username}/received_events') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listReceivedEventsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'repos') {
                        if ($call === 'GET /users/{username}/repos') {
                            return $this->routers->internal🔀Router🔀Get🔀Repos()->listForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'social_accounts') {
                        if ($call === 'GET /users/{username}/social_accounts') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listSocialAccountsForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'ssh_signing_keys') {
                        if ($call === 'GET /users/{username}/ssh_signing_keys') {
                            return $this->routers->internal🔀Router🔀Get🔀Users()->listSshSigningKeysForUser($params);
                        }
                    } elseif ($pathChunks[3] === 'starred') {
                        if ($call === 'GET /users/{username}/starred') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listReposStarredByUser($params);
                        }
                    } elseif ($pathChunks[3] === 'subscriptions') {
                        if ($call === 'GET /users/{username}/subscriptions') {
                            return $this->routers->internal🔀Router🔀Get🔀Activity()->listReposWatchedByUser($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
