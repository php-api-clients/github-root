<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHubAE;

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
        $browser                 = $browser->withBase('https://{hostname}/api/v3')->withFollowRedirects(false);
        $requestSchemaValidator  = new SchemaValidator(SchemaValidator::VALIDATE_AS_REQUEST);
        $responseSchemaValidator = new SchemaValidator(SchemaValidator::VALIDATE_AS_RESPONSE);
        $hydrators               = new Internal\Hydrators();
        $this->operations        = new Operations(new Internal\Operators(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators));
        $this->webHooks          = new WebHooks(requestSchemaValidator: $requestSchemaValidator, hydrator: $hydrators);
        $this->routers           = new Internal\Routers(browser: $browser, authentication: $authentication, requestSchemaValidator: $requestSchemaValidator, responseSchemaValidator: $responseSchemaValidator, hydrators: $hydrators);
    }

    // phpcs:disable
    public function call(string $call, array $params = []): \ApiClients\Client\GitHubAE\Schema\Root|iterable|\ApiClients\Client\GitHubAE\Schema\GlobalHook|\ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody|\ApiClients\Client\GitHubAE\Schema\GlobalHook2|\ApiClients\Client\GitHubAE\Schema\OrganizationSimple|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\UpdateOrgName\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironment|\ApiClients\Client\GitHubAE\Schema\PreReceiveEnvironmentDownloadStatus|\ApiClients\Client\GitHubAE\Schema\Authorization|\ApiClients\Client\GitHubAE\Schema\Integration|\ApiClients\Client\GitHubAE\Schema\WebhookConfig|\ApiClients\Client\GitHubAE\Schema\HookDelivery|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Installation|\ApiClients\Client\GitHubAE\Schema\InstallationToken|\ApiClients\Client\GitHubAE\Schema\CodeOfConduct|\ApiClients\Client\GitHubAE\Schema\Operations\Emojis\Get\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Announcement|\ApiClients\Client\GitHubAE\Schema\LicenseInfo|\ApiClients\Client\GitHubAE\Schema\EnterpriseOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseCommentOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseGistOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseHookOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseIssueOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseMilestoneOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseOrganizationOverview|\ApiClients\Client\GitHubAE\Schema\EnterprisePageOverview|\ApiClients\Client\GitHubAE\Schema\EnterprisePullRequestOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseRepositoryOverview|\ApiClients\Client\GitHubAE\Schema\EnterpriseUserOverview|\ApiClients\Client\GitHubAE\Schema\ActionsEnterprisePermissions|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\SelectedActions|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\RunnerGroupsEnterprise|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\AuthenticationToken|\ApiClients\Client\GitHubAE\Schema\Runner|\ApiClients\Client\GitHubAE\Schema\Feed|\ApiClients\Client\GitHubAE\Schema\GistSimple|\ApiClients\Client\GitHubAE\Schema\GistComment|\ApiClients\Client\GitHubAE\Schema\BaseGist|\ApiClients\Client\GitHubAE\Schema\GitignoreTemplate|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListReposAccessibleToInstallation\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\License|string|\ApiClients\Client\GitHubAE\Schema\ApiOverview|\ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkNotificationsAsRead\Response\ApplicationJson\Accepted|\ApiClients\Client\GitHubAE\Schema\Thread|\ApiClients\Client\GitHubAE\Schema\ThreadSubscription|\Psr\Http\Message\ResponseInterface|\ApiClients\Client\GitHubAE\Schema\OrganizationFull|\ApiClients\Client\GitHubAE\Schema\ActionsOrganizationPermissions|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\ActionsGetDefaultWorkflowPermissions|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\RunnerGroupsOrg|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\ActionsPublicKey|\ApiClients\Client\GitHubAE\Schema\OrganizationActionsSecret|\ApiClients\Client\GitHubAE\Schema\EmptyObject|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\ExternalGroup|\ApiClients\Client\GitHubAE\Schema\ExternalGroups|\ApiClients\Client\GitHubAE\Schema\OrgHook|\ApiClients\Client\GitHubAE\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\OrgMembership|\ApiClients\Client\GitHubAE\Schema\Migration|\ApiClients\Client\GitHubAE\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Project|\ApiClients\Client\GitHubAE\Schema\Repository|\ApiClients\Client\GitHubAE\Schema\TeamFull|\ApiClients\Client\GitHubAE\Schema\TeamDiscussion|\ApiClients\Client\GitHubAE\Schema\TeamDiscussionComment|\ApiClients\Client\GitHubAE\Schema\Reaction|\ApiClients\Client\GitHubAE\Schema\TeamMembership|\ApiClients\Client\GitHubAE\Schema\TeamProject|\ApiClients\Client\GitHubAE\Schema\TeamRepository|\ApiClients\Client\GitHubAE\Schema\ProjectCard|\ApiClients\Client\GitHubAE\Schema\Operations\Projects\MoveCard\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubAE\Schema\ProjectColumn|\ApiClients\Client\GitHubAE\Schema\Operations\Projects\MoveColumn\Response\ApplicationJson\Created\Application\Json|\ApiClients\Client\GitHubAE\Schema\ProjectCollaboratorPermission|\ApiClients\Client\GitHubAE\Schema\RateLimitOverview|\ApiClients\Client\GitHubAE\Schema\FullRepository|\ApiClients\Client\GitHubAE\Schema\BasicError|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Artifact|\ApiClients\Client\GitHubAE\Schema\Job|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\ActionsRepositoryPermissions|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\WorkflowRun|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\WorkflowRunUsage|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\ActionsSecret|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Workflow|\ApiClients\Client\GitHubAE\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\WorkflowUsage|\ApiClients\Client\GitHubAE\Schema\Autolink|\ApiClients\Client\GitHubAE\Schema\BranchWithProtection|\ApiClients\Client\GitHubAE\Schema\BranchProtection|\ApiClients\Client\GitHubAE\Schema\ProtectedBranch|\ApiClients\Client\GitHubAE\Schema\ProtectedBranchAdminEnforced|\ApiClients\Client\GitHubAE\Schema\ProtectedBranchPullRequestReview|\ApiClients\Client\GitHubAE\Schema\StatusCheckPolicy|\ApiClients\Client\GitHubAE\Schema\BranchRestrictionPolicy|\ApiClients\Client\GitHubAE\Schema\CheckRun|\ApiClients\Client\GitHubAE\Schema\CheckSuite|\ApiClients\Client\GitHubAE\Schema\CheckSuitePreference|\ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\CodeScanningAlert|\ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysis|\ApiClients\Client\GitHubAE\Schema\CodeScanningAnalysisDeletion|\ApiClients\Client\GitHubAE\Schema\CodeScanningSarifsReceipt|\ApiClients\Client\GitHubAE\Schema\CodeScanningSarifsStatus|\ApiClients\Client\GitHubAE\Schema\CodeownersErrors|\ApiClients\Client\GitHubAE\Schema\RepositoryCollaboratorPermission|\ApiClients\Client\GitHubAE\Schema\CommitComment|\ApiClients\Client\GitHubAE\Schema\Commit|\ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\CombinedCommitStatus|\ApiClients\Client\GitHubAE\Schema\CommitComparison|\ApiClients\Client\GitHubAE\Schema\ContentDirectory|\ApiClients\Client\GitHubAE\Schema\ContentFile|\ApiClients\Client\GitHubAE\Schema\ContentSymlink|\ApiClients\Client\GitHubAE\Schema\ContentSubmodule|\ApiClients\Client\GitHubAE\Schema\FileCommit|\ApiClients\Client\GitHubAE\Schema\Deployment|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\DeploymentStatus|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Environment|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\DeploymentBranchPolicy|\ApiClients\Client\GitHubAE\Schema\ShortBlob|\ApiClients\Client\GitHubAE\Schema\Blob|\ApiClients\Client\GitHubAE\Schema\GitCommit|\ApiClients\Client\GitHubAE\Schema\GitRef|\ApiClients\Client\GitHubAE\Schema\GitTag|\ApiClients\Client\GitHubAE\Schema\GitTree|\ApiClients\Client\GitHubAE\Schema\Hook|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\RepositoryInvitation|\ApiClients\Client\GitHubAE\Schema\Issue|\ApiClients\Client\GitHubAE\Schema\IssueComment|\ApiClients\Client\GitHubAE\Schema\IssueEvent|\ApiClients\Client\GitHubAE\Schema\DeployKey|\ApiClients\Client\GitHubAE\Schema\Label|\ApiClients\Client\GitHubAE\Schema\Language|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\EnableLfsForRepo\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\LicenseContent|\ApiClients\Client\GitHubAE\Schema\MergedUpstream|\ApiClients\Client\GitHubAE\Schema\Milestone|\ApiClients\Client\GitHubAE\Schema\Operations\Activity\MarkRepoNotificationsAsRead\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Page|\ApiClients\Client\GitHubAE\Schema\PageBuildStatus|\ApiClients\Client\GitHubAE\Schema\PageBuild|\ApiClients\Client\GitHubAE\Schema\PullRequest|\ApiClients\Client\GitHubAE\Schema\PullRequestReviewComment|\ApiClients\Client\GitHubAE\Schema\PullRequestMergeResult|\ApiClients\Client\GitHubAE\Schema\PullRequestReviewRequest|\ApiClients\Client\GitHubAE\Schema\PullRequestSimple|\ApiClients\Client\GitHubAE\Schema\PullRequestReview|\ApiClients\Client\GitHubAE\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Release|\ApiClients\Client\GitHubAE\Schema\ReleaseAsset|\ApiClients\Client\GitHubAE\Schema\SecretScanningAlert|\ApiClients\Client\GitHubAE\Schema\SimpleUser|\ApiClients\Client\GitHubAE\Schema\Stargazer|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|\ApiClients\Client\GitHubAE\Schema\ParticipationStats|\ApiClients\Client\GitHubAE\Schema\Status|\ApiClients\Client\GitHubAE\Schema\RepositorySubscription|\ApiClients\Client\GitHubAE\Schema\Topic|\ApiClients\Client\GitHubAE\Schema\MinimalRepository|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Code\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Commits\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Labels\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Repos\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Topics\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Operations\Search\Users\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\PrivateUser|\ApiClients\Client\GitHubAE\Schema\PublicUser|\ApiClients\Client\GitHubAE\Schema\GpgKey|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationsForAuthenticatedUser\Response\ApplicationJson\Ok\Application\Json|\ApiClients\Client\GitHubAE\Schema\Operations\Apps\ListInstallationReposForAuthenticatedUser\Response\ApplicationJson\Ok|\ApiClients\Client\GitHubAE\Schema\Key|\ApiClients\Client\GitHubAE\Schema\Hovercard|\ApiClients\Client\GitHubAE\Schema\StarredRepository
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
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\List\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\List\Seven::class] = new Internal\Router\List\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\List\Seven::class]->call($call, $params, $pathChunks);
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
            } elseif ($pathChunksCount === 4) {
                if (\array_key_exists(Internal\Router\Post\Four::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Four::class] = new Internal\Router\Post\Four(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Four::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Post\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Six::class] = new Internal\Router\Post\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Six::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 2) {
                if (\array_key_exists(Internal\Router\Post\Two::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Two::class] = new Internal\Router\Post\Two(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Two::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 8) {
                if (\array_key_exists(Internal\Router\Post\Eight::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Eight::class] = new Internal\Router\Post\Eight(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Eight::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 10) {
                if (\array_key_exists(Internal\Router\Post\Ten::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Ten::class] = new Internal\Router\Post\Ten(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Ten::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 7) {
                if (\array_key_exists(Internal\Router\Post\Seven::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Seven::class] = new Internal\Router\Post\Seven(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Seven::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 9) {
                if (\array_key_exists(Internal\Router\Post\Nine::class, $this->router) === false) {
                    $this->router[Internal\Router\Post\Nine::class] = new Internal\Router\Post\Nine(routers: $this->routers);
                }

                return $this->router[Internal\Router\Post\Nine::class]->call($call, $params, $pathChunks);
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
            } elseif ($pathChunksCount === 3) {
                if (\array_key_exists(Internal\Router\Patch\Three::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Three::class] = new Internal\Router\Patch\Three(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Three::class]->call($call, $params, $pathChunks);
            } elseif ($pathChunksCount === 6) {
                if (\array_key_exists(Internal\Router\Patch\Six::class, $this->router) === false) {
                    $this->router[Internal\Router\Patch\Six::class] = new Internal\Router\Patch\Six(routers: $this->routers);
                }

                return $this->router[Internal\Router\Patch\Six::class]->call($call, $params, $pathChunks);
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
