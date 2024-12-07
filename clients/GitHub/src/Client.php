<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub;

use ApiClients\Client\GitHub\Internal\Hydrators;
use ApiClients\Client\GitHub\Internal\Operators;
use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\ActionsCacheList;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageByRepository;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHub\Schema\ActionsPublicKey;
use ApiClients\Client\GitHub\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHub\Schema\ActionsSecret;
use ApiClients\Client\GitHub\Schema\ActionsVariable;
use ApiClients\Client\GitHub\Schema\ActionsWorkflowAccessToRepository;
use ApiClients\Client\GitHub\Schema\ApiInsightsSummaryStats;
use ApiClients\Client\GitHub\Schema\ApiOverview;
use ApiClients\Client\GitHub\Schema\Artifact;
use ApiClients\Client\GitHub\Schema\AuthenticationToken;
use ApiClients\Client\GitHub\Schema\Authorization;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Client\GitHub\Schema\BaseGist;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\BillingUsageReport;
use ApiClients\Client\GitHub\Schema\Blob;
use ApiClients\Client\GitHub\Schema\BranchProtection;
use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHub\Schema\BranchWithProtection;
use ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuite;
use ApiClients\Client\GitHub\Schema\CheckSuitePreference;
use ApiClients\Client\GitHub\Schema\Classroom;
use ApiClients\Client\GitHub\Schema\ClassroomAssignment;
use ApiClients\Client\GitHub\Schema\CloneTraffic;
use ApiClients\Client\GitHub\Schema\CodeOfConduct;
use ApiClients\Client\GitHub\Schema\CodeownersErrors;
use ApiClients\Client\GitHub\Schema\CodeScanningAlert;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningAnalysisDeletion;
use ApiClients\Client\GitHub\Schema\CodeScanningCodeqlDatabase;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetup;
use ApiClients\Client\GitHub\Schema\CodeScanningDefaultSetupUpdateResponse;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsReceipt;
use ApiClients\Client\GitHub\Schema\CodeScanningSarifsStatus;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis;
use ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysisRepoTask;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfigurationForRepository;
use ApiClients\Client\GitHub\Schema\Codespace;
use ApiClients\Client\GitHub\Schema\CodespaceExportDetails;
use ApiClients\Client\GitHub\Schema\CodespacesOrgSecret;
use ApiClients\Client\GitHub\Schema\CodespacesPermissionsCheckForDevcontainer;
use ApiClients\Client\GitHub\Schema\CodespacesPublicKey;
use ApiClients\Client\GitHub\Schema\CodespacesSecret;
use ApiClients\Client\GitHub\Schema\CodespacesUserPublicKey;
use ApiClients\Client\GitHub\Schema\CodespaceWithFullRepository;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\CombinedCommitStatus;
use ApiClients\Client\GitHub\Schema\Commit;
use ApiClients\Client\GitHub\Schema\CommitComment;
use ApiClients\Client\GitHub\Schema\CommitComparison;
use ApiClients\Client\GitHub\Schema\CommunityProfile;
use ApiClients\Client\GitHub\Schema\ContentDirectory;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Client\GitHub\Schema\ContentSubmodule;
use ApiClients\Client\GitHub\Schema\ContentSymlink;
use ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails;
use ApiClients\Client\GitHub\Schema\CopilotSeatDetails;
use ApiClients\Client\GitHub\Schema\CustomProperty;
use ApiClients\Client\GitHub\Schema\DependabotAlert;
use ApiClients\Client\GitHub\Schema\DependabotPublicKey;
use ApiClients\Client\GitHub\Schema\DependabotSecret;
use ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom;
use ApiClients\Client\GitHub\Schema\DeployKey;
use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHub\Schema\DeploymentProtectionRule;
use ApiClients\Client\GitHub\Schema\DeploymentStatus;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Environment;
use ApiClients\Client\GitHub\Schema\Feed;
use ApiClients\Client\GitHub\Schema\FileCommit;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\GistSimple;
use ApiClients\Client\GitHub\Schema\GitCommit;
use ApiClients\Client\GitHub\Schema\GitignoreTemplate;
use ApiClients\Client\GitHub\Schema\GitRef;
use ApiClients\Client\GitHub\Schema\GitTag;
use ApiClients\Client\GitHub\Schema\GitTree;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory;
use ApiClients\Client\GitHub\Schema\GpgKey;
use ApiClients\Client\GitHub\Schema\Hook;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\Hovercard;
use ApiClients\Client\GitHub\Schema\Import;
use ApiClients\Client\GitHub\Schema\Installation;
use ApiClients\Client\GitHub\Schema\InstallationToken;
use ApiClients\Client\GitHub\Schema\Integration;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use ApiClients\Client\GitHub\Schema\Issue;
use ApiClients\Client\GitHub\Schema\IssueComment;
use ApiClients\Client\GitHub\Schema\IssueEvent;
use ApiClients\Client\GitHub\Schema\Job;
use ApiClients\Client\GitHub\Schema\Key;
use ApiClients\Client\GitHub\Schema\Label;
use ApiClients\Client\GitHub\Schema\Language;
use ApiClients\Client\GitHub\Schema\License;
use ApiClients\Client\GitHub\Schema\LicenseContent;
use ApiClients\Client\GitHub\Schema\MarketplacePurchase;
use ApiClients\Client\GitHub\Schema\MergedUpstream;
use ApiClients\Client\GitHub\Schema\Migration;
use ApiClients\Client\GitHub\Schema\Milestone;
use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\OidcCustomSub;
use ApiClients\Client\GitHub\Schema\OidcCustomSubRepo;
use ApiClients\Client\GitHub\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted;
use ApiClients\Client\GitHub\Schema\Operations\Apps\CreateFromManifest\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeatsForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One;
use ApiClients\Client\GitHub\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHub\Schema\OrganizationActionsVariable;
use ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret;
use ApiClients\Client\GitHub\Schema\OrganizationFull;
use ApiClients\Client\GitHub\Schema\OrganizationInvitation;
use ApiClients\Client\GitHub\Schema\OrganizationRole;
use ApiClients\Client\GitHub\Schema\OrgHook;
use ApiClients\Client\GitHub\Schema\OrgMembership;
use ApiClients\Client\GitHub\Schema\Package;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;
use ApiClients\Client\GitHub\Schema\PackageVersion;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Client\GitHub\Schema\PageBuild;
use ApiClients\Client\GitHub\Schema\PageBuildStatus;
use ApiClients\Client\GitHub\Schema\PageDeployment;
use ApiClients\Client\GitHub\Schema\PagesDeploymentStatus;
use ApiClients\Client\GitHub\Schema\PagesHealthCheck;
use ApiClients\Client\GitHub\Schema\ParticipationStats;
use ApiClients\Client\GitHub\Schema\PorterAuthor;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Client\GitHub\Schema\ProtectedBranch;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\PublicUser;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\PullRequestMergeResult;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHub\Schema\PullRequestReviewRequest;
use ApiClients\Client\GitHub\Schema\PullRequestSimple;
use ApiClients\Client\GitHub\Schema\RateLimitOverview;
use ApiClients\Client\GitHub\Schema\Reaction;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Client\GitHub\Schema\ReleaseNotesContent;
use ApiClients\Client\GitHub\Schema\RepoCodespacesSecret;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;
use ApiClients\Client\GitHub\Schema\RepositoryCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\RepositoryInvitation;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\RepositorySubscription;
use ApiClients\Client\GitHub\Schema\Root;
use ApiClients\Client\GitHub\Schema\RuleSuite;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Client\GitHub\Schema\RunnerGroupsOrg;
use ApiClients\Client\GitHub\Schema\SecretScanningAlert;
use ApiClients\Client\GitHub\Schema\SecretScanningPushProtectionBypass;
use ApiClients\Client\GitHub\Schema\SecretScanningScanHistory;
use ApiClients\Client\GitHub\Schema\SelectedActions;
use ApiClients\Client\GitHub\Schema\ShortBlob;
use ApiClients\Client\GitHub\Schema\SimpleUser;
use ApiClients\Client\GitHub\Schema\SshSigningKey;
use ApiClients\Client\GitHub\Schema\Stargazer;
use ApiClients\Client\GitHub\Schema\StarredRepository;
use ApiClients\Client\GitHub\Schema\Status;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHub\Schema\TagProtection;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Client\GitHub\Schema\TeamMembership;
use ApiClients\Client\GitHub\Schema\TeamProject;
use ApiClients\Client\GitHub\Schema\TeamRepository;
use ApiClients\Client\GitHub\Schema\Thread;
use ApiClients\Client\GitHub\Schema\ThreadSubscription;
use ApiClients\Client\GitHub\Schema\Topic;
use ApiClients\Client\GitHub\Schema\ViewTraffic;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Client\GitHub\Schema\Workflow;
use ApiClients\Client\GitHub\Schema\WorkflowRun;
use ApiClients\Client\GitHub\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHub\Schema\WorkflowUsage;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;
use function count;
use function explode;

final class Client implements ClientInterface
{
    private array $router = [];
    private readonly OperationsInterface $operations;
    private readonly Routers $routers;

    public function __construct(private AuthenticationInterface $authentication, private Browser $browser)
    {
        $browser                 = $browser->withFollowRedirects(false);
        $requestSchemaValidator  = new SchemaValidator(SchemaValidator::VALIDATE_AS_REQUEST);
        $responseSchemaValidator = new SchemaValidator(SchemaValidator::VALIDATE_AS_RESPONSE);
        $hydrators               = new Hydrators();
        $this->operations        = new Operations(new Operators(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators));
        $this->routers           = new Routers(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators);
    }

    // phpcs:disable
    public function call(string $call, array $params = []): Root|iterable|GlobalAdvisory|Integration|Created|WebhookConfig|HookDelivery|Json|WithoutBody|Installation|InstallationToken|Authorization|ClassroomAssignment|Classroom|CodeOfConduct|\ApiClients\Client\GitHub\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|Ok|Feed|GistSimple|GistComment|BaseGist|GitignoreTemplate|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|License|string|MarketplacePurchase|ApiOverview|BasicError|Accepted|Thread|ThreadSubscription|ResponseInterface|BillingUsageReport|OrganizationFull|\ApiClients\Client\GitHub\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json|ActionsCacheUsageOrgEnterprise|\ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|OidcCustomSub|EmptyObject|ActionsOrganizationPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|SelectedActions|ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|RunnerGroupsOrg|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created|AuthenticationToken|Runner|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|ActionsPublicKey|OrganizationActionsSecret|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|OrganizationActionsVariable|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok|CodeSecurityConfiguration|\ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\AttachConfiguration\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|CodespacesPublicKey|CodespacesOrgSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|CopilotOrganizationDetails|\ApiClients\Client\GitHub\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|DependabotPublicKey|OrganizationDependabotSecret|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|OrgHook|\ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|ApiInsightsSummaryStats|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|InteractionLimitResponse|One|OrganizationInvitation|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|Codespace|CopilotSeatDetails|OrgMembership|Migration|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ListOrgRoles\Response\ApplicationJson\Ok|OrganizationRole|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|Package|PackageVersion|\ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|Project|CustomProperty|FullRepository|RepositoryRuleset|RuleSuite|ActionsBillingUsage|PackagesBillingUsage|CombinedBillingUsage|TeamFull|TeamDiscussion|TeamDiscussionComment|Reaction|TeamMembership|TeamProject|TeamRepository|ProjectCard|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|ProjectColumn|\ApiClients\Client\GitHub\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|ProjectCollaboratorPermission|RateLimitOverview|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|Artifact|ActionsCacheUsageByRepository|ActionsCacheList|Job|OidcCustomSubRepo|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|ActionsRepositoryPermissions|ActionsWorkflowAccessToRepository|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|WorkflowRun|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|WorkflowRunUsage|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|ActionsSecret|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|ActionsVariable|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|Workflow|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|WorkflowUsage|\ApiClients\Client\GitHub\Schema\Operations\Repos\CreateAttestation\Response\ApplicationJson\Created|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListAttestations\Response\ApplicationJson\Ok\Application\Json|Autolink|CheckAutomatedSecurityFixes|BranchWithProtection|BranchProtection|ProtectedBranch|ProtectedBranchAdminEnforced|ProtectedBranchPullRequestReview|StatusCheckPolicy|BranchRestrictionPolicy|CheckRun|CheckSuite|CheckSuitePreference|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|CodeScanningAlert|CodeScanningAnalysis|CodeScanningAnalysisDeletion|CodeScanningCodeqlDatabase|CodeScanningVariantAnalysis|CodeScanningVariantAnalysisRepoTask|CodeScanningDefaultSetup|CodeScanningDefaultSetupUpdateResponse|CodeScanningSarifsReceipt|CodeScanningSarifsStatus|CodeSecurityConfigurationForRepository|CodeownersErrors|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|CodespacesPermissionsCheckForDevcontainer|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|RepoCodespacesSecret|RepositoryInvitation|RepositoryCollaboratorPermission|CommitComment|Commit|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|CombinedCommitStatus|CommunityProfile|CommitComparison|ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|FileCommit|DependabotAlert|\ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|DependabotSecret|DependencyGraphSpdxSbom|\ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created|Deployment|\ApiClients\Client\GitHub\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|DeploymentStatus|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|Environment|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|DeploymentBranchPolicy|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok|DeploymentProtectionRule|\ApiClients\Client\GitHub\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|ShortBlob|Blob|GitCommit|GitRef|GitTag|GitTree|Hook|\ApiClients\Client\GitHub\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|Import|PorterAuthor|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One|Issue|IssueComment|IssueEvent|DeployKey|Label|Language|LicenseContent|MergedUpstream|Milestone|\ApiClients\Client\GitHub\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|Page|PageBuildStatus|PageBuild|PageDeployment|PagesDeploymentStatus|PagesHealthCheck|\ApiClients\Client\GitHub\Schema\Operations\Repos\CheckPrivateVulnerabilityReporting\Response\ApplicationJson\Ok|PullRequest|PullRequestReviewComment|PullRequestMergeResult|PullRequestReviewRequest|PullRequestSimple|PullRequestReview|\ApiClients\Client\GitHub\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json|Release|ReleaseAsset|ReleaseNotesContent|SecretScanningAlert|SecretScanningPushProtectionBypass|SecretScanningScanHistory|RepositoryAdvisory|\ApiClients\Client\GitHub\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json|SimpleUser|Stargazer|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|ParticipationStats|Status|RepositorySubscription|TagProtection|Topic|CloneTraffic|ViewTraffic|MinimalRepository|\ApiClients\Client\GitHub\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|PrivateUser|PublicUser|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|CodespacesUserPublicKey|CodespacesSecret|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json|CodespaceExportDetails|\ApiClients\Client\GitHub\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|CodespaceWithFullRepository|GpgKey|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHub\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHub\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|Key|SshSigningKey|\ApiClients\Client\GitHub\Schema\Operations\Users\ListAttestations\Response\ApplicationJson\Ok|Hovercard|StarredRepository|Repository
    {
        [$method, $path] = explode(' ', $call);
        $pathChunks      = explode('/', $path);
        $pathChunksCount = count($pathChunks);
        if ($method === 'GET') {
            if ($pathChunksCount === 1) {
                if (array_key_exists(Internal\Router\Get\One::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\One::class] = new Internal\Router\Get\One(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\One::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Get\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Two::class] = new Internal\Router\Get\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Get\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Three::class] = new Internal\Router\Get\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Get\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Four::class] = new Internal\Router\Get\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Get\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Five::class] = new Internal\Router\Get\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Get\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Six::class] = new Internal\Router\Get\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Get\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Seven::class] = new Internal\Router\Get\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Get\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Eight::class] = new Internal\Router\Get\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Get\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Nine::class] = new Internal\Router\Get\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\Get\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Ten::class] = new Internal\Router\Get\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Ten::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 11) {
                if (\array_key_exists(Internal\Router\Get\Eleven::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Eleven::class] = new Internal\Router\Get\Eleven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Eleven::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'POST') {
            if ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Post\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Four::class] = new Internal\Router\Post\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Post\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Six::class] = new Internal\Router\Post\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Post\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Five::class] = new Internal\Router\Post\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Post\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Two::class] = new Internal\Router\Post\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Post\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Three::class] = new Internal\Router\Post\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Post\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Seven::class] = new Internal\Router\Post\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Post\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Eight::class] = new Internal\Router\Post\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Post\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Nine::class] = new Internal\Router\Post\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\Post\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Ten::class] = new Internal\Router\Post\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Ten::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'PATCH') {
            if ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Patch\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Four::class] = new Internal\Router\Patch\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Patch\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Three::class] = new Internal\Router\Patch\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Patch\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Five::class] = new Internal\Router\Patch\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Patch\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Six::class] = new Internal\Router\Patch\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Patch\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Seven::class] = new Internal\Router\Patch\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Patch\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Nine::class] = new Internal\Router\Patch\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Patch\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Eight::class] = new Internal\Router\Patch\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Patch\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Two::class] = new Internal\Router\Patch\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Two::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'DELETE') {
            if ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Delete\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Four::class] = new Internal\Router\Delete\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Delete\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Five::class] = new Internal\Router\Delete\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Delete\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Three::class] = new Internal\Router\Delete\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Delete\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Seven::class] = new Internal\Router\Delete\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Delete\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Six::class] = new Internal\Router\Delete\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Delete\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Eight::class] = new Internal\Router\Delete\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Delete\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Nine::class] = new Internal\Router\Delete\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 11) {
                if (\array_key_exists(Internal\Router\Delete\Eleven::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Eleven::class] = new Internal\Router\Delete\Eleven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Eleven::class]->call($call, $params, $pathChunks);
            }
        } elseif ($method === 'PUT') {
            if ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Put\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Five::class] = new Internal\Router\Put\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Put\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Four::class] = new Internal\Router\Put\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Put\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Two::class] = new Internal\Router\Put\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Put\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Seven::class] = new Internal\Router\Put\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Put\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Six::class] = new Internal\Router\Put\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Put\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Eight::class] = new Internal\Router\Put\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Put\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Nine::class] = new Internal\Router\Put\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Nine::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Put\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Three::class] = new Internal\Router\Put\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Three::class]->call($call, $params, $pathChunks);
            }
        }

        throw new InvalidArgumentException();
    }

    public function operations(): OperationsInterface
    {
        return $this->operations;
    }
}
