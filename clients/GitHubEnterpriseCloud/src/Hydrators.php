<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterpriseCloud;

use ApiClients\Client\GitHubEnterpriseCloud\Hydrator;
use ApiClients\Client\GitHubEnterpriseCloud\Operation;
use ApiClients\Client\GitHubEnterpriseCloud\Schema;
use ApiClients\Client\GitHubEnterpriseCloud\WebHook;
final class Hydrators implements \EventSauce\ObjectHydrator\ObjectMapper
{
    private ?Hydrator\Operation\Root $operation🌀Root = null;
    private ?Hydrator\Operation\App $operation🌀App = null;
    private ?Hydrator\Operation\AppManifests\CbCodeRcb\Conversions $operation🌀AppManifests🌀CbCodeRcb🌀Conversions = null;
    private ?Hydrator\Operation\App\Hook\Config $operation🌀App🌀Hook🌀Config = null;
    private ?Hydrator\Operation\App\Hook\Deliveries $operation🌀App🌀Hook🌀Deliveries = null;
    private ?Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb = null;
    private ?Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = null;
    private ?Hydrator\Operation\App\InstallationRequests $operation🌀App🌀InstallationRequests = null;
    private ?Hydrator\Operation\App\Installations $operation🌀App🌀Installations = null;
    private ?Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens $operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = null;
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Token $operation🌀Applications🌀CbClientIdRcb🌀Token = null;
    private ?Hydrator\Operation\CodesOfConduct $operation🌀CodesOfConduct = null;
    private ?Hydrator\Operation\Emojis $operation🌀Emojis = null;
    private ?Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics $operation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Workflow $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Announcement $operation🌀Enterprises🌀CbEnterpriseRcb🌀Announcement = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog $operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeSecurityAndAnalysis $operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeSecurityAndAnalysis = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\ConsumedLicenses $operation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\LicenseSyncStatus $operation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Actions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity $operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Packages $operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\SharedStorage $operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage = null;
    private ?Hydrator\Operation\Events $operation🌀Events = null;
    private ?Hydrator\Operation\Feeds $operation🌀Feeds = null;
    private ?Hydrator\Operation\Gists $operation🌀Gists = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb $operation🌀Gists🌀CbGistIdRcb = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Comments $operation🌀Gists🌀CbGistIdRcb🌀Comments = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Commits $operation🌀Gists🌀CbGistIdRcb🌀Commits = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Star $operation🌀Gists🌀CbGistIdRcb🌀Star = null;
    private ?Hydrator\Operation\Gitignore\Templates $operation🌀Gitignore🌀Templates = null;
    private ?Hydrator\Operation\Gitignore\Templates\CbNameRcb $operation🌀Gitignore🌀Templates🌀CbNameRcb = null;
    private ?Hydrator\Operation\Installation\Repositories $operation🌀Installation🌀Repositories = null;
    private ?Hydrator\Operation\Licenses\CbLicenseRcb $operation🌀Licenses🌀CbLicenseRcb = null;
    private ?Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb $operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb = null;
    private ?Hydrator\Operation\Meta $operation🌀Meta = null;
    private ?Hydrator\Operation\Notifications $operation🌀Notifications = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription $operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = null;
    private ?Hydrator\Operation\Organizations\CbOrganizationIdRcb\CustomRoles $operation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb $operation🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Codespaces $operation🌀Orgs🌀CbOrgRcb🌀Codespaces = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations $operation🌀Orgs🌀CbOrgRcb🌀CredentialAuthorizations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb $operation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups $operation🌀Orgs🌀CbOrgRcb🌀ExternalGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations $operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\FineGrainedPermissions $operation🌀Orgs🌀CbOrgRcb🌀FineGrainedPermissions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks $operation🌀Orgs🌀CbOrgRcb🌀Hooks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Installations $operation🌀Orgs🌀CbOrgRcb🌀Installations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits $operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams $operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations $operation🌀Orgs🌀CbOrgRcb🌀Migrations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Packages $operation🌀Orgs🌀CbOrgRcb🌀Packages = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions $operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Projects = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\TeamSync\Groups $operation🌀Orgs🌀CbOrgRcb🌀TeamSync🌀Groups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams $operation🌀Orgs🌀CbOrgRcb🌀Teams = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb $operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb = null;
    private ?Hydrator\Operation\Projects\Columns\Cards\CbCardIdRcb\Moves $operation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves = null;
    private ?Hydrator\Operation\Projects\Columns\CbColumnIdRcb $operation🌀Projects🌀Columns🌀CbColumnIdRcb = null;
    private ?Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission $operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = null;
    private ?Hydrator\Operation\RateLimit $operation🌀RateLimit = null;
    private ?Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows $operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows = null;
    private ?Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing $operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Analyses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Analyses\CbAnalysisIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_ $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_ = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags\Protection $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views = null;
    private ?Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb\Users $operation🌀Scim🌀V2🌀Organizations🌀CbOrgRcb🌀Users = null;
    private ?Hydrator\Operation\Search\Code $operation🌀Search🌀Code = null;
    private ?Hydrator\Operation\Search\Commits $operation🌀Search🌀Commits = null;
    private ?Hydrator\Operation\Search\Issues $operation🌀Search🌀Issues = null;
    private ?Hydrator\Operation\Search\Labels $operation🌀Search🌀Labels = null;
    private ?Hydrator\Operation\Search\Repositories $operation🌀Search🌀Repositories = null;
    private ?Hydrator\Operation\Search\Topics $operation🌀Search🌀Topics = null;
    private ?Hydrator\Operation\Search\Users $operation🌀Search🌀Users = null;
    private ?Hydrator\Operation\User $operation🌀User = null;
    private ?Hydrator\Operation\User\Codespaces\Secrets $operation🌀User🌀Codespaces🌀Secrets = null;
    private ?Hydrator\Operation\User\Codespaces\Secrets\PublicKey $operation🌀User🌀Codespaces🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports $operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports = null;
    private ?Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish $operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish = null;
    private ?Hydrator\Operation\User\Email\Visibility $operation🌀User🌀Email🌀Visibility = null;
    private ?Hydrator\Operation\User\GpgKeys $operation🌀User🌀GpgKeys = null;
    private ?Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories $operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\User\Keys $operation🌀User🌀Keys = null;
    private ?Hydrator\Operation\User\MarketplacePurchases $operation🌀User🌀MarketplacePurchases = null;
    private ?Hydrator\Operation\User\SocialAccounts $operation🌀User🌀SocialAccounts = null;
    private ?Hydrator\Operation\User\SshSigningKeys $operation🌀User🌀SshSigningKeys = null;
    private ?Hydrator\Operation\User\Starred $operation🌀User🌀Starred = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Hovercard $operation🌀Users🌀CbUsernameRcb🌀Hovercard = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Keys $operation🌀Users🌀CbUsernameRcb🌀Keys = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Starred $operation🌀Users🌀CbUsernameRcb🌀Starred = null;
    private ?Hydrator\Operation\Versions $operation🌀Versions = null;
    private ?Hydrator\WebHook\BranchProtectionRule $webHook🪝BranchProtectionRule = null;
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
    private ?Hydrator\WebHook\Fork $webHook🪝Fork = null;
    private ?Hydrator\WebHook\GithubAppAuthorization $webHook🪝GithubAppAuthorization = null;
    private ?Hydrator\WebHook\Gollum $webHook🪝Gollum = null;
    private ?Hydrator\WebHook\Installation $webHook🪝Installation = null;
    private ?Hydrator\WebHook\InstallationRepositories $webHook🪝InstallationRepositories = null;
    private ?Hydrator\WebHook\InstallationTarget $webHook🪝InstallationTarget = null;
    private ?Hydrator\WebHook\IssueComment $webHook🪝IssueComment = null;
    private ?Hydrator\WebHook\Issues $webHook🪝Issues = null;
    private ?Hydrator\WebHook\Label $webHook🪝Label = null;
    private ?Hydrator\WebHook\MarketplacePurchase $webHook🪝MarketplacePurchase = null;
    private ?Hydrator\WebHook\Member $webHook🪝Member = null;
    private ?Hydrator\WebHook\Membership $webHook🪝Membership = null;
    private ?Hydrator\WebHook\MergeGroup $webHook🪝MergeGroup = null;
    private ?Hydrator\WebHook\Meta $webHook🪝Meta = null;
    private ?Hydrator\WebHook\Milestone $webHook🪝Milestone = null;
    private ?Hydrator\WebHook\OrgBlock $webHook🪝OrgBlock = null;
    private ?Hydrator\WebHook\Organization $webHook🪝Organization = null;
    private ?Hydrator\WebHook\Package $webHook🪝Package = null;
    private ?Hydrator\WebHook\PageBuild $webHook🪝PageBuild = null;
    private ?Hydrator\WebHook\Ping $webHook🪝Ping = null;
    private ?Hydrator\WebHook\ProjectCard $webHook🪝ProjectCard = null;
    private ?Hydrator\WebHook\Project $webHook🪝Project = null;
    private ?Hydrator\WebHook\ProjectColumn $webHook🪝ProjectColumn = null;
    private ?Hydrator\WebHook\ProjectsV2 $webHook🪝ProjectsV2 = null;
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
    private ?Hydrator\WebHook\RepositoryImport $webHook🪝RepositoryImport = null;
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
    private ?Hydrator\WebHook\Watch $webHook🪝Watch = null;
    private ?Hydrator\WebHook\WorkflowDispatch $webHook🪝WorkflowDispatch = null;
    private ?Hydrator\WebHook\WorkflowJob $webHook🪝WorkflowJob = null;
    private ?Hydrator\WebHook\WorkflowRun $webHook🪝WorkflowRun = null;
    public function hydrateObject(string $className, array $payload) : object
    {
        return match ($className) {
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Integration', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BasicError', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimError', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDelivery', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDelivery\\Request', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDelivery\\Response' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent\\Config' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IntegrationInstallationRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Enterprise' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Installation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀App🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\TemplateRepository\\Permissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Authorization', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScopedInstallation' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GithubConnect', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Comments', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Gists', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Hooks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Issues', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Milestones', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Orgs', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Pages', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Pulls', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Repos', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Users', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\DormantUsers' => $this->getObjectMapperOperation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Runner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListLabelsForSelfHostedRunnerForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AnnouncementBanner' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Announcement()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent\\ActorLocation' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningOrganizationAlertItems', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertRule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertLocation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\CodeScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EnterpriseSecurityAnalysisSettings' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeSecurityAndAnalysis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetConsumedLicenses', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetConsumedLicenses\\Users' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertWithRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertWithRepository\\Dependency', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\References' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus\\ServerInstances', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus\\ServerInstances\\LastSync' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationSecretScanningAlert' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsBillingUsage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsBillingUsage\\MinutesUsedBreakdown' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AdvancedSecurityActiveCommitters', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AdvancedSecurityActiveCommittersRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AdvancedSecurityActiveCommittersUser' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Actor', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReactionRollup', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event\\Payload\\Pages' => $this->getObjectMapperOperation🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Feed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PublicUser\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplacePurchase\\MarketplacePendingChange', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplaceListingPlan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplacePurchase\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ApiOverview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ApiOverview\\SshKeyFingerprints' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Thread', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\ListCustomRoles\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationCustomRepositoryRole' => $this->getObjectMapperOperation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OidcCustomSub', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRequiredWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RequiredWorkflow' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListOrgVariables\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListInOrganization\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Codespace', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespaceMachine', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Codespace\\GitStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Codespace\\RuntimeConstraints' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CredentialAuthorization' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CredentialAuthorizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Teams', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Members' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroups', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroups\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositoryFineGrainedPermission' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FineGrainedPermissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Interactions\\GetRestrictionsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Team', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion\\Metadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion\\Metadata\\Container', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion\\Metadata\\Docker' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GroupMapping', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GroupMapping\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀TeamSync🌀Groups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamFull', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamOrganization' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoRequiredWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepoRequiredWorkflow' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowUsage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowUsage\\Billable', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowUsage\\Billable\\Ubuntu' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeOfConductSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Artifact', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheList', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheList\\ActionsCaches' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRequiredWorkflowRuns\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReferencedWorkflow', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCommit\\Author' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EnvironmentApprovals', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EnvironmentApprovals\\Environments' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PendingDeployment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PendingDeployment\\Environment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PendingDeployment\\Reviewers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage\\Billable', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoVariables\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\RequiredSignatures', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\LockBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Verification', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\StatusCheckPolicy\\Checks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\LockBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertRuleSummary' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent\\Data', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeownersErrors', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeownersErrors\\Errors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200\\Devcontainers' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200\\Defaults' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Link', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommunityProfile', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommunityProfile\\Files', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommunityHealthFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependencyGraphDiff', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependencyGraphDiff\\Vulnerabilities' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Environment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Environment\\ProtectionRules', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitRef', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTag', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Import', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Import\\ProjectChoices' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PorterLargeFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Page', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHealthCheck', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHealthCheck\\Domain', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHealthCheck\\AltDomain' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Base\\Repo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TimelineReviewedEvent\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TimelineReviewedEvent\\Links\\Html' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecretScanningLocation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecretScanningLocationIssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContributorActivity\\Weeks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CloneTraffic', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Traffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReferrerTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUserList', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Name', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Emails', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Meta', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Operations', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Groups', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Roles' => $this->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀CbOrgRcb🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitSearchResultItem\\Commit\\Author' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueSearchResultItem\\Labels' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepoSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TopicSearchResultItem\\Related\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespaceWithFullRepository' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Email🌀Visibility()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GpgKey\\Subkeys' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\UserMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplaceAccount' => $this->getObjectMapperOperation🌀User🌀MarketplacePurchases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SocialAccount' => $this->getObjectMapperOperation🌀User🌀SocialAccounts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Meta\\GetAllVersions\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Versions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App' => $this->getObjectMapperWebHook🪝CheckSuite()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion\\Reactions' => $this->getObjectMapperWebHook🪝CommitComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🪝DependabotAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🪝DeployKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows' => $this->getObjectMapperWebHook🪝Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun' => $this->getObjectMapperWebHook🪝DeploymentStatus()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentEdited\\Changes' => $this->getObjectMapperWebHook🪝DiscussionComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookFork\\Forkee' => $this->getObjectMapperWebHook🪝Fork()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🪝Gollum()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🪝Installation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🪝InstallationRepositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationTargetRenamed\\Changes' => $this->getObjectMapperWebHook🪝InstallationTarget()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentEdited\\Changes\\Body' => $this->getObjectMapperWebHook🪝IssueComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🪝Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes\\Name' => $this->getObjectMapperWebHook🪝Label()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Account', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Account', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseChanged', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChange', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePurchased' => $this->getObjectMapperWebHook🪝MarketplacePurchase()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🪝Member()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🪝Membership()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMergeGroupChecksRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMergeGroupChecksRequested\\MergeGroup' => $this->getObjectMapperWebHook🪝MergeGroup()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🪝Milestone()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrgBlockBlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrgBlockUnblocked' => $this->getObjectMapperWebHook🪝OrgBlock()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationRenamed\\Changes\\Login' => $this->getObjectMapperWebHook🪝Organization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata\\Value', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release' => $this->getObjectMapperWebHook🪝Package()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPageBuild\\Build' => $this->getObjectMapperWebHook🪝PageBuild()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🪝Project()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🪝ProjectColumn()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🪝ProjectsV2()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemArchived', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemArchived\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectsV2Item', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemConverted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemConverted\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemReordered', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemReordered\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemRestored' => $this->getObjectMapperWebHook🪝ProjectsV2Item()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestClosed\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDequeued', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDequeued\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestOpened\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head' => $this->getObjectMapperWebHook🪝PullRequest()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest' => $this->getObjectMapperWebHook🪝PullRequestReview()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush\\Pusher' => $this->getObjectMapperWebHook🪝Push()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release' => $this->getObjectMapperWebHook🪝RegistryPackage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseUnpublished\\Release' => $this->getObjectMapperWebHook🪝Release()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🪝RepositoryImport()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert' => $this->getObjectMapperWebHook🪝RepositoryVulnerabilityAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryUpdated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryWithdrawn', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory' => $this->getObjectMapperWebHook🪝SecurityAdvisory()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🪝Sponsorship()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🪝Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🪝TeamAdd()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🪝Team()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobWaiting', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🪝WorkflowJob()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests' => $this->getObjectMapperWebHook🪝WorkflowRun()->hydrateObject($className, $payload),
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
        return match ($object::class) {
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Integration', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BasicError', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimError', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDelivery', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDelivery\\Request', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookDelivery\\Response' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent\\Config' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IntegrationInstallationRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Enterprise' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Installation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀App🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Repository\\TemplateRepository\\Permissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Authorization', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScopedInstallation' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GithubConnect', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Comments', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Gists', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Hooks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Issues', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Milestones', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Orgs', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Pages', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Pulls', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Repos', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\GheStats\\Users', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ServerStatistics\\DormantUsers' => $this->getObjectMapperOperation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Workflow()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Runner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\EnterpriseAdmin\\ListLabelsForSelfHostedRunnerForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AnnouncementBanner' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Announcement()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent\\ActorLocation' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningOrganizationAlertItems', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertRule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertLocation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\CodeScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EnterpriseSecurityAnalysisSettings' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeSecurityAndAnalysis()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetConsumedLicenses', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetConsumedLicenses\\Users' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertWithRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertWithRepository\\Dependency', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlertSecurityAdvisory\\References' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus\\ServerInstances', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GetLicenseSyncStatus\\ServerInstances\\LastSync' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationSecretScanningAlert' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsBillingUsage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsBillingUsage\\MinutesUsedBreakdown' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AdvancedSecurityActiveCommitters', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AdvancedSecurityActiveCommittersRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AdvancedSecurityActiveCommittersUser' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Actor', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReactionRollup', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Event\\Payload\\Pages' => $this->getObjectMapperOperation🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Feed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PublicUser\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplacePurchase\\MarketplacePendingChange', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplaceListingPlan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplacePurchase\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ApiOverview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ApiOverview\\SshKeyFingerprints' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Thread', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\ListCustomRoles\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationCustomRepositoryRole' => $this->getObjectMapperOperation🌀Organizations🌀CbOrganizationIdRcb🌀CustomRoles()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OidcCustomSub', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRequiredWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RequiredWorkflow' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListOrgVariables\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListInOrganization\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Codespace', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespaceMachine', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Codespace\\GitStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Codespace\\RuntimeConstraints' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CredentialAuthorization' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CredentialAuthorizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Teams', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroup\\Members' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroups', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ExternalGroups\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositoryFineGrainedPermission' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FineGrainedPermissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Interactions\\GetRestrictionsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Team', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion\\Metadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion\\Metadata\\Container', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PackageVersion\\Metadata\\Docker' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GroupMapping', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GroupMapping\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀TeamSync🌀Groups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamFull', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamOrganization' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoRequiredWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepoRequiredWorkflow' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowUsage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowUsage\\Billable', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowUsage\\Billable\\Ubuntu' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeOfConductSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Artifact', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheList', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsCacheList\\ActionsCaches' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRequiredWorkflowRuns\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReferencedWorkflow', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCommit\\Author' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EnvironmentApprovals', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\EnvironmentApprovals\\Environments' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PendingDeployment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PendingDeployment\\Environment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PendingDeployment\\Reviewers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage\\Billable', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoVariables\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\RequiredSignatures', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\LockBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchProtection\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Verification', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\StatusCheckPolicy\\Checks', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\LockBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProtectedBranch\\AllowForkSyncing' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlertRuleSummary' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AuditLogEvent\\Data', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeownersErrors', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeownersErrors\\Errors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200\\Devcontainers' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200\\Defaults' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Link', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommunityProfile', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommunityProfile\\Files', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommunityHealthFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependencyGraphDiff', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DependencyGraphDiff\\Vulnerabilities' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Environment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Environment\\ProtectionRules', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitRef', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTag', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTree', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Import', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Import\\ProjectChoices' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PorterLargeFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Page', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHealthCheck', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHealthCheck\\Domain', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PagesHealthCheck\\AltDomain' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequest\\Base\\Repo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TimelineReviewedEvent\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TimelineReviewedEvent\\Links\\Html' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecretScanningLocation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SecretScanningLocationIssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContributorActivity\\Weeks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CloneTraffic', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Traffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ContentTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ReferrerTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUserList', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Name', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Emails', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Meta', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Operations', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Groups', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ScimUser\\Roles' => $this->getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀CbOrgRcb🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CommitSearchResultItem\\Commit\\Author' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\IssueSearchResultItem\\Labels' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\RepoSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\TopicSearchResultItem\\Related\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CodespaceWithFullRepository' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Email🌀Visibility()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\GpgKey\\Subkeys' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\UserMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\MarketplaceAccount' => $this->getObjectMapperOperation🌀User🌀MarketplacePurchases()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SocialAccount' => $this->getObjectMapperOperation🌀User🌀SocialAccounts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Operation\\Meta\\GetAllVersions\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Versions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App' => $this->getObjectMapperWebHook🪝CheckSuite()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion\\Reactions' => $this->getObjectMapperWebHook🪝CommitComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🪝DependabotAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🪝DeployKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows' => $this->getObjectMapperWebHook🪝Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun' => $this->getObjectMapperWebHook🪝DeploymentStatus()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookDiscussionCommentEdited\\Changes' => $this->getObjectMapperWebHook🪝DiscussionComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookFork\\Forkee' => $this->getObjectMapperWebHook🪝Fork()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🪝Gollum()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🪝Installation()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🪝InstallationRepositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookInstallationTargetRenamed\\Changes' => $this->getObjectMapperWebHook🪝InstallationTarget()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssueCommentEdited\\Changes\\Body' => $this->getObjectMapperWebHook🪝IssueComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🪝Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookLabelEdited\\Changes\\Name' => $this->getObjectMapperWebHook🪝Label()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Account', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Account', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseChanged', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChange', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMarketplacePurchasePurchased' => $this->getObjectMapperWebHook🪝MarketplacePurchase()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🪝Member()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🪝Membership()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMergeGroupChecksRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMergeGroupChecksRequested\\MergeGroup' => $this->getObjectMapperWebHook🪝MergeGroup()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🪝Milestone()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrgBlockBlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrgBlockUnblocked' => $this->getObjectMapperWebHook🪝OrgBlock()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookOrganizationRenamed\\Changes\\Login' => $this->getObjectMapperWebHook🪝Organization()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata\\Value', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release' => $this->getObjectMapperWebHook🪝Package()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPageBuild\\Build' => $this->getObjectMapperWebHook🪝PageBuild()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🪝Project()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🪝ProjectColumn()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🪝ProjectsV2()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemArchived', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemArchived\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\ProjectsV2Item', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemConverted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemConverted\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemReordered', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemReordered\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookProjectsV2ItemRestored' => $this->getObjectMapperWebHook🪝ProjectsV2Item()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestClosed\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDequeued', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestDequeued\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestOpened\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head' => $this->getObjectMapperWebHook🪝PullRequest()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest' => $this->getObjectMapperWebHook🪝PullRequestReview()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookPush\\Pusher' => $this->getObjectMapperWebHook🪝Push()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release' => $this->getObjectMapperWebHook🪝RegistryPackage()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookReleaseUnpublished\\Release' => $this->getObjectMapperWebHook🪝Release()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🪝RepositoryImport()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert' => $this->getObjectMapperWebHook🪝RepositoryVulnerabilityAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryUpdated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryWithdrawn', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory' => $this->getObjectMapperWebHook🪝SecurityAdvisory()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🪝Sponsorship()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🪝Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🪝TeamAdd()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🪝Team()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobWaiting', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🪝WorkflowJob()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubEnterpriseCloud\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests' => $this->getObjectMapperWebHook🪝WorkflowRun()->serializeObject($object),
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
    public function getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens() : Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens
    {
        if ($this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens instanceof Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens === false) {
            $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = new Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens();
        }
        return $this->operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens;
    }
    public function getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token() : Hydrator\Operation\Applications\CbClientIdRcb\Token
    {
        if ($this->operation🌀Applications🌀CbClientIdRcb🌀Token instanceof Hydrator\Operation\Applications\CbClientIdRcb\Token === false) {
            $this->operation🌀Applications🌀CbClientIdRcb🌀Token = new Hydrator\Operation\Applications\CbClientIdRcb\Token();
        }
        return $this->operation🌀Applications🌀CbClientIdRcb🌀Token;
    }
    public function getObjectMapperOperation🌀CodesOfConduct() : Hydrator\Operation\CodesOfConduct
    {
        if ($this->operation🌀CodesOfConduct instanceof Hydrator\Operation\CodesOfConduct === false) {
            $this->operation🌀CodesOfConduct = new Hydrator\Operation\CodesOfConduct();
        }
        return $this->operation🌀CodesOfConduct;
    }
    public function getObjectMapperOperation🌀Emojis() : Hydrator\Operation\Emojis
    {
        if ($this->operation🌀Emojis instanceof Hydrator\Operation\Emojis === false) {
            $this->operation🌀Emojis = new Hydrator\Operation\Emojis();
        }
        return $this->operation🌀Emojis;
    }
    public function getObjectMapperOperation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics() : Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics
    {
        if ($this->operation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics instanceof Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics === false) {
            $this->operation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics = new Hydrator\Operation\EnterpriseDashInstallation\CbEnterpriseOrOrgRcb\ServerDashStatistics();
        }
        return $this->operation🌀EnterpriseDashInstallation🌀CbEnterpriseOrOrgRcb🌀ServerDashStatistics;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Cache\Usage();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Cache🌀Usage;
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
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners;
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
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb\Labels();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Announcement() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Announcement
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Announcement instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Announcement === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Announcement = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Announcement();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Announcement;
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
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀CodeSecurityAndAnalysis() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeSecurityAndAnalysis
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeSecurityAndAnalysis instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeSecurityAndAnalysis === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeSecurityAndAnalysis = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\CodeSecurityAndAnalysis();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀CodeSecurityAndAnalysis;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\ConsumedLicenses
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\ConsumedLicenses === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\ConsumedLicenses();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀ConsumedLicenses;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\LicenseSyncStatus
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\LicenseSyncStatus === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\LicenseSyncStatus();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀LicenseSyncStatus;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Actions
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Actions === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Actions();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Actions;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\AdvancedSecurity();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀AdvancedSecurity;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Packages
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Packages === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\Packages();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀Packages;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\SharedStorage
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\SharedStorage === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Settings\Billing\SharedStorage();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Settings🌀Billing🌀SharedStorage;
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
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits() : Hydrator\Operation\Gists\CbGistIdRcb\Commits
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Commits instanceof Hydrator\Operation\Gists\CbGistIdRcb\Commits === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Commits = new Hydrator\Operation\Gists\CbGistIdRcb\Commits();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Commits;
    }
    public function getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star() : Hydrator\Operation\Gists\CbGistIdRcb\Star
    {
        if ($this->operation🌀Gists🌀CbGistIdRcb🌀Star instanceof Hydrator\Operation\Gists\CbGistIdRcb\Star === false) {
            $this->operation🌀Gists🌀CbGistIdRcb🌀Star = new Hydrator\Operation\Gists\CbGistIdRcb\Star();
        }
        return $this->operation🌀Gists🌀CbGistIdRcb🌀Star;
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
    public function getObjectMapperOperation🌀Licenses🌀CbLicenseRcb() : Hydrator\Operation\Licenses\CbLicenseRcb
    {
        if ($this->operation🌀Licenses🌀CbLicenseRcb instanceof Hydrator\Operation\Licenses\CbLicenseRcb === false) {
            $this->operation🌀Licenses🌀CbLicenseRcb = new Hydrator\Operation\Licenses\CbLicenseRcb();
        }
        return $this->operation🌀Licenses🌀CbLicenseRcb;
    }
    public function getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb() : Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb
    {
        if ($this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb instanceof Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb === false) {
            $this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb = new Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb();
        }
        return $this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb;
    }
    public function getObjectMapperOperation🌀Meta() : Hydrator\Operation\Meta
    {
        if ($this->operation🌀Meta instanceof Hydrator\Operation\Meta === false) {
            $this->operation🌀Meta = new Hydrator\Operation\Meta();
        }
        return $this->operation🌀Meta;
    }
    public function getObjectMapperOperation🌀Notifications() : Hydrator\Operation\Notifications
    {
        if ($this->operation🌀Notifications instanceof Hydrator\Operation\Notifications === false) {
            $this->operation🌀Notifications = new Hydrator\Operation\Notifications();
        }
        return $this->operation🌀Notifications;
    }
    public function getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription() : Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription
    {
        if ($this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription instanceof Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription === false) {
            $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = new Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription();
        }
        return $this->operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces() : Hydrator\Operation\Orgs\CbOrgRcb\Codespaces
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces instanceof Hydrator\Operation\Orgs\CbOrgRcb\Codespaces === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces = new Hydrator\Operation\Orgs\CbOrgRcb\Codespaces();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets() : Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets instanceof Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets = new Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey() : Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey instanceof Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey = new Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CredentialAuthorizations() : Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀CredentialAuthorizations instanceof Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀CredentialAuthorizations = new Hydrator\Operation\Orgs\CbOrgRcb\CredentialAuthorizations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀CredentialAuthorizations;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations() : Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations instanceof Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations = new Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FineGrainedPermissions() : Hydrator\Operation\Orgs\CbOrgRcb\FineGrainedPermissions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀FineGrainedPermissions instanceof Hydrator\Operation\Orgs\CbOrgRcb\FineGrainedPermissions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀FineGrainedPermissions = new Hydrator\Operation\Orgs\CbOrgRcb\FineGrainedPermissions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀FineGrainedPermissions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks() : Hydrator\Operation\Orgs\CbOrgRcb\Hooks
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Hooks instanceof Hydrator\Operation\Orgs\CbOrgRcb\Hooks === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks = new Hydrator\Operation\Orgs\CbOrgRcb\Hooks();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Hooks;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations() : Hydrator\Operation\Orgs\CbOrgRcb\Installations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Installations instanceof Hydrator\Operation\Orgs\CbOrgRcb\Installations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Installations = new Hydrator\Operation\Orgs\CbOrgRcb\Installations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Installations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits() : Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits instanceof Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits = new Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams() : Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams instanceof Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams = new Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages() : Hydrator\Operation\Orgs\CbOrgRcb\Packages
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Packages instanceof Hydrator\Operation\Orgs\CbOrgRcb\Packages === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Packages = new Hydrator\Operation\Orgs\CbOrgRcb\Packages();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Packages;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions() : Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions = new Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects() : Hydrator\Operation\Orgs\CbOrgRcb\Projects
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Projects instanceof Hydrator\Operation\Orgs\CbOrgRcb\Projects === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Projects = new Hydrator\Operation\Orgs\CbOrgRcb\Projects();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀TeamSync🌀Groups() : Hydrator\Operation\Orgs\CbOrgRcb\TeamSync\Groups
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀TeamSync🌀Groups instanceof Hydrator\Operation\Orgs\CbOrgRcb\TeamSync\Groups === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀TeamSync🌀Groups = new Hydrator\Operation\Orgs\CbOrgRcb\TeamSync\Groups();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀TeamSync🌀Groups;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams() : Hydrator\Operation\Orgs\CbOrgRcb\Teams
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams = new Hydrator\Operation\Orgs\CbOrgRcb\Teams();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb\Reactions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Repos\CbOwnerRcb\CbRepoRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb;
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
    public function getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission() : Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission
    {
        if ($this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission instanceof Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission === false) {
            $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = new Hydrator\Operation\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb\Permission();
        }
        return $this->operation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission;
    }
    public function getObjectMapperOperation🌀RateLimit() : Hydrator\Operation\RateLimit
    {
        if ($this->operation🌀RateLimit instanceof Hydrator\Operation\RateLimit === false) {
            $this->operation🌀RateLimit = new Hydrator\Operation\RateLimit();
        }
        return $this->operation🌀RateLimit;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows() : Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows
    {
        if ($this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows instanceof Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows === false) {
            $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows = new Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows();
        }
        return $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing() : Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing
    {
        if ($this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing instanceof Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing === false) {
            $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing = new Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing();
        }
        return $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_ instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_ === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_ = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\Authors();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import\LargeFiles();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\GenerateNotes();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Clones();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Paths();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Popular\Referrers();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Traffic\Views();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views;
    }
    public function getObjectMapperOperation🌀Scim🌀V2🌀Organizations🌀CbOrgRcb🌀Users() : Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb\Users
    {
        if ($this->operation🌀Scim🌀V2🌀Organizations🌀CbOrgRcb🌀Users instanceof Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb\Users === false) {
            $this->operation🌀Scim🌀V2🌀Organizations🌀CbOrgRcb🌀Users = new Hydrator\Operation\Scim\V2\Organizations\CbOrgRcb\Users();
        }
        return $this->operation🌀Scim🌀V2🌀Organizations🌀CbOrgRcb🌀Users;
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
    public function getObjectMapperOperation🌀User() : Hydrator\Operation\User
    {
        if ($this->operation🌀User instanceof Hydrator\Operation\User === false) {
            $this->operation🌀User = new Hydrator\Operation\User();
        }
        return $this->operation🌀User;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets() : Hydrator\Operation\User\Codespaces\Secrets
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets instanceof Hydrator\Operation\User\Codespaces\Secrets === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets = new Hydrator\Operation\User\Codespaces\Secrets();
        }
        return $this->operation🌀User🌀Codespaces🌀Secrets;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey() : Hydrator\Operation\User\Codespaces\Secrets\PublicKey
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey instanceof Hydrator\Operation\User\Codespaces\Secrets\PublicKey === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey = new Hydrator\Operation\User\Codespaces\Secrets\PublicKey();
        }
        return $this->operation🌀User🌀Codespaces🌀Secrets🌀PublicKey;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports() : Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports
    {
        if ($this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports instanceof Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports === false) {
            $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports = new Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Exports();
        }
        return $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports;
    }
    public function getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish() : Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish
    {
        if ($this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish instanceof Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish === false) {
            $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish = new Hydrator\Operation\User\Codespaces\CbCodespaceNameRcb\Publish();
        }
        return $this->operation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish;
    }
    public function getObjectMapperOperation🌀User🌀Email🌀Visibility() : Hydrator\Operation\User\Email\Visibility
    {
        if ($this->operation🌀User🌀Email🌀Visibility instanceof Hydrator\Operation\User\Email\Visibility === false) {
            $this->operation🌀User🌀Email🌀Visibility = new Hydrator\Operation\User\Email\Visibility();
        }
        return $this->operation🌀User🌀Email🌀Visibility;
    }
    public function getObjectMapperOperation🌀User🌀GpgKeys() : Hydrator\Operation\User\GpgKeys
    {
        if ($this->operation🌀User🌀GpgKeys instanceof Hydrator\Operation\User\GpgKeys === false) {
            $this->operation🌀User🌀GpgKeys = new Hydrator\Operation\User\GpgKeys();
        }
        return $this->operation🌀User🌀GpgKeys;
    }
    public function getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories() : Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories
    {
        if ($this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories instanceof Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories === false) {
            $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = new Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories();
        }
        return $this->operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀User🌀Keys() : Hydrator\Operation\User\Keys
    {
        if ($this->operation🌀User🌀Keys instanceof Hydrator\Operation\User\Keys === false) {
            $this->operation🌀User🌀Keys = new Hydrator\Operation\User\Keys();
        }
        return $this->operation🌀User🌀Keys;
    }
    public function getObjectMapperOperation🌀User🌀MarketplacePurchases() : Hydrator\Operation\User\MarketplacePurchases
    {
        if ($this->operation🌀User🌀MarketplacePurchases instanceof Hydrator\Operation\User\MarketplacePurchases === false) {
            $this->operation🌀User🌀MarketplacePurchases = new Hydrator\Operation\User\MarketplacePurchases();
        }
        return $this->operation🌀User🌀MarketplacePurchases;
    }
    public function getObjectMapperOperation🌀User🌀SocialAccounts() : Hydrator\Operation\User\SocialAccounts
    {
        if ($this->operation🌀User🌀SocialAccounts instanceof Hydrator\Operation\User\SocialAccounts === false) {
            $this->operation🌀User🌀SocialAccounts = new Hydrator\Operation\User\SocialAccounts();
        }
        return $this->operation🌀User🌀SocialAccounts;
    }
    public function getObjectMapperOperation🌀User🌀SshSigningKeys() : Hydrator\Operation\User\SshSigningKeys
    {
        if ($this->operation🌀User🌀SshSigningKeys instanceof Hydrator\Operation\User\SshSigningKeys === false) {
            $this->operation🌀User🌀SshSigningKeys = new Hydrator\Operation\User\SshSigningKeys();
        }
        return $this->operation🌀User🌀SshSigningKeys;
    }
    public function getObjectMapperOperation🌀User🌀Starred() : Hydrator\Operation\User\Starred
    {
        if ($this->operation🌀User🌀Starred instanceof Hydrator\Operation\User\Starred === false) {
            $this->operation🌀User🌀Starred = new Hydrator\Operation\User\Starred();
        }
        return $this->operation🌀User🌀Starred;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard() : Hydrator\Operation\Users\CbUsernameRcb\Hovercard
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Hovercard instanceof Hydrator\Operation\Users\CbUsernameRcb\Hovercard === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Hovercard = new Hydrator\Operation\Users\CbUsernameRcb\Hovercard();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Hovercard;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys() : Hydrator\Operation\Users\CbUsernameRcb\Keys
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Keys instanceof Hydrator\Operation\Users\CbUsernameRcb\Keys === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Keys = new Hydrator\Operation\Users\CbUsernameRcb\Keys();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Keys;
    }
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred() : Hydrator\Operation\Users\CbUsernameRcb\Starred
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Starred instanceof Hydrator\Operation\Users\CbUsernameRcb\Starred === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Starred = new Hydrator\Operation\Users\CbUsernameRcb\Starred();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Starred;
    }
    public function getObjectMapperOperation🌀Versions() : Hydrator\Operation\Versions
    {
        if ($this->operation🌀Versions instanceof Hydrator\Operation\Versions === false) {
            $this->operation🌀Versions = new Hydrator\Operation\Versions();
        }
        return $this->operation🌀Versions;
    }
    public function getObjectMapperWebHook🪝BranchProtectionRule() : Hydrator\WebHook\BranchProtectionRule
    {
        if ($this->webHook🪝BranchProtectionRule instanceof Hydrator\WebHook\BranchProtectionRule === false) {
            $this->webHook🪝BranchProtectionRule = new Hydrator\WebHook\BranchProtectionRule();
        }
        return $this->webHook🪝BranchProtectionRule;
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
    public function getObjectMapperWebHook🪝MarketplacePurchase() : Hydrator\WebHook\MarketplacePurchase
    {
        if ($this->webHook🪝MarketplacePurchase instanceof Hydrator\WebHook\MarketplacePurchase === false) {
            $this->webHook🪝MarketplacePurchase = new Hydrator\WebHook\MarketplacePurchase();
        }
        return $this->webHook🪝MarketplacePurchase;
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
    public function getObjectMapperWebHook🪝MergeGroup() : Hydrator\WebHook\MergeGroup
    {
        if ($this->webHook🪝MergeGroup instanceof Hydrator\WebHook\MergeGroup === false) {
            $this->webHook🪝MergeGroup = new Hydrator\WebHook\MergeGroup();
        }
        return $this->webHook🪝MergeGroup;
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
    public function getObjectMapperWebHook🪝OrgBlock() : Hydrator\WebHook\OrgBlock
    {
        if ($this->webHook🪝OrgBlock instanceof Hydrator\WebHook\OrgBlock === false) {
            $this->webHook🪝OrgBlock = new Hydrator\WebHook\OrgBlock();
        }
        return $this->webHook🪝OrgBlock;
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
    public function getObjectMapperWebHook🪝ProjectsV2() : Hydrator\WebHook\ProjectsV2
    {
        if ($this->webHook🪝ProjectsV2 instanceof Hydrator\WebHook\ProjectsV2 === false) {
            $this->webHook🪝ProjectsV2 = new Hydrator\WebHook\ProjectsV2();
        }
        return $this->webHook🪝ProjectsV2;
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
    public function getObjectMapperWebHook🪝RepositoryImport() : Hydrator\WebHook\RepositoryImport
    {
        if ($this->webHook🪝RepositoryImport instanceof Hydrator\WebHook\RepositoryImport === false) {
            $this->webHook🪝RepositoryImport = new Hydrator\WebHook\RepositoryImport();
        }
        return $this->webHook🪝RepositoryImport;
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
