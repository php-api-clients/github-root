<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise;

use ApiClients\Client\GitHubEnterprise\Error as ErrorSchemas;
use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class Hydrators implements \EventSauce\ObjectHydrator\ObjectMapper
{
    private ?Hydrator\Operation\Root $operation🌀Root = null;
    private ?Hydrator\Operation\Admin\Hooks $operation🌀Admin🌀Hooks = null;
    private ?Hydrator\Operation\Admin\Hooks\CbHookIdRcb $operation🌀Admin🌀Hooks🌀CbHookIdRcb = null;
    private ?Hydrator\Operation\Admin\Hooks\CbHookIdRcb\Pings $operation🌀Admin🌀Hooks🌀CbHookIdRcb🌀Pings = null;
    private ?Hydrator\Operation\Admin\Keys $operation🌀Admin🌀Keys = null;
    private ?Hydrator\Operation\Admin\Keys\CbKeyIdsRcb $operation🌀Admin🌀Keys🌀CbKeyIdsRcb = null;
    private ?Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Mapping $operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping = null;
    private ?Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync $operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync = null;
    private ?Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Mapping $operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping = null;
    private ?Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync $operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync = null;
    private ?Hydrator\Operation\Admin\Organizations $operation🌀Admin🌀Organizations = null;
    private ?Hydrator\Operation\Admin\Organizations\CbOrgRcb $operation🌀Admin🌀Organizations🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments $operation🌀Admin🌀PreReceiveEnvironments = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest = null;
    private ?Hydrator\Operation\Admin\PreReceiveHooks $operation🌀Admin🌀PreReceiveHooks = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb $operation🌀Admin🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb = null;
    private ?Hydrator\Operation\Admin\Tokens $operation🌀Admin🌀Tokens = null;
    private ?Hydrator\Operation\Admin\Tokens\CbTokenIdRcb $operation🌀Admin🌀Tokens🌀CbTokenIdRcb = null;
    private ?Hydrator\Operation\Admin\Users $operation🌀Admin🌀Users = null;
    private ?Hydrator\Operation\Admin\Users\CbUsernameRcb $operation🌀Admin🌀Users🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations $operation🌀Admin🌀Users🌀CbUsernameRcb🌀Authorizations = null;
    private ?Hydrator\Operation\App $operation🌀App = null;
    private ?Hydrator\Operation\AppManifests\CbCodeRcb\Conversions $operation🌀AppManifests🌀CbCodeRcb🌀Conversions = null;
    private ?Hydrator\Operation\App\Hook\Config $operation🌀App🌀Hook🌀Config = null;
    private ?Hydrator\Operation\App\Hook\Deliveries $operation🌀App🌀Hook🌀Deliveries = null;
    private ?Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb = null;
    private ?Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = null;
    private ?Hydrator\Operation\App\InstallationRequests $operation🌀App🌀InstallationRequests = null;
    private ?Hydrator\Operation\App\Installations $operation🌀App🌀Installations = null;
    private ?Hydrator\Operation\App\Installations\CbInstallationIdRcb $operation🌀App🌀Installations🌀CbInstallationIdRcb = null;
    private ?Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens $operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = null;
    private ?Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended $operation🌀App🌀Installations🌀CbInstallationIdRcb🌀Suspended = null;
    private ?Hydrator\Operation\Applications\Grants $operation🌀Applications🌀Grants = null;
    private ?Hydrator\Operation\Applications\Grants\CbGrantIdRcb $operation🌀Applications🌀Grants🌀CbGrantIdRcb = null;
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Grant $operation🌀Applications🌀CbClientIdRcb🌀Grant = null;
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Token $operation🌀Applications🌀CbClientIdRcb🌀Token = null;
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped $operation🌀Applications🌀CbClientIdRcb🌀Token🌀Scoped = null;
    private ?Hydrator\Operation\Apps\CbAppSlugRcb $operation🌀Apps🌀CbAppSlugRcb = null;
    private ?Hydrator\Operation\Authorizations $operation🌀Authorizations = null;
    private ?Hydrator\Operation\Authorizations\Clients\CbClientIdRcb $operation🌀Authorizations🌀Clients🌀CbClientIdRcb = null;
    private ?Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb $operation🌀Authorizations🌀Clients🌀CbClientIdRcb🌀CbFingerprintRcb = null;
    private ?Hydrator\Operation\Authorizations\CbAuthorizationIdRcb $operation🌀Authorizations🌀CbAuthorizationIdRcb = null;
    private ?Hydrator\Operation\CodesOfConduct $operation🌀CodesOfConduct = null;
    private ?Hydrator\Operation\CodesOfConduct\CbKeyRcb $operation🌀CodesOfConduct🌀CbKeyRcb = null;
    private ?Hydrator\Operation\Emojis $operation🌀Emojis = null;
    private ?Hydrator\Operation\Enterprise\Announcement $operation🌀Enterprise🌀Announcement = null;
    private ?Hydrator\Operation\Enterprise\Settings\License $operation🌀Enterprise🌀Settings🌀License = null;
    private ?Hydrator\Operation\Enterprise\Stats\All $operation🌀Enterprise🌀Stats🌀All = null;
    private ?Hydrator\Operation\Enterprise\Stats\Comments $operation🌀Enterprise🌀Stats🌀Comments = null;
    private ?Hydrator\Operation\Enterprise\Stats\Gists $operation🌀Enterprise🌀Stats🌀Gists = null;
    private ?Hydrator\Operation\Enterprise\Stats\Hooks $operation🌀Enterprise🌀Stats🌀Hooks = null;
    private ?Hydrator\Operation\Enterprise\Stats\Issues $operation🌀Enterprise🌀Stats🌀Issues = null;
    private ?Hydrator\Operation\Enterprise\Stats\Milestones $operation🌀Enterprise🌀Stats🌀Milestones = null;
    private ?Hydrator\Operation\Enterprise\Stats\Orgs $operation🌀Enterprise🌀Stats🌀Orgs = null;
    private ?Hydrator\Operation\Enterprise\Stats\Pages $operation🌀Enterprise🌀Stats🌀Pages = null;
    private ?Hydrator\Operation\Enterprise\Stats\Pulls $operation🌀Enterprise🌀Stats🌀Pulls = null;
    private ?Hydrator\Operation\Enterprise\Stats\Repos $operation🌀Enterprise🌀Stats🌀Repos = null;
    private ?Hydrator\Operation\Enterprise\Stats\Users $operation🌀Enterprise🌀Stats🌀Users = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\UsagePolicy $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀UsagePolicy = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations\CbOrgIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations🌀CbOrgIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Workflow $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations\CbOrgIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations🌀CbOrgIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog $operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity $operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity = null;
    private ?Hydrator\Operation\Events $operation🌀Events = null;
    private ?Hydrator\Operation\Feeds $operation🌀Feeds = null;
    private ?Hydrator\Operation\Gists $operation🌀Gists = null;
    private ?Hydrator\Operation\Gists\Public_ $operation🌀Gists🌀Public_ = null;
    private ?Hydrator\Operation\Gists\Starred $operation🌀Gists🌀Starred = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb $operation🌀Gists🌀CbGistIdRcb = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Comments $operation🌀Gists🌀CbGistIdRcb🌀Comments = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb $operation🌀Gists🌀CbGistIdRcb🌀Comments🌀CbCommentIdRcb = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Commits $operation🌀Gists🌀CbGistIdRcb🌀Commits = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Forks $operation🌀Gists🌀CbGistIdRcb🌀Forks = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Star $operation🌀Gists🌀CbGistIdRcb🌀Star = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\CbShaRcb $operation🌀Gists🌀CbGistIdRcb🌀CbShaRcb = null;
    private ?Hydrator\Operation\Gitignore\Templates $operation🌀Gitignore🌀Templates = null;
    private ?Hydrator\Operation\Gitignore\Templates\CbNameRcb $operation🌀Gitignore🌀Templates🌀CbNameRcb = null;
    private ?Hydrator\Operation\Installation\Repositories $operation🌀Installation🌀Repositories = null;
    private ?Hydrator\Operation\Installation\Token $operation🌀Installation🌀Token = null;
    private ?Hydrator\Operation\Issues $operation🌀Issues = null;
    private ?Hydrator\Operation\Licenses $operation🌀Licenses = null;
    private ?Hydrator\Operation\Licenses\CbLicenseRcb $operation🌀Licenses🌀CbLicenseRcb = null;
    private ?Hydrator\Operation\Markdown $operation🌀Markdown = null;
    private ?Hydrator\Operation\Markdown\Raw $operation🌀Markdown🌀Raw = null;
    private ?Hydrator\Operation\Meta $operation🌀Meta = null;
    private ?Hydrator\Operation\Networks\CbOwnerRcb\CbRepoRcb\Events $operation🌀Networks🌀CbOwnerRcb🌀CbRepoRcb🌀Events = null;
    private ?Hydrator\Operation\Notifications $operation🌀Notifications = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb $operation🌀Notifications🌀Threads🌀CbThreadIdRcb = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription $operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = null;
    private ?Hydrator\Operation\Octocat $operation🌀Octocat = null;
    private ?Hydrator\Operation\Organizations $operation🌀Organizations = null;
    private ?Hydrator\Operation\Organizations\CbOrganizationIdRcb\CustomRoles $operation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb $operation🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories\CbRepositoryIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories🌀CbRepositoryIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories\CbRepositoryIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories🌀CbRepositoryIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RemoveToken $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RemoveToken = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\AuditLog $operation🌀Orgs🌀CbOrgRcb🌀AuditLog = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts $operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Events $operation🌀Orgs🌀CbOrgRcb🌀Events = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb $operation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups $operation🌀Orgs🌀CbOrgRcb🌀ExternalGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks $operation🌀Orgs🌀CbOrgRcb🌀Hooks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Config $operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Config = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries $operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Pings $operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Pings = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Installation $operation🌀Orgs🌀CbOrgRcb🌀Installation = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Installations $operation🌀Orgs🌀CbOrgRcb🌀Installations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Issues $operation🌀Orgs🌀CbOrgRcb🌀Issues = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Members $operation🌀Orgs🌀CbOrgRcb🌀Members = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations $operation🌀Orgs🌀CbOrgRcb🌀Migrations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive $operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock $operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repos🌀CbRepoNameRcb🌀Lock = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators $operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\PreReceiveHooks $operation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb $operation🌀Orgs🌀CbOrgRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Projects = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers $operation🌀Orgs🌀CbOrgRcb🌀PublicMembers = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀PublicMembers🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Repos $operation🌀Orgs🌀CbOrgRcb🌀Repos = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\SecretScanning\Alerts $operation🌀Orgs🌀CbOrgRcb🌀SecretScanning🌀Alerts = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers $operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\SecurityDashManagers\Teams\CbTeamSlugRcb $operation🌀Orgs🌀CbOrgRcb🌀SecurityDashManagers🌀Teams🌀CbTeamSlugRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\AdvancedSecurity $operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀AdvancedSecurity = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams $operation🌀Orgs🌀CbOrgRcb🌀Teams = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions\CbReactionIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions🌀CbReactionIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions\CbReactionIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions🌀CbReactionIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\ExternalDashGroups $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀ExternalDashGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Members $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Members = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Teams $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Teams = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\CbSecurityProductRcb\CbEnablementRcb $operation🌀Orgs🌀CbOrgRcb🌀CbSecurityProductRcb🌀CbEnablementRcb = null;
    private ?Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb $operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb = null;
    private ?Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves $operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves = null;
    private ?Hydrator\Operation\Projects\Columns\CbColumnIdRcb $operation🌀Projects🌀Columns🌀CbColumnIdRcb = null;
    private ?Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards $operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards = null;
    private ?Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Moves $operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves = null;
    private ?Hydrator\Operation\Projects\CbProjectIdRcb $operation🌀Projects🌀CbProjectIdRcb = null;
    private ?Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators $operation🌀Projects🌀CbProjectIdRcb🌀Collaborators = null;
    private ?Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb $operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission $operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = null;
    private ?Hydrator\Operation\Projects\CbProjectIdRcb\Columns $operation🌀Projects🌀CbProjectIdRcb🌀Columns = null;
    private ?Hydrator\Operation\RateLimit $operation🌀RateLimit = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb\CbArchiveFormatRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb🌀CbArchiveFormatRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\UsagePolicy $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀UsagePolicy = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches\CbCacheIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches🌀CbCacheIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Logs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Logs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Rerun $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Rerun = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Workflow $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Workflow = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\Downloads $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RegistrationToken $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RemoveToken $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RemoveToken = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Artifacts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Logs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Logs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Cancel $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Cancel = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Logs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Logs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\RerunDashFailedDashJobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀RerunDashFailedDashJobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\PublicKey $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Disable $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Disable = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Dispatches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Dispatches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Enable $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Enable = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees\CbAssigneeRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees🌀CbAssigneeRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks\CbAutolinkIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks🌀CbAutolinkIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredSignatures $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredSignatures = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks\Contexts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Apps $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Apps = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Teams $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Teams = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Users $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Users = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Rename $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Rename = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Rerequest $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Rerequest = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\Rerequest $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀Rerequest = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses\CbStatusIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses🌀CbStatusIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dispatches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dispatches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies\CbBranchPolicyIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies🌀CbBranchPolicyIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Forks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Forks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits\CbCommitShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits🌀CbCommitShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Ref🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags\CbTagShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags🌀CbTagShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees\CbTreeShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees🌀CbTreeShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Config $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Config = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Pings $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Pings = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Tests $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Tests = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Installation $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Installation = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations\CbInvitationIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations🌀CbInvitationIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events\CbEventIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events🌀CbEventIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees\CbAssigneeRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees🌀CbAssigneeRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels\CbNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels🌀CbNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Lock $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Lock = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions\CbReactionIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions🌀CbReactionIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys\CbKeyIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys🌀CbKeyIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels\CbNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels🌀CbNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Lfs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Merges $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Merges = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb🌀Labels = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\Latest $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀Latest = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\CbBuildIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀CbBuildIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Projects = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb\Replies $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments🌀CbCommentIdRcb🌀Replies = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Dismissals $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Dismissals = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\UpdateDashBranch $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme\CbDirRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme🌀CbDirRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Latest $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Latest = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags\CbTagRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Tags🌀CbTagRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Assets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Assets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions\CbReactionIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions🌀CbReactionIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Replicas\Caches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Replicas🌀Caches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀PunchCard = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Statuses\CbShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Statuses🌀CbShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscribers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscribers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection\CbTagProtectionIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection🌀CbTagProtectionIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tarball\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tarball🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Teams $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Teams = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Transfer $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Transfer = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Zipball\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Zipball🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb\Generate $operation🌀Repos🌀CbTemplateOwnerRcb🌀CbTemplateRepoRcb🌀Generate = null;
    private ?Hydrator\Operation\Repositories $operation🌀Repositories = null;
    private ?Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets $operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets = null;
    private ?Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\PublicDashKey $operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀PublicDashKey = null;
    private ?Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\CbSecretNameRcb $operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Scim\V2\Groups $operation🌀Scim🌀V2🌀Groups = null;
    private ?Hydrator\Operation\Scim\V2\Groups\CbScimGroupIdRcb $operation🌀Scim🌀V2🌀Groups🌀CbScimGroupIdRcb = null;
    private ?Hydrator\Operation\Scim\V2\Users $operation🌀Scim🌀V2🌀Users = null;
    private ?Hydrator\Operation\Scim\V2\Users\CbScimUserIdRcb $operation🌀Scim🌀V2🌀Users🌀CbScimUserIdRcb = null;
    private ?Hydrator\Operation\Search\Code $operation🌀Search🌀Code = null;
    private ?Hydrator\Operation\Search\Commits $operation🌀Search🌀Commits = null;
    private ?Hydrator\Operation\Search\Issues $operation🌀Search🌀Issues = null;
    private ?Hydrator\Operation\Search\Labels $operation🌀Search🌀Labels = null;
    private ?Hydrator\Operation\Search\Repositories $operation🌀Search🌀Repositories = null;
    private ?Hydrator\Operation\Search\Topics $operation🌀Search🌀Topics = null;
    private ?Hydrator\Operation\Search\Users $operation🌀Search🌀Users = null;
    private ?Hydrator\Operation\Setup\Api\Configcheck $operation🌀Setup🌀Api🌀Configcheck = null;
    private ?Hydrator\Operation\Setup\Api\Configure $operation🌀Setup🌀Api🌀Configure = null;
    private ?Hydrator\Operation\Setup\Api\Maintenance $operation🌀Setup🌀Api🌀Maintenance = null;
    private ?Hydrator\Operation\Setup\Api\Settings $operation🌀Setup🌀Api🌀Settings = null;
    private ?Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys $operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys = null;
    private ?Hydrator\Operation\Setup\Api\Start $operation🌀Setup🌀Api🌀Start = null;
    private ?Hydrator\Operation\Setup\Api\Upgrade $operation🌀Setup🌀Api🌀Upgrade = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb $operation🌀Teams🌀CbTeamIdRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions $operation🌀Teams🌀CbTeamIdRcb🌀Discussions = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Reactions $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Members $operation🌀Teams🌀CbTeamIdRcb🌀Members = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Members\CbUsernameRcb $operation🌀Teams🌀CbTeamIdRcb🌀Members🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb $operation🌀Teams🌀CbTeamIdRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Projects $operation🌀Teams🌀CbTeamIdRcb🌀Projects = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $operation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Repos $operation🌀Teams🌀CbTeamIdRcb🌀Repos = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Teams🌀CbTeamIdRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Teams $operation🌀Teams🌀CbTeamIdRcb🌀Teams = null;
    private ?Hydrator\Operation\User $operation🌀User = null;
    private ?Hydrator\Operation\User\Emails $operation🌀User🌀Emails = null;
    private ?Hydrator\Operation\User\Followers $operation🌀User🌀Followers = null;
    private ?Hydrator\Operation\User\Following $operation🌀User🌀Following = null;
    private ?Hydrator\Operation\User\Following\CbUsernameRcb $operation🌀User🌀Following🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\User\GpgKeys $operation🌀User🌀GpgKeys = null;
    private ?Hydrator\Operation\User\GpgKeys\CbGpgKeyIdRcb $operation🌀User🌀GpgKeys🌀CbGpgKeyIdRcb = null;
    private ?Hydrator\Operation\User\Installations $operation🌀User🌀Installations = null;
    private ?Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories $operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb $operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories🌀CbRepositoryIdRcb = null;
    private ?Hydrator\Operation\User\Issues $operation🌀User🌀Issues = null;
    private ?Hydrator\Operation\User\Keys $operation🌀User🌀Keys = null;
    private ?Hydrator\Operation\User\Keys\CbKeyIdRcb $operation🌀User🌀Keys🌀CbKeyIdRcb = null;
    private ?Hydrator\Operation\User\Memberships\Orgs $operation🌀User🌀Memberships🌀Orgs = null;
    private ?Hydrator\Operation\User\Memberships\Orgs\CbOrgRcb $operation🌀User🌀Memberships🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\User\Migrations $operation🌀User🌀Migrations = null;
    private ?Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive $operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Archive = null;
    private ?Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repositories $operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\User\Orgs $operation🌀User🌀Orgs = null;
    private ?Hydrator\Operation\User\Projects $operation🌀User🌀Projects = null;
    private ?Hydrator\Operation\User\PublicEmails $operation🌀User🌀PublicEmails = null;
    private ?Hydrator\Operation\User\Repos $operation🌀User🌀Repos = null;
    private ?Hydrator\Operation\User\RepositoryInvitations $operation🌀User🌀RepositoryInvitations = null;
    private ?Hydrator\Operation\User\RepositoryInvitations\CbInvitationIdRcb $operation🌀User🌀RepositoryInvitations🌀CbInvitationIdRcb = null;
    private ?Hydrator\Operation\User\SshSigningKeys $operation🌀User🌀SshSigningKeys = null;
    private ?Hydrator\Operation\User\SshSigningKeys\CbSshSigningKeyIdRcb $operation🌀User🌀SshSigningKeys🌀CbSshSigningKeyIdRcb = null;
    private ?Hydrator\Operation\User\Starred $operation🌀User🌀Starred = null;
    private ?Hydrator\Operation\User\Starred\CbOwnerRcb\CbRepoRcb $operation🌀User🌀Starred🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\User\Subscriptions $operation🌀User🌀Subscriptions = null;
    private ?Hydrator\Operation\User\Teams $operation🌀User🌀Teams = null;
    private ?Hydrator\Operation\Users $operation🌀Users = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb $operation🌀Users🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Events $operation🌀Users🌀CbUsernameRcb🌀Events = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Events\Orgs\CbOrgRcb $operation🌀Users🌀CbUsernameRcb🌀Events🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Events\Public_ $operation🌀Users🌀CbUsernameRcb🌀Events🌀Public_ = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Followers $operation🌀Users🌀CbUsernameRcb🌀Followers = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Following $operation🌀Users🌀CbUsernameRcb🌀Following = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Following\CbTargetUserRcb $operation🌀Users🌀CbUsernameRcb🌀Following🌀CbTargetUserRcb = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Gists $operation🌀Users🌀CbUsernameRcb🌀Gists = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\GpgKeys $operation🌀Users🌀CbUsernameRcb🌀GpgKeys = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Hovercard $operation🌀Users🌀CbUsernameRcb🌀Hovercard = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Installation $operation🌀Users🌀CbUsernameRcb🌀Installation = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Keys $operation🌀Users🌀CbUsernameRcb🌀Keys = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Orgs $operation🌀Users🌀CbUsernameRcb🌀Orgs = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Projects $operation🌀Users🌀CbUsernameRcb🌀Projects = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents $operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents\Public_ $operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents🌀Public_ = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Repos $operation🌀Users🌀CbUsernameRcb🌀Repos = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\SiteAdmin $operation🌀Users🌀CbUsernameRcb🌀SiteAdmin = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\SshSigningKeys $operation🌀Users🌀CbUsernameRcb🌀SshSigningKeys = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Starred $operation🌀Users🌀CbUsernameRcb🌀Starred = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Subscriptions $operation🌀Users🌀CbUsernameRcb🌀Subscriptions = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Suspended $operation🌀Users🌀CbUsernameRcb🌀Suspended = null;
    private ?Hydrator\Operation\Zen $operation🌀Zen = null;
    private ?Hydrator\WebHook\BranchProtectionRule $webHook🪝BranchProtectionRule = null;
    private ?Hydrator\WebHook\CacheSync $webHook🪝CacheSync = null;
    private ?Hydrator\WebHook\CheckRun $webHook🪝CheckRun = null;
    private ?Hydrator\WebHook\CheckSuite $webHook🪝CheckSuite = null;
    private ?Hydrator\WebHook\CodeScanningAlert $webHook🪝CodeScanningAlert = null;
    private ?Hydrator\WebHook\CommitComment $webHook🪝CommitComment = null;
    private ?Hydrator\WebHook\Create $webHook🪝Create = null;
    private ?Hydrator\WebHook\Delete $webHook🪝Delete = null;
    private ?Hydrator\WebHook\DependabotAlert $webHook🪝DependabotAlert = null;
    private ?Hydrator\WebHook\DeployKey $webHook🪝DeployKey = null;
    private ?Hydrator\WebHook\Deployment $webHook🪝Deployment = null;
    private ?Hydrator\WebHook\DeploymentStatus $webHook🪝DeploymentStatus = null;
    private ?Hydrator\WebHook\Discussion $webHook🪝Discussion = null;
    private ?Hydrator\WebHook\DiscussionComment $webHook🪝DiscussionComment = null;
    private ?Hydrator\WebHook\Enterprise $webHook🪝Enterprise = null;
    private ?Hydrator\WebHook\Fork $webHook🪝Fork = null;
    private ?Hydrator\WebHook\GithubAppAuthorization $webHook🪝GithubAppAuthorization = null;
    private ?Hydrator\WebHook\Gollum $webHook🪝Gollum = null;
    private ?Hydrator\WebHook\Installation $webHook🪝Installation = null;
    private ?Hydrator\WebHook\InstallationRepositories $webHook🪝InstallationRepositories = null;
    private ?Hydrator\WebHook\InstallationTarget $webHook🪝InstallationTarget = null;
    private ?Hydrator\WebHook\IssueComment $webHook🪝IssueComment = null;
    private ?Hydrator\WebHook\Issues $webHook🪝Issues = null;
    private ?Hydrator\WebHook\Label $webHook🪝Label = null;
    private ?Hydrator\WebHook\Member $webHook🪝Member = null;
    private ?Hydrator\WebHook\Membership $webHook🪝Membership = null;
    private ?Hydrator\WebHook\Meta $webHook🪝Meta = null;
    private ?Hydrator\WebHook\Milestone $webHook🪝Milestone = null;
    private ?Hydrator\WebHook\Organization $webHook🪝Organization = null;
    private ?Hydrator\WebHook\Package $webHook🪝Package = null;
    private ?Hydrator\WebHook\PageBuild $webHook🪝PageBuild = null;
    private ?Hydrator\WebHook\Ping $webHook🪝Ping = null;
    private ?Hydrator\WebHook\ProjectCard $webHook🪝ProjectCard = null;
    private ?Hydrator\WebHook\Project $webHook🪝Project = null;
    private ?Hydrator\WebHook\ProjectColumn $webHook🪝ProjectColumn = null;
    private ?Hydrator\WebHook\ProjectsV2Item $webHook🪝ProjectsV2Item = null;
    private ?Hydrator\WebHook\Public_ $webHook🪝Public_ = null;
    private ?Hydrator\WebHook\PullRequest $webHook🪝PullRequest = null;
    private ?Hydrator\WebHook\PullRequestReviewComment $webHook🪝PullRequestReviewComment = null;
    private ?Hydrator\WebHook\PullRequestReview $webHook🪝PullRequestReview = null;
    private ?Hydrator\WebHook\PullRequestReviewThread $webHook🪝PullRequestReviewThread = null;
    private ?Hydrator\WebHook\Push $webHook🪝Push = null;
    private ?Hydrator\WebHook\RegistryPackage $webHook🪝RegistryPackage = null;
    private ?Hydrator\WebHook\Release $webHook🪝Release = null;
    private ?Hydrator\WebHook\Repository $webHook🪝Repository = null;
    private ?Hydrator\WebHook\RepositoryDispatch $webHook🪝RepositoryDispatch = null;
    private ?Hydrator\WebHook\RepositoryVulnerabilityAlert $webHook🪝RepositoryVulnerabilityAlert = null;
    private ?Hydrator\WebHook\SecretScanningAlert $webHook🪝SecretScanningAlert = null;
    private ?Hydrator\WebHook\SecretScanningAlertLocation $webHook🪝SecretScanningAlertLocation = null;
    private ?Hydrator\WebHook\SecurityAdvisory $webHook🪝SecurityAdvisory = null;
    private ?Hydrator\WebHook\SecurityAndAnalysis $webHook🪝SecurityAndAnalysis = null;
    private ?Hydrator\WebHook\Sponsorship $webHook🪝Sponsorship = null;
    private ?Hydrator\WebHook\Star $webHook🪝Star = null;
    private ?Hydrator\WebHook\Status $webHook🪝Status = null;
    private ?Hydrator\WebHook\TeamAdd $webHook🪝TeamAdd = null;
    private ?Hydrator\WebHook\Team $webHook🪝Team = null;
    private ?Hydrator\WebHook\User $webHook🪝User = null;
    private ?Hydrator\WebHook\Watch $webHook🪝Watch = null;
    private ?Hydrator\WebHook\WorkflowDispatch $webHook🪝WorkflowDispatch = null;
    private ?Hydrator\WebHook\WorkflowJob $webHook🪝WorkflowJob = null;
    private ?Hydrator\WebHook\WorkflowRun $webHook🪝WorkflowRun = null;
    public function hydrateObject(string $className, array $payload) : object
    {
        return match ($className) {
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingTeam' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\SyncLdapMappingForTeam\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser\\Plan' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\SyncLdapMappingForUser\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironmentDownloadStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\ScriptRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveHooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScopedInstallation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdateUsernameForUser\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Users🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BasicError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDelivery', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDelivery\\Request', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDelivery\\Response' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Permissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant\\App' => $this->getObjectMapperOperation🌀Applications🌀Grants()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseRepositoryOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseHookOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePageOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOrganizationOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseUserOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePullRequestOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseIssueOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseMilestoneOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseGistOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsagePolicyEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀UsagePolicy()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Runner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListLabelsForSelfHostedRunnerForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuditLogEvent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuditLogEvent\\ActorLocation' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningOrganizationAlertItems', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertLocation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\CodeScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSecretScanningAlert' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommitters', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersUser' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReactionRollup', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload\\Pages' => $this->getObjectMapperOperation🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicUser\\Plan', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistCommit\\ChangeStatus' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gitignore\\GetAllTemplates\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Markdown\\Render\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Markdown\\RenderRaw\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown🌀Raw()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Meta\\GetOctocat\\Response\\ApplicationoctocatStream\\H200' => $this->getObjectMapperOperation🌀Octocat()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ListCustomRoles\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationCustomRepositoryRole' => $this->getObjectMapperOperation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OidcCustomSub', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersInGroupForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Dependabot\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Teams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Members' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroups', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroups\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\Applicationjson\\H202', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgPreReceiveHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamFull', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamOrganization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveColumn\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\Delete\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\Update\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConductSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis\\SecretScanning', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\Delete\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsagePolicyForRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀UsagePolicy()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheList', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheList\\ActionsCaches' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReferencedWorkflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnvironmentApprovals', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnvironmentApprovals\\Environments' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRunArtifacts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListJobsForWorkflowRun\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PendingDeployment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PendingDeployment\\Environment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PendingDeployment\\Reviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Users', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowForcePushes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowDeletions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\BlockCreations', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Verification', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy\\Checks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredSignatures', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowForcePushes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowDeletions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\BlockCreations' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetAllStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\SetStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\AddStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\RemoveStatusCheckContexts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRuleSummary' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\CodeScanning\\GetAnalysis\\Response\\ApplicationjsonPlusSarif\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeownersErrors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeownersErrors\\Errors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Link', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependencyGraphDiff', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependencyGraphDiff\\Vulnerabilities' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\CreateDeployment\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Environment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Environment\\ProtectionRules', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\EnableLfsForRepo\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Page', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryPreReceiveHook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMergeResult', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H405', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H409' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Pulls\\UpdateBranch\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\ListCacheInfo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\ListCacheInfo\\Response\\Applicationjson\\H200\\Git' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Replicas🌀Caches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningLocation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningLocationCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitActivity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCommitActivityStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity\\Weeks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetContributorsStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Tag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Tag\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListEnvironmentSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupList', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GroupResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GroupResponse\\Members', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupResponse' => $this->getObjectMapperOperation🌀Scim🌀V2🌀Groups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseUserList', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserNameResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserEmailsResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserRole', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseUserResponse' => $this->getObjectMapperOperation🌀Scim🌀V2🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Parents' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem\\PullRequest' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepoSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepoSearchResultItem\\Permissions' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related\\TopicRelation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Aliases', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Aliases\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus\\Progress' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus\\ConnectionServices' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Avatar', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Customer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubSsl', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Reconciliation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Profile', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Cas', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Saml', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubOauth', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Smtp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ntp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Snmp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Syslog', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Pages', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Collectd', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Mapping' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SshKey' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Emails()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Subkeys' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Users\\GetByUsername\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Meta\\GetZen\\Response\\Textplain\\H200' => $this->getObjectMapperOperation🌀Zen()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Enterprise', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleDeleted\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorsOnly', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedDismissalActorsOnly', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecksEnforcementLevel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Rule' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCacheSync' => $this->getObjectMapperWebHook🪝CacheSync()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head\\Repo' => $this->getObjectMapperWebHook🪝CheckSuite()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Tool' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated\\Comment\\User' => $this->getObjectMapperWebHook🪝CommitComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlert\\Dependency', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🪝DependabotAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyDeleted\\Key' => $this->getObjectMapperWebHook🪝DeployKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentStatus()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered\\Answer\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered\\Answer\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered\\OldAnswer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnlabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Comment\\User' => $this->getObjectMapperWebHook🪝DiscussionComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookEnterpriseAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookEnterpriseAnonymousAccessEnabled' => $this->getObjectMapperWebHook🪝Enterprise()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee\\Permissions' => $this->getObjectMapperWebHook🪝Fork()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🪝Gollum()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationCreated\\Requester', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationDeleted\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationNewPermissionsAccepted\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationSuspend\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationUnsuspend', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationUnsuspend\\Repositories' => $this->getObjectMapperWebHook🪝Installation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded\\Requester', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved\\Requester' => $this->getObjectMapperWebHook🪝InstallationRepositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Slug' => $this->getObjectMapperWebHook🪝InstallationTarget()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\User' => $this->getObjectMapperWebHook🪝IssueComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\User' => $this->getObjectMapperWebHook🪝Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelCreated\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelDeleted\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Label' => $this->getObjectMapperWebHook🪝Label()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberRemoved\\Member' => $this->getObjectMapperWebHook🪝Member()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Sender', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Sender', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Membership()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneClosed\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneClosed\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneCreated\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneDeleted\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneDeleted\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneOpened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneOpened\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneOpened\\Milestone\\Creator' => $this->getObjectMapperWebHook🪝Milestone()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationDeleted\\Membership\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberAdded\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberAdded\\Membership\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited\\Invitation\\Inviter', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberRemoved\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberRemoved\\Membership\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Membership\\User' => $this->getObjectMapperWebHook🪝Organization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\Registry' => $this->getObjectMapperWebHook🪝Package()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild\\Build\\Error', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild\\Build\\Pusher' => $this->getObjectMapperWebHook🪝PageBuild()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\Changes\\Note', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardCreated\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardCreated\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardDeleted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectClosed\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCreated\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCreated\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectDeleted\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectDeleted\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectReopened\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectReopened\\Project\\Creator' => $this->getObjectMapperWebHook🪝Project()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnDeleted\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnMoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnMoved\\ProjectColumn' => $this->getObjectMapperWebHook🪝ProjectColumn()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemArchived', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemArchived\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectsV2Item', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemConverted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemConverted\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemEdited\\Changes\\FieldValue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemReordered', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemReordered\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemReordered\\Changes\\PreviousProjectsV2ItemNodeId', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemRestored', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemRestored\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemRestored\\Changes\\ArchivedAt' => $this->getObjectMapperWebHook🪝ProjectsV2Item()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Ref', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Sha', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequest()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\User' => $this->getObjectMapperWebHook🪝PullRequestReview()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Commits\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Commits\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Pusher', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository\\Permissions' => $this->getObjectMapperWebHook🪝Push()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release\\Author' => $this->getObjectMapperWebHook🪝RegistryPackage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Reactions' => $this->getObjectMapperWebHook🪝Release()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryAnonymousAccessEnabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\DefaultBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\Homepage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert\\Dismisser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert\\Dismisser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert\\Dismisser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert\\Dismisser' => $this->getObjectMapperWebHook🪝RepositoryVulnerabilityAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Vulnerabilities\\Package' => $this->getObjectMapperWebHook🪝SecurityAdvisory()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Tier' => $this->getObjectMapperWebHook🪝Sponsorship()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🪝Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAdd', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAdd\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAdd\\Team\\Parent_' => $this->getObjectMapperWebHook🪝TeamAdd()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\NotificationSetting', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Team()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserCreated\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserDeleted\\User' => $this->getObjectMapperWebHook🪝User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🪝WorkflowJob()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝WorkflowRun()->hydrateObject($className, $payload),
        };
    }
    public function hydrateObjects(string $className, iterable $payloads) : \EventSauce\ObjectHydrator\IterableList
    {
        return new \EventSauce\ObjectHydrator\IterableList($this->doHydrateObjects($className, $payloads));
    }
    private function doHydrateObjects(string $className, iterable $payloads) : \Generator
    {
        foreach ($payloads as $index => $payload) {
            (yield $index => $this->hydrateObject($className, $payload));
        }
    }
    public function serializeObject(object $object) : mixed
    {
        return $this->serializeObjectOfType($object, $object::class);
    }
    public function serializeObjectOfType(object $object, string $className) : mixed
    {
        return match ($className) {
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingTeam' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\SyncLdapMappingForTeam\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser\\Plan' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\SyncLdapMappingForUser\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironmentDownloadStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\ScriptRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\Environment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveHooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScopedInstallation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdateUsernameForUser\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Users🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BasicError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDelivery', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDelivery\\Request', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookDelivery\\Response' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Permissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant\\App' => $this->getObjectMapperOperation🌀Applications🌀Grants()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseRepositoryOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseHookOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePageOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOrganizationOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseUserOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePullRequestOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseIssueOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseMilestoneOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseGistOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsagePolicyEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀UsagePolicy()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Runner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListLabelsForSelfHostedRunnerForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuditLogEvent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuditLogEvent\\ActorLocation' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningOrganizationAlertItems', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertLocation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\CodeScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSecretScanningAlert' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommitters', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AdvancedSecurityActiveCommittersUser' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReactionRollup', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload\\Pages' => $this->getObjectMapperOperation🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicUser\\Plan', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistCommit\\ChangeStatus' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gitignore\\GetAllTemplates\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Markdown\\Render\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Markdown\\RenderRaw\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown🌀Raw()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Meta\\GetOctocat\\Response\\ApplicationoctocatStream\\H200' => $this->getObjectMapperOperation🌀Octocat()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ListCustomRoles\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationCustomRepositoryRole' => $this->getObjectMapperOperation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OidcCustomSub', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersInGroupForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Dependabot\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Teams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroup\\Members' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroups', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ExternalGroups\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\Applicationjson\\H202', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgPreReceiveHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamFull', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamOrganization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveColumn\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\Delete\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\Update\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConductSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis\\SecretScanning', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\Delete\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheUsagePolicyForRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀UsagePolicy()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheList', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsCacheList\\ActionsCaches' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReferencedWorkflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnvironmentApprovals', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnvironmentApprovals\\Environments' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRunArtifacts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListJobsForWorkflowRun\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PendingDeployment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PendingDeployment\\Environment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PendingDeployment\\Reviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Users', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowForcePushes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\AllowDeletions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\BlockCreations', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Verification', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy\\Checks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredSignatures', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowForcePushes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\AllowDeletions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\BlockCreations' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetAllStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\SetStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\AddStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\RemoveStatusCheckContexts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRuleSummary' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\CodeScanning\\GetAnalysis\\Response\\ApplicationjsonPlusSarif\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeownersErrors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeownersErrors\\Errors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Link', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependencyGraphDiff', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependencyGraphDiff\\Vulnerabilities' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\CreateDeployment\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Environment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Environment\\ProtectionRules', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\EnableLfsForRepo\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Page', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryPreReceiveHook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMergeResult', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H405', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H409' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Pulls\\UpdateBranch\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\ListCacheInfo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\ListCacheInfo\\Response\\Applicationjson\\H200\\Git' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Replicas🌀Caches()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningLocation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SecretScanningLocationCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitActivity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCommitActivityStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity\\Weeks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetContributorsStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Tag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Tag\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListEnvironmentSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupList', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GroupResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GroupResponse\\Members', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseGroupResponse' => $this->getObjectMapperOperation🌀Scim🌀V2🌀Groups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseUserList', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserNameResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserEmailsResponse', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserRole', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimEnterpriseUserResponse' => $this->getObjectMapperOperation🌀Scim🌀V2🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Parents' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem\\PullRequest' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepoSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepoSearchResultItem\\Permissions' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related\\TopicRelation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Aliases', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Aliases\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus\\Progress' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus\\ConnectionServices' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Avatar', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Customer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubSsl', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Reconciliation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Profile', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Cas', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Saml', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubOauth', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Smtp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ntp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Snmp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Syslog', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Pages', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Collectd', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Mapping' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SshKey' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Emails()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Subkeys' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Users\\GetByUsername\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Meta\\GetZen\\Response\\Textplain\\H200' => $this->getObjectMapperOperation🌀Zen()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Enterprise', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleDeleted\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorsOnly', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedDismissalActorsOnly', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecksEnforcementLevel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookBranchProtectionRuleEdited\\Rule' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCacheSync' => $this->getObjectMapperWebHook🪝CacheSync()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head\\Repo' => $this->getObjectMapperWebHook🪝CheckSuite()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Tool' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCommitCommentCreated\\Comment\\User' => $this->getObjectMapperWebHook🪝CommitComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlert\\Dependency', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🪝DependabotAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeployKeyDeleted\\Key' => $this->getObjectMapperWebHook🪝DeployKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentStatus()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered\\Answer\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionAnswered\\Answer\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Discussion\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCreated\\Discussion\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered\\OldAnswer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnlabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookDiscussionCommentEdited\\Comment\\User' => $this->getObjectMapperWebHook🪝DiscussionComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookEnterpriseAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookEnterpriseAnonymousAccessEnabled' => $this->getObjectMapperWebHook🪝Enterprise()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookFork\\Forkee\\Permissions' => $this->getObjectMapperWebHook🪝Fork()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🪝Gollum()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationCreated\\Requester', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationDeleted\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationNewPermissionsAccepted\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationSuspend\\Repositories', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationUnsuspend', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationUnsuspend\\Repositories' => $this->getObjectMapperWebHook🪝Installation()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesAdded\\Requester', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationRepositoriesRemoved\\Requester' => $this->getObjectMapperWebHook🪝InstallationRepositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Slug' => $this->getObjectMapperWebHook🪝InstallationTarget()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentCreated\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssueCommentEdited\\Issue\\User' => $this->getObjectMapperWebHook🪝IssueComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesAssigned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesClosed\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesDemilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesEdited\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesLocked\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesMilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesOpened\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesPinned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesReopened\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesTransferred\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnassigned\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnlocked\\Issue\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookIssuesUnpinned\\Issue\\User' => $this->getObjectMapperWebHook🪝Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelCreated\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelDeleted\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookLabelEdited\\Label' => $this->getObjectMapperWebHook🪝Label()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberAdded\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberEdited\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMemberRemoved\\Member' => $this->getObjectMapperWebHook🪝Member()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Sender', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Member', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Sender', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMembershipRemoved\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Membership()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneClosed\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneClosed\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneCreated\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneDeleted\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneDeleted\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneEdited\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneOpened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneOpened\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookMilestoneOpened\\Milestone\\Creator' => $this->getObjectMapperWebHook🪝Milestone()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationDeleted\\Membership\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberAdded\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberAdded\\Membership\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited\\Invitation\\Inviter', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberInvited\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberRemoved\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationMemberRemoved\\Membership\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Membership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookOrganizationRenamed\\Membership\\User' => $this->getObjectMapperWebHook🪝Organization()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPackageUpdated\\Package\\Registry' => $this->getObjectMapperWebHook🪝Package()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild\\Build\\Error', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPageBuild\\Build\\Pusher' => $this->getObjectMapperWebHook🪝PageBuild()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\Changes\\Note', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardConverted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardCreated\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardCreated\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardDeleted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardEdited\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectClosed\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCreated\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectCreated\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectDeleted\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectDeleted\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectEdited\\Project\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectReopened\\Project', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectReopened\\Project\\Creator' => $this->getObjectMapperWebHook🪝Project()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnDeleted\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnEdited\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnMoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectColumnMoved\\ProjectColumn' => $this->getObjectMapperWebHook🪝ProjectColumn()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemArchived', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemArchived\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectsV2Item', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemConverted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemConverted\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemEdited\\Changes\\FieldValue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemReordered', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemReordered\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemReordered\\Changes\\PreviousProjectsV2ItemNodeId', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemRestored', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemRestored\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookProjectsV2ItemRestored\\Changes\\ArchivedAt' => $this->getObjectMapperWebHook🪝ProjectsV2Item()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAssigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Ref', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Sha', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestLocked\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\Label', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequest()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewDismissed\\Review\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewEdited\\Review\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\User' => $this->getObjectMapperWebHook🪝PullRequestReview()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Commits\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Commits\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Pusher', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookPush\\Repository\\Permissions' => $this->getObjectMapperWebHook🪝Push()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release\\Author' => $this->getObjectMapperWebHook🪝RegistryPackage()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseCreated\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseDeleted\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseEdited\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePrereleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleasePublished\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseReleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookReleaseUnpublished\\Release\\Reactions' => $this->getObjectMapperWebHook🪝Release()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryAnonymousAccessEnabled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\DefaultBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\Homepage', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert\\Dismisser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert\\Dismisser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertReopen\\Alert\\Dismisser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert\\Dismisser' => $this->getObjectMapperWebHook🪝RepositoryVulnerabilityAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryUpdated\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory\\Vulnerabilities\\Package' => $this->getObjectMapperWebHook🪝SecurityAdvisory()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Tier' => $this->getObjectMapperWebHook🪝Sponsorship()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🪝Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAdd', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAdd\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAdd\\Team\\Parent_' => $this->getObjectMapperWebHook🪝TeamAdd()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamAddedToRepository\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamCreated\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamDeleted\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\NotificationSetting', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamEdited\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookTeamRemovedFromRepository\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Team()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserCreated', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserCreated\\User', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserDeleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookUserDeleted\\User' => $this->getObjectMapperWebHook🪝User()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🪝WorkflowJob()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\Workflow', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝WorkflowRun()->serializeObject($object),
        };
    }
    public function serializeObjects(iterable $payloads) : \EventSauce\ObjectHydrator\IterableList
    {
        return new \EventSauce\ObjectHydrator\IterableList($this->doSerializeObjects($payloads));
    }
    private function doSerializeObjects(iterable $objects) : \Generator
    {
        foreach ($objects as $index => $object) {
            (yield $index => $this->serializeObject($object));
        }
    }
    public function getObjectMapperOperation🌀Root() : Hydrator\Operation\Root
    {
        if ($this->operation🌀Root instanceof Hydrator\Operation\Root === false) {
            $this->operation🌀Root = new Hydrator\Operation\Root();
        }
        return $this->operation🌀Root;
    }
    public function getObjectMapperOperation🌀Admin🌀Hooks() : Hydrator\Operation\Admin\Hooks
    {
        if ($this->operation🌀Admin🌀Hooks instanceof Hydrator\Operation\Admin\Hooks === false) {
            $this->operation🌀Admin🌀Hooks = new Hydrator\Operation\Admin\Hooks();
        }
        return $this->operation🌀Admin🌀Hooks;
    }
    public function getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb() : Hydrator\Operation\Admin\Hooks\CbHookIdRcb
    {
        if ($this->operation🌀Admin🌀Hooks🌀CbHookIdRcb instanceof Hydrator\Operation\Admin\Hooks\CbHookIdRcb === false) {
            $this->operation🌀Admin🌀Hooks🌀CbHookIdRcb = new Hydrator\Operation\Admin\Hooks\CbHookIdRcb();
        }
        return $this->operation🌀Admin🌀Hooks🌀CbHookIdRcb;
    }
    public function getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb🌀Pings() : Hydrator\Operation\Admin\Hooks\CbHookIdRcb\Pings
    {
        if ($this->operation🌀Admin🌀Hooks🌀CbHookIdRcb🌀Pings instanceof Hydrator\Operation\Admin\Hooks\CbHookIdRcb\Pings === false) {
            $this->operation🌀Admin🌀Hooks🌀CbHookIdRcb🌀Pings = new Hydrator\Operation\Admin\Hooks\CbHookIdRcb\Pings();
        }
        return $this->operation🌀Admin🌀Hooks🌀CbHookIdRcb🌀Pings;
    }
    public function getObjectMapperOperation🌀Admin🌀Keys() : Hydrator\Operation\Admin\Keys
    {
        if ($this->operation🌀Admin🌀Keys instanceof Hydrator\Operation\Admin\Keys === false) {
            $this->operation🌀Admin🌀Keys = new Hydrator\Operation\Admin\Keys();
        }
        return $this->operation🌀Admin🌀Keys;
    }
    public function getObjectMapperOperation🌀Admin🌀Keys🌀CbKeyIdsRcb() : Hydrator\Operation\Admin\Keys\CbKeyIdsRcb
    {
        if ($this->operation🌀Admin🌀Keys🌀CbKeyIdsRcb instanceof Hydrator\Operation\Admin\Keys\CbKeyIdsRcb === false) {
            $this->operation🌀Admin🌀Keys🌀CbKeyIdsRcb = new Hydrator\Operation\Admin\Keys\CbKeyIdsRcb();
        }
        return $this->operation🌀Admin🌀Keys🌀CbKeyIdsRcb;
    }
    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping() : Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Mapping
    {
        if ($this->operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping instanceof Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Mapping === false) {
            $this->operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping = new Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Mapping();
        }
        return $this->operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping;
    }
    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync() : Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync
    {
        if ($this->operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync instanceof Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync === false) {
            $this->operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync = new Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync();
        }
        return $this->operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync;
    }
    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping() : Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Mapping
    {
        if ($this->operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping instanceof Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Mapping === false) {
            $this->operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping = new Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Mapping();
        }
        return $this->operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping;
    }
    public function getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync() : Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync
    {
        if ($this->operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync instanceof Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync === false) {
            $this->operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync = new Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Sync();
        }
        return $this->operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Sync;
    }
    public function getObjectMapperOperation🌀Admin🌀Organizations() : Hydrator\Operation\Admin\Organizations
    {
        if ($this->operation🌀Admin🌀Organizations instanceof Hydrator\Operation\Admin\Organizations === false) {
            $this->operation🌀Admin🌀Organizations = new Hydrator\Operation\Admin\Organizations();
        }
        return $this->operation🌀Admin🌀Organizations;
    }
    public function getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb() : Hydrator\Operation\Admin\Organizations\CbOrgRcb
    {
        if ($this->operation🌀Admin🌀Organizations🌀CbOrgRcb instanceof Hydrator\Operation\Admin\Organizations\CbOrgRcb === false) {
            $this->operation🌀Admin🌀Organizations🌀CbOrgRcb = new Hydrator\Operation\Admin\Organizations\CbOrgRcb();
        }
        return $this->operation🌀Admin🌀Organizations🌀CbOrgRcb;
    }
    public function getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments() : Hydrator\Operation\Admin\PreReceiveEnvironments
    {
        if ($this->operation🌀Admin🌀PreReceiveEnvironments instanceof Hydrator\Operation\Admin\PreReceiveEnvironments === false) {
            $this->operation🌀Admin🌀PreReceiveEnvironments = new Hydrator\Operation\Admin\PreReceiveEnvironments();
        }
        return $this->operation🌀Admin🌀PreReceiveEnvironments;
    }
    public function getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb() : Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb
    {
        if ($this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb instanceof Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb === false) {
            $this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb = new Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb();
        }
        return $this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb;
    }
    public function getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads() : Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads
    {
        if ($this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads instanceof Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads === false) {
            $this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads = new Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads();
        }
        return $this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads;
    }
    public function getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest() : Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest
    {
        if ($this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest instanceof Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest === false) {
            $this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest = new Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest();
        }
        return $this->operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest;
    }
    public function getObjectMapperOperation🌀Admin🌀PreReceiveHooks() : Hydrator\Operation\Admin\PreReceiveHooks
    {
        if ($this->operation🌀Admin🌀PreReceiveHooks instanceof Hydrator\Operation\Admin\PreReceiveHooks === false) {
            $this->operation🌀Admin🌀PreReceiveHooks = new Hydrator\Operation\Admin\PreReceiveHooks();
        }
        return $this->operation🌀Admin🌀PreReceiveHooks;
    }
    public function getObjectMapperOperation🌀Admin🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb() : Hydrator\Operation\Admin\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb
    {
        if ($this->operation🌀Admin🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb instanceof Hydrator\Operation\Admin\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb === false) {
            $this->operation🌀Admin🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb = new Hydrator\Operation\Admin\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb();
        }
        return $this->operation🌀Admin🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb;
    }
    public function getObjectMapperOperation🌀Admin🌀Tokens() : Hydrator\Operation\Admin\Tokens
    {
        if ($this->operation🌀Admin🌀Tokens instanceof Hydrator\Operation\Admin\Tokens === false) {
            $this->operation🌀Admin🌀Tokens = new Hydrator\Operation\Admin\Tokens();
        }
        return $this->operation🌀Admin🌀Tokens;
    }
    public function getObjectMapperOperation🌀Admin🌀Tokens🌀CbTokenIdRcb() : Hydrator\Operation\Admin\Tokens\CbTokenIdRcb
    {
        if ($this->operation🌀Admin🌀Tokens🌀CbTokenIdRcb instanceof Hydrator\Operation\Admin\Tokens\CbTokenIdRcb === false) {
            $this->operation🌀Admin🌀Tokens🌀CbTokenIdRcb = new Hydrator\Operation\Admin\Tokens\CbTokenIdRcb();
        }
        return $this->operation🌀Admin🌀Tokens🌀CbTokenIdRcb;
    }
    public function getObjectMapperOperation🌀Admin🌀Users() : Hydrator\Operation\Admin\Users
    {
        if ($this->operation🌀Admin🌀Users instanceof Hydrator\Operation\Admin\Users === false) {
            $this->operation🌀Admin🌀Users = new Hydrator\Operation\Admin\Users();
        }
        return $this->operation🌀Admin🌀Users;
    }
    public function getObjectMapperOperation🌀Admin🌀Users🌀CbUsernameRcb() : Hydrator\Operation\Admin\Users\CbUsernameRcb
    {
        if ($this->operation🌀Admin🌀Users🌀CbUsernameRcb instanceof Hydrator\Operation\Admin\Users\CbUsernameRcb === false) {
            $this->operation🌀Admin🌀Users🌀CbUsernameRcb = new Hydrator\Operation\Admin\Users\CbUsernameRcb();
        }
        return $this->operation🌀Admin🌀Users🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Admin🌀Users🌀CbUsernameRcb🌀Authorizations() : Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations
    {
        if ($this->operation🌀Admin🌀Users🌀CbUsernameRcb🌀Authorizations instanceof Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations === false) {
            $this->operation🌀Admin🌀Users🌀CbUsernameRcb🌀Authorizations = new Hydrator\Operation\Admin\Users\CbUsernameRcb\Authorizations();
        }
        return $this->operation🌀Admin🌀Users🌀CbUsernameRcb🌀Authorizations;
    }
    public function getObjectMapperOperation🌀App() : Hydrator\Operation\App
    {
        if ($this->operation🌀App instanceof Hydrator\Operation\App === false) {
            $this->operation🌀App = new Hydrator\Operation\App();
        }
        return $this->operation🌀App;
    }
    public function getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions() : Hydrator\Operation\AppManifests\CbCodeRcb\Conversions
    {
        if ($this->operation🌀AppManifests🌀CbCodeRcb🌀Conversions instanceof Hydrator\Operation\AppManifests\CbCodeRcb\Conversions === false) {
            $this->operation🌀AppManifests🌀CbCodeRcb🌀Conversions = new Hydrator\Operation\AppManifests\CbCodeRcb\Conversions();
        }
        return $this->operation🌀AppManifests🌀CbCodeRcb🌀Conversions;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Config() : Hydrator\Operation\App\Hook\Config
    {
        if ($this->operation🌀App🌀Hook🌀Config instanceof Hydrator\Operation\App\Hook\Config === false) {
            $this->operation🌀App🌀Hook🌀Config = new Hydrator\Operation\App\Hook\Config();
        }
        return $this->operation🌀App🌀Hook🌀Config;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries() : Hydrator\Operation\App\Hook\Deliveries
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries instanceof Hydrator\Operation\App\Hook\Deliveries === false) {
            $this->operation🌀App🌀Hook🌀Deliveries = new Hydrator\Operation\App\Hook\Deliveries();
        }
        return $this->operation🌀App🌀Hook🌀Deliveries;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb() : Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb instanceof Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb = new Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb();
        }
        return $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb;
    }
    public function getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts() : Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts
    {
        if ($this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts instanceof Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts === false) {
            $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = new Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts();
        }
        return $this->operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts;
    }
    public function getObjectMapperOperation🌀App🌀InstallationRequests() : Hydrator\Operation\App\InstallationRequests
    {
        if ($this->operation🌀App🌀InstallationRequests instanceof Hydrator\Operation\App\InstallationRequests === false) {
            $this->operation🌀App🌀InstallationRequests = new Hydrator\Operation\App\InstallationRequests();
        }
        return $this->operation🌀App🌀InstallationRequests;
    }
    public function getObjectMapperOperation🌀App🌀Installations() : Hydrator\Operation\App\Installations
    {
        if ($this->operation🌀App🌀Installations instanceof Hydrator\Operation\App\Installations === false) {
            $this->operation🌀App🌀Installations = new Hydrator\Operation\App\Installations();
        }
        return $this->operation🌀App🌀Installations;
    }
    public function getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb() : Hydrator\Operation\App\Installations\CbInstallationIdRcb
    {
        if ($this->operation🌀App🌀Installations🌀CbInstallationIdRcb instanceof Hydrator\Operation\App\Installations\CbInstallationIdRcb === false) {
            $this->operation🌀App🌀Installations🌀CbInstallationIdRcb = new Hydrator\Operation\App\Installations\CbInstallationIdRcb();
        }
        return $this->operation🌀App🌀Installations🌀CbInstallationIdRcb;
    }
    public function getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens() : Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens
    {
        if ($this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens instanceof Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens === false) {
            $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = new Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens();
        }
        return $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens;
    }
    public function getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀Suspended() : Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended
    {
        if ($this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀Suspended instanceof Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended === false) {
            $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀Suspended = new Hydrator\Operation\App\Installations\CbInstallationIdRcb\Suspended();
        }
        return $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀Suspended;
    }
    public function getObjectMapperOperation🌀Applications🌀Grants() : Hydrator\Operation\Applications\Grants
    {
        if ($this->operation🌀Applications🌀Grants instanceof Hydrator\Operation\Applications\Grants === false) {
            $this->operation🌀Applications🌀Grants = new Hydrator\Operation\Applications\Grants();
        }
        return $this->operation🌀Applications🌀Grants;
    }
    public function getObjectMapperOperation🌀Applications🌀Grants🌀CbGrantIdRcb() : Hydrator\Operation\Applications\Grants\CbGrantIdRcb
    {
        if ($this->operation🌀Applications🌀Grants🌀CbGrantIdRcb instanceof Hydrator\Operation\Applications\Grants\CbGrantIdRcb === false) {
            $this->operation🌀Applications🌀Grants🌀CbGrantIdRcb = new Hydrator\Operation\Applications\Grants\CbGrantIdRcb();
        }
        return $this->operation🌀Applications🌀Grants🌀CbGrantIdRcb;
    }
    public function getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Grant() : Hydrator\Operation\Applications\CbClientIdRcb\Grant
    {
        if ($this->operation🌀Applications🌀CbClientIdRcb🌀Grant instanceof Hydrator\Operation\Applications\CbClientIdRcb\Grant === false) {
            $this->operation🌀Applications🌀CbClientIdRcb🌀Grant = new Hydrator\Operation\Applications\CbClientIdRcb\Grant();
        }
        return $this->operation🌀Applications🌀CbClientIdRcb🌀Grant;
    }
    public function getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token() : Hydrator\Operation\Applications\CbClientIdRcb\Token
    {
        if ($this->operation🌀Applications🌀CbClientIdRcb🌀Token instanceof Hydrator\Operation\Applications\CbClientIdRcb\Token === false) {
            $this->operation🌀Applications🌀CbClientIdRcb🌀Token = new Hydrator\Operation\Applications\CbClientIdRcb\Token();
        }
        return $this->operation🌀Applications🌀CbClientIdRcb🌀Token;
    }
    public function getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token🌀Scoped() : Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped
    {
        if ($this->operation🌀Applications🌀CbClientIdRcb🌀Token🌀Scoped instanceof Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped === false) {
            $this->operation🌀Applications🌀CbClientIdRcb🌀Token🌀Scoped = new Hydrator\Operation\Applications\CbClientIdRcb\Token\Scoped();
        }
        return $this->operation🌀Applications🌀CbClientIdRcb🌀Token🌀Scoped;
    }
    public function getObjectMapperOperation🌀Apps🌀CbAppSlugRcb() : Hydrator\Operation\Apps\CbAppSlugRcb
    {
        if ($this->operation🌀Apps🌀CbAppSlugRcb instanceof Hydrator\Operation\Apps\CbAppSlugRcb === false) {
            $this->operation🌀Apps🌀CbAppSlugRcb = new Hydrator\Operation\Apps\CbAppSlugRcb();
        }
        return $this->operation🌀Apps🌀CbAppSlugRcb;
    }
    public function getObjectMapperOperation🌀Authorizations() : Hydrator\Operation\Authorizations
    {
        if ($this->operation🌀Authorizations instanceof Hydrator\Operation\Authorizations === false) {
            $this->operation🌀Authorizations = new Hydrator\Operation\Authorizations();
        }
        return $this->operation🌀Authorizations;
    }
    public function getObjectMapperOperation🌀Authorizations🌀Clients🌀CbClientIdRcb() : Hydrator\Operation\Authorizations\Clients\CbClientIdRcb
    {
        if ($this->operation🌀Authorizations🌀Clients🌀CbClientIdRcb instanceof Hydrator\Operation\Authorizations\Clients\CbClientIdRcb === false) {
            $this->operation🌀Authorizations🌀Clients🌀CbClientIdRcb = new Hydrator\Operation\Authorizations\Clients\CbClientIdRcb();
        }
        return $this->operation🌀Authorizations🌀Clients🌀CbClientIdRcb;
    }
    public function getObjectMapperOperation🌀Authorizations🌀Clients🌀CbClientIdRcb🌀CbFingerprintRcb() : Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb
    {
        if ($this->operation🌀Authorizations🌀Clients🌀CbClientIdRcb🌀CbFingerprintRcb instanceof Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb === false) {
            $this->operation🌀Authorizations🌀Clients🌀CbClientIdRcb🌀CbFingerprintRcb = new Hydrator\Operation\Authorizations\Clients\CbClientIdRcb\CbFingerprintRcb();
        }
        return $this->operation🌀Authorizations🌀Clients🌀CbClientIdRcb🌀CbFingerprintRcb;
    }
    public function getObjectMapperOperation🌀Authorizations🌀CbAuthorizationIdRcb() : Hydrator\Operation\Authorizations\CbAuthorizationIdRcb
    {
        if ($this->operation🌀Authorizations🌀CbAuthorizationIdRcb instanceof Hydrator\Operation\Authorizations\CbAuthorizationIdRcb === false) {
            $this->operation🌀Authorizations🌀CbAuthorizationIdRcb = new Hydrator\Operation\Authorizations\CbAuthorizationIdRcb();
        }
        return $this->operation🌀Authorizations🌀CbAuthorizationIdRcb;
    }
    public function getObjectMapperOperation🌀CodesOfConduct() : Hydrator\Operation\CodesOfConduct
    {
        if ($this->operation🌀CodesOfConduct instanceof Hydrator\Operation\CodesOfConduct === false) {
            $this->operation🌀CodesOfConduct = new Hydrator\Operation\CodesOfConduct();
        }
        return $this->operation🌀CodesOfConduct;
    }
    public function getObjectMapperOperation🌀CodesOfConduct🌀CbKeyRcb() : Hydrator\Operation\CodesOfConduct\CbKeyRcb
    {
        if ($this->operation🌀CodesOfConduct🌀CbKeyRcb instanceof Hydrator\Operation\CodesOfConduct\CbKeyRcb === false) {
            $this->operation🌀CodesOfConduct🌀CbKeyRcb = new Hydrator\Operation\CodesOfConduct\CbKeyRcb();
        }
        return $this->operation🌀CodesOfConduct🌀CbKeyRcb;
    }
    public function getObjectMapperOperation🌀Emojis() : Hydrator\Operation\Emojis
    {
        if ($this->operation🌀Emojis instanceof Hydrator\Operation\Emojis === false) {
            $this->operation🌀Emojis = new Hydrator\Operation\Emojis();
        }
        return $this->operation🌀Emojis;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Announcement() : Hydrator\Operation\Enterprise\Announcement
    {
        if ($this->operation🌀Enterprise🌀Announcement instanceof Hydrator\Operation\Enterprise\Announcement === false) {
            $this->operation🌀Enterprise🌀Announcement = new Hydrator\Operation\Enterprise\Announcement();
        }
        return $this->operation🌀Enterprise🌀Announcement;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Settings🌀License() : Hydrator\Operation\Enterprise\Settings\License
    {
        if ($this->operation🌀Enterprise🌀Settings🌀License instanceof Hydrator\Operation\Enterprise\Settings\License === false) {
            $this->operation🌀Enterprise🌀Settings🌀License = new Hydrator\Operation\Enterprise\Settings\License();
        }
        return $this->operation🌀Enterprise🌀Settings🌀License;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀All() : Hydrator\Operation\Enterprise\Stats\All
    {
        if ($this->operation🌀Enterprise🌀Stats🌀All instanceof Hydrator\Operation\Enterprise\Stats\All === false) {
            $this->operation🌀Enterprise🌀Stats🌀All = new Hydrator\Operation\Enterprise\Stats\All();
        }
        return $this->operation🌀Enterprise🌀Stats🌀All;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments() : Hydrator\Operation\Enterprise\Stats\Comments
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Comments instanceof Hydrator\Operation\Enterprise\Stats\Comments === false) {
            $this->operation🌀Enterprise🌀Stats🌀Comments = new Hydrator\Operation\Enterprise\Stats\Comments();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Comments;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists() : Hydrator\Operation\Enterprise\Stats\Gists
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Gists instanceof Hydrator\Operation\Enterprise\Stats\Gists === false) {
            $this->operation🌀Enterprise🌀Stats🌀Gists = new Hydrator\Operation\Enterprise\Stats\Gists();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Gists;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks() : Hydrator\Operation\Enterprise\Stats\Hooks
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Hooks instanceof Hydrator\Operation\Enterprise\Stats\Hooks === false) {
            $this->operation🌀Enterprise🌀Stats🌀Hooks = new Hydrator\Operation\Enterprise\Stats\Hooks();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Hooks;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues() : Hydrator\Operation\Enterprise\Stats\Issues
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Issues instanceof Hydrator\Operation\Enterprise\Stats\Issues === false) {
            $this->operation🌀Enterprise🌀Stats🌀Issues = new Hydrator\Operation\Enterprise\Stats\Issues();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Issues;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones() : Hydrator\Operation\Enterprise\Stats\Milestones
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Milestones instanceof Hydrator\Operation\Enterprise\Stats\Milestones === false) {
            $this->operation🌀Enterprise🌀Stats🌀Milestones = new Hydrator\Operation\Enterprise\Stats\Milestones();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Milestones;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs() : Hydrator\Operation\Enterprise\Stats\Orgs
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Orgs instanceof Hydrator\Operation\Enterprise\Stats\Orgs === false) {
            $this->operation🌀Enterprise🌀Stats🌀Orgs = new Hydrator\Operation\Enterprise\Stats\Orgs();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Orgs;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages() : Hydrator\Operation\Enterprise\Stats\Pages
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Pages instanceof Hydrator\Operation\Enterprise\Stats\Pages === false) {
            $this->operation🌀Enterprise🌀Stats🌀Pages = new Hydrator\Operation\Enterprise\Stats\Pages();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Pages;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls() : Hydrator\Operation\Enterprise\Stats\Pulls
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Pulls instanceof Hydrator\Operation\Enterprise\Stats\Pulls === false) {
            $this->operation🌀Enterprise🌀Stats🌀Pulls = new Hydrator\Operation\Enterprise\Stats\Pulls();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Pulls;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos() : Hydrator\Operation\Enterprise\Stats\Repos
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Repos instanceof Hydrator\Operation\Enterprise\Stats\Repos === false) {
            $this->operation🌀Enterprise🌀Stats🌀Repos = new Hydrator\Operation\Enterprise\Stats\Repos();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Repos;
    }
    public function getObjectMapperOperation🌀Enterprise🌀Stats🌀Users() : Hydrator\Operation\Enterprise\Stats\Users
    {
        if ($this->operation🌀Enterprise🌀Stats🌀Users instanceof Hydrator\Operation\Enterprise\Stats\Users === false) {
            $this->operation🌀Enterprise🌀Stats🌀Users = new Hydrator\Operation\Enterprise\Stats\Users();
        }
        return $this->operation🌀Enterprise🌀Stats🌀Users;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀UsagePolicy() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\UsagePolicy
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀UsagePolicy instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\UsagePolicy === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀UsagePolicy = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\UsagePolicy();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀UsagePolicy;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations🌀CbOrgIdRcb() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations\CbOrgIdRcb
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations🌀CbOrgIdRcb instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations\CbOrgIdRcb === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations🌀CbOrgIdRcb = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations\CbOrgIdRcb();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations🌀CbOrgIdRcb;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Workflow
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Workflow === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Workflow();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations🌀CbOrgIdRcb() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations\CbOrgIdRcb
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations🌀CbOrgIdRcb instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations\CbOrgIdRcb === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations🌀CbOrgIdRcb = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Organizations\CbOrgIdRcb();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Organizations🌀CbOrgIdRcb;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeScanning\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity;
    }
    public function getObjectMapperOperation🌀Events() : Hydrator\Operation\Events
    {
        if ($this->operation🌀Events instanceof Hydrator\Operation\Events === false) {
            $this->operation🌀Events = new Hydrator\Operation\Events();
        }
        return $this->operation🌀Events;
    }
    public function getObjectMapperOperation🌀Feeds() : Hydrator\Operation\Feeds
    {
        if ($this->operation🌀Feeds instanceof Hydrator\Operation\Feeds === false) {
            $this->operation🌀Feeds = new Hydrator\Operation\Feeds();
        }
        return $this->operation🌀Feeds;
    }
    public function getObjectMapperOperation🌀Gists() : Hydrator\Operation\Gists
    {
        if ($this->operation🌀Gists instanceof Hydrator\Operation\Gists === false) {
            $this->operation🌀Gists = new Hydrator\Operation\Gists();
        }
        return $this->operation🌀Gists;
    }
    public function getObjectMapperOperation🌀Gists🌀Public_() : Hydrator\Operation\Gists\Public_
    {
        if ($this->operation🌀Gists🌀Public_ instanceof Hydrator\Operation\Gists\Public_ === false) {
            $this->operation🌀Gists🌀Public_ = new Hydrator\Operation\Gists\Public_();
        }
        return $this->operation🌀Gists🌀Public_;
    }
    public function getObjectMapperOperation🌀Gists🌀Starred() : Hydrator\Operation\Gists\Starred
    {
        if ($this->operation🌀Gists🌀Starred instanceof Hydrator\Operation\Gists\Starred === false) {
            $this->operation🌀Gists🌀Starred = new Hydrator\Operation\Gists\Starred();
        }
        return $this->operation🌀Gists🌀Starred;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb() : Hydrator\Operation\Gists\CbGistIdRcb
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb instanceof Hydrator\Operation\Gists\CbGistIdRcb === false) {
            $this->operation🌀Gists🌀CbGistIdRcb = new Hydrator\Operation\Gists\CbGistIdRcb();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments() : Hydrator\Operation\Gists\CbGistIdRcb\Comments
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Comments instanceof Hydrator\Operation\Gists\CbGistIdRcb\Comments === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Comments = new Hydrator\Operation\Gists\CbGistIdRcb\Comments();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments🌀CbCommentIdRcb() : Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Comments🌀CbCommentIdRcb instanceof Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Comments🌀CbCommentIdRcb = new Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Comments🌀CbCommentIdRcb;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits() : Hydrator\Operation\Gists\CbGistIdRcb\Commits
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Commits instanceof Hydrator\Operation\Gists\CbGistIdRcb\Commits === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Commits = new Hydrator\Operation\Gists\CbGistIdRcb\Commits();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Commits;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Forks() : Hydrator\Operation\Gists\CbGistIdRcb\Forks
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Forks instanceof Hydrator\Operation\Gists\CbGistIdRcb\Forks === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Forks = new Hydrator\Operation\Gists\CbGistIdRcb\Forks();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Forks;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star() : Hydrator\Operation\Gists\CbGistIdRcb\Star
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Star instanceof Hydrator\Operation\Gists\CbGistIdRcb\Star === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Star = new Hydrator\Operation\Gists\CbGistIdRcb\Star();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Star;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀CbShaRcb() : Hydrator\Operation\Gists\CbGistIdRcb\CbShaRcb
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀CbShaRcb instanceof Hydrator\Operation\Gists\CbGistIdRcb\CbShaRcb === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀CbShaRcb = new Hydrator\Operation\Gists\CbGistIdRcb\CbShaRcb();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀CbShaRcb;
    }
    public function getObjectMapperOperation🌀Gitignore🌀Templates() : Hydrator\Operation\Gitignore\Templates
    {
        if ($this->operation🌀Gitignore🌀Templates instanceof Hydrator\Operation\Gitignore\Templates === false) {
            $this->operation🌀Gitignore🌀Templates = new Hydrator\Operation\Gitignore\Templates();
        }
        return $this->operation🌀Gitignore🌀Templates;
    }
    public function getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb() : Hydrator\Operation\Gitignore\Templates\CbNameRcb
    {
        if ($this->operation🌀Gitignore🌀Templates🌀CbNameRcb instanceof Hydrator\Operation\Gitignore\Templates\CbNameRcb === false) {
            $this->operation🌀Gitignore🌀Templates🌀CbNameRcb = new Hydrator\Operation\Gitignore\Templates\CbNameRcb();
        }
        return $this->operation🌀Gitignore🌀Templates🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Installation🌀Repositories() : Hydrator\Operation\Installation\Repositories
    {
        if ($this->operation🌀Installation🌀Repositories instanceof Hydrator\Operation\Installation\Repositories === false) {
            $this->operation🌀Installation🌀Repositories = new Hydrator\Operation\Installation\Repositories();
        }
        return $this->operation🌀Installation🌀Repositories;
    }
    public function getObjectMapperOperation🌀Installation🌀Token() : Hydrator\Operation\Installation\Token
    {
        if ($this->operation🌀Installation🌀Token instanceof Hydrator\Operation\Installation\Token === false) {
            $this->operation🌀Installation🌀Token = new Hydrator\Operation\Installation\Token();
        }
        return $this->operation🌀Installation🌀Token;
    }
    public function getObjectMapperOperation🌀Issues() : Hydrator\Operation\Issues
    {
        if ($this->operation🌀Issues instanceof Hydrator\Operation\Issues === false) {
            $this->operation🌀Issues = new Hydrator\Operation\Issues();
        }
        return $this->operation🌀Issues;
    }
    public function getObjectMapperOperation🌀Licenses() : Hydrator\Operation\Licenses
    {
        if ($this->operation🌀Licenses instanceof Hydrator\Operation\Licenses === false) {
            $this->operation🌀Licenses = new Hydrator\Operation\Licenses();
        }
        return $this->operation🌀Licenses;
    }
    public function getObjectMapperOperation🌀Licenses🌀CbLicenseRcb() : Hydrator\Operation\Licenses\CbLicenseRcb
    {
        if ($this->operation🌀Licenses🌀CbLicenseRcb instanceof Hydrator\Operation\Licenses\CbLicenseRcb === false) {
            $this->operation🌀Licenses🌀CbLicenseRcb = new Hydrator\Operation\Licenses\CbLicenseRcb();
        }
        return $this->operation🌀Licenses🌀CbLicenseRcb;
    }
    public function getObjectMapperOperation🌀Markdown() : Hydrator\Operation\Markdown
    {
        if ($this->operation🌀Markdown instanceof Hydrator\Operation\Markdown === false) {
            $this->operation🌀Markdown = new Hydrator\Operation\Markdown();
        }
        return $this->operation🌀Markdown;
    }
    public function getObjectMapperOperation🌀Markdown🌀Raw() : Hydrator\Operation\Markdown\Raw
    {
        if ($this->operation🌀Markdown🌀Raw instanceof Hydrator\Operation\Markdown\Raw === false) {
            $this->operation🌀Markdown🌀Raw = new Hydrator\Operation\Markdown\Raw();
        }
        return $this->operation🌀Markdown🌀Raw;
    }
    public function getObjectMapperOperation🌀Meta() : Hydrator\Operation\Meta
    {
        if ($this->operation🌀Meta instanceof Hydrator\Operation\Meta === false) {
            $this->operation🌀Meta = new Hydrator\Operation\Meta();
        }
        return $this->operation🌀Meta;
    }
    public function getObjectMapperOperation🌀Networks🌀CbOwnerRcb🌀CbRepoRcb🌀Events() : Hydrator\Operation\Networks\CbOwnerRcb\CbRepoRcb\Events
    {
        if ($this->operation🌀Networks🌀CbOwnerRcb🌀CbRepoRcb🌀Events instanceof Hydrator\Operation\Networks\CbOwnerRcb\CbRepoRcb\Events === false) {
            $this->operation🌀Networks🌀CbOwnerRcb🌀CbRepoRcb🌀Events = new Hydrator\Operation\Networks\CbOwnerRcb\CbRepoRcb\Events();
        }
        return $this->operation🌀Networks🌀CbOwnerRcb🌀CbRepoRcb🌀Events;
    }
    public function getObjectMapperOperation🌀Notifications() : Hydrator\Operation\Notifications
    {
        if ($this->operation🌀Notifications instanceof Hydrator\Operation\Notifications === false) {
            $this->operation🌀Notifications = new Hydrator\Operation\Notifications();
        }
        return $this->operation🌀Notifications;
    }
    public function getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb() : Hydrator\Operation\Notifications\Threads\CbThreadIdRcb
    {
        if ($this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb instanceof Hydrator\Operation\Notifications\Threads\CbThreadIdRcb === false) {
            $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb = new Hydrator\Operation\Notifications\Threads\CbThreadIdRcb();
        }
        return $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb;
    }
    public function getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription() : Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription
    {
        if ($this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription instanceof Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription === false) {
            $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = new Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription();
        }
        return $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription;
    }
    public function getObjectMapperOperation🌀Octocat() : Hydrator\Operation\Octocat
    {
        if ($this->operation🌀Octocat instanceof Hydrator\Operation\Octocat === false) {
            $this->operation🌀Octocat = new Hydrator\Operation\Octocat();
        }
        return $this->operation🌀Octocat;
    }
    public function getObjectMapperOperation🌀Organizations() : Hydrator\Operation\Organizations
    {
        if ($this->operation🌀Organizations instanceof Hydrator\Operation\Organizations === false) {
            $this->operation🌀Organizations = new Hydrator\Operation\Organizations();
        }
        return $this->operation🌀Organizations;
    }
    public function getObjectMapperOperation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles() : Hydrator\Operation\Organizations\CbOrganizationIdRcb\CustomRoles
    {
        if ($this->operation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles instanceof Hydrator\Operation\Organizations\CbOrganizationIdRcb\CustomRoles === false) {
            $this->operation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles = new Hydrator\Operation\Organizations\CbOrganizationIdRcb\CustomRoles();
        }
        return $this->operation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb() : Hydrator\Operation\Orgs\CbOrgRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb = new Hydrator\Operation\Orgs\CbOrgRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories🌀CbRepositoryIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories\CbRepositoryIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories🌀CbRepositoryIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories\CbRepositoryIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories🌀CbRepositoryIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories\CbRepositoryIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories🌀CbRepositoryIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories🌀CbRepositoryIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories\CbRepositoryIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories🌀CbRepositoryIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories\CbRepositoryIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories🌀CbRepositoryIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories\CbRepositoryIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories🌀CbRepositoryIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RemoveToken() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RemoveToken instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RemoveToken = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RemoveToken();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RemoveToken;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀AuditLog() : Hydrator\Operation\Orgs\CbOrgRcb\AuditLog
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀AuditLog instanceof Hydrator\Operation\Orgs\CbOrgRcb\AuditLog === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀AuditLog = new Hydrator\Operation\Orgs\CbOrgRcb\AuditLog();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀AuditLog;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts() : Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts instanceof Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = new Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets() : Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets instanceof Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets = new Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey() : Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey instanceof Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey = new Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Events() : Hydrator\Operation\Orgs\CbOrgRcb\Events
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Events instanceof Hydrator\Operation\Orgs\CbOrgRcb\Events === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Events = new Hydrator\Operation\Orgs\CbOrgRcb\Events();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Events;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups() : Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀ExternalGroups instanceof Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀ExternalGroups = new Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀ExternalGroups;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Config() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Config
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Config instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Config === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Config = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Config();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Config;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Pings() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Pings
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Pings instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Pings === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Pings = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks\CbHookIdRcb\Pings();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Pings;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installation() : Hydrator\Operation\Orgs\CbOrgRcb\Installation
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Installation instanceof Hydrator\Operation\Orgs\CbOrgRcb\Installation === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Installation = new Hydrator\Operation\Orgs\CbOrgRcb\Installation();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Installation;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations() : Hydrator\Operation\Orgs\CbOrgRcb\Installations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Installations instanceof Hydrator\Operation\Orgs\CbOrgRcb\Installations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Installations = new Hydrator\Operation\Orgs\CbOrgRcb\Installations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Installations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Issues() : Hydrator\Operation\Orgs\CbOrgRcb\Issues
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Issues instanceof Hydrator\Operation\Orgs\CbOrgRcb\Issues === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Issues = new Hydrator\Operation\Orgs\CbOrgRcb\Issues();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Issues;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members() : Hydrator\Operation\Orgs\CbOrgRcb\Members
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Members instanceof Hydrator\Operation\Orgs\CbOrgRcb\Members === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Members = new Hydrator\Operation\Orgs\CbOrgRcb\Members();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Members;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations() : Hydrator\Operation\Orgs\CbOrgRcb\Migrations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations instanceof Hydrator\Operation\Orgs\CbOrgRcb\Migrations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations = new Hydrator\Operation\Orgs\CbOrgRcb\Migrations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive() : Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive instanceof Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive = new Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repos🌀CbRepoNameRcb🌀Lock() : Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repos🌀CbRepoNameRcb🌀Lock instanceof Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repos🌀CbRepoNameRcb🌀Lock = new Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repos🌀CbRepoNameRcb🌀Lock;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators() : Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators instanceof Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators = new Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks() : Hydrator\Operation\Orgs\CbOrgRcb\PreReceiveHooks
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks instanceof Hydrator\Operation\Orgs\CbOrgRcb\PreReceiveHooks === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks = new Hydrator\Operation\Orgs\CbOrgRcb\PreReceiveHooks();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects() : Hydrator\Operation\Orgs\CbOrgRcb\Projects
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Projects instanceof Hydrator\Operation\Orgs\CbOrgRcb\Projects === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Projects = new Hydrator\Operation\Orgs\CbOrgRcb\Projects();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PublicMembers() : Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀PublicMembers instanceof Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀PublicMembers = new Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀PublicMembers;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PublicMembers🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀PublicMembers🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀PublicMembers🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\PublicMembers\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀PublicMembers🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos() : Hydrator\Operation\Orgs\CbOrgRcb\Repos
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Repos instanceof Hydrator\Operation\Orgs\CbOrgRcb\Repos === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Repos = new Hydrator\Operation\Orgs\CbOrgRcb\Repos();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Repos;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecretScanning🌀Alerts() : Hydrator\Operation\Orgs\CbOrgRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Orgs\CbOrgRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀SecretScanning🌀Alerts = new Hydrator\Operation\Orgs\CbOrgRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀SecretScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers() : Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers instanceof Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers = new Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityDashManagers🌀Teams🌀CbTeamSlugRcb() : Hydrator\Operation\Orgs\CbOrgRcb\SecurityDashManagers\Teams\CbTeamSlugRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀SecurityDashManagers🌀Teams🌀CbTeamSlugRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\SecurityDashManagers\Teams\CbTeamSlugRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityDashManagers🌀Teams🌀CbTeamSlugRcb = new Hydrator\Operation\Orgs\CbOrgRcb\SecurityDashManagers\Teams\CbTeamSlugRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityDashManagers🌀Teams🌀CbTeamSlugRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀AdvancedSecurity() : Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\AdvancedSecurity
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀AdvancedSecurity instanceof Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\AdvancedSecurity === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀AdvancedSecurity = new Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\AdvancedSecurity();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀AdvancedSecurity;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams() : Hydrator\Operation\Orgs\CbOrgRcb\Teams
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams = new Hydrator\Operation\Orgs\CbOrgRcb\Teams();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions🌀CbReactionIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions\CbReactionIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions🌀CbReactionIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions\CbReactionIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions🌀CbReactionIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions\CbReactionIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions🌀CbReactionIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions🌀CbReactionIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions\CbReactionIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions🌀CbReactionIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions\CbReactionIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions🌀CbReactionIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Reactions\CbReactionIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions🌀CbReactionIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀ExternalDashGroups() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\ExternalDashGroups
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀ExternalDashGroups instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\ExternalDashGroups === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀ExternalDashGroups = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\ExternalDashGroups();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀ExternalDashGroups;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Members() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Members
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Members instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Members === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Members = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Members();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Members;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects\CbProjectIdRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Teams() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Teams
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Teams instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Teams === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Teams = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Teams();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Teams;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CbSecurityProductRcb🌀CbEnablementRcb() : Hydrator\Operation\Orgs\CbOrgRcb\CbSecurityProductRcb\CbEnablementRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀CbSecurityProductRcb🌀CbEnablementRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\CbSecurityProductRcb\CbEnablementRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀CbSecurityProductRcb🌀CbEnablementRcb = new Hydrator\Operation\Orgs\CbOrgRcb\CbSecurityProductRcb\CbEnablementRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀CbSecurityProductRcb🌀CbEnablementRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb() : Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb instanceof Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb = new Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb();
        }
        return $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves() : Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves instanceof Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves = new Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves();
        }
        return $this->operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb() : Hydrator\Operation\Projects\Columns\CbColumnIdRcb
    {
        if ($this->operation🌀Projects🌀Columns🌀CbColumnIdRcb instanceof Hydrator\Operation\Projects\Columns\CbColumnIdRcb === false) {
            $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb = new Hydrator\Operation\Projects\Columns\CbColumnIdRcb();
        }
        return $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards() : Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards
    {
        if ($this->operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards instanceof Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards === false) {
            $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards = new Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Cards();
        }
        return $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards;
    }
    public function getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves() : Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Moves
    {
        if ($this->operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves instanceof Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Moves === false) {
            $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves = new Hydrator\Operation\Projects\Columns\CbColumnIdRcb\Moves();
        }
        return $this->operation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves;
    }
    public function getObjectMapperOperation🌀Projects🌀CbProjectIdRcb() : Hydrator\Operation\Projects\CbProjectIdRcb
    {
        if ($this->operation🌀Projects🌀CbProjectIdRcb instanceof Hydrator\Operation\Projects\CbProjectIdRcb === false) {
            $this->operation🌀Projects🌀CbProjectIdRcb = new Hydrator\Operation\Projects\CbProjectIdRcb();
        }
        return $this->operation🌀Projects🌀CbProjectIdRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators() : Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators
    {
        if ($this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators instanceof Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators === false) {
            $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators = new Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators();
        }
        return $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators;
    }
    public function getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb() : Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb
    {
        if ($this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb instanceof Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb === false) {
            $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb = new Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb();
        }
        return $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission() : Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission
    {
        if ($this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission instanceof Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission === false) {
            $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = new Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission();
        }
        return $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission;
    }
    public function getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Columns() : Hydrator\Operation\Projects\CbProjectIdRcb\Columns
    {
        if ($this->operation🌀Projects🌀CbProjectIdRcb🌀Columns instanceof Hydrator\Operation\Projects\CbProjectIdRcb\Columns === false) {
            $this->operation🌀Projects🌀CbProjectIdRcb🌀Columns = new Hydrator\Operation\Projects\CbProjectIdRcb\Columns();
        }
        return $this->operation🌀Projects🌀CbProjectIdRcb🌀Columns;
    }
    public function getObjectMapperOperation🌀RateLimit() : Hydrator\Operation\RateLimit
    {
        if ($this->operation🌀RateLimit instanceof Hydrator\Operation\RateLimit === false) {
            $this->operation🌀RateLimit = new Hydrator\Operation\RateLimit();
        }
        return $this->operation🌀RateLimit;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb🌀CbArchiveFormatRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb\CbArchiveFormatRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb🌀CbArchiveFormatRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb\CbArchiveFormatRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb🌀CbArchiveFormatRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb\CbArchiveFormatRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb🌀CbArchiveFormatRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀UsagePolicy() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\UsagePolicy
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀UsagePolicy instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\UsagePolicy === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀UsagePolicy = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\UsagePolicy();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀UsagePolicy;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches🌀CbCacheIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches\CbCacheIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches🌀CbCacheIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches\CbCacheIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches🌀CbCacheIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches\CbCacheIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches🌀CbCacheIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Logs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Logs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Logs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Logs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Logs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Logs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Logs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Rerun() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Rerun
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Rerun instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Rerun === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Rerun = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Rerun();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Rerun;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Workflow() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Workflow
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Workflow instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Workflow === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Workflow = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Workflow();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Workflow;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀Downloads() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\Downloads
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀Downloads instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\Downloads === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀Downloads = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\Downloads();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀Downloads;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RegistrationToken() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RegistrationToken
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RegistrationToken instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RegistrationToken === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RegistrationToken = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RegistrationToken();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RegistrationToken;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RemoveToken() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RemoveToken
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RemoveToken instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RemoveToken === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RemoveToken = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RemoveToken();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RemoveToken;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb\Labels\CbNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Artifacts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Artifacts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Artifacts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Logs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Logs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Logs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Logs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Logs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Logs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Logs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Cancel() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Cancel
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Cancel instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Cancel === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Cancel = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Cancel();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Cancel;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Logs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Logs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Logs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Logs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Logs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Logs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Logs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀RerunDashFailedDashJobs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\RerunDashFailedDashJobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀RerunDashFailedDashJobs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\RerunDashFailedDashJobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀RerunDashFailedDashJobs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\RerunDashFailedDashJobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀RerunDashFailedDashJobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀PublicKey() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀PublicKey instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀PublicKey = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\PublicKey();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Disable() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Disable
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Disable instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Disable === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Disable = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Disable();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Disable;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Dispatches() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Dispatches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Dispatches instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Dispatches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Dispatches = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Dispatches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Dispatches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Enable() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Enable
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Enable instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Enable === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Enable = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Enable();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Enable;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Runs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Runs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Runs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees🌀CbAssigneeRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees\CbAssigneeRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees🌀CbAssigneeRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees\CbAssigneeRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees🌀CbAssigneeRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Assignees\CbAssigneeRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Assignees🌀CbAssigneeRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks🌀CbAutolinkIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks\CbAutolinkIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks🌀CbAutolinkIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks\CbAutolinkIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks🌀CbAutolinkIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks\CbAutolinkIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks🌀CbAutolinkIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredSignatures() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredSignatures
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredSignatures instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredSignatures === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredSignatures = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredSignatures();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredSignatures;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks\Contexts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks\Contexts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks\Contexts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Apps() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Apps
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Apps instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Apps === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Apps = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Apps();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Apps;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Teams() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Teams
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Teams instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Teams === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Teams = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Teams();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Teams;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Users() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Users
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Users instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Users === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Users = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions\Users();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions🌀Users;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Rename() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Rename
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Rename instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Rename === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Rename = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Rename();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Rename;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Rerequest() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Rerequest
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Rerequest instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Rerequest === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Rerequest = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Rerequest();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Rerequest;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀Rerequest() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\Rerequest
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀Rerequest instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\Rerequest === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀Rerequest = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\Rerequest();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀Rerequest;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb\Instances();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckRuns();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀PublicKey() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀PublicKey instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀PublicKey = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\PublicKey();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses🌀CbStatusIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses\CbStatusIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses🌀CbStatusIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses\CbStatusIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses🌀CbStatusIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses\CbStatusIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses🌀CbStatusIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dispatches() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dispatches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dispatches instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dispatches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dispatches = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dispatches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dispatches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies🌀CbBranchPolicyIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies\CbBranchPolicyIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies🌀CbBranchPolicyIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies\CbBranchPolicyIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies🌀CbBranchPolicyIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies\CbBranchPolicyIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies🌀CbBranchPolicyIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Forks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Forks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Forks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Forks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Forks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Forks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Forks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits🌀CbCommitShaRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits\CbCommitShaRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits🌀CbCommitShaRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits\CbCommitShaRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits🌀CbCommitShaRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits\CbCommitShaRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits🌀CbCommitShaRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Ref🌀CbRefRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Ref🌀CbRefRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Ref🌀CbRefRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Ref🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs🌀CbRefRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs🌀CbRefRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs🌀CbRefRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Refs🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags🌀CbTagShaRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags\CbTagShaRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags🌀CbTagShaRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags\CbTagShaRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags🌀CbTagShaRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags\CbTagShaRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags🌀CbTagShaRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees🌀CbTreeShaRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees\CbTreeShaRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees🌀CbTreeShaRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees\CbTreeShaRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees🌀CbTreeShaRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees\CbTreeShaRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees🌀CbTreeShaRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Config() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Config
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Config instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Config === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Config = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Config();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Config;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Deliveries\CbDeliveryIdRcb\Attempts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Pings() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Pings
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Pings instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Pings === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Pings = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Pings();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Pings;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Tests() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Tests
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Tests instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Tests === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Tests = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks\CbHookIdRcb\Tests();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Tests;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Installation() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Installation
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Installation instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Installation === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Installation = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Installation();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Installation;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations🌀CbInvitationIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations\CbInvitationIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations🌀CbInvitationIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations\CbInvitationIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations🌀CbInvitationIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Invitations\CbInvitationIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Invitations🌀CbInvitationIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events🌀CbEventIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events\CbEventIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events🌀CbEventIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events\CbEventIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events🌀CbEventIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events\CbEventIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events🌀CbEventIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees🌀CbAssigneeRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees\CbAssigneeRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees🌀CbAssigneeRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees\CbAssigneeRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees🌀CbAssigneeRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Assignees\CbAssigneeRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Assignees🌀CbAssigneeRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels🌀CbNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels\CbNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels🌀CbNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels\CbNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels🌀CbNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels\CbNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Lock() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Lock
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Lock instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Lock === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Lock = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Lock();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Lock;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions🌀CbReactionIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions\CbReactionIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions🌀CbReactionIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions\CbReactionIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions🌀CbReactionIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Reactions\CbReactionIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Reactions🌀CbReactionIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys🌀CbKeyIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys\CbKeyIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys🌀CbKeyIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys\CbKeyIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys🌀CbKeyIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys\CbKeyIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys🌀CbKeyIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels🌀CbNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels\CbNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels🌀CbNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels\CbNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels🌀CbNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Labels\CbNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Labels🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Lfs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Lfs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Lfs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Merges() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Merges
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Merges instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Merges === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Merges = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Merges();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Merges;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb🌀Labels() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb\Labels
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb🌀Labels instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb\Labels === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb🌀Labels = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones\CbMilestoneNumberRcb\Labels();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones🌀CbMilestoneNumberRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀Latest() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\Latest
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀Latest instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\Latest === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀Latest = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\Latest();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀Latest;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀CbBuildIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\CbBuildIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀CbBuildIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\CbBuildIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀CbBuildIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds\CbBuildIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds🌀CbBuildIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks\CbPreReceiveHookIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreDashReceiveDashHooks🌀CbPreReceiveHookIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Projects() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Projects instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Projects = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Projects();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments\CbCommentIdRcb\Reactions\CbReactionIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments🌀CbCommentIdRcb🌀Reactions🌀CbReactionIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments🌀CbCommentIdRcb🌀Replies() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb\Replies
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments🌀CbCommentIdRcb🌀Replies instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb\Replies === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments🌀CbCommentIdRcb🌀Replies = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Comments\CbCommentIdRcb\Replies();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Comments🌀CbCommentIdRcb🌀Replies;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Commits() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Commits
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Commits instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Commits === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Commits = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Commits();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Commits;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Dismissals() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Dismissals
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Dismissals instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Dismissals === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Dismissals = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Dismissals();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Dismissals;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Events() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Events instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Events = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Events;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\UpdateDashBranch
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\UpdateDashBranch === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\UpdateDashBranch();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme🌀CbDirRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme\CbDirRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme🌀CbDirRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme\CbDirRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme🌀CbDirRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme\CbDirRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme🌀CbDirRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Latest() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Latest
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Latest instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Latest === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Latest = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Latest();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Latest;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Tags🌀CbTagRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags\CbTagRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Tags🌀CbTagRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags\CbTagRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Tags🌀CbTagRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags\CbTagRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Tags🌀CbTagRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Assets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Assets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Assets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Assets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Assets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Assets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Assets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions🌀CbReactionIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions\CbReactionIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions🌀CbReactionIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions\CbReactionIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions🌀CbReactionIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions\CbReactionIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions🌀CbReactionIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Replicas🌀Caches() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Replicas\Caches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Replicas🌀Caches instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Replicas\Caches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Replicas🌀Caches = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Replicas\Caches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Replicas🌀Caches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀PunchCard() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀PunchCard instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀PunchCard = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀PunchCard;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Statuses🌀CbShaRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Statuses\CbShaRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Statuses🌀CbShaRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Statuses\CbShaRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Statuses🌀CbShaRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Statuses\CbShaRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Statuses🌀CbShaRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscribers() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscribers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscribers instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscribers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscribers = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscribers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscribers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection🌀CbTagProtectionIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection\CbTagProtectionIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection🌀CbTagProtectionIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection\CbTagProtectionIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection🌀CbTagProtectionIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection\CbTagProtectionIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection🌀CbTagProtectionIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tarball🌀CbRefRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tarball\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tarball🌀CbRefRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tarball\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tarball🌀CbRefRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tarball\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tarball🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Teams() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Teams
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Teams instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Teams === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Teams = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Teams();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Teams;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Transfer() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Transfer
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Transfer instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Transfer === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Transfer = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Transfer();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Transfer;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Zipball🌀CbRefRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Zipball\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Zipball🌀CbRefRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Zipball\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Zipball🌀CbRefRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Zipball\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Zipball🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbTemplateOwnerRcb🌀CbTemplateRepoRcb🌀Generate() : Hydrator\Operation\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb\Generate
    {
        if ($this->operation🌀Repos🌀CbTemplateOwnerRcb🌀CbTemplateRepoRcb🌀Generate instanceof Hydrator\Operation\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb\Generate === false) {
            $this->operation🌀Repos🌀CbTemplateOwnerRcb🌀CbTemplateRepoRcb🌀Generate = new Hydrator\Operation\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb\Generate();
        }
        return $this->operation🌀Repos🌀CbTemplateOwnerRcb🌀CbTemplateRepoRcb🌀Generate;
    }
    public function getObjectMapperOperation🌀Repositories() : Hydrator\Operation\Repositories
    {
        if ($this->operation🌀Repositories instanceof Hydrator\Operation\Repositories === false) {
            $this->operation🌀Repositories = new Hydrator\Operation\Repositories();
        }
        return $this->operation🌀Repositories;
    }
    public function getObjectMapperOperation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets() : Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets
    {
        if ($this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets instanceof Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets === false) {
            $this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets = new Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets();
        }
        return $this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀PublicDashKey() : Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\PublicDashKey
    {
        if ($this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀PublicDashKey instanceof Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\PublicDashKey === false) {
            $this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀PublicDashKey = new Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\PublicDashKey();
        }
        return $this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀PublicDashKey;
    }
    public function getObjectMapperOperation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repositories🌀CbRepositoryIdRcb🌀Environments🌀CbEnvironmentNameRcb🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Scim🌀V2🌀Groups() : Hydrator\Operation\Scim\V2\Groups
    {
        if ($this->operation🌀Scim🌀V2🌀Groups instanceof Hydrator\Operation\Scim\V2\Groups === false) {
            $this->operation🌀Scim🌀V2🌀Groups = new Hydrator\Operation\Scim\V2\Groups();
        }
        return $this->operation🌀Scim🌀V2🌀Groups;
    }
    public function getObjectMapperOperation🌀Scim🌀V2🌀Groups🌀CbScimGroupIdRcb() : Hydrator\Operation\Scim\V2\Groups\CbScimGroupIdRcb
    {
        if ($this->operation🌀Scim🌀V2🌀Groups🌀CbScimGroupIdRcb instanceof Hydrator\Operation\Scim\V2\Groups\CbScimGroupIdRcb === false) {
            $this->operation🌀Scim🌀V2🌀Groups🌀CbScimGroupIdRcb = new Hydrator\Operation\Scim\V2\Groups\CbScimGroupIdRcb();
        }
        return $this->operation🌀Scim🌀V2🌀Groups🌀CbScimGroupIdRcb;
    }
    public function getObjectMapperOperation🌀Scim🌀V2🌀Users() : Hydrator\Operation\Scim\V2\Users
    {
        if ($this->operation🌀Scim🌀V2🌀Users instanceof Hydrator\Operation\Scim\V2\Users === false) {
            $this->operation🌀Scim🌀V2🌀Users = new Hydrator\Operation\Scim\V2\Users();
        }
        return $this->operation🌀Scim🌀V2🌀Users;
    }
    public function getObjectMapperOperation🌀Scim🌀V2🌀Users🌀CbScimUserIdRcb() : Hydrator\Operation\Scim\V2\Users\CbScimUserIdRcb
    {
        if ($this->operation🌀Scim🌀V2🌀Users🌀CbScimUserIdRcb instanceof Hydrator\Operation\Scim\V2\Users\CbScimUserIdRcb === false) {
            $this->operation🌀Scim🌀V2🌀Users🌀CbScimUserIdRcb = new Hydrator\Operation\Scim\V2\Users\CbScimUserIdRcb();
        }
        return $this->operation🌀Scim🌀V2🌀Users🌀CbScimUserIdRcb;
    }
    public function getObjectMapperOperation🌀Search🌀Code() : Hydrator\Operation\Search\Code
    {
        if ($this->operation🌀Search🌀Code instanceof Hydrator\Operation\Search\Code === false) {
            $this->operation🌀Search🌀Code = new Hydrator\Operation\Search\Code();
        }
        return $this->operation🌀Search🌀Code;
    }
    public function getObjectMapperOperation🌀Search🌀Commits() : Hydrator\Operation\Search\Commits
    {
        if ($this->operation🌀Search🌀Commits instanceof Hydrator\Operation\Search\Commits === false) {
            $this->operation🌀Search🌀Commits = new Hydrator\Operation\Search\Commits();
        }
        return $this->operation🌀Search🌀Commits;
    }
    public function getObjectMapperOperation🌀Search🌀Issues() : Hydrator\Operation\Search\Issues
    {
        if ($this->operation🌀Search🌀Issues instanceof Hydrator\Operation\Search\Issues === false) {
            $this->operation🌀Search🌀Issues = new Hydrator\Operation\Search\Issues();
        }
        return $this->operation🌀Search🌀Issues;
    }
    public function getObjectMapperOperation🌀Search🌀Labels() : Hydrator\Operation\Search\Labels
    {
        if ($this->operation🌀Search🌀Labels instanceof Hydrator\Operation\Search\Labels === false) {
            $this->operation🌀Search🌀Labels = new Hydrator\Operation\Search\Labels();
        }
        return $this->operation🌀Search🌀Labels;
    }
    public function getObjectMapperOperation🌀Search🌀Repositories() : Hydrator\Operation\Search\Repositories
    {
        if ($this->operation🌀Search🌀Repositories instanceof Hydrator\Operation\Search\Repositories === false) {
            $this->operation🌀Search🌀Repositories = new Hydrator\Operation\Search\Repositories();
        }
        return $this->operation🌀Search🌀Repositories;
    }
    public function getObjectMapperOperation🌀Search🌀Topics() : Hydrator\Operation\Search\Topics
    {
        if ($this->operation🌀Search🌀Topics instanceof Hydrator\Operation\Search\Topics === false) {
            $this->operation🌀Search🌀Topics = new Hydrator\Operation\Search\Topics();
        }
        return $this->operation🌀Search🌀Topics;
    }
    public function getObjectMapperOperation🌀Search🌀Users() : Hydrator\Operation\Search\Users
    {
        if ($this->operation🌀Search🌀Users instanceof Hydrator\Operation\Search\Users === false) {
            $this->operation🌀Search🌀Users = new Hydrator\Operation\Search\Users();
        }
        return $this->operation🌀Search🌀Users;
    }
    public function getObjectMapperOperation🌀Setup🌀Api🌀Configcheck() : Hydrator\Operation\Setup\Api\Configcheck
    {
        if ($this->operation🌀Setup🌀Api🌀Configcheck instanceof Hydrator\Operation\Setup\Api\Configcheck === false) {
            $this->operation🌀Setup🌀Api🌀Configcheck = new Hydrator\Operation\Setup\Api\Configcheck();
        }
        return $this->operation🌀Setup🌀Api🌀Configcheck;
    }
    public function getObjectMapperOperation🌀Setup🌀Api🌀Configure() : Hydrator\Operation\Setup\Api\Configure
    {
        if ($this->operation🌀Setup🌀Api🌀Configure instanceof Hydrator\Operation\Setup\Api\Configure === false) {
            $this->operation🌀Setup🌀Api🌀Configure = new Hydrator\Operation\Setup\Api\Configure();
        }
        return $this->operation🌀Setup🌀Api🌀Configure;
    }
    public function getObjectMapperOperation🌀Setup🌀Api🌀Maintenance() : Hydrator\Operation\Setup\Api\Maintenance
    {
        if ($this->operation🌀Setup🌀Api🌀Maintenance instanceof Hydrator\Operation\Setup\Api\Maintenance === false) {
            $this->operation🌀Setup🌀Api🌀Maintenance = new Hydrator\Operation\Setup\Api\Maintenance();
        }
        return $this->operation🌀Setup🌀Api🌀Maintenance;
    }
    public function getObjectMapperOperation🌀Setup🌀Api🌀Settings() : Hydrator\Operation\Setup\Api\Settings
    {
        if ($this->operation🌀Setup🌀Api🌀Settings instanceof Hydrator\Operation\Setup\Api\Settings === false) {
            $this->operation🌀Setup🌀Api🌀Settings = new Hydrator\Operation\Setup\Api\Settings();
        }
        return $this->operation🌀Setup🌀Api🌀Settings;
    }
    public function getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys() : Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys
    {
        if ($this->operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys instanceof Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys === false) {
            $this->operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys = new Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys();
        }
        return $this->operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys;
    }
    public function getObjectMapperOperation🌀Setup🌀Api🌀Start() : Hydrator\Operation\Setup\Api\Start
    {
        if ($this->operation🌀Setup🌀Api🌀Start instanceof Hydrator\Operation\Setup\Api\Start === false) {
            $this->operation🌀Setup🌀Api🌀Start = new Hydrator\Operation\Setup\Api\Start();
        }
        return $this->operation🌀Setup🌀Api🌀Start;
    }
    public function getObjectMapperOperation🌀Setup🌀Api🌀Upgrade() : Hydrator\Operation\Setup\Api\Upgrade
    {
        if ($this->operation🌀Setup🌀Api🌀Upgrade instanceof Hydrator\Operation\Setup\Api\Upgrade === false) {
            $this->operation🌀Setup🌀Api🌀Upgrade = new Hydrator\Operation\Setup\Api\Upgrade();
        }
        return $this->operation🌀Setup🌀Api🌀Upgrade;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb() : Hydrator\Operation\Teams\CbTeamIdRcb
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb instanceof Hydrator\Operation\Teams\CbTeamIdRcb === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb = new Hydrator\Operation\Teams\CbTeamIdRcb();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions() : Hydrator\Operation\Teams\CbTeamIdRcb\Discussions
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Discussions === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions = new Hydrator\Operation\Teams\CbTeamIdRcb\Discussions();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb() : Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb = new Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments() : Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = new Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb() : Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb = new Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions() : Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = new Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions() : Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Reactions
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Reactions === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions = new Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Reactions();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Reactions;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Members() : Hydrator\Operation\Teams\CbTeamIdRcb\Members
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Members instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Members === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Members = new Hydrator\Operation\Teams\CbTeamIdRcb\Members();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Members;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Members🌀CbUsernameRcb() : Hydrator\Operation\Teams\CbTeamIdRcb\Members\CbUsernameRcb
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Members🌀CbUsernameRcb instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Members\CbUsernameRcb === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Members🌀CbUsernameRcb = new Hydrator\Operation\Teams\CbTeamIdRcb\Members\CbUsernameRcb();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Members🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Memberships🌀CbUsernameRcb() : Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Memberships🌀CbUsernameRcb instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Memberships🌀CbUsernameRcb = new Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Memberships🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects() : Hydrator\Operation\Teams\CbTeamIdRcb\Projects
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Projects instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Projects === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Projects = new Hydrator\Operation\Teams\CbTeamIdRcb\Projects();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb() : Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb = new Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Repos() : Hydrator\Operation\Teams\CbTeamIdRcb\Repos
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Repos instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Repos === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Repos = new Hydrator\Operation\Teams\CbTeamIdRcb\Repos();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Repos;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb() : Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = new Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb;
    }
    public function getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Teams() : Hydrator\Operation\Teams\CbTeamIdRcb\Teams
    {
        if ($this->operation🌀Teams🌀CbTeamIdRcb🌀Teams instanceof Hydrator\Operation\Teams\CbTeamIdRcb\Teams === false) {
            $this->operation🌀Teams🌀CbTeamIdRcb🌀Teams = new Hydrator\Operation\Teams\CbTeamIdRcb\Teams();
        }
        return $this->operation🌀Teams🌀CbTeamIdRcb🌀Teams;
    }
    public function getObjectMapperOperation🌀User() : Hydrator\Operation\User
    {
        if ($this->operation🌀User instanceof Hydrator\Operation\User === false) {
            $this->operation🌀User = new Hydrator\Operation\User();
        }
        return $this->operation🌀User;
    }
    public function getObjectMapperOperation🌀User🌀Emails() : Hydrator\Operation\User\Emails
    {
        if ($this->operation🌀User🌀Emails instanceof Hydrator\Operation\User\Emails === false) {
            $this->operation🌀User🌀Emails = new Hydrator\Operation\User\Emails();
        }
        return $this->operation🌀User🌀Emails;
    }
    public function getObjectMapperOperation🌀User🌀Followers() : Hydrator\Operation\User\Followers
    {
        if ($this->operation🌀User🌀Followers instanceof Hydrator\Operation\User\Followers === false) {
            $this->operation🌀User🌀Followers = new Hydrator\Operation\User\Followers();
        }
        return $this->operation🌀User🌀Followers;
    }
    public function getObjectMapperOperation🌀User🌀Following() : Hydrator\Operation\User\Following
    {
        if ($this->operation🌀User🌀Following instanceof Hydrator\Operation\User\Following === false) {
            $this->operation🌀User🌀Following = new Hydrator\Operation\User\Following();
        }
        return $this->operation🌀User🌀Following;
    }
    public function getObjectMapperOperation🌀User🌀Following🌀CbUsernameRcb() : Hydrator\Operation\User\Following\CbUsernameRcb
    {
        if ($this->operation🌀User🌀Following🌀CbUsernameRcb instanceof Hydrator\Operation\User\Following\CbUsernameRcb === false) {
            $this->operation🌀User🌀Following🌀CbUsernameRcb = new Hydrator\Operation\User\Following\CbUsernameRcb();
        }
        return $this->operation🌀User🌀Following🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀User🌀GpgKeys() : Hydrator\Operation\User\GpgKeys
    {
        if ($this->operation🌀User🌀GpgKeys instanceof Hydrator\Operation\User\GpgKeys === false) {
            $this->operation🌀User🌀GpgKeys = new Hydrator\Operation\User\GpgKeys();
        }
        return $this->operation🌀User🌀GpgKeys;
    }
    public function getObjectMapperOperation🌀User🌀GpgKeys🌀CbGpgKeyIdRcb() : Hydrator\Operation\User\GpgKeys\CbGpgKeyIdRcb
    {
        if ($this->operation🌀User🌀GpgKeys🌀CbGpgKeyIdRcb instanceof Hydrator\Operation\User\GpgKeys\CbGpgKeyIdRcb === false) {
            $this->operation🌀User🌀GpgKeys🌀CbGpgKeyIdRcb = new Hydrator\Operation\User\GpgKeys\CbGpgKeyIdRcb();
        }
        return $this->operation🌀User🌀GpgKeys🌀CbGpgKeyIdRcb;
    }
    public function getObjectMapperOperation🌀User🌀Installations() : Hydrator\Operation\User\Installations
    {
        if ($this->operation🌀User🌀Installations instanceof Hydrator\Operation\User\Installations === false) {
            $this->operation🌀User🌀Installations = new Hydrator\Operation\User\Installations();
        }
        return $this->operation🌀User🌀Installations;
    }
    public function getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories() : Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories
    {
        if ($this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories instanceof Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories === false) {
            $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = new Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories();
        }
        return $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories🌀CbRepositoryIdRcb() : Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb
    {
        if ($this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories🌀CbRepositoryIdRcb instanceof Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb === false) {
            $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories🌀CbRepositoryIdRcb = new Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories\CbRepositoryIdRcb();
        }
        return $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories🌀CbRepositoryIdRcb;
    }
    public function getObjectMapperOperation🌀User🌀Issues() : Hydrator\Operation\User\Issues
    {
        if ($this->operation🌀User🌀Issues instanceof Hydrator\Operation\User\Issues === false) {
            $this->operation🌀User🌀Issues = new Hydrator\Operation\User\Issues();
        }
        return $this->operation🌀User🌀Issues;
    }
    public function getObjectMapperOperation🌀User🌀Keys() : Hydrator\Operation\User\Keys
    {
        if ($this->operation🌀User🌀Keys instanceof Hydrator\Operation\User\Keys === false) {
            $this->operation🌀User🌀Keys = new Hydrator\Operation\User\Keys();
        }
        return $this->operation🌀User🌀Keys;
    }
    public function getObjectMapperOperation🌀User🌀Keys🌀CbKeyIdRcb() : Hydrator\Operation\User\Keys\CbKeyIdRcb
    {
        if ($this->operation🌀User🌀Keys🌀CbKeyIdRcb instanceof Hydrator\Operation\User\Keys\CbKeyIdRcb === false) {
            $this->operation🌀User🌀Keys🌀CbKeyIdRcb = new Hydrator\Operation\User\Keys\CbKeyIdRcb();
        }
        return $this->operation🌀User🌀Keys🌀CbKeyIdRcb;
    }
    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs() : Hydrator\Operation\User\Memberships\Orgs
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs instanceof Hydrator\Operation\User\Memberships\Orgs === false) {
            $this->operation🌀User🌀Memberships🌀Orgs = new Hydrator\Operation\User\Memberships\Orgs();
        }
        return $this->operation🌀User🌀Memberships🌀Orgs;
    }
    public function getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀CbOrgRcb() : Hydrator\Operation\User\Memberships\Orgs\CbOrgRcb
    {
        if ($this->operation🌀User🌀Memberships🌀Orgs🌀CbOrgRcb instanceof Hydrator\Operation\User\Memberships\Orgs\CbOrgRcb === false) {
            $this->operation🌀User🌀Memberships🌀Orgs🌀CbOrgRcb = new Hydrator\Operation\User\Memberships\Orgs\CbOrgRcb();
        }
        return $this->operation🌀User🌀Memberships🌀Orgs🌀CbOrgRcb;
    }
    public function getObjectMapperOperation🌀User🌀Migrations() : Hydrator\Operation\User\Migrations
    {
        if ($this->operation🌀User🌀Migrations instanceof Hydrator\Operation\User\Migrations === false) {
            $this->operation🌀User🌀Migrations = new Hydrator\Operation\User\Migrations();
        }
        return $this->operation🌀User🌀Migrations;
    }
    public function getObjectMapperOperation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Archive() : Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive
    {
        if ($this->operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Archive instanceof Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive === false) {
            $this->operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Archive = new Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive();
        }
        return $this->operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Archive;
    }
    public function getObjectMapperOperation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Repositories() : Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repositories
    {
        if ($this->operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Repositories instanceof Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repositories === false) {
            $this->operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Repositories = new Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repositories();
        }
        return $this->operation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀User🌀Orgs() : Hydrator\Operation\User\Orgs
    {
        if ($this->operation🌀User🌀Orgs instanceof Hydrator\Operation\User\Orgs === false) {
            $this->operation🌀User🌀Orgs = new Hydrator\Operation\User\Orgs();
        }
        return $this->operation🌀User🌀Orgs;
    }
    public function getObjectMapperOperation🌀User🌀Projects() : Hydrator\Operation\User\Projects
    {
        if ($this->operation🌀User🌀Projects instanceof Hydrator\Operation\User\Projects === false) {
            $this->operation🌀User🌀Projects = new Hydrator\Operation\User\Projects();
        }
        return $this->operation🌀User🌀Projects;
    }
    public function getObjectMapperOperation🌀User🌀PublicEmails() : Hydrator\Operation\User\PublicEmails
    {
        if ($this->operation🌀User🌀PublicEmails instanceof Hydrator\Operation\User\PublicEmails === false) {
            $this->operation🌀User🌀PublicEmails = new Hydrator\Operation\User\PublicEmails();
        }
        return $this->operation🌀User🌀PublicEmails;
    }
    public function getObjectMapperOperation🌀User🌀Repos() : Hydrator\Operation\User\Repos
    {
        if ($this->operation🌀User🌀Repos instanceof Hydrator\Operation\User\Repos === false) {
            $this->operation🌀User🌀Repos = new Hydrator\Operation\User\Repos();
        }
        return $this->operation🌀User🌀Repos;
    }
    public function getObjectMapperOperation🌀User🌀RepositoryInvitations() : Hydrator\Operation\User\RepositoryInvitations
    {
        if ($this->operation🌀User🌀RepositoryInvitations instanceof Hydrator\Operation\User\RepositoryInvitations === false) {
            $this->operation🌀User🌀RepositoryInvitations = new Hydrator\Operation\User\RepositoryInvitations();
        }
        return $this->operation🌀User🌀RepositoryInvitations;
    }
    public function getObjectMapperOperation🌀User🌀RepositoryInvitations🌀CbInvitationIdRcb() : Hydrator\Operation\User\RepositoryInvitations\CbInvitationIdRcb
    {
        if ($this->operation🌀User🌀RepositoryInvitations🌀CbInvitationIdRcb instanceof Hydrator\Operation\User\RepositoryInvitations\CbInvitationIdRcb === false) {
            $this->operation🌀User🌀RepositoryInvitations🌀CbInvitationIdRcb = new Hydrator\Operation\User\RepositoryInvitations\CbInvitationIdRcb();
        }
        return $this->operation🌀User🌀RepositoryInvitations🌀CbInvitationIdRcb;
    }
    public function getObjectMapperOperation🌀User🌀SshSigningKeys() : Hydrator\Operation\User\SshSigningKeys
    {
        if ($this->operation🌀User🌀SshSigningKeys instanceof Hydrator\Operation\User\SshSigningKeys === false) {
            $this->operation🌀User🌀SshSigningKeys = new Hydrator\Operation\User\SshSigningKeys();
        }
        return $this->operation🌀User🌀SshSigningKeys;
    }
    public function getObjectMapperOperation🌀User🌀SshSigningKeys🌀CbSshSigningKeyIdRcb() : Hydrator\Operation\User\SshSigningKeys\CbSshSigningKeyIdRcb
    {
        if ($this->operation🌀User🌀SshSigningKeys🌀CbSshSigningKeyIdRcb instanceof Hydrator\Operation\User\SshSigningKeys\CbSshSigningKeyIdRcb === false) {
            $this->operation🌀User🌀SshSigningKeys🌀CbSshSigningKeyIdRcb = new Hydrator\Operation\User\SshSigningKeys\CbSshSigningKeyIdRcb();
        }
        return $this->operation🌀User🌀SshSigningKeys🌀CbSshSigningKeyIdRcb;
    }
    public function getObjectMapperOperation🌀User🌀Starred() : Hydrator\Operation\User\Starred
    {
        if ($this->operation🌀User🌀Starred instanceof Hydrator\Operation\User\Starred === false) {
            $this->operation🌀User🌀Starred = new Hydrator\Operation\User\Starred();
        }
        return $this->operation🌀User🌀Starred;
    }
    public function getObjectMapperOperation🌀User🌀Starred🌀CbOwnerRcb🌀CbRepoRcb() : Hydrator\Operation\User\Starred\CbOwnerRcb\CbRepoRcb
    {
        if ($this->operation🌀User🌀Starred🌀CbOwnerRcb🌀CbRepoRcb instanceof Hydrator\Operation\User\Starred\CbOwnerRcb\CbRepoRcb === false) {
            $this->operation🌀User🌀Starred🌀CbOwnerRcb🌀CbRepoRcb = new Hydrator\Operation\User\Starred\CbOwnerRcb\CbRepoRcb();
        }
        return $this->operation🌀User🌀Starred🌀CbOwnerRcb🌀CbRepoRcb;
    }
    public function getObjectMapperOperation🌀User🌀Subscriptions() : Hydrator\Operation\User\Subscriptions
    {
        if ($this->operation🌀User🌀Subscriptions instanceof Hydrator\Operation\User\Subscriptions === false) {
            $this->operation🌀User🌀Subscriptions = new Hydrator\Operation\User\Subscriptions();
        }
        return $this->operation🌀User🌀Subscriptions;
    }
    public function getObjectMapperOperation🌀User🌀Teams() : Hydrator\Operation\User\Teams
    {
        if ($this->operation🌀User🌀Teams instanceof Hydrator\Operation\User\Teams === false) {
            $this->operation🌀User🌀Teams = new Hydrator\Operation\User\Teams();
        }
        return $this->operation🌀User🌀Teams;
    }
    public function getObjectMapperOperation🌀Users() : Hydrator\Operation\Users
    {
        if ($this->operation🌀Users instanceof Hydrator\Operation\Users === false) {
            $this->operation🌀Users = new Hydrator\Operation\Users();
        }
        return $this->operation🌀Users;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb() : Hydrator\Operation\Users\CbUsernameRcb
    {
        if ($this->operation🌀Users🌀CbUsernameRcb instanceof Hydrator\Operation\Users\CbUsernameRcb === false) {
            $this->operation🌀Users🌀CbUsernameRcb = new Hydrator\Operation\Users\CbUsernameRcb();
        }
        return $this->operation🌀Users🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Events() : Hydrator\Operation\Users\CbUsernameRcb\Events
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Events instanceof Hydrator\Operation\Users\CbUsernameRcb\Events === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Events = new Hydrator\Operation\Users\CbUsernameRcb\Events();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Events;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Events🌀Orgs🌀CbOrgRcb() : Hydrator\Operation\Users\CbUsernameRcb\Events\Orgs\CbOrgRcb
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Events🌀Orgs🌀CbOrgRcb instanceof Hydrator\Operation\Users\CbUsernameRcb\Events\Orgs\CbOrgRcb === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Events🌀Orgs🌀CbOrgRcb = new Hydrator\Operation\Users\CbUsernameRcb\Events\Orgs\CbOrgRcb();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Events🌀Orgs🌀CbOrgRcb;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Events🌀Public_() : Hydrator\Operation\Users\CbUsernameRcb\Events\Public_
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Events🌀Public_ instanceof Hydrator\Operation\Users\CbUsernameRcb\Events\Public_ === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Events🌀Public_ = new Hydrator\Operation\Users\CbUsernameRcb\Events\Public_();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Events🌀Public_;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Followers() : Hydrator\Operation\Users\CbUsernameRcb\Followers
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Followers instanceof Hydrator\Operation\Users\CbUsernameRcb\Followers === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Followers = new Hydrator\Operation\Users\CbUsernameRcb\Followers();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Followers;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Following() : Hydrator\Operation\Users\CbUsernameRcb\Following
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Following instanceof Hydrator\Operation\Users\CbUsernameRcb\Following === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Following = new Hydrator\Operation\Users\CbUsernameRcb\Following();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Following;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Following🌀CbTargetUserRcb() : Hydrator\Operation\Users\CbUsernameRcb\Following\CbTargetUserRcb
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Following🌀CbTargetUserRcb instanceof Hydrator\Operation\Users\CbUsernameRcb\Following\CbTargetUserRcb === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Following🌀CbTargetUserRcb = new Hydrator\Operation\Users\CbUsernameRcb\Following\CbTargetUserRcb();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Following🌀CbTargetUserRcb;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Gists() : Hydrator\Operation\Users\CbUsernameRcb\Gists
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Gists instanceof Hydrator\Operation\Users\CbUsernameRcb\Gists === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Gists = new Hydrator\Operation\Users\CbUsernameRcb\Gists();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Gists;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀GpgKeys() : Hydrator\Operation\Users\CbUsernameRcb\GpgKeys
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀GpgKeys instanceof Hydrator\Operation\Users\CbUsernameRcb\GpgKeys === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀GpgKeys = new Hydrator\Operation\Users\CbUsernameRcb\GpgKeys();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀GpgKeys;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard() : Hydrator\Operation\Users\CbUsernameRcb\Hovercard
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Hovercard instanceof Hydrator\Operation\Users\CbUsernameRcb\Hovercard === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Hovercard = new Hydrator\Operation\Users\CbUsernameRcb\Hovercard();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Hovercard;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Installation() : Hydrator\Operation\Users\CbUsernameRcb\Installation
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Installation instanceof Hydrator\Operation\Users\CbUsernameRcb\Installation === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Installation = new Hydrator\Operation\Users\CbUsernameRcb\Installation();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Installation;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys() : Hydrator\Operation\Users\CbUsernameRcb\Keys
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Keys instanceof Hydrator\Operation\Users\CbUsernameRcb\Keys === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Keys = new Hydrator\Operation\Users\CbUsernameRcb\Keys();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Keys;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Orgs() : Hydrator\Operation\Users\CbUsernameRcb\Orgs
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Orgs instanceof Hydrator\Operation\Users\CbUsernameRcb\Orgs === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Orgs = new Hydrator\Operation\Users\CbUsernameRcb\Orgs();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Orgs;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Projects() : Hydrator\Operation\Users\CbUsernameRcb\Projects
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Projects instanceof Hydrator\Operation\Users\CbUsernameRcb\Projects === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Projects = new Hydrator\Operation\Users\CbUsernameRcb\Projects();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀ReceivedEvents() : Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents instanceof Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents = new Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀ReceivedEvents🌀Public_() : Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents\Public_
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents🌀Public_ instanceof Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents\Public_ === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents🌀Public_ = new Hydrator\Operation\Users\CbUsernameRcb\ReceivedEvents\Public_();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀ReceivedEvents🌀Public_;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Repos() : Hydrator\Operation\Users\CbUsernameRcb\Repos
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Repos instanceof Hydrator\Operation\Users\CbUsernameRcb\Repos === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Repos = new Hydrator\Operation\Users\CbUsernameRcb\Repos();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Repos;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀SiteAdmin() : Hydrator\Operation\Users\CbUsernameRcb\SiteAdmin
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀SiteAdmin instanceof Hydrator\Operation\Users\CbUsernameRcb\SiteAdmin === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀SiteAdmin = new Hydrator\Operation\Users\CbUsernameRcb\SiteAdmin();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀SiteAdmin;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀SshSigningKeys() : Hydrator\Operation\Users\CbUsernameRcb\SshSigningKeys
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀SshSigningKeys instanceof Hydrator\Operation\Users\CbUsernameRcb\SshSigningKeys === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀SshSigningKeys = new Hydrator\Operation\Users\CbUsernameRcb\SshSigningKeys();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀SshSigningKeys;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred() : Hydrator\Operation\Users\CbUsernameRcb\Starred
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Starred instanceof Hydrator\Operation\Users\CbUsernameRcb\Starred === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Starred = new Hydrator\Operation\Users\CbUsernameRcb\Starred();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Starred;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Subscriptions() : Hydrator\Operation\Users\CbUsernameRcb\Subscriptions
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Subscriptions instanceof Hydrator\Operation\Users\CbUsernameRcb\Subscriptions === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Subscriptions = new Hydrator\Operation\Users\CbUsernameRcb\Subscriptions();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Subscriptions;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Suspended() : Hydrator\Operation\Users\CbUsernameRcb\Suspended
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Suspended instanceof Hydrator\Operation\Users\CbUsernameRcb\Suspended === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Suspended = new Hydrator\Operation\Users\CbUsernameRcb\Suspended();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Suspended;
    }
    public function getObjectMapperOperation🌀Zen() : Hydrator\Operation\Zen
    {
        if ($this->operation🌀Zen instanceof Hydrator\Operation\Zen === false) {
            $this->operation🌀Zen = new Hydrator\Operation\Zen();
        }
        return $this->operation🌀Zen;
    }
    public function getObjectMapperWebHook🪝BranchProtectionRule() : Hydrator\WebHook\BranchProtectionRule
    {
        if ($this->webHook🪝BranchProtectionRule instanceof Hydrator\WebHook\BranchProtectionRule === false) {
            $this->webHook🪝BranchProtectionRule = new Hydrator\WebHook\BranchProtectionRule();
        }
        return $this->webHook🪝BranchProtectionRule;
    }
    public function getObjectMapperWebHook🪝CacheSync() : Hydrator\WebHook\CacheSync
    {
        if ($this->webHook🪝CacheSync instanceof Hydrator\WebHook\CacheSync === false) {
            $this->webHook🪝CacheSync = new Hydrator\WebHook\CacheSync();
        }
        return $this->webHook🪝CacheSync;
    }
    public function getObjectMapperWebHook🪝CheckRun() : Hydrator\WebHook\CheckRun
    {
        if ($this->webHook🪝CheckRun instanceof Hydrator\WebHook\CheckRun === false) {
            $this->webHook🪝CheckRun = new Hydrator\WebHook\CheckRun();
        }
        return $this->webHook🪝CheckRun;
    }
    public function getObjectMapperWebHook🪝CheckSuite() : Hydrator\WebHook\CheckSuite
    {
        if ($this->webHook🪝CheckSuite instanceof Hydrator\WebHook\CheckSuite === false) {
            $this->webHook🪝CheckSuite = new Hydrator\WebHook\CheckSuite();
        }
        return $this->webHook🪝CheckSuite;
    }
    public function getObjectMapperWebHook🪝CodeScanningAlert() : Hydrator\WebHook\CodeScanningAlert
    {
        if ($this->webHook🪝CodeScanningAlert instanceof Hydrator\WebHook\CodeScanningAlert === false) {
            $this->webHook🪝CodeScanningAlert = new Hydrator\WebHook\CodeScanningAlert();
        }
        return $this->webHook🪝CodeScanningAlert;
    }
    public function getObjectMapperWebHook🪝CommitComment() : Hydrator\WebHook\CommitComment
    {
        if ($this->webHook🪝CommitComment instanceof Hydrator\WebHook\CommitComment === false) {
            $this->webHook🪝CommitComment = new Hydrator\WebHook\CommitComment();
        }
        return $this->webHook🪝CommitComment;
    }
    public function getObjectMapperWebHook🪝Create() : Hydrator\WebHook\Create
    {
        if ($this->webHook🪝Create instanceof Hydrator\WebHook\Create === false) {
            $this->webHook🪝Create = new Hydrator\WebHook\Create();
        }
        return $this->webHook🪝Create;
    }
    public function getObjectMapperWebHook🪝Delete() : Hydrator\WebHook\Delete
    {
        if ($this->webHook🪝Delete instanceof Hydrator\WebHook\Delete === false) {
            $this->webHook🪝Delete = new Hydrator\WebHook\Delete();
        }
        return $this->webHook🪝Delete;
    }
    public function getObjectMapperWebHook🪝DependabotAlert() : Hydrator\WebHook\DependabotAlert
    {
        if ($this->webHook🪝DependabotAlert instanceof Hydrator\WebHook\DependabotAlert === false) {
            $this->webHook🪝DependabotAlert = new Hydrator\WebHook\DependabotAlert();
        }
        return $this->webHook🪝DependabotAlert;
    }
    public function getObjectMapperWebHook🪝DeployKey() : Hydrator\WebHook\DeployKey
    {
        if ($this->webHook🪝DeployKey instanceof Hydrator\WebHook\DeployKey === false) {
            $this->webHook🪝DeployKey = new Hydrator\WebHook\DeployKey();
        }
        return $this->webHook🪝DeployKey;
    }
    public function getObjectMapperWebHook🪝Deployment() : Hydrator\WebHook\Deployment
    {
        if ($this->webHook🪝Deployment instanceof Hydrator\WebHook\Deployment === false) {
            $this->webHook🪝Deployment = new Hydrator\WebHook\Deployment();
        }
        return $this->webHook🪝Deployment;
    }
    public function getObjectMapperWebHook🪝DeploymentStatus() : Hydrator\WebHook\DeploymentStatus
    {
        if ($this->webHook🪝DeploymentStatus instanceof Hydrator\WebHook\DeploymentStatus === false) {
            $this->webHook🪝DeploymentStatus = new Hydrator\WebHook\DeploymentStatus();
        }
        return $this->webHook🪝DeploymentStatus;
    }
    public function getObjectMapperWebHook🪝Discussion() : Hydrator\WebHook\Discussion
    {
        if ($this->webHook🪝Discussion instanceof Hydrator\WebHook\Discussion === false) {
            $this->webHook🪝Discussion = new Hydrator\WebHook\Discussion();
        }
        return $this->webHook🪝Discussion;
    }
    public function getObjectMapperWebHook🪝DiscussionComment() : Hydrator\WebHook\DiscussionComment
    {
        if ($this->webHook🪝DiscussionComment instanceof Hydrator\WebHook\DiscussionComment === false) {
            $this->webHook🪝DiscussionComment = new Hydrator\WebHook\DiscussionComment();
        }
        return $this->webHook🪝DiscussionComment;
    }
    public function getObjectMapperWebHook🪝Enterprise() : Hydrator\WebHook\Enterprise
    {
        if ($this->webHook🪝Enterprise instanceof Hydrator\WebHook\Enterprise === false) {
            $this->webHook🪝Enterprise = new Hydrator\WebHook\Enterprise();
        }
        return $this->webHook🪝Enterprise;
    }
    public function getObjectMapperWebHook🪝Fork() : Hydrator\WebHook\Fork
    {
        if ($this->webHook🪝Fork instanceof Hydrator\WebHook\Fork === false) {
            $this->webHook🪝Fork = new Hydrator\WebHook\Fork();
        }
        return $this->webHook🪝Fork;
    }
    public function getObjectMapperWebHook🪝GithubAppAuthorization() : Hydrator\WebHook\GithubAppAuthorization
    {
        if ($this->webHook🪝GithubAppAuthorization instanceof Hydrator\WebHook\GithubAppAuthorization === false) {
            $this->webHook🪝GithubAppAuthorization = new Hydrator\WebHook\GithubAppAuthorization();
        }
        return $this->webHook🪝GithubAppAuthorization;
    }
    public function getObjectMapperWebHook🪝Gollum() : Hydrator\WebHook\Gollum
    {
        if ($this->webHook🪝Gollum instanceof Hydrator\WebHook\Gollum === false) {
            $this->webHook🪝Gollum = new Hydrator\WebHook\Gollum();
        }
        return $this->webHook🪝Gollum;
    }
    public function getObjectMapperWebHook🪝Installation() : Hydrator\WebHook\Installation
    {
        if ($this->webHook🪝Installation instanceof Hydrator\WebHook\Installation === false) {
            $this->webHook🪝Installation = new Hydrator\WebHook\Installation();
        }
        return $this->webHook🪝Installation;
    }
    public function getObjectMapperWebHook🪝InstallationRepositories() : Hydrator\WebHook\InstallationRepositories
    {
        if ($this->webHook🪝InstallationRepositories instanceof Hydrator\WebHook\InstallationRepositories === false) {
            $this->webHook🪝InstallationRepositories = new Hydrator\WebHook\InstallationRepositories();
        }
        return $this->webHook🪝InstallationRepositories;
    }
    public function getObjectMapperWebHook🪝InstallationTarget() : Hydrator\WebHook\InstallationTarget
    {
        if ($this->webHook🪝InstallationTarget instanceof Hydrator\WebHook\InstallationTarget === false) {
            $this->webHook🪝InstallationTarget = new Hydrator\WebHook\InstallationTarget();
        }
        return $this->webHook🪝InstallationTarget;
    }
    public function getObjectMapperWebHook🪝IssueComment() : Hydrator\WebHook\IssueComment
    {
        if ($this->webHook🪝IssueComment instanceof Hydrator\WebHook\IssueComment === false) {
            $this->webHook🪝IssueComment = new Hydrator\WebHook\IssueComment();
        }
        return $this->webHook🪝IssueComment;
    }
    public function getObjectMapperWebHook🪝Issues() : Hydrator\WebHook\Issues
    {
        if ($this->webHook🪝Issues instanceof Hydrator\WebHook\Issues === false) {
            $this->webHook🪝Issues = new Hydrator\WebHook\Issues();
        }
        return $this->webHook🪝Issues;
    }
    public function getObjectMapperWebHook🪝Label() : Hydrator\WebHook\Label
    {
        if ($this->webHook🪝Label instanceof Hydrator\WebHook\Label === false) {
            $this->webHook🪝Label = new Hydrator\WebHook\Label();
        }
        return $this->webHook🪝Label;
    }
    public function getObjectMapperWebHook🪝Member() : Hydrator\WebHook\Member
    {
        if ($this->webHook🪝Member instanceof Hydrator\WebHook\Member === false) {
            $this->webHook🪝Member = new Hydrator\WebHook\Member();
        }
        return $this->webHook🪝Member;
    }
    public function getObjectMapperWebHook🪝Membership() : Hydrator\WebHook\Membership
    {
        if ($this->webHook🪝Membership instanceof Hydrator\WebHook\Membership === false) {
            $this->webHook🪝Membership = new Hydrator\WebHook\Membership();
        }
        return $this->webHook🪝Membership;
    }
    public function getObjectMapperWebHook🪝Meta() : Hydrator\WebHook\Meta
    {
        if ($this->webHook🪝Meta instanceof Hydrator\WebHook\Meta === false) {
            $this->webHook🪝Meta = new Hydrator\WebHook\Meta();
        }
        return $this->webHook🪝Meta;
    }
    public function getObjectMapperWebHook🪝Milestone() : Hydrator\WebHook\Milestone
    {
        if ($this->webHook🪝Milestone instanceof Hydrator\WebHook\Milestone === false) {
            $this->webHook🪝Milestone = new Hydrator\WebHook\Milestone();
        }
        return $this->webHook🪝Milestone;
    }
    public function getObjectMapperWebHook🪝Organization() : Hydrator\WebHook\Organization
    {
        if ($this->webHook🪝Organization instanceof Hydrator\WebHook\Organization === false) {
            $this->webHook🪝Organization = new Hydrator\WebHook\Organization();
        }
        return $this->webHook🪝Organization;
    }
    public function getObjectMapperWebHook🪝Package() : Hydrator\WebHook\Package
    {
        if ($this->webHook🪝Package instanceof Hydrator\WebHook\Package === false) {
            $this->webHook🪝Package = new Hydrator\WebHook\Package();
        }
        return $this->webHook🪝Package;
    }
    public function getObjectMapperWebHook🪝PageBuild() : Hydrator\WebHook\PageBuild
    {
        if ($this->webHook🪝PageBuild instanceof Hydrator\WebHook\PageBuild === false) {
            $this->webHook🪝PageBuild = new Hydrator\WebHook\PageBuild();
        }
        return $this->webHook🪝PageBuild;
    }
    public function getObjectMapperWebHook🪝Ping() : Hydrator\WebHook\Ping
    {
        if ($this->webHook🪝Ping instanceof Hydrator\WebHook\Ping === false) {
            $this->webHook🪝Ping = new Hydrator\WebHook\Ping();
        }
        return $this->webHook🪝Ping;
    }
    public function getObjectMapperWebHook🪝ProjectCard() : Hydrator\WebHook\ProjectCard
    {
        if ($this->webHook🪝ProjectCard instanceof Hydrator\WebHook\ProjectCard === false) {
            $this->webHook🪝ProjectCard = new Hydrator\WebHook\ProjectCard();
        }
        return $this->webHook🪝ProjectCard;
    }
    public function getObjectMapperWebHook🪝Project() : Hydrator\WebHook\Project
    {
        if ($this->webHook🪝Project instanceof Hydrator\WebHook\Project === false) {
            $this->webHook🪝Project = new Hydrator\WebHook\Project();
        }
        return $this->webHook🪝Project;
    }
    public function getObjectMapperWebHook🪝ProjectColumn() : Hydrator\WebHook\ProjectColumn
    {
        if ($this->webHook🪝ProjectColumn instanceof Hydrator\WebHook\ProjectColumn === false) {
            $this->webHook🪝ProjectColumn = new Hydrator\WebHook\ProjectColumn();
        }
        return $this->webHook🪝ProjectColumn;
    }
    public function getObjectMapperWebHook🪝ProjectsV2Item() : Hydrator\WebHook\ProjectsV2Item
    {
        if ($this->webHook🪝ProjectsV2Item instanceof Hydrator\WebHook\ProjectsV2Item === false) {
            $this->webHook🪝ProjectsV2Item = new Hydrator\WebHook\ProjectsV2Item();
        }
        return $this->webHook🪝ProjectsV2Item;
    }
    public function getObjectMapperWebHook🪝Public_() : Hydrator\WebHook\Public_
    {
        if ($this->webHook🪝Public_ instanceof Hydrator\WebHook\Public_ === false) {
            $this->webHook🪝Public_ = new Hydrator\WebHook\Public_();
        }
        return $this->webHook🪝Public_;
    }
    public function getObjectMapperWebHook🪝PullRequest() : Hydrator\WebHook\PullRequest
    {
        if ($this->webHook🪝PullRequest instanceof Hydrator\WebHook\PullRequest === false) {
            $this->webHook🪝PullRequest = new Hydrator\WebHook\PullRequest();
        }
        return $this->webHook🪝PullRequest;
    }
    public function getObjectMapperWebHook🪝PullRequestReviewComment() : Hydrator\WebHook\PullRequestReviewComment
    {
        if ($this->webHook🪝PullRequestReviewComment instanceof Hydrator\WebHook\PullRequestReviewComment === false) {
            $this->webHook🪝PullRequestReviewComment = new Hydrator\WebHook\PullRequestReviewComment();
        }
        return $this->webHook🪝PullRequestReviewComment;
    }
    public function getObjectMapperWebHook🪝PullRequestReview() : Hydrator\WebHook\PullRequestReview
    {
        if ($this->webHook🪝PullRequestReview instanceof Hydrator\WebHook\PullRequestReview === false) {
            $this->webHook🪝PullRequestReview = new Hydrator\WebHook\PullRequestReview();
        }
        return $this->webHook🪝PullRequestReview;
    }
    public function getObjectMapperWebHook🪝PullRequestReviewThread() : Hydrator\WebHook\PullRequestReviewThread
    {
        if ($this->webHook🪝PullRequestReviewThread instanceof Hydrator\WebHook\PullRequestReviewThread === false) {
            $this->webHook🪝PullRequestReviewThread = new Hydrator\WebHook\PullRequestReviewThread();
        }
        return $this->webHook🪝PullRequestReviewThread;
    }
    public function getObjectMapperWebHook🪝Push() : Hydrator\WebHook\Push
    {
        if ($this->webHook🪝Push instanceof Hydrator\WebHook\Push === false) {
            $this->webHook🪝Push = new Hydrator\WebHook\Push();
        }
        return $this->webHook🪝Push;
    }
    public function getObjectMapperWebHook🪝RegistryPackage() : Hydrator\WebHook\RegistryPackage
    {
        if ($this->webHook🪝RegistryPackage instanceof Hydrator\WebHook\RegistryPackage === false) {
            $this->webHook🪝RegistryPackage = new Hydrator\WebHook\RegistryPackage();
        }
        return $this->webHook🪝RegistryPackage;
    }
    public function getObjectMapperWebHook🪝Release() : Hydrator\WebHook\Release
    {
        if ($this->webHook🪝Release instanceof Hydrator\WebHook\Release === false) {
            $this->webHook🪝Release = new Hydrator\WebHook\Release();
        }
        return $this->webHook🪝Release;
    }
    public function getObjectMapperWebHook🪝Repository() : Hydrator\WebHook\Repository
    {
        if ($this->webHook🪝Repository instanceof Hydrator\WebHook\Repository === false) {
            $this->webHook🪝Repository = new Hydrator\WebHook\Repository();
        }
        return $this->webHook🪝Repository;
    }
    public function getObjectMapperWebHook🪝RepositoryDispatch() : Hydrator\WebHook\RepositoryDispatch
    {
        if ($this->webHook🪝RepositoryDispatch instanceof Hydrator\WebHook\RepositoryDispatch === false) {
            $this->webHook🪝RepositoryDispatch = new Hydrator\WebHook\RepositoryDispatch();
        }
        return $this->webHook🪝RepositoryDispatch;
    }
    public function getObjectMapperWebHook🪝RepositoryVulnerabilityAlert() : Hydrator\WebHook\RepositoryVulnerabilityAlert
    {
        if ($this->webHook🪝RepositoryVulnerabilityAlert instanceof Hydrator\WebHook\RepositoryVulnerabilityAlert === false) {
            $this->webHook🪝RepositoryVulnerabilityAlert = new Hydrator\WebHook\RepositoryVulnerabilityAlert();
        }
        return $this->webHook🪝RepositoryVulnerabilityAlert;
    }
    public function getObjectMapperWebHook🪝SecretScanningAlert() : Hydrator\WebHook\SecretScanningAlert
    {
        if ($this->webHook🪝SecretScanningAlert instanceof Hydrator\WebHook\SecretScanningAlert === false) {
            $this->webHook🪝SecretScanningAlert = new Hydrator\WebHook\SecretScanningAlert();
        }
        return $this->webHook🪝SecretScanningAlert;
    }
    public function getObjectMapperWebHook🪝SecretScanningAlertLocation() : Hydrator\WebHook\SecretScanningAlertLocation
    {
        if ($this->webHook🪝SecretScanningAlertLocation instanceof Hydrator\WebHook\SecretScanningAlertLocation === false) {
            $this->webHook🪝SecretScanningAlertLocation = new Hydrator\WebHook\SecretScanningAlertLocation();
        }
        return $this->webHook🪝SecretScanningAlertLocation;
    }
    public function getObjectMapperWebHook🪝SecurityAdvisory() : Hydrator\WebHook\SecurityAdvisory
    {
        if ($this->webHook🪝SecurityAdvisory instanceof Hydrator\WebHook\SecurityAdvisory === false) {
            $this->webHook🪝SecurityAdvisory = new Hydrator\WebHook\SecurityAdvisory();
        }
        return $this->webHook🪝SecurityAdvisory;
    }
    public function getObjectMapperWebHook🪝SecurityAndAnalysis() : Hydrator\WebHook\SecurityAndAnalysis
    {
        if ($this->webHook🪝SecurityAndAnalysis instanceof Hydrator\WebHook\SecurityAndAnalysis === false) {
            $this->webHook🪝SecurityAndAnalysis = new Hydrator\WebHook\SecurityAndAnalysis();
        }
        return $this->webHook🪝SecurityAndAnalysis;
    }
    public function getObjectMapperWebHook🪝Sponsorship() : Hydrator\WebHook\Sponsorship
    {
        if ($this->webHook🪝Sponsorship instanceof Hydrator\WebHook\Sponsorship === false) {
            $this->webHook🪝Sponsorship = new Hydrator\WebHook\Sponsorship();
        }
        return $this->webHook🪝Sponsorship;
    }
    public function getObjectMapperWebHook🪝Star() : Hydrator\WebHook\Star
    {
        if ($this->webHook🪝Star instanceof Hydrator\WebHook\Star === false) {
            $this->webHook🪝Star = new Hydrator\WebHook\Star();
        }
        return $this->webHook🪝Star;
    }
    public function getObjectMapperWebHook🪝Status() : Hydrator\WebHook\Status
    {
        if ($this->webHook🪝Status instanceof Hydrator\WebHook\Status === false) {
            $this->webHook🪝Status = new Hydrator\WebHook\Status();
        }
        return $this->webHook🪝Status;
    }
    public function getObjectMapperWebHook🪝TeamAdd() : Hydrator\WebHook\TeamAdd
    {
        if ($this->webHook🪝TeamAdd instanceof Hydrator\WebHook\TeamAdd === false) {
            $this->webHook🪝TeamAdd = new Hydrator\WebHook\TeamAdd();
        }
        return $this->webHook🪝TeamAdd;
    }
    public function getObjectMapperWebHook🪝Team() : Hydrator\WebHook\Team
    {
        if ($this->webHook🪝Team instanceof Hydrator\WebHook\Team === false) {
            $this->webHook🪝Team = new Hydrator\WebHook\Team();
        }
        return $this->webHook🪝Team;
    }
    public function getObjectMapperWebHook🪝User() : Hydrator\WebHook\User
    {
        if ($this->webHook🪝User instanceof Hydrator\WebHook\User === false) {
            $this->webHook🪝User = new Hydrator\WebHook\User();
        }
        return $this->webHook🪝User;
    }
    public function getObjectMapperWebHook🪝Watch() : Hydrator\WebHook\Watch
    {
        if ($this->webHook🪝Watch instanceof Hydrator\WebHook\Watch === false) {
            $this->webHook🪝Watch = new Hydrator\WebHook\Watch();
        }
        return $this->webHook🪝Watch;
    }
    public function getObjectMapperWebHook🪝WorkflowDispatch() : Hydrator\WebHook\WorkflowDispatch
    {
        if ($this->webHook🪝WorkflowDispatch instanceof Hydrator\WebHook\WorkflowDispatch === false) {
            $this->webHook🪝WorkflowDispatch = new Hydrator\WebHook\WorkflowDispatch();
        }
        return $this->webHook🪝WorkflowDispatch;
    }
    public function getObjectMapperWebHook🪝WorkflowJob() : Hydrator\WebHook\WorkflowJob
    {
        if ($this->webHook🪝WorkflowJob instanceof Hydrator\WebHook\WorkflowJob === false) {
            $this->webHook🪝WorkflowJob = new Hydrator\WebHook\WorkflowJob();
        }
        return $this->webHook🪝WorkflowJob;
    }
    public function getObjectMapperWebHook🪝WorkflowRun() : Hydrator\WebHook\WorkflowRun
    {
        if ($this->webHook🪝WorkflowRun instanceof Hydrator\WebHook\WorkflowRun === false) {
            $this->webHook🪝WorkflowRun = new Hydrator\WebHook\WorkflowRun();
        }
        return $this->webHook🪝WorkflowRun;
    }
}
