<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubEnterprise;

use ApiClients\Client\GitHubEnterprise\Hydrator;
use ApiClients\Client\GitHubEnterprise\Operation;
use ApiClients\Client\GitHubEnterprise\Schema;
use ApiClients\Client\GitHubEnterprise\WebHook;
final class Hydrators implements \EventSauce\ObjectHydrator\ObjectMapper
{
    private ?Hydrator\Operation\Root $operation🌀Root = null;
    private ?Hydrator\Operation\Admin\Hooks $operation🌀Admin🌀Hooks = null;
    private ?Hydrator\Operation\Admin\Hooks\CbHookIdRcb $operation🌀Admin🌀Hooks🌀CbHookIdRcb = null;
    private ?Hydrator\Operation\Admin\Keys $operation🌀Admin🌀Keys = null;
    private ?Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Mapping $operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping = null;
    private ?Hydrator\Operation\Admin\Ldap\Teams\CbTeamIdRcb\Sync $operation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync = null;
    private ?Hydrator\Operation\Admin\Ldap\Users\CbUsernameRcb\Mapping $operation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping = null;
    private ?Hydrator\Operation\Admin\Organizations $operation🌀Admin🌀Organizations = null;
    private ?Hydrator\Operation\Admin\Organizations\CbOrgRcb $operation🌀Admin🌀Organizations🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments $operation🌀Admin🌀PreReceiveEnvironments = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads = null;
    private ?Hydrator\Operation\Admin\PreReceiveHooks $operation🌀Admin🌀PreReceiveHooks = null;
    private ?Hydrator\Operation\Admin\Tokens $operation🌀Admin🌀Tokens = null;
    private ?Hydrator\Operation\App $operation🌀App = null;
    private ?Hydrator\Operation\AppManifests\CbCodeRcb\Conversions $operation🌀AppManifests🌀CbCodeRcb🌀Conversions = null;
    private ?Hydrator\Operation\App\Hook\Config $operation🌀App🌀Hook🌀Config = null;
    private ?Hydrator\Operation\App\Installations $operation🌀App🌀Installations = null;
    private ?Hydrator\Operation\App\Installations\CbInstallationIdRcb $operation🌀App🌀Installations🌀CbInstallationIdRcb = null;
    private ?Hydrator\Operation\App\Installations\CbInstallationIdRcb\AccessTokens $operation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens = null;
    private ?Hydrator\Operation\Applications\Grants $operation🌀Applications🌀Grants = null;
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb $operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb = null;
    private ?Hydrator\Operation\CodesOfConduct $operation🌀CodesOfConduct = null;
    private ?Hydrator\Operation\Emojis $operation🌀Emojis = null;
    private ?Hydrator\Operation\Enterprise\Announcement $operation🌀Enterprise🌀Announcement = null;
    private ?Hydrator\Operation\Enterprise\Settings\License $operation🌀Enterprise🌀Settings🌀License = null;
    private ?Hydrator\Operation\Enterprise\Stats\All $operation🌀Enterprise🌀Stats🌀All = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken = null;
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
    private ?Hydrator\Operation\Meta $operation🌀Meta = null;
    private ?Hydrator\Operation\Notifications $operation🌀Notifications = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription $operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb $operation🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks $operation🌀Orgs🌀CbOrgRcb🌀Hooks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Installations $operation🌀Orgs🌀CbOrgRcb🌀Installations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\PreReceiveHooks $operation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Projects = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb\Permission $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\BranchesDashWhereDashHead $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbCommitShaRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\CheckSuites $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Status $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb\Attachments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Blobs\CbFileShaRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Commits $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\MatchingRefs\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Hooks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Events $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Labels $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues\CbIssueNumberRcb\Timeline $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Keys $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Languages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\License $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Merge $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\RequestedReviewers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews\CbReviewIdRcb\Comments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Readme $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases = null;
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
    private ?Hydrator\Operation\Setup\Api\Configcheck $operation🌀Setup🌀Api🌀Configcheck = null;
    private ?Hydrator\Operation\Setup\Api\Maintenance $operation🌀Setup🌀Api🌀Maintenance = null;
    private ?Hydrator\Operation\Setup\Api\Settings $operation🌀Setup🌀Api🌀Settings = null;
    private ?Hydrator\Operation\Setup\Api\Settings\AuthorizedKeys $operation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys = null;
    private ?Hydrator\Operation\User $operation🌀User = null;
    private ?Hydrator\Operation\User\Emails $operation🌀User🌀Emails = null;
    private ?Hydrator\Operation\User\GpgKeys $operation🌀User🌀GpgKeys = null;
    private ?Hydrator\Operation\User\Installations\CbInstallationIdRcb\Repositories $operation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\User\Keys $operation🌀User🌀Keys = null;
    private ?Hydrator\Operation\User\Starred $operation🌀User🌀Starred = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Hovercard $operation🌀Users🌀CbUsernameRcb🌀Hovercard = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Keys $operation🌀Users🌀CbUsernameRcb🌀Keys = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Starred $operation🌀Users🌀CbUsernameRcb🌀Starred = null;
    public function hydrateObject(string $className, array $payload) : object
    {
        return match ($className) {
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Meta\\Root\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingTeam' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\SyncLdapMappingForTeam\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser\\Plan' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironmentDownloadStatus' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\ScriptRepository' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveHooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScopedInstallation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BasicError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Installation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Enterprise' => $this->getObjectMapperOperation🌀App🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\GetInstallation\\Response\\Applicationjson\\H415' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant' => $this->getObjectMapperOperation🌀Applications🌀Grants()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\CheckAuthorization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseRepositoryOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseHookOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePageOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOrganizationOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseUserOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePullRequestOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseIssueOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseMilestoneOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseGistOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Runner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReactionRollup', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload\\Pages', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListPublicEvents\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gitignore\\GetAllTemplates\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgPreReceiveHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConductSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Author' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListJobsForWorkflowRun\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Verification', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredConversationResolution' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRuleSummary', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRule' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimError' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Link' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentReferenceAttachment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Page', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryPreReceiveHook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineReviewedEvent\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineReviewedEvent\\Links\\Html' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity\\Weeks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit\\Author' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem\\Labels' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepoSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus\\Progress' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus\\ConnectionServices' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Avatar', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Customer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubSsl', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Reconciliation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Profile', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Cas', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Saml', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubOauth', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Smtp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ntp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Snmp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Syslog', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Collectd', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Mapping' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SshKey' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Emails()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Subkeys' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->hydrateObject($className, $payload),
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
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Meta\\Root\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingTeam' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Mapping()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\SyncLdapMappingForTeam\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Teams🌀CbTeamIdRcb🌀Sync()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LdapMappingUser\\Plan' => $this->getObjectMapperOperation🌀Admin🌀Ldap🌀Users🌀CbUsernameRcb🌀Mapping()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveEnvironmentDownloadStatus' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PreReceiveHook\\ScriptRepository' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveHooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScopedInstallation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BasicError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Installation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Enterprise' => $this->getObjectMapperOperation🌀App🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\GetInstallation\\Response\\Applicationjson\\H415' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Repository\\TemplateRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApplicationGrant' => $this->getObjectMapperOperation🌀Applications🌀Grants()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\CheckAuthorization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseRepositoryOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseHookOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePageOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseOrganizationOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseUserOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterprisePullRequestOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseIssueOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseMilestoneOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseGistOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Runner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Actor', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Milestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReactionRollup', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Event\\Payload\\Pages', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListPublicEvents\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Gitignore\\GetAllTemplates\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoAccessToSelfHostedRunnerGroupInOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\OrgPreReceiveHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀PreReceiveHooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeOfConductSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommit\\Author' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListJobsForWorkflowRun\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitUser', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Verification', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ProtectedBranch\\RequiredConversationResolution' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRuleSummary', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlert', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAlertRule' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ScimError' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Link' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentReferenceAttachment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Page', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositoryPreReceiveHook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequest\\Base\\Repo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineReviewedEvent\\Links', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TimelineReviewedEvent\\Links\\Html' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Release', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ContributorActivity\\Weeks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\CommitSearchResultItem\\Commit\\Author' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\IssueSearchResultItem\\Labels' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\RepoSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\TopicSearchResultItem\\Related\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\ConfigurationStatus\\Progress' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Configcheck()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\MaintenanceStatus\\ConnectionServices' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Maintenance()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Avatar', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Customer', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\License', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubSsl', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Reconciliation', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ldap\\Profile', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Cas', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Saml', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\GithubOauth', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Smtp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Ntp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Snmp', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Syslog', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Collectd', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\EnterpriseSettings\\Enterprise\\Mapping' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\SshKey' => $this->getObjectMapperOperation🌀Setup🌀Api🌀Settings🌀AuthorizedKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Emails()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\GpgKey\\Subkeys' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubEnterprise\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubEnterprise\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->serializeObject($object),
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
    public function getObjectMapperOperation🌀Admin🌀PreReceiveHooks() : Hydrator\Operation\Admin\PreReceiveHooks
    {
        if ($this->operation🌀Admin🌀PreReceiveHooks instanceof Hydrator\Operation\Admin\PreReceiveHooks === false) {
            $this->operation🌀Admin🌀PreReceiveHooks = new Hydrator\Operation\Admin\PreReceiveHooks();
        }
        return $this->operation🌀Admin🌀PreReceiveHooks;
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
    public function getObjectMapperOperation🌀Applications🌀Grants() : Hydrator\Operation\Applications\Grants
    {
        if ($this->operation🌀Applications🌀Grants instanceof Hydrator\Operation\Applications\Grants === false) {
            $this->operation🌀Applications🌀Grants = new Hydrator\Operation\Applications\Grants();
        }
        return $this->operation🌀Applications🌀Grants;
    }
    public function getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb() : Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb
    {
        if ($this->operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb instanceof Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb === false) {
            $this->operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb = new Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb();
        }
        return $this->operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects() : Hydrator\Operation\Orgs\CbOrgRcb\Projects
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Projects instanceof Hydrator\Operation\Orgs\CbOrgRcb\Projects === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Projects = new Hydrator\Operation\Orgs\CbOrgRcb\Projects();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Projects;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb\Attachments
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb\Attachments === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\ContentReferences\CbContentReferenceIdRcb\Attachments();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀ContentReferences🌀CbContentReferenceIdRcb🌀Attachments;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\PreReceiveHooks();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀PreReceiveHooks;
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
    public function getObjectMapperOperation🌀Setup🌀Api🌀Configcheck() : Hydrator\Operation\Setup\Api\Configcheck
    {
        if ($this->operation🌀Setup🌀Api🌀Configcheck instanceof Hydrator\Operation\Setup\Api\Configcheck === false) {
            $this->operation🌀Setup🌀Api🌀Configcheck = new Hydrator\Operation\Setup\Api\Configcheck();
        }
        return $this->operation🌀Setup🌀Api🌀Configcheck;
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
}
