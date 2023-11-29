<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubEnterprise;

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
        $browser                 = $browser->withBase('{protocol}://{hostname}/api/v3')->withFollowRedirects(false);
        $requestSchemaValidator  = new SchemaValidator(SchemaValidator::VALIDATE_AS_REQUEST);
        $responseSchemaValidator = new SchemaValidator(SchemaValidator::VALIDATE_AS_RESPONSE);
        $hydrators               = new Internal\Hydrators();
        $this->operations        = new Operations(new Internal\Operators(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators));
        $this->webHooks          = new WebHooks(requestSchemaValidator: $requestSchemaValidator, hydrator: $hydrators);
        $this->routers           = new Internal\Routers(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators);
    }

    // phpcs:disable
    public function call(string $call, array $params = []): \ApiClients\Client\GitHubEnterprise\Schema\Root|iterable|\ApiClients\Client\GitHubEnterprise\Schema\GlobalHook|\ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody|\ApiClients\Client\GitHubEnterprise\Schema\GlobalHook2|\ApiClients\Client\GitHubEnterprise\Schema\LdapMappingTeam|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForTeam\Response\ApplicationJson\Created|\ApiClients\Client\GitHubEnterprise\Schema\LdapMappingUser|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\SyncLdapMappingForUser\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\OrganizationSimple|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironment|\ApiClients\Client\GitHubEnterprise\Schema\PreReceiveEnvironmentDownloadStatus|\ApiClients\Client\GitHubEnterprise\Schema\PreReceiveHook|\ApiClients\Client\GitHubEnterprise\Schema\SimpleUser|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\UpdateUsernameForUser\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Authorization|\ApiClients\Client\GitHubEnterprise\Schema\Integration|\ApiClients\Client\GitHubEnterprise\Schema\WebhookConfig|\ApiClients\Client\GitHubEnterprise\Schema\HookDelivery|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Installation|\ApiClients\Client\GitHubEnterprise\Schema\InstallationToken|\ApiClients\Client\GitHubEnterprise\Schema\ApplicationGrant|\ApiClients\Client\GitHubEnterprise\Schema\CodeOfConduct|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Announcement|\ApiClients\Client\GitHubEnterprise\Schema\LicenseInfo|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseCommentOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseGistOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseHookOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseIssueOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseMilestoneOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseOrganizationOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterprisePageOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterprisePullRequestOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseRepositoryOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityProductsOverview|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseUserOverview|\ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsageOrgEnterprise|\ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyEnterprise|\ApiClients\Client\GitHubEnterprise\Schema\ActionsEnterprisePermissions|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\SelectedActions|\ApiClients\Client\GitHubEnterprise\Schema\ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsEnterprise|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\GenerateRunnerJitconfigForEnterprise\Response\ApplicationJson\Created|\ApiClients\Client\GitHubEnterprise\Schema\AuthenticationToken|\ApiClients\Client\GitHubEnterprise\Schema\Runner|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSecurityAnalysisSettings|\ApiClients\Client\GitHubEnterprise\Schema\AdvancedSecurityActiveCommitters|\ApiClients\Client\GitHubEnterprise\Schema\Feed|\ApiClients\Client\GitHubEnterprise\Schema\GistSimple|\ApiClients\Client\GitHubEnterprise\Schema\GistComment|\ApiClients\Client\GitHubEnterprise\Schema\BaseGist|\ApiClients\Client\GitHubEnterprise\Schema\GitignoreTemplate|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\License|\ApiClients\Client\GitHubEnterprise\Schema\GhesConfigNodes|\ApiClients\Client\GitHubEnterprise\Schema\GhesReplicationStatus|string|\ApiClients\Client\GitHubEnterprise\Schema\ApiOverview|\ApiClients\Client\GitHubEnterprise\Schema\BasicError|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHubEnterprise\Schema\Thread|\ApiClients\Client\GitHubEnterprise\Schema\ThreadSubscription|\Psr\Http\Message\ResponseInterface|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRoles\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\OrganizationFull|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\OidcCustomSub|\ApiClients\Client\GitHubEnterprise\Schema\EmptyObject|\ApiClients\Client\GitHubEnterprise\Schema\ActionsOrganizationPermissions|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\RunnerGroupsOrg|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersInGroupForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\ActionsPublicKey|\ApiClients\Client\GitHubEnterprise\Schema\OrganizationActionsSecret|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\OrganizationActionsVariable|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\AnnouncementBanner|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListCustomRepoRoles\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\OrganizationCustomRepositoryRole|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\DependabotPublicKey|\ApiClients\Client\GitHubEnterprise\Schema\OrganizationDependabotSecret|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroup|\ApiClients\Client\GitHubEnterprise\Schema\ExternalGroups|\ApiClients\Client\GitHubEnterprise\Schema\OrgHook|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\OrgMembership|\ApiClients\Client\GitHubEnterprise\Schema\Migration|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Package|\ApiClients\Client\GitHubEnterprise\Schema\PackageVersion|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\OrgPreReceiveHook|\ApiClients\Client\GitHubEnterprise\Schema\Project|\ApiClients\Client\GitHubEnterprise\Schema\FullRepository|\ApiClients\Client\GitHubEnterprise\Schema\TeamFull|\ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussion|\ApiClients\Client\GitHubEnterprise\Schema\TeamDiscussionComment|\ApiClients\Client\GitHubEnterprise\Schema\Reaction|\ApiClients\Client\GitHubEnterprise\Schema\TeamMembership|\ApiClients\Client\GitHubEnterprise\Schema\TeamProject|\ApiClients\Client\GitHubEnterprise\Schema\TeamRepository|\ApiClients\Client\GitHubEnterprise\Schema\ProjectCard|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\ProjectColumn|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\ProjectCollaboratorPermission|\ApiClients\Client\GitHubEnterprise\Schema\RateLimitOverview|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Artifact|\ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsageByRepository|\ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheUsagePolicyForRepository|\ApiClients\Client\GitHubEnterprise\Schema\ActionsCacheList|\ApiClients\Client\GitHubEnterprise\Schema\Job|\ApiClients\Client\GitHubEnterprise\Schema\OidcCustomSubRepo|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\ActionsRepositoryPermissions|\ApiClients\Client\GitHubEnterprise\Schema\ActionsWorkflowAccessToRepository|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\WorkflowRun|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\ActionsSecret|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\ActionsVariable|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Workflow|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Autolink|\ApiClients\Client\GitHubEnterprise\Schema\CheckAutomatedSecurityFixes|\ApiClients\Client\GitHubEnterprise\Schema\BranchWithProtection|\ApiClients\Client\GitHubEnterprise\Schema\BranchProtection|\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranch|\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\GitHubEnterprise\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\GitHubEnterprise\Schema\StatusCheckPolicy|\ApiClients\Client\GitHubEnterprise\Schema\BranchRestrictionPolicy|\ApiClients\Client\GitHubEnterprise\Schema\CheckRun|\ApiClients\Client\GitHubEnterprise\Schema\CheckSuite|\ApiClients\Client\GitHubEnterprise\Schema\CheckSuitePreference|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAlert|\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysis|\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningDefaultSetup|\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningDefaultSetupUpdateResponse|\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\GitHubEnterprise\Schema\CodeScanningSarifsStatus|\ApiClients\Client\GitHubEnterprise\Schema\CodeownersErrors|\ApiClients\Client\GitHubEnterprise\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\GitHubEnterprise\Schema\CommitComment|\ApiClients\Client\GitHubEnterprise\Schema\Commit|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\CombinedCommitStatus|\ApiClients\Client\GitHubEnterprise\Schema\CommitComparison|\ApiClients\Client\GitHubEnterprise\Schema\ContentDirectory|\ApiClients\Client\GitHubEnterprise\Schema\ContentFile|\ApiClients\Client\GitHubEnterprise\Schema\ContentSymlink|\ApiClients\Client\GitHubEnterprise\Schema\ContentSubmodule|\ApiClients\Client\GitHubEnterprise\Schema\FileCommit|\ApiClients\Client\GitHubEnterprise\Schema\DependabotAlert|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\DependabotSecret|\ApiClients\Client\GitHubEnterprise\Schema\DependencyGraphSpdxSbom|\ApiClients\Client\GitHubEnterprise\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created|\ApiClients\Client\GitHubEnterprise\Schema\Deployment|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\DeploymentStatus|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Environment|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\DeploymentBranchPolicy|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\DeploymentProtectionRule|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\ShortBlob|\ApiClients\Client\GitHubEnterprise\Schema\Blob|\ApiClients\Client\GitHubEnterprise\Schema\GitCommit|\ApiClients\Client\GitHubEnterprise\Schema\GitRef|\ApiClients\Client\GitHubEnterprise\Schema\GitTag|\ApiClients\Client\GitHubEnterprise\Schema\GitTree|\ApiClients\Client\GitHubEnterprise\Schema\Hook|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\RepositoryInvitation|\ApiClients\Client\GitHubEnterprise\Schema\Issue|\ApiClients\Client\GitHubEnterprise\Schema\IssueComment|\ApiClients\Client\GitHubEnterprise\Schema\IssueEvent|\ApiClients\Client\GitHubEnterprise\Schema\DeployKey|\ApiClients\Client\GitHubEnterprise\Schema\Label|\ApiClients\Client\GitHubEnterprise\Schema\Language|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\LicenseContent|\ApiClients\Client\GitHubEnterprise\Schema\MergedUpstream|\ApiClients\Client\GitHubEnterprise\Schema\Milestone|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Page|\ApiClients\Client\GitHubEnterprise\Schema\PageBuildStatus|\ApiClients\Client\GitHubEnterprise\Schema\PageBuild|\ApiClients\Client\GitHubEnterprise\Schema\PageDeployment|\ApiClients\Client\GitHubEnterprise\Schema\RepositoryPreReceiveHook|\ApiClients\Client\GitHubEnterprise\Schema\PullRequest|\ApiClients\Client\GitHubEnterprise\Schema\PullRequestReviewComment|\ApiClients\Client\GitHubEnterprise\Schema\PullRequestMergeResult|\ApiClients\Client\GitHubEnterprise\Schema\PullRequestReviewRequest|\ApiClients\Client\GitHubEnterprise\Schema\PullRequestSimple|\ApiClients\Client\GitHubEnterprise\Schema\PullRequestReview|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Release|\ApiClients\Client\GitHubEnterprise\Schema\ReleaseAsset|\ApiClients\Client\GitHubEnterprise\Schema\ReleaseNotesContent|\ApiClients\Client\GitHubEnterprise\Schema\SecretScanningAlert|\ApiClients\Client\GitHubEnterprise\Schema\Stargazer|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\ParticipationStats|\ApiClients\Client\GitHubEnterprise\Schema\Status|\ApiClients\Client\GitHubEnterprise\Schema\RepositorySubscription|\ApiClients\Client\GitHubEnterprise\Schema\TagProtection|\ApiClients\Client\GitHubEnterprise\Schema\Topic|\ApiClients\Client\GitHubEnterprise\Schema\MinimalRepository|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseGroupList|\ApiClients\Client\GitHubEnterprise\Schema\GroupResponse|\ApiClients\Client\GitHubEnterprise\Schema\ScimEnterpriseUserList|\ApiClients\Client\GitHubEnterprise\Schema\UserResponse|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\ConfigurationStatus|\ApiClients\Client\GitHubEnterprise\Schema\MaintenanceStatus|\ApiClients\Client\GitHubEnterprise\Schema\EnterpriseSettings|\ApiClients\Client\GitHubEnterprise\Schema\PrivateUser|\ApiClients\Client\GitHubEnterprise\Schema\PublicUser|\ApiClients\Client\GitHubEnterprise\Schema\GpgKey|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubEnterprise\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubEnterprise\Schema\Key|\ApiClients\Client\GitHubEnterprise\Schema\SshSigningKey|\ApiClients\Client\GitHubEnterprise\Schema\Hovercard|\ApiClients\Client\GitHubEnterprise\Schema\StarredRepository|\ApiClients\Client\GitHubEnterprise\Schema\Repository
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
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Get\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Six::class] = new Internal\Router\Get\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Get\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Two::class] = new Internal\Router\Get\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Get\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Get\Five::class] = new Internal\Router\Get\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Get\Five::class]->call($call, $params, $pathChunks);
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
            }
        } elseif ($method === 'LIST') {
            if ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\List\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Three::class] = new Internal\Router\List\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\List\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Two::class] = new Internal\Router\List\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\List\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Four::class] = new Internal\Router\List\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Four::class]->call($call, $params, $pathChunks);
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
        } elseif ($method === 'POST') {
            if ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Post\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Three::class] = new Internal\Router\Post\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Post\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Five::class] = new Internal\Router\Post\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Post\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Six::class] = new Internal\Router\Post\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Post\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Four::class] = new Internal\Router\Post\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Post\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Two::class] = new Internal\Router\Post\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Two::class]->call($call, $params, $pathChunks);
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
        } elseif ($method === 'STREAM') {
            if ($pathChunksCount === 5) {
                if (\array_key_exists(Internal\Router\Stream\Five::class, $this->router) === false) {
                    $this->router[Internal\Router\Stream\Five::class] = new Internal\Router\Stream\Five(routers: $this->routers);
                }

                return $this->router[Internal\Router\Stream\Five::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
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
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Put\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Six::class] = new Internal\Router\Put\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Put\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Seven::class] = new Internal\Router\Put\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Put\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Put\Eight::class] = new Internal\Router\Put\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Put\Eight::class]->call($call, $params, $pathChunks);
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
