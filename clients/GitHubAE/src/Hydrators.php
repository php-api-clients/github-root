<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE;

use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class Hydrators implements \EventSauce\ObjectHydrator\ObjectMapper
{
    private ?Hydrator\Operation\Root $operation🌀Root = null;
    private ?Hydrator\Operation\Admin\Hooks $operation🌀Admin🌀Hooks = null;
    private ?Hydrator\Operation\Admin\Hooks\CbHookIdRcb $operation🌀Admin🌀Hooks🌀CbHookIdRcb = null;
    private ?Hydrator\Operation\Admin\Keys $operation🌀Admin🌀Keys = null;
    private ?Hydrator\Operation\Admin\Organizations $operation🌀Admin🌀Organizations = null;
    private ?Hydrator\Operation\Admin\Organizations\CbOrgRcb $operation🌀Admin🌀Organizations🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments $operation🌀Admin🌀PreReceiveEnvironments = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads = null;
    private ?Hydrator\Operation\Admin\Tokens $operation🌀Admin🌀Tokens = null;
    private ?Hydrator\Operation\App $operation🌀App = null;
    private ?Hydrator\Operation\AppManifests\CbCodeRcb\Conversions $operation🌀AppManifests🌀CbCodeRcb🌀Conversions = null;
    private ?Hydrator\Operation\App\Hook\Config $operation🌀App🌀Hook🌀Config = null;
    private ?Hydrator\Operation\App\Hook\Deliveries $operation🌀App🌀Hook🌀Deliveries = null;
    private ?Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb = null;
    private ?Hydrator\Operation\App\Hook\Deliveries\CbDeliveryIdRcb\Attempts $operation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts = null;
    private ?Hydrator\Operation\App\InstallationRequests $operation🌀App🌀InstallationRequests = null;
    private ?Hydrator\Operation\App\Installations $operation🌀App🌀Installations = null;
    private ?Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens $operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = null;
    private ?Hydrator\Operation\CodesOfConduct $operation🌀CodesOfConduct = null;
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
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog $operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = null;
    private ?Hydrator\Operation\Feeds $operation🌀Feeds = null;
    private ?Hydrator\Operation\Gists $operation🌀Gists = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb $operation🌀Gists🌀CbGistIdRcb = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Comments $operation🌀Gists🌀CbGistIdRcb🌀Comments = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Commits $operation🌀Gists🌀CbGistIdRcb🌀Commits = null;
    private ?Hydrator\Operation\Gists\CbGistIdRcb\Star $operation🌀Gists🌀CbGistIdRcb🌀Star = null;
    private ?Hydrator\Operation\Gitignore\Templates $operation🌀Gitignore🌀Templates = null;
    private ?Hydrator\Operation\Gitignore\Templates\CbNameRcb $operation🌀Gitignore🌀Templates🌀CbNameRcb = null;
    private ?Hydrator\Operation\Installation\Repositories $operation🌀Installation🌀Repositories = null;
    private ?Hydrator\Operation\Issues $operation🌀Issues = null;
    private ?Hydrator\Operation\Licenses $operation🌀Licenses = null;
    private ?Hydrator\Operation\Licenses\CbLicenseRcb $operation🌀Licenses🌀CbLicenseRcb = null;
    private ?Hydrator\Operation\Meta $operation🌀Meta = null;
    private ?Hydrator\Operation\Notifications $operation🌀Notifications = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription $operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb $operation🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts $operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\ExternalDashGroup\CbGroupIdRcb $operation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\ExternalGroups $operation🌀Orgs🌀CbOrgRcb🌀ExternalGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks $operation🌀Orgs🌀CbOrgRcb🌀Hooks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Installations $operation🌀Orgs🌀CbOrgRcb🌀Installations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Members $operation🌀Orgs🌀CbOrgRcb🌀Members = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations $operation🌀Orgs🌀CbOrgRcb🌀Migrations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Projects = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Repos $operation🌀Orgs🌀CbOrgRcb🌀Repos = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Autolinks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\EnforceAdmins $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredPullRequestReviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb\Annotations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckSuites\Preferences $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb\CheckDashRuns $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\MergeUpstream $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Files $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb\Locations $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stargazers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CommitActivity $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\Participation $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Subscription $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = null;
    private ?Hydrator\Operation\Search\Code $operation🌀Search🌀Code = null;
    private ?Hydrator\Operation\Search\Commits $operation🌀Search🌀Commits = null;
    private ?Hydrator\Operation\Search\Issues $operation🌀Search🌀Issues = null;
    private ?Hydrator\Operation\Search\Labels $operation🌀Search🌀Labels = null;
    private ?Hydrator\Operation\Search\Repositories $operation🌀Search🌀Repositories = null;
    private ?Hydrator\Operation\Search\Topics $operation🌀Search🌀Topics = null;
    private ?Hydrator\Operation\Search\Users $operation🌀Search🌀Users = null;
    private ?Hydrator\Operation\User $operation🌀User = null;
    private ?Hydrator\Operation\User\GpgKeys $operation🌀User🌀GpgKeys = null;
    private ?Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories $operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\User\Keys $operation🌀User🌀Keys = null;
    private ?Hydrator\Operation\User\Starred $operation🌀User🌀Starred = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Hovercard $operation🌀Users🌀CbUsernameRcb🌀Hovercard = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Keys $operation🌀Users🌀CbUsernameRcb🌀Keys = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Starred $operation🌀Users🌀CbUsernameRcb🌀Starred = null;
    private ?Hydrator\WebHook\BranchProtectionRule $webHook🌀BranchProtectionRule = null;
    private ?Hydrator\WebHook\CheckRun $webHook🌀CheckRun = null;
    private ?Hydrator\WebHook\CheckSuite $webHook🌀CheckSuite = null;
    private ?Hydrator\WebHook\CodeScanningAlert $webHook🌀CodeScanningAlert = null;
    private ?Hydrator\WebHook\CommitComment $webHook🌀CommitComment = null;
    private ?Hydrator\WebHook\Create $webHook🌀Create = null;
    private ?Hydrator\WebHook\Delete $webHook🌀Delete = null;
    private ?Hydrator\WebHook\DependabotAlert $webHook🌀DependabotAlert = null;
    private ?Hydrator\WebHook\DeployKey $webHook🌀DeployKey = null;
    private ?Hydrator\WebHook\Deployment $webHook🌀Deployment = null;
    private ?Hydrator\WebHook\DeploymentStatus $webHook🌀DeploymentStatus = null;
    private ?Hydrator\WebHook\Discussion $webHook🌀Discussion = null;
    private ?Hydrator\WebHook\DiscussionComment $webHook🌀DiscussionComment = null;
    private ?Hydrator\WebHook\Fork $webHook🌀Fork = null;
    private ?Hydrator\WebHook\GithubAppAuthorization $webHook🌀GithubAppAuthorization = null;
    private ?Hydrator\WebHook\Gollum $webHook🌀Gollum = null;
    private ?Hydrator\WebHook\Installation $webHook🌀Installation = null;
    private ?Hydrator\WebHook\InstallationRepositories $webHook🌀InstallationRepositories = null;
    private ?Hydrator\WebHook\InstallationTarget $webHook🌀InstallationTarget = null;
    private ?Hydrator\WebHook\IssueComment $webHook🌀IssueComment = null;
    private ?Hydrator\WebHook\Issues $webHook🌀Issues = null;
    private ?Hydrator\WebHook\Label $webHook🌀Label = null;
    private ?Hydrator\WebHook\Member $webHook🌀Member = null;
    private ?Hydrator\WebHook\Membership $webHook🌀Membership = null;
    private ?Hydrator\WebHook\MergeGroup $webHook🌀MergeGroup = null;
    private ?Hydrator\WebHook\Meta $webHook🌀Meta = null;
    private ?Hydrator\WebHook\Milestone $webHook🌀Milestone = null;
    private ?Hydrator\WebHook\Organization $webHook🌀Organization = null;
    private ?Hydrator\WebHook\Package $webHook🌀Package = null;
    private ?Hydrator\WebHook\PageBuild $webHook🌀PageBuild = null;
    private ?Hydrator\WebHook\Ping $webHook🌀Ping = null;
    private ?Hydrator\WebHook\ProjectCard $webHook🌀ProjectCard = null;
    private ?Hydrator\WebHook\Project $webHook🌀Project = null;
    private ?Hydrator\WebHook\ProjectColumn $webHook🌀ProjectColumn = null;
    private ?Hydrator\WebHook\ProjectsV2 $webHook🌀ProjectsV2 = null;
    private ?Hydrator\WebHook\Public_ $webHook🌀Public_ = null;
    private ?Hydrator\WebHook\PullRequest $webHook🌀PullRequest = null;
    private ?Hydrator\WebHook\PullRequestReviewComment $webHook🌀PullRequestReviewComment = null;
    private ?Hydrator\WebHook\PullRequestReview $webHook🌀PullRequestReview = null;
    private ?Hydrator\WebHook\PullRequestReviewThread $webHook🌀PullRequestReviewThread = null;
    private ?Hydrator\WebHook\Push $webHook🌀Push = null;
    private ?Hydrator\WebHook\RegistryPackage $webHook🌀RegistryPackage = null;
    private ?Hydrator\WebHook\Release $webHook🌀Release = null;
    private ?Hydrator\WebHook\Repository $webHook🌀Repository = null;
    private ?Hydrator\WebHook\RepositoryDispatch $webHook🌀RepositoryDispatch = null;
    private ?Hydrator\WebHook\SecretScanningAlert $webHook🌀SecretScanningAlert = null;
    private ?Hydrator\WebHook\SecretScanningAlertLocation $webHook🌀SecretScanningAlertLocation = null;
    private ?Hydrator\WebHook\SecurityAndAnalysis $webHook🌀SecurityAndAnalysis = null;
    private ?Hydrator\WebHook\Sponsorship $webHook🌀Sponsorship = null;
    private ?Hydrator\WebHook\Star $webHook🌀Star = null;
    private ?Hydrator\WebHook\Status $webHook🌀Status = null;
    private ?Hydrator\WebHook\TeamAdd $webHook🌀TeamAdd = null;
    private ?Hydrator\WebHook\Team $webHook🌀Team = null;
    private ?Hydrator\WebHook\User $webHook🌀User = null;
    private ?Hydrator\WebHook\Watch $webHook🌀Watch = null;
    private ?Hydrator\WebHook\WorkflowDispatch $webHook🌀WorkflowDispatch = null;
    private ?Hydrator\WebHook\WorkflowJob $webHook🌀WorkflowJob = null;
    private ?Hydrator\WebHook\WorkflowRun $webHook🌀WorkflowRun = null;
    public function hydrateObject(string $className, array $payload) : object
    {
        return match ($className) {
            'ApiClients\\Client\\GitHubAE\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook2' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironment' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironmentDownloadStatus' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Authorization' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Integration' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubAE\\Schema\\BasicError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubAE\\Schema\\ScimError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent\\Config' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseGistOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseHookOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseIssueOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseMilestoneOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOrganizationOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePageOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePullRequestOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseRepositoryOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseUserOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Runner' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSecretScanningAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Feed' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Issue' => $this->getObjectMapperOperation🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseSimple' => $this->getObjectMapperOperation🌀Licenses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationActionsSecret', 'ApiClients\\Client\\GitHubAE\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningOrganizationAlertItems' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Repository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamProject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RateLimitOverview' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchWithProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchAdminEnforced' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\StatusCheckPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertItems' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent\\Data', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Collaborator' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Reactions\\CreateForCommitComment\\Response\\Applicationjson\\H415' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchShort' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Environment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Event' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitRef' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEvent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Milestone' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Page' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\DiffEntry' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContributorActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\Enterprise', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel' => $this->getObjectMapperWebHook🌀BranchProtectionRule()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\Integration\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🌀CheckRun()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\ActionsMeta', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App' => $this->getObjectMapperWebHook🌀CheckSuite()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert' => $this->getObjectMapperWebHook🌀CodeScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Reactions' => $this->getObjectMapperWebHook🌀CommitComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🌀Create()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🌀Delete()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert\\Dependency', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🌀DependabotAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🌀DeployKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows' => $this->getObjectMapperWebHook🌀Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun' => $this->getObjectMapperWebHook🌀DeploymentStatus()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🌀Discussion()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes' => $this->getObjectMapperWebHook🌀DiscussionComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee' => $this->getObjectMapperWebHook🌀Fork()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🌀GithubAppAuthorization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🌀Gollum()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\AppPermissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🌀Installation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🌀InstallationRepositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes' => $this->getObjectMapperWebHook🌀InstallationTarget()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes\\Body' => $this->getObjectMapperWebHook🌀IssueComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Name' => $this->getObjectMapperWebHook🌀Label()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🌀Member()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🌀Membership()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMergeGroupChecksRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMergeGroupChecksRequested\\MergeGroup' => $this->getObjectMapperWebHook🌀MergeGroup()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🌀Milestone()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes\\Login' => $this->getObjectMapperWebHook🌀Organization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata\\Value', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀Package()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild\\Error' => $this->getObjectMapperWebHook🌀PageBuild()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubAE\\Schema\\HookResponse', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🌀Ping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🌀ProjectCard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🌀Project()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🌀ProjectColumn()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🌀ProjectsV2()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🌀Public_()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestClosed\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestOpened\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head' => $this->getObjectMapperWebHook🌀PullRequest()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReviewComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReview()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🌀PullRequestReviewThread()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Pusher' => $this->getObjectMapperWebHook🌀Push()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀RegistryPackage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release' => $this->getObjectMapperWebHook🌀Release()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🌀Repository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDispatchSample', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDispatchSample\\ClientPayload' => $this->getObjectMapperWebHook🌀RepositoryDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🌀SecretScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocationIssueComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🌀SecretScanningAlertLocation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConductSimple' => $this->getObjectMapperWebHook🌀SecurityAndAnalysis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🌀Sponsorship()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🌀TeamAdd()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🌀Team()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserDeleted' => $this->getObjectMapperWebHook🌀User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🌀Watch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🌀WorkflowDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🌀WorkflowJob()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests' => $this->getObjectMapperWebHook🌀WorkflowRun()->hydrateObject($className, $payload),
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
            'ApiClients\\Client\\GitHubAE\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook2' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironment' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironmentDownloadStatus' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Authorization' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Integration' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubAE\\Schema\\BasicError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubAE\\Schema\\ScimError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent\\Config' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseGistOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Gists()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseHookOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseIssueOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseMilestoneOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Milestones()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOrganizationOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Orgs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePageOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pages()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePullRequestOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseRepositoryOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Repos()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseUserOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Runner' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSecretScanningAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Feed' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Issue' => $this->getObjectMapperOperation🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseSimple' => $this->getObjectMapperOperation🌀Licenses()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationActionsSecret', 'ApiClients\\Client\\GitHubAE\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningOrganizationAlertItems' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Repository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamProject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RateLimitOverview' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchWithProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchAdminEnforced' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\StatusCheckPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertItems' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent\\Data', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Collaborator' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Reactions\\CreateForCommitComment\\Response\\Applicationjson\\H415' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchShort' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Environment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Event' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitRef' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEvent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Milestone' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Page' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\DiffEntry' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContributorActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\Enterprise', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel' => $this->getObjectMapperWebHook🌀BranchProtectionRule()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\Integration\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🌀CheckRun()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\ActionsMeta', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App' => $this->getObjectMapperWebHook🌀CheckSuite()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert' => $this->getObjectMapperWebHook🌀CodeScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Reactions' => $this->getObjectMapperWebHook🌀CommitComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🌀Create()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🌀Delete()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert\\Dependency', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🌀DependabotAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🌀DeployKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows' => $this->getObjectMapperWebHook🌀Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun' => $this->getObjectMapperWebHook🌀DeploymentStatus()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🌀Discussion()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes' => $this->getObjectMapperWebHook🌀DiscussionComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee' => $this->getObjectMapperWebHook🌀Fork()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🌀GithubAppAuthorization()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🌀Gollum()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\AppPermissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🌀Installation()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🌀InstallationRepositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes' => $this->getObjectMapperWebHook🌀InstallationTarget()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes\\Body' => $this->getObjectMapperWebHook🌀IssueComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Name' => $this->getObjectMapperWebHook🌀Label()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🌀Member()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🌀Membership()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMergeGroupChecksRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMergeGroupChecksRequested\\MergeGroup' => $this->getObjectMapperWebHook🌀MergeGroup()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🌀Milestone()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes\\Login' => $this->getObjectMapperWebHook🌀Organization()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata\\Value', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀Package()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild\\Error' => $this->getObjectMapperWebHook🌀PageBuild()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubAE\\Schema\\HookResponse', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🌀Ping()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🌀ProjectCard()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🌀Project()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🌀ProjectColumn()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🌀ProjectsV2()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🌀Public_()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestClosed\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestOpened\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head' => $this->getObjectMapperWebHook🌀PullRequest()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReviewComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReview()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🌀PullRequestReviewThread()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Pusher' => $this->getObjectMapperWebHook🌀Push()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀RegistryPackage()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release' => $this->getObjectMapperWebHook🌀Release()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🌀Repository()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDispatchSample', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDispatchSample\\ClientPayload' => $this->getObjectMapperWebHook🌀RepositoryDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🌀SecretScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocationIssueComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🌀SecretScanningAlertLocation()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConductSimple' => $this->getObjectMapperWebHook🌀SecurityAndAnalysis()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🌀Sponsorship()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🌀TeamAdd()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🌀Team()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserDeleted' => $this->getObjectMapperWebHook🌀User()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🌀Watch()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🌀WorkflowDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🌀WorkflowJob()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests' => $this->getObjectMapperWebHook🌀WorkflowRun()->serializeObject($object),
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
    public function getObjectMapperOperation🌀Admin🌀Keys() : Hydrator\Operation\Admin\Keys
    {
        if ($this->operation🌀Admin🌀Keys instanceof Hydrator\Operation\Admin\Keys === false) {
            $this->operation🌀Admin🌀Keys = new Hydrator\Operation\Admin\Keys();
        }
        return $this->operation🌀Admin🌀Keys;
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
    public function getObjectMapperOperation🌀Admin🌀Tokens() : Hydrator\Operation\Admin\Tokens
    {
        if ($this->operation🌀Admin🌀Tokens instanceof Hydrator\Operation\Admin\Tokens === false) {
            $this->operation🌀Admin🌀Tokens = new Hydrator\Operation\Admin\Tokens();
        }
        return $this->operation🌀Admin🌀Tokens;
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
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb() : Hydrator\Operation\Orgs\CbOrgRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb = new Hydrator\Operation\Orgs\CbOrgRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts() : Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts instanceof Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = new Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations() : Hydrator\Operation\Orgs\CbOrgRcb\Installations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Installations instanceof Hydrator\Operation\Orgs\CbOrgRcb\Installations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Installations = new Hydrator\Operation\Orgs\CbOrgRcb\Installations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Installations;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members() : Hydrator\Operation\Orgs\CbOrgRcb\Members
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Members instanceof Hydrator\Operation\Orgs\CbOrgRcb\Members === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Members = new Hydrator\Operation\Orgs\CbOrgRcb\Members();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Members;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories() : Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories instanceof Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories = new Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects() : Hydrator\Operation\Orgs\CbOrgRcb\Projects
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Projects instanceof Hydrator\Operation\Orgs\CbOrgRcb\Projects === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Projects = new Hydrator\Operation\Orgs\CbOrgRcb\Projects();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Projects;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos() : Hydrator\Operation\Orgs\CbOrgRcb\Repos
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Repos instanceof Hydrator\Operation\Orgs\CbOrgRcb\Repos === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Repos = new Hydrator\Operation\Orgs\CbOrgRcb\Repos();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Repos;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments\CbCommentIdRcb\Reactions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Events();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Comments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Milestones();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Assets\CbAssetIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics;
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
    public function getObjectMapperWebHook🌀BranchProtectionRule() : Hydrator\WebHook\BranchProtectionRule
    {
        if ($this->webHook🌀BranchProtectionRule instanceof Hydrator\WebHook\BranchProtectionRule === false) {
            $this->webHook🌀BranchProtectionRule = new Hydrator\WebHook\BranchProtectionRule();
        }
        return $this->webHook🌀BranchProtectionRule;
    }
    public function getObjectMapperWebHook🌀CheckRun() : Hydrator\WebHook\CheckRun
    {
        if ($this->webHook🌀CheckRun instanceof Hydrator\WebHook\CheckRun === false) {
            $this->webHook🌀CheckRun = new Hydrator\WebHook\CheckRun();
        }
        return $this->webHook🌀CheckRun;
    }
    public function getObjectMapperWebHook🌀CheckSuite() : Hydrator\WebHook\CheckSuite
    {
        if ($this->webHook🌀CheckSuite instanceof Hydrator\WebHook\CheckSuite === false) {
            $this->webHook🌀CheckSuite = new Hydrator\WebHook\CheckSuite();
        }
        return $this->webHook🌀CheckSuite;
    }
    public function getObjectMapperWebHook🌀CodeScanningAlert() : Hydrator\WebHook\CodeScanningAlert
    {
        if ($this->webHook🌀CodeScanningAlert instanceof Hydrator\WebHook\CodeScanningAlert === false) {
            $this->webHook🌀CodeScanningAlert = new Hydrator\WebHook\CodeScanningAlert();
        }
        return $this->webHook🌀CodeScanningAlert;
    }
    public function getObjectMapperWebHook🌀CommitComment() : Hydrator\WebHook\CommitComment
    {
        if ($this->webHook🌀CommitComment instanceof Hydrator\WebHook\CommitComment === false) {
            $this->webHook🌀CommitComment = new Hydrator\WebHook\CommitComment();
        }
        return $this->webHook🌀CommitComment;
    }
    public function getObjectMapperWebHook🌀Create() : Hydrator\WebHook\Create
    {
        if ($this->webHook🌀Create instanceof Hydrator\WebHook\Create === false) {
            $this->webHook🌀Create = new Hydrator\WebHook\Create();
        }
        return $this->webHook🌀Create;
    }
    public function getObjectMapperWebHook🌀Delete() : Hydrator\WebHook\Delete
    {
        if ($this->webHook🌀Delete instanceof Hydrator\WebHook\Delete === false) {
            $this->webHook🌀Delete = new Hydrator\WebHook\Delete();
        }
        return $this->webHook🌀Delete;
    }
    public function getObjectMapperWebHook🌀DependabotAlert() : Hydrator\WebHook\DependabotAlert
    {
        if ($this->webHook🌀DependabotAlert instanceof Hydrator\WebHook\DependabotAlert === false) {
            $this->webHook🌀DependabotAlert = new Hydrator\WebHook\DependabotAlert();
        }
        return $this->webHook🌀DependabotAlert;
    }
    public function getObjectMapperWebHook🌀DeployKey() : Hydrator\WebHook\DeployKey
    {
        if ($this->webHook🌀DeployKey instanceof Hydrator\WebHook\DeployKey === false) {
            $this->webHook🌀DeployKey = new Hydrator\WebHook\DeployKey();
        }
        return $this->webHook🌀DeployKey;
    }
    public function getObjectMapperWebHook🌀Deployment() : Hydrator\WebHook\Deployment
    {
        if ($this->webHook🌀Deployment instanceof Hydrator\WebHook\Deployment === false) {
            $this->webHook🌀Deployment = new Hydrator\WebHook\Deployment();
        }
        return $this->webHook🌀Deployment;
    }
    public function getObjectMapperWebHook🌀DeploymentStatus() : Hydrator\WebHook\DeploymentStatus
    {
        if ($this->webHook🌀DeploymentStatus instanceof Hydrator\WebHook\DeploymentStatus === false) {
            $this->webHook🌀DeploymentStatus = new Hydrator\WebHook\DeploymentStatus();
        }
        return $this->webHook🌀DeploymentStatus;
    }
    public function getObjectMapperWebHook🌀Discussion() : Hydrator\WebHook\Discussion
    {
        if ($this->webHook🌀Discussion instanceof Hydrator\WebHook\Discussion === false) {
            $this->webHook🌀Discussion = new Hydrator\WebHook\Discussion();
        }
        return $this->webHook🌀Discussion;
    }
    public function getObjectMapperWebHook🌀DiscussionComment() : Hydrator\WebHook\DiscussionComment
    {
        if ($this->webHook🌀DiscussionComment instanceof Hydrator\WebHook\DiscussionComment === false) {
            $this->webHook🌀DiscussionComment = new Hydrator\WebHook\DiscussionComment();
        }
        return $this->webHook🌀DiscussionComment;
    }
    public function getObjectMapperWebHook🌀Fork() : Hydrator\WebHook\Fork
    {
        if ($this->webHook🌀Fork instanceof Hydrator\WebHook\Fork === false) {
            $this->webHook🌀Fork = new Hydrator\WebHook\Fork();
        }
        return $this->webHook🌀Fork;
    }
    public function getObjectMapperWebHook🌀GithubAppAuthorization() : Hydrator\WebHook\GithubAppAuthorization
    {
        if ($this->webHook🌀GithubAppAuthorization instanceof Hydrator\WebHook\GithubAppAuthorization === false) {
            $this->webHook🌀GithubAppAuthorization = new Hydrator\WebHook\GithubAppAuthorization();
        }
        return $this->webHook🌀GithubAppAuthorization;
    }
    public function getObjectMapperWebHook🌀Gollum() : Hydrator\WebHook\Gollum
    {
        if ($this->webHook🌀Gollum instanceof Hydrator\WebHook\Gollum === false) {
            $this->webHook🌀Gollum = new Hydrator\WebHook\Gollum();
        }
        return $this->webHook🌀Gollum;
    }
    public function getObjectMapperWebHook🌀Installation() : Hydrator\WebHook\Installation
    {
        if ($this->webHook🌀Installation instanceof Hydrator\WebHook\Installation === false) {
            $this->webHook🌀Installation = new Hydrator\WebHook\Installation();
        }
        return $this->webHook🌀Installation;
    }
    public function getObjectMapperWebHook🌀InstallationRepositories() : Hydrator\WebHook\InstallationRepositories
    {
        if ($this->webHook🌀InstallationRepositories instanceof Hydrator\WebHook\InstallationRepositories === false) {
            $this->webHook🌀InstallationRepositories = new Hydrator\WebHook\InstallationRepositories();
        }
        return $this->webHook🌀InstallationRepositories;
    }
    public function getObjectMapperWebHook🌀InstallationTarget() : Hydrator\WebHook\InstallationTarget
    {
        if ($this->webHook🌀InstallationTarget instanceof Hydrator\WebHook\InstallationTarget === false) {
            $this->webHook🌀InstallationTarget = new Hydrator\WebHook\InstallationTarget();
        }
        return $this->webHook🌀InstallationTarget;
    }
    public function getObjectMapperWebHook🌀IssueComment() : Hydrator\WebHook\IssueComment
    {
        if ($this->webHook🌀IssueComment instanceof Hydrator\WebHook\IssueComment === false) {
            $this->webHook🌀IssueComment = new Hydrator\WebHook\IssueComment();
        }
        return $this->webHook🌀IssueComment;
    }
    public function getObjectMapperWebHook🌀Issues() : Hydrator\WebHook\Issues
    {
        if ($this->webHook🌀Issues instanceof Hydrator\WebHook\Issues === false) {
            $this->webHook🌀Issues = new Hydrator\WebHook\Issues();
        }
        return $this->webHook🌀Issues;
    }
    public function getObjectMapperWebHook🌀Label() : Hydrator\WebHook\Label
    {
        if ($this->webHook🌀Label instanceof Hydrator\WebHook\Label === false) {
            $this->webHook🌀Label = new Hydrator\WebHook\Label();
        }
        return $this->webHook🌀Label;
    }
    public function getObjectMapperWebHook🌀Member() : Hydrator\WebHook\Member
    {
        if ($this->webHook🌀Member instanceof Hydrator\WebHook\Member === false) {
            $this->webHook🌀Member = new Hydrator\WebHook\Member();
        }
        return $this->webHook🌀Member;
    }
    public function getObjectMapperWebHook🌀Membership() : Hydrator\WebHook\Membership
    {
        if ($this->webHook🌀Membership instanceof Hydrator\WebHook\Membership === false) {
            $this->webHook🌀Membership = new Hydrator\WebHook\Membership();
        }
        return $this->webHook🌀Membership;
    }
    public function getObjectMapperWebHook🌀MergeGroup() : Hydrator\WebHook\MergeGroup
    {
        if ($this->webHook🌀MergeGroup instanceof Hydrator\WebHook\MergeGroup === false) {
            $this->webHook🌀MergeGroup = new Hydrator\WebHook\MergeGroup();
        }
        return $this->webHook🌀MergeGroup;
    }
    public function getObjectMapperWebHook🌀Meta() : Hydrator\WebHook\Meta
    {
        if ($this->webHook🌀Meta instanceof Hydrator\WebHook\Meta === false) {
            $this->webHook🌀Meta = new Hydrator\WebHook\Meta();
        }
        return $this->webHook🌀Meta;
    }
    public function getObjectMapperWebHook🌀Milestone() : Hydrator\WebHook\Milestone
    {
        if ($this->webHook🌀Milestone instanceof Hydrator\WebHook\Milestone === false) {
            $this->webHook🌀Milestone = new Hydrator\WebHook\Milestone();
        }
        return $this->webHook🌀Milestone;
    }
    public function getObjectMapperWebHook🌀Organization() : Hydrator\WebHook\Organization
    {
        if ($this->webHook🌀Organization instanceof Hydrator\WebHook\Organization === false) {
            $this->webHook🌀Organization = new Hydrator\WebHook\Organization();
        }
        return $this->webHook🌀Organization;
    }
    public function getObjectMapperWebHook🌀Package() : Hydrator\WebHook\Package
    {
        if ($this->webHook🌀Package instanceof Hydrator\WebHook\Package === false) {
            $this->webHook🌀Package = new Hydrator\WebHook\Package();
        }
        return $this->webHook🌀Package;
    }
    public function getObjectMapperWebHook🌀PageBuild() : Hydrator\WebHook\PageBuild
    {
        if ($this->webHook🌀PageBuild instanceof Hydrator\WebHook\PageBuild === false) {
            $this->webHook🌀PageBuild = new Hydrator\WebHook\PageBuild();
        }
        return $this->webHook🌀PageBuild;
    }
    public function getObjectMapperWebHook🌀Ping() : Hydrator\WebHook\Ping
    {
        if ($this->webHook🌀Ping instanceof Hydrator\WebHook\Ping === false) {
            $this->webHook🌀Ping = new Hydrator\WebHook\Ping();
        }
        return $this->webHook🌀Ping;
    }
    public function getObjectMapperWebHook🌀ProjectCard() : Hydrator\WebHook\ProjectCard
    {
        if ($this->webHook🌀ProjectCard instanceof Hydrator\WebHook\ProjectCard === false) {
            $this->webHook🌀ProjectCard = new Hydrator\WebHook\ProjectCard();
        }
        return $this->webHook🌀ProjectCard;
    }
    public function getObjectMapperWebHook🌀Project() : Hydrator\WebHook\Project
    {
        if ($this->webHook🌀Project instanceof Hydrator\WebHook\Project === false) {
            $this->webHook🌀Project = new Hydrator\WebHook\Project();
        }
        return $this->webHook🌀Project;
    }
    public function getObjectMapperWebHook🌀ProjectColumn() : Hydrator\WebHook\ProjectColumn
    {
        if ($this->webHook🌀ProjectColumn instanceof Hydrator\WebHook\ProjectColumn === false) {
            $this->webHook🌀ProjectColumn = new Hydrator\WebHook\ProjectColumn();
        }
        return $this->webHook🌀ProjectColumn;
    }
    public function getObjectMapperWebHook🌀ProjectsV2() : Hydrator\WebHook\ProjectsV2
    {
        if ($this->webHook🌀ProjectsV2 instanceof Hydrator\WebHook\ProjectsV2 === false) {
            $this->webHook🌀ProjectsV2 = new Hydrator\WebHook\ProjectsV2();
        }
        return $this->webHook🌀ProjectsV2;
    }
    public function getObjectMapperWebHook🌀Public_() : Hydrator\WebHook\Public_
    {
        if ($this->webHook🌀Public_ instanceof Hydrator\WebHook\Public_ === false) {
            $this->webHook🌀Public_ = new Hydrator\WebHook\Public_();
        }
        return $this->webHook🌀Public_;
    }
    public function getObjectMapperWebHook🌀PullRequest() : Hydrator\WebHook\PullRequest
    {
        if ($this->webHook🌀PullRequest instanceof Hydrator\WebHook\PullRequest === false) {
            $this->webHook🌀PullRequest = new Hydrator\WebHook\PullRequest();
        }
        return $this->webHook🌀PullRequest;
    }
    public function getObjectMapperWebHook🌀PullRequestReviewComment() : Hydrator\WebHook\PullRequestReviewComment
    {
        if ($this->webHook🌀PullRequestReviewComment instanceof Hydrator\WebHook\PullRequestReviewComment === false) {
            $this->webHook🌀PullRequestReviewComment = new Hydrator\WebHook\PullRequestReviewComment();
        }
        return $this->webHook🌀PullRequestReviewComment;
    }
    public function getObjectMapperWebHook🌀PullRequestReview() : Hydrator\WebHook\PullRequestReview
    {
        if ($this->webHook🌀PullRequestReview instanceof Hydrator\WebHook\PullRequestReview === false) {
            $this->webHook🌀PullRequestReview = new Hydrator\WebHook\PullRequestReview();
        }
        return $this->webHook🌀PullRequestReview;
    }
    public function getObjectMapperWebHook🌀PullRequestReviewThread() : Hydrator\WebHook\PullRequestReviewThread
    {
        if ($this->webHook🌀PullRequestReviewThread instanceof Hydrator\WebHook\PullRequestReviewThread === false) {
            $this->webHook🌀PullRequestReviewThread = new Hydrator\WebHook\PullRequestReviewThread();
        }
        return $this->webHook🌀PullRequestReviewThread;
    }
    public function getObjectMapperWebHook🌀Push() : Hydrator\WebHook\Push
    {
        if ($this->webHook🌀Push instanceof Hydrator\WebHook\Push === false) {
            $this->webHook🌀Push = new Hydrator\WebHook\Push();
        }
        return $this->webHook🌀Push;
    }
    public function getObjectMapperWebHook🌀RegistryPackage() : Hydrator\WebHook\RegistryPackage
    {
        if ($this->webHook🌀RegistryPackage instanceof Hydrator\WebHook\RegistryPackage === false) {
            $this->webHook🌀RegistryPackage = new Hydrator\WebHook\RegistryPackage();
        }
        return $this->webHook🌀RegistryPackage;
    }
    public function getObjectMapperWebHook🌀Release() : Hydrator\WebHook\Release
    {
        if ($this->webHook🌀Release instanceof Hydrator\WebHook\Release === false) {
            $this->webHook🌀Release = new Hydrator\WebHook\Release();
        }
        return $this->webHook🌀Release;
    }
    public function getObjectMapperWebHook🌀Repository() : Hydrator\WebHook\Repository
    {
        if ($this->webHook🌀Repository instanceof Hydrator\WebHook\Repository === false) {
            $this->webHook🌀Repository = new Hydrator\WebHook\Repository();
        }
        return $this->webHook🌀Repository;
    }
    public function getObjectMapperWebHook🌀RepositoryDispatch() : Hydrator\WebHook\RepositoryDispatch
    {
        if ($this->webHook🌀RepositoryDispatch instanceof Hydrator\WebHook\RepositoryDispatch === false) {
            $this->webHook🌀RepositoryDispatch = new Hydrator\WebHook\RepositoryDispatch();
        }
        return $this->webHook🌀RepositoryDispatch;
    }
    public function getObjectMapperWebHook🌀SecretScanningAlert() : Hydrator\WebHook\SecretScanningAlert
    {
        if ($this->webHook🌀SecretScanningAlert instanceof Hydrator\WebHook\SecretScanningAlert === false) {
            $this->webHook🌀SecretScanningAlert = new Hydrator\WebHook\SecretScanningAlert();
        }
        return $this->webHook🌀SecretScanningAlert;
    }
    public function getObjectMapperWebHook🌀SecretScanningAlertLocation() : Hydrator\WebHook\SecretScanningAlertLocation
    {
        if ($this->webHook🌀SecretScanningAlertLocation instanceof Hydrator\WebHook\SecretScanningAlertLocation === false) {
            $this->webHook🌀SecretScanningAlertLocation = new Hydrator\WebHook\SecretScanningAlertLocation();
        }
        return $this->webHook🌀SecretScanningAlertLocation;
    }
    public function getObjectMapperWebHook🌀SecurityAndAnalysis() : Hydrator\WebHook\SecurityAndAnalysis
    {
        if ($this->webHook🌀SecurityAndAnalysis instanceof Hydrator\WebHook\SecurityAndAnalysis === false) {
            $this->webHook🌀SecurityAndAnalysis = new Hydrator\WebHook\SecurityAndAnalysis();
        }
        return $this->webHook🌀SecurityAndAnalysis;
    }
    public function getObjectMapperWebHook🌀Sponsorship() : Hydrator\WebHook\Sponsorship
    {
        if ($this->webHook🌀Sponsorship instanceof Hydrator\WebHook\Sponsorship === false) {
            $this->webHook🌀Sponsorship = new Hydrator\WebHook\Sponsorship();
        }
        return $this->webHook🌀Sponsorship;
    }
    public function getObjectMapperWebHook🌀Star() : Hydrator\WebHook\Star
    {
        if ($this->webHook🌀Star instanceof Hydrator\WebHook\Star === false) {
            $this->webHook🌀Star = new Hydrator\WebHook\Star();
        }
        return $this->webHook🌀Star;
    }
    public function getObjectMapperWebHook🌀Status() : Hydrator\WebHook\Status
    {
        if ($this->webHook🌀Status instanceof Hydrator\WebHook\Status === false) {
            $this->webHook🌀Status = new Hydrator\WebHook\Status();
        }
        return $this->webHook🌀Status;
    }
    public function getObjectMapperWebHook🌀TeamAdd() : Hydrator\WebHook\TeamAdd
    {
        if ($this->webHook🌀TeamAdd instanceof Hydrator\WebHook\TeamAdd === false) {
            $this->webHook🌀TeamAdd = new Hydrator\WebHook\TeamAdd();
        }
        return $this->webHook🌀TeamAdd;
    }
    public function getObjectMapperWebHook🌀Team() : Hydrator\WebHook\Team
    {
        if ($this->webHook🌀Team instanceof Hydrator\WebHook\Team === false) {
            $this->webHook🌀Team = new Hydrator\WebHook\Team();
        }
        return $this->webHook🌀Team;
    }
    public function getObjectMapperWebHook🌀User() : Hydrator\WebHook\User
    {
        if ($this->webHook🌀User instanceof Hydrator\WebHook\User === false) {
            $this->webHook🌀User = new Hydrator\WebHook\User();
        }
        return $this->webHook🌀User;
    }
    public function getObjectMapperWebHook🌀Watch() : Hydrator\WebHook\Watch
    {
        if ($this->webHook🌀Watch instanceof Hydrator\WebHook\Watch === false) {
            $this->webHook🌀Watch = new Hydrator\WebHook\Watch();
        }
        return $this->webHook🌀Watch;
    }
    public function getObjectMapperWebHook🌀WorkflowDispatch() : Hydrator\WebHook\WorkflowDispatch
    {
        if ($this->webHook🌀WorkflowDispatch instanceof Hydrator\WebHook\WorkflowDispatch === false) {
            $this->webHook🌀WorkflowDispatch = new Hydrator\WebHook\WorkflowDispatch();
        }
        return $this->webHook🌀WorkflowDispatch;
    }
    public function getObjectMapperWebHook🌀WorkflowJob() : Hydrator\WebHook\WorkflowJob
    {
        if ($this->webHook🌀WorkflowJob instanceof Hydrator\WebHook\WorkflowJob === false) {
            $this->webHook🌀WorkflowJob = new Hydrator\WebHook\WorkflowJob();
        }
        return $this->webHook🌀WorkflowJob;
    }
    public function getObjectMapperWebHook🌀WorkflowRun() : Hydrator\WebHook\WorkflowRun
    {
        if ($this->webHook🌀WorkflowRun instanceof Hydrator\WebHook\WorkflowRun === false) {
            $this->webHook🌀WorkflowRun = new Hydrator\WebHook\WorkflowRun();
        }
        return $this->webHook🌀WorkflowRun;
    }
}
