<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterpriseCloud;

use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

final class Client implements ClientInterface
{
    private array $router = [];
    private readonly OperationsInterface $operations;
    private readonly WebHooks $webHooks;
    private readonly Internal\Routers $routers;

    public function __construct(AuthenticationInterface $authentication, Browser $browser)
    {
        $browser                 = $browser->withBase('https://api.github.com')->withFollowRedirects(false);
        $requestSchemaValidator  = new SchemaValidator(SchemaValidator::VALIDATE_AS_REQUEST);
        $responseSchemaValidator = new SchemaValidator(SchemaValidator::VALIDATE_AS_RESPONSE);
        $hydrators               = new Internal\Hydrators();
        $this->operations        = new Operations(new Internal\Operators(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators));
        $this->webHooks          = new WebHooks(requestSchemaValidator: $requestSchemaValidator, hydrator: $hydrators);
        $this->routers           = new Internal\Routers(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators);
    }

    // phpcs:disable
    public function call(string $call, array $params = []): \ApiClients\Client\GitHubEnterpriseCloud\Schema\Root|iterable|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GlobalAdvisory|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Integration|\ApiClients\Client\GitHubEnterpriseCloud\Schema\WebhookConfig|\ApiClients\Client\GitHubEnterpriseCloud\Schema\HookDelivery|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Installation|\ApiClients\Client\GitHubEnterpriseCloud\Schema\InstallationToken|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Authorization|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ClassroomAssignment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Classroom|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeOfConduct|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheUsageOrgEnterprise|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsEnterprisePermissions|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\SelectedActions|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsEnterprise|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GenerateRunnerJitconfigForEnterprise\Response\ApplicationJson\Created|\ApiClients\Client\GitHubEnterpriseCloud\Schema\AuthenticationToken|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Runner|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\AnnouncementBanner|\ApiClients\Client\GitHubEnterpriseCloud\Schema\EnterpriseSecurityAnalysisSettings|string|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\ListCopilotSeatsForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsBillingUsage|\ApiClients\Client\GitHubEnterpriseCloud\Schema\AdvancedSecurityActiveCommitters|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GetAllCostCenters|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Billing\AddResourceToCostCenter\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Billing\RemoveResourceFromCostCenter\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PackagesBillingUsage|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedBillingUsage|\ApiClients\Client\GitHubEnterpriseCloud\Schema\BillingUsageReport|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Feed|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GistSimple|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GistComment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\BaseGist|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GitignoreTemplate|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\License|\ApiClients\Client\GitHubEnterpriseCloud\Schema\MarketplacePurchase|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ApiOverview|\ApiClients\Client\GitHubEnterpriseCloud\Schema\BasicError|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Thread|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ThreadSubscription|\Psr\Http\Message\ResponseInterface|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationFull|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OidcCustomSub|\ApiClients\Client\GitHubEnterpriseCloud\Schema\EmptyObject|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsOrganizationPermissions|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RunnerGroupsOrg|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsPublicKey|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationActionsSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationActionsVariable|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeSecurityConfiguration|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeSecurity\AttachConfiguration\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListInOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespacesPublicKey|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespacesOrgSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotOrganizationDetails|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\ListCopilotSeats\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\AddCopilotSeatsForTeams\Response\ApplicationJson\Created|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\AddCopilotSeatsForUsers\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForUsers\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DependabotPublicKey|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationDependabotSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroup|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ExternalGroups|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgHook|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\InteractionLimitResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForOrg\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationInvitation|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\GetCodespacesForUserInOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\DeleteFromOrganization\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Codespace|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CopilotSeatDetails|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgMembership|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Migration|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ListOrgRoles\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrganizationRole|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Package|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PackageVersion|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Project|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OrgCustomProperty|\ApiClients\Client\GitHubEnterpriseCloud\Schema\FullRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryRuleset|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RuleSuite|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupMapping|\ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamFull|\ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamDiscussion|\ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamDiscussionComment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Reaction|\ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamMembership|\ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamProject|\ApiClients\Client\GitHubEnterpriseCloud\Schema\TeamRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ProjectCard|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ProjectColumn|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ProjectCollaboratorPermission|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RateLimitOverview|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Artifact|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheUsageByRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsCacheList|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Job|\ApiClients\Client\GitHubEnterpriseCloud\Schema\OidcCustomSubRepo|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsRepositoryPermissions|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsWorkflowAccessToRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowRun|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowRunUsage|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ActionsVariable|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Workflow|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\WorkflowUsage|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Autolink|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CheckAutomatedSecurityFixes|\ApiClients\Client\GitHubEnterpriseCloud\Schema\BranchWithProtection|\ApiClients\Client\GitHubEnterpriseCloud\Schema\BranchProtection|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranch|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\GitHubEnterpriseCloud\Schema\StatusCheckPolicy|\ApiClients\Client\GitHubEnterpriseCloud\Schema\BranchRestrictionPolicy|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CheckRun|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CheckSuite|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CheckSuitePreference|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAlert|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAnalysis|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningCodeqlDatabase|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysis|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningVariantAnalysisRepoTask|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningDefaultSetup|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningDefaultSetupUpdateResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeScanningSarifsStatus|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodeownersErrors|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListDevcontainersInRepositoryForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\RepoMachinesForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespacesPermissionsCheckForDevcontainer|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RepoCodespacesSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryInvitation|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CommitComment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Commit|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CombinedCommitStatus|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CommunityProfile|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CommitComparison|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentDirectory|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentFile|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentSymlink|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ContentSubmodule|\ApiClients\Client\GitHubEnterpriseCloud\Schema\FileCommit|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DependabotAlert|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DependabotSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DependencyGraphSpdxSbom|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Deployment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DeploymentStatus|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Environment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DeploymentBranchPolicy|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DeploymentProtectionRule|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ShortBlob|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Blob|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GitCommit|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GitRef|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GitTag|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GitTree|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Hook|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Import|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PorterAuthor|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForRepo\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Issue|\ApiClients\Client\GitHubEnterpriseCloud\Schema\IssueComment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\IssueEvent|\ApiClients\Client\GitHubEnterpriseCloud\Schema\DeployKey|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Label|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Language|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\LicenseContent|\ApiClients\Client\GitHubEnterpriseCloud\Schema\MergedUpstream|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Milestone|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Page|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PageBuildStatus|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PageBuild|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PageDeployment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PagesDeploymentStatus|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PagesHealthCheck|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\CheckPrivateVulnerabilityReporting\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequest|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewComment|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestMergeResult|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReviewRequest|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestSimple|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PullRequestReview|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Release|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ReleaseAsset|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ReleaseNotesContent|\ApiClients\Client\GitHubEnterpriseCloud\Schema\SecretScanningAlert|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositoryAdvisory|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\SimpleUser|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Stargazer|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ParticipationStats|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Status|\ApiClients\Client\GitHubEnterpriseCloud\Schema\RepositorySubscription|\ApiClients\Client\GitHubEnterpriseCloud\Schema\TagProtection|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Topic|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CloneTraffic|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ViewTraffic|\ApiClients\Client\GitHubEnterpriseCloud\Schema\MinimalRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimEnterpriseGroupList|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GroupResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimEnterpriseUserList|\ApiClients\Client\GitHubEnterpriseCloud\Schema\UserResponse|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUserList|\ApiClients\Client\GitHubEnterpriseCloud\Schema\ScimUser|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PrivateUser|\ApiClients\Client\GitHubEnterpriseCloud\Schema\PublicUser|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListSecretsForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespacesUserPublicKey|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespacesSecret|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\ListRepositoriesForSecretForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\DeleteForAuthenticatedUser\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespaceExportDetails|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Codespaces\CodespaceMachinesForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\CodespaceWithFullRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\GpgKey|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Operations\Interactions\GetRestrictionsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json\One|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Key|\ApiClients\Client\GitHubEnterpriseCloud\Schema\SshSigningKey|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Hovercard|\ApiClients\Client\GitHubEnterpriseCloud\Schema\StarredRepository|\ApiClients\Client\GitHubEnterpriseCloud\Schema\Repository
    {
        [$method, $path] = explode(' ', $call);
        $pathChunks      = explode('/', $path);
        $pathChunksCount = count($pathChunks);
        if ($method === 'GET') {
            if ($pathChunksCount === 1) {
                if (\array_key_exists(Internal\Router\Get\One::class, $this->router) === false) {
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
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Patch\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Six::class] = new Internal\Router\Patch\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Six::class]->call($call, $params, $pathChunks);
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
        } elseif ($method === 'LIST') {
            if ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\List\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Three::class] = new Internal\Router\List\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\List\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Four::class] = new Internal\Router\List\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\List\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Two::class] = new Internal\Router\List\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\List\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Five::class] = new Internal\Router\List\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\List\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Six::class] = new Internal\Router\List\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\List\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Seven::class] = new Internal\Router\List\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\List\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Eight::class] = new Internal\Router\List\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\List\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Ten::class] = new Internal\Router\List\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Ten::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\List\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Nine::class] = new Internal\Router\List\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Nine::class]->call($call, $params, $pathChunks);
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
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Delete\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Delete\Three::class] = new Internal\Router\Delete\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Delete\Three::class]->call($call, $params, $pathChunks);
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
        } elseif ($method === 'STREAM') {
            if ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Stream\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Stream\Six::class] = new Internal\Router\Stream\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Stream\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Stream\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Stream\Eight::class] = new Internal\Router\Stream\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Stream\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\Stream\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\Stream\Ten::class] = new Internal\Router\Stream\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\Stream\Ten::class]->call($call, $params, $pathChunks);
            }
        }

        throw new \InvalidArgumentException();
    }

    public function operations(): OperationsInterface
    {
        return $this->operations;
    }

    public function webHooks(): \ApiClients\Contracts\OpenAPI\WebHooksInterface
    {
        return $this->webHooks;
    }
}
