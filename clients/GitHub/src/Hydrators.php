<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
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
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts = null;
    private ?Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts $operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = null;
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
    private ?Hydrator\Operation\Issues $operation🌀Issues = null;
    private ?Hydrator\Operation\Licenses $operation🌀Licenses = null;
    private ?Hydrator\Operation\Licenses\CbLicenseRcb $operation🌀Licenses🌀CbLicenseRcb = null;
    private ?Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb $operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb = null;
    private ?Hydrator\Operation\MarketplaceListing\Plans $operation🌀MarketplaceListing🌀Plans = null;
    private ?Hydrator\Operation\Meta $operation🌀Meta = null;
    private ?Hydrator\Operation\Notifications $operation🌀Notifications = null;
    private ?Hydrator\Operation\Notifications\Threads\CbThreadIdRcb\Subscription $operation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription = null;
    private ?Hydrator\Operation\Organizations $operation🌀Organizations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb $operation🌀Orgs🌀CbOrgRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\Usage $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Cache\UsageByRepository $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Oidc\Customization\Sub $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\SelectedActions $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Permissions\Workflow $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\Downloads $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\RegistrationToken $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners\CbRunnerIdRcb\Labels $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Secrets\CbSecretNameRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Blocks $operation🌀Orgs🌀CbOrgRcb🌀Blocks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts $operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Codespaces $operation🌀Orgs🌀CbOrgRcb🌀Codespaces = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\PublicKey $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Dependabot\Secrets\CbSecretNameRcb $operation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations $operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Hooks $operation🌀Orgs🌀CbOrgRcb🌀Hooks = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Installations $operation🌀Orgs🌀CbOrgRcb🌀Installations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\InteractionLimits $operation🌀Orgs🌀CbOrgRcb🌀InteractionLimits = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb\Teams $operation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop $operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Memberships\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations $operation🌀Orgs🌀CbOrgRcb🌀Migrations = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repositories $operation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\OutsideCollaborators\CbUsernameRcb $operation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Packages $operation🌀Orgs🌀CbOrgRcb🌀Packages = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions $operation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Projects $operation🌀Orgs🌀CbOrgRcb🌀Projects = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Repos $operation🌀Orgs🌀CbOrgRcb🌀Repos = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers $operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions $operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages $operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages = null;
    private ?Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage $operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage = null;
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
    private ?Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb $operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb = null;
    private ?Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Timing $operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Caches $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Oidc\Customization\Sub $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions\Access $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb\Runs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Approvals $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb\Jobs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\PendingDeployments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Timing $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Sarifs $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Sarifs\CbSarifIdRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codeowners\Errors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Devcontainers $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Machines $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\New_ $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_ = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Community\Profile $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contents\CbPathRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Contributors $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Alerts $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Dependabot\Secrets\CbSecretNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Compare\CbBaseheadRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph\Snapshots $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb = null;
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
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Notifications $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Deployment $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment = null;
    private ?Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pages\Health $operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health = null;
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
    private ?Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb $operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb = null;
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
    private ?Hydrator\WebHook\MarketplacePurchase $webHook🌀MarketplacePurchase = null;
    private ?Hydrator\WebHook\Member $webHook🌀Member = null;
    private ?Hydrator\WebHook\Membership $webHook🌀Membership = null;
    private ?Hydrator\WebHook\MergeGroup $webHook🌀MergeGroup = null;
    private ?Hydrator\WebHook\Meta $webHook🌀Meta = null;
    private ?Hydrator\WebHook\Milestone $webHook🌀Milestone = null;
    private ?Hydrator\WebHook\OrgBlock $webHook🌀OrgBlock = null;
    private ?Hydrator\WebHook\Organization $webHook🌀Organization = null;
    private ?Hydrator\WebHook\Package $webHook🌀Package = null;
    private ?Hydrator\WebHook\PageBuild $webHook🌀PageBuild = null;
    private ?Hydrator\WebHook\Ping $webHook🌀Ping = null;
    private ?Hydrator\WebHook\ProjectCard $webHook🌀ProjectCard = null;
    private ?Hydrator\WebHook\Project $webHook🌀Project = null;
    private ?Hydrator\WebHook\ProjectColumn $webHook🌀ProjectColumn = null;
    private ?Hydrator\WebHook\ProjectsV2 $webHook🌀ProjectsV2 = null;
    private ?Hydrator\WebHook\ProjectsV2Item $webHook🌀ProjectsV2Item = null;
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
    private ?Hydrator\WebHook\RepositoryImport $webHook🌀RepositoryImport = null;
    private ?Hydrator\WebHook\RepositoryVulnerabilityAlert $webHook🌀RepositoryVulnerabilityAlert = null;
    private ?Hydrator\WebHook\SecretScanningAlert $webHook🌀SecretScanningAlert = null;
    private ?Hydrator\WebHook\SecretScanningAlertLocation $webHook🌀SecretScanningAlertLocation = null;
    private ?Hydrator\WebHook\SecurityAdvisory $webHook🌀SecurityAdvisory = null;
    private ?Hydrator\WebHook\SecurityAndAnalysis $webHook🌀SecurityAndAnalysis = null;
    private ?Hydrator\WebHook\Sponsorship $webHook🌀Sponsorship = null;
    private ?Hydrator\WebHook\Star $webHook🌀Star = null;
    private ?Hydrator\WebHook\Status $webHook🌀Status = null;
    private ?Hydrator\WebHook\TeamAdd $webHook🌀TeamAdd = null;
    private ?Hydrator\WebHook\Team $webHook🌀Team = null;
    private ?Hydrator\WebHook\Watch $webHook🌀Watch = null;
    private ?Hydrator\WebHook\WorkflowDispatch $webHook🌀WorkflowDispatch = null;
    private ?Hydrator\WebHook\WorkflowJob $webHook🌀WorkflowJob = null;
    private ?Hydrator\WebHook\WorkflowRun $webHook🌀WorkflowRun = null;
    public function hydrateObject(string $className, array $payload) : object
    {
        return match ($className) {
            'ApiClients\\Client\\GitHub\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Integration' => $this->getObjectMapperOperation🌀App()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHub\\Schema\\BasicError', 'ApiClients\\Client\\GitHub\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHub\\Schema\\ScimError', 'ApiClients\\Client\\GitHub\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\HookDelivery' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Payload' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Authorization' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertWithRepository' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationSecretScanningAlert', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Event' => $this->getObjectMapperOperation🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Feed' => $this->getObjectMapperOperation🌀Feeds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\BaseGist', 'ApiClients\\Client\\GitHub\\Schema\\GistSimple' => $this->getObjectMapperOperation🌀Gists()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Issue' => $this->getObjectMapperOperation🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\LicenseSimple' => $this->getObjectMapperOperation🌀Licenses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\MarketplaceListingPlan' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Plans()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Thread', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Organizations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OidcCustomSub', 'ApiClients\\Client\\GitHub\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRequiredWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\RequiredWorkflow' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListOrgVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Blocks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningOrganizationAlertItems' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListInOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrgHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Interactions\\GetRestrictionsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Team' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Codespace' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OrgMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\MinimalRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PackageVersion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Repository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TeamProject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview' => $this->getObjectMapperOperation🌀RateLimit()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoRequiredWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\RepoRequiredWorkflow' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\FullRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRequiredWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\EnvironmentApprovals' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PendingDeployment', 'ApiClients\\Client\\GitHub\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ShortBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchAdminEnforced' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\StatusCheckPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CheckRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertItems' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Metadata', 'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Collaborator' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\BranchShort' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CommunityProfile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ContentTree', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\FileCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphDiff' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Environment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GitCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GitRef' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GitTag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Hook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PorterLargeFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\IssueEvent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Milestone' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Page' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PageBuild', 'ApiClients\\Client\\GitHub\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\DiffEntry' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\SecretScanningLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ContributorActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ContentTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ReferrerTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Code()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Commits()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Labels()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Topics()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Users()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Email🌀Visibility()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\UserMarketplacePurchase' => $this->getObjectMapperOperation🌀User🌀MarketplacePurchases()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\SocialAccount' => $this->getObjectMapperOperation🌀User🌀SocialAccounts()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Meta\\GetAllVersions\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Versions()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHub\\Schema\\Enterprise', 'ApiClients\\Client\\GitHub\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel' => $this->getObjectMapperWebHook🌀BranchProtectionRule()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\Integration\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHub\\Schema\\DeploymentSimple', 'ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🌀CheckRun()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\ActionsMeta', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App' => $this->getObjectMapperWebHook🌀CheckSuite()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert' => $this->getObjectMapperWebHook🌀CodeScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\Reactions' => $this->getObjectMapperWebHook🌀CommitComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🌀Create()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🌀Delete()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertWithRepository\\Dependency', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🌀DependabotAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🌀DeployKey()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows' => $this->getObjectMapperWebHook🌀Deployment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun' => $this->getObjectMapperWebHook🌀DeploymentStatus()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHub\\Schema\\Discussion', 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🌀Discussion()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes' => $this->getObjectMapperWebHook🌀DiscussionComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee' => $this->getObjectMapperWebHook🌀Fork()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🌀GithubAppAuthorization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHub\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🌀Gollum()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHub\\Schema\\AppPermissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🌀Installation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🌀InstallationRepositories()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes' => $this->getObjectMapperWebHook🌀InstallationTarget()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes\\Body' => $this->getObjectMapperWebHook🌀IssueComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🌀Issues()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Name' => $this->getObjectMapperWebHook🌀Label()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Account', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Account', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased' => $this->getObjectMapperWebHook🌀MarketplacePurchase()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🌀Member()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🌀Membership()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupChecksRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupChecksRequested\\MergeGroup' => $this->getObjectMapperWebHook🌀MergeGroup()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🌀Meta()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🌀Milestone()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockBlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockUnblocked' => $this->getObjectMapperWebHook🌀OrgBlock()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes\\Login' => $this->getObjectMapperWebHook🌀Organization()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata\\Value', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀Package()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHub\\Schema\\PageBuild\\Error' => $this->getObjectMapperWebHook🌀PageBuild()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHub\\Schema\\HookResponse', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🌀Ping()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🌀ProjectCard()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🌀Project()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🌀ProjectColumn()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHub\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🌀ProjectsV2()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', 'ApiClients\\Client\\GitHub\\Schema\\ProjectsV2Item', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored' => $this->getObjectMapperWebHook🌀ProjectsV2Item()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🌀Public_()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestClosed\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestOpened\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head' => $this->getObjectMapperWebHook🌀PullRequest()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReviewComment()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReview()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🌀PullRequestReviewThread()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Pusher' => $this->getObjectMapperWebHook🌀Push()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀RegistryPackage()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release' => $this->getObjectMapperWebHook🌀Release()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🌀Repository()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample\\ClientPayload' => $this->getObjectMapperWebHook🌀RepositoryDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🌀RepositoryImport()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert' => $this->getObjectMapperWebHook🌀RepositoryVulnerabilityAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🌀SecretScanningAlert()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHub\\Schema\\SecretScanningLocationIssueComment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🌀SecretScanningAlertLocation()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory' => $this->getObjectMapperWebHook🌀SecurityAdvisory()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From', 'ApiClients\\Client\\GitHub\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\CodeOfConductSimple' => $this->getObjectMapperWebHook🌀SecurityAndAnalysis()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🌀Sponsorship()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🌀Star()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🌀Status()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🌀TeamAdd()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🌀Team()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🌀Watch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🌀WorkflowDispatch()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🌀WorkflowJob()->hydrateObject($className, $payload),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests' => $this->getObjectMapperWebHook🌀WorkflowRun()->hydrateObject($className, $payload),
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
            'ApiClients\\Client\\GitHub\\Schema\\Root' => $this->getObjectMapperOperation🌀Root()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Integration' => $this->getObjectMapperOperation🌀App()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Apps\\CreateFromManifest\\Response\\Applicationjson\\H201', 'ApiClients\\Client\\GitHub\\Schema\\BasicError', 'ApiClients\\Client\\GitHub\\Schema\\ValidationErrorSimple' => $this->getObjectMapperOperation🌀AppManifests🌀CbCodeRcb🌀Conversions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookConfig' => $this->getObjectMapperOperation🌀App🌀Hook🌀Config()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\HookDeliveryItem', 'ApiClients\\Client\\GitHub\\Schema\\ScimError', 'ApiClients\\Client\\GitHub\\Schema\\ValidationError' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\HookDelivery' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\Payload' => $this->getObjectMapperOperation🌀App🌀Hook🌀Deliveries🌀CbDeliveryIdRcb🌀Attempts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\IntegrationInstallationRequest' => $this->getObjectMapperOperation🌀App🌀InstallationRequests()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Installation' => $this->getObjectMapperOperation🌀App🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\InstallationToken' => $this->getObjectMapperOperation🌀App🌀Installations🌀CbInstallationIdRcb🌀AccessTokens()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Authorization' => $this->getObjectMapperOperation🌀Applications🌀CbClientIdRcb🌀Token()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeOfConduct' => $this->getObjectMapperOperation🌀CodesOfConduct()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Emojis\\Get\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Emojis()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertWithRepository' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationSecretScanningAlert', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\SecretScanning\\ListAlertsForEnterprise\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Event' => $this->getObjectMapperOperation🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Feed' => $this->getObjectMapperOperation🌀Feeds()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\BaseGist', 'ApiClients\\Client\\GitHub\\Schema\\GistSimple' => $this->getObjectMapperOperation🌀Gists()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Gists\\Get\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GistComment' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GistCommit' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Gists\\CheckIsStarred\\Response\\Applicationjson\\H404' => $this->getObjectMapperOperation🌀Gists🌀CbGistIdRcb🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebHookHeader\\UserAgent' => $this->getObjectMapperOperation🌀Gitignore🌀Templates()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GitignoreTemplate' => $this->getObjectMapperOperation🌀Gitignore🌀Templates🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Apps\\ListReposAccessibleToInstallation\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Installation🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Issue' => $this->getObjectMapperOperation🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\LicenseSimple' => $this->getObjectMapperOperation🌀Licenses()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\License' => $this->getObjectMapperOperation🌀Licenses🌀CbLicenseRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\MarketplacePurchase' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\MarketplaceListingPlan' => $this->getObjectMapperOperation🌀MarketplaceListing🌀Plans()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ApiOverview' => $this->getObjectMapperOperation🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Thread', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\MarkNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ThreadSubscription' => $this->getObjectMapperOperation🌀Notifications🌀Threads🌀CbThreadIdRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationSimple' => $this->getObjectMapperOperation🌀Organizations()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationFull', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Orgs\\Update\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageOrgEnterprise' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\GetActionsCacheUsageByRepoForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Cache🌀UsageByRepository()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OidcCustomSub', 'ApiClients\\Client\\GitHub\\Schema\\EmptyObject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsOrganizationPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListSelectedRepositoriesEnabledGithubActionsOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\SelectedActions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀SelectedActions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsGetDefaultWorkflowPermissions' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Permissions🌀Workflow()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRequiredWorkflows\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\RequiredWorkflow' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListSelfHostedRunnersForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\RunnerApplication' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀Downloads()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\AuthenticationToken' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀RegistrationToken()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Runner' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListLabelsForSelfHostedRunnerForOrg\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Runners🌀CbRunnerIdRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListSelectedReposForOrgSecret\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Secrets🌀CbSecretNameRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListOrgVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationActionsVariable' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\SimpleUser' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Blocks()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningOrganizationAlertItems' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListInOrganization\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesOrgSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Dependabot\\ListOrgSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotPublicKey' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationDependabotSecret' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrganizationInvitation' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrgHook' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Orgs\\ListAppInstallations\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Installations()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Interactions\\GetRestrictionsForOrg\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\InteractionLimitResponse' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀InteractionLimits()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Team' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Invitations🌀CbInvitationIdRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Codespace' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OrgMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Migration' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\MinimalRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Orgs\\RemoveOutsideCollaborator\\Response\\Applicationjson\\H422' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀OutsideCollaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Package' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PackageVersion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Project' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Repository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TeamSimple' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PackagesBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CombinedBillingUsage' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TeamFull' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TeamDiscussion' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TeamDiscussionComment' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Reaction' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Discussions🌀CbDiscussionNumberRcb🌀Comments🌀CbCommentNumberRcb🌀Reactions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TeamMembership' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Memberships🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TeamProject' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Projects()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TeamRepository' => $this->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Teams🌀CbTeamSlugRcb🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\DeleteCard\\Response\\Applicationjson\\H403' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H403', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Projects\\MoveCard\\Response\\Applicationjson\\H503' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CbCardIdRcb🌀Moves()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ProjectColumn' => $this->getObjectMapperOperation🌀Projects🌀Columns🌀CbColumnIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ProjectCollaboratorPermission' => $this->getObjectMapperOperation🌀Projects🌀CbProjectIdRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\RateLimitOverview' => $this->getObjectMapperOperation🌀RateLimit()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoRequiredWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\RepoRequiredWorkflow' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WorkflowUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\FullRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListArtifactsForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Artifact' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsCacheUsageByRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsCacheList' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Caches()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Job' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Jobs🌀CbJobIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\OidcCustomSubRepo' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Oidc🌀Customization🌀Sub()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsRepositoryPermissions' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsWorkflowAccessToRepository' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Permissions🌀Access()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRequiredWorkflowRuns\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb🌀Runs()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WorkflowRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\EnvironmentApprovals' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Approvals()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListJobsForWorkflowRunAttempt\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Attempts🌀CbAttemptNumberRcb🌀Jobs()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PendingDeployment', 'ApiClients\\Client\\GitHub\\Schema\\Deployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀PendingDeployments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WorkflowRunUsage' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Runs🌀CbRunIdRcb🌀Timing()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoVariables\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ActionsVariable' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Actions\\ListRepoWorkflows\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Workflow' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Workflows🌀CbWorkflowIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Autolink' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Autolinks()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ShortBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\BranchWithProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\BranchProtection', 'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranch' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchAdminEnforced' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀EnforceAdmins()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ProtectedBranchPullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredPullRequestReviews()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\StatusCheckPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀RequiredStatusChecks()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\BranchRestrictionPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Branches🌀CbBranchRcb🌀Protection🌀Restrictions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CheckRun' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CheckAnnotation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashRuns🌀CbCheckRunIdRcb🌀Annotations()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CheckSuite' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CheckSuitePreference' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckSuites🌀Preferences()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Checks\\ListForSuite\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CheckDashSuites🌀CbCheckSuiteIdRcb🌀CheckDashRuns()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertItems' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Instances()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysis' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Analyses()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Metadata', 'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAnalysisDeletion' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Analyses🌀CbAnalysisIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningCodeqlDatabase' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Codeql🌀Databases()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsReceipt' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeScanning🌀Sarifs()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeScanningSarifsStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀CodeDashScanning🌀Sarifs🌀CbSarifIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodeownersErrors' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codeowners🌀Errors()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListDevcontainersInRepositoryForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Devcontainers()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\RepoMachinesForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Machines()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\PreFlightWithRepoForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀New_()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\RepoCodespacesSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Collaborator' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\RepositoryInvitation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\RepositoryCollaboratorPermission' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Collaborators🌀CbUsernameRcb🌀Permission()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CommitComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Commit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\BranchShort' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀BranchesDashWhereDashHead()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestSimple' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbCommitShaRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Checks\\ListSuitesForRef\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀CheckSuites()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CombinedCommitStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Status' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Commits🌀CbRefRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CommunityProfile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Community🌀Profile()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CommitComparison' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ContentTree', 'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\GetContent\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\FileCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contents🌀CbPathRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Contributor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Dependabot\\ListRepoSecrets\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DependabotSecret' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Dependabot🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphDiff' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Compare🌀CbBaseheadRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\DependencyGraph\\CreateRepositorySnapshot\\Response\\Applicationjson\\H201' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀DependencyGraph🌀Snapshots()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DeploymentStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Deployments🌀CbDeploymentIdRcb🌀Statuses()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\GetAllEnvironments\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Environment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\ListDeploymentBranchPolicies\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\DeploymentBranchPolicy' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Environments🌀CbEnvironmentNameRcb🌀DeploymentDashBranchDashPolicies()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ShortBlob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Blob' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Blobs🌀CbFileShaRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GitCommit' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GitRef' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀MatchingRefs🌀CbRefRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GitTag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GitTree' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Git🌀Trees()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Hook' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Hooks()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Import' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PorterAuthor' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀Authors()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PorterLargeFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import🌀LargeFiles()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\IssueComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\IssueEvent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\IssueEventForIssue' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Events()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Label' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TimelineIssueEvents' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Issues🌀CbIssueNumberRcb🌀Timeline()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DeployKey' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Language' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Languages()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\LicenseContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀License()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\MergedUpstream' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀MergeUpstream()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Milestone' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Milestones()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\MarkRepoNotificationsAsRead\\Response\\Applicationjson\\H202' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Notifications()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Page' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PageBuild', 'ApiClients\\Client\\GitHub\\Schema\\PageBuildStatus' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Builds()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PageDeployment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PagesHealthCheck' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pages🌀Health()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\DiffEntry' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Files()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestMergeResult' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Merge()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestReviewRequest' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀RequestedReviewers()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\PullRequestReview' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ReviewComment' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Pulls🌀CbPullNumberRcb🌀Reviews🌀CbReviewIdRcb🌀Comments()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ContentFile' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Readme()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Release' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀Assets🌀CbAssetIdRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ReleaseNotesContent' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Releases🌀GenerateNotes()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\SecretScanningAlert' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretScanning🌀Alerts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\SecretScanningLocation' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀SecretDashScanning🌀Alerts🌀CbAlertNumberRcb🌀Locations()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\ListStargazersForRepo\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stargazers()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CodeFrequency()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CommitActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀CommitActivity()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ContributorActivity' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Contributors()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ParticipationStats' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Stats🌀Participation()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\RepositorySubscription' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Subscription()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Tag' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\TagProtection' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Tags🌀Protection()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Topic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CloneTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Clones()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ContentTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Paths()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ReferrerTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Popular🌀Referrers()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\ViewTraffic' => $this->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Traffic🌀Views()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Code\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Code()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Commits\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Commits()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\IssuesAndPullRequests\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Labels\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Labels()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Repos\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Topics\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Topics()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Search\\Users\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Search🌀Users()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Users\\GetAuthenticated\\Response\\Applicationjson\\H200', 'ApiClients\\Client\\GitHub\\Schema\\PrivateUser' => $this->getObjectMapperOperation🌀User()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Codespaces\\ListSecretsForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesUserPublicKey' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀PublicKey()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodespacesSecret' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodespaceExportDetails' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Exports()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\CodespaceWithFullRepository' => $this->getObjectMapperOperation🌀User🌀Codespaces🌀CbCodespaceNameRcb🌀Publish()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Email' => $this->getObjectMapperOperation🌀User🌀Email🌀Visibility()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\GpgKey' => $this->getObjectMapperOperation🌀User🌀GpgKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Apps\\ListInstallationReposForAuthenticatedUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀User🌀Installations🌀CbInstallationIdRcb🌀Repositories()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Key' => $this->getObjectMapperOperation🌀User🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\UserMarketplacePurchase' => $this->getObjectMapperOperation🌀User🌀MarketplacePurchases()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\SocialAccount' => $this->getObjectMapperOperation🌀User🌀SocialAccounts()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\SshSigningKey' => $this->getObjectMapperOperation🌀User🌀SshSigningKeys()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\StarredRepository' => $this->getObjectMapperOperation🌀User🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Hovercard' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Hovercard()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\KeySimple' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Keys()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Activity\\ListReposStarredByUser\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Starred()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\Operation\\Meta\\GetAllVersions\\Response\\Applicationjson\\H200' => $this->getObjectMapperOperation🌀Versions()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated', 'ApiClients\\Client\\GitHub\\Schema\\Enterprise', 'ApiClients\\Client\\GitHub\\Schema\\SimpleInstallation', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\Repository\\TemplateRepository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleCreated\\Rule', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AdminEnforced', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\AuthorizedActorNames', 'ApiClients\\Client\\GitHub\\Schema\\WebhookBranchProtectionRuleEdited\\Changes\\LinearHistoryRequirementEnforcementLevel' => $this->getObjectMapperWebHook🌀BranchProtectionRule()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompleted', 'ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\Integration\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\SimpleCheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal', 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal\\Head', 'ApiClients\\Client\\GitHub\\Schema\\PullRequestMinimal\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\MinimalRepository\\License', 'ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis', 'ApiClients\\Client\\GitHub\\Schema\\SecurityAndAnalysis\\AdvancedSecurity', 'ApiClients\\Client\\GitHub\\Schema\\DeploymentSimple', 'ApiClients\\Client\\GitHub\\Schema\\CheckRunWithSimpleCheckSuite\\Output', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCompletedFormEncoded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunCreatedFormEncoded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedAction\\RequestedAction', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRequestedActionFormEncoded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckRunRerequestedFormEncoded' => $this->getObjectMapperWebHook🌀CheckRun()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\ActionsMeta', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App', 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\AnswerChosenBy', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\App\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\HeadCommit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteCompleted\\CheckSuite\\PullRequests\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRequested\\CheckSuite\\App', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\ActionsMeta\\RerunInfo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCheckSuiteRerequested\\CheckSuite\\App' => $this->getObjectMapperWebHook🌀CheckSuite()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\MostRecentInstance\\Location', 'ApiClients\\Client\\GitHub\\Schema\\CodeScanningAlertInstance\\Message', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Rule', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertAppearedInBranch\\Alert\\Tool', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Rule', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertClosedByUser\\Alert\\Tool', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertCreated\\Alert\\Tool', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertFixed\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopened\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCodeScanningAlertReopenedByUser\\Alert' => $this->getObjectMapperWebHook🌀CodeScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookCommitCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\Reactions' => $this->getObjectMapperWebHook🌀CommitComment()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookCreate' => $this->getObjectMapperWebHook🌀Create()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDelete' => $this->getObjectMapperWebHook🌀Delete()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertCreated', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertWithRepository\\Dependency', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertPackage', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityVulnerability\\FirstPatchedVersion', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHub\\Schema\\DependabotAlertSecurityAdvisory\\References', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertDismissed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertFixed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReintroduced', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDependabotAlertReopened' => $this->getObjectMapperWebHook🌀DependabotAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyCreated\\Key', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeployKeyDeleted' => $this->getObjectMapperWebHook🌀DeployKey()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Deployment\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\Workflow', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\HeadRepository\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentCreated\\WorkflowRun\\ReferencedWorkflows' => $this->getObjectMapperWebHook🌀Deployment()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\CheckRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\Deployment\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\DeploymentStatus\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDeploymentStatusCreated\\WorkflowRun' => $this->getObjectMapperWebHook🌀DeploymentStatus()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionAnswered\\Answer', 'ApiClients\\Client\\GitHub\\Schema\\Discussion', 'ApiClients\\Client\\GitHub\\Schema\\Discussion\\Category', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCategoryChanged\\Changes\\Category', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated\\Discussion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated\\Discussion\\Category', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCreated\\Discussion\\Reactions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes\\Body', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLabeled\\Label', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionLocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionPinned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionTransferred\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnanswered', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionUnpinned' => $this->getObjectMapperWebHook🌀Discussion()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookDiscussionCommentEdited\\Changes' => $this->getObjectMapperWebHook🌀DiscussionComment()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookFork', 'ApiClients\\Client\\GitHub\\Schema\\WebhookFork\\Forkee' => $this->getObjectMapperWebHook🌀Fork()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookGithubAppAuthorizationRevoked' => $this->getObjectMapperWebHook🌀GithubAppAuthorization()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookGollum', 'ApiClients\\Client\\GitHub\\Schema\\WebhookGollum\\Pages' => $this->getObjectMapperWebHook🌀Gollum()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated', 'ApiClients\\Client\\GitHub\\Schema\\AppPermissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationCreated\\Repositories', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationNewPermissionsAccepted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationSuspend', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationUnsuspend' => $this->getObjectMapperWebHook🌀Installation()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesAdded\\RepositoriesRemoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationRepositoriesRemoved' => $this->getObjectMapperWebHook🌀InstallationRepositories()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Account', 'ApiClients\\Client\\GitHub\\Schema\\WebhookInstallationTargetRenamed\\Changes' => $this->getObjectMapperWebHook🌀InstallationTarget()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentCreated\\Issue\\Assignee', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentDeleted\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssueCommentEdited\\Changes\\Body' => $this->getObjectMapperWebHook🌀IssueComment()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PerformedViaGithubApp\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesAssigned\\Issue\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesClosed\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDeleted\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesDemilestoned\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Changes\\Title', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesEdited\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLabeled\\Issue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesLocked\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesMilestoned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldIssue\\PerformedViaGithubApp', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\License', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Changes\\OldRepository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesOpened\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesPinned\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesReopened\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesTransferred\\Changes\\NewRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnassigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnlocked\\Issue', 'ApiClients\\Client\\GitHub\\Schema\\WebhookIssuesUnpinned' => $this->getObjectMapperWebHook🌀Issues()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Color', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Description', 'ApiClients\\Client\\GitHub\\Schema\\WebhookLabelEdited\\Changes\\Name' => $this->getObjectMapperWebHook🌀Label()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Account', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\MarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Account', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseCancelled\\PreviousMarketplacePurchase\\Plan', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchaseChanged\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChange\\PreviousMarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePendingChangeCancelled\\MarketplacePurchase', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMarketplacePurchasePurchased' => $this->getObjectMapperWebHook🌀MarketplacePurchase()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberAdded\\Changes\\Permission', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\OldPermission', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberEdited\\Changes\\Permission', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMemberRemoved' => $this->getObjectMapperWebHook🌀Member()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipAdded\\Team\\Parent_', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMembershipRemoved' => $this->getObjectMapperWebHook🌀Membership()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupChecksRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMergeGroupChecksRequested\\MergeGroup' => $this->getObjectMapperWebHook🌀MergeGroup()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMetaDeleted\\Hook\\Config' => $this->getObjectMapperWebHook🌀Meta()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneCreated\\Milestone', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\DueOn', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneEdited\\Changes\\Title', 'ApiClients\\Client\\GitHub\\Schema\\WebhookMilestoneOpened' => $this->getObjectMapperWebHook🌀Milestone()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockBlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrgBlockUnblocked' => $this->getObjectMapperWebHook🌀OrgBlock()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationDeleted\\Membership', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberAdded', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberInvited\\Invitation', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationMemberRemoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookOrganizationRenamed\\Changes\\Login' => $this->getObjectMapperWebHook🌀Organization()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\ContainerMetadata\\Tag', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\NugetMetadata\\Value', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\PackageVersion\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackagePublished\\Package\\Registry', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPackageUpdated\\Package\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀Package()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPageBuild\\Build', 'ApiClients\\Client\\GitHub\\Schema\\PageBuild\\Error' => $this->getObjectMapperWebHook🌀PageBuild()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPing', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPing\\Hook\\Config', 'ApiClients\\Client\\GitHub\\Schema\\HookResponse', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPingFormEncoded' => $this->getObjectMapperWebHook🌀Ping()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardConverted\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardDeleted\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardEdited\\Changes\\Note', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\Changes\\ColumnId', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCardMoved\\ProjectCard\\Creator' => $this->getObjectMapperWebHook🌀ProjectCard()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectClosed\\Project', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Body', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectEdited\\Changes\\Name', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectReopened' => $this->getObjectMapperWebHook🌀Project()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnCreated\\ProjectColumn', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectColumnMoved' => $this->getObjectMapperWebHook🌀ProjectColumn()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectClosed', 'ApiClients\\Client\\GitHub\\Schema\\ProjectsV2', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Public_', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectEdited\\Changes\\Title', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ProjectReopened' => $this->getObjectMapperWebHook🌀ProjectsV2()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemArchived\\Changes\\ArchivedAt', 'ApiClients\\Client\\GitHub\\Schema\\ProjectsV2Item', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemConverted\\Changes\\ContentType', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemReordered\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookProjectsV2ItemRestored' => $this->getObjectMapperWebHook🌀ProjectsV2Item()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPublic' => $this->getObjectMapperWebHook🌀Public_()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Links\\Comments', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAssigned\\PullRequest\\RequestedReviewers', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeDisabled\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestAutoMergeEnabled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestClosed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestClosed\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestConvertedToDraft', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDemilestoned\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestDequeued\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\Changes\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEdited\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestEnqueued\\PullRequest\\Base\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLabeled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestLocked\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestMilestoned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestOpened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestOpened\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReadyForReview', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequestRemoved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestSynchronize\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnassigned\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlabeled\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestUnlocked\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest\\AutoMerge', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest\\Head' => $this->getObjectMapperWebHook🌀PullRequest()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\Comment\\Links', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentCreated\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\Comment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentDeleted\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewCommentEdited\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReviewComment()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewDismissed\\Review\\Links', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewEdited\\Review', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewSubmitted\\PullRequest' => $this->getObjectMapperWebHook🌀PullRequestReview()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Base', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\PullRequest\\Head\\Repo', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadResolved\\Thread\\Comments', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\PullRequest', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPullRequestReviewThreadUnresolved\\Thread' => $this->getObjectMapperWebHook🌀PullRequestReviewThread()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookPush', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Commits', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\HeadCommit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Pusher' => $this->getObjectMapperWebHook🌀Push()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\ContainerMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NpmMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\NugetMetadata', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\PackageVersion\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackagePublished\\RegistryPackage\\Registry', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\PackageFiles', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRegistryPackageUpdated\\RegistryPackage\\PackageVersion\\Release' => $this->getObjectMapperWebHook🌀RegistryPackage()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseCreated\\Release\\Assets', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePrereleased\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleasePublished\\Release', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseReleased', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookReleaseUnpublished\\Release' => $this->getObjectMapperWebHook🌀Release()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryArchived', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryEdited\\Changes\\Topics', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPrivatized', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryPublicized', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryRenamed\\Changes\\Repository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryTransferred\\Changes\\Owner\\From\\Organization', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryUnarchived' => $this->getObjectMapperWebHook🌀Repository()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryDispatchSample\\ClientPayload' => $this->getObjectMapperWebHook🌀RepositoryDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryImport' => $this->getObjectMapperWebHook🌀RepositoryImport()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertCreate\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertDismiss\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertReopen', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve', 'ApiClients\\Client\\GitHub\\Schema\\WebhookRepositoryVulnerabilityAlertResolve\\Alert' => $this->getObjectMapperWebHook🌀RepositoryVulnerabilityAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertReopened', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertResolved', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertResolved\\Alert', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertRevoked' => $this->getObjectMapperWebHook🌀SecretScanningAlert()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreated', 'ApiClients\\Client\\GitHub\\Schema\\SecretScanningLocationIssueComment', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecretScanningAlertLocationCreatedFormEncoded' => $this->getObjectMapperWebHook🌀SecretScanningAlertLocation()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cvss', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Cwes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Identifiers', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\References', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\FirstPatchedVersion', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryPublished\\SecurityAdvisory\\Vulnerabilities\\Package', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryUpdated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAdvisoryWithdrawn\\SecurityAdvisory' => $this->getObjectMapperWebHook🌀SecurityAdvisory()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSecurityAndAnalysis\\Changes\\From', 'ApiClients\\Client\\GitHub\\Schema\\FullRepository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\CodeOfConductSimple' => $this->getObjectMapperWebHook🌀SecurityAndAnalysis()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCancelled\\Sponsorship\\Tier', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipEdited\\Changes\\PrivacyLevel', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingCancellation', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipPendingTierChange\\Changes\\Tier', 'ApiClients\\Client\\GitHub\\Schema\\WebhookSponsorshipTierChanged' => $this->getObjectMapperWebHook🌀Sponsorship()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookStarCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStarDeleted' => $this->getObjectMapperWebHook🌀Star()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Branches', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Branches\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\ShortBranch\\Commit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Commit\\Verification', 'ApiClients\\Client\\GitHub\\Schema\\WebhookStatus\\Commit\\Parents' => $this->getObjectMapperWebHook🌀Status()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAdd' => $this->getObjectMapperWebHook🌀TeamAdd()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamAddedToRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamCreated', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamDeleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Privacy', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamEdited\\Changes\\Repository\\Permissions\\From', 'ApiClients\\Client\\GitHub\\Schema\\WebhookTeamRemovedFromRepository' => $this->getObjectMapperWebHook🌀Team()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWatchStarted' => $this->getObjectMapperWebHook🌀Watch()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowDispatch' => $this->getObjectMapperWebHook🌀WorkflowDispatch()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobCompleted\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobInProgress\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobQueued\\WorkflowJob\\Steps', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowJobWaiting\\WorkflowJob\\Steps' => $this->getObjectMapperWebHook🌀WorkflowJob()->serializeObject($object),
            'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadCommit\\Author', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunCompleted\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunInProgress\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\HeadRepository', 'ApiClients\\Client\\GitHub\\Schema\\WebhookWorkflowRunRequested\\WorkflowRun\\PullRequests' => $this->getObjectMapperWebHook🌀WorkflowRun()->serializeObject($object),
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
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\Dependabot\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀Dependabot🌀Alerts;
    }
    public function getObjectMapperOperation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts() : Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts
    {
        if ($this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts instanceof Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts === false) {
            $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts = new Hydrator\Operation\Enterprises\CbEnterpriseRcb\SecretScanning\Alerts();
        }
        return $this->operation🌀Enterprises🌀CbEnterpriseRcb🌀SecretScanning🌀Alerts;
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
    public function getObjectMapperOperation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb() : Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb
    {
        if ($this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb instanceof Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb === false) {
            $this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb = new Hydrator\Operation\MarketplaceListing\Accounts\CbAccountIdRcb();
        }
        return $this->operation🌀MarketplaceListing🌀Accounts🌀CbAccountIdRcb;
    }
    public function getObjectMapperOperation🌀MarketplaceListing🌀Plans() : Hydrator\Operation\MarketplaceListing\Plans
    {
        if ($this->operation🌀MarketplaceListing🌀Plans instanceof Hydrator\Operation\MarketplaceListing\Plans === false) {
            $this->operation🌀MarketplaceListing🌀Plans = new Hydrator\Operation\MarketplaceListing\Plans();
        }
        return $this->operation🌀MarketplaceListing🌀Plans;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\RequiredWorkflows();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀RequiredWorkflows;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Actions\Variables\CbNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Actions🌀Variables🌀CbNameRcb;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Blocks() : Hydrator\Operation\Orgs\CbOrgRcb\Blocks
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Blocks instanceof Hydrator\Operation\Orgs\CbOrgRcb\Blocks === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Blocks = new Hydrator\Operation\Orgs\CbOrgRcb\Blocks();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Blocks;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts() : Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts instanceof Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts = new Hydrator\Operation\Orgs\CbOrgRcb\CodeScanning\Alerts();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀CodeScanning🌀Alerts;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Orgs\CbOrgRcb\Codespaces\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀FailedInvitations() : Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations instanceof Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations = new Hydrator\Operation\Orgs\CbOrgRcb\FailedInvitations();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀FailedInvitations;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop() : Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop instanceof Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop = new Hydrator\Operation\Orgs\CbOrgRcb\Members\CbUsernameRcb\Codespaces\CbCodespaceNameRcb\Stop();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Members🌀CbUsernameRcb🌀Codespaces🌀CbCodespaceNameRcb🌀Stop;
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
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Repos() : Hydrator\Operation\Orgs\CbOrgRcb\Repos
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Repos instanceof Hydrator\Operation\Orgs\CbOrgRcb\Repos === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Repos = new Hydrator\Operation\Orgs\CbOrgRcb\Repos();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Repos;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀SecurityManagers() : Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers instanceof Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers = new Hydrator\Operation\Orgs\CbOrgRcb\SecurityManagers();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀SecurityManagers;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions() : Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions instanceof Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions = new Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Actions();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Actions;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages() : Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages instanceof Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages = new Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\Packages();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀Packages;
    }
    public function getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage() : Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage
    {
        if ($this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage instanceof Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage === false) {
            $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage = new Hydrator\Operation\Orgs\CbOrgRcb\Settings\Billing\SharedStorage();
        }
        return $this->operation🌀Orgs🌀CbOrgRcb🌀Settings🌀Billing🌀SharedStorage;
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
    public function getObjectMapperOperation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb() : Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb
    {
        if ($this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb instanceof Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb === false) {
            $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb = new Hydrator\Operation\Repos\CbOrgRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb();
        }
        return $this->operation🌀Repos🌀CbOrgRcb🌀CbRepoRcb🌀Actions🌀RequiredWorkflows🌀CbRequiredWorkflowIdForRepoRcb;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Artifacts\CbArtifactIdRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Artifacts🌀CbArtifactIdRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Cache\Usage();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Cache🌀Usage;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Secrets🌀CbSecretNameRcb;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables;
    }
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Actions\Variables\CbNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Actions🌀Variables🌀CbNameRcb;
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
    public function getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Codespaces🌀Secrets🌀CbSecretNameRcb;
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
    public function getObjectMapperOperation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb() : Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb
    {
        if ($this->operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb instanceof Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb === false) {
            $this->operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb = new Hydrator\Operation\User\Codespaces\Secrets\CbSecretNameRcb();
        }
        return $this->operation🌀User🌀Codespaces🌀Secrets🌀CbSecretNameRcb;
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
    public function getObjectMapperWebHook🌀MarketplacePurchase() : Hydrator\WebHook\MarketplacePurchase
    {
        if ($this->webHook🌀MarketplacePurchase instanceof Hydrator\WebHook\MarketplacePurchase === false) {
            $this->webHook🌀MarketplacePurchase = new Hydrator\WebHook\MarketplacePurchase();
        }
        return $this->webHook🌀MarketplacePurchase;
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
    public function getObjectMapperWebHook🌀OrgBlock() : Hydrator\WebHook\OrgBlock
    {
        if ($this->webHook🌀OrgBlock instanceof Hydrator\WebHook\OrgBlock === false) {
            $this->webHook🌀OrgBlock = new Hydrator\WebHook\OrgBlock();
        }
        return $this->webHook🌀OrgBlock;
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
    public function getObjectMapperWebHook🌀ProjectsV2Item() : Hydrator\WebHook\ProjectsV2Item
    {
        if ($this->webHook🌀ProjectsV2Item instanceof Hydrator\WebHook\ProjectsV2Item === false) {
            $this->webHook🌀ProjectsV2Item = new Hydrator\WebHook\ProjectsV2Item();
        }
        return $this->webHook🌀ProjectsV2Item;
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
    public function getObjectMapperWebHook🌀RepositoryImport() : Hydrator\WebHook\RepositoryImport
    {
        if ($this->webHook🌀RepositoryImport instanceof Hydrator\WebHook\RepositoryImport === false) {
            $this->webHook🌀RepositoryImport = new Hydrator\WebHook\RepositoryImport();
        }
        return $this->webHook🌀RepositoryImport;
    }
    public function getObjectMapperWebHook🌀RepositoryVulnerabilityAlert() : Hydrator\WebHook\RepositoryVulnerabilityAlert
    {
        if ($this->webHook🌀RepositoryVulnerabilityAlert instanceof Hydrator\WebHook\RepositoryVulnerabilityAlert === false) {
            $this->webHook🌀RepositoryVulnerabilityAlert = new Hydrator\WebHook\RepositoryVulnerabilityAlert();
        }
        return $this->webHook🌀RepositoryVulnerabilityAlert;
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
    public function getObjectMapperWebHook🌀SecurityAdvisory() : Hydrator\WebHook\SecurityAdvisory
    {
        if ($this->webHook🌀SecurityAdvisory instanceof Hydrator\WebHook\SecurityAdvisory === false) {
            $this->webHook🌀SecurityAdvisory = new Hydrator\WebHook\SecurityAdvisory();
        }
        return $this->webHook🌀SecurityAdvisory;
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
