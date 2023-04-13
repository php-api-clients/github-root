<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHubAE;

use ApiClients\Client\GitHubAE\Error as ErrorSchemas;
use ApiClients\Client\GitHubAE\Hydrator;
use ApiClients\Client\GitHubAE\Operation;
use ApiClients\Client\GitHubAE\Schema;
use ApiClients\Client\GitHubAE\WebHook;
final class Hydrators implements \EventSauce\ObjectHydrator\ObjectMapper
{
    private ?Hydrator\Operation\Root $operation🌀Root = null;
    private ?Hydrator\Operation\Admin\Hooks $operation🌀Admin🌀Hooks = null;
    private ?Hydrator\Operation\Admin\Hooks\CbHookIdRcb $operation🌀Admin🌀Hooks🌀CbHookIdRcb = null;
    private ?Hydrator\Operation\Admin\Hooks\CbHookIdRcb\Pings $operation🌀Admin🌀Hooks🌀CbHookIdRcb🌀Pings = null;
    private ?Hydrator\Operation\Admin\Keys $operation🌀Admin🌀Keys = null;
    private ?Hydrator\Operation\Admin\Keys\CbKeyIdsRcb $operation🌀Admin🌀Keys🌀CbKeyIdsRcb = null;
    private ?Hydrator\Operation\Admin\Organizations $operation🌀Admin🌀Organizations = null;
    private ?Hydrator\Operation\Admin\Organizations\CbOrgRcb $operation🌀Admin🌀Organizations🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Admin\PreReceiveEnvironments $operation🌀Admin🌀PreReceiveEnvironments = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads = null;
    private ?Hydrator\Operation\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads\Latest $operation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads🌀Latest = null;
    private ?Hydrator\Operation\Admin\Tokens $operation🌀Admin🌀Tokens = null;
    private ?Hydrator\Operation\Admin\Tokens\CbTokenIdRcb $operation🌀Admin🌀Tokens🌀CbTokenIdRcb = null;
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
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Grant $operation🌀Applications🌀CbClientIdRcb🌀Grant = null;
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Token $operation🌀Applications🌀CbClientIdRcb🌀Token = null;
    private ?Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb $operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb = null;
    private ?Hydrator\Operation\Apps\CbAppSlugRcb $operation🌀Apps🌀CbAppSlugRcb = null;
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
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations\CbOrgIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations🌀CbOrgIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Permissions\SelectedActions $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerGroups $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\Downloads $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RegistrationToken $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\RemoveToken $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RemoveToken = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\AuditLog $operation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = null;
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
    private ?Hydrator\Operation\Notifications $operation🌀Notifications = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb $operation🌀Notifications🌀Threads🌀CbThreadIdRcb = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription $operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = null;
    private ?Hydrator\Operation\Octocat $operation🌀Octocat = null;
    private ?Hydrator\Operation\Organizations $operation🌀Organizations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb $operation🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories\CbRepositoryIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories🌀CbRepositoryIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerGroups $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RunnerDashGroups\CbRunnerGroupIdRcb\Runners\CbRunnerIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RemoveToken $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RemoveToken = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories\CbRepositoryIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories🌀CbRepositoryIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\AuditLog $operation🌀Orgs🌀CbOrgRcb🌀AuditLog = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts $operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = null;
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
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Projects = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Repos $operation🌀Orgs🌀CbOrgRcb🌀Repos = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb\Logs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb🌀Logs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\OrganizationSecrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀OrganizationSecrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\Downloads $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RegistrationToken $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\RemoveToken $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀RemoveToken = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Artifacts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Logs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Logs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Cancel $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Cancel = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Logs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Logs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\PublicKey $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Disable $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Disable = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Dispatches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Dispatches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Enable $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Enable = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Latest $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Latest = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags\CbTagRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Tags🌀CbTagRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Assets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Assets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\CbReleaseIdRcb\Reactions\CbReactionIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀CbReleaseIdRcb🌀Reactions🌀CbReactionIdRcb = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Tarball\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tarball🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Teams $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Teams = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Topics $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Transfer $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Transfer = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Zipball\CbRefRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Zipball🌀CbRefRcb = null;
    private ?Hydrator\Operation\Repos\CbTemplateOwnerRcb\CbTemplateRepoRcb\Generate $operation🌀Repos🌀CbTemplateOwnerRcb🌀CbTemplateRepoRcb🌀Generate = null;
    private ?Hydrator\Operation\Search\Code $operation🌀Search🌀Code = null;
    private ?Hydrator\Operation\Search\Commits $operation🌀Search🌀Commits = null;
    private ?Hydrator\Operation\Search\Issues $operation🌀Search🌀Issues = null;
    private ?Hydrator\Operation\Search\Labels $operation🌀Search🌀Labels = null;
    private ?Hydrator\Operation\Search\Repositories $operation🌀Search🌀Repositories = null;
    private ?Hydrator\Operation\Search\Topics $operation🌀Search🌀Topics = null;
    private ?Hydrator\Operation\Search\Users $operation🌀Search🌀Users = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb $operation🌀Teams🌀CbTeamIdRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions $operation🌀Teams🌀CbTeamIdRcb🌀Discussions = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Discussions\CbDiscussionNumberRcb\Comments\CbCommentNumberRcb $operation🌀Teams🌀CbTeamIdRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Members $operation🌀Teams🌀CbTeamIdRcb🌀Members = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Members\CbUsernameRcb $operation🌀Teams🌀CbTeamIdRcb🌀Members🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Memberships\CbUsernameRcb $operation🌀Teams🌀CbTeamIdRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Projects $operation🌀Teams🌀CbTeamIdRcb🌀Projects = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb $operation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Repos $operation🌀Teams🌀CbTeamIdRcb🌀Repos = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Teams🌀CbTeamIdRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Teams\CbTeamIdRcb\Teams $operation🌀Teams🌀CbTeamIdRcb🌀Teams = null;
    private ?Hydrator\Operation\User $operation🌀User = null;
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
    private ?Hydrator\Operation\User\Repos $operation🌀User🌀Repos = null;
    private ?Hydrator\Operation\User\RepositoryInvitations $operation🌀User🌀RepositoryInvitations = null;
    private ?Hydrator\Operation\User\RepositoryInvitations\CbInvitationIdRcb $operation🌀User🌀RepositoryInvitations🌀CbInvitationIdRcb = null;
    private ?Hydrator\Operation\User\Starred $operation🌀User🌀Starred = null;
    private ?Hydrator\Operation\User\Starred\CbOwnerRcb\CbRepoRcb $operation🌀User🌀Starred🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\User\Subscriptions $operation🌀User🌀Subscriptions = null;
    private ?Hydrator\Operation\User\Teams $operation🌀User🌀Teams = null;
    private ?Hydrator\Operation\Users $operation🌀Users = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb $operation🌀Users🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Events $operation🌀Users🌀CbUsernameRcb🌀Events = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Events\Orgs\CbOrgRcb $operation🌀Users🌀CbUsernameRcb🌀Events🌀Orgs🌀CbOrgRcb = null;
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
    private ?Hydrator\Operation\Users\CbUsernameRcb\Repos $operation🌀Users🌀CbUsernameRcb🌀Repos = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Starred $operation🌀Users🌀CbUsernameRcb🌀Starred = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Subscriptions $operation🌀Users🌀CbUsernameRcb🌀Subscriptions = null;
    private ?Hydrator\Operation\Users\CbUsernameRcb\Suspended $operation🌀Users🌀CbUsernameRcb🌀Suspended = null;
    private ?Hydrator\Operation\Zen $operation🌀Zen = null;
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
    private ?Hydrator\WebHook\ProjectsV2 $webHook🪝ProjectsV2 = null;
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
    private ?Hydrator\WebHook\SecretScanningAlert $webHook🪝SecretScanningAlert = null;
    private ?Hydrator\WebHook\SecretScanningAlertLocation $webHook🪝SecretScanningAlertLocation = null;
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
            'ApiClients\\Client\\GitHubAE\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook', 'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook2', 'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironment', 'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironmentDownloadStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Authorization', 'ApiClients\\Client\\GitHubAE\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubAE\\Schema\\ScopedInstallation', 'ApiClients\\Client\\GitHubAE\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Integration', 'ApiClients\\Client\\GitHubAE\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubAE\\Schema\\BasicError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubAE\\Schema\\ScimError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery', 'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery\\Request', 'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery\\Response' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Permissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseRepositoryOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseHookOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePageOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOrganizationOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseUserOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePullRequestOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseIssueOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseMilestoneOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseGistOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Runner', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent', 'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent\\ActorLocation' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSecretScanningAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Feed', 'ApiClients\\Client\\GitHubAE\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubAE\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubAE\\Schema\\PublicUser\\Plan', 'ApiClients\\Client\\GitHubAE\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubAE\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\GistCommit\\ChangeStatus' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gitignore\\GetAllTemplates\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Markdown\\Render\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Markdown\\RenderRaw\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown🌀Raw()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ApiOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\ApiOverview\\SshKeyFingerprints' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Meta\\GetOctocat\\Response\\ApplicationoctocatStream\\H200' => $this->getObjectMapperOperation🌀Octocat()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningOrganizationAlertItems', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertRule', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup', 'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup\\Teams', 'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup\\Members' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroups', 'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroups\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubAE\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubAE\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\Applicationjson\\H202', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamFull', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamOrganization', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveColumn\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\Delete\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\Update\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubAE\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConductSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\SecretScanning', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\Delete\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Artifact', 'ApiClients\\Client\\GitHubAE\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Job', 'ApiClients\\Client\\GitHubAE\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoOrganizationSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀OrganizationSecrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\ReferencedWorkflow', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRunArtifacts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListJobsForWorkflowRun\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Macos', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Macos\\JobRuns', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Windows', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Windows\\JobRuns' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable\\Ubuntu', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable\\Macos', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Users', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\AllowForcePushes', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\AllowDeletions', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\BlockCreations', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\GitUser', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\Verification', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubAE\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubAE\\Schema\\StatusCheckPolicy\\Checks', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredSignatures', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\AllowForcePushes', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\AllowDeletions', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\BlockCreations' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetAllStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\SetStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\AddStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\RemoveStatusCheckContexts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertRuleSummary' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\CodeScanning\\GetAnalysis\\Response\\ApplicationjsonPlusSarif\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeownersErrors', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeownersErrors\\Errors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubAE\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Reactions\\CreateForCommitComment\\Response\\Applicationjson\\H415' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\Link', 'ApiClients\\Client\\GitHubAE\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\CreateDeployment\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Environment', 'ApiClients\\Client\\GitHubAE\\Schema\\Environment\\ProtectionRules', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Event', 'ApiClients\\Client\\GitHubAE\\Schema\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubAE\\Schema\\Event\\Payload\\Pages' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitRef', 'ApiClients\\Client\\GitHubAE\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTag', 'ApiClients\\Client\\GitHubAE\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubAE\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTree', 'ApiClients\\Client\\GitHubAE\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubAE\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\EnableLfsForRepo\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseContent', 'ApiClients\\Client\\GitHubAE\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Page', 'ApiClients\\Client\\GitHubAE\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubAE\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMergeResult', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H405', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H409' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Pulls\\UpdateBranch\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentFile', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocation', 'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocationCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitActivity', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCommitActivityStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubAE\\Schema\\ContributorActivity\\Weeks', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetContributorsStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\Tag\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubAE\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Parents' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueSearchResultItem\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueSearchResultItem\\PullRequest' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RepoSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\RepoSearchResultItem\\Permissions' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Related\\TopicRelation', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Aliases', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Aliases\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\PrivateUser', 'ApiClients\\Client\\GitHubAE\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey\\Subkeys', 'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey\\Subkeys\\Emails' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Users\\GetByUsername\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubAE\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Meta\\GetZen\\Response\\Textplain\\H200' => $this->getObjectMapperOperation🌀Zen()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\Enterprise', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleDeleted\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorsOnly', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedDismissalActorsOnly', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecks', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecksEnforcementLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Rule' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head\\Repo' => $this->getObjectMapperWebHook🪝CheckSuite()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Tool' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment\\User' => $this->getObjectMapperWebHook🪝CommitComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertAutoDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert\\Dependency', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReintroduced' => $this->getObjectMapperWebHook🪝DependabotAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyDeleted\\Key' => $this->getObjectMapperWebHook🪝DeployKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentStatus()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered\\OldAnswer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Comment\\User' => $this->getObjectMapperWebHook🪝DiscussionComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee\\Permissions' => $this->getObjectMapperWebHook🪝Fork()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🪝Gollum()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated\\Requester', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationDeleted\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationNewPermissionsAccepted\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationSuspend\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationUnsuspend', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationUnsuspend\\Repositories' => $this->getObjectMapperWebHook🪝Installation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\Requester', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved\\Requester' => $this->getObjectMapperWebHook🪝InstallationRepositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Slug' => $this->getObjectMapperWebHook🪝InstallationTarget()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\User' => $this->getObjectMapperWebHook🪝IssueComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\User' => $this->getObjectMapperWebHook🪝Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelCreated\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelDeleted\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Label' => $this->getObjectMapperWebHook🪝Label()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberRemoved\\Member' => $this->getObjectMapperWebHook🪝Member()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Sender', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Sender', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Membership()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened\\Milestone\\Creator' => $this->getObjectMapperWebHook🪝Milestone()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted\\Membership\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded\\Membership\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\Invitation\\Inviter', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved\\Membership\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Membership\\User' => $this->getObjectMapperWebHook🪝Organization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\Registry' => $this->getObjectMapperWebHook🪝Package()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build\\Error', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build\\Pusher' => $this->getObjectMapperWebHook🪝PageBuild()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\Changes\\Note', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened\\Project\\Creator' => $this->getObjectMapperWebHook🪝Project()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnDeleted\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnMoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnMoved\\ProjectColumn' => $this->getObjectMapperWebHook🪝ProjectColumn()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\ShortDescription', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🪝ProjectsV2()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Ref', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Sha', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequest()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\User' => $this->getObjectMapperWebHook🪝PullRequestReview()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Pusher', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository\\Permissions' => $this->getObjectMapperWebHook🪝Push()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release\\Author' => $this->getObjectMapperWebHook🪝RegistryPackage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Reactions' => $this->getObjectMapperWebHook🪝Release()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\DefaultBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Homepage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Tier' => $this->getObjectMapperWebHook🪝Sponsorship()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🪝Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd\\Team\\Parent_' => $this->getObjectMapperWebHook🪝TeamAdd()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\NotificationSetting', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Team()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserCreated\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserDeleted\\User' => $this->getObjectMapperWebHook🪝User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🪝WorkflowJob()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝WorkflowRun()->hydrateObject($className, $payload),
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
            'ApiClients\\Client\\GitHubAE\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook', 'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook2', 'ApiClients\\Client\\GitHubAE\\Schema\\GlobalHook2\\Config' => $this->getObjectMapperOperation🌀Admin🌀Hooks🌀CbHookIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PublicKeyFull' => $this->getObjectMapperOperation🌀Admin🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Admin🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdateOrgName\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Admin🌀Organizations🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironment', 'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironment\\Download' => $this->getObjectMapperOperation🌀Admin🌀PreReceiveEnvironments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\DeletePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\UpdatePreReceiveEnvironment\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PreReceiveEnvironmentDownloadStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownload\\Response\\Applicationjson\\H422\\Errors', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\StartPreReceiveEnvironmentDownloadStreaming\\Response\\Applicationjson\\H422\\Errors' => $this->getObjectMapperOperation🌀Admin🌀PreDashReceiveDashEnvironments🌀CbPreReceiveEnvironmentIdRcb🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Authorization', 'ApiClients\\Client\\GitHubAE\\Schema\\Authorization\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleUser', 'ApiClients\\Client\\GitHubAE\\Schema\\ScopedInstallation', 'ApiClients\\Client\\GitHubAE\\Schema\\AppPermissions' => $this->getObjectMapperOperation🌀Admin🌀Tokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Integration', 'ApiClients\\Client\\GitHubAE\\Schema\\Integration\\Permissions' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubAE\\Schema\\BasicError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHubAE\\Schema\\ScimError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError', 'ApiClients\\Client\\GitHubAE\\Schema\\ValidationError\\Errors' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery', 'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery\\Request', 'ApiClients\\Client\\GitHubAE\\Schema\\HookDelivery\\Response' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\InstallationToken', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\LicenseSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\Repository\\TemplateRepository\\Permissions' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Announcement' => $this->getObjectMapperOperation🌀Enterprise🌀Announcement()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseInfo' => $this->getObjectMapperOperation🌀Enterprise🌀Settings🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseRepositoryOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseHookOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePageOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseOrganizationOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseUserOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterprisePullRequestOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseIssueOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseMilestoneOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseGistOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\EnterpriseCommentOverview' => $this->getObjectMapperOperation🌀Enterprise🌀Stats🌀All()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsEnterprisePermissions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelectedOrganizationsEnabledGithubActionsEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnerGroupsForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsEnterprise' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersInGroupForEnterprise\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Runner', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerLabel' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀RunnerDashGroups🌀CbRunnerGroupIdRcb🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\EnterpriseAdmin\\ListSelfHostedRunnersForEnterprise\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent', 'ApiClients\\Client\\GitHubAE\\Schema\\AuditLogEvent\\ActorLocation' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀AuditLog()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationSecretScanningAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Feed', 'ApiClients\\Client\\GitHubAE\\Schema\\Feed\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\LinkWithType' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BaseGist', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple\\Forks', 'ApiClients\\Client\\GitHubAE\\Schema\\PublicUser', 'ApiClients\\Client\\GitHubAE\\Schema\\PublicUser\\Plan', 'ApiClients\\Client\\GitHubAE\\Schema\\GistHistory', 'ApiClients\\Client\\GitHubAE\\Schema\\GistHistory\\ChangeStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\GistSimple\\ForkOf' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403\\Block' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GistCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\GistCommit\\ChangeStatus' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Gitignore\\GetAllTemplates\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\ReactionRollup' => $this->getObjectMapperOperation🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Markdown\\Render\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Markdown\\RenderRaw\\Response\\Texthtml\\H200' => $this->getObjectMapperOperation🌀Markdown🌀Raw()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ApiOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\ApiOverview\\SshKeyFingerprints' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\Thread\\Subject', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Meta\\GetOctocat\\Response\\ApplicationoctocatStream\\H200' => $this->getObjectMapperOperation🌀Octocat()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationFull\\Plan', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnerGroupsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RunnerGroupsOrg' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RunnerGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningOrganizationAlertItems', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertRule', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysisTool', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertLocation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup', 'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup\\Teams', 'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroup\\Members' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalDashGroup🌀CbGroupIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroups', 'ApiClients\\Client\\GitHubAE\\Schema\\ExternalGroups\\Groups' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀ExternalGroups()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgHook', 'ApiClients\\Client\\GitHubAE\\Schema\\OrgHook\\Config' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\OrgMembership', 'ApiClients\\Client\\GitHubAE\\Schema\\OrgMembership\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\ConvertMemberToOutsideCollaborator\\Response\\Applicationjson\\H202', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\Team\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamFull', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamOrganization', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamOrganization\\Plan' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamProject', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamProject\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsInOrg\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects🌀CbProjectIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TeamRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\TeamRepository\\Permissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403\\Errors', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H422', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\CreateCard\\Response\\Applicationjson\\H503\\Errors' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Cards()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\MoveColumn\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\Delete\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Projects\\Update\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RateLimitOverview', 'ApiClients\\Client\\GitHubAE\\Schema\\RateLimitOverview\\Resources', 'ApiClients\\Client\\GitHubAE\\Schema\\RateLimit' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeOfConductSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\SecretScanning', 'ApiClients\\Client\\GitHubAE\\Schema\\SecurityAndAnalysis\\SecretScanningPushProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\Delete\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Artifact', 'ApiClients\\Client\\GitHubAE\\Schema\\Artifact\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Job', 'ApiClients\\Client\\GitHubAE\\Schema\\Job\\Steps' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoOrganizationSecrets\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀OrganizationSecrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRunsForRepo\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\ReferencedWorkflow', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMinimal\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommit\\Committer' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRunArtifacts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListJobsForWorkflowRun\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Ubuntu\\JobRuns', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Macos', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Macos\\JobRuns', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Windows', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowRunUsage\\Billable\\Windows\\JobRuns' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Actions\\ListWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable\\Ubuntu', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable\\Macos', 'ApiClients\\Client\\GitHubAE\\Schema\\WorkflowUsage\\Billable\\Windows' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchRequiredStatusCheck', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchRequiredStatusCheck\\Checks', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchAdminEnforced', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview\\DismissalRestrictions', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranchPullRequestReview\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Users', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Teams', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Apps', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Apps\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchRestrictionPolicy\\Apps\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\AllowForcePushes', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\AllowDeletions', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\BlockCreations', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchProtection\\RequiredSignatures' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchWithProtection', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\GitUser', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\Verification', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Parents', 'ApiClients\\Client\\GitHubAE\\Schema\\Commit\\Stats', 'ApiClients\\Client\\GitHubAE\\Schema\\DiffEntry', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchWithProtection\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\StatusCheckPolicy', 'ApiClients\\Client\\GitHubAE\\Schema\\StatusCheckPolicy\\Checks', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredPullRequestReviews', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\DismissalRestrictions', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredPullRequestReviews\\BypassPullRequestAllowances', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredSignatures', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\EnforceAdmins', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredLinearHistory', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\AllowForcePushes', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\AllowDeletions', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\RequiredConversationResolution', 'ApiClients\\Client\\GitHubAE\\Schema\\ProtectedBranch\\BlockCreations' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetAllStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\SetStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\AddStatusCheckContexts\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\RemoveStatusCheckContexts\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks🌀Contexts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun\\Output', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRun\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference\\Preferences', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckSuitePreference\\Preferences\\AutoTriggerChecks' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertItems', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlertRuleSummary' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\CodeScanning\\GetAnalysis\\Response\\ApplicationjsonPlusSarif\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CodeownersErrors', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeownersErrors\\Errors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Collaborator', 'ApiClients\\Client\\GitHubAE\\Schema\\Collaborator\\Permissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Reactions\\CreateForCommitComment\\Response\\Applicationjson\\H415' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments🌀CbCommentIdRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\BranchShort', 'ApiClients\\Client\\GitHubAE\\Schema\\BranchShort\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestSimple\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\Link', 'ApiClients\\Client\\GitHubAE\\Schema\\AutoMerge' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CombinedCommitStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree\\Entries', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree\\Entries\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentTree\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Content', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Content\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Parents', 'ApiClients\\Client\\GitHubAE\\Schema\\FileCommit\\Commit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\CreateDeployment\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Environment', 'ApiClients\\Client\\GitHubAE\\Schema\\Environment\\ProtectionRules', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentBranchPolicySettings' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Event', 'ApiClients\\Client\\GitHubAE\\Schema\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\Event\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\Event\\Payload', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueComment', 'ApiClients\\Client\\GitHubAE\\Schema\\Event\\Payload\\Pages' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Parents', 'ApiClients\\Client\\GitHubAE\\Schema\\GitCommit\\Verification' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitRef', 'ApiClients\\Client\\GitHubAE\\Schema\\GitRef\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTag', 'ApiClients\\Client\\GitHubAE\\Schema\\GitTag\\Tagger', 'ApiClients\\Client\\GitHubAE\\Schema\\GitTag\\Object_' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GitTree', 'ApiClients\\Client\\GitHubAE\\Schema\\GitTree\\Tree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\Hook\\Config', 'ApiClients\\Client\\GitHubAE\\Schema\\HookResponse' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\RedeliverWebhookDelivery\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks🌀CbHookIdRcb🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEvent', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventLabel', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventDismissedReview', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventMilestone', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventRename' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\EnableLfsForRepo\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Lfs()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\LicenseContent', 'ApiClients\\Client\\GitHubAE\\Schema\\LicenseContent\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Page', 'ApiClients\\Client\\GitHubAE\\Schema\\PagesSourceHash', 'ApiClients\\Client\\GitHubAE\\Schema\\PagesHttpsCertificate' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuild\\Error', 'ApiClients\\Client\\GitHubAE\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequest\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewComment\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestMergeResult', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H405', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Pulls\\Merge\\Response\\Applicationjson\\H409' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\PullRequestReview\\Links\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\ReviewComment\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Pulls\\UpdateBranch\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀UpdateDashBranch()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContentFile', 'ApiClients\\Client\\GitHubAE\\Schema\\ContentFile\\Links' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocation', 'ApiClients\\Client\\GitHubAE\\Schema\\SecretScanningLocationCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\CommitActivity', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetCommitActivityStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ContributorActivity', 'ApiClients\\Client\\GitHubAE\\Schema\\ContributorActivity\\Weeks', 'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Repos\\GetContributorsStats\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\Tag\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\CodeSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\SearchResultTextMatches', 'ApiClients\\Client\\GitHubAE\\Schema\\SearchResultTextMatches\\Matches' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\CommitSearchResultItem\\Parents' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueSearchResultItem\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\IssueSearchResultItem\\PullRequest' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\LabelSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\RepoSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\RepoSearchResultItem\\Permissions' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Related', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Related\\TopicRelation', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Aliases', 'ApiClients\\Client\\GitHubAE\\Schema\\TopicSearchResultItem\\Aliases\\TopicRelation' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\UserSearchResultItem' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Teams\\AddOrUpdateProjectPermissionsLegacy\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHubAE\\Schema\\PrivateUser', 'ApiClients\\Client\\GitHubAE\\Schema\\PrivateUser\\Plan' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey', 'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey\\Emails', 'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey\\Subkeys', 'ApiClients\\Client\\GitHubAE\\Schema\\GpgKey\\Subkeys\\Emails' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListInstallationsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Users\\GetByUsername\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Hovercard', 'ApiClients\\Client\\GitHubAE\\Schema\\Hovercard\\Contexts' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\Operation\\Meta\\GetZen\\Response\\Textplain\\H200' => $this->getObjectMapperOperation🌀Zen()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\Enterprise', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleDeleted\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorsOnly', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedDismissalActorsOnly', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecks', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\RequiredStatusChecksEnforcementLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookBranchProtectionRuleEdited\\Rule' => $this->getObjectMapperWebHook🪝BranchProtectionRule()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🪝CheckRun()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\PullRequests\\Head\\Repo' => $this->getObjectMapperWebHook🪝CheckSuite()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\DismissedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertFixed\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopened\\Alert\\Tool', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\MostRecentInstance\\Message', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert\\Tool' => $this->getObjectMapperWebHook🪝CodeScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCommitCommentCreated\\Comment\\User' => $this->getObjectMapperWebHook🪝CommitComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🪝Create()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🪝Delete()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertAutoDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlert\\Dependency', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHubAE\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDependabotAlertReintroduced' => $this->getObjectMapperWebHook🪝DependabotAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeployKeyDeleted\\Key' => $this->getObjectMapperWebHook🪝DeployKey()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝DeploymentStatus()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionAnswered\\Answer\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\Discussion\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCreated\\Discussion\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered\\OldAnswer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnanswered\\OldAnswer\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🪝Discussion()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookDiscussionCommentEdited\\Comment\\User' => $this->getObjectMapperWebHook🪝DiscussionComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookFork\\Forkee\\Permissions' => $this->getObjectMapperWebHook🪝Fork()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🪝GithubAppAuthorization()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🪝Gollum()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationCreated\\Requester', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationDeleted\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationNewPermissionsAccepted\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationSuspend\\Repositories', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationUnsuspend', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationUnsuspend\\Repositories' => $this->getObjectMapperWebHook🪝Installation()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesAdded\\Requester', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved\\RepositoriesRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationRepositoriesRemoved\\Requester' => $this->getObjectMapperWebHook🪝InstallationRepositories()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookInstallationTargetRenamed\\Changes\\Slug' => $this->getObjectMapperWebHook🪝InstallationTarget()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentCreated\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssueCommentEdited\\Issue\\User' => $this->getObjectMapperWebHook🪝IssueComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesAssigned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesClosed\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDeleted\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesDemilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesEdited\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesLocked\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesMilestoned\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesOpened\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesPinned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesReopened\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewIssue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesTransferred\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnassigned\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnlocked\\Issue\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookIssuesUnpinned\\Issue\\User' => $this->getObjectMapperWebHook🪝Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelCreated\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelDeleted\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookLabelEdited\\Label' => $this->getObjectMapperWebHook🪝Label()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberAdded\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberEdited\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMemberRemoved\\Member' => $this->getObjectMapperWebHook🪝Member()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Sender', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Member', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Sender', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMembershipRemoved\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Membership()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🪝Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneClosed\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneCreated\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneDeleted\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneEdited\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookMilestoneOpened\\Milestone\\Creator' => $this->getObjectMapperWebHook🪝Milestone()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationDeleted\\Membership\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberAdded\\Membership\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\Invitation\\Inviter', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberInvited\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationMemberRemoved\\Membership\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Changes\\Login', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Membership', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookOrganizationRenamed\\Membership\\User' => $this->getObjectMapperWebHook🪝Organization()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPackageUpdated\\Package\\Registry' => $this->getObjectMapperWebHook🪝Package()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build\\Error', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPageBuild\\Build\\Pusher' => $this->getObjectMapperWebHook🪝PageBuild()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🪝Ping()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\Changes\\Note', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardConverted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardCreated\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardDeleted\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardEdited\\ProjectCard\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🪝ProjectCard()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectClosed\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectCreated\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectDeleted\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectEdited\\Project\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened\\Project', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectReopened\\Project\\Creator' => $this->getObjectMapperWebHook🪝Project()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnDeleted\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnEdited\\ProjectColumn', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnMoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectColumnMoved\\ProjectColumn' => $this->getObjectMapperWebHook🪝ProjectColumn()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\ShortDescription', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🪝ProjectsV2()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🪝Public_()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAssigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Ref', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Base\\Sha', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestEdited\\Changes\\Title', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestLocked\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestMilestoned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\Label', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\MergedBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestUnlocked\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequest()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\Comment\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewComment()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewDismissed\\Review\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewEdited\\Review\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewSubmitted\\Review\\User' => $this->getObjectMapperWebHook🪝PullRequestReview()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Issue', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComment', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\ReviewComments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Links\\Statuses', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignee', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Assignees', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge\\EnabledBy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Base\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\Repo\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Head\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Labels', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\Milestone\\Creator', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\RequestedTeams\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Html', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\PullRequest', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Links\\Self_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread\\Comments\\User' => $this->getObjectMapperWebHook🪝PullRequestReviewThread()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Commits\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Pusher', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookPush\\Repository\\Permissions' => $this->getObjectMapperWebHook🪝Push()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release\\Author' => $this->getObjectMapperWebHook🪝RegistryPackage()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseCreated\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseDeleted\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes\\Body', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseEdited\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePrereleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleasePublished\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseReleased\\Release\\Reactions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Assets', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Assets\\Uploader', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookReleaseUnpublished\\Release\\Reactions' => $this->getObjectMapperWebHook🪝Release()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessDisabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryAnonymousAccessEnabled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\DefaultBranch', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Homepage', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🪝Repository()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookRepositoryDispatchSample' => $this->getObjectMapperWebHook🪝RepositoryDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🪝SecretScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🪝SecretScanningAlertLocation()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From' => $this->getObjectMapperWebHook🪝SecurityAndAnalysis()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipCreated\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipEdited\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingCancellation\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipPendingTierChange\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Changes\\Tier\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Maintainer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Sponsorable', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookSponsorshipTierChanged\\Sponsorship\\Tier' => $this->getObjectMapperWebHook🪝Sponsorship()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🪝Star()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Tree', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🪝Status()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAdd\\Team\\Parent_' => $this->getObjectMapperWebHook🪝TeamAdd()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamAddedToRepository\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamCreated\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamDeleted\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Description', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Name', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\NotificationSetting', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamEdited\\Team\\Parent_', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\License', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Repository\\Permissions', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Team', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookTeamRemovedFromRepository\\Team\\Parent_' => $this->getObjectMapperWebHook🪝Team()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserCreated', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserCreated\\User', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserDeleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookUserDeleted\\User' => $this->getObjectMapperWebHook🪝User()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🪝Watch()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🪝WorkflowDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🪝WorkflowJob()->serializeObject($object),
            'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\TriggeringActor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\Workflow', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Actor', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadCommit\\Committer', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests\\Head\\Repo', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\ReferencedWorkflows', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\Repository\\Owner', 'ApiClients\\Client\\GitHubAE\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\TriggeringActor' => $this->getObjectMapperWebHook🪝WorkflowRun()->serializeObject($object),
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
    public function getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb() : Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb
    {
        if ($this->operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb instanceof Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb === false) {
            $this->operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb = new Hydrator\Operation\Applications\CbClientIdRcb\Tokens\CbAccessTokenRcb();
        }
        return $this->operation🌀Applications🌀CbClientIdRcb🌀Tokens🌀CbAccessTokenRcb;
    }
    public function getObjectMapperOperation🌀Apps🌀CbAppSlugRcb() : Hydrator\Operation\Apps\CbAppSlugRcb
    {
        if ($this->operation🌀Apps🌀CbAppSlugRcb instanceof Hydrator\Operation\Apps\CbAppSlugRcb === false) {
            $this->operation🌀Apps🌀CbAppSlugRcb = new Hydrator\Operation\Apps\CbAppSlugRcb();
        }
        return $this->operation🌀Apps🌀CbAppSlugRcb;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀OrganizationSecrets() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\OrganizationSecrets
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀OrganizationSecrets instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\OrganizationSecrets === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀OrganizationSecrets = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\OrganizationSecrets();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀OrganizationSecrets;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\SelectedActions();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀SelectedActions;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Rerun();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Rerun;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb\Timing();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb🌀Timing;
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
    public function getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Repos() : Hydrator\Operation\Users\CbUsernameRcb\Repos
    {
        if ($this->operation🌀Users🌀CbUsernameRcb🌀Repos instanceof Hydrator\Operation\Users\CbUsernameRcb\Repos === false) {
            $this->operation🌀Users🌀CbUsernameRcb🌀Repos = new Hydrator\Operation\Users\CbUsernameRcb\Repos();
        }
        return $this->operation🌀Users🌀CbUsernameRcb🌀Repos;
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
    public function getObjectMapperWebHook🪝ProjectsV2() : Hydrator\WebHook\ProjectsV2
    {
        if ($this->webHook🪝ProjectsV2 instanceof Hydrator\WebHook\ProjectsV2 === false) {
            $this->webHook🪝ProjectsV2 = new Hydrator\WebHook\ProjectsV2();
        }
        return $this->webHook🪝ProjectsV2;
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
